<?php
include 'Meeting.php';
include 'questionClass.php';
include 'questionWithQuestionsClass.php';
	//$theMeeting = NULL;
$theMeeting = new Meeting();
if($_POST['meetingType'] === "assembly")
{
  $title = "Årsmöte för " . $_POST['orgName'] . ", en lokalavdelning inom " . $_POST['orgType'];
	echo $title;
	
	$theMeeting = $theMeeting->Create($title, $_POST['orgName'], $_POST['orgType'], $_POST['meetingTime'], $_POST['meetingPlace'], $_POST['meetingType']);
}
  else if($_POST['meetingType'] === "boardMeeting")
  {
		$title = "Styrelsemöte för " . $_POST['orgName'] . ", en lokalavdelning inom " . $_POST['orgType'];
    echo $title;
		$theMeeting = $theMeeting->Create($title, $_POST['orgName'], $_POST['orgType'], $_POST['meetingTime'], $_POST['meetingPlace'], $_POST['meetingType']);
	}
  else if($_POST['meetingType'] === "foundingMeeting")
  {
		$title = "Uppstartsmöte för " . $_POST['orgName'] . ", en lokalavdelning inom " . $_POST['orgType'];
		echo $title;
    $theMeeting = $theMeeting->Create($title, $_POST['orgName'], $_POST['orgType'], $_POST['meetingTime'], $_POST['meetingPlace'], $_POST['meetingType']);
	}
	else
	{
		//DU ÄR DUM
	}
	
	if($_POST['meetingType'] !== "")
	{
		echo '<h2>Ni har nu dessa punkter på dagordningen:</h2><br>';
		$count = 0;
		foreach($theMeeting->c_listOfQuestions as $question)
		{
			$count++;
			echo '<p>',$count, '.', ' ', $question->GetTitle(), '</p>';
		}
		$_numberOfQuestions = $count;
	}

?>