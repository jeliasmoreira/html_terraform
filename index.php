<html>
 <head>
  <title>App was deployed with terraform</title>
 </head>
 <body>
<?php
  echo "<p> Infraestrutura e aplicação provisionados 100% via Teraform <em>{https://www.terraform.io}</p>";

  $link = mysqli_connect("localhost", "sfd2019", "897*&098811qQA");
 // Check connection
    if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 // Print host information
    echo " <p> Sucesso ao conectar no RDS. Nome da instancia: </p> " . mysqli_get_host_info($link);

?>
 </body>
</html>
