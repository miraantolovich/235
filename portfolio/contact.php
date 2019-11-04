<form method="post">
           
           <label>First Name</label>
           <input name="name" placeholder="Type Here">

           <label>Last Name</label>
           <input name="lastname" placeholder="Type Here"> 
           
           <label>Email</label>
           <input name="email" type="email" placeholder="person@email.com">
           
           <label>Message</label>
           <textarea name="message" placeholder="Type Here"></textarea>
           
           <input id="submit" name="submit" type="submit" value="Submit">
       
       </form>

<?php   
    if (isset($_POST["submit"]))
        { 
            $to = "mla4783@rit.edu";
            $from = empty(trim($_POST["email"])) ? "noemail@sample.com" : sanitize_string($_POST["email"]);
            $subject = "Web Form";
            $message = empty(trim($_POST["message"])) ?  "No message" : sanitize_string($_POST["message"]);
            $name = empty(trim($_POST["name"])) ? "No name" : sanitize_string($_POST["name"]);
            $lastname = empty(trim($_POST["lastname"])) ? "No name" : sanitize_string($_POST["lastname"]);
            $headers = "From: $from" . "\r\n";

            $message .= "\n\n - $name $lastname";
            $sent = mail($to,$subject,$message,$headers);
            if ($sent)
            {
                echo "<p><b>You sent:</b> $message</p>";
            }
            else
            {
                echo "<p>Mail not sent!</p>";
            }
        }
    function sanitize_string($string){
    return $string;
    }
?>