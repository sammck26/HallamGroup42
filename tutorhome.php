<?php include_once("TutorNavBar.php"); ?>
<?php include_once("viewstudentSQL.php");
$user = getStudent();
?>
<div class="content">
  <h1>Stage 1</h1>
 
  <table>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>ID</th>
        <th>Information</th>
      </tr>
    </thead>
    <tbody>
    <?php
				for ($i=0; $i<count($user); $i++):
			?>
			<tr>
				<td><?php echo $user[$i]['username']?></td>
				<td><?php echo $user[$i]['fname']?></td>
				<td><?php echo $user[$i]['lname']?></td> 
                        
				<td>
          <button class="tutors-and-student-helpers">
              <a class="info-link" href="infopage.php?username=<?php echo $user[$i]['username']; ?>">info</a>
         </button>
        </td>
			</tr>
			<?php endfor;?>
    </tbody>
  </table><button class="attendance">Attendance</button>
  <div class="scroll-bar">
    <div class="scroll-bar-inner"></div>
    

<style>
  .attendance {
    background-color: white;
    color: #D90B3E;
    font-weight: bold;
    padding: 10px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    margin-top: 10px;
  }
   a.info-link {
        color: white;
    }
  .tutors-and-student-helpers {
    background-color: #D90B3E;
    color: white;
    font-weight: bold;
    padding: 10px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    margin-top: 10px;
  }
  body {
    background-color: #f2f2f2;
  }
  .content {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
  }
  h1 {
    color: white;
    font-weight: bold;
    background-color: #D90B3E;
    padding: 10px;
    border-radius: 5px;
  }
  .add-milestones,
  .info,
  .attendance {
    background-color: white;
    color: #D90B3E;
    font-weight: bold;
    padding: 10px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    margin-top: 10px;
  }
  table {
    margin-top: 20px;
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid black;
    padding: 10px;
    text-align: left;
  }
  th {
    background-color: #D90B3E;
    color: white;
  }
  .scroll-bar {
    margin-top: 20px;
    height: 20px;
    background-color: #eee;
    border-radius: 10px;
    overflow: hidden;
  }
  .scroll-bar-inner {
    width: 20%;
    height: 100%;
    background-color: #D90B3E;
    border-radius: 10px;
  }
</style>
