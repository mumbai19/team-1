<?php
require_once("config.php");

$connection=mysqli_connect(SERVER,USER,PASSWORD,DB);
if(!$connection)
{
    die("Some issues in connection! ".mysqli_error($connection));
}
?>