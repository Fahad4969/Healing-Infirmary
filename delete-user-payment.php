<?php

$host='localhost';
$username='root';
$password='';
$dbname = "healing-infirmary";
$conn=mysqli_connect($host,$username,$password,"$dbname");

$id = $_GET['id'];

$deletequery = "DELETE FROM user_payment WHERE id = $id";

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


header('location:user-payments-admin.php');

?>