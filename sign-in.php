<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="SignIn.css">
</head>
<body>
    <div class="wrapper">
        <div class="signin_box">
            <div class="signin-header">
                <span>Sign In</span>
            </div>
            <form action="signin.php" method="POST">
                <div class="input_box">
                    <input type="text" id="user" name="username" class="input-field" required>
                    <label for="user" class="label">Username</label>
                </div>
                <div class="input_box">
                    <input type="password" id="pass" name="password" class="input-field" required>
                    <label for="pass" class="label">Password</label>
                </div>
                <div class="input_box">
                    <input type="submit" class="input-submit" value="Sign In">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
