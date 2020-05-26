<?php

require_once(__DIR__ .'/config.php');
require_once(__DIR__ .'/Bingo.php')

$bingo = new \MyApp\Bingo();
$nums =$bingo->create();

/*nums[]
B: $nums[0] 1-15
I: $nums[1] 16-30
N: $nums[2] 
G: $nums[3]
O: $nums[4]

$nums[$i] $i * 15 +1 〜 $i *15 +15
*/

//numsを初期化
$nums = [];
//
for($i = 0 ; $i < 5 ; $i++){
    //range関数で範囲内のランダムな数値を取得
    $col = range($i * 15 +1 , $i *15 +15);
    //$colをsシャッフル
    shuffle($col);
    //配列に代入
    $nums[$i] = array_slice($col,0,5);
}

$nums[2][2] = 'FREE';

$ids= [];
for($i = 0 ; $i < 5 ; $i++){
    //range関数で範囲内のランダムな数値を取得
    $id = range($i * 5 +1 , $i *5 +5);
    //配列に代入
    $ids[$i] = array_slice($id,0,5);
}
// var_dump($nums);

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>syagasaki_BINGO!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
    <table>
    <!-見出し行を作る ->
    <tr>
     <th>B</th>
     <th>I</th>
     <th>N</th>
     <th>G</th>
     <th>O</th>
     </tr>
     <!-1行目以降を作る ->
     <?php for ($i = 0; $i < 5; $i++) : ?>
     <tr>
     <?php for ($j = 0; $j < 5; $j++) : ?>
     <td id="<?= h($ids[$j][$i]); ?>" class="default"><?= h($nums[$j][$i]); ?></td>
     <?php endfor; ?>
     </tr>
     <?php endfor; ?>
    </table>
    </div>
    <div id="message">

    </div>
    <script>

//FREEはデフォルト黒背景にする。
let id13 = document.getElementById("13");
window.addEventListener("DOMContentLoaded", () => {
    id13.classList.remove("default");
    id13.classList.add("clicked");
});

//各数字マスを、クリックされたら黒背景、もう一度クリックされたら白背景に戻す。
let id1 = document.getElementById("1");
id1.addEventListener("click", () => {
    id1.classList.toggle("default");
    id1.classList.toggle("clicked");

// ビンゴでメッセージ表示を試すもあまりよくないなあ・・・できるけど。
//     let getClass1 = id1.getAttribute("class");
//     let getClass2 = id2.getAttribute("class");
//     if (getClass1 == "clicked" && getClass2 == "clicked"){
//   let p = document.createElement("p");
//   p.innerHTML = "congratulations!";
//   document.getElementById("message").appendChild(p);
// }

});

let id2 = document.getElementById("2");
id2.addEventListener("click", () => {
    id2.classList.toggle("default");
    id2.classList.toggle("clicked");
});

let id3 = document.getElementById("3");
id3.addEventListener("click", () => {
    id3.classList.toggle("default");
    id3.classList.toggle("clicked");
});

let id4 = document.getElementById("4");
id4.addEventListener("click", () => {
    id4.classList.toggle("default");
    id4.classList.toggle("clicked");
});

let id5 = document.getElementById("5");
id5.addEventListener("click", () => {
    id5.classList.toggle("default");
    id5.classList.toggle("clicked");
});

let id6 = document.getElementById("6");
id6.addEventListener("click", () => {
    id6.classList.toggle("default");
    id6.classList.toggle("clicked");
});

let id7 = document.getElementById("7");
id7.addEventListener("click", () => {
    id7.classList.toggle("default");
    id7.classList.toggle("clicked");
});

let id8 = document.getElementById("8");
id8.addEventListener("click", () => {
    id8.classList.toggle("default");
    id8.classList.toggle("clicked");
});

let id9 = document.getElementById("9");
id9.addEventListener("click", () => {
    id9.classList.toggle("default");
    id9.classList.toggle("clicked");
});

let id10 = document.getElementById("10");
id10.addEventListener("click", () => {
    id10.classList.toggle("default");
    id10.classList.toggle("clicked");
});

let id11 = document.getElementById("11");
id11.addEventListener("click", () => {
    id11.classList.toggle("default");
    id11.classList.toggle("clicked");
});

let id12 = document.getElementById("12");
id12.addEventListener("click", () => {
    id12.classList.toggle("default");
    id12.classList.toggle("clicked");
});

let id14 = document.getElementById("14");
id14.addEventListener("click", () => {
    id14.classList.toggle("default");
    id14.classList.toggle("clicked");
});

let id15 = document.getElementById("15");
id15.addEventListener("click", () => {
    id15.classList.toggle("default");
    id15.classList.toggle("clicked");
});

let id16 = document.getElementById("16");
id16.addEventListener("click", () => {
    id16.classList.toggle("default");
    id16.classList.toggle("clicked");
});

let id17 = document.getElementById("17");
id17.addEventListener("click", () => {
    id17.classList.toggle("default");
    id17.classList.toggle("clicked");
});

let id18 = document.getElementById("18");
id18.addEventListener("click", () => {
    id18.classList.toggle("default");
    id18.classList.toggle("clicked");
});

let id19 = document.getElementById("19");
id19.addEventListener("click", () => {
    id19.classList.toggle("default");
    id19.classList.toggle("clicked");
});

let id20 = document.getElementById("20");
id20.addEventListener("click", () => {
    id20.classList.toggle("default");
    id20.classList.toggle("clicked");
});

let id21 = document.getElementById("21");
id21.addEventListener("click", () => {
    id21.classList.toggle("default");
    id21.classList.toggle("clicked");
});

let id22 = document.getElementById("22");
id22.addEventListener("click", () => {
    id22.classList.toggle("default");
    id22.classList.toggle("clicked");
});

let id23 = document.getElementById("23");
id23.addEventListener("click", () => {
    id23.classList.toggle("default");
    id23.classList.toggle("clicked");
});

let id24 = document.getElementById("24");
id24.addEventListener("click", () => {
    id24.classList.toggle("default");
    id24.classList.toggle("clicked");
});

let id25 = document.getElementById("25");
id25.addEventListener("click", () => {
    id25.classList.toggle("default");
    id25.classList.toggle("clicked");
});

//ビンゴになったらビンゴメッセージを表示する。
// function setMessage() {
//     let p = document.createElement("p");
//     p.innerHTML = "congratulations!";
// document.getElementById("message").appendChild(p);
// }

// //各マスのクラスを取得
// let getClass = id1.getAttribute("class");


// if (getClass == "default"){
//   let p = document.createElement("p");
//   p.innerHTML = "congratulations!";
//   document.getElementById("message").appendChild(p);
// }

     </script>

</body>
</html>