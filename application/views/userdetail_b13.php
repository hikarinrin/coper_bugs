<?php include ('side.html'); ?>
<!DOCTYPE html>
<html>
<head>
<title>ユーザー詳細ページ</title>
</head>
<body>
名前<br/>
<?php echo $userdetail[0]["name"];?><br/>
メールアドレス<br/>
<?php echo $userdetail[0]["mail"];?><br/>
パスワード<br/>
<?php echo $userdetail[0]["pass"];?><br/>
<a href="<?php echo base_url();?>bug/useredit/<?php echo $userdetail[0]["user_id"]?>">編集</a><br/>

</body>
</html>