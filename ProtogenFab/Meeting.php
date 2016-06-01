<?php
//include 'questionClass.php';
//include 'questionWithQuestions.php';
class Meeting
{
  private $c_meetingTitle = NULL;
  private $c_localOrg = NULL;
  private $c_headOrg = NULL;
  private $c_meetingDate = NULL;
  private $c_meetingPlace = NULL;
  
  public $c_listOfQuestions = NULL;
  
  public function __constructor()
  {
  }
  
  public function Create($title, $orgName, $orgType, $date, $place, $meetingType)
  {
    $this->c_meetingTitle = $title;
    $this->c_localOrg = $localOrg;
    $this->c_headOrg = $headOrg;
    $this->c_meetingDate = $date;
    $this->c_meetingPlace = $place;
    
    switch ($meetingType) {
      case "foundingMeeting":
        $this->c_listOfQuestions = array($opening = new Question("Mötets öppnande"),
                                    $valid = new Question("Mötets behörighet"),
                                    $voters = new Question("Röstlängd"),
                                    $electMeetingChairperson = new Question("Val av mötesordförande"),
                                    $electMeetingSecretary = new Question("Val av mötessekreterare"),
                                    $electAdjusters = new Question("Val av justerare"),
                                    $thisYearPlan = new Question("Antagande av stadgar"),
                                    $thisYearPlan = new Question("Årets verksamhetsplan"),
                                    $thisYearBudget = new Question("Årets budget"),
                                    $thisYearBoardElection = new Question("Val av årets styrelse"),
                                    $thisYearAuditorsElection = new Question("Val av årets revisorer"),
                                    $thisYearElectorsElection = new Question("Val av årets valberedning"),
                                    $otherQuestions = new QuestionWithQuestions("Övriga frågor"), 
                                    $endMeeting = new Question("Mötets Avslutande"));
        break;
      case "boardMeeting":
        $this->c_listOfQuestions = array($opening = new Question("Mötets öppnande"), 
                                    $valid = new Question("Mötets behörighet"),
                                    $voters = new Question("Röstlängd"),
                                    $electMeetingChairperson = new Question("Val av mötesordförande"),
                                    $electMeetingSecretary = new Question("Val av mötessekreterare"),
                                    $electAdjusters = new Question("Val av justerare"),
                                    $otherQuestions = new QuestionWithQuestions("Övriga frågor"), 
                                    $endMeeting = new Question("Mötets Avslutande"));
        break;
      case "assembly":
        $this->c_listOfQuestions = array($opening = new Question("Mötets öppnande"), 
                                    $valid = new Question("Mötets behörighet"),
                                    $voters = new Question("Röstlängd"),
                                    $electMeetingChairperson = new Question("Val av mötesordförande"),
                                    $electMeetingSecretary = new Question("Val av mötessekreterare"),
                                    $electAdjusters = new Question("Val av justerare"),
                                    $lastYearStory = new Question("Verksamhetsberättelse"),
                                    $lastYearEconomic = new Question("Ekonomisk berättelse"),
                                    $auditorStory = new Question("Revisionsberättelse"),
                                    $responsibilityLastBoard = new Question("Ansvarsfrihet för avgående styrelse"),
                                    $thisYearPlan = new Question("Årets verksamhetsplan"),
                                    $thisYearBudget = new Question("Årets budget"),
                                    $thisYearBoardElection = new Question("Val av årets styrelse"),
                                    $thisYearAuditorsElection = new Question("Val av årets revisorer"),
                                    $thisYearElectorsElection = new Question("Val av årets valberedning"),
                                    $otherQuestions = new QuestionWithQuestions("Övriga frågor"), 
                                    $endMeeting = new Question("Mötets Avslutande"));
        break;
      default:
        echo "Unknown meeting type: " . $meetingType . " please fix this.";

        
    } 
    return $this;
  }
  
  public function AddQuestion($title, $place, $questionToAdd)
  {
    //Failchecks needed
    array_splice($c_listOfQuestions, $place, 0, $questionToAdd);
  }
  
  public function SaveToXML()
  {
    
  }
  
}

?>