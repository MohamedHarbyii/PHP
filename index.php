<?php 

/*
print sequences we have print and echo and the letters aren't case sanstive and we can but the 
 string in single or double qouts
 The opining tag can be not closed if there was no code after it
 You can do  a comment with #
 We cant print a DT(data type) with single quotes? yes
 Could we print a string and int at the same line
 echo "'Hello world'";  echo '"Hello world"';   echo "\"Hello world\"";
 nl2br print the string as it's written
 $username="Samy";
 $$username(Samy)="D"
 echo "HELLO ${$username(Samy)}"
 search predefined variables & predefined constants
 To declere a constant you use function define
 ** this is the O_F_power
 vardump :is used to get the data type
 There are identical comparesion like : === , !==;
 we use function ord to get the ascii code of any character
 Xor: one is true but not both
 =======================================================
 search about the difference between (and) & (&&)     ||
 =======================================================
 You can conatinate two strings or more by using (.) operator
 <>follow for the iso standers but != op doesn't support it
_You can control the erorr :first you have to put @ operator and if you wnat to show an erorr message-
 you have to call function "die()"
 to include a file you write include()
 Alternate if: if(condition):
 endif;
 you can merge two cases in switch statement
 the foreach loop passes on the all of the elements of the arr one by one
 if there is an erorr include show you the erorr and continue the app ,but
 require doesn't continue the code
 you can make default arguments at functions if you want to get any of them ..the name of the arg :
 ...$name this called spread syntax
 ...makes unpacking to the array
 you can assign a name of function to a variable:function name()
                                                     {}
  $fun1="name" 
 $fun1()         
  There is a function called array_map() it accepts a function and an array  
  you can make an arrow function like this fn($name)=> return "Hello $name";    
   
  
  ____________________________________string functions_____________________________________________
    - lcfirst(String[Required])
    - ucfirst(String[Required])
    - strtolower(String[Required])
    - strtoupper(String[Required])
    - ucwords(String[Required], Delimiters[Optional])
    - str_repeat(String[Required], Count[Required])
    - implode(Separator[Optional], Array[Required]) => join() Is Alias
    - explode(Separator[Required], String[Required], Limit[Optional])
    - str_shuffle(String[Required]) //print the str at random ways
    - strrev(String[Required]) 
    - trim(String[Required], CharsList[Optional]) trims the sides of the string
    - ltrim(String[Required], CharsList[Optional])
    - rtrim(String[Required], CharsList[Optional])
    - chunk_split(String[Required], Length[Optional], End[Optional])
    - strlen(String[Required])
    - str_split(String[Required], Length[Optional])
    - strip_tags(String[Required], Allowed[Optional])
    - nl2br(String[Required], XHTML[Optional])
    - strpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - strrpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive //it gets the last position
    - stripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional])
    - parse_str: is used to get the date parse_str("name=mohamed&email=Mohamedharbyii54@gmail.com",$arr);
    - parse_str(String[Required], Array[Required])
    - quotemeta(String[Required])
    - str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
    --- STR_PAD_BOTH
    --- STR_PAD_LEFT
    --- STR_PAD_RIGHT
    - strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required]) : $translation = ["@" => "l", "#" => "o"];
    echo strtr("E@zer# Web Sch##@", $translation);
    -echo str_replace("#","o","Harby's Com##pany ");
    - str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
    --- Its Case-Sensitive
    - str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
   str_replace :if the length==0 then it will be inserting || echo substr_replace("OneTwo",2,1,0),"<br>";
   if there is an array it will make the same thing but on every element in the array
   
    - wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
    - ord(String[Required])
    - chr(Int[Required])
    - similar_text(String_One[Required], String_Two[Required], Percent[Optional])
   
    - strstr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- => Alias [strchr]
    --- Case-Sensitive
    - stristr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- Case-Insensitive
    - number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
                                                                                                         
         


 ________________________________________ Array Functions ________________________________________

    - array_chunk(Array[Required], Length[Required], Preserve_Key[Optional])
    --- Split An Array Into Chunks [Return A Multidimensional Indexed Array]
    --- Preserve_Key
    ------ [False => Default] Reindex The Keys
    ------ [True] Preserve The Keys

    - array_change_key_case(Array[Required], Case[Optional])
    --- Changes The Case Of All Keys In An Array
    --- Case
    ------ [CASE_LOWER => Default] Changes The Keys To Lowercase
    ------ [CASE_UPPER] Changes The Keys To Uppercase

    - array_combine(Array_Of_Keys[Required], Array_Of_Values[Required])

    - array_count_values(Array[Required])
    --- Counts All The Values Of An Array
    -array_reverse: Reverse the elements of the array you can choose true to keep the key as it was before reversing
    -array-flip: replace the key with value and the value with the key
    -count: counts the array elements and if mode==1 then it will count the nested arrays too
    -in_array: Asks about value if it's exist or not and there is a bool value to be spacific about the type
    -array_key_exist : Detirmine if the key is exist or not at the array
    -array_keys: print the array keys in an array and there is a value if you want to search about any value


















*/


use function PHPSTORM_META\type;

$arr=[10,20,30,40,50,60,70,80,90,100];
echo '<h1>بسم الله الرحمن الرحيم</h1>' ;
echo "<h1>Hello world</h1>";





$arr=["PHP"=>"100$","JS"=>"200$"];
echo "<pre>";
print_r(array_chunk($arr,1,true) );
echo "</pre>";

if(array_key_exists("PHP",$arr));
{echo "The price of the course is : $arr[PHP] ";}
echo "<pre>";
print_r(array_keys($arr,true) );
echo "</pre>";
function say_hello_to($someone,$gender="")
{if($gender=="male"||$gender=="Male"||$gender=="M"||$gender=="m")
    {echo "Hello Mr $someone<br> "; }
    else if($gender=="female"||$gender=="Female"||$gender=="F"||$gender=="f")
    {echo "Hello Miss $someone<br> "; }
    else{echo "Hello $someone<br> ";}
}

say_hello_to("Mohamed","Male");

function output(...$name)
 {
    foreach($name as $strin)
    {echo "$strin";}
 }

output("MOhamed","Samy","Gamal","Tamer");
echo "<br>";

function oUT( $array=[])
{
    foreach($array as $name)
 {echo "$name ";}
 echo "<br>";
for($i=0;$i<sizeof($array);$i++)
{echo "$array[$i] ";}
}

oUT(["Moahmed","Samy","Samir","Hatem","Nagm","Zein"]);


function sum_all(...$nums)
{$result=0;
    foreach($nums as $num):
  
    if($num==5)
    continue;
  
    else if($num==10)
   {$num=20;}
  $result+=$num;
    
    endforeach;
    return $result."<br>";
}
echo "<br>";
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40


$message = "Hello";

$$message=fn($name)=>  $message . $name;

echo $Hello(" Osama"); // Hello Osama





// Write Function Content Here

// Needed Output

function multiply(...$nums)
{$mult=1;
    foreach($nums as $num)
    {
     if(gettype($num)=="string")
             continue;
     
     
     else if(gettype($num)=="double")
     {$num=(int)$num;}

     $mult*=$num;
    }
 return $mult;
}


echo multiply(10, 20); // 200
echo "<br>";
echo multiply("A", 10, 30); // 300
echo "<br>";
echo multiply(100.5, 10, "B"); // 1000
echo "<br>";





function check_status($a, $b, $c) {
    if(gettype($a)=="string")
     {echo "Hello $a , ";}

     else if(gettype($b)=="string")
     {echo "Hello $b , ";}

     else if(gettype($c)=="string")
     {echo "Hello $c , ";}

     /////////////////////////////////////////////////////
     if(gettype($a)=="integer")
       {echo "Your age is $a , ";}

       else if(gettype($b)=="integer")
       {echo "Your age is $b , ";}
       
       
       else if(gettype($c)=="integer")
       {echo "Your age is $c , ";}

     /////////////////////////////////////////////////////
     if(gettype($a)=="boolean")
       {
        if($a==true )
        {echo "You Are Available For Hire , ";}
        
        else if($a==false)
        {echo "You Are Not Available For Hire , ";}
       }

      else if(gettype($b)=="boolean")
       {
        if($b==true )
        {echo "You Are Available For Hire , ";}
        
        else if($b==false)
        {echo "You Are Not Available For Hire , ";}
       }
      
       else if(gettype($c)=="boolean")
       {
        if($c==true )
        {echo "You Are Available For Hire , ";}
        
        else if($c==false)
        {echo "You Are Not Available For Hire , ";}
       }


  }
  
  // Needed Output
  echo check_status("Osama", 38, true); 
  echo "<br>";// "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo "<br>";
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo "<br>";
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

function calculatee($a,$b,$arth="+")
 {
    if($arth=="+" || $arth=="a" ||$arth=="add")
    {
        return $a+$b;
    }

   else if($arth=="-" || $arth=="s" ||$arth=="substruct")
    {
        return $a-$b;
    }
    
    else if($arth=="*" || $arth=="m" ||$arth=="multiply")
    {
        return $a*$b;
    }

}


echo calculatee(10, 20); // 30
echo "<br>";
echo calculatee(10, 20, "a"); // 30
echo "<br>";
echo calculatee(10, 20, "s"); // -10
echo "<br>";
echo calculatee(10, 20, "substract"); // -10
echo calculatee(10, 20, "multiply"); // 200
echo "<br>";
echo calculatee(10, 20, "m"); // 200







function calculater(int $num_one, int $num_two):float   {
    return $num_one + $num_two;
  }
  
  echo calculater(20, 10); // 30
  echo "<br>";
  echo gettype(calculater(20, 10)); // Double
  echo "<br>";

 $greet=function($name){"Greetings $name <br>";};

 $greet=fn($name)=>"Greetings $name <br>";
  echo $greet("Osama");












?>

<?=
"";
?>
<?php if(false): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="GET">



<div>  
    <label for="first">name</label>
    <input type="text" minlength="6" maxlength="30" id=first name="firstname" required>
<select name="lang" id="">
    <option value="A">Arabic</option>
    <option value="E">English</option>
</select>
<input type="submit" value="Go">

<br>  


 
</div>  
<br>
<input type="button" value="search"> 
<input type="search" name="name" id="">

</form>






<div class="scroll-to-top" style="display: block;">
<span>

</span>
</div>
</body>
</html>
<?php endif; ?>