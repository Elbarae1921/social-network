<?php

    include("inc/config.php");

    if(isset($_SESSION['userLoggedIn']))
    {
        header("Location: index.php");
    }   

    include("inc/func.php");

    $loginFailed = false;
    $registerFailed = false;

    $loginEmail = "";
    $loginPassword = "";
    $registerUsername = "";
    $registerEmail = "";
    $registerPassword = "";

    if(isset($_POST['login']))
    {
        $loginEmail = SanitizeEmail($_POST['loginEmail']);
        $loginPassword = SanitizePassword($_POST['loginPassword']);

        $query = mysqli_query($con, "SELECT * FROM `users` WHERE `email`='$loginEmail' AND `password`='$loginPassword'");

        $sessionUsername = array();
        $sessionEmail = array();

        while($row = mysqli_fetch_array($query))
        {
            array_push($sessionUsername, $row['username']);
            array_push($sessionEmail, $row['email']);
        }

        if(mysqli_num_rows($query) > 0)
        {
            //session_start();
            $_SESSION['userEmail'] = $sessionEmail[0];
            $_SESSION['userLoggedIn'] = $sessionUsername[0];
            header("Location: index.php");
        }
        else
        {
            $loginFailed = true;
        }
    }
?>

<head> 
    <link rel="stylesheet" href="style/style.css">
    <script src="script/jQuery.js"></script>
    <script src="script/login.js" defer></script>
    <title>Login or Create an Account</title>
</head>
<div class="navbar">
        <h1><a href="javascript:void(0)" id="header">Social Net</a></h1>
        <!-- <div id="account">
            <a href="#" id="login">Login</a>
            <a href="#" id="register">Register</a>
        </div> -->
</div>
<div class="login">
    <form action="login.php" method="POST" id="loginForm">
        <label for="loginEmail">Email :</label>
        <input type="email" class="textInput" id="loginEmail" name="loginEmail" value="<?php echo $loginEmail; ?>">
        <label for="loginPassword">Password :</label>
        <input type="password" class="textInput" id="loginPassword" name="loginPassword" value="<?php echo $loginPassword; ?>">
        <p class="AuthError" id="loginError">Incorrect password or email.</p>
        <input type="submit" class="submitInput" id="loginButton" value="Login" name="login">
    </form>
    <div class="legend">Don't have an account yet ? <span id="register">Register here</span></div>
</div>
<div class="register">
    <form action="login.php" method="POST" id="registerForm">
        <label for="username">Username :</label>
        <input type="text" class="textInput" id="username" name="registerUsername" value="<?php echo $registerUsername; ?>">
        <label for="registerEmail">Email :</label>
        <input type="text" class="textInput" id="registerEmail" name="registerEmail" value="<?php echo $registerEmail; ?>">
        <label for="registerPassword">Password :</label>
        <input type="password" class="textInput" id="registerPassword" name="registerPassword" value="<?php echo $registerPassword; ?>">
        <p class="AuthError" id="registerError">Incorrect password or email.</p>
        <input type="submit" class="submitInput" id="registerButton" value="Register" name="register">
    </form>
    <div class="legend">Already have an account ? <span id="login">Log in here</span></div>
</div>
<?php

    if($loginFailed)
    {
        echo "<script>
            loginError.style.display = 'block';

        </script>";
    }

?>


        </div>
    </body>
</html>