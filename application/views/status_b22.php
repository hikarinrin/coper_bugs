<!DOCTYPE html>
<html>
<head>
<title>ステータス一覧</title>
</head>
<body><div style="padding: 10px; margin-left:100px; margin-right:100px;  border: 1px solid #333333; background-color:#E6E6E6;">
<h3>ステータス一覧</h3>
<input type="button" onclick="location.href='<?php echo base_url()."bug/statusadd"?>'" value="新規作成" ><br>
<hr/>
<?php foreach($status as $key => $val){?>
<a href="<?php echo base_url()."bug/statusdetail/".$val['status_id']?>">
<?php echo $val['status']."(ステータス詳細へb25)";?><br/>
</a>
<?php } ?>
</div>
</body>
</html>
    
