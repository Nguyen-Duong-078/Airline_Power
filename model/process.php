<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedDate = $_POST["datepicker-input"];
    $formattedDate = date("d/m/Y", strtotime($selectedDate));
}
