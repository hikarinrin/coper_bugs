<?php include ('side.html'); ?>
<!DOCTYPE html>
<html>
<head>
<title>ステータス作成</title>
</head>
<body>
	<h2>ステータス作成</h2>
<hr/>
<?php echo form_open_multipart('http://coper-bugs.com/bug/statusdone');?>
ステータス(必須)<br/>
<input type="text" name="status"><br>
<input type="submit" value="登録">
</form>
</body>
</html>