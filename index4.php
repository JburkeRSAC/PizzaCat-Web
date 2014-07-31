<?php
/* By jburke@wapacklabs.com */
?>
<HTML>
<CENTER><img src="images/pizzacatbanner.png"></CENTER>
<?php
/* ADD AN IF TO DETECT WHICH PAGE IS COMING SOON */
include('navbar.php');
?>
<link rel="stylesheet" href="toasty.css">
<script type="text/javascript" src="jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="jquery.toasty.js"></script>
<script>
    $(document).ready( function(){
        $("body").toasty();
        $("#toasty-button").click( function(){
             $("body").toasty('pop');
        });
    });
</script>
<body bgcolor="black">
<font color = #a71b02>
<center>
<BR>
<h1>Please upload plaintext Member Submission content one at a time</h1>
<CENTER>
<img src="/images/laserhandscat.gif" alt="Yo dawg! I heard you like pizza so I can haz putted a pizza ontop yo pizza" width="400" height="400">
</CENTER>
<form accept-charset="utf-8" enctype="multipart/form-data" action="mem_sub.php" method="POST">
<br>
<fieldset>
<br><b>Please upload a plaintext file to extract data from:</b><br><br><input id="toasty-button" name="uploaded" type="file"/><br/>
<br><input type="submit" value="Upload" />
</fieldset>
</form>

