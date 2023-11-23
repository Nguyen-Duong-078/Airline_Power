<style>
    table {
        width: 100%;
        text-align: center;
    }

    thead th {
        padding: 10px;
        background: red;
    }

    tr td {
        padding: 10px;
        border: 1px solid #C0C0C0;
    }

    .flight h3,
    .flight h4 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: center;
    }

    .flight h4 {
        color: red;
    }

    .flight strong {
        color: black;
    }

    .book {
        background: linear-gradient(26.73deg, #F9A51A 13.7%, #FBB612 29.8%, #FFDD00 66.81%);
        padding: 5px 15px;
        border-radius: 8px;
        font-weight: bold;
    }

    .book:hover {
        background: linear-gradient(100deg, #fa5b7d, #6882fa);
        color: #fff;
    }
</style>
<section class="account-section bg--gray ptb-40">
    <div class="row justify-content-center">
        <div class="">
            <div class="section-header flight">
                <h3 class="section-title">Kết quả tìm kiếm chuyến bay</h3> <br>
                <h4><?= $Start_City ?> <strong>➥</strong> <?= $Arrival_City ?> </h4>
            </div>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Flight_Number</th>
                <th>Start_City</th>
                <th>Arrival_City</th>
                <th>Departure_Time</th>
                <th>Arrival_Time</th>
                <th>Price</th>
                <th>Đặt Chuyến</th>
            </tr>
        </thead>

        <?php
        foreach ($search_flight as $flight) {
            extract($flight);
            echo '<tr>
           <td>' . $Flight_Number . '</td>
           <td>' . $Start_City . '</td>
           <td>' . $Arrival_City . '</td> 
           <td>' . $Departure_Time . '</td>
           <td>' . $Arrival_Time . '</td>
           <td>' . $Price . '</td>
           <td> <a href="index.php?action=book&ID=' . $Flight_ID . '" class="book">Chọn</a></td>
                 </tr>';
        }
        ?>
    </table>
</section>