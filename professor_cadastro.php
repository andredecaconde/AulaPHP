<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
<?php include "menu.php"?>

<div class="conteudo">
    <H3>cadastro de professores</h3>
    <form action="#" method="post">

      <p>digite o nome  <br>
      <input type="text" name="nome">
      </p> 
      
      <p>digite a area de formação <br>
      <input type="text" name="area">
      </p> 

      <p>digite a graduação <br>
      <input type="text" name="graduacao">
      </p> 


      <p>
        <input type="submit" name="enviar" value="cadastrar">
      </p>
    </form>
</div>

</body>
</html>