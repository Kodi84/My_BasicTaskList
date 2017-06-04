<?php   
include_once "database.php";
if(!empty($_POST['name']) && !empty($_POST['description'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    try{
        //build query
        $insertQuery = "INSERT into tasks(name,description,created_at)
                        VALUES(:name,:description,now())";   
        //prepare query
        $statement = $conn->prepare($insertQuery);   
        //execute the statement
        $statement->execute(array(":name"=>$name,":description"=>$description));       
        if($statement){
            echo "Record inserted";
        }
    }catch(PDOException $e){
        echo ("Error has occured".$e->getMessage());
    }
}else{
    echo "Please enter valid input";
}
?>
