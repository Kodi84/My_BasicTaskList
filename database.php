<?php
define("DSN", "mysql:host=localhost;dbname=library");
define("USERNAME", "library");
define("PASSWORD", "7aIHEYr323H9EaMr");

$options = array(PDO::ATTR_PERSISTENT => true);

try{
$conn = new PDO(DSN, USERNAME, PASSWORD, $options);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $ex){
echo "A database error occurred ".$ex->getMessage();
}

?>
