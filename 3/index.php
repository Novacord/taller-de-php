<?php
$form = '<form class="login-form" method="POST">
<input type="text" placeholder="Ingrese en numero de planetas" name="numero" autocomplete="off"/>
<button>Generar</button>
<P class="message"></P>
</form>';


if (isset($_POST['numero'])){
  $form = '';
  $inputs = '';
  $numm = intval($_POST['numero']);
  for ($i = 1; $i <= intval($_POST['numero']); $i++) {
    $inputs .= '
    <input type="text" placeholder="Nombre del planeta" name="planeta'.$i.'[nombre]" autocomplete="off"/>
    <select name="planeta'.$i.'[ab]">
    <option value="true" selected>habitable</option>
    <option value="false">No habitable</option>
    </select>
    ';

  }

  var_dump(num);

  $form .= '<form class="login-form" method="POST">
  '.$inputs.'
  <button>Generar</button>
  <P class="message"></P>
  </form>';

};


if (isset($_POST['planeta1'])){
  $planetasT = array();
  
  for ($n = 1; $n <= 10; $n++){
    if ($_POST["planeta"."$n"]["ab"] == 'true'){
      array_push($planetasT,$_POST["planeta"."$n"]);
    } 
  };

  $form = '';
  foreach ($planetasT as $key => $NombreP) {
    $form .= '<div class="login-form">
    <P class="mesage"> planeta '.$NombreP["nombre"].': puede ser habitado </P>
    </div>';
  }

};



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio #3</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style3.css">
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





