<?php session_start(); ?>
<?php
date_default_timezone_set('Asia/Tokyo');
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    $ym = date('Y-m');
}
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}
$today = date('Y-m-j');
$html_title = date('Y年n月', $timestamp);
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
$day_count = date('t', $timestamp);
$youbi = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
$weeks = [];
$week = '';
$week .= str_repeat('<td></td>', $youbi);
// カレンダー
for ( $day = 1; $day <= $day_count; $day++, $youbi++) {
    $date = $ym . '-' . $day;
    $link = '<a href="calender_info.php?date='.$date.'">'.$day.'</a>';
    if ($today == $date) {
        $week .= '<td class="today">' . $link. '</td>';;
    } else {
        $week .= '<td>' . $link .'</td>';;
    }

    // 週終わり、または、月終わりの場合
    if ($youbi % 7 == 6 || $day == $day_count) {
        if ($day == $day_count) {
            $week .= str_repeat('<td></td>', 6 - ($youbi % 7));
        }
        $weeks[] = '<tr>' . $week . '</tr>';
        $week = '';
	}
}
?>
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-6">
    <h3><a href="?ym=<?php print $prev; ?>">&lt;</a> <?php print $html_title; ?> <a href="?ym=<?php print $next; ?>"> &gt;</a></h3>
    <table class="table table-bordered">
            <tr>
                <th>日</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
            </tr>
            <?php foreach($weeks as $week){print $week;}?>
        </table>
        </div>
    </div>
</div>