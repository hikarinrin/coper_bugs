<!DOCTYPE html>
<html>
<head>
<title>ステータス作成</title>
</head>
<body>
<div style="padding: 10px; margin-left:100px; margin-right:100px;  border: 1px solid #333333; background-color:#E6E6E6;"><h3>ステータス作成</h3>
<hr/>
<?php echo form_open_multipart('http://coper-bugs.com/bug/statusdone');?>
ステータス(必須)<br/>
<input type="text" name="status"><br>
<input type="submit" value="登録">
</form>
</body>
</html>