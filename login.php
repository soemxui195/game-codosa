<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
        <div>Codosa<span> Game</span></div>
    </div>
    <br>
    <div class="login">
        <input type="text" placeholder="username" name="user"><br>
        <input type="password" placeholder="password" name="password"><br><br>
        <div id="form-group" class="flex-container">
            <div class="row">
                <div class="col-md-6 col-12 text-center text-sm-left">
                    <fieldset>
                        <input type="checkbox" id="remember-me" class="chk-remember">
                        <label for="remember-me" style="color: #006899"> Remember</label>
                    </fieldset>
                </div>
                <div class="col-md-6 col-12 text-center text-sm-right">
                    <a href="#" class="card-link ">Forgot Password</a>
                </div>
            </div>
        </div>
        <input type="button" value="Login"><br><br>
        <p style="display: flex; justify-content: center;"><a style="float: right;" href="register.php"> Don't have an account?</a></p>
    </div>
    
    <div class="clear"></div>
</body>

</html>