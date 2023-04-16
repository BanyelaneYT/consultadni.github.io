<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">  
</head>
<body  style="background-image: url('fondo1.png'); background-attachment: fixed; background-repeat: no-repeat; background-size: cover">
<div class="text-center">
    <div class="card-body">
        <div class="container">
                    <div class="container">
                <div class="row">
                <div class="col-lg-10 col-xl-9 opacity-50 mx-auto" style="max-width: 45rem;">
                    <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden modal-content">
                    <div class="card-img-left d-none d-md-flex">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body p-4 p-sm-5 ">
                        <h5 class="card-title text-center mb-5 fw-light fs-1"><a style="font-family: Times New Roman;"><big>CONSULTA DNI</big></a></h5>
                                <div class="mb-3 ">
                                    <input class="form-control" type="number" id="dni" Placeholder="Ingrese su número de DNI..." autocomplete="off" name="dni">
                                </div><br>
                                <center><a type="button" class="btn btn-primary" id="prueba"><b class="fs-4">Consultar</b></a></center><br>
                                <div class="form-group form-control">
                                    <div>Nombres: <label id="nombre"> </label></div>
                                </div><br>

                                <div class="d-grid mb-2 form-control">
                                    <div >Apellido P.: <label id="apellidop">  </label ></div>
                                </div><br>
                                
                                <div class="d-grid mb-2 form-control">
                                    <div> Apellido M.: <label  id="apellidom"> </label > </div>
                                </div><br>
                                <div></div>
                                <div class="d-grid mb-2">
                                    <center><a type="button" class="btn btn-primary" href="ruc.php"><b class="fs-4">Consultar RUC</b></a></center>
                                </div>
                    </div>
                </div>
             </div>
              </div>
        </div>
   </div>
</div>


<script>

$("#prueba").click(function(){

  var dni=$("#dni").val();


$.ajax({           
    type:"POST",
    url: "consulta-dni-ajax.php",
    data: 'dni='+dni,
    dataType: 'json',
    success: function(data) {
  
  
        if(data==1)
        {
            alert('El DNI tiene que tener 8 digitos');
        }
       
    
        else{
            console.log(data);
            $("#nombre").html(data.nombres);
            $("#apellidop").html(data.apellidoPaterno);
            $("#apellidom").html(data.apellidoMaterno);
          

         
        }
 

    }
});

})

</script>
</body>
</html>
   