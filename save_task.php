<?php

include("db.php");

if(isset($_POST['save_task'])){
        $title = $_POST['title'];
        $desc = $_POST['description'];

    if($title!= '' && $desc!=''){
        $query ="INSERT INTO task(title, description) VALUES ('$title', '$desc')";
        $result = mysqli_query($conn, $query);

            if(!$result){
                $_SESSION['message'] = 'SQL Query Fail'; 
                $_SESSION['message_type'] = 'warning';
                die('Query Fail');
            }else {
                $_SESSION['message'] = 'Task Saved successfully'; 
                $_SESSION['message_type'] = 'success';
            }
        }else{
            $_SESSION['message'] = 'Task Empty'; 
            $_SESSION['message_type'] = 'dark';
        }
        

        header("Location: index.php");
}

?>