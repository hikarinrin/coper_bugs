<!DOCTYPE html>
<html>
<head>
<title>ユーザー一覧</title>
</head>
<body><div style="padding: 10px; margin-left:100px; margin-right:100px;  border: 1px solid #333333; background-color:#E6E6E6;"><h3>ユーザー一覧</h3>
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
