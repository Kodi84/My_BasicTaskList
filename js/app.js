$(document).ready(function(){
    //create data 
    $('#create-task').submit(function(event){
        event.preventDefault();
        var form = $(this);
        
        var formData = form.serialize();
        
        $.ajax({
            url : "create.php",
            method : "POST",
            data : formData,
            success: function(data){
                $("#ajax_msg").css("display","block").delay(3000).slideUp(300).html(data);
                $("#name").val("");
                $("#description").val("");
            }
        });
    });
    //read data
    $("#task-list").load('read.php');  
});

//editable both name and description in tasks.php
function editElement(div){
        div.style.border = "1px solid lavender";
        div.style.padding = "5px";
        div.style.background = "white";
        div.contentEditable = true;
    }
//update name to db 
function updateName(target,id){
    var data = target.textContent;
    target.style.border = "none";
    target.style.padding = "0px;"
    target.style.background = "#ececec";
    target.contentEditable = false;
    
     $.ajax({
            url : "update.php",
            method : "POST",
            data : {
                name:data,
                id:id
            },
            success: function(data){
                $("#ajax_msg").css("display","block").delay(3000).slideUp(300).html(data);
            }
        });
}
//update description to db 
function updateDescription(target,id){
    var data = target.textContent;
    target.style.border = "none";
    target.style.padding = "0px;"
    target.style.background = "#ececec";
    target.contentEditable = false;
    
     $.ajax({
            url : "update.php",
            method : "POST",
            data : {
                description:data,
                id:id
            },
            success: function(data){
                $("#ajax_msg").css("display","block").delay(3000).slideUp(300).html(data);
            }
        });
}
//update Status
function updateStatus(target,id){
    var data = target.textContent;
    target.style.border = "none";
    target.style.padding = "0px;"
    target.style.background = "#ececec";
    target.contentEditable = false;
    
     $.ajax({
            url : "update.php",
            method : "POST",
            data : {
                status:data,
                id:id
            },
            success: function(data){
                $("#ajax_msg").css("display","block").delay(3000).slideUp(300).html(data);
            }
        });
}

//delete Element
function deleteElement(id,name){
    if(confirm("Are you sure you want to delete " + name +" ?") ){
        $.ajax({
            url : "delete.php",
            method : "POST",
            data : {
                id:id
            },
            success: function(data){
                $("#ajax_msg").css("display","block").delay(3000).slideUp(300).html(data);
                $("#task-list").load('read.php');  
            }
            
        });         
    }  
    return false;

}