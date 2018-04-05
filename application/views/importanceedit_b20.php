
重要度編集ページb20<br/>
<hr/>
重要度編集
<?php echo form_open_multipart('http://coper-bugs.com/bug/importanceupdate');?>
<input type="hidden" name="importance_id" value="<?php echo $importanceedit[0]["importance_id"];?>">
重要度(必須)<br/>
<input type="text" name="level" value="<?php echo $importanceedit[0]["level"];?>"><br/>
<input type="submit" value="登録(重要度編集完了ページb21へ)">
</form>
