<?php
require("NavBar.php");
include_once("createUserSQL.php");

$firstNameError = $lastNameError = $diagnosisError = "";
$allFieldsValid = true;

if (isset($_POST['submit'])) {
    if ($_POST['fname'] == "") {
        $firstNameError = "Please enter your first name";
        $allFieldsValid = false;
    }
    if ($_POST['lname'] == "") {
        $lastNameError = "Please enter your last name";
        $allFieldsValid = false;
    }
    if ($_POST['diagnosis'] == "") {
        $diagnosisError = "Please enter your diagnosis";
        $allFieldsValid = false;
    }

    if ($allFieldsValid) {
        $createUser = createUser();
        header('Location: userCreationSummary.php?createUser='.$createUser);
    }
}
?>

<div class="container pb-5">
    <main role="main" class="pb-3">
        <div class="row">
            <div class="col-6">
                <form method="post">
                    <div class="form-group col-md-6">
                        <label class="control-label labelFont">First Name</label>
                        <input class="form-control" type="text" name="fname">
                        <span class="text-danger"><?php echo $firstNameError; ?></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label class="control-label labelFont">Last Name</label>
                        <input class="form-control" type="text" name="lname">
                        <span class="text-danger"><?php echo $lastNameError; ?></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label class="control-label labelFont">Diagnosis</label>
                        <input class="form-control" type="text" name="diagnosis">
                        <span class="text-danger"><?php echo $diagnosisError; ?></span>
                    </div>
                    

                    <div class="form-group col-md-4">
                    <a href="http://localhost/software/staffpage.php">
                    <input class="btn btn-primary" type="submit" value="Join NOW" name="submit">
                    </a>
                    </div>
                    
                </form>
            </div>
        </div>
    </main>
</div>
