<?php
if (isset($_POST['submit'])) {
    include_once 'database.php';

    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    

    if (!preg_match("/^[a-z A-Z]*$/", $uname)) {
        header("Location:signup.php?");
        exit();
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: signup.php?signup=emailinvalid");
            exit();
        } else {
            $sql = "SELECT * FROM user WHERE uname='$uname'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                header("Location: signup.php?signup=userexists");
                exit();
            } else {
                $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT);
                $chashedPwd = password_hash($cpwd, PASSWORD_BCRYPT);

                $hashPassword = password_hash($password, PASSWORD_BCRYPT);
                    $sql = "INSERT INTO user(uname, email,contact , address, password) VALUES ('$uname','$email','$contact','$address', '$hashPassword');";
                    mysqli_query($conn, $sql);
                    header("Location: index.php?signup_success");
                    exit();
                }
            }
        }
    }
 else {
    header("Location: signup.php?signup=ERROR");
    exit();
}
?>
