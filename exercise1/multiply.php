<$php
echo "<table>", makeTable(), "</table>";

function makeTable()
{
  for($i = 0; $i <= 100; $i++)
  {
    echo "<tr>" , addrow($i) , "</tr>";
  }
}

function addrow($n)
{
  for($i = 0; $i <= 100; $i++)
  {
    if($n == 0)
    {
      $k = $i;
    }
    else if($i == 0)
    {
      $k = $n;
    }
    else
    {
      $k = $i * $n;
    }
    echo "<td>" . $k . "</td>";
  }
}

$>
