<!DOCTYPE html>
<html>
<head>
 <title>Triangle</title>
</head>
<body>
 <form action='' method='get'>
 Length of Side 1:<input type="number" name="s1"><br>
 Length of Side 2:<input type="number" name="s2"><br>
 Length of Side 3:<input type="number" name="s3"><br>
    <input type='submit' name='submit' value='submit'><br>
<?php
if (isset($_GET['submit']) )
{
$s1 = $_GET['s1'];
$s2 = $_GET['s2'];
$s3 = $_GET['s3'];
if ($s1+$s2>$s3&&$s2+$s3>$s1&&$s1+$s3>$s2)
  {
  if($s1==$s2&&$s1==$s3)
  echo "it is an equilateral triangle";
else if($s1==$s2||$s1==$s3||$s2==$s3)
  echo "it is an isosceles triangle";
else if(($s1*$s1)+($s2*$s2)==($s3*$s3)||($s1*$s1)+($s3*$s3)==($s2*$s2)||($s2*$s2)+($s3*$s3)==($s1*$s1))
  echo "it is a right angled triangle";
else if ($s1!=$s2 && $s2!=$s3 && $s3!=$s1)
  echo "it is a scalene triangle";
}
else
echo "it is not a triangle";
}
 ?>
</form>
</body>
</html>
