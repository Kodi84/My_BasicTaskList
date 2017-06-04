<?php   
//update Name 
include_once "database.php";
if(isset($_POST['name']) && isset($_POST['id'])){
    $name = trim($_POST['name']);
    $id = $_POST['id'];
    try{
        //build query
        $updateQuery = "UPDATE tasks SET name = :name 
                        Where id = :id";    
        //prepare query
        $statement = $conn->prepare($updateQuery);      
        //execute the statement
        $statement->execute(array(":name"=>$name,":id"=>$id));  
        if($statement->rowCount()===1){
            echo "Succefully Updated Name Record";
        }else{
            echo "No Changes Has Been Made";
        }
    }catch(PDOException $e){
        echo ("Error has occured".$e->getMessage());
    }
}
//update Description
if(isset($_POST['description']) && isset($_POST['id'])){
    $description = trim($_POST['description']);
    $id = $_POST['id'];   
    try{
        //build query
        $updateQuery = "UPDATE tasks SET description = :description 
                        Where id = :id";    
        //prepare query
        $statement = $conn->prepare($updateQuery); 
        //execute the statement
        $statement->execute(array(":description"=>$description,":id"=>$id));   
        if($statement->rowCount()===1){
            echo "Succefully Updated Name Record";
        }else{
            echo "No Changes Has Been Made";
        }
    }catch(PDOException $e){
        echo ("Error has occured".$e->getMessage());
    }
}
//update Status
if(isset($_POST['status']) && isset($_POST['id'])){
    $status = trim($_POST['status']);
    $id = $_POST['id'];   
    try{
        //build query
        $updateQuery = "UPDATE tasks SET status = :status 
                        Where id = :id";       
        //prepare query
        $statement = $conn->prepare($updateQuery); 
        //execute the statement
        $statement->execute(array(":status"=>$status,":id"=>$id));   
        if($statement->rowCount()===1){
            echo "Succefully Updated Name Record";
        }else{
            echo "No Changes Has Been Made";
        }
    }catch(PDOException $e){
        echo ("Error has occured".$e->getMessage());
    }
}
?>
