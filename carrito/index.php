<?php
include 'Configuracion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Carrito de Compras</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .container {
            padding: 20px;
            
        }

        .cart-link {
            width: 100%;
            text-align: right;
            display: block;
            font-size: 22px;
            
            
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
    <div class="container" >
    
        <div class="panel panel-default">
            <div class="panel-heading" style= "background-color:  #337AB7;">

                <ul class="nav nav-pills" >
                    <li role="presentation" class="active" style="color: white; " ><a href="index.php" >Inicio</a></li>
                    <li role="presentation"><a href="VerCarta.php" style="color: white;" >Carrito de Compras</a></li>
                    <li role="presentation"><a href="Pagos.php" style="color: white;" >Pagar</a></li>
                    <div class="logo" >
                      <a href="index.html">
                         <img src="img/LOGO.png" alt="Logo">
                      </a> 
                    </div>
                 </ul>
            </div>

            <div class="panel-body">
                <h1>Tienda de Productos</h1>
                <a href="VerCarta.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                <div id="products" class="row list-group">
                    <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM mis_productos ORDER BY id DESC LIMIT 10");
                    if ($query->num_rows > 0) {
                        while ($row = $query->fetch_assoc()) {
                    ?>
                            <div class="item col-lg-4">
                                <div class="thumbnail" >
                                    <img src="<?php echo $row["imagen"];?>" alt="">
                                    
                                    <div class="caption">
                                        <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                                        <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="lead"><?php echo 'Bs. ' . $row["price"] . ' Bolivianos. '; ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>">Enviar al Carrito</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } else { ?>
                        <p>Producto(s) no existe.....</p>
                    <?php } ?>
                </div>
            </div>
        </div>
       
    </div>
</body>

</html>