<?php 
session_start();
require_once("dbcontroller.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ชำระเงิน</title>
    <link rel="stylesheet" href="style1.css">
    

    
</head>
<body>

<!-- <div class=body>
         <div id="content"><p></p></div>
     </div> -->
<div class="homeheader">
        <h2>ช่องทางการชำระเงิน</h2>
    </div>
<!-- <TITLE> ช่องทางการชำระเงิน</TITLE>
<body background="product-images/009.jpg"> -->

    <form action="save.php"  method="post">
        <input type="radio" required name="pay" value="1">ปลายทาง<br>
        <!-- <input type="radio" name="pay" value="2" checked>บัตรเครดิต<br> -->
        <!-- <button type="submit">ชำระเงิน</button> -->
        <a id="ok" href="confirm_order.php">ชำระเงิน</a><td?></td>
    </form>

</body>
</็>
