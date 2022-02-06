<?
$server = "	sql201.epizy.com";
$username = "epiz_31001512";
$password = "H3dlPldZDSiW";
$dbname = "epiz_31001512_taskphp";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn)
{
    die("Connection failed : ". mysqli_connect_error());
}