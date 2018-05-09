<?php include ('side.html'); ?>
<!DOCTYPE html>
<html>
<head>
<title>ユーザー作成</title>
</head>
<body><h2>ユーザー作成</h2>
<hr/>
<?php echo form_open_multipart('http://coper-bugs.com/bug/userdone');?>
名前(必須)<br/>
<input type="text" name="name"><br>
メールアドレス(必須)<br/>
<input type="text" name="mail"><br>
パスワード(必須)<br/>
<input type="text" name="pass"><br/>
<input type="submit" value="登録">
</form>
</body>
</html>