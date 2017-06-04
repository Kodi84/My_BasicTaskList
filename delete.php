<?php   
include_once "database.php";
if(isset($_POST['id'])){
    $id = $_POST['id'];    
    try{
        //build query
        $delete = "DELETE FROM tasks 
                        Where id = :id ";       
        //prepare query
        $statement = $conn->prepare($delete);       
        //execute the statement
        $statement->execute(array(":id" => $id));       
        if($statement){
            echo "Record have been deleted";
        }
    }catch(PDOException $e){
        echo ("Error has occured".$e->getMessage());
    }
}
?>
