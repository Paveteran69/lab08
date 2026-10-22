<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <?php
        include 'header.inc';
    ?>
    <h1>Welcome</h1>
    <?php
        session_start();
        if (isset($_SESSION['user'])) {
            echo "Welcome, " .$_SESSION['user'];
        } else {
            header('Location: login.php');
        }
    ?>
    <?php
        include 'footer.inc';
    ?>
</body>
</html>