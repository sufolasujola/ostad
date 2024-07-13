<?php
/*for( $i = 0; $i < 10; $i++ ){
    echo $i;
    echo PHP_EOL;
    for($j = 0; $j < $i; $j++){
        echo '*';
    }
    echo PHP_EOL;
} */
/*
$i=0;
while($i<10){
echo $i;
$i+=1;   
echo PHP_EOL;  
}*/

/* $i=0;
do{
echo $i;
$i+=1;   
echo PHP_EOL; 
}while($i<10);
*/

/* function iseven($n){
    if($n%2== 0){
        return True;
}else{
    return False;
}
}
$x=13;
if(iseven($x)){
    echo"{$x} is an even number";
}
else{
    echo "{$x} is an odd number";
} */

/*$string="ostad";
$stringlen=strlen($string);
echo $stringlen;*/

/*for ($i = 10; $i > 0; $i--){
    echo $i.':'.(10-$i);
    echo PHP_EOL;
}*/
/* for( $i = 10, $j = 0; $i > 0; $i--, $j++ ){
echo $i.':'.$j."\n";
} */
/*
for ($i = 0, $j = 0; $i <100; $i += 7, $j += 11){
    echo $i.':';
    echo $j < 100 ? $j :'';
    echo "\n";
    
}*/

/* for( $i = 0; $i < 100; $i++ ){
    if ($i % 7 == 0) { echo $i.':';}
    if ($i % 11 == 0) {echo $i."\n";}
}*/ 

/* for( $i = 1; $i <=50; $i++ ){
    if($i % 2 == 0){
        continue;
        
    }
    echo $i."\n"; 
}*/

/*
$old=0;
$new= 1;
echo $old."   ";
echo $new."   "; 
for( $i= 0; $i < 5; $i++ ){
    $veryNew= $old + $new;
    echo $veryNew."   ";
    $old = $new;
    $new = $veryNew;
  
}*/

/*function factorial($i){
    $fact = 1;
    for($n = $i; $n >= 1; $n--){
        $fact = $fact * $n;
    }
    return $fact;
}
$x=5;
echo factorial($x);*/

/*function serve($number="3", $item="Tea") {
    echo "{$number} of {$item} have been served";
}
$n="2 cups";
$i="Coffee";

serve($n, $i);*/
/*function sum(int $x, float $y, int $z){
    return $x + $y + $z;
}
echo 'summation is: '.sum(4,5.5,6);*/ 
/*function summation(int ...  $numbers): int {
    $sum=0;
    for( $i = 0; $i < count($numbers); $i++ ){
        $sum+=$numbers[$i];
}
return $sum;
}
echo 'summation is: '.summation(3,5,7,9);*/
/*
function doTaskA(){
    echo "TaskA Done";
}
function doTaskB(){
    echo "TaskB Done";
}
function doTaskC(){
    echo "TaskC Done";
}
function doTaskD(){
    echo "TaskD Done";
}

function doTheLargerTask(){
   doTaskA(); 
   doTaskB();
   doTaskC();
   doTaskD();
}
doTheLargerTask();*/

/*function printN($start, $end, $stepping=2) {
       if ($start > $end) {
        return;
}
echo $start."\n";
$start+=$stepping;
printN($start, $end);
}
printN(1,20); */

/*function fibonaccy($old, $new, $start, $end){
    
    if( $start > $end ){
        return;
    }
    echo $old."\n";
    $start++;
    $veryNew=$old+$new;
    $old = $new;
    $new= $veryNew;
   fibonaccy($old,$new,$start,$end);

}
fibonaccy(0,1,1,6);*/

function fibonaccy($old, $new,$end){
    static $start;
    $start = $start?? 0;
    
    if( $start > $end ){
        return;
    }
    echo $old."\n";
    $start++;
    $veryNew=$old+$new;
    $old = $new;
    $new= $veryNew;
   fibonaccy($old,$new,$end);

}
fibonaccy(0,1,6);
