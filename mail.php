<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $mail_to = "worldtradehub.in@gmail.com";
        ini_set("SMTP","smtp.gmail.com");
        ini_set("smtp_port","587");
        ini_set("auth_username","worldtradehub.in@gmail.com");
        ini_set("auth_password","Venkatesh@123");
        # Sender Data
        $subject = trim($_GET["subject"]);
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_GET["name"])));
        $email = filter_var(trim($_GET["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_GET["message"]);
        
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($subject) OR empty($message)) {
            # Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }
        
        # Mail Content
        $content = "Name: $name\n";
        $content .= "Email: $email\n\n";
        $content .= "Message:\n$message\n";

        # email headers.
        $headers = "From: $name <$email>";

        # Send the email.
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            exit("Thank You! Your message has been sent!");
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            exit("Oops! Something went wrong, we couldn't send your message.");
        }

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        exit("There was a problem with your submission, please try again.");
    }

?>
