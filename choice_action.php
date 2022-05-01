<?php

$drink = $_GET['drink'];
$totalMoney = $_GET['total-money'];

//$dl = $_GET[$drinkList]; 배열을 가져오고 싶은데....
$drinkList = array(1=>'이프로', 2=>'포카리스웨트', 3=>'게토레이', 4=>'펩시콜라', 
                5=>'코카콜라', 6=>'스프라이트', 7=>'삼다수', 8=>'하늘보리');

$priceList = array('2000', '1800', '2000', '1400', 
                '1500', '2000', '800', '1000');

$price = $priceList[$drink-1];
$change = $totalMoney - $price;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자판기</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>음료수와 거스름돈을 가져가세요</h2>
    <div class="container">
        <p id="result"><?php echo "{$drinkList[$drink]}({$price})" ?></p>
        <p id="change">거스름돈: <?php echo $change ?>원</p>
    </div>

    <a href="index.html">처음으로</a>
</body>
</html>
