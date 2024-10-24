<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="login.php" method="POST">
        <h3>Login Here</h3>

        <label for="email">Username</label>
        <input type="email" placeholder="Email or Phone" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" required>

        <button type="submit">Log In</button>
    </form>
</body>
</html>