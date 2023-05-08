<?php
    $conn = mysqli_connect('localhost', 'growth_admin', '+4!XGI_+;;%P','growth_empire_marketing');
    if(mysqli_connect_error()) {
        echo "<script>alert('Connection Error');</script>";
        exit();
    }