
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
  echo 'あなたはInternet Explorerを使用しています<br />';
}
// ↓DB接続のための記述
$new_mysqli = new mysqli('localhost', 'root', 'root', 'akanegumo');
// ↓変数にsql文を代入
$sql = 'select id,name from user whene ';

// ↓queryに$sqlを渡す
$result = $new_mysqli->query($sql);
 
// ↓queryの結果は配列で返ってくるのでforeachで取り出す
foreach($result as $val) {
    echo $val['id']. '<br />';
    echo $val['name']. '<br />';
}

?>
