<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" /><title>User_Registration_at_kolumn</title><link target="_blank" rel="home" href="http://www.kolumn.in/"><link  rel="stylesheet" href="http://www.kolumn.in/kol.css">
</head>
<body bgcolor="Saffron">
<center><H1><b>REGISTER</b></H1></center>
<p>Please fill in the form fields below with YOUR: <b>User name, email address, phone number and password</b>  and click <b>submit</b> to save the details.
<hr>
<!--register--><!--nRegid--><?php $fn="nRegid.html"; $file=fopen($fn,"a+");
$size=filesize($fn);
$xb="<BR>";
$xh="<HR>";
$x0=$x0.$xb;
if($_POST['name']) 
$x1=$_POST['name'].$xb;
$x2=$_POST['email'].$xb;
$x3=$_POST['phone'].$xb;
$x4=$_POST['paswd'].$xh;
//$xs=str_shuffle("kolumnuser");
$xx=$x0.$x1.$x2.$x3.$x4;
fwrite($file,$xx); //$html=fread($file,$size); //$html=stripslashes($html); 
fclose($file); ?>

<form action="<?=$PHP_SELF?>" method="post">
User name:
<input type="text" name="name" value="kolumn"><br>
email:<input type="text" name="email" value="kolumn@kolumn.in"><br>
Phone number:<input type="text" name="phone" value="+918xxxxxxxx5"><br>
Password:<input type="password" name="paswd" value="kotulhappallil">
<input type="submit"></form>
<!--nRegid-->
<!--register-->
<hr>
 <?php echo $_SERVER['SERVER_NAME'] ?>
<hr>
<?php echo "last modified:",date("F d y H:i:s.",getlastmod()); ?>

<?php include '8k.php' ?>
</body>
</html>