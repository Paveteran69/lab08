<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Process</title>
</head>
<body>
    <h1>Process</h1>
    <?php
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == 'Paveteran' && $password == '106947909') {
            $_SESSION['user'] = $username;
            header('Location: welcome.php');
        } else {
            echo "Invalid login. <a href='login.php'>Try again</a>";
        }
    ?>
</body>
</html>