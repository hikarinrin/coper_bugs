<?php include ('side.html'); ?>
<h2>ユーザー編集</h2><br/>
<hr/>
ユーザー編集
<?php echo form_open_multipart('http://coper-bugs.com/bug/userupdate');?>
<input type="hidden" name="user_id" value="<?php echo $useredit[0]["user_id"];?>">
名前(必須)<br/>
<input type="text" name="name" value="<?php echo $useredit[0]["name"];?>"><br/>
メールアドレス<br/>
<input type="text" name="mail" value="<?php echo $useredit[0]["mail"];?>"><br/>
パスワード(必須)<br/>
<input type="text" name="pass" value="<?php echo $useredit[0]["pass"];?>"><br/>
<input type="submit" value="登録">
</form>
