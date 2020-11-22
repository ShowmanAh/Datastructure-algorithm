<?php
function findBook(Array $bookList, string $bookName){
    $found = false;
    foreach ($bookList as $key => $book) {
        if ($book == $bookName) {
            $found = $key;
        break;
        }
    }
    return $found;
}
function placeAllBooks(Array $orderBooks, Array &$bookList){
   foreach ($orderBooks as $key => $book) {
       $found = findBook($bookList, $book);
       if($found !== false){
       array_splice($bookList, $found, 1);
       }
   } 
}

$bookList = ['PHP','MySQL','PGSQL','Oracle','Java'];
$orderedBooks = ['MySQL','PGSQL','Java'];
placeAllBooks($orderedBooks, $bookList);
echo implode(",", $bookList);
echo "<br>";
$graph = [];
$nodes = ['A', 'B', 'C', 'D', 'E'];
foreach($nodes as $xNode) {
    foreach($nodes as $yNode) {
    $graph[$xNode][$yNode] = 0 ;
    }
    }
    foreach ($nodes as $xNode) {
        foreach ($nodes as $yNode) {
        echo $graph[$xNode][$yNode] . "\t";
        }
        echo "<br>";
        }
        echo "<br>";
        $startMemory = memory_get_usage();
        $array = range(1,100000);
        $endMemory = memory_get_usage();
        echo ($endMemory - $startMemory)." bytes";
        echo "<br>";
        $items = 100000;
$startMemory = memory_get_usage();
$array = new SplFixedArray($items);
for ($i = 0; $i < $items; $i++) {
$array[$i] = $i;
}
$endMemory = memory_get_usage();
$memoryConsumed = ($endMemory - $startMemory) / (1024*1024);
$memoryConsumed = ceil($memoryConsumed);
echo "memory = {$memoryConsumed} MB\n";
?>