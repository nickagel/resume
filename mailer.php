<html>
<head>
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
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (!function_exists('http_response_code'))
            {
                function http_response_code($newcode = NULL)
                {
                    static $code = 400;
                    if($newcode !== NULL)
                    {
                        header('X-PHP-Response-Code: '.$newcode, true, $newcode);
                        if(!headers_sent())
                            $code = $newcode;
                    }       
                    return $code;
                }
            }
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
            if (!function_exists('http_response_code'))
            {
                function http_response_code($newcode = NULL)
                {
                    static $code = 200;
                    if($newcode !== NULL)
                    {
                        header('X-PHP-Response-Code: '.$newcode, true, $newcode);
                        if(!headers_sent())
                            $code = $newcode;
                    }       
                    return $code;
                }
            }
            echo "Thank You! Your message has been sent.";
        } else {
                if (!function_exists('http_response_code'))
                {
                    function http_response_code($newcode = NULL)
                    {
                        static $code = 500;
                        if($newcode !== NULL)
                        {
                            header('X-PHP-Response-Code: '.$newcode, true, $newcode);
                            if(!headers_sent())
                                $code = $newcode;
                        }       
                        return $code;
                    }
                }
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        if (!function_exists('http_response_code'))
        {
            function http_response_code($newcode = NULL)
            {
                static $code = 403;
                if($newcode !== NULL)
                {
                    header('X-PHP-Response-Code: '.$newcode, true, $newcode);
                    if(!headers_sent())
                        $code = $newcode;
                }       
                return $code;
            }
        }
        echo "There was a problem with your submission, please try again.";
    }

?>
</p>
<a href="http://nagel.w3.uvm.edu/a/noscript/">click here to return</a>
</body>