<?php   
include_once "database.php";
    
    try{
        $readQuery = "SELECT * FROM tasks";
        $statement = $conn->query($readQuery);
        
        while($row = $statement->fetch(PDO::FETCH_OBJ)){
            $create_time = strftime("%b,%d,%Y", strtotime($row->created_at));
           $output="<tr>
                        <td><div title ='click to edit' class='editable' onclick=\"editElement(this)\" onblur = \"updateName(this,{$row->id})\">$row->name</div></td>
                        <td> <div title ='click to edit' class='editable' onclick=\"editElement(this)\" onblur = \"updateDescription(this,{$row->id})\"> $row->description </div> </td>
                        <td> <div title ='click to edit' class='editable' onclick=\"editElement(this)\" onblur = \"updateStatus(this,{$row->id})\">$row->status</div> </td>
                        <td>$create_time</td>
                        <td style=\"width: 5%;\"><button onclick=\"deleteElement({$row->id},'$row->name')\"><i class=\"btn-danger fa fa-times\"></i></button></td>
                    </tr>";
            echo $output;
        }
    }catch(PDOException $e){
        echo ("Error has occured".$e->getMessage());
    }
?>
