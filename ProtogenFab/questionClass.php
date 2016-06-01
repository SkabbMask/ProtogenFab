<?php

//include 'questionTypes.xml';

class Question
{
  //Defines what kind of question it is
  public $title = NULL;
  //private $decisionType = NULL;
  //private $questionType = NULL;
  //private $optional = NULL;
  //private $uploadDocument = NULL;
  
  //The variables to be find within the question
  //private $breadText = NULL;
  //private $decisionText = NULL;
  //private $document = NULL;
  //private $notes = NULL;
  
  public function __construct($title)
  {
    $this->title = $title;
  }
  
  public function SetQuestionType($decisionType, $questionType, $optional, $uploadDocument)
  {
    $this->decisionType = $decisionType;
    $this->questionType = $questionType;
    $this->optional = $optional;
    $this->uploadDocument = $uploadDocument;
  }
  
  public function GetTitle()
  {
    return $this->title;
  }
  
  public function SetBreadText($text)
  {
    if(is_string($text))
    {
      $this->breadText = $text;
    }
  }
  
  public function GetBreadText()
  {
    return $this->breadText;
  }
  
  public function SetDecision($text)
  {
    if(is_string($text))
    {
      $this->decisionText = $text;
    }
  }
  
  public function GetDecision()
  {
    return $this->decisionText;
  }
  
  public function SetDocument($file)
  {
    if(is_file($file))
    {
      $this->document = $file;
    }
  }
  
  public function GetDocument()
  {
    return $this->document;
  }
  
  public function SetNotes($text)
  {
    if(is_string($text))
    {
      $this->notes = $text;
    }
  }
  
  public function GetNotes()
  {
    return $this->notes;
  }
}

?>