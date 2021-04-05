let dep = $("#users");
dep.load("../controller/userController.php?action=showuser");

//------------------------------------------------------------
$(function () {
	let tableProd = $("#galeria").DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
		scrollX: false,
		dom: '<"header__main"<"search"f>>t<"header__main"ip>',
		lengthChange: false,
		pageLength: 4,
		ajax: {
			url: "../controller/userController.php?action=listgallery",
			dataSrc: "",
		},
		columns: [
			{ data: "id" },
			{ data: "image" },
			{ data: "descripcion" },
			{ data: null },
		],
		columnDefs: [
            {
                "targets": -3,
                "data": 'image',
                "render": function (data, type, row, meta) {
                    return '<img src="../imgGallery/'+ data + '" alt="' + data + '"height="80" width="80"/>';
                }
            },

			{
				defaultContent:
					'<button class="eliminar_b1 table-d"><i class="fas fa-trash-alt eliminar"></i></button>',
				targets: -1,
			},
		],
	});

    $("#galeria tbody").on("click", ".eliminar_b1", function(){
        let id = tableProd.row($(this).parents("tr")).data()["id"];
        let nameimage = tableProd.row($(this).parents("tr")).data()["image"];
        let data = {
            action: "deletegallery",
            id: id,
            nameimage: nameimage
        }
        $.ajax({
            type: "POST",
            url: "../controller/userController.php",
            data: data,
            success: function(response){
                let result = JSON.parse(response);
                swal({
                title: result.title,
                text: result.text,
                icon: result.icon
                }).then(function() {                  
                    $("#galeria").DataTable().ajax.reload(null, false);                    
                }); 
                
                
            },
            
        });        
        
    });
    
    
});//______________________________________________________________________

$("#btnNuevo1").click(function(){
    $("#formGaleria").trigger("reset");
    //$('.dropify-clear').click();
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Imegen");          
    $("#modalCRUD1").modal("show");        
    id=null;
    opcion = 1; //alta
});

$("#formGaleria").submit(function(e){
		var fdata = new FormData(this);
        //let descripcion = $('#descripcion').val();
        //let users = $('#users').val();
        //let file = $('#file')[0].files[0];
        //fdata.append('descripcion', descripcion);
        //fdata.append('users', users);
        //fdata.append('file', file);
        fdata.append('action', 'isertimg');
        //console.log(fdata);
        //console.log( fdata.get('action') );
        //console.log( fdata.get('descripcion') );
        //console.log( fdata.get('users') );
        console.log( fdata.get('files') );
        $.ajax({
            type: "POST",
            url: "../controller/userController.php",
            data: fdata,
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {
                //let result = JSON.parse(response);
                swal({
                title: "Perfecto!",
                text: "Galeria Agregado Correctamente",
                icon: "success"
                }).then(function() { 
                    $("#modalCRUD1").modal("hide");                   
                    $("#galeria").DataTable().ajax.reload(null, false);                    
                }); 
                
            },
        });
        return false;
	
});

//:::::::::::::::Client ::::::::::::::::
let identgallery = $("#identgallery").val();

let urlProds =
	"../controller/userController.php?action=showGalleryForClient&identgallery=" + identgallery;
$("#products-container").load(urlProds, { type: "article" }, function () {


});

//:::::::::::::::::Gestion::::::::::::::::::::
//let urlProds1 =
//	"../controller/userController.php?action=showGalleryForAll";
//$("#products-container1").load(urlProds1, { type: "article" }, function () {
//});


//::code for disabled copy paste

    /*$(document).ready(function() {
      //Disable cut copy paste
      $('body').bind('cut copy paste', function(e) {
        e.preventDefault();
      });

      //Disable mouse right click
      $("body").on("contextmenu", function(e) {
        return false;
      });
    });*/
