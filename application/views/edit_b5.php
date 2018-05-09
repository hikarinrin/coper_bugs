<?php echo form_open_multipart('http://coper-bugs.com/bug/update');?>
<input type="hidden" name="bug_id" value="<?php echo $info[0]["bug_id"]; ?>">
チケット編集<br/>
担当者：<br/>
チケット編集(必須)
<?php
    foreach($ticket as $key =>$val){?>
<input type="radio"
<?php
    foreach($ticketlist as $key2 =>$val2){
        if($val2['ticket_id'] == $val['ticket_id']){
            echo "checked";
        }
    }
    ?> name="ticket[]" value="<?php echo $val['ticket_id']?>">
<?php echo $val['type'];?>
<?php }?>
<br/>
タイトル(必須)<br/>
<input type="text" name="title" value="<?php echo $info[0]["title"]; ?>"><br/>
デバイス<br/>
<?php
    foreach($device as $devkey =>$devval){?>
<input type="radio"
<?php
    foreach($devicelist as $devkey2 =>$devval2){
        if($devval2['device_id'] == $devval['device_id']){
            echo "checked";
        }
    }
    ?> name="device[]" value="<?php echo $devval['device_id']?>">
<?php echo $devval['hard'];?>
<?php }?>
<br/>

重要度(必須)<br/>
<?php
    foreach($importance as $impkey =>$impval){?>
<input type="radio"
<?php
    foreach($importancelist as $impkey2 =>$impval2){
        if($impval2['importance_id'] == $impval['importance_id']){
            echo "checked";
        }
    }
    ?> name="importance[]" value="<?php echo $impval['importance_id']?>">
<?php echo $impval['level'];?>
<?php }?>
<br/>
ステータス(必須)<br/>
<?php
    foreach($status as $stakey =>$staval){?>
<input type="radio"
<?php
    foreach($statuslist as $stakey2 =>$staval2){
        if($staval2['status_id'] == $staval['status_id']){
            echo "checked";
        }
    }
    ?> name="status[]" value="<?php echo $staval['status_id']?>">
<?php echo $staval['status'];?>
<?php }?>
<br/>
<!--<input type="file" name="photo"><br>-->
対象URLページ<br/>
<input type="text" name="URL" value="<?php echo $info[0]["URL"]; ?>"><br/>
CACOOページ<br/>
<input type="text" name="CACOO" value="<?php echo $info[0]["CACOO"]; ?>"><br/>
内容(必須)<br/>
<input type="text" name="content" value="<?php echo $info[0]["content"]; ?>"><br/>
<input type="submit" value="送信">
</form>
