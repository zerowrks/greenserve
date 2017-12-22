<?php 
if(isset($_POST['submit']) && ($_POST['submit']=='Send')):	
	$name=trim($_POST['name'],"  ");
	$to="jacbovee@gmail.com";
	$email = trim($_POST['email'],"  ");
	$product_code = trim($_POST['product'],"  ");
	$subject= trim($_POST['subject'],"  ");
	$enquiry = trim($_POST['message'],"  ");
    $message = '<!DOCTYPE HTML>'.
'<head>'.
'<meta http-equiv="content-type" content="text/html">'.
'<title>Email Notification</title>'.
'</head>'.
'<body>'.
'<div id="outer" style="width: 80%;margin: 0 auto;margin-top: 10px;">'. 
   '<div id="inner" style="width: 78%;margin: 0 auto;background-color: #fff;font-family: Open Sans,Arial,sans-serif;font-size: 13px;font-weight: normal;line-height: 1.4em;color: #444;margin-top: 10px;">'.
       '<p>Name : ' .$name.'</p>'.
       '<p>Email : ' .$email.'</p>'.
	   '<p>Product Code : ' .$product_code.'</p>'.
	   '<p>Subject : ' .$subject.'</p>'.
       '<p>Message : ' .$enquiry.'</p>'.
   '</div>'.  
'</div>'.
'</body>';

/*EMAIL TEMPLATE ENDS*/ 

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <aka.sharko@gmail.com>' . "\r\n";

	
	$alert = mail($to,$subject,$message,$headers);
	
   if($alert) : echo 1;
   else: echo 0;
   endif;

  else:
  
  	$name=trim($_POST['name'],"  ");
	$to="jacobvee@gmail.com";
	$email = trim($_POST['email'],"  ");
	$subject= trim($_POST['subject'],"  ");
	$enquiry = trim($_POST['message'],"  ");
    $message = '<!DOCTYPE HTML>'.
'<head>'.
'<meta http-equiv="content-type" content="text/html">'.
'<title>Website Enquiry</title>'.
'</head>'.
'<body>'.
'<div id="outer" style="width: 80%;margin: 0 auto;margin-top: 10px;">'. 
   '<div id="inner" style="width: 78%;margin: 0 auto;background-color: #fff;font-family: Open Sans,Arial,sans-serif;font-size: 13px;font-weight: normal;line-height: 1.4em;color: #444;margin-top: 10px;">'.
       '<p>Name : ' .$name.'</p>'.
       '<p>Email : ' .$email.'</p>'.
	   '<p>Subject : ' .$subject.'</p>'.
       '<p>Message : ' .$enquiry.'</p>'.
   '</div>'.  
'</div>'.
'</body>';

/*EMAIL TEMPLATE ENDS*/ 

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <aka.sharko@gmail.com>' . "\r\n";

	
	$alert = mail($to,$subject,$message,$headers);
	
   if($alert) : echo 1;
   else: echo 0;
   endif;
  
  endif;
  
  
  
  




