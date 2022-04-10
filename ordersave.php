<?php
// เชื่อมต่อฐานข้อมูล
session_start();
require_once("dbcontroller.php");

// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$name=$_POST["name"]; 
$address= $_POST["address"];
$email=$_POST["email"];
$phone=$_POST["phone"];

$emskill=implode(",",$_POST["skills"]); // array=> string

// บันทึกข้อมูล
$sql = "INSERT INTO order(name,address,email,phone) VALUES('$name','$address','$email','$phone')";

$result=mysqli_query($conn,$sql); // สั่งรันคำสั่ง sql

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo mysqli_errno($conn);
}

?>
