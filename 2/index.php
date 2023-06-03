<?php

$form = '<form class="login-form" method="POST">
<input type="text" placeholder="Ingrese en numero de planetas" name="numero" autocomplete="off"/>
<button>Buscar</button>
<P class="message"></P>
</form>';

if (isset($_POST['numero'])){
  $form = '';
  for ($i = 1; $i <= intval($_POST['numero']); $i++) {
    $form .= '<form class="login-form" method="POST">
    <input type="text" placeholder="Ingrese en # de abitantes" name="habitantes" autocomplete="off"/>
    <P class="message"></P>
    </form>';
  } 
};

if (isset($_POST['habitantes'])){
  $form = '';
  for ($i = 1; $i <= intval($_POST['habitantes']); $i++) {
    $form .= '<div class="login-form">
    <P class="numeroP"> planeta '.$i.': # de Habitantes: </P>
    </div>';
  }
  echo $_POST['habitantes'];
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
  <?php echo $form ?>
  </div>
</div>

</body>
</html>





