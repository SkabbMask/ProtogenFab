<?php

class QuestionWithQuestions
{
  private $number = NULL;
  private $title = NULL;
  private $listOfQuestions = NULL;
  
  public function __construct($title)
  {
    $this->title = $title;
  }
  
  public function GetTitle()
  {
    return $this->title;
  }
}

?>