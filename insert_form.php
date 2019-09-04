<?php
    session_start();
    include("conexao.php");

?>

<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="style.css"/>
    <title>Cadastar endereços</title>
   
  </head>

<html>
  <body>
      <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
      ?>
      <form class="box" method="POST" action="insert.php">
          <h1><a href="index.php">Mapa e pontos cadastrados</a><br/><br/></h1>
        <input type="text" name="name" placeholder="Nome do lugar"/><br/><br/>
        <input type="text" name="address" placeholder="Endereço"/><br/><br/>
        <input type="text" name="lat" placeholder="Latitude"/><br/><br/>
        <input type="text" name="lng" placeholder="Longitude"/><br/><br/>
        <input type="text" name="type" placeholder="Tipo"/><br/><br/>
          
        <input type="submit" value="Cadastrar"/>
        
      
      </form>

  </body>
</html>