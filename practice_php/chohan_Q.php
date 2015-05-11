<?php

$sais = array(mt_rand(1, 6),mt_rand(1, 6));

echo "サイコロ1：{$sais[0]}\n";
echo "サイコロ2：{$sais[1]}\n";

// http://php.net/manual/ja/function.sort.php
$sais = sort($sais);

$result = "";
/*
 * 課題：if,switchなどを駆使して、サイコロの結果を文字列$resultに格納し、結果をechoするように実装せよ。
 * ヒント：丁半ルール（http://ja.wikipedia.org/wiki/%E4%B8%81%E5%8D%8A#.E5.87.BA.E7.9B.AE）
 *        sort関数を実行している理由を考えること
 */
echo "結果は：{$result}";