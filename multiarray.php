<?php
mysql_connect("localhost","root","")or die('DB not connect');
mysql_select_db(test);
$qry="select * from products";
$rec=mysql_query($qry);
while($row=mysql_fetch_array($rec, MYSQL_ASSOC))
{  
$array[] = $row; 
}


function array_flatten($array, $preserve = FALSE, $r = array()){
        foreach($array as $key => $value){
            if (is_array($value)){
                foreach($value as $k => $v){
                    if (is_array($v)) { $tmp = $v; unset($value[$k]); }
                }
                if ($preserve) $r[$key] = $value;
                else $r[] = $value;
            }
        }
        $r = isset($tmp) ? array_flatten($tmp, $preserve, $r) : $r;
        return $r;
    }
$tmp=array_flatten($array);
    echo "<pre>";
	print_r($tmp);
	echo "<pre>";

?>