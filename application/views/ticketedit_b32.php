チケット編集ページb32<br/>
<hr/>
ユーザー編集
<?php echo form_open_multipart('http://coper-bugs.com/bug/ticketupdate');?>
<input type="hidden" name="ticket_id" value="<?php echo $ticketedit[0]["ticket_id"];?>">
チケット種類(必須)<br/>
<input type="text" name="type" value="<?php echo $ticketedit[0]["type"];?>"><br/>
<input type="submit" value="登録(チケット編集完了ページb33へ)">
</form>
