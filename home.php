<?php 
session_start();

if(isset($_SESSION['user_name']) && isset($_SESSION['user_email'])){
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LOGIN</title>
        <link rel="stylesheet" href="styles/style_home.css">
    </head>
    <body bgcolor="<?php echo $_SESSION['user_color']?>">
        <h1>Szia, <?php echo $_SESSION['user_name']?></h1><br>
        <a href="logout.php">LOGOUT</a>
    </body>
</html>


<?php 
}else{
    header("Location: index.php");
    exit();
}

?>