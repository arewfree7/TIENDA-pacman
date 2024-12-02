<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="boleta.css" type="text/css">
</head>
<body>
<?php
$pro=$_POST["produ"];
$cant=$_POST["can"];

$productos=array(
array("Nintendo 64 Console",1200,$cant),
array("Pack Guitar Hero III PS3",550,$cant),
array("Máquina arcade FullSize con pantalla de 24 formato widescreen con miles juegos retro",2600,$cant),
array("Sony Playstation PS One",700,$cant),
array("40 Juegos retro",600,$cant),
array("Consola Nintendo NES Classic Edition con controlador adicional",1300,$cant)
);
switch($pro){
    case 'nintendo': 
    $juego = $productos[0][0];
    $costo= $productos[0][1];
    $cantidad= $productos[0][2];
    $total=$costo*$cantidad;
    break;
    case 'guitar': 
    $juego= $productos[1][0];
    $costo= $productos[1][1];
    $cantidad=$productos[1][2];
    $total=$costo*$cantidad;
    break;
    case 'maquina': 
    $juego= $productos[2][0];
    $costo= $productos[2][1];  
    $cantidad=$productos[2][2];   
    $total=$costo*$cantidad; 
    break;
    case 'play1':
    $juego= $productos[3][0];        
    $costo= $productos[3][1];
    $cantidad=$productos[3][2]; 
    $total=$costo*$cantidad;            
    break;
    case 'juego': 
     $juego= $productos[4][0];        
     $costo= $productos[4][1];
     $cantidad=$productos[4][2];
     $total=$costo*$cantidad;
    break;
    case 'nes': 
    $juego= $productos[5][0];        
    $costo= $productos[5][1];
    $cantidad=$productos[5][2];
    $total=$costo*$cantidad;
    break;
}
?>
    <div>
        <p>
            <h2>TIENDA DE VIDEOJUEGOS <br>"MESS"</h2>
            <h3>Boleta Electronica</h3>
            <p>Producto: <?php echo $juego?><br></p>
            <p>Costo: S/<?php echo $costo?><br></p>
            <p>Cantidad: <?php echo $cantidad?> unidades<br></p>
            <p class="tot">Total: S/<?php echo $total?><br></p>
            <h4> <p>Direccion: Micaela Bastidas, calle 15, mz U, Comas<br>
                Vendedor:Ticacala Adriano Luis</p>
            </h4>
        </p>
</div>
</body>
</html>