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



