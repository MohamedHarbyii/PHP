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
        --echo  preg_replace("/[aeiou]/i", "", $string); : to remove any specific char



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
		-if you want to the files at the dir use glob()
		-If you want to check if the directory is or not use function is_dir()
		-To make a directory use fn mkdir():The default mode is :0777 :The first 7 is for the owner the sc for the user group the third for everyone else
		-There is a function get you the file permissions called fileperms
		-To change the permission of the file use chmod
		-If you changed it will be the same because the cache so use clearstatcache
		-There is basename :It gets the basename for you
        -If you want to get the directory name use dirname,there is nums to get to the prev dir : If you want to get the full path use realpath and u use the magic functions
		-If you want to get all the informations of the dir use pahtinfo
		-To open a dir use fopen(),there is mode r to read,r+ to read and write ,w to write ,w+ to write and read
		-To read a file use fread()the sec argument is teh length of the bytes
		-modes in fread :[w=>to write ,w+ =>to write and read , r=>to read ,r+ =>to read and write
		a=>write and create if not exist ,a+ =>write and read and create ,
		x=>create if not exist  and write                ]
		-The between from a & a+ and r or w is that a pointers at the end but w and r pointers at the begining
		-to write use fwrite
		-To read the file use fgets or fwrite
		-This funtion is used to tell if the pointer reached end or not: feof($handl)
		-every line when you read it with fgets the pointer move from one to other
		-To know the possition of the pointer use ftell() 
		-To get the number of the bites use mb_strlen()
		-Use fseek to move to any pointer 
		-Use glob to get the files : glob("*.txt")=>* means all
		-to rename a file use rename(oldname,newname)
		-To copy a fie to an other path use copy(the oldpath,newpath)
		-To get the path use get_include_path
		-To get a file contents use file_get_contents 
		-to put a contents at the file use file_put_contents(),when u use file_append it will allow  
		 u to append from the place u stopped 
		-you can scan any dir with fn scan_dir
		 DIRECTORY_SEPARATOR:Makes php handle the separator becuase it devrise from os to another
    _______________________________Date & Time Functions_______________________________
		-To get the default date use date_default_timezone_get()
		-To set the default time zone use date_default_timezone_set()
		-To create a date use date_create()
		-To form the shape of the date use date_format()
		-You can use date add but when u add string it will give u error so use function date_iterval_from_date_string
		-You can substract a date with date sub
		-finally u can use date_modify to modify any date without using dete_interval_funcion
		-To get all the informations about the current date use getdate()
		-to get the time from 1970 until now use time()
		-If u want a clean date and empty of erorrs use date_parse
		-Date_diff: gives u the difference between two dates
		-strtotime():accepts the words and convert them into a arthmitic operators  
		- To print the full name of the day use 'l' and the full month use 'F'
		-
		-
    _______________________________Cookies Functions_______________________________
        -u can set a cookie for anyone goes into ur website
	    --- Name
        --- Value
        --- Expire
        --- Path:if path is / the cookie will be everywhere at the domain
        --- Domain
        --- Secure
        --- HTTP_Only
		-
		-session_start()
		-$_SESSION['name']="mohamed"
		-you can get the session of the id and u can modify it
	  _______________________________OOP_______________________________
		-first there is a const member and u can refer it with key word self
		-If u want to print the constant name use :: and if u want to print it outside the class use the name of the 
		object or the class and :: (the constant name)
		-When u use keyword final u cannot override the function and connot modify on it at any child classes
		-The call method is used to show a message or do something when u call a method not defined or not accessable
		-
		-
		-
		-
		-
		-
		-





*/




use function PHPSTORM_META\type;

$arr=[10,20,30,40,50,60,70,80,90,100];
echo '<h1>بسم الله الرحمن الرحيم</h1>' ;
echo "<h1>Hello world!</h1>";

abstract class login
{	protected
	$name,$age,$password,$email;
	public function __construct(user $name =null,user $age=null,$password=null,$email=null) {
		$this->name = $name;
		$this->age=$age;
		$this->password=$password;
		$this->email=$email;
}

abstract function spec($name,$a,$p,$e);




}

class user  extends login 
{
	
	 const MAXLENGTH=2;

		
	
 public function spec($n,$a,$p,$e)
{
	echo $this->name=$n,"<Br>";
	echo $this->age=$a,"<Br>";
	echo $this->email=$e,"<Br>";
	echo $this->password=$p,"<Br>";
}
public function name($username){
$this->name=$username;
echo "Your name is $username<br>";
}


public function getemail()
{echo $this->email;}

}





class teacher extends login{
private $id;
	
public function spec($n,$a,$p,$e)
{
	echo $this->name=$n,"<Br>";
	echo $this->age=$a,"<Br>";
	echo $this->email=$e,"<Br>";
	echo $this->password=$p,"<Br>";
}
public function __call($methodname,$parameters)
{echo "The method [$methodname] is unaccessble or undefined<br>";}
}


$user=new user();
$teacher=new teacher();
$teacher->spc("Mohamed",16,"MohamedHarbyii54@gmail.com","Mohamed");
// $teacher->spec("Samy",32,"Samyeladl43@ad.com","Samy eleadl");


class Animal {
	public function speak() {
        echo "Animal speaks";
    }
}

class Dog extends Animal {
	public function speak() {
        echo "woof";
    }
}


// create an object of the Dog class
$myDog = new Dog();

// call the speak() method on the Dog object
$myDog->speak();



echo get_class($myDog);




