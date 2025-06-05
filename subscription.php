<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $message = "";

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = fopen("subscribers.txt", "a");
        fwrite($file, $email . "\n");
        fclose($file);
        $message = "<div class='success'>Thank you for subscribing!</div>";
    } else {
        $message = "<div class='error'>Invalid email address. Please try again.</div>";
    }
} else {
    $message = "<div class='error'>No form data received.</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subscription Status</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #feead4;
            color: #2c3e50;
        }
        .wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            background-color: #0077cc;
            padding: 15px;
            color: white;
            font-size: 18px;
            text-align: center;
        }
        .container {
            flex: 1;
            padding: 150px 50px;
            text-align: center;
        }
        .success {
            color: green;
            font-weight: bold;
            font-size: 30px;
        }
        .error {
            color: red;
            font-weight: bold;
            font-size: 20px;
        }
        footer {
            background-color: #2c3e50;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <?php

    if (isset($_SESSION['userloggedin']) && $_SESSION['userloggedin']) {
        include 'nav-logged.php';
    } else {
        include 'navbar.php';
    }
    ?>

    <div class="container">
        <?php echo $message; ?>
        <a href="index.php" style="color: #0077cc; font-weight: bold;">Go Back to Home</a>
    </div>

    <?php include 'footer.html'; ?>
</div>

</body>
</html>
