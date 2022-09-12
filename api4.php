<?php
    date_default_timezone_set('Asia/Beirut');
    $date_today = time();
    $christmas = strtotime('December 25');
    $days = ceil(($christmas - $date_today)/(60*60*24));
    echo json_encode($days);
?>