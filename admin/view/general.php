<?php 
require_once '../controller/staterController.php';
$redirect = new StaterController();
if(empty($_SESSION['username'])){

    $redirect->redireccionar();    
    
}
require_once "layout/header.php";
?>
<div class="container">
    <h2>Visualizando Nuestras Galerias</h2>

</div>

<div class="container">
    <section class="right-section">

        <div id="products-container1">

        </div>

    </section>

</div>

<?php require_once "layout/foother.php";?>