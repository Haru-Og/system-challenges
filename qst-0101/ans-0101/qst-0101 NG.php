<?php
// 元テキストを開く
$text = file_get_contents("eyemovic.txt");

// URLを抽出
preg_match_all('(https?://[-_.!~*\'()a-zA-Z0-9;/?:@&=+$,%#]+)', $text, $matches);

// 重複削除
$matches = array_unique($matches);

// 先頭、末尾にあるクォーテーションを削除
$matches = trim($matches, '"'');

// アルファベット順にソート
$matches = sort($matches);

// 改行、出力
foreach($matches as $value){
    echo $value."\n";
	}
?>
