重要度一覧ページb16<br/>
<hr/>
<a href="<?php echo base_url()."bug/importanceadd"?>">新規作成(重要度作成b17へ)</a><br/>
<?php foreach($importance as $key => $val){?>
<a href="<?php echo base_url()."bug/importancedetail/".$val['importance_id']?>">
<?php echo $val['level']."(重要度詳細へb118)";?><br/>
</a>
<?php } ?>


ページ書く
