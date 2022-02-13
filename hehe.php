<?php
    $sequence = array();
    function reverseSeq ($n) {
        if ($n < 1){
            return $sequence;
        } else {
            
            return reverseSeq($n - 1);
        };
       
    };
    echo reverseSeq(5);
?>