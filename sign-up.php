<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="SignUp.css">
</head>
<body>
    <div class="background">
        <div class="overlay"></div>
      </div>
    <div class="container">
        <h1 class="form-title">Sign Up</h1>
        <form action="register.php" method="POST">
    <div class="main-user-info">
        <div class="user-input-box">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" placeholder="Enter Full Name" required>
        </div>
        <div class="user-input-box">
            <label for="id">ID</label>
            <input type="text" id="id" name="id" placeholder="Enter ID" required>
        </div>
        <div class="user-input-box">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter Username" required>
        </div>
        <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter valid email" required>
        </div>
        <div class="user-input-box">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required>
        </div>
        <div class="user-input-box">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
        </div>
        <div class="form-submit-btn">
            <input type="submit" value="Sign up">
        </div>
    </div>
</form>
    </div>
</body>
</html>