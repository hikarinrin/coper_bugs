ここがトップb1です。
<hr/>
バグ一覧<br/>
<a href="<?php echo base_url()."bug/add"?>">チケット作成b2へ</a><br/>
<a href="<?php echo base_url()."bug/master"?>">マスタ設定b9へ</a><br/>
<h1>タイトル</h1>

<?php

echo $this->table->generate($records);
echo $this->pagination->create_links();

?>

 
