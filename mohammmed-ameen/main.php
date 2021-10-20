<h3 style="color:white;background-color:blue;padding:20px;text-align:center">Assignment5</h3>




<?php 

// add element to array at any position 
// $arr = [1,2,3,4,5,6,7,8];
// expected output 
// [1,2,3,4,$,5,6,7,8]

$arr = [1,2,3,4,5,6,7,8];
$count= count($arr); //8

for($i=0;$i<$count;$i++){
  if($i==3){
    echo "$";
  }
echo $arr[$i];
}

echo "<br>";

foreach($arr as $value){

  if($value==3){
    echo "$";
  }
echo $value;
}

echo "<br>";

// ???????????????????????????







echo "<hr>";






// display this array in table (capital and country name)
// $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
// $count= count($ceu);
// foreach($ceu as $value){
//   echo$value."<br>";
// }
?>

  <head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">Country</th>
      <th scope="col">Capital</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      
      
      <th scope="row">
      <?php foreach($ceu as $value=>$key){?>
      <li><?php echo strtoupper($value)." " ;?></li>
      <?php
      }?>
      </th>

      <td>
      <?php foreach($ceu as $value=>$key){?>
      <li><?php echo strtoupper($key)." " ;?></li>
      <?php
      }?>
      </td>  
      
      
    </tr>

  </tbody>
</table>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php






echo "<hr>";






// convert to array and print values like this 
// Expected Output :
// Title : The Cuckoos Calling
// Author : Robert Galbraith
// Publisher : Little Brown

// {"Title": "The Cuckoos Calling",
// "Author": "Robert Galbraith",
// "Detail": {
// "Publisher": "Little Brown"
// }}



  $arry = array(
  "Title"=> "The Cuckoos Calling",
  "Author"=> "Robert Galbraith",
  "Detail"=>array( "Publisher"=> "Little Brown")
  );



// print_r($arry);
echo "<br>";
echo $arry["Title"];
echo "<br>";
echo $arry["Author"];
echo "<br>";
echo $arry["Detail"]["Publisher"];

echo "<br>";
echo "<br>";

foreach($arry as $value=>$key){
  if($value=="Detail"){
    echo $arry["Detail"]["Publisher"];
    break;
  }
echo $key."<br>";
}

echo "<br>";

// ????????????
// function w3rfunction($value,$key){
// echo "$key : $value"."\n";
// }
// $a = '{"Title": "The Cuckoos Calling",
// "Author": "Robert Galbraith",
// "Detail":{ "Publisher": "Little Brown"}
// }';
// $j1 = json_decode($a,true);
// array_walk_recursive($j1,"w3rfunction");





echo "<hr>";





// write a function to check them number is even or odd
function check($num){
// $num=2;
if($num%2==0){
  echo $num." number is odd ";
}else{
  echo $num." number is even ";
}
}
check(20);





echo "<hr>";





// write a function to check from the prime number 
function checkTheNumber($num){
  for ($i = 2; $i < $num; $i++){
      if ($num % $i == 0) {
          echo "$num NOT prime";
          break;
      }else{
        echo  "$num Is Prime";
        break;    
      }              
  }
  }
  checkTheNumber(13);




echo "<hr>";




// write a function to get the repeated values in arry 
// array => [1,8,5,8,5,9,6,2,3,1,4,4,7,8,9,6,5,2,3,5,8,9]

function get_the_repeated_values(){

$array = array(12,43,66,21,56,43,43,78,78,100,43,43,43,21);
$vals = array_count_values($array);
echo 'No. of NON Duplicate Items: '.count($vals)."<br>";
print_r($vals);
}
get_the_repeated_values();


echo "<hr>";




// $repeated=["2","3","5","2","4","5","2","3","5","2","3"];
// $data=[];
// foreach($repeated as $value){
//   if(array_key_exists($value,$data)){
//     $data[$value]=$date[$value]+1;
//   }else{
//     $data[$value]=1;
//   }
// }

// foreach($data as $key =>$value){
//   echo " Key :".$key ."value:".$value;
// }









// write a function to get factorial number 


function fact($num){
  if($num<2){
  return true;
  }
  return $num *fact($num-1);
  }
echo fact(5);

echo "<br>";

function number($num){
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   {  
  $factorial=$factorial * $x;  
}if($num<3 &&$num!=0){
  echo "The number $num does not have a factorial";
}elseif($num==0){
  echo "Zero factorial is one";
}
else{
  echo "Factorial of $num is $factorial";
}
}
number(2);





echo "<hr>";





// write a function to search in string 
// $str1 = 'group6 is the greatest team in the world';
// check if “world” is exists in the string or not 




// $str1 = 'group6 is the greatest team in the world';
// $findme   = 'world';
// $str=str_replace(" ","",$str1);
// // echo $str; //group6isthegreatestteamintheworld
// $count= strlen($str);
// $pos = strpos($str, $findme);
// // echo $pos; 
// for($i=0;$i<$count;$i++){
// // echo  $str1[$i]; //group6 is the greatest team in the world
// // echo  $i;  //0 1 2 3 4 5 . . .
// // echo $pos; $findme = 'world';  => 35
// if($i==$pos){
//     echo "$";
//     break;
// }
//  }

$string = "group6 is the greatest team in the world";
$word  = "world";
if(strpos($string, $word) !== false){
    echo "The word '$word' was found in the given string";
}else{
    echo "The word '$word' was not found in the given string";
}
echo "<br>";

function search_in_string($word){

$string = "group6 is the greatest team in the world";

    if(strpos($string, $word) !== false){
    echo "The word '$word' was found in the given string";
    }else{
    echo "The word '$word' was not found in the given string";
}
}
search_in_string("world");
echo "<br>";
search_in_string("llol");





echo "<hr>";





// display this $str1= '082307';  to this  08:23:07
$str1= '082307';
$count= strlen($str1);
for ($i = 0; $i < $count; $i++){
  if($i==2||$i==4){
    echo ":";
  }
  echo $str1[$i];
}

echo "<br>";
// The substr() is a built-in function in PHP that is used to extract a part of string. 
// Split the string after each character and add a "." after each split:
echo substr(chunk_split($str1, 2, ':'), 0, -1);




echo "<hr>";





// chess 
// https://www.w3resource.com/php-exercises/php-for-loop-exercise-9.php
?><table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
<!-- cell 270px wide (8 columns x 60px) -->
   <?php
   for($row=1;$row<=8;$row++){
       echo "<tr>";
       for($col=1;$col<=8;$col++){
       $total=$row+$col;
       if($total%2==0){
       echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
       }else{
       echo "<td height=30px width=30px bgcolor=#000000></td>";
       }
       }
       echo "</tr>";
 }
       ?>
</table>

<?php





echo "<hr>";





// first triangle 
// *
// **
// ***
// ****
// *****
// ******
// *******
$num=7;
for($i=0;$i<$num;$i++){
  for($x=0;$x<$i;$x++){
  echo "*";
  }
  echo "<br>";

}




echo "<hr>";





// second triangle 
// *
// **
// ***
// ****
// *****
// ******
// *******
// ******
// *****
// ****
// ***
// **
// *

$num=7;

  for($i=0;$i<$num;$i++){
    for($x=0;$x<$i;$x++){
    echo "*";
    }
    echo "<br>";
  }

  for($i=$num; $i>=1; $i--){
    for($x=0;$x<$i;$x++){
      echo "*";
      }
      echo "<br>";
    }




echo "<hr>";





// sort elements in the array 
// [5,7,6,9,8,2] 
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
// print_r($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x]."<br>";
}
echo "<br>";
echo "<br>";
foreach($numbers as $value) {
  echo $value."<br>";
}

