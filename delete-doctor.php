<head>
<title>Admin Dashboard | Healing Infirmary</title>
<link rel="icon" href="assets/img/mlogo.png">
</head>
<?php

$host='localhost';
$username='root';
$password='';
$dbname = "healing-infirmary";
$conn=mysqli_connect($host,$username,$password,"$dbname");

$id = $_GET['id'];

$deletequery = "DELETE FROM doctor_reg WHERE id = $id";

$query = mysqli_query($conn,$deletequery);

if($query){
?>
    <script>
       alert("Deleted Successfully");
    </script>
<?php
}else{
    ?>
        <script>
           alert("Not Deleted");
        </script>
    <?php
    }


header('location:view-doctor-profile.php');

?>

