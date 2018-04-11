ステータス編集ページb26<br/>
<hr/>
ステータス編集
<?php echo form_open_multipart('http://coper-bugs.com/bug/statusupdate');?>
<input type="hidden" name="status_id" value="<?php echo $statusedit[0]["status_id"];?>">
ステータス(必須)<br/>
<input type="text" name="status" value="<?php echo $statusedit[0]["status"];?>"><br/>
<input type="submit" value="登録(ステータス編集完了ページb24へ)">
</form>
