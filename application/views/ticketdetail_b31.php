<?php include ('side.html'); ?>
<h2>チケット詳細ページ</h2>
<hr/>
チケット種類<br/>
<?php echo $ticketdetail[0]["type"];?><br/>
<a href="<?php echo base_url();?>bug/ticketedit/<?php echo $ticketdetail[0]["ticket_id"]?>">編集</a><br/>
