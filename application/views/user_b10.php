<?php include ('side.html'); ?>
<!DOCTYPE html>
<html>
<head>
<title>ユーザー一覧</title>
</head>
<body><h2>ユーザー一覧</h2>
<input type="button" onclick="location.href='<?php echo base_url()."bug/useradd"?>'" value="新規作成" ><br>
<hr>
<?php foreach($user as $key => $val){?>
<a href="<?php echo base_url()."bug/userdetail/".$val['user_id']?>">
<?php echo $val['name']."(ユーザー詳細へb13)";?><br/>
</a>
<?php } ?>
</div>
</body>
</html>
