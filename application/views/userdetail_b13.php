ユーザー詳細ページb13<br/>
<hr/>
ユーザー詳細<br/>
名前<br/>
<?php echo $userdetail[0]["name"];?><br/>
メールアドレス<br/>
<?php echo $userdetail[0]["mail"];?><br/>
パスワード<br/>
<?php echo $userdetail[0]["pass"];?><br/>
<a href="<?php echo base_url();?>bug/useredit/<?php echo $userdetail[0]["user_id"]?>">編集(ユーザー編集ページb14)</a><br/>
