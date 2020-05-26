<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="card-header">Login</div>    
      <form method="post" action="functions/check_login.php">
        <div class="username">
          <label>Username</label>
          <input type="text" name="username">
        </div>

        <div class="pass">
          <label>Password</label>
          <input type="password" name="password">
        </div>
         
         
        <button type="submit" class="btn btn-primary btn-block" name="login_user">Login</button>
      </form>
       
    </div>
</div>
</body>
</html>