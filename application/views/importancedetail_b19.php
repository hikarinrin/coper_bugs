<?php include ('side.html'); ?>
<h2>重要度詳細ページ</h2>
<hr/>
重要度<br/>
<?php echo $importancedetail[0]["level"];?><br/>
<a href="<?php echo base_url();?>bug/importanceedit/<?php echo $importancedetail[0]["importance_id"]?>">編集</a><br/>
