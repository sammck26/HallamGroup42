<?php require("ModuleLeaderNavBar.php");
$username = $_GET['username'];
$stage = $_GET['stage'];
include_once("stagepageSQL.php");
$weeks = getnumberofweeks();
$milestones = getmilestones();
echo $weeks;
?>
<h1 style="text-align: center;"><?php echo $stage ?></h1>
<?php echo $milestones?>

<?php
if(isset($_GET['stage'])) {
    $stage = $_GET['stage'];
  } else {
    $stage = 'unknown';
  }
  ?>

<style>
h1 {
  color: white;
  font-weight: bold;
  background-color: #D90B3E;
  padding: 10px;
  border-radius: 5px;
}
</style>