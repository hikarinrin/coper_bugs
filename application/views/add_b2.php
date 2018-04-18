バグ作成b2
<br/>
チケット作成<br/>
<?php echo form_open_multipart('http://coper-bugs.com/bug/done');?>
担当者：<br/>
チケット種類(必須):<?php foreach ($ticket as $key => $val) {?>
<input type="checkbox" name="ticket[]" value="<?php echo $val['ticket_id'];?>"><?php echo $val['type'];?>
<?php }?></br>

タイトル(必須)<br/>
<input type="text" name="title"><br/>
デバイス<br/>
<?php foreach ($device as $key => $val) {?>
<input type="checkbox" name="device[]" value="<?php echo $val['device_id'];?>"><?php echo $val['hard'];?>
<?php }?></br>
重要度(必須)<br/>
<?php foreach ($importance as $key => $val) {?>
<input type="checkbox" name="importance[]" value="<?php echo $val['importance_id'];?>"><?php echo $val['level'];?>
<?php }?></br>
ステータス(必須)<br/>
<?php foreach ($status as $key => $val) {?>
<input type="checkbox" name="status[]" value="<?php echo $val['status_id'];?>"><?php echo $val['status'];?>
<?php }?></br>
<input type="file" name="photo"><br>
対象URLページ<br/>
<input type="text" name="URL"><br/>
CACOOページ<br/>
<input type="text" name="CACOO"><br/>
内容(必須)<br/>
<input type="text" name="content"><br/>
<input type="submit" value="登録">
</form>


