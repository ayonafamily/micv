<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de envío </title>
  </head>
  <body>
    <?php
    $conecta = mysql_connect("localhost","jorge","shalom61");
    $base = mysql_select_db("ventas_CMP");
    mysql_query ("SET NAMES 'utf8'");
    $recibe = $_Post["recibe"];
    $entrega = $_Post["entrega"];
    $persona = $_Post["persona"];
    $concepto = $_Post["concepto"];
    $query = 'insert into helados2 (recibe, entrega,persona,concepto)
    values (
      "$recibe","$entrega","$persona","$concepto")';
    mysql_query($query);
     ?>
     <h1>Libro Caja</h1>
     <h2>Registro de Datos</h2>
       <form class="" action="enviar.php" method="post">
       <legend>Recibe</legend> <input type="number" name="recibe" value="recibe">
       <legend>Entrega</legend> <input type="number" name="entrega" value="entrega">
       <legend>Responsable</legend> <input type="text" name="persona" value="persona">
       <legend>Concepto</legend> <textarea name="concepto" rows="8" cols="80"></textarea>
       <input type="submit" name="enviar" value="enviar">
     </form>
  </body>
</html>
