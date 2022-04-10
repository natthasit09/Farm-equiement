<?php 
 include ('condb.php');
 

    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

    
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            
            <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
        <?php endif ?>
    </div>  

</html>
<?php include("header.php"); ?>

<body>
    <div>
        <img src="image/homes.jpeg" alt="home" style="height: 100%;width:100%;" < class="bottom-left">
        <div class="TT">
            <h1>
                Farm Equiement
            </h1>
            <h1>
                Shopping
            </h1>
            
            <br>
            <a href="index2.php"><button type="button" class="btn btn-success">
                    <i class="fa-solid fa-arrow-right-long"></i>
                    หน้าสินค้า
                </button></a>

        </div>
    </div>
</body>

<?php include("foote.php"); ?>