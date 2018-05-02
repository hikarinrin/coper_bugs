<!DOCTYPE html>
<html>
<head>
<title>バグ一覧ページ</title>
</head>
<body>
<h3>バグ一覧</h3>    
<p><input type="button" onclick="location.href='http://coper-bugs.com/bug/add'" value="チケット作成" ></p>
<p><input type="button" onclick="location.href='http://coper-bugs.com/bug/master'" value="マスタ設定" ></p>

<table>
<tr>
<th>タイトル</th>
<th>チケット種類</th>
<th>ステータス</th>
<th>最終更新履歴</th>
</tr>
<tr>
<td>aaa</td>    
<td>aaa</td>    
<td>aaa</td>    
<td>aaa</td>    
</tr>


</table><?php
echo $this->table->generate($records);
echo $this->pagination->create_links();
?>
</body>
</html>
<style>
table {
    border-collapse: collapse;
}
td {
    border: solid 1px;
    padding: 0.5em;
}
</style>
 
