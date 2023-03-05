<?php

class Login extends Dbh
{

    protected function getUser($uid, $pwd)
    {
        $stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid = ? OR users_email = ?;');

        if (!$stmt->execute([$uid, $uid])) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $pwdHashed = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($pwdHashed === false) {
            $stmt = null;
            header("location: profile.php?error=profilenotfound");
            exit();
        }

        $checkPwd = password_verify($pwd, $pwdHashed['users_pwd']);
        if ($checkPwd === false) {
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        }

        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE (users_uid = ? OR users_email = ?) AND users_pwd = ?;');
        if (!$stmt->execute([$uid, $uid, $pwdHashed['users_pwd']])) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user === false) {
            $stmt = null;
            header("location: profile.php?error=profilenotfound");
            exit();
        }

        session_start();
        $_SESSION["userid"] = $user["users_id"];
        $_SESSION["useruid"] = $user["users_uid"];

        $stmt = null;
        return $user;
    }
}
