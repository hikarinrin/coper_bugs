<!DOCTYPE html>
<html>
<head>
<title>バグ一覧ページ</title>
</head>
<body>

<!-- wrapp -->
<div class="wrapp">
 
    <!-- side_bar -->
<div class="side_bar">
<h2>bug check</h2>
<input type="button" onclick="location.href='http://coper-bugs.com/bug/add'" value="チケット作成" style="WIDTH: 100px; HEIGHT: 100px">
<br>
<input type="button" onclick="location.href='http://coper-bugs.com/bug/master'" value="マスタ設定" style="WIDTH: 100px; HEIGHT: 100px">

    </div>
    <!-- /side_bar -->
 
    <!-- container -->
    <div class="container">
 
        <!-- contents -->
        <div class="contents">
            <h2>バグ一覧</h2>

<table>
<tr>
<th>タイトル</th>
<th>チケット種類</th>
<th>ステータス</th>
<th>最終更新履歴</th>
<th>詳細</th>
</tr>
	<?php foreach ($bugs as $key1 => $bug_row) : ?>
		<tr>
			<?php foreach ($bug_row as $key2 => $bug) : ?>
				<?php if ($key2 == 'bug_id') : ?>
				<td><a href="<?php echo base_url()."/bug/detail/".$bug ?>">詳細</a></td>
			    <?php else: ?>
				<td><?php echo $bug ?></td>
				<?php endif ?>
			<? endforeach; ?>
		</tr>
	<?php endforeach; ?>
</table>
	<?php for ($page=1; $page <= $pagination ; $page++) : ?>
		<a href="<?php echo base_url()."/bug/toplist/".$page ?>"><?php echo $page; ?></a>
	<?php endfor; ?>
</div>
</div>
</body>
</html>
        </div>
        <!-- /contents -->
 
    </div>
    <!-- /container -->
 
</div>
<!-- /wrapp -->
	
<style>
body {
  margin: 0;
  padding: 0;
  background: url(bg_body.gif) repeat; /* 背景画像(白の1x1) */
  background-attachment: fixed;
}
 
.wrapp {
  position: relative; /* IE6のサイドバー固定用 */
  width: 100%;
  margin: 0 auto;
}
 
.container {
  width: 500px;
  padding:  0 0 0 250px; /* サイドバーとの距離 */
}
 
.side_bar {
  position: fixed; /* スクロールしても位置を固定 */
  
  width: 228px;
  height: 100%;
  padding: 10px;

  background-color:#C8E9F4;
}
 
.contents {
  width: 1000px;
  padding: 10px;

}
 
/* IE6 */
.side_bar    {
  _position: absolute;
  _top: expression(eval(document.documentElement.scrollTop+54)); /* サイドバー位置調整 */
}

table {
    border-collapse: collapse;
}
td {
    border: solid 1px;
    padding: 0.5em;
}
</style>
