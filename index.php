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

   echo  "<div align='center'><br> <img src='sucesso.png'></div>";
   echo  "<br><h3>Lista de banco de dados constantes no RDS</h3><br>";
?>
  
<?php
  $link = mysqli_connect("localhost", "sfd2019", "897*&098811qQA");
  $sql="SHOW DATABASES";
if (!($result=mysqli_query($link,$sql))) {
        printf("Error: %s\n", mysqli_error($link));
    }
while( $row = mysqli_fetch_row( $result ) ){
        if (($row[0]!="information_schema") && ($row[0]!="mysql")) {
            echo "Database: $row[0] <br>";
        }
    }
?>



 </body>
</html>
