<html>
 <head>
  <title>App was deployed with terraform</title>
 </head>
 <body>
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
