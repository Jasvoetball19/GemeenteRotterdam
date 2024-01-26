<?php


class loginContr extends Login
{

    private $uid;
    private $pwd;


    public function __construct($uid, $pwd, $pwdRepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;

    }

    public function loginuser()
    {
        // Check for empty input
        if ($this->emptyInput() == false) {
            // Redirect with error message
            header("location: ./index.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->uid, $this->pwd);
    }

    private function emptyinput () {
        $result;
        if (empty($this->vid) || empty($this->pwd)){
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
}
