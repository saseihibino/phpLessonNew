<?php
// 以下をそれぞれ表示してください。（すべて改行を行って出力すること)
// 現在時刻を自動的に取得するPHPの関数があるので調べて実装してみて下さい。
// 実行するとその都度現在の日本の日時に合わせて出力されるされるようになればOKです。
// 日時がおかしい場合、PHPのタイムゾーン設定を確認して下さい。
date_default_timezone_set('Asia/Tokyo');
$week = ["日","月","火","水","木","金","土"];
$date = new DateTime();
$nowDate = $date->format('Y年m月d日');
$weekNumber = $date->format('w');
$nowTime = $date->format('H時i分s秒');
$nowWeek = $week[$weekNumber];
$mThreeDate = $date->modify('+3 day');
$mDate = $date->format('Y年m月d日');
$mTwentyH = $date->modify('-12 hour');
$mTime = $date->format('H時i分s秒');

$dateGantan = new DateTime("2020-01-01");
$date2 = $date->diff($dateGantan);
$date3 = $date2->format('%a');

echo "・現在日時（{$nowDate}（{$nowWeek}））<br>";
echo "・現在日時から3日後（{$mDate} {$nowTime}）<br>";
echo "・現在日時から12時間前（{$nowDate} {$mTime}）<br>";
echo "・2020年元旦から現在までの経過日数（{$date3}）";
// ・現在日時（xxxx年xx月xx日（x曜日））
// ・現在日時から３日後（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から１２時間前（yyyy年mm月dd日 H時i分s秒）
// ・2020年元旦から現在までの経過日数 (ddd日)