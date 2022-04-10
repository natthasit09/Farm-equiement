<?php
	session_start();
    // require_once("dbcontroller.php");
    // $db_handle = new DBController();
	
	// $p_id = $_GET['p_id']; 
	// $act = $_GET['act'];
 
	// if($act=='add' && !empty($p_id))
	// {
	// 	if(isset($_SESSION['cart'][$p_id]))
	// 	{
	// 		$_SESSION['cart'][$p_id]++;
	// 	}
	// 	else
	// 	{
	// 		$_SESSION['cart'][$p_id]=1;
	// 	}
	// }
 
	// if($act=='remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
	// {
	// 	unset($_SESSION['cart'][$p_id]);
	// }
 
	// if($act=='update')
	// {
	// 	$amount_array = $_POST['amount'];
	// 	foreach($amount_array as $p_id=>$amount)
	// 	{
	// 		$_SESSION['cart'][$p_id]=$amount;
	// 	}
	// }
    ?>
    <HTML>
    <HEAD>
    <TITLE>Simple PHP Shopping Cart</TITLE>
    <link href="style.css" type="text/css" rel="stylesheet" />
    </HEAD>
    <BODY>
    <div id="shopping-cart">
    <div class="txt-heading">Shopping Cart</div>
    <!-- <a id="ok" href="order1.php">OK order</a> -->
    <!-- <a id="ok" href="index.php?action=order.php">Ok order</a> -->
    <a id="btnEmpty" href="index2.php?action=empty">Empty Cart</a>
    
    
    <?php
    if(isset($_SESSION["cart_item"])){
        $total_quantity = 0;
        $total_price = 0;
    ?>	
    <table class="tbl-cart" cellpadding="10" cellspacing="1">
    <tbody>
    <tr>
    <th style="text-align:left;">Name</th>
    <th style="text-align:left;">Code</th>
    <th style="text-align:right;" width="5%">Quantity</th>
    <th style="text-align:right;" width="10%">Unit Price</th>
    <th style="text-align:right;" width="10%">Price</th>
    <th style="text-align:center;" width="5%">Remove</th>
    </tr>	
    <?php		
        foreach ($_SESSION["cart_item"] as $item){
            $item_price = $item["quantity"]*$item["price"];
            ?>
                    <tr>
                    <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["product"]; ?></td>
                    <td><?php echo $item["code"]; ?></td>
                    <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                    <td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
                    <td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
                    <td style="text-align:center;"><a href="index2.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
                    </tr>
                    <?php
                    $total_quantity += $item["quantity"];
                    $total_price += ($item["price"]*$item["quantity"]);
                    
            }
            ?>
     <!-- /*
     แสดงผลที่คำณวนออกมา
     */ -->
    <tr>
    <td colspan="2" align="right">Total:</td>
    <td align="right"><?php echo $total_quantity; ?></td>
    <td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
    <!-- <a id="ok" href="order2.php">สั่งซื้อ</a><td?></td> -->
    <!-- <td>colspan="4" align="right">
        <input type="submit" name="button" id="button" value="ปรับปรุง" />
        <input type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='order.php';" /></td> -->
    </tr>
    </tbody>
    </table>		
      <?php
    } else {
    ?>
    <div class="no-records">Your Cart is Empty</div>
    <?php 
    }
    ?>
    </div>
    <!-- ปุ่มแอดสินค้า -->
    <div id="product-grid">
        <div class="txt-heading">Products</div>
        <tr>
<td><a href="index2.php">กลับหน้ารายการสินค้า</a></td>
<td colspan="4" align="right">
    <!-- <input type="submit" name="button" id="button" value="ปรับปรุง" /> -->
    <input type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='confirm.php';" />
</td>
</tr>
        <?php
        // $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
        if (!empty($product_array)) { 
            foreach($product_array as $key=>$value){
        ?>
            <div class="product-item">
                <form method="post" action="index2.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
                <div class="product-tile-footer">
                <div class="product-title"><?php echo $product_array[$key]["product"]; ?></div>
                <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
                <div class="cart-action">
                    <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                <input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                </div>
                </form>
    
                
            </div>
        <?php
            }
        }
        ?>
    <!-- <tr>
    <td><a href="product.php">กลับหน้ารายการสินค้า</a></td>
    <td colspan="4" align="right">
    <input type="submit" name="button" id="button" value="ปรับปรุง" />
    <input type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='confirm.php';" />
    </td>
    </tr> -->
    
    </div>
    </BODY>
    </HTML>