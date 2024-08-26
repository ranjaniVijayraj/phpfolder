<?php
$servername="localhost";
$username="root";
$password="ranjani26032002";
$dbname="coffee";

$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    die("connection failed: ".$conn->connect_error);
}
else
{
    echo "success". "<br>";
}
// $name=$_POST["name"];
// $email=$_POST["email"];
// $password1=$_POST["password1"];
// echo "nmae".$name."<br>";
$sql ="select * from cafe";
$result = $conn->query($sql);
// $sql = "INSERT INTO cafe (username, email, password1) VALUES ('$name', '$email', '$password1')";
if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        echo " ".$row["username"]." ".$row["email"]." ".$row["password1"];
    }
}
else
{
    echo "0 result"."<br>";
}
mysqli_close($conn);
?>