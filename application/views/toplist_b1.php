<!DOCTYPE html>
<html>
<head>
<title>バグ一覧ページ</title>
</head>
<body>
<div style="padding: 10px; margin-left:100px; margin-right:100px;  border: 1px solid #333333; background-color:#E6E6E6;"><h3>バグ一覧</h3>
<input type="button" onclick="location.href='http://coper-bugs.com/bug/add'" value="チケット作成" >
<input type="button" onclick="location.href='http://coper-bugs.com/bug/master'" value="マスタ設定" >
<table>
<tr>
<th>タイトル</th>
<th>チケット種類</th>
<th>ステータス</th>
<th>最終更新履歴</th>
</tr>
	<?php foreach ($bugs as $key1 => $bug_row) : ?>
		<tr>
			<?php foreach ($bug_row as $key2 => $bug) : ?>
				<td><?= $bug ?></td>
			<? endforeach; ?>
		</tr>
	<?php endforeach; ?>
</table>
	<?php for ($page=1; $page <= $pagination ; $page++) : ?>
		<a href="<?php echo base_url()."/bug/toplist/".$page ?>"><?php echo $page; ?></a>
	<?php endfor; ?>
</div>
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
