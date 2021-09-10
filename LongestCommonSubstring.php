<?php
    /**
    * @input $a -> string
    * @input $b -> string
    */
    // return an integer //

    
function solve($a, $b)
{
    $m = strlen($a)+1; // the +1 accounts for the empty string ""
    $n = strlen($b)+1; // the + 1 accounts for the empty string ""
    $matrix = array(); // DP table
    #echo "The value of m == $m and the value of n == $n\n";
    // Create matrix and fill it with appropriate values.

    for ($col = 0; $col < $m; $col++) 
    {

        for ($row = 0; $row < $n; $row++) 
        {
            $matrix[$row][$col] = 0;
            $p_row = $row+1;
            $p_col = $col+1;
        }

    }


  

    for ($i = 1; $i < $n; $i++) 
    {

        for ($j = 1; $j < $m; $j++) 
        {

            if( $a[$j - 1] == $b[$i - 1] )
            {
                $matrix[$i][$j] = 1 + $matrix[$i - 1][$j - 1];
            }
            else
            {
                $matrix[$i][$j] = max( $matrix[$i - 1][$j] , $matrix[$i][$j - 1]);
            }

        }

    }
    return $matrix[$n - 1][$m - 1];
}

// Driver code 
$res = solve("dddccbedccbccdecadabad","eeddaabbdbeddbecbdcddb");
echo $res;

?>
