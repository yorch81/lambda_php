<?php
    // Get lambda event
    $eventRaw = $argv[1];
    $event = json_decode($eventRaw);
    
    $aMod = get_loaded_extensions();
    
    $aResp = array('EVENT_DATA' => $event, 'PHP_MODULES' => $aMod);
    
    echo json_encode($aResp);
?>