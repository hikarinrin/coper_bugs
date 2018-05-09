<?php include ('side.html'); ?>
<h2>ステータス詳細ページ</h2>
<hr/>
<?php echo $statusdetail[0]["status"];?><br/>
<a href="<?php echo base_url();?>bug/statusedit/<?php echo $statusdetail[0]["status_id"]?>">編集</a><br/>
