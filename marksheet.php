
<?php

$name="Ravi";
$regno=1;

$s1=40;
$s2=50;
$s3=60;
$s4=70;
$s5=10;

$t=$s1+$s2+$s3+$s4+$s5;
$p=$t/5;

if($p>=60)
{
echo "first class";
}
if($p>=50 and $p<60)
{
echo "Second class";
}
if($p>=40 and $p<50)
{
echo "Third class";

}

if($p<40)
{
echo "fail";

}
echo "<br>";
if($s1>=35 and $s2>=35 and $s3>=35)
{
$r="pass";
}
else
{
$r="fail";
}

echo $r;
echo $t;
echo $p;

?>


 