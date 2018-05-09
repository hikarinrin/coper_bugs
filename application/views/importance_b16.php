<?php include ('side.html'); ?>
<!DOCTYPE html>
<html>
<head>
<title>重要度一覧</title>
</head>
<body><h2>重要度一覧</h2>
<input type="button" onclick="location.href='<?php echo base_url()."bug/importanceadd"?>'" value="新規作成" ><br>
<hr>
<?php foreach($importance as $key => $val){?>
<a href="<?php echo base_url()."bug/importancedetail/".$val['importance_id']?>">
<?php echo $val['level']."(重要度詳細へb118)";?><br/>
</a>
<?php } ?>
</body>
</html>
