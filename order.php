<?php
session_start();
include("dbcontroller.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Checkout</title>
</head>

<body>
	<form id="frmcart" name="frmcart" method="post" action="order.php">
		
			
			

		
		<table border="0" cellspacing="0" align="center">
			<tr>
				<td colspan="2" bgcolor="#CCCCCC">รายละเอียดในการติดต่อ</td>
			</tr>
			<tr>
				<td bgcolor="#EEEEEE">ชื่อ</td>
				<td><input name="name" id="" type="text" required /></td>
			</tr>
			<tr>
				<td width="22%" bgcolor="#EEEEEE">ที่อยู่</td>
				<td width="78%">
					<input name="address" id="" cols="35" rows="5" required>
				</td>
			</tr>
			<tr>
				<td bgcolor="#EEEEEE">อีเมล</td>
				<td><input name="email" type="email" required /></td>
			</tr>
			<tr>
				<td bgcolor="#EEEEEE">เบอร์ติดต่อ</td>
				<td><input name="phone" id="" type="text" required /></td>
			</tr>
			<tr>
				<td colspan="2" align="center" bgcolor="#CCCCCC">
					<input type="submit" name="ordersave.php" value="สั่งซื้อ" />
				</td>
			</tr>
		</table>
	</form>
</body>

</html>