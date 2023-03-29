<!DOCTYPE html>
<?php
include_once("checkUserLogin.php");

$nameErr = $pwderr = $invalidMesg = "";
$allField = True;

if (isset($_POST['submit'])) {
  if ($_POST["username"] == "") {
    $nameErr = "Username is required";
    $allField = FALSE;
  }
  if ($_POST["password"] == null) {
    $pwderr = "Password is required";
    $allField = FALSE;
  }
  if ($allField == true) {
    $user = verifyUsers();
    if ($user) {
        if ($user['role'] == 'studenthelper') {
            //header("Location: userpage.php?username=".$user['username']);
            header("Location: studenthelperhome.php");
        } elseif ($user['role'] == 'tutor') {
            header("Location: tutorhome.php");
        } elseif ($user['role'] == 'moduleleader') {
            header("Location: home.php");
        }
        exit();
    } else {
        $invalidMesg = "Invalid username and password!";
    }
}

}
?>
<html>
  <head>
    <title>Student Progress Monitor - Login</title>
    <style>
      /* Define the styles for the purple strip at the top */
      .header {
        background-color:  #D90B3E;
        color: white;
        padding: 10px 0;
        text-align: center;
      }
      .header h1 {
        font-weight: bold;
        margin: 0;
      }
      /* Define the styles for the login box */
      .login-box {
        background-color:  #D90B3E;
        color: white;
        padding: 20px;
        border-radius: 10px;
        margin: 50px auto;
        max-width: 400px;
      }
      .login-box input[type="text"],
      .login-box input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: none;
      }
      .login-box input[type="submit"] {
        background-color: white;
        color: purple;
        padding: 10px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    
    <div class="header">
      <img src="C:\Users\mckib\OneDrive\Documents\Uni stuff\shulogo.php" alt="Sheffield Hallam University Logo">
      <h1>Sheffield Hallam University</h1>
    </div>
    <!-- Add the login box -->
    <div class="login-box">
      <h2>Student Progress Monitor</h2>
      <form method="post">
          <div class="form-group col-md-6">
            <label class="control-label labelFont">Username</label>
            <input class="form-control" type="text" name="username">
            <span class="text-danger"><?php echo $nameErr; ?></span>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label labelFont">Password</label>
            <input class="form-control" type="password" name="password">
            <span class="text-danger"><?php echo $pwderr; ?></span>
          </div>
          <div class="form-group col-md-4">
            <span class="text-danger"><?php echo $invalidMesg; ?></span>
            <input class="btn btn-primary" type="submit" value="Log-in" name="submit">
          </div>
        </form>
    </div>
  </body>
</html>
