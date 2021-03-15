$(function () {
	let tableProd = $("#productosTabla").DataTable({
		scrollX: false,
		dom: '<"header__main"<"search"f>>t<"header__main"ip>',
		lengthChange: false,
		pageLength: 5,
		ajax: {
			url: "../controller/userController.php?action=list",
			dataSrc: "",
		},
		columns: [
			{ data: "username" },
			{ data: "nombres" },
			{ data: "user_level" },
			{ data: null },
			{ data: null },
		],
		columnDefs: [
			{
				defaultContent:
					'<button class="eliminar_b"><i class="fas fa-trash-alt eliminar"></i></button>',
				targets: -1,
			},
			{
				data: null,
				targets: -2,
				defaultContent:
					'<button class="editar_b"><i class="fas fa-edit editar"></i></button>',
			},
		],
	});
    //NO TOCAR GAA::::::::::::::::::
    $("#btnNuevo").click(function(){
        $("#formPersonas").trigger("reset");
        $(".modal-header").css("background-color", "#28a745");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Nueva Usuario");            
        $("#modalCRUD").modal("show");        
        id=null;
        opcion = 1; //alta
    });
    ///////////////:::::::::::::here edit user
    $("#productosTabla tbody").on("click", ".editar_b", function(){
        
        let data = tableProd.row($(this).parents("tr")).data();
        $("#id").val(data["id"]);
		$("#username").val(data["username"]);
		$("#password").val(data["password"]);
		$("#leveluser").val(data["user_level"]);
		$("#name").val(data["nombres"]);
		$("#phone").val(data["telefono"]);        
        
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar Usuario");            
        $("#modalCRUD").modal("show");
        
        
        
    });

    $("#productosTabla tbody").on("click", ".eliminar_b", function(){
        let id = tableProd.row($(this).parents("tr")).data()["id"];
        let data = {
            action: "delete",
            id: id
        }
        $.ajax({
            type: "POST",
            url: "../controller/userController.php",
            data: data,
            success: function(response){
                if (response == 1) {
                    $("#productosTabla").DataTable().ajax.reload(null, false);
                }
                
                
            }
            
        });        
        
    });
    
    
});
function mensaje(response){
    if(response ==0){
        swal("Intente Nuevamente!", "Error en el Servidor", "error");  
    }
    else{
        swal("Exitoso!", "Registro", "success"); 

    }
      
}

$("#formPersonas").submit(function(e){
    e.preventDefault();
    let aoption = $("#id").val();
    let username = $('#username').val();
    let password = $('#password').val();
    let level = $('#leveluser').val();
    let name = $('#name').val();
    let phone = $('#phone').val();
    let data = {
        aoption: aoption,
        action: "newuser",
        username: username,
        password: password,
        level: level,        
        name: name,
        phone: phone
    }

    $.ajax({
        type: "POST",
        url: "../controller/userController.php",
        data: data,
        success: function(response){

            if (response == 1) {
                $("#modalCRUD").modal("hide");
                $("#productosTabla").DataTable().ajax.reload(null, false);
            }
            

        },    
    });
    return false;
        
    
});

$(document).on("click", "#close", function(){
    $("#id").empty();
});
$(document).on("click", "#Cancelar", function(){
    $("#id").empty();
});
$(document).on("click", "#btnGuardar", function(){
    $("#id").empty();
});