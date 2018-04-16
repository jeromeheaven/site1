<?php
class Account {

  private $errorArray;

  public function __construct() {
    $this->errorArray = array();
    //set error array to empty array
  }

  public function register($uname,$fname,$lname,$em,$em2,$pwd,$pwd2) {
    $this-> validateUsername($uname);
    $this->validatefirstName($fname);
    $this->validatelastName($lname);
    $this->validateEmails($em,$em2);
    $this->validatePasswords($pwd,$pwd2);


if(empty($this->errorArray) == true) {
// Insert into the database
return true;
}
else {
  return false;
  }


}

  public function getError($error) {
    if(!in_array($error, $this->errorArray)) {
      //checking to see if there is an error in the errorArray
      //if there is
      $error = "";
    }

    return "<span class='errorMessage'>$error</span>";
  }


  private function validateUsername($uname) {

      if(strlen($uname) > 30 || strlen($uname) < 3) {
        array_push($this->$errorArray, Constants::$userNameCharacters);
        return;
      }

      //TODO: check if username exists
  }


  private function validatefirstName($fname) {
    if(strlen($fname) > 30 || strlen($fname) < 2) {
      array_push($this->$errorArray, Constants::$firstNameCharacters);
      return;

    }

  }

  private function validatelastName($lname) {
    if(strlen($lname) > 30 || strlen($lname) < 2) {
      array_push($this->$errorArray, Constants::$lastNameCharacters);
      return;

    }

  }

  private function validateEmails($em,$em2) {
    if($em != $em2) {
      array_push($this->$errorArray, Constants::$emailsDoNotMatch);
      return ;
      }

    if(!filter_var($em, $FILTER_VALIDATE_EMAIL)) {
      //check to see if this is a valid email(uses @gmail.com etc)
      array_push($this->$errorArray, Constants::$emailInvalid);
      return ;
    }

//TODO: check that username hasn't already been used
  }

private function validatePasswords($pwd,$pwd2) {

  if(pwd != pwd2) {
  array_push($this->$errorArray, Constants::$passwordsDoNotMatch);
  return ;
  //check if passwords match
}

if(preg_match('/[^A-Za-z0-9]/', $pw)) {
  //check if password has valid characters
  array_push($this->$errorArray, Constants::$passwordNotAlphanumber);
return ;
  }

  if(strlen($pwd) > 30 || strlen($pwd) < 3) {
    array_push($this->$errorArray, Constants::$passwordCharacters);
    return;
    //checks password length
    }

  }

}


 ?>
