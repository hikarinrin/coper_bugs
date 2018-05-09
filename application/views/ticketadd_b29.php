<?php include ('side.html'); ?>
<!DOCTYPE html>
<html>
<head>
<title>チケット作成</title>
</head>
<body>
	<h2>チケット作成</h2>
<hr/>
<?php echo form_open_multipart('http://coper-bugs.com/bug/ticketdone');?>
チケット種類(必須)<br/>
<input type="text" name="type"><br>
<input type="submit" value="登録">
</form>
</body>
</html>