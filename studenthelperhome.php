<?php include_once("TutorNavBar.php"); ?>

<div class="content">
  <h1>Stage 1</h1>
 
  <table>
  <thead>
    <tr>
      <th>First Name</th>
      <th>Surname</th>
      <th colspan="2">Week 1</th>
      <th colspan="2">Week 2</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>John</td>
      <td>Doe</td>
      <td style="background-color: green;"></td>
      <td style="background-color: red;"></td>
      <td style="background-color: green;"></td>
      <td style="background-color: red;"></td>
    </tr>
    <tr>
      <td>Jane</td>
      <td>Smith</td>
      <td style="background-color: red;"></td>
      <td style="background-color: green;"></td>
      <td style="background-color: green;"></td>
      <td style="background-color: red;"></td>
    </tr>
    <!-- add more rows here -->
  </tbody>
</table>
  <div class="scroll-bar">
    <div class="scroll-bar-inner"></div>
  

<style>
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
