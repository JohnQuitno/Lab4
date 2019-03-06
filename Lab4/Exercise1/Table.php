<?php
echo " <table>";
for($x=0;$x<=100;$x++)
{
  echo "<tr>";
  for($y=0;$y<=100;$y++)
  {
    $z = $x * $y;
    echo "<td>$z</td>";
  }
  echo "</tr>";
}
echo " </table>";
?>
