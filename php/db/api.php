<?php

    require_once __DIR__. '/db-disc.php';

    
    header('Content-type: application/json');
    echo json_encode($discs);