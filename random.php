<?php
    function assign_rand_value($num)
    {
        $str_vault = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*";
        return substr($str_vault, $num, 1);
    }
    
    function get_rand_id($length)
    {
        $rand_id = "";
        if($length > 0) {
             
            for($i = 1; $i <= $length; $i++) {
                mt_srand((double)microtime() * 1000000);
                $num = mt_rand(1, 69);
                $rand_id .= assign_rand_value($num);
            }
        }
        return $rand_id;
    }
    
    echo (get_rand_id((($_GET != null) ? $_GET['len'] : 16 )));
?>