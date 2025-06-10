<?php 




@$con = mysql_connect("127.0.0.1", "root", "root"); 


if(!$con)
{
	die("error");
}

mysql_select_db("e-nursery system");

?>
