<?php
include "db.php";
session_start();

if(isset($_POST['email']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if(empty($email)){
        header("Location: index.php?error= Adja meg az E-mail címet!");
        exit();
        
    }else if(empty($password)){
        header("Location: index.php?error= Adja meg a jelszót!");
        exit();
        
    }else{
        $sql = "SELECT * FROM users WHERE user_email= '$email' AND user_password = '$password'";

        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['user_email'] === $email && $row['user_password'] === $password){
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_email'] = $row['user_email'];
                $_SESSION['user_password'] = $row['user_password'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['user_color'] = $row['user_picture'];
                header("Location: home.php");
                exit();
                
            }else{
                header("Location: index.php?error= Hibás e-mail!");                
                //header('refresh:3; url=http://www.police.hu/');
                exit();
            }
        }else{
                //header("Location: index.php?error= Hibás valami!");                
                header('refresh:3; url=http://www.police.hu/');
                exit();
        }
    }

}else{
    header("Location: index.php");
    exit();
}