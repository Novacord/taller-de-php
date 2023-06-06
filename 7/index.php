<?php

if (isset($_POST['nave'])){

    $naves = array(
      'falcon 9',
      'apollo 11',
      'soyuz',
      'discovery',
      'enterprise',
      'millennium falcon',
      'voyager',
      'curiosity',
      'hubble',
      'galileo'
  );
    $busqueda = $_POST['nave'];
    
    if (in_array($busqueda,$naves)){
      $respuesta = "la nave $busqueda existe en tu tropa";
    } else {
      $respuesta = "la nave $busqueda no existe en tu tropa";
    };
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio #7</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style7.css">
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
      <input type="text" placeholder="Ingrese un nave" name="nave" autocomplete="off"/>
      <button>Buscar</button>
      <P class="message"><?php if (isset($respuesta)){
        echo $respuesta;
      }; ?> </P>
    </form>
  </div>
</div>

</body>
</html>





