<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LOGIN</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <form action="login.php" method="post">
            <h2>LOGIN</h2>

            <?php if(isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>        

            <label>E-mail</label>
            <input type="text" name="email" placeholder="E-mail"><br>

            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit">LOGIN</button>
        </form>
        <footer>
            <p>Név: Nagy Lajos &nbsp;&nbsp; Neptun kód: FT4QKP  &nbsp;&nbsp; Érdemjegy: 3  &nbsp;&nbsp; 
            <a href="https://github.com/Laj01/SWE">GitHub</a>
        </footer>
    </body>
</html>