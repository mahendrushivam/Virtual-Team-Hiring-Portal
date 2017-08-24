<?php

if($_POST && isset($_FILES['my_file']))
{

    $from_email         = 'smahendru101@gmail.com'; //from mail, it is mandatory with some hosts
    $recipient_email    = 'smahendru101@gmail.com'; //recipient email (most cases it is your personal email)
    
    //Capture POST data from HTML form and Sanitize them, 
    $sender_name    = filter_var($_POST["sender_name"], FILTER_SANITIZE_STRING); //sender name
    $reply_to_email = filter_var($_POST["sender_email"], FILTER_SANITIZE_STRING); //sender email used in "reply-to" header
    $subject        = filter_var($_POST["subject"], FILTER_SANITIZE_STRING); //get subject from HTML form
    $message        = filter_var($_POST["message"], FILTER_SANITIZE_STRING); //message
    
    /* //don't forget to validate empty fields 
    if(strlen($sender_name)<1){
        die('Name is too short or empty!');
    } 
    */
    
    //Get uploaded file data
    $file_tmp_name    = $_FILES['my_file']['tmp_name'];
    $file_name        = $_FILES['my_file']['name'];
    $file_size        = $_FILES['my_file']['size'];
    $file_type        = $_FILES['my_file']['type'];
    $file_error       = $_FILES['my_file']['error'];

    if(($file_error >0))
    {
        
    
    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));
	}

        $boundary = md5("sanwebe");
        //header
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
        
        //plain text 
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
        $body .= chunk_split(base64_encode($message)); 
        
        //attachment
        
		if(($file_error 0))
        {$body .="Content-Type: $file_type; name=".$file_name."\r\n";
        $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
        $body .= $encoded_content; 
		$body .= "--$boundary\r\n";}
    
    $sentMail = @mail($recipient_email, $subject, $body, $headers);
    if($sentMail) //output success or failure messages
    {       
        die('Thank you for your email');
    }else{
        die('Could not send mail! Please check your PHP mail configuration.');  
    }

}
?>

<html>
<head>
</head>
<body>

	<form enctype="multipart/form-data" method="POST" action="">
    <label>Your Name <input type="text" name="sender_name" /> </label> 
    <label>Your Email <input type="email" name="sender_email" /> </label> 
    <label>Subject <input type="text" name="subject" /> </label> 
    <label>Message <textarea name="message"></textarea> </label> 
    <label>Attachment <input type="file" name="my_file" /></label>
    <label><input type="submit" name="button" value="Submit" /></label>
</form>
</body>
</html>