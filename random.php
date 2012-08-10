<?php
    function get_rand_str($length)
    {
        $chars = array_merge(range('a','z'), range('A','Z'), array('!','@','#','$','%','&','*'));
        $length = intval($length) > 0 ? intval($length) : 16;
        $max = count($chars) - 1;
        $str = "";
    
        while($length--) {
            shuffle($chars);
            $rand = mt_rand(0, $max);
            $str .= $chars[$rand];
        }
        return $str;
    }
    
    echo (get_rand_str($_GET['len']));
?>