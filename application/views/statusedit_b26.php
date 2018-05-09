<?php include ('side.html'); ?>
<h2>ステータス編集ページ</h2>
<hr/>
<?php echo form_open_multipart('http://coper-bugs.com/bug/statusupdate');?>
<input type="hidden" name="status_id" value="<?php echo $statusedit[0]["status_id"];?>">
ステータス(必須)<br/>
<input type="text" name="status" value="<?php echo $statusedit[0]["status"];?>"><br/>
<input type="submit" value="登録">
</form>
