<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<div align="center">
    <br>
    <h2 style="font-size: 20px;">โปรแกรมแลกเงิน3สกุลเงินกับสกุลเงินบาทไทย</h2>

<?php
  $money=$_POST['money'];
  $coin=$_POST['coin'];

switch ($coin) {
case 1:
  $coin_m=0.22181;
  $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." ดอลลาร์ฮ่องกง (HKD)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." ดอลลาร์ฮ่องกง (HKD)";
break;

case 2:
  $coin_m=32.8685;
  $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." วอนเกาหลีใต้ (KRW)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." วอนเกาหลีใต้ (KRW)";
break;

case 3:
  $coin_m=3.2248;
  $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m."  เยนญี่ปุ่น (JPY)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)."  เยนญี่ปุ่น (JPY)";
break;
}

?>

  <div align="center"><br><a href="index.html" style="text-decoration: none; color: #6699FF;">กลับ</a>
  </div>

</div>
</body>
</html>
