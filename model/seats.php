<?php
function insert_seats($Seat_Number, $Status, $Flights_seats)
{
    $sql = "INSERT INTO seats(Seat_Number,Status, Flights_seats) VALUES ('$Seat_Number','$Status','$Flights_seats')";
    pdo_execute($sql);
}

function loadAll_seats()
{
    $sql = "SELECT * FROM seats order by user_id desc";
    $list_seats = pdo_query($sql);
    return $list_seats;
}

function deleta_seats($ID)
{
    $sql = "DELETE FROM seats WHERE Seat_ID =" . $ID;
    pdo_execute($sql);
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airlines";

// Kết nối đến cơ sở dữ liệu
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Kết nối cơ sở dữ liệu thất bại: " . $e->getMessage();
    die();
}

// Hàm kiểm tra trạng thái ghế cho việc đặt hoặc hủy ghế
function checkSeatAvailability($seat, $conn, $forBooking = true)
{
    $query = "SELECT status, User_ID FROM seats WHERE seat_number = :seat";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':seat', $seat);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($forBooking) {
        return ($result['status'] == 'available');
    } else {
        // Kiểm tra xem người dùng hiện tại có phải là người đặt ghế hay không
        return ($result['status'] == 'booked' && $result['User_ID'] == $_SESSION['User_ID']);
    }
}

// Hàm để đặt hoặc hủy một ghế
function processSeat($seat, $action, $conn)
{
    if ($action == "book") {
        // Đặt ghế mới
        if (checkSeatAvailability($seat, $conn)) {
            // Kiểm tra xem người dùng đã đặt ghế chưa
            $userSeatQuery = "SELECT seat_number FROM seats WHERE User_ID = :user_id";
            $userSeatStmt = $conn->prepare($userSeatQuery);
            $userSeatStmt->bindParam(':user_id', $_SESSION['User_ID']);
            $userSeatStmt->execute();
            $userSeatResult = $userSeatStmt->fetch(PDO::FETCH_ASSOC);

            if (!$userSeatResult) {
                $updateQuery = "UPDATE seats SET status = 'booked', User_ID = :user_id WHERE seat_number = :seat";
                $updateStmt = $conn->prepare($updateQuery);
                $updateStmt->bindParam(':seat', $seat);
                $updateStmt->bindParam(':user_id', $_SESSION['User_ID']);
                $updateStmt->execute();
            } else {
                // $response['status'] = 'error';
                // $response['message'] = 'Bạn đã đặt một ghế rồi!';
            }
        }
    } elseif ($action == "cancel") {
        // Hủy ghế đã đặt
        if (checkSeatAvailability($seat, $conn, false)) {
            $query = "UPDATE seats SET status = 'available', User_ID = NULL WHERE seat_number = :seat";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':seat', $seat);
            $stmt->execute();

            $response['status'] = 'success';
            $response['message'] = 'Hủy ghế thành công!';
        }
    }
}

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['User_ID'])) {
    echo "Vui lòng đăng nhập trước khi đặt hoặc hủy vé.";
    header("location: View/login.php");
    exit();
}

// Kiểm tra xem người dùng đã gửi yêu cầu đặt hoặc hủy ghế chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["seat"], $_POST["action"])) {
        $seat = $_POST["seat"];
        $action = $_POST["action"];
        // Xử lý ghế dựa trên hành động của người dùng
        processSeat($seat, $action, $conn);
    }
}

// // Hiển thị tất cả các ghế
// $query = "SELECT Seat_number, status FROM seats WHERE Flights_seats";
// $stmt = $conn->prepare($query);
// $stmt->execute();
// $seats = $stmt->fetchAll(PDO::FETCH_ASSOC);

function getBookedSeats($user_id, $conn)
{
    $query = "SELECT seat_number FROM seats WHERE User_ID = :user_id AND status = 'booked'";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
    return $result;
}
