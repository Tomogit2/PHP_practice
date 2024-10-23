文字列の長さを取得するには strlen() 関数を使います。

$result = match ($value) {
    条件1 => '処理1',
    条件2 => '処理2',
    条件3 => '処理3',
    default => 'その他の処理',
};



$value = '0';

$result = match ($value) {
    0 => '整数のゼロ',  // '0' とは一致しない
    '0' => '文字列のゼロ',
};
echo $result;  // 出力: 文字列のゼロ



$day = '火曜日';

$result = match ($day) {
    '月曜日' => '週の始まり',
    '火曜日' => 'ちょっと忙しい',
    '水曜日' => '週の真ん中',
    '木曜日' => 'そろそろ疲れてきた',
    '金曜日' => 'もうすぐ週末',
    default => '休日',
};

echo $result;  // 出力: ちょっと忙しい




$score = 85;

$result = match (true) {
    $score >= 90 => '優秀',
    $score >= 80 => '良い',
    $score >= 70 => '普通',
    default => 'がんばろう',
};

echo $result;  // 出力: 良い



$b = 3;
$c = $b ** 2;  // $c には 3^2、つまり 9 が代入されます。
echo $c;       // 出力は 9



$n = 2;
$p = 3;
++$n;  // インクリメント演算子（++）は、変数の値を1増やします。
$p *= 2;
$a = "$n, $p";
--$n;
$p *= 3;
$b = "$n, $p";
print $a . ' / ' . $b;



rsort()関数
rsort() は配列の値を降順にソートします。キーは無視され、ソート後に再インデックスされます。

$num = [3, 1, 4, 1, 5, 9];
rsort($num);
print_r($num);

arsort()関数
arsort() は配列の値を降順にソートしますが、キーは保持されます。

krsort()関数
krsort() は配列のキーを降順にソートします。値はそのまま保持され、キーだけが降順になります。


$flowers = array(
    array('rose', 'hibiscus', 'tulip'),          // $flowers[0]
    array('snowdrop','lily','gardenia'),         // $flowers[1]
    array('lavender','gentian','pansy'),         // $flowers[2]
    array('dandelion','sun flower','marigold')   // $flowers[3]
);


