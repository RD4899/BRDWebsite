<?
// $strServer="localhost";   
// $strDatabase="divdigitalbrd";   // CHANGE TO YOUR DATABASE NAME HERE
// $strUser="root";    
// $strPwd="";    // Leave blank for WAMPServer

// $link=mysqli_connect(m$strServer,$strUser,$strPwd,$strDatabase)or die("Could not open database");

$user = 'root';
$password = 'root';
$db = 'divdigitalbrd';
$host = 'localhost';
$port = 8080;

$link = mysqli_connect($host, $user, $password, $db, $port)or die("Could not open database");

// $link = mysqli_init();
// $con = mysqli_real_connect(
//    $link,
//    $host,
//    $user,
//    $password,
//    $db,
//    $port
// )or die("Could not open database");
?>

