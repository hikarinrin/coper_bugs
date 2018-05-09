<?php include ('side.html'); ?>
<!DOCTYPE html>
<html>
<head>
<title>ステータス一覧</title>
</head>
<body>
<h2>ステータス一覧</h2>
<input type="button" onclick="location.href='<?php echo base_url()."bug/statusadd"?>'" value="新規作成" ><br>
<hr/>
<?php foreach($status as $key => $val){?>
<a href="<?php echo base_url()."bug/statusdetail/".$val['status_id']?>">
<?php echo $val['status']."(ステータス詳細へb25)";?><br/>
</a>
<?php } ?>
</body>
</html>
    
