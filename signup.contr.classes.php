<?php

class SignupContr extends signupuser{

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email){
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    public function signupUser() {
        // Check for empty input
        if ($this->emptyInput() == false) {
            // Redirect with error message
            header("location: ./index.php?error=emptyinput");
            exit();
        }

        // Check for invalid username
        if ($this->invaliduid() == false) {
            // Redirect with error message
            header("location: ../index.php?error=username");
            exit();
        }

        // Check for invalid email
        if ($this->invalidEmail() == false) {
            // Redirect with error message
            header("location: ../index.php?error=username");
            exit();
        }
        if ($this->pwdMatch() == false) {
            // echo "Passwords don't match!";
            header("location: ./index.php?error=passwordmatch");
            exit();
        }

        if ($this->uidTakenCheck() == false) {
            // echo "Username or email taken!";
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }
        $this ->setuser($this->uid, $this->pwd, $this-> email);
    }


    private function invalidUid() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
        {
            $result= false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else
        {
            $result= true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result;
        if ($this->pwd !== $this->pwdRepeat)
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function uidTakenheck() {
        $result;
        if (!$this->checkUser($this->uid, $this->email))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }





}