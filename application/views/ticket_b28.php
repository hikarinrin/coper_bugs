<!DOCTYPE html>
<html>
<head>
<title>チケット一覧</title>
</head>
<body><div style="padding: 10px; margin-left:100px; margin-right:100px;  border: 1px solid #333333; background-color:#E6E6E6;">
<h3>チケット一覧</h3>
<input type="button" onclick="location.href='<?php echo base_url()."bug/ticketadd"?>'" value="新規作成" ><br>
<hr/>
<?php foreach($ticket as $key => $val){?>
<a href="<?php echo base_url()."bug/ticketdetail/".$val['ticket_id']?>">
<?php echo $val['type']."(チケット詳細へb31)";?><br/>
</a>
<?php } ?>
</div>
</body>
</html>
