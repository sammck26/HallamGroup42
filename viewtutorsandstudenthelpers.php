<?php include_once("ModuleLeaderNavBar.php"); ?>
<?php include_once("viewstudenthelperSQL.php");
include_once("viewtutorSQL.php");
$helper = getstudenthelper();
$tutor = gettutor();
?>
<div class="container pb-5">
<div class="box">
  <h1>Tutors</h1>
  <table class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>username</th>
        <th>first name</th>
        <th>lastname</th>
        <th>Permissions</th>
        <th>Delete</th>
      </tr>
    </thead>
    <?php
				for ($i=0; $i<count($tutor); $i++):
			?>
			<tr>
				<td><?php echo $tutor[$i]['username']?></td>
				<td><?php echo $tutor[$i]['fname']?></td>
				<td><?php echo $tutor[$i]['lname']?></td> 
        <td><?php echo $tutor[$i]['permissions']?></td>            
				<td>
        <button class="delete">
              <a class ="info-link "href="deleteStudentHelper.php?username=<?php echo $helper[$i]['username']; ?>">delete</a>
         </button>
        </td>
			</tr>
			<?php endfor;?>
  </table>
</div>
  <div class="box">
  <h1>Student Helpers</h1>
  
  <table class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>username</th>
        <th>first name</th>
        <th>lastname</th>
        <th>Permissions</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
				for ($i=0; $i<count($helper); $i++):
			?>
			<tr>
        <td><?php echo $helper[$i]['username']?></td>
				<td><?php echo $helper[$i]['fname']?></td>
				<td><?php echo $helper[$i]['lname']?></td> 
        <td><?php echo $helper[$i]['permission']?></td>                
				<td>
          <button class="delete">
            <a class = "info-link" href="deleteStudentHelper.php?username=<?php echo $helper[$i]['username']; ?>">delete</a>
         </button>
        </td>
			</tr>
			<?php endfor;?>
    </tbody>
  </table>
  <div class="text-center">
  <a class="nav-link text-dark" href="http://localhost/Hallam%20Student%20Managment%20Sytem%20GitHub/HallamGroup42/home.php">back</a>
  </div>
</div>
</div>
<style>
  a.info-link {
        color: white;
    }
table {
  border-collapse: collapse;
  width: 100%;
  margin: auto;
  background-color: #fff;
  font-size: 18px;
  font-family: Arial, sans-serif;
  border: 1px solid #ddd;
}
.delete {
    background-color: #D90B3E;
    color: white;
    font-weight: bold;
    padding: 10px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    margin-top: 10px;
  }
th, td {
  text-align: left;
  padding: 12px;
  border-bottom: 1px solid #ddd;
}



tr:nth-child(even) {
  background-color: #f2f2f2;
}

.box {
  border: 1px solid #ccc;
  background-color: #f9f9f9;
  padding: 20px;
  margin: 20px 0;
  border-radius: 5px;
}
h2 {
  background-color: #f44336;
  color: #fff;
  padding: 10px;
  font-size: 1.5em;
}
h1 {
    color: white;
    font-weight: bold;
    background-color: #D90B3E;
    padding: 10px;
    border-radius: 5px;
  }
  th {
  background-color: #D90B3E;
  color: white;
}
</style>

