<?php
include 'meetingClass.php';
include 'questionClass.php';
include 'questionWithQuestionsClass.php';

class AssemblyCreator
{
  

  //public Meeting $c_meeting = NULL;
  
  public function __constructor()
  {
  }
  
  public function Create($title, $localOrg, $headOrg, $date, $place)
  {
    $this->c_meeting = new Meeting();
    $this->c_meeting->Create($title, $localOrg, $headOrg, $date, $place);
    
    $this->c_meeting->c_listOfQuestions = array($opening = new Question("Mötets öppnande"), 
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
   
    
    return $this->c_meeting;
  }
}

?>