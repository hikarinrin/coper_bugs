ここがトップb1です。
<hr/>
バグ一覧<br/>
<a href="<?php echo base_url()."bug/add"?>">チケット作成b2へ</a><br/>
<a href="<?php echo base_url()."bug/master"?>">マスタ設定b9へ</a><br/>
タイトル<br/>
<?php foreach($buglist as $key => $val) { ?>
<a href="<?php echo base_url()."bug/detail/".$val['bug_id']?>"><?php echo $val['title']; ?></a><br/>
<!--チケット種類<br/>
<?php foreach($ticket as $key=>$val) {
    foreach($ticketlist as $key2 => $val2){
        if($val2['ticket_id']==$val['ticket_id']){
            echo $val2['type'];
        }
    }
}?><br/>
重要度<br/>
<?php foreach($importance as $key5 => $val5){
    foreach($importancelist as $key6 => $val6){
        if($val6['importance_id']==$val5['importance_id']){
            echo $val6['level'];
        }
    }
}?><br/>
ステータス<br/>
<?php foreach($status as $key7 => $val7){
    foreach($statuslist as $key8 => $val8){
        if($val8['status_id']==$val7['status_id']){
            echo $val8['status'];
        }
    }
}?><br/>
最終更新履歴<br/>
<br/>-->
<?php } ?>
ページ遷移：調べておく。<br/>

<?php
    print "<pre>";
    var_dump($buglist);
    //$buglist [0] $val['title']
 
