<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/head.php');?>

    <title>Thank you</title>
</head>
<style>
    .first-color{
        color: #fff;
    }
</style>
<body>
    
    <?php include('includes/header.php');?>
    <section class="section1 h-100vh" style="height: inherit;background: #102a48;">
        <div class="ast-container align-self-center">
            <div class="row">
                <div class="col-lg-12" style="margin: 291px 0;">
                    <!-- <h1 class="first-color font-80 font-weight-bold"> -->
                    <h1 class="first-color font-80 font-weight-bold text-center" style="text-align:center"><?php if(isset($_REQUEST['thanksMsg'])){ echo $_REQUEST['thanksMsg'];} ?></h1>
                    <h1 class="first-color font-80 font-weight-bold text-center" style="text-align:center"><?php if(isset($_REQUEST['successMsg'])){ echo $_REQUEST['successMsg'];} ?></h1>
                            
                    <!-- </h1> -->
                    
                </div>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php');?>

</body>
</html>