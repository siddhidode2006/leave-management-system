<?php    include 'templates/header.php'?>

<?php
// queries for database 


//$user = 'select * from users';
//$result = $conn->query($user);
//echo "<pre>";

/*print_r($result);
echo "<pre>";
print_r($result->fetch_assoc());
die;*/

/*$sql = "INSERT INTO `users`(`full_name`, `username`, `email`, `password`, `role_id`, `department_id`, `phone`, `address`,
 `dob`, `gender`, `status`) VALUES ('Rasika patil','rasika13','rasika24@gamil.com',
'patil13','1','1','3454323456','shirala','19-03-2006','Female','1')";


if($conn->query($sql)===TRUE)
{
    echo "Record inserted successfully";
}
else{
    echo "Record is not inserted";
}*/

/*$sql = "UPDATE `users` SET `full_name`='Rasika mahesh patil'  WHERE id=6";
if($conn->query($sql)===TRUE)
{
    echo "Record updated successfully";
}
else{
    echo "Record is not update";
}*/
//if ($_SERVER["REQUEST_METHOD"] == "POST") {}
/*
$username = $_POST['username'];
$password = $_POST['password'];


$user ="SELECT * from users  WHERE  `username`='$username' AND `password` ='$password'";

$result = $conn->query($user);
echo "<pre>";
print_r($result->fetch_assoc());
die;
*/
?>

<section class="hero-banner d-flex align-items-center justify-content-center" >
    <div class="container text-center ">
        <h1>Leave Management System</h1>
        <h5>My School project</h5>

        <button class="btn btn-primary"><a class="text-white"href="login.php">login<a></button>
    </div>
</section>



<?php  include 'templates/footer.php' ?>