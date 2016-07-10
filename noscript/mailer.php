<html>
<head>
    <title>Nick Agel</title>
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <style>
        *{
            text-align: center;
            font-size: 1.5em;
            font-family: sans-serif;
        }
        body{
            background-color: #0085A1;
        }
        p{
            color:white;
        }
        a{
            color:#ffb02f;
            text-decoration: none;
        }
        a:hover{
            color: #e67e22;
            cursor:pointer;
        }
    </style>
</head>
<body>
<p>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = strip_tags(trim($_POST["name"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $name = preg_replace('/[^A-Za-z0-9\-_ ]/', '', $name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);
        $message = preg_replace('/[^A-Za-z0-9\-_ ]/', " ", $message);

    if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {

        http_response_code(400);
        echo "Oops! There was a problem with your submission. Please complete the form and try again.";
        exit;
    }

    $recipient = "nickagel1@gmail.com";
    $subject = "New contact from $name";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    $email_headers = "From: $name <$email>";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }

} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}

?>
</p>
<a href="http://nickagel.com/noscript/">click here to return</a>
</body>