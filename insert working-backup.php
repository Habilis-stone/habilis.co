<?php
require_once "Mail-1.2.0/Mail.php";
 

$from = "estimates@habilis.co"; // required
$to = "tonnyma@gmail.com";
$subject = "Habilis Contact Form Inquiry";

$first_name = $_POST['name']; // required
$telephone = $_POST['tel']; // not required
$comments = $_POST['project']; // required
$email = $_POST['email']; // required

function clean_string($string) {

  $bad = array("content-type","bcc:","to:","cc:","href");

  return str_replace($bad,"",$string);

} 
 $body = "Please see below for details about the individual reaching out:\n\n";
 
 $body .= "Name: ".clean_string($first_name)."\n"; 
 
 $body .= "Email: ".clean_string($email)."\n";
 
 $body .= "Telephone: ".clean_string($telephone)."\n";
 
 $body .= "Project: ".clean_string($comments)."\n";
 
 
$host = "ssl://smtp.zoho.com";
$username = "estimates@habilis.co";
$password = "87#U$@!nGod+";
$port = "465";

 
$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'port' => $port,
    'auth' => true,
    'username' => $username,
    'password' => $password));
 
$mail = $smtp->send($to, $headers, $body);
 
if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
} else {
  ?>
  <!-- include your own success html here -->
 

 
<body style="background-color:rgb(23, 77, 146);">
<div style="width:500px; margin: 0 auto; color:white; font-size: 16px; line-height:1.2; font-family: Akrobat, 'helvetica neue'; font-weight:100; margin-top: 80px;"> 
Thank you for sharing details about your project!  <br />  
<br/>
We will get back to your inquiry as soon as possible. 
<br />
<br />
You may also choose to call us at (281) 857- 0418 <br />
<br />
Thank you for your interest and contacting us. 
<br />
--Habilis
<br />
<a href="http://habilis.co" style="background-color:rgb(67, 191, 191);
padding: 10px 15px 10px 15px;
color:white;
margin-top:60px;
position: relative;
top:20px;
text-decoration:none;
border-radius:4px;
line-height: 1.2;
font-size:16px;">Back to Habilis.co</a>
</div>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-48465565-1']);
_gaq.push(['_trackPageview', location.pathname + location.search + location.hash]);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 

ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

</body> 
<?php
}
?>

 
 