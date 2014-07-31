<?php header("Content-Type: text/html; charset=utf-8"); 
/* By jburke@wapacklabs.com */
?>
<HTML>
<CENTER><img src="images/pizzacatbanner.png"></CENTER>
<?php
/* ADD AN IF TO DETECT WHICH PAGE IS COMING SOON */
include('navbar.php');
?>
<body bgcolor="black" link=#a71b02>
<font color = #a71b02>
<center>
<BR><BR>
<?php
exec("rm -rf /var/www/html/upload/*");
 error_reporting( E_ALL );
/* By Jburke@wapacklabs.com */
 $target = "upload/"; 
 $target = $target . basename( $_FILES['uploaded']['name']) ; 
 $ok=1; 
 
 //This is our size condition 
/* if ($uploaded_size > 350000) 
 { 
 echo "Your file is too large.<br>"; 
 $ok=0; 
 }*/ 
 
 //This is our limit file type condition 
 if ($uploaded_type =="text/php") 
 { 
 echo "<b><h1>No PHP files</b></h1><br>"; 
 echo '<img src="/images/hackerlol.jpeg">';

 $ok=0; 
 } 
 
 //Here we check that $ok was not set to 0 by an error 
 if ($ok==0) 
 { 
 echo "<b><h1>Sorry your file was not uploaded</b></h1>"; 
 echo '<img src="/images/brokencode.jpg">';

 } 
 
 //If everything is ok we try to upload it 
 else 
 { 
 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
 { 
 echo "<b><h1>The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded</b></h1>"; 
 echo '<img src="/images/yarly.jpg">';
exec("cd Results");
#exec("rm -rf Results/*");
 exec("cd /var/www/html");
#$_SESSION['query_type'] = "DOMAIN";
if($_POST['TYPE'] == "EMAIL"){
 $message=shell_exec("sh testx.sh");
}
if($_POST['TYPE'] == "DOMAIN"){
 $message=shell_exec("sh testx_domain.sh");
}
if($_POST['TYPE'] == "IP"){
 $message=shell_exec("sh testx_ip.sh");
}
if($_POST['TYPE'] == "MD5"){
 $message=shell_exec("sh testx_md5.sh");
}
if($_POST['TYPE'] == "SHA1"){
 $message=shell_exec("sh testx_sha1.sh");
}
if($_POST['TYPE'] == "ALL"){
 $message=shell_exec("sh testx_all.sh");
}
exec("cd /var/www/html/Reversed/");
#      echo($message);
 #exec("sh testx.sh");
#header("Content-Disposition: attachment; filename='/$message'");
#echo "<BR><a href='/$message' target='_blank'><h1><b>Results<b></h1></a><BR>"; //not working
$results = shell_exec("php reverse_sort.php $message");
$file = 'Reversed/reversed.txt';
$parts = preg_split('/\s+/', $results);
foreach ($parts AS $part => $a){
$string .= $a."\n";
}
// Write the contents back to the file
file_put_contents($file, $string);
#print_r($string);
#echo ("php reverse_sort.php $message > /var/www/html/Reversed/reversed.txt");
echo "<BR><a href='/Reversed/reversed.txt' target='_blank'><h1><b>Results<b></h1></a><BR>"; //not working
exec("rm -f emails4analyst.txt");
 } 
 else 
 { 
 echo "<b><h1>Sorry, there was a problem uploading your file.</b></h1>";
 echo '<img src="/images/brokencode.jpg">';
 } 
 } 
unset($_SESSION);
 ?> 
