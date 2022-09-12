<?php
    $time_input = strtotime($_GET['date']); 
    $date_input = getDate($time_input);
    $date = strtotime($date_input['mday'] . " " . $date_input['month'] . " ". $date_input['year']);
    $christmas = strtotime('December 25 2022');
    $days = ceil(($christmas - $date)/(60*60*24));
    echo json_encode($days);
?>