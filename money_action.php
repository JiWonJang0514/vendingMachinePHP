<?php

//돈을 투입
$thousand = $_GET['thousand'];
$fiveHund = $_GET['five-hund'];
$oneHund = $_GET['one-hund'];

//돈을 안넣었을 경우
if ($thousand == "")
{
    $thousand = 0;
}
if ($fiveHund == "")
{
    $fiveHund = 0;
}
if ($oneHund == "")
{
    $oneHund = 0;
}

//투입금액 합계
$totalMoney = ($thousand*1000) + ($fiveHund*500) + ($oneHund*100);

//모든 음료수 리스트
$drinkList = array(1=>'이프로', 2=>'포카리스웨트', 3=>'게토레이', 4=>'펩시콜라', 
                    5=>'코카콜라', 6=>'스프라이트', 7=>'삼다수', 8=>'하늘보리');

$priceList = array('2000', '1800', '2000', '1400', 
                    '1500', '2000', '800', '1000');


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
    <form id="choice" action="choice_action.php">
        <h2>가능한 음료수</h2>
        <div class="container">
            <ul>
                <?php 
                    //투입한 돈으로 살 수 있는 음료수 리스트업
                    foreach ($drinkList as $key => $value)
                    {
                        if ($priceList[$key-1] <= $totalMoney)
                        {
                            echo "<li>{$key}. {$value}({$priceList[$key-1]})</li>";
                        }
                    }
                ?>
            </ul>
        </div>

        <div class="container">
            <p>투입한 금액: <?php echo $totalMoney ?></p>
            <input type="hidden" name="total-money" value=<?php echo "{$totalMoney}" ?>>

            <label for="drink">선택할 음료 번호:</label>
            <input type="text" id="drink" name="drink"> 

            <input type="submit" value="전송">
        </div>
    </form>
    
</body>
</html>
