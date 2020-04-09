<?php


namespace App;

class User
{

    private $firstName;
    private $lastName;
    private $email;
    private $age;

    public function __construct(String $email, String $firstName, String $lastName, int $age)
    {
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function isValid() : bool
    {
        if(!$this->isEmailValid())
        {
            return false;
        }

        if(!$this->isFirstNameValid())
        {
            return false;
        }

        if(!$this->isLastNameValid())
        {
            return false;
        }

        if(!$this->isAgeValid())
        {
            return false;
        }
        return true;
    }

    public function isEmailValid() : bool
    {
        if("" === trim($this->email)){
            throw new \Exception('Email can\'t be empty');
        }
        if(!preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $this->email )){
            throw new \Exception('email is not valid');
        }
        return true;
    }

    public function isFirstNameValid() : bool
    {
        if("" === trim($this->firstName)){
            throw new \Exception('FirstName can\'t be empty');
        }
        if(!preg_match ( "/^[a-zA-Z]+$/" , $this->firstName )){

            throw new \Exception('FirstName cannot contains number');
        }
        return true;
    }

    public function isLastNameValid() : bool
    {
        if("" === trim($this->lastName)){
            throw new \Exception('LastName can\'t be empty');
        }
        if(!preg_match ( "/^[a-zA-Z]+$/" , $this->lastName )){

            throw new \Exception('LastName cannot contains number');
        }
        return true;
    }

    public function isAgeValid() : bool
    {
        if(13 >= $this->age){
            throw new \Exception('Age must be superior than 13');
        }
        if(preg_match ( "/^[a-zA-Z]+$/" , $this->age )){

            throw new \Exception('Age can only contains number');
        }
        return true;
    }
}
