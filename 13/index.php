<?php

if (isset($_POST['boton'])){

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

    $planetas_revertidos = array_reverse($planetas);
    $planetas_revertidos = array_flip($planetas_revertidos);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio #12</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style12.css">
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
    <button type="submit" name="boton" value="Imprimir">invertir</button>
      <P class="message"><?php
          if (isset($planetas_revertidos)){
            foreach ($planetas_revertidos as $nombre => $posicion) {
              echo " $posicion<br>";
          }
      }; ?> </P>

    </form>
  </div>
</div>

</body>
</html>





