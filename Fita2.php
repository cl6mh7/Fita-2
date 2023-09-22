<h1>Login<h1>

<form action = "" method = "post">
    <input type = "text" name = "user" placeholder = "user">
    <br>
    <input type = "password" name = "pass">
    <br><br>
    <input type = "submit">
</form>

<?php

    $users = [
        ["user" => "Claudia", "password" => "123"],
        ["user" => "Diego", "password" => "321"],
        ["user" => "Natalia", "password" => "312"]
    ];

    $login_ok = false;

    if (isset($_POST["user"])) {
        foreach ($users as $user) {
            if ($_POST["pass"] == $user["password"]) {
                $login_ok = true;
                break;
            }
        }
        if ($login_ok) {
            echo "Logged in!";
        } else {
            echo "User and/or the password doesn't match!";
        }
    }

?>