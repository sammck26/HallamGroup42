<?php require("ModuleLeaderNavBar.php");

$db = new SQLite3('C:\\xampp\\Storageforhallam\\Database.db');

$username = $_GET['username'];
$sql = "SELECT * FROM studenthelper WHERE username='$username'";

$stmt = $db->prepare($sql);
$stmt->bindParam(':username', $_GET['username'], SQLITE3_TEXT);

$result= $stmt->execute();

$arrayResult = [];
while($row=$result->fetchArray(SQLITE3_NUM)){
    $arrayResult [] = $row;
}

if (isset($_POST['delete'])){
    $db = new SQLite3('C:\\xampp\\Storageforhallam\\Database.db');

    $stmt = "DELETE FROM studenthelper WHERE username = '$username'";
    $sql = $db->prepare($stmt);

    $sql->bindParam(':username', $_GET['username'], SQLITE3_TEXT);

    $sql->execute();
    $stmt = "DELETE FROM logininfo WHERE username = '$username'";
    $sql = $db->prepare($stmt);
    $sql->bindParam(':username', $_GET['username'], SQLITE3_TEXT);
    $sql->execute();
    header("Location:viewtutorsandstudenthelpers.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* center the page */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        /* style the container */
        .container {
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ccc;
        }
        /* style the headings */
        label[for="username"],
        label[for="diagnosis"],
        label[for="password"] {
            font-size: 20px;
            color: blue;
            font-weight: bold;
        }
        /* style the back button */
        .back-link {
            font-weight: bold;
            margin-left: 30px;
        }
    </style>
</head>
<body>

    <div class="container">
        <main role="main">
            <div class="row">
                <div class="col-md-2">
                    <label for="username">Username</label>
                </div>
                <div class="col-md-6">
                    <label><?php echo $arrayResult[0][0] ?></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="diagnosis">firstname</label>
                </div>
                <div class="col-md-6">
                    <label><?php echo $arrayResult[0][1] ?></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="password">lastName</label>
                </div>
                <div class="col-md-6">
                    <label><?php echo $arrayResult[0][2] ?></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="password">permission</label>
                </div>
                <div class="col-md-6">
                    <label><?php echo $arrayResult[0][3] ?></label>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <form method="post">
                        <input type="hidden" name="username" value="<?php echo $_GET['username'] ?>">
                        <input type="submit" value="Delete this User" class="btn btn-danger" name="delete">
                        <div class="form-group col-md-3"><a href="#" onclick="window.history.back()">Back</a></div>
                    </form>
                </div>
            </div>
        




		</main>
	</div>

<?php?>

