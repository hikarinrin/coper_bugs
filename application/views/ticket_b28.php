チケット一覧ページb28<br/>
<hr/>
<a href="<?php echo base_url()."bug/ticketadd"?>">新規作成(チケット作成b29へ)</a><br/>
<?php foreach($ticket as $key => $val){?>
<a href="<?php echo base_url()."bug/ticketdetail/".$val['ticket_id']?>">
<?php echo $val['type']."(チケット詳細へb31)";?><br/>
</a>
<?php } ?>


ページ書く
