<?php header("Content-Type: text/html; charset=utf-8"); 
/* By jburke@wapacklabs.com */
error_reporting(E_ALL);
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
exec("rm -rf /var/www/html/MEMBER_SUBMISSIONS/*");
 error_reporting( E_ALL );
/* By Jburke@wapacklabs.com */
 $target = "MEMBER_SUBMISSIONS/"; 
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
 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], "/var/www/html/MEMBER_SUBMISSIONS/upload.txt")) 
 { 
 echo "<b><h1>The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded</b></h1>"; 
 echo '<img src="/images/yarly.jpg">';
 exec("cd /var/www/html");
#$name = "/var/www/html/MEMBER_SUBMISSIONS/upload.txt";
#echo "$target\n";
$results = exec("/usr/bin/python /var/www/html/test.py > results.txt");
// Write the contents back to the file
#$results = exec("which python");
#print_r($results);
#file_put_contents("results.txt", $results);
#print_r($results);
 #exec("python test.py $name > results.txt");
 #exec("mv results.txt /var/www/html/MEMBER_SUBMISSIONS_RESULTS/results.txt");
 exec("sed '/^$/d' results.txt > /var/www/html/MEMBER_SUBMISSIONS_RESULTS/results.txt");
##place threat recon post here
echo "<BR><a href='/MEMBER_SUBMISSIONS_RESULTS/results.txt' target='_blank'><h1><b>Results<b></h1></a><BR>"; //not working
$my_file = file_get_contents("results.txt");
$boom = explode("\n", $my_file);
$exp = (array_filter($boom));
#print_r($exp);
foreach($exp AS $TR){
$search = $TR;
$tr_csvs[$TR] = shell_exec("/usr/bin/python /var/www/html/threat_recon_to_CSV.py $TR");
exec("mv /var/www/html/TR_search* /var/www/html/TR_CSVs");
# THREAT RECON KEY
$API_KEY = "YOUR_API_KEY";
//set POST variables
$url = 'https://api.threatrecon.co/api/v1/search';
$fields = array(
                'api_key' => urlencode($API_KEY),
                'indicator' => urlencode("$search"),
                );

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');
//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//execute post
#$resultz = curl_exec($ch);
//close connection
#curl_close($ch);
$this_csv = $tr_csvs[$TR];
#echo "<BR><h1><b>Threat Recon Results for $TR</b>"; //not working
echo "<BR><b>Threat Recon CSV for <a href='/TR_CSVs/$this_csv' target='_blank'>$TR : </a></h1></b></BR>";
#sleep(2);
$resultz[$TR] = curl_exec($ch);
curl_close($ch);
unset($fields_string);
echo $resultz[$TR]."<BR>";
#echo $resultz['incomeet.com']."<BR>";
}
#print_r($resultz);



#$file = fopen("/MEMBER_SUBMISSIONS_RESULTS/results.txt", "r");
#while(!feof($file)){
#    $line = fgets($file);
#	echo $line."<BR><BR>";
#    # do same stuff with the $line
#}
#fclose($file);



 } 
 else 
 { 
 echo "<b><h1>Sorry, there was a problem uploading your file.</b></h1>";
 echo '<img src="/images/brokencode.jpg">';
 } 
 } 
unset($_SESSION);
 ?> 
