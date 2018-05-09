<?php include ('side.html'); ?>
<!DOCTYPE html>
<html>
<head>
<title>チケット作成</title>
</head>
<body>
<h2>チケット作成</h2>
<?php echo form_open_multipart('http://coper-bugs.com/bug/done');?>
担当者：<br/>
チケット種類(必須):<?php foreach ($ticket as $key => $val) {?>
<input type="radio" name="ticket[]" value="<?php echo $val['ticket_id'];?>"><?php echo $val['type'];?>
<?php }?></br>

タイトル(必須)<br/>
<input type="text" name="title" style="width:100%;"><br/>
デバイス<br/>
<?php foreach ($device as $key => $val) {?>
<input type="radio" name="device[]" value="<?php echo $val['device_id'];?>"><?php echo $val['hard'];?>
<?php }?></br>
重要度(必須)<br/>
<?php foreach ($importance as $key => $val) {?>
<input type="radio" name="importance[]" value="<?php echo $val['importance_id'];?>"><?php echo $val['level'];?>
<?php }?></br>
ステータス(必須)<br/>
<?php foreach ($status as $key => $val) {?>
<input type="radio" name="status[]" value="<?php echo $val['status_id'];?>"><?php echo $val['status'];?>
<?php }?></br>
対象URLページ<br/>
<input type="text" name="URL" style="width:100%;"><br/>
CACOOページ<br/>
<input type="text" name="CACOO" style="width:100%;"><br/>
内容(必須)<br/>
<input type="text" name="content" style="width:100%; height:300px;"><br/>
<center><input type="submit" value="登録" style="width:100px; height:30px;">
</center></div></form>
</body>
</html>
