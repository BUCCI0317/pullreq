<?php


/* 課題① 今日の日時 */
echo date("現在、Y/m/d H:i:s"), "<br><br>";

/* 課題② 昨日、明日、一週間後の日付 */ 
$date = new Datetime('now');

echo date("昨日はY年m月d日です。",strtotime("now -1 day")),"<br>";
echo date("明日はY年m月d日です。", strtotime("now +1 day")),"<br>";
echo date("一週間後はY年m月d日です。",strtotime("now +1 week")),"<br><br>";

/* 課題③ 今日から3ヶ月後の日付、その日付が今日から何日後か */
echo date("今日から3ヶ月後はY年m月d日です。",strtotime("now +3 month")),"<br>";

$date1 = strtotime('today');
$date2 = strtotime('today +3 month');
$date3 = ($date2 - $date1) / 86400;
echo "今日から" , $date3 , "日後です。";


?>