<?php
//連想配列
// $goods = [
//     'id' => "R56",
//     'size' => "M",
//     'price' =>  2340
// ];

// print_r($goods);
// echo "id:".$goods['id']."\n";
// echo "サイズ:".$goods['size']."\n";
// echo "価格:".$goods['price']."円\n";



// 文字列から配列
// $data = "赤井一郎,伊藤　淳,郡司昂";
// $delimiter = ",";
// $nameList = explode($delimiter, $data);
// print_r($nameList);



// foreach文
// $nameList = ["田中太朗", "山田花子", "郡司昂"];
// echo "<ol>","\n";
// foreach($nameList as $value){
//     echo "<li>", $value, "さん</li>\n";
// }
// echo "</ol>\n";

// $data = ["id"=>5555, "名前"=>"郡司昂", "年齢"=>26];
// echo "<ul>";
// foreach($data as $a => $b){
//     echo "<li>", $a, ": ", $b, "</li>";
// }
// echo "</ul>";


// // 配列の値を比較　$isIn = in_array($value, $array);
// // チェックする番号
// $numList = [1000, 2000, 3000, 5000];
// // 合格
// $numbers = [1000,3000];
// // チェック関数
// function checkNumber($no){
//     global $numbers;
//     if (in_array($no, $numbers)){
//         echo "{$no}番は合格です。";
//     } else {
//         echo "{$no}番は見つかりません。";
//     }
// }
?>
<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>配列を検索する</title>
    </head>
    <body>
    //<?php
    //echo "<ol>";
    //foreach ($numList as $value) {
    //    echo "<li>", checkNumber($value), "</li>";
    //}
    //echo "</ol>";
    //?>
    </body>
</html> -->


<?php
// // 配列の各要素に関数を適用
// // 配列の値をドルに換算してリスト表示

// // 通過換算コールバック関数
// function exchangeList($value, $key, $rateData) {
//     $rate = $rateData["rate"];
//     if ($rate == 0) {
//         return;
//     }
//     $price = $value/$rate;
//     $exPrice = sprintf("%.02f", $price);

//     echo "<li>", $rateData["symbol"], $exPrice, "</li>";
// }



// $priceList = [1000, 1500, 1800];

// $dollaryen = ["symbol"=>"$", "rate"=>112.50];

// echo "<ul>";
// array_walk($priceList, "exchangeList", $dollaryen);
// echo "</ul>";
?>