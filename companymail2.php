<?php

$confirmmail='http://localhost/login-with-google-using-php/confirmation.php?username='.$username.'&token='.$password;
$htmlContent = '<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
</head>
<body>
<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<tr>
                                    <td colspan="3" height="80" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#333333" style="padding:0;margin:0;font-size:0;line-height:0">
                                        <table width="100%" align="center" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        	<tr>
                                          
                                                <td align="left" width="1200"  style="padding-left:400px;;margin:0;font-size:0;line-height:0"><p style="color:white;font-size:32px;padding:0px;">Welcome To Websitename</p></td>
                                                
                                            </tr>
                                       	</tbody>
                                        </table>
                                  	</td>
                    			</tr>
								<tbody>
<tr style="opacity:0.4;filter: grayscale(40%)"> <td cellspacing="0" cellpadding="0"><img src="https://9-t.imgbox.com/NJw97jqr.jpg" alt="image host" style="margin-left:0px"/></td>
<td cellspacing="0" cellpadding="0"><img src="https://4-t.imgbox.com/4OYRtF0I.jpg" alt="image host"/></td>
<td cellspacing="0" cellpadding="0" ><a href="http://imgbox.com/NJw97jqr" target="_blank"><img src="https://9-t.imgbox.com/NJw97jqr.jpg" alt="image host" style="margin-left:0px"/></a></td>
</tr>
</tbody>




                                        <tbody bgcolor="#ABB8C3" width="1200">
                                        	
                                            <tr>
											
											<td colspan="4" align="left" >
                                                    <p style="color:#404040;font-size:24px;line-height:28px;padding-left:40px;padding-top:40px;margin-left:0px;margin-top:0px;margin-bottom:0px;">Hi '.$username.',</p><br>
                                                    <p style="color:#404040;font-size:24px;line-height:28px;word-spacing:3px;margin-left:0px;padding-left:40px;padding-right:40px;padding-top:-40px;">
													Thank you for registering for our website websitename.We want to inform you that your company account has been activated.We wecome you to world of websitename where you will get right candidates for your virtual teams or projects. Please click on the confirmation link below to sign in.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td colspan="4">
                                                <div style="width:100%;text-align:center;margin:30px 0">
                                                    <table align="center" cellpadding="0" cellspacing="0" style="font-family:HelveticaNeue-Light,Arial,sans-serif;margin:0 auto;padding:0">
                                                    <tbody>
                                                    	<tr>
                                                            <td align="center" style="margin:0;text-align:center"><a href="'.$confirmmail.'" style="font-size:21px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 40px;display:block;letter-spacing:1.2px" target="_blank">Confirm E-mail address</a></td>
                                                      	</tr>
                                                   	</tbody>
                                                    </table>
                                               	</div>
                                           	</td>
                                       	</tr>
                                        <tr><td colspan="3" height="30"></td></tr>
                                 	</tbody>
									
									<tr>
									<td colspan="3" height="80" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#333333" style="padding:0;margin:0;font-size:0;line-height:0">
                                        
                                  	</td>
									</tr>
                    			
									</tr>
                                    
                                    </tbody>
									</table>
</body>
</html>';

// Set content-type header for sending HTML email
$to = $emailid;
$subject = "Confirmation E-mail";
// Get HTML contents from file


// Set content-type for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From:minorproject119@gmail.com' . "\r\n";
$headers .= 'Cc: minorproject119@gmail.com' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
	$successMsg = 'Email has sent successfully.';
else:
	$errorMsg = 'Some problem occurred, please try again.';
endif;
?>