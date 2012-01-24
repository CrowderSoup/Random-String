<?php

   function assign_rand_value($num)
   {
      // accepts 1 - 36
      switch($num)
      {
         case "1":
            $rand_value = "A";
            break;
         case "2":
            $rand_value = "B";
            break;
         case "3":
            $rand_value = "C";
            break;
         case "4":
            $rand_value = "D";
            break;
         case "5":
            $rand_value = "E";
            break;
         case "6":
            $rand_value = "F";
            break;
         case "7":
            $rand_value = "G";
            break;
         case "8":
            $rand_value = "H";
            break;
         case "9":
            $rand_value = "I";
            break;
         case "10":
            $rand_value = "J";
            break;
         case "11":
            $rand_value = "K";
            break;
         case "12":
            $rand_value = "L";
            break;
         case "13":
            $rand_value = "M";
            break;
         case "14":
            $rand_value = "N";
            break;
         case "15":
            $rand_value = "O";
            break;
         case "16":
            $rand_value = "P";
            break;
         case "17":
            $rand_value = "Q";
            break;
         case "18":
            $rand_value = "R";
            break;
         case "19":
            $rand_value = "S";
            break;
         case "20":
            $rand_value = "T";
            break;
         case "21":
            $rand_value = "U";
            break;
         case "22":
            $rand_value = "V";
            break;
         case "23":
            $rand_value = "W";
            break;
         case "24":
            $rand_value = "X";
            break;
         case "25":
            $rand_value = "Y";
            break;
         case "26":
            $rand_value = "Z";
            break;
         case "27":
            $rand_value = "0";
            break;
         case "28":
            $rand_value = "1";
            break;
         case "29":
            $rand_value = "2";
            break;
         case "30":
            $rand_value = "3";
            break;
         case "31":
            $rand_value = "4";
            break;
         case "32":
            $rand_value = "5";
            break;
         case "33":
            $rand_value = "6";
            break;
         case "34":
            $rand_value = "7";
            break;
         case "35":
            $rand_value = "8";
            break;
         case "36":
            $rand_value = "9";
            break;
      }
      return $rand_value;
   }
   
   function get_rand_id($length)
   {
      $rand_id="";
      if($length>0) 
      { 
         for($i=1; $i<=$length; $i++)
         {
            mt_srand((double)microtime() * 1000000);
            $num = mt_rand(1,36);
            $rand_id .= assign_rand_value($num);
         }
      }
      return $rand_id;
   }
   
   $rand_str = "";
   $len = 16;
   if($_GET['len'] != null)
   {
      $len = $_GET['len'];
   }
   
   $rand_str = get_rand_id($len);
   echo ($rand_str);
?>