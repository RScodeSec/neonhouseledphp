<?php

require_once '../controller/staterController.php';
$redirect = new StaterController();
if(empty($_SESSION['username'])){

    $redirect->redireccionar();    
    
}
if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
        case 2:
         header('location: cliente.php');
        break;
 
        case 3:
         header('location: general.php');
        break;
 
        default: 
    } 
 }
require_once "layout/header.php"; ?>

<div class="container">
    <h2> Galeria</h2>
</div>
<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo1" type="button" class="btn btn-success" data-toggle="modal">Agregar Imagen</button>    
            </div>    
        </div>    
</div>

    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="galeria" class="table table-striped table-bordered table-condensed" style="width:100%">
                            <thead>
                                <tr id="tabla__head">
                                    <th class="tabla__celda">id</th>
                                    <th class="tabla__celda">imagen</th>
                                    <th class="tabla__celda">descripcion</th>
                                    <th class="tabla__celda">Eliminar</th>
                                </tr>
                            </thead>                      
                                
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>





<!-- Modal-->
<div class="modal fade" id="modalCRUD1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formGaleria" enctype="multipart/form-data">    
            <div class="modal-body">
                <input type="text" id="id" value="0" hidden>
                <div class="form-group">
                    <label for="descripcion" class="col-form-label">Descripcion:</label>
                    <input type="text" class="form-control" id="descripcion" required>
                </div>

                <div class="form-group">
                    <label for="user" class="col-form-label">Para Nombre:</label>
                        <br>
                        <select id ="users" class="form-select form-select-lg mb-3 user" >
                           
                        </select>                    
                </div>

                <div class="form-group">
                    <label for="descripcion" class="col-form-label">Imagen:</label>
                    <input  neme="file" type="file" id="file" class="dropify_" data-default-file="" accept=".jpg , .png , .webp" required>
                    
                </div>
                <div class="row">
                    <div id="file_" class="col-md-3"></div>
                
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="Cancelar" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>

<?php require_once "layout/foother.php";?>
