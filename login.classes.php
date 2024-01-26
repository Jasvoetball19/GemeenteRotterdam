<?php

class Login extends Dbh
{

    protected function getuser($uid, $pwd)
    {
        $stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid
        = ? OR users_email = ?;');


        if ($stmt->execute(array(uid, $pwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location:../index.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchALL(PDO:::_FETCH_ASSOC);
        $checkpwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]);

        if ($checkpwd == false) {
            $stmt = null;
            header("location:../index.php?error=wrongpassword ");
            exit();
        }
        elseif ($checkpwd == true )
            $stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid
        = ? OR users_email = ?;');

        if ($stmt->execute(array(uid, $uid, $pwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowcount()== 0)
        {
            $stmt = null;
            header ("location: ../index.php? error=usernotfound");
            exit();
        }

        $user = $stmt->fetchALL(PDO::FETCH_ASSOC);

        session_start();
        $_SESSION["userid"] = $user[0]["user_id"];
        $_SESSION["useruid"] = $user[0]["user_uid"];


        $stmt = null;

        $stmt = null;

    }
}
