<?php

// 元テキストを開く
$text = file_get_contents("eyemovic.txt");

// URLを抽出
if(preg_match_all('(https?://[-_.!~*\'()a-zA-Z0-9;/?:@&=+$,%#]+)', $text, $matches) !== false){
    foreach ($matches[0] as $value)
	echo $value."\n";
}

// アルファベット順にソート

// 重複削除

// 先頭、末尾にあるクォーテーションを削除　

// 改行


?>