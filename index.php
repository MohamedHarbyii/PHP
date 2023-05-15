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
 $name=function($name) <= this is called anynoms function
	There is a function called array_map() it accepts a function and an array
	you can make an arrow function like this fn($name)=> return "Hello $name";

	func_get_args():Gets the number of the args at the function
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
		-array_pad: it adds elements to the array and you can control the size of the elements and if you wnat to put a negative size it will print them before the original array
		-array_value: returns the array values
		-array_product: return the multiplcation of the elements of the array
		-there is next,currant,end,reset and prev
		-array shuffle: It makes random values
		-array_rand:randoms the keys of the array
		-array_shift: remove the first element at the array
		-array_pop:remove the last element at the array
		-array_push: Add elements to the array
		-array_unshift: Add elements to the first of the array
		-array_slice: it accepts an array and a start and an end and takes the elements from the start to the end
		 and there is a reset to the keys it reset the keys to default
		-array_splice: It accepts array ,start(offset),length,array to replace with
		-sort: sorting the array and reset the keys
		-rsort : sorting the array in a rev from Z _ A;
		-asort : sorting and keep the keys as they were     ___  arsort:the same with rev
		-ksort: sort the keys
		-array_map: one function =>all val in array
		-array_filter : condition on every single val in array ,u can choose ARRAY_FILTER_USE_BOTH
		- 
       _______________________________Maths functions_______________________________
		-fmod: you can get the mod of divising float number on a number
		-int div: it returns the number of division as integer
		-rand gets a random val from spacific range
		-
		-
		-
	  _______________________________Filter function_______________________________
	   	- To get the filter list:Use filter_list()
		- To get the filter id use: filter_id("filtername")
		- To filter the input use :filter_var()
		- To filter a boolean you pass a $bool and FILTER_VALIDATE_BOOL,The flag is FILTER_NULL_ON_FAILURE          (I can replace FILTER_VALIDATE_BOOL with its id )
		- To filter a url use filter var and pass the url to it and then pass :FILTER_VALIDATE_URL
		 -- if you want to check if there is a query use :FILTER_FLAG_QUERY_REQUIRED
		 -- If you want to check if there is a pass to the url use:h FILTER_FLAG_PATH_REQUIRED
		-To filter the ip(internet protocol) use filter_var ,pass the ip,to check use FILTER_VALIDATE_IP
		  --To filter ip4 just.use FILTER_FLAG_IPV4 and to do so on ip6 use FILTER_FLAG_IPV6 
		-To filter a MAC adress use the same with the difference of validition
		-To filter an integer use the same but you can put max_range and min_range to thefilter     with the key options
          $number,
         FILTER_VALIDATE_INT,
         ["flags"=>FILTER_NULL_ON_FAILURE,"options"=>["min_range"=>20,"max_range"=>64]]
     
		- To sanitize the input use FILTER_SANITIZE_and the type 
		 -To filter an email use filter sanitize email
		 -To filter a  number use filter sanitize number int: this filter return a string and remove
		  every thing but +,- and digits
		 -To sanitizie the float use the same :It accepts +,- :The flags are  FILTER_FLAG_ALLOW_FRACTION
		 
		-TO filter the input from the user use filter_input(INPUT_GET):you can use SANITIZE,Validate
		-
		-
	 _______________________________SYSTEM File Function_______________________________
		-to get the desk total space use:disk_total_space
		-to get the free one use disk_free_space
		-if you want to check if the file exist use:file_exist()
		-if you want to get the size of a file use filesize()
		-If you want to check if the directory is or not use function is_dir()
		-To make a directory use fn mkdir():The default mode is :0777 :The first 7 is for the owner the sc for the user group the third for everyone else
		-
		-f
		-
		-

















*/

//filter_id($name)
use function PHPSTORM_META\type;

$arr=[10,20,30,40,50,60,70,80,90,100];
echo '<h1>بسم الله الرحمن الرحيم</h1>' ;
echo "<h1>Hello world!</h1>";



$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

if((filter_var($url1,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE)))
echo "A Valid URL<br>";
else{echo "Not A Valid URL<br>";}

if(filter_var($url2,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE))
{echo "A Valid URL<br>";}
else{echo "Not A Valid URL<br>";}


if((filter_var($url3,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE)))
{echo "A Valid URL<br>";}
else{echo "Not A Valid URL<br>";}

if((filter_var($url4,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE)))
{echo "A Valid URL<br>";}
else{echo "Not A Valid URL<br>";}


echo filter_input(INPUT_GET,"name"),"<br>";









?>

<?=
"";
?>
<?php if(true): ?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
</head>
<body background="black">
<form action="" method="GET">



<div>
		<label for="name">name</label>
		<input type="text" name="name" minlength="6" maxlength="30" id=first  required>


		<input type="submit" value="Go">
<br>



</div>
<br>


</form>






<div class="scroll-to-top" style="display: block;">
<span>

</span>
</div>
</body>
</html>
<?php endif; ?>
<?php

