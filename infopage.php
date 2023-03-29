
<?php
$username = $_GET['StudentID'];
$fname = $_GET['FirstName'];
require("ModuleLeaderNavBar.php");
  

//$stage = $_GET['stage'];
?>

<h1 style="text-align: center;"><?php echo $fname ?>'s Information</h1>

<!-- Form with dropdown menu and submit button -->
<form action="stagepage.php" method="GET">
<div class="pink-bar">
  <div class="dropdown">
    <button class="dropbtn">Pick Stage</button>
  <input type="hidden" name="username" value="<?php echo $username ?>">
  
  <select class = "dropdown" name="stage" id="stage">
    <option value="stage1">Stage 1</option>
    <option value="stage2">Stage 2</option>
    <option value="stage3">Stage 3</option>
  </select>
  <button class = "submit" type="submit">Submit</button>
</form>
<?php
if(isset($_GET['stage'])) {
    $stage = $_GET['stage'];
  } else {
    $stage = 'unknown';
  }
  ?>
<style>
  
  .submit{
    background-color: white;
    color: #D90B3E;
    font-weight: bold;
    padding: 10px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    margin-top: 10px;


  }
/* Styling for the pink bar */
.pink-bar {
  background-color: #D90B3E;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Styling for the dropdown */
.dropdown {
  position: relative;
  display: inline-block;
}

.dropbtn {
  background-color: #D90B3E;
  color: white;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  position: absolute;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #D90B3E;
}

/* Styling for the page heading */
h1 {
  color: white;
  font-weight: bold;
  background-color: #D90B3E;
  padding: 10px;
  border-radius: 5px;
}
</style>
