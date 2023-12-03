<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Danh sách chuyến bay được đặt</h3>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>User_ID</th>
                                <th>Name</th>
                                <th>Sex</th>
                                <th>CCCD</th>
                                <th>Birth</th>
                                <th>Flight_ID</th>
                                <th>Seat_Number</th>
                                <th>Booking_Date</th>
                                <th>Total_Price</th>
                                <th>Ticket</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($listbook as $book) {
                            extract($book);
                            $births = date("d/m/Y", strtotime($birth));
                            echo '<tr>
                                    <td>' . $User_ID . '</td>
                                    <td>' . $Name . '</td>
                                    <td>' . $Sex . '</td>
                                    <td>' . $CCCD . '</td> 
                                    <td>' . $births . '</td> 
                                    <td>' . $Flight_ID . '</td>
                                    <td>' . $Seat_Number . '</td>
                                    <td>' . $Booking_Date . '</td>
                                    <td>' . $Total_Price . '</td>
                                    <td>' . $Ticket . '</td>
                                 </tr>';
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
</main>