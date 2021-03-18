<?php
require_once '../controller/staterController.php';
$redirect = new StaterController();
if(empty($_SESSION['username'])){

    $redirect->redireccionar();    
    
}
require_once "layout/header.php";
?>
<div class="container">
<<<<<<< HEAD
    <h2>Bienvenido Usuario: <?php echo  $_SESSION['username'];?></h2>
=======
    <h2>Mostrando Galeria para: <?php echo  $_SESSION['username'];?> </h2>
>>>>>>> 5d69113e283b3a185dcbde5b6da2cd2921866774
</div>
<input type="hidden" id="identgallery" value="<?php echo  $_SESSION['username'];?>">

<div class="container">
    <section class="right-section">

        <div id="products-container">

        </div>

    </section>

</div>
<?php require_once "layout/foother.php";?>