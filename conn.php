<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "sfd2019", "897*&098811qQA");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
echo "Sucesso ao conectar no RDS. Nome da instancia: " . mysqli_get_host_info($link);
?>

