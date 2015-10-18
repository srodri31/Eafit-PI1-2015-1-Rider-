<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  color: black;
}
th, td {
    padding: 5px;
    text-align: left;
  color: black;
}
table#bordeSuperior tr:nth-child(even) {
    background-color: #eee;
}
table#bordeSuperior tr:nth-child(odd) {
   background-color:#fff;
}
table#bordeSuperior th  {
    background-color: black;
    color: white;
}

</style>

<h1>Labels</h1>

<div>
Select the labels you think are necessary for your rider.<br>
Some of them are already selected because they are required in any technical rider.<br>
</div>

<form action="rider.php" method="post">
  <div>
  <table border="0">
    <tr>
      <th><input type="checkbox" name="option1" value="staff"></th>
      <th>Staff: Describe the muscicians integrated in the band and also the support group</th>
    </tr>
    <tr>
      <th><input type="checkbox" name="option2" value="PA" disabled checked></th>
      <th>PA system: amplification system that will be used during the presentation</th>
    </tr>
    <tr>
      <th><input type="checkbox" name="option3" value="input" disabled checked></th>
      <th>Input list: show the instruments placed in the stage plot and their specific information</th>
    </tr>
    <tr>
      <th><input type="checkbox" name="option4" value="scenary"></th>
      <th>Scenary: specify the dimensions and some other things</th>
    </tr>
    <tr>
      <th><input type="checkbox" name="option5" value="backline" disabled checked></th>
      <th>Backline</th>
    </tr>
    <tr>
      <th><input type="checkbox" name="option6" value="camarin"></th>
      <th>Camarin</th>
    </tr>
    <tr>
      <th><input type="checkbox" name="option7" value="catering"></th>
      <th>Catering</th>
    </tr>
  </table>
  </div>
  <div>
    <?php echo CHtml::submitButton('Next'); ?>
  </div>
</form>