<!DOCTYPE html>
<html>
<head>
<title>重要度作成</title>
</head>
<body>
<div style="padding: 10px; margin-left:100px; margin-right:100px;  border: 1px solid #333333; background-color:#E6E6E6;"><h3>重要度作成</h3>
<hr/>
<?php echo form_open_multipart('http://coper-bugs.com/bug/importancedone');?>
重要度(必須)<br/>
<input type="text" name="level"><br>
<input type="submit" value="登録(重要度完了ページb18へ)">
</form>
</body>
</html>
