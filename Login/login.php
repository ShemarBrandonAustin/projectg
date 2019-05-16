<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="loginstyle.css"  rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Project Gyna Login</title>
</head>
<body>

        <div class="loginform">
                <h1>Gyna</h1>
                <hr>
                    <form action="login_inc.php" method="POST" id="loginform">
                        <div class="loginfield">
                            <h3>Username</h3>
                            <input type="text" placeholder="" name="username" id="input">
                        </div>

                        <div class="loginfield">
                            <h3>Password</h3>
                            <input type="password" placeholder="" name="password" id="input">
                        </div>

                        <button type="submit" class="submitbutton" value="submit">Login</button>
                    </form>
                    <p>Don't have an account? <a href="signup.html">signup</a> </p>
        </div>
        
</body>
</html>