<?php

$dice = array(mt_rand(1, 6),mt_rand(1, 6));
echo "サイコロ1：{$dice[0]}\n";
echo "サイコロ2：{$dice[1]}\n";
echo "結果は：";
echo callDice($sais);
echo judgeDice($sais);

function callDices($sais){
	sort($sais);
	if($sais[0] === 1){
		switch ($sais[1]) {
			case 1:
				return  "ピンゾロ";
				break;
			case 2:
				return  "イチニ";
				break;
			case 3:
				return "サンミチ";
				break;
			case 4:
				return "ヨイチ";
				break;
			case 5:
				return "グイチ";
				break;
			case 6:
				return "イチロク";
				break;
			default:
				break;
		}
	}elseif($sais[0] === 2){
		switch ($sais[1]) {
			case 2:
				return "ニゾロ";
				break;
			case 3:
				return "サニ";
				break;
			case 4:
				return "シニ";
				break;
			case 5:
				return "グニ";
				break;
			case 6:
				return "ニロク";
				break;
			default:
				break;
		}
	}elseif($sais[0] === 3){
		switch ($sais[1]) {
			case 3:
				return "サンゾロ";
				break;
			case 4:
				return "シソウ";
				break;
			case 5:
				return "グサン";
				break;
			case 6:
				return "サブロク";
				break;
			default:
				break;
		}
	}elseif($sais[0] === 4){
		switch ($sais[1]) {
			case 4:
				return "シゾロ";
				break;
			case 5:
				return "グシ";
				break;
			case 6:
				return "シロク";
				break;
			default:
				break;
		}
	}elseif($sais[0] === 5){
		switch ($sais[1]) {
			case 5:
				return "ゴゾロ";
				break;
			case 6:
				return "ゴロク";
				break;
			default:
				break;
		}
	}elseif($sais[0] === 6){
		switch ($sais[1]) {
			case 6:
				return "ロクゾロ";
				break;
			default:
				break;
		}
	}
	return '';
}

function judgeDice($sais){
	return (($sais[0] + $sais[1]) % 2 === 0) ? "丁":"半";
}