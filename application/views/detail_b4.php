チケット種類<br/>
<?php foreach($ticket as $key=>$val) {
    foreach($ticketlist as $key2 => $val2){
        if($val2['ticket_id']==$val['ticket_id']){
            echo $val2['type'];
        }
    }
}?>
<br>
タイトル<br/>
<?php echo $detail[0]["title"];?><br>
デバイス<br/>
<?php foreach($device as $key3 => $val3){
    foreach($devicelist as $key4 => $val4){
        if($val4['device_id']==$val3['device_id']){
            echo $val4['hard'];
        }
    }
}?>
<br>
重要度<br/>
<?php foreach($importance as $key5 => $val5){
    foreach($importancelist as $key6 => $val6){
        if($val6['importance_id']==$val5['importance_id']){
            echo $val6['level'];
        }
    }
}?>
<br>
ステータス<br/>
<?php foreach($status as $key7 => $val7){
    foreach($statuslist as $key8 => $val8){
        if($val8['status_id']==$val7['status_id']){
            echo $val8['status'];
        }
    }
}?>
<br/>
対象ページ(URL)<br/>
<?php echo $detail[0]["URL"];?><br>
CACOOページ<br/>
<?php echo $detail[0]["CACOO"];?><br>
内容<br/>
<?php echo $detail[0]["content"];?><br>
<html>
<a href="<?php echo base_url();?>bug/edit/<?php echo $detail[0]["bug_id"] ?>">編集</a>
</html>
