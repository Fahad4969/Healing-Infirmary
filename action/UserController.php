<?php
$err_db="";
$hasError=false;
$host='localhost';
$username='root';
$password='';
$dbname = "healing-infirmary";
$conn=mysqli_connect($host,$username,$password,"$dbname");
if(!$conn)
    {
      die('Could not Connect MySql Server:' .mysql_error());
    }

    if (isset($_POST["delete_doctor"])) 
    {
    if(!$hasError){
    $rs = deleteDoctor($_GET["id"]);
    if ($rs === true){
        header("Location: view-doctor-profile.php");
    }
    $err_db = $rs;
    
    }
    }
    
    function deleteDoctor($id){
        $query = "delete from doctor_reg where id = $id";
        return execute($query);
    
    }

?>