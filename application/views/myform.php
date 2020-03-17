<!DOCTYPE html>
<html>
<head>
<title>Pengisian Formulir </title>
</head>

<body>

<?php echo validation_errors(); ?>
<?php echo form_open('form'); ?>
<?php $this->load->helper('url'); ?>
<center><h5>Username</h5></center>
<center><input type="text" name="username" value ="" size="50"/></center>
<center><h5>Password</h5></center>
<center><input type="password" name="password" value="" size="50"/></center>
<center><h5>Password Confirm</h5><center>
<center><input type="password" name="passconf" value="" size="50"/></center>
<center><h5>Email Address</h5><center>
<center><input type="text" name="email" value="" size="50"/></center>
<tr>
<tr>
<tr><div><input type="submit" value="Submit"/></div></tr>

</body>
</html>