<!doctype html>
<html lang="en-US">

<?php include_once("includes/head.php")?>
<body>
    <?php include_once("includes/header.php")?>
    <section class="section1 " style="height: 70vh; background: #18253d;display: flex;justify-content:center; align-items:center" >
        <div class="container">
            <?php if(isset($_SESSION['successMsg'])):?>
            <h2 style="color: white" class="text-white"><?=$_SESSION['successMsg']?></h2>
            <?php endif;?>
            <?php if(isset($_REQUEST['successMsg'])):?>
            <h2 style="color: white" class="text-white text-center"><?=$_REQUEST['successMsg']?></h2>
            <?php endif;?>
        </div>
    </section>


    <?php include_once('includes/footer.php');?>

</body>

</html>