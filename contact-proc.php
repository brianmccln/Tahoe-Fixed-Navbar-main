<?php
    // handle the incoming form vars from contact.php
    // see book pg 12
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $email = $_GET['email'];
    $comments = $_GET['comments'];

    // concatenate the form vars into a message
    $msg = "Email from Contact Form";
    $msg .= "\nFirst Name: " . $firstName;
    $msg .= "\nLast Name: " . $lastName;
    $msg .= "\nEmail: " . $email;
    $msg .= "\n\nComments:\n" . $comments;

    // set vars for the mail() method
    $to = "brianmccln@yahoo.com";
    $subject = "Contact Form from Website";
    $mailheaders = "From: " . $email;
    $mailheaders .= "\nReply-to: " . $email;

    // send the email
    mail($to, $subject, $msg, $mailheaders);
    $title = "Message Sent to ". $to;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
    <style>
        main {
            flex-direction: column;
            background-color: #fff;
            margin: 130px auto;
            max-width: 600px;
            padding: 30px;
            border: 5px solid #aaa;
        }
        h1 {
            font-size: 1.5em;
        }
        h1 {
            margin-top: 0;
            font-size: 1.5em;
        }
        form {
            margin-top: 20px;
        }
        input, textarea {
            margin-top: 10px;
            width: 100%;
            padding: 8px 10px;
            border-radius: 10px;
            border: none;
            background-color: #bbb;
            color: #fff;
        }

        input:focus, textarea:focus {
            background-color: #cde;
            color: #556;
        }

        input::placeholder, textarea::placeholder {
            color: #fff;
        }

        input[type="submit"]:hover {
            background-color: #353;
            cursor: pointer;
        }
    </style>
</head>

<body>
    
    <nav>
        <a href="index.html" class="logo"><img src="img/tahoe-logo.svg" alt="Hiking Packages | Tahoe Adventure Club"></a>
        <ul>
            <li><a href="excursions.html">Excursions</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>


<main>

    <h1><?php echo $title; ?>! Thank You!</h1>

</main>

<footer>
        &copy; Copyright 2024 - Tahoe Adventure Club
    </footer>

</body>
</html>







