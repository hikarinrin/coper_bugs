ステータス詳細ページb25<br/>
<hr/>
ステータス詳細<br/>
ステータス<br/>
<?php echo $statusdetail[0]["status"];?><br/>
<a href="<?php echo base_url();?>bug/statusedit/<?php echo $statusdetail[0]["status_id"]?>">編集(ステータス編集ページb26)</a><br/>

<?php
    print "<pre>";
    var_dump($statusdetail);
    exit;
