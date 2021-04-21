<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>
<font face='Tahoma'>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="apple-touch-icon" href="favicon.ico">
  <link rel="icon" href="favicon.ico">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <title>PHP URL shortener</title>
</head>
<body>

<div class="container">
  <h2>PHP URL shortener</h2>
  <img src="lp_logo2.png" alt="Logo" /> <img src="aws_logo2.png" alt="AWS Logo" /></p>

<style type="text/css">
<!--
#form1 p {
text-align:center;
}
.header {
	font-family: "Fertigo Pro", Fontin, Calluna, Steinem;
	font-size: 36px;
	width: 100%;
	text-align: center;
	top: 5%;
	position: absolute;
}
.footer {
	width: 100%;
	text-align: justify;
	top:80%;
	position: absolute;
}
.content {
	position: absolute;
	width: 500px;
	top: 40%;
	left: 32%;
	font-size: 28px;
}

-->
</style>
</head>

<div class="content">

<?php
$con = mysqli_connect("127.0.0.1","lpurlsuser","lpurlspasswd","LPURLS");
$link = mysqli_connect("127.0.0.1","lpurlsuser","lpurlspasswd","LPURLS");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysqli_select_db($con,"LPURLS");
$urlinput=mysqli_real_escape_string($link,$_POST['url']); 
$id=rand(10000,99999);
$shorturl=base_convert($id,20,36);
$sql = "insert into testurls values('$id','$urlinput','$shorturl')";
mysqli_query($con,$sql);
echo "Shortened URL is <a href=\"http://52.17.207.99/decoder.php?decode=". $shorturl ."\">http://test.com/". $shorturl ."</a>";
//echo "Shortened URL is <a href=\"http://52.17.207.99/url/". $shorturl ."\">http://test.com/". $shorturl ."</a>";
mysqli_close($con);
?>

</div>

<div class="footer">
<p>&copy; Developed by <a href="mailto:julibcn">Company</a> @ AWS Immersion Day</p>
</div>
</body>
</html>
