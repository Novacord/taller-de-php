<?php

if (isset($_POST['numero'])){

    $planetas = array(
        'Mercurio' => 1,
        'Venus' => 2,
        'Tierra' => 3,
        'Marte' => 4,
        'Júpiter' => 5,
        'Saturno' => 6,
        'Urano' => 7,
        'Neptuno' => 8
    );

    $busqueda = array_search( intval($_POST['numero']),$planetas );
 
    if ($_POST['numero'] == '1'){
        $nombreImagen = 'https://i.ibb.co/t4K465X/mercurio.png';
        $planeta = '<img src="' . $nombreImagen . '" alt="Mi imagen" class="pic">';
    } else if($_POST['numero'] == '2'){
        $nombreImagen = 'https://i.ibb.co/Bz9SjPV/venus.png';
        $planeta = '<img src="' . $nombreImagen . '" alt="Mi imagen" class="pic">';
    } else if($_POST['numero'] == '3'){
        $nombreImagen = 'https://i.ibb.co/M9YWNqK/planeta-terra.png';
        $planeta = '<img src="' . $nombreImagen . '" alt="Mi imagen" class="pic">';
    } else if($_POST['numero'] == '4'){
        $nombreImagen = 'https://i.ibb.co/gRj3DNT/marte.png';
        $planeta = '<img src="' . $nombreImagen . '" alt="Mi imagen" class="pic">';
    } else if($_POST['numero'] == '5'){
        $nombreImagen = 'https://i.ibb.co/jkCPQWH/jupiter.png';
        $planeta = '<img src="' . $nombreImagen . '" alt="Mi imagen" class="pic">';
    } else if($_POST['numero'] == '6'){
        $nombreImagen = 'https://i.ibb.co/nw8hn0t/saturno.png';
        $planeta = '<img src="' . $nombreImagen . '" alt="Mi imagen" class="pic">';
    } else if($_POST['numero'] == '7'){
        $nombreImagen = 'https://i.ibb.co/TKn7cqn/urano.png';
        $planeta = '<img src="' . $nombreImagen . '" alt="Mi imagen" class="pic">';
    } else if($_POST['numero'] == '8'){
        $nombreImagen = 'https://i.ibb.co/SnMW1VV/netuno.png';
        $planeta = '<img src="' . $nombreImagen . '" alt="Mi imagen" class="pic">';
    }else{
        $planeta = null;
    } ;

   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio #1</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style1.css">
</head>
<body>
<ul class="sistema">

<li class="orbita"><i class="astro planeta plutao">Plutão</i></li>

<li class="orbita"><i class="astro planeta netuno">Netuno</i></li>

<li class="orbita"><i class="astro planeta urano">Urano</i></li>

<li class="orbita"><i class="astro planeta saturno">Saturno</i></li>

<li class="orbita"><i class="astro planeta jupiter">Júpiter</i></li>

<li class="orbita">Cinturão de Asteróides</li>

<li class="orbita"><i class="astro planeta marte">Marte</i></li>

<li class="orbita"><i class="astro planeta terra">Terra</i></li>

<li class="orbita"><i class="astro planeta venus">Vênus</i></li>

<li class="orbita"><i class="astro planeta mercurio">Mercúrio</i></li>

<li class="orbita"><i class="astro sol">Sol</i></li>

</ul>

<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="POST">
      <input type="text" placeholder="Ingrese en numero de la posicion" name="numero" autocomplete="off"/>
      <button>Buscar</button>
      <P class="message"><?php if (isset($busqueda)){
        echo $busqueda;
      }; ?> </P>
      <?php  if (isset($planeta)){
        echo $planeta;
      }; ?>
    </form>
  </div>
</div>

</body>
</html>





