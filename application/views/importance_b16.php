<!DOCTYPE html>
<html>
<head>
<title>重要度一覧</title>
</head>
<body><div style="padding: 10px; margin-left:100px; margin-right:100px;  border: 1px solid #333333; background-color:#E6E6E6;"><h3>重要度一覧</h3>
<input type="button" onclick="location.href='<?php echo base_url()."bug/importanceadd"?>'" value="新規作成" ><br>
<hr>
<?php foreach($importance as $key => $val){?>
<a href="<?php echo base_url()."bug/importancedetail/".$val['importance_id']?>">
<?php echo $val['level']."(重要度詳細へb118)";?><br/>
</a>
<?php } ?>
</div>
</body>
</html>
