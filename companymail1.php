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
                                                    <p style="color:#404040;font-size:28px;line-height:28px;padding-left:40px;padding-top:40px;margin-left:0px;margin-top:0px;">Thank You ,'.$companyname.' for signing up for the website websitename</p><br>
                                                    <p style="color:#404040;font-size:20px;line-height:22px;padding:40px;margin-left:0px;padding-top:-20px;">
													Your account will be activated within 24 hours after validating your company details. Please make sure that you have correctly filled all the required fields so that there is no case of criminal deception just intended for the personal gains.
                                       </p>
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