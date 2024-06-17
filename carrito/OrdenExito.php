<?php
if (!isset($_REQUEST['id'])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Orden Completado - PHP Carrito de Compras</title>
  <meta charset="utf-8">
  <style>
    .container {
      padding: 20px;
    }

    p {
      color: #34a853;
      font-size: 18px;
    }
    .logo {
            text-align: right;
            margin-bottom: 0px;
            padding: 0px 30px;
            
        }

        .logo img {
            max-width: 70px;
            height: auto;
        }
        .panel-heading{
            padding: 30px 10px;
       
 
        }
  </style>
</head>
</head>

<body>
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading" style= "background-color:  #337AB7;">

        <ul class="nav nav-pills">
          <li role="presentation" class="active"><a href="index.php">Volver</a></li>
          <div class="logo" >
                      <a href="index.html">
                         <img src="img/LOGO.png" alt="Logo">
                      </a> 
                    </div>
        </ul>
      </div>

      <div class="panel-body">

        <h1>Estado de tu Requerimiento</h1>
        <p>La Orden se ha enviado exitósamente. El ID de tu pedido es <?php echo $_GET['id']; ?></p>
      </div>
      
    <!--Panek cierra-->
  </div>
</body>

</html>