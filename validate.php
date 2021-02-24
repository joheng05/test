<!DOCTYPE html>
<html lang="en">
    <body>
    
        <?php
        
            $name = $_POST['name'];
            $email = $_POST['email'];
            $msg = $_POST['msg'];
            $nameErr = $_POST['nameErr'];
            $emailErr = $_POST['emailErr'];
        
            if(isset($_POST['submit'])){
                $to = "wisam.hammadeh@gmail.com"; // this is your Email address
                $from = $email; // this is the sender's Email address
                $name;
                $subject = "Form submission";
                $subject2 = "Copy of your form submission";
                $message = $name . " wrote the following:" . "\n\n" . $msg;
                $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

                $headers = "From:" . $from;
                $headers2 = "From:" . $to;
                mail($to,$subject,$message,$headers);
                mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
                // You can also use header('Location: thank_you.php'); to redirect to another page.
            }
        
            
        
        ?>
    
    </body>
</html>