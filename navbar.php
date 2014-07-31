<?php
/* By jburke@wapacklabs.com */
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<CENTER>
<ul id="list-nav">
	<!--- index1.php --->
	<?php
	if($_SERVER['REQUEST_URI'] == "/index.php"){
	?>
		<li class="active"><a href="index.php"><b>Single-file E-mail(s)</a></li>
	<?php
	}else{
	?>
		<li><a href="index.php"<b>Single-file E-mail(s)</a></li>
	<?php
	}
	?>
	<!--- index2.php --->
	<?php
        if($_SERVER['REQUEST_URI'] == "/index2.php"){
        ?>
                <li class="active"><a href="index2.php"><b>Multi-file E-mail(s)</a></li>
        <?php
        }else{
        ?>
                <li><a href="index2.php"<b>Multi-file E-mail(s)</a></li>
        <?php
        }
        ?>
	<!--- index3.php --->
	<?php
        if($_SERVER['REQUEST_URI'] == "/index3.php"){
        ?>
                <li class="active"><a href="index3.php"><b>Reverse Sort</a></li>
        <?php
        }else{
        ?>
                <li><a href="index3.php"<b>Reverse Sort</a></li>
        <?php
        }
        ?>
	<!--- index4.php --->
        <?php
        if($_SERVER['REQUEST_URI'] == "/index4.php"){
        ?>
                <li class="active"><a href="index4.php"><b>Member Submissions</a></li>
        <?php
        }else{
        ?>
                <li><a href="index4.php"<b>Member Submissions</a></li>
        <?php
        }
        ?>
	<!--- about.php --->
	<?php
        if($_SERVER['REQUEST_URI'] == "/about.php"){
        ?>
                <li class="active"><a href="about.php"><b>About</a></li>
        <?php
        }else{
        ?>
                <li><a href="about.php"<b>About</a></li>
        <?php
        }
        ?>

</ul>
</CENTER>
