function adjacentElementsProduct($inputArray)
{
    $max_pair = [];
    
    for($i = 0, $a = count($inputArray); $i < $a - 1; $i ++)
    {
        $max_pair[] = $inputArray[$i] * $inputArray[$i+1];
    }
    
    return max($max_pair);
}
