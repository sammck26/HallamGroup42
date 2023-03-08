?php
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
            header("Location: userpage.php?username=".$user['username']);
        } elseif ($user['role'] == 'tutor') {
            header("Location: staffpage.php");
        } elseif ($user['role'] == 'moduleleader') {
            header("Location: adminpage.php");
        }
        exit();
    } else {
        $invalidMesg = "Invalid username and password!";
    }
}

}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>

    <style>
      .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        position: relative;
        background-color: #FBF8F8;
      }
      
      
    </style>
  </head>
  <body>
  <div class="login-container">
    <?php
      
      
    ?>
    <div class="row">
      <div class="login-form col-6">
      <img class="logo" src="C:\\Users\\mckib\\OneDrive\\Documents\\Uni stuff\\hospital.webp" alt="Logo">
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
    </div>
  </div>
</body>

</html>