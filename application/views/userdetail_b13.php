<!DOCTYPE html>
<html>
<head>
<title>ユーザー詳細ページ</title>
</head>
<body><div style="padding: 10px; margin-left:100px; margin-right:100px;  border: 1px solid #333333; background-color:#E6E6E6;">
名前<br/>
<?php echo $userdetail[0]["name"];?><br/>
メールアドレス<br/>
<?php echo $userdetail[0]["mail"];?><br/>
パスワード<br/>
<?php echo $userdetail[0]["pass"];?><br/>
<a href="<?php echo base_url();?>bug/useredit/<?php echo $userdetail[0]["user_id"]?>">編集</a><br/>
</div>
</body>
</html>