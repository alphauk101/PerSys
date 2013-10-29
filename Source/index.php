<?php
    include_once 'includes/perSys_commander.php';
    include_once 'includes/defines.php';
    
    $dac = new DatabaseAccessControl();
    
    $dac->connectToDatabase();
    $sql = "SELECT * FROM `" . $dac->table_COMPANY . "`;";

    $result = $dac->excuteCommand($sql);
    print_r(mysqli_fetch_row($result));
?>
