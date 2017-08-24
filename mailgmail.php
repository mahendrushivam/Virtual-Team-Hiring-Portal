<?php


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
                                                    <p style="color:#2E4053;font-size:28px;line-height:28px;padding-left:40px;padding-top:40px;margin-left:0px;margin-top:0px;">Thank you '.$email.' for signing up for the website websitename</p><br>
                                                    <p style="color:#2E4053;font-size:20px;line-height:30px;;padding-left:40px;margin-left:0px;padding-top:0px;">
													 You are almost ready to get into the world where you get a chance to explore the world full of job opportunities.Please use the given one time password to login.We request you to kindly change your password after logging in to secure your account.Your login credentials are given below</p>
                                             </td>
											
			
                                            </tr>
											<tr>
												<td colspan="4" align="left">
												<p style="color:#2E4053;font-size:20px;line-height:30px;;padding-left:40px;margin-left:0px;padding-top:20px;"> Username :: '.$email.' </p>
												<p style="color:#2E4053;font-size:20px;line-height:15px;;padding-left:40px;margin-left:0px;padding-top:0px;"> Password ::  '.$emailpassword.'</p>
												</td>
											</tr>
                                            <tr>
                                            <td colspan="4">
                                                <div style="width:100%;text-align:center;margin:30px 0">
                                                    <table align="center" cellpadding="0" cellspacing="0" style="font-family:HelveticaNeue-Light,Arial,sans-serif;margin:0 auto;padding:0">
                                                    <tbody>
                                                    	<tr>
                                                            <td align="center" style="margin:0;text-align:center"><a href="" style="font-size:21px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 40px;display:block;letter-spacing:1.2px" target="_blank">Visit website</a></td>
                                                      	</tr>
                                                   	</tbody>
                                                    </table>
                                               	</div>
                                           	</td>
                                       	</tr>
                                        <tr><td colspan="3" height="30"></td></tr>
                                 	</tbody>
									</tr>
                                    </tbody>
									</table>
</body>
</html>';

// Set content-type header for sending HTML email
$to = $email;
$subject = "Registration Confirmation Email";
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