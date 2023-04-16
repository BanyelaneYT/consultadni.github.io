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
<body  style="background-image: url('fondo1.png'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover">
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
                    <h5 class="card-title text-center mb-5 fw-light fs-1"><a style="font-family: Times New Roman;"><big>CONSULTA RUC</big></a></h5>
                                <div class="mb-3">
                                    <input class="form-control" type="number"  Placeholder="Ingrese su número de RUC..." autocomplete="off" id="ruc" name="ruc">
                                </div>
                                <center><a type="button" class="btn btn-primary"id="pruebaruc"><b class="fs-4">Consultar</b></a></center>
                                <div class="d-grid mb-2"></div>
                                <div class="d-grid mb-2  form-control">
                                    <div >RUC: <label id="rucNumero"> </label></div>
                                </div>
                                <div class="d-grid mb-2 form-control">
                                    <div >Nombre o Razón social: <label id="razonsocial">  </label ></div>
                                </div>
                                
                                <div class="d-grid mb-2 form-control">
                                    <div> Estado: <label  id="estado"> </label > </div>
                                </div>

                                <div class="d-grid mb-2 form-control">
                                    <div> Dirección: <label  id="direccion"> </label > </div>
                                </div>

                                <div class="d-grid mb-2 form-control">
                                <div> Departamento: <label  id="departamento"> </label > </div>
                                </div>
                                <div></div>
                                <div class="d-grid mb-2">
                                    <center><a type="button" class="btn btn-primary" href="index.php"><b class="fs-4">Consultar DNI</b></a></center>
                                </div>
                    </div>
                </div>
             </div>
              </div>
        </div>
   </div>
</div>


<script>

$("#pruebaruc").click(function(){

  var ruc=$("#ruc").val();


$.ajax({           
    type:"POST",
    url: "consultar-ruc-ajax.php",
    data: 'ruc='+ruc,
    dataType: 'json',
    success: function(data) {
  
    
        if(data==1)
        {
            alert('El RUC tiene que tener 11 digitos');
        }
        else{
            console.log(data);
          
            $("#rucNumero").html(data.numeroDocumento);
            $("#razonsocial").html(data.nombre);
            $("#estado").html(data.estado);

            $("#direccion").html(data.direccion);
            $("#departamento").html(data.departamento);
        }
 

    }
});

})

</script>
</body>
</html>
   