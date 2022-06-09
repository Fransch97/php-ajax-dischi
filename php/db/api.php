<?php

    require_once __DIR__. '/db-disc.php';

    
    header('Content-type: application/json');
    if(!$_GET['author'] && !$_GET['genre']){

        echo json_encode($discs);
    }else if( $_GET['author'] && !$_GET['genre'] ){
        $return =[];
        foreach($discs as $disc){
            if($disc['author'] === $_GET['author']){
                $return[] = $disc;
            }
        }
        echo json_encode($return);

    }else if( !$_GET['author'] && $_GET['genre'] ){
        $return =[];
        foreach($discs as $disc){
            if($disc['genre'] === $_GET['genre']){
                $return[] = $disc;
            }
        }
        echo json_encode($return);

    }else if( $_GET['author'] && $_GET['genre'] ){
        $return =[];
        foreach($discs as $disc){
            if($disc['genre'] === $_GET['genre'] && $disc['author'] === $_GET['author']){
                $return[] = $disc;
            }
        }
        echo json_encode($return);

    }