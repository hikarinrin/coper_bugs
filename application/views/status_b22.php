ステータス一覧ページb22<br/>
<hr/>
<a href="<?php echo base_url()."bug/statusadd"?>">新規作成(ステータス作成b23へ)</a><br/>
<?php foreach($status as $key => $val){?>
<a href="<?php echo base_url()."bug/statusdetail/".$val['status_id']?>">
<?php echo $val['status']."(重要度詳細へb25)";?><br/>
</a>
<?php } ?>


ページ書く
