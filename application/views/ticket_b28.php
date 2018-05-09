<?php include ('side.html'); ?>
<!DOCTYPE html>
<html>
<head>
<title>チケット一覧</title>
</head>
<body>
<h2>チケット一覧</h2>
<input type="button" onclick="location.href='<?php echo base_url()."bug/ticketadd"?>'" value="新規作成" ><br>
<hr/>
<?php foreach($ticket as $key => $val){?>
<a href="<?php echo base_url()."bug/ticketdetail/".$val['ticket_id']?>">
<?php echo $val['type']."(チケット詳細へb31)";?><br/>
</a>
<?php } ?>
</body>
</html>
