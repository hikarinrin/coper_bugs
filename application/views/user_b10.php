ユーザー一覧ページb10<br/>
<hr/>
<a href="<?php echo base_url()."bug/useradd"?>">新規作成(ユーザー作成b11へ)</a><br/>
<?php foreach($user as $key => $val){?>
<a href="<?php echo base_url()."bug/userdetail/".$val['user_id']?>">
<?php echo $val['name']."(ユーザー詳細へb13)";?><br/>
</a>
<?php } ?>


ページ書く
