 <!DOCTYPE html>
<html>
<head>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script>

	$(document).ready(function(){
    $("#start-generate-meeting").change(function(){
        $("#start-generate-meeting-result").load("/startGenerateMeeting.php", 
													{meetingType: $("#start-generate-meeting").val(),
													orgName: $("#orgName").val(), 
													orgType: $("#orgType").val(),
													meetingTime: $("#meetingTime").val(),
													meetingPlace: $("#meetingPlace").val()});
    });
		$("#add-question").click(function(){
        $("#add-question-result").load("/addQuestion.php")
				});
});
	</script>
<link rel="stylesheet" type="text/css" href="style.css" />

<meta charset="utf-8" />
<title></title>
</head>
<script>
//Set JS Variables
var sumTotal = 0;
var sumOutPlus = 0;
var sumOutMinus = 0;
</script>

<body>
<!-- Render a nice Index Bar with contact info, menu and other static content, either HTML or PHP -->

<?php
//Render the correct page depending on value of $page
if (isset($_GET['page']))
{


}
else 
{
//Display front page
	$variabel = 1;
?>
<h1>Hej och välkommen till ProtokollGeneratorn! <a href='https://ungpirat.piratenpad.de/arsmotesguiden' target='_blank'>(Intern Alpha 2.1)</a></h1><a href="about.php" target="_blank">(Om projektet)</a><br><br>
ProtokollGeneratorn finns till för att underlätta vid de årsmöten som varje lokalavdelning måste hålla varje år, och om en inte är van vid att hålla i dessa så kan detta vara till hjälp.<br>
Men också för att underlätta för andra sorters möten, som till exempel styrelsemöten<br><br>
<br>
Först och främst behöver vi veta lite praktiska saker om själva mötet.<br>
  
<?php

}
?>
För vilken lokalavdelning är mötet? <button type="button" onclick="alert('Vad heter er förening? \nSkriv in lokalavdelningens fullständiga namn. \n\nExempelvis Ung Pirat Linköping, Tänk UP, Piratstudenterna Uppsala, eller Piratpartiet Örebro\nGäller årsmötet en förening inom Piratpartiet, Ung Pirat eller Piratstudenterna?')">Mer info</button><br><br>

<input type="text" id="orgName" placeholder="<?php if (isset($_POST['orgName'])) { echo $orgName; } else { echo 'Ung Pirat Lokalavdelning'; } ?>">, en förening inom <select required id="orgType">
	<option value="UP">Ung Pirat</option>
	<option value="PS">Piratstudenterna</option>
	<option value="PP">Piratpartiet</option>
</select>
<br><br>
När ska mötet vara?<br>
<input type="date" id="meetingTime" placeholder='<?php echo date("Y-m-d"); ?>'><br>
<br>
Var ska mötet vara?<br>
<input type="text" id="meetingPlace" size="35" placeholder="Exempelgatan 15, Exempelstad"><br>
<br>
<br>
 
Vad för typ av möte är det?<br>
  <select required id="start-generate-meeting">
    <option value="" selected>Välj en organisation</option>
		<option value="assembly">Årsmöte</option>
    <option value="boardMeeting">Styrelsemöte</option>
    <option value="foundingMeeting">Uppstartsmöte</option>
  </select><br><br>

	<p id="start-generate-meeting-result"></p><br>
	
	<button id="add-question">
		Lägg till en fråga
	</button><br>
	<p id="add-question-result"></p><br>
	</p>
	</body>
</html>