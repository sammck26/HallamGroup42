<?php
require("ModuleLeaderNavBar.php");
include_once("createStudentHelperSQL.php");

$firstNameError = $lastNameError = $permissionError = "";
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
    if ($_POST['permission'] == "") {
        $courseError = "Please enter if you have permission ";
        $allFieldsValid = false;
    }

    if ($allFieldsValid) {
        $createStudentHelper= createStudentHelper();
        header("Location: home.php");
    }
}
?>

<div class="container pb-5">
    <main role="main" class="pb-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="background-color: #D90B3E;">
                    <div class="card-header text-center" style="color: white; font-weight: bold;">
                        Create Student Helper
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label class="control-label labelFont" style="color: white;">First Name</label>
                                <input class="form-control" type="text" name="fname" style="background-color: white;">
                                <span class="text-danger" style="color: white;"><?php echo $firstNameError; ?></span>
                            </div>

                            <div class="form-group">
                                <label class="control-label labelFont" style="color: white;">Last Name</label>
                                <input class="form-control" type="text" name="lname" style="background-color: white;">
                                <span class="text-danger" style="color: white;"><?php echo $lastNameError; ?></span>
                            </div>

                            <div class="form-group">
                                <label class="control-label labelFont" style="color: white;">Permission</label>
                                <input class="form-control" type="text" name="permission" style="background-color: white;">
                                <span class="text-danger" style="color: white;"><?php echo $permissionError; ?></span>
                            </div>

                            <div class="form-group text-center">
                                <input class="btn btn-primary" type="submit" value="Join NOW" name="submit">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>