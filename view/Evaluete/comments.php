<?php
session_start();
$ID_user = $_SESSION['username']['User_ID'];
include "../../model/pdo.php";
include "../../model/Evaluate.php";
$idpro = $_REQUEST['idpro'];
$list_comment = loadAll_comment($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .conent_bl {
            width: 786px;
            margin-top: 30px;
            border: 1px solid #ccc;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
            border-bottom: none;
        }

        .conent_bl table {
            border-collapse: collapse;
            width: 100%;
        }

        .conent_bl table th {
            padding: 5px;
        }

        .conent_bl table th:nth-child(1) {
            width: 10%;
        }

        .conent_bl table td {
            padding: 10px 15px;
        }

        .conent_bl table td:nth-child(1) {
            width: 10%;
        }

        .conent_bl table td:nth-child(2) {
            width: 30%;
        }

        .conent_bl table td:nth-child(3) {
            width: 30%;
        }

        .titles {
            color: black;
            font-weight: bold;
            padding: 10px;
            background-color: #EEE;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            border-bottom: 1px solid #ccc;
            border-left: 1px solid#ccc;
            border-right: 1px solid#ccc;
            margin-bottom: -20px;
        }

        .titles input[type='text'] {
            padding: 10px;
            width: 650px;
            border-radius: 10px;
        }

        .titles input[type='submit'] {
            padding: 5px;
            width: 70px;
            border-radius: 10px;
            border: 1px solid blue;
            margin-left: 40px;
            background: blue;
            font-weight: bold;
            color: #fff;
            cursor: pointer;
            transition: .3s linear;
        }

        .titles input[type='submit']:hover {
            background: red;
            border: 1px solid red;

        }
    </style>
</head>

<body>
    <div class="row magin ">
        <div class="conent_bl">
            <table>
                <tr>
                    <th>User</th>
                    <th>Blog_ID</th>
                    <th>Comment</th>
                    <th>Date</th>
                </tr>
            </table>
            <table>
                <?php
                foreach ($list_comment as $comment) {
                    extract($comment);
                    echo  '<tr>
                <td>' . $ID_user . '</td>
                <td>' . $idpro . '</td>
                <td>' . $Comment . '</td>
                <td>' . $Evaluate_Date . '</td>
                </tr>';
                }
                ?>
            </table>
        </div>
        <div class="footer_comments">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="hidden" name="User_ID" value="<?= $ID_user ?>">
                <div class="titles">
                    <input name="msg" type="text" placeholder="Viết bình luận">
                    <input name="guibl" type="submit" value="Gửi">
                </div>
            </form>
        </div>
        <?php
        if (isset($_POST['guibl']) && ($_POST['guibl'])) {
            $noidung = $_POST['msg'];
            $idpro = $_POST['idpro'];
            $ID_User = $_POST['User_ID'];
            $Evaluate_Date = date('H:i d/m/Y');
            inser_comment($noidung, $ID_User, $idpro, $Evaluate_Date);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>

    </div>
</body>

</html>