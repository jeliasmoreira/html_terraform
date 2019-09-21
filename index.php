<html>
 <head>
  <title>App was deployed with terraform</title>
 </head>
 <body>
<?php
  echo "<div align='left'> <h1> <p> Infraestrutura e aplicação provisionados 100% via Teraform <em>{https://www.terraform.io} </h1></p></div>";

  $link = mysqli_connect("localhost", "sfd2019", "897*&098811qQA");
 // Check connection
    if($link === false){
    die("ERROR: Nao foi possivel conectar ao RDS " . mysqli_connect_error());
    }
 // Print host information
    echo " <div align='left'> <h2> Sucesso ao conectar no RDS. Nome da instancia: </h2></div> ". mysqli_get_host_info($link);

    
    $res = mysql_query("SHOW DATABASES");
    while ($row = mysql_fetch_assoc($res)) {
    echo $row['Database'] . "\n";
}
?>
  
  <img src="sucesso.png">
  
  
 </body>
</html>
