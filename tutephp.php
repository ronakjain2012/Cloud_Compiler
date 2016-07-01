<!DOCTYPE html>
<html>
<style type="text/css">
#flip
{
	cursor: pointer;
}
</style>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
	$("#flip1").click(function(){
        $("#panel1").slideToggle("slow");
    });
	$("#div_button1").hide("fast");
	$("#div_button2").hide("fast");
	$("#div_button3").hide("fast");
	$("#div_button4").hide("fast");
	$('#button1').click(function(){
		$('#div_button1').toggle("slow");
	})
	$("#div_button2").hide();

	$('#y1a').hide();
	$('#y2a').hide();
	$('#y3a').hide();
	$('#y4a').hide();
	$('#y5a').hide();
	$('#y6a').hide();
	$('#y7a').hide();
	$('#y8a').hide();
	$('#y9a').hide();
	$('#y10a').hide();
	$('#y11a').hide();
	$('#y12a').hide();
	
	
	$('#z1a').hide();
	$('#z2a').hide();
	$('#z3a').hide();
	$('#z4a').hide();
	$('#z5a').hide();
	$('#z6a').hide();
	$('#z7a').hide();
	$('#z8a').hide();
	$('#z9a').hide();
	$('#z10a').hide();

	$('#y1').click(function(){
		$('#y1a').toggle("fast");
	})
	$('#y2').click(function(){
		$('#y2a').toggle("fast");
	})
	$('#y3').click(function(){
		$('#y3a').toggle("fast");
	})
	$('#y4').click(function(){
		$('#y4a').toggle("fast");
	})
	$('#y5').click(function(){
		$('#y5a').toggle("fast");
	})
	$('#y6').click(function(){
		$('#y6a').toggle("fast");
	})
	$('#y7').click(function(){
		$('#y7a').toggle("fast");
	})
	$('#y8').click(function(){
		$('#y8a').toggle("fast");
	})
	$('#y9').click(function(){
		$('#y9a').toggle("fast");
	})
	$('#y10').click(function(){
		$('#y10a').toggle("fast");
	})
	$('#y11').click(function(){
		$('#y11a').toggle("fast");
	})
	$('#y12').click(function(){
		$('#y12a').toggle("fast");
	})
	
	
	$('#z1').click(function(){
		$('#z1a').toggle("fast");
	})
	$('#z2').click(function(){
		$('#z2a').toggle("fast");
	})
	$('#z3').click(function(){
		$('#z3a').toggle("fast");
	})
	$('#z4').click(function(){
		$('#z4a').toggle("fast");
	})
	$('#z5').click(function(){
		$('#z5a').toggle("fast");
	})	
	$('#z6').click(function(){
		$('#z6a').toggle("fast");
	})	
	$('#z7').click(function(){
		$('#z7a').toggle("fast");
	})	
	$('#z8').click(function(){
		$('#z8a').toggle("fast");
	})
	$('#z9').click(function(){
		$('#z9a').toggle("fast");
	})	
	$('#z10').click(function(){
		$('#z10a').toggle("fast");
	})
	
	
	$('#button2').click(function(){
		$('#div_button2').toggle("fast");
	})
	$("#div_button3").hide();
	$('#button3').click(function(){
		$('#div_button3').toggle("fast");
	})
	$("#div_button4").hide();
	$('#button4').click(function(){
		$('#div_button4').toggle("fast");
	})
	
	$("#flip").click();
	$("#flip1").click();
	
});
</script>

<style> 

.div-mar {
	margin: 10px 10px 10px 10px;
}
#panel, #flip, #flip1 {
	
    text-align: center;
    background-color: DarkGrey;
    color:white;
}

#panel{
 
    display: none;
	text-align: left;
    margin:10px 0px 10px 0px;
	background-color:white;
	color:;
}
#panel1{
	text-align: left;
    display: none;
	background-color:;;
	color:black;
	background-color:;
}

#button1,#button2,#button3,#button4
{
	background-color:DarkGrey;
	width:100%;
	text-align:center;
    color:white;
	margin:10px 0px 10px 0px;
	cursor: pointer;
	height:25px;
	margin:10px 0px 40px 0px;
}

#y1,#y2,#y3,#y4,#y5,#y6,#y7,#y8,#y9,#y10,#y11,#y12,#z1,#z2,#z3,#z4,#z5,#z6,#z7,#z8,#z9,#z10
{
	margin:10px 0px 20px 0px;
	background-color:DarkGrey;
	width:150px;
	text-align:center;
	color:white;
	
	cursor: pointer;
	height:37px;
}

#div_button1,#div_button2,#div_button3,#div_button4
{
	position: relative;
	height: 100%;
	background-color: white;
	
}

</style>
</head>
<body>
 
<div id="flip">Welcome To The Tutorials Hub</div>
<div  id="panel"> 
	<div id="flip1">PHP Tutorial</div>
	<div id="panel1">
	<div id="button1" class="div-mar">Introduction</div>
		<div id="div_button1">
		<div style="font-size:15px"><pre>
			<p>The PHP Hypertext Preprocessor (PHP) is a programming language that allows web developers to create dynamic content that 
interacts with databases. PHP is basically used for developing web based software applications. This tutorial helps you to build your base 
with PHP.</P>
<center><b>Audience</b></center>

<p>This tutorial is designed for PHP programmers who are completely unaware of PHP concepts but they have basic understanding on computer 
programming. </p>
<center><b>Prerequisites</b></center>

<p>Before proceeding with this tutorial you should have at least basic understanding of computer programming, Internet, Database, and MySQL 
etc is very helpful.</p>
<center><b>Execute PHP Online</b></center>

<p>For most of the examples given in this tutorial you will find Try it an option, so just make use of this option to execute your PHP 
programs at the spot and enjoy your learning.

Try following example using Try it option available at the top right corner of the below sample code box&#45;

<xmp><html>
   <head>
      <title>Online PHP Script Execution</title>      
   </head>
   
   <body>
      
      <?php
         echo "<h1>Hello, PHP!</h1>";
      ?>
   
   </body>
</html> </xmp>
</p>

<p>
PHP started out as a small open source project that evolved as more and more people found out how useful it was. Rasmus Lerdorf unleashed the
first version of PHP way back in 1994.</p>
</p>
<div style="margin-left:70px">

*PHP is a recursive acronym for "PHP: Hypertext Preprocessor".

*PHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, 
even build entire e-commerce sites.

*It is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.

*PHP is pleasingly zippy in its execution, especially when compiled as an Apache module on the Unix side. The MySQL server, once started,
executes even very complex queries with huge result sets in record-setting time.

*PHP supports a large number of major protocols such as POP3, IMAP, and LDAP. PHP4 added support for Java and distributed object 
architectures (COM and CORBA), making n-tier development a possibility for the first time.

*PHP is forgiving: PHP language tries to be as forgiving as possible.

*PHP Syntax is C-Like.

<b>Common uses of PHP</b>

    *PHP performs system functions, i.e. from files on a system it can create, open, read, write, and close them.

    *PHP can handle forms, i.e. gather data from files, save data to a file, thru email you can send data, return data to the user.

    *You add, delete, modify elements within your database thru PHP.

    *Access cookies variables and set cookies.

    *Using PHP, you can restrict users to access some pages of your website.

    *It can encrypt data.

<b>Characteristics of PHP 

Five important characteristics make PHP's practical nature possible-- </b>

    *Simplicity
    *Efficiency
    *Security
    *Flexibility
    *Familiarity </div>

"Hello World" Script in PHP

To get a feel for PHP, first start with simple PHP scripts. Since "Hello, World!" is an essential example, first we will create a friendly 
little "Hello, World!" script.

As mentioned earlier, PHP is embedded in HTML. That means that in amongst your normal HTML (or XHTML if you're cutting-edge) you'll have PHP 
statements like this&#45; 

<xmp><html>
   
   <head>
      <title>Hello World</title>
   </head>
   
   <body>
      <?php echo "Hello, World!";?>
   </body>

</html> </xmp>

It will produce following result&#45;

Hello, World!

If you examine the HTML output of the above example, you'll notice that the PHP code is not present in the file sent from the server to your
Web browser. All of the PHP present in the Web page is processed and stripped from the page; the only thing returned to the client from the
Web server is pure HTML output.

All PHP code must be included inside one of the three special markup tags ate are recognised by the PHP Parser.

<xmp> <?php PHP code goes here ?>

<?    PHP code goes here ?>

<script language="php"> PHP code goes here </script> </xmp>

A most common tag is the <xmp><?php...?> </xmp>

From the next chapter we will start with PHP Environment Setup on your machine and then we will dig out almost all concepts related to PHP to
make you comfortable with the PHP language.
</p>
			</div>
		</div>
		
		<div id="button2" class="div-mar">PHP BASICS</div>
		<div id="div_button2">
		<div id="y1">Environment Setup</div>
			<div id="y1a">
<b>Try it option online</b>
	
 We have set up the PHP Programming environment on-line, so that you can compile and execute all the available examples on line. It gives you
confidence in what you are reading and enables you to verify the programs with different options. Feel free to modify any example and execute
it on-line.

    Try the following example using our on-line compiler available at CodingGround.
	

    <xmp> <html>
       <head>
          <title>Online PHP Script Execution</title>
       </head>
       
       <body>
       
          <?php
             echo "<h1>Hello, PHP!</h1>";
          ?>
       
       </body>
    </html> </xmp>  

For most of the examples given in this tutorial, you will find a Try it option in our website code sections at the top right corner that
will take you to the online compiler. So just make use of it and enjoy your learning.

In order to develop and run PHP Web pages three vital components need to be installed on your computer system.  

   <div style="margin-left:10px"> Web Server − PHP will work with virtually all Web Server software, including Microsoft's Internet
Information Server (IIS) but then most often used is freely available Apache Server. Download Apache for free here :
http://httpd.apache.org/download.cgi

    Database − PHP will work with virtually all database software, including Oracle and Sybase but most commonly used is freely available 
	MySQL database. Download MySQL for free here − http://www.mysql.com/downloads/

    PHP Parser − In order to process PHP script instructions a parser must be installed to generate HTML output that can be sent to the Web 
	Browser. This tutorial will guide you how to install PHP parser on your computer.</div>
<b>PHP Parser Installation</b>

Before you proceed it is important to make sure that you have proper environment setup on your machine to develop your web programs using PHP.

<b>Type the following address into your browser's address box.</b>

 <xmp> http://127.0.0.1/info.php </xmp>

If this displays a page showing your PHP installation related information then it means you have PHP and Webserver installed properly. 
Otherwise you have to follow given procedure to install PHP on your computer.


This section will guide you to install and configure PHP over the following four platforms&#45;

   <div style="margin-left:10px"> <b>PHP Installation on Linux or Unix with Apache </b>

    PHP Installation on Mac OS X with Apache 

    PHP Installation on Windows NT/2000/XP with IIS 

    PHP Installation on Windows NT/2000/XP with Apache </div>
</div>
			<div id="y2">Variable Types</div>
			<div id="y2a">The main way to store information in the middle of a PHP program is by using a variable.

<b>Here are the most important things to know about variables in PHP.</b>

   <div style="margin-left:70px"> 
   *All variables in PHP are denoted with a leading dollar sign ($).

    *The value of a variable is the value of its most recent assignment.

    *Variables are assigned with the = operator, with the variable on the left-hand side and the expression to be evaluated on the right.

    *Variables can, but do not need, to be declared before assignment.

    *Variables in PHP do not have intrinsic types - a variable does not know in advance whether it will be used to store a number or a string
	of characters.

    *Variables used before they are assigned have default values.

    *PHP does a good job of automatically converting types from one to another when necessary.

    *PHP variables are Perl-like. </div>  

<b>    PHP has a total of eight data types which we use to construct our variables&#45;</b>

   <div style="margin-left:70px"> 
    <b>*Integers&#45;</b></b>are whole numbers, without a decimal point, like 4195.

    <b>*Doubles&#45;</b>are floating-point numbers, like 3.14159 or 49.1.

    <b>*Booleans&#45;</b>have only two possible values either true or false.

    <b>*NULL&#45;</b>is a special type that only has one value: NULL.

    <b>*Strings&#45;</b>are sequences of characters, like 'PHP supports string operations.

    <b>*Arrays&#45;</b>are named and indexed collections of other values.

    <b>*Objects&#45;</b>are instances of programmer-defined classes, which can package up both other kinds of values and functions that are 
	specific to the class.

    <b>*Resources&#45;</b>are special variables that hold references to resources external to PHP (such as database connections).</div>

The first five are simple types, and the next two (arrays and objects) are compound - the compound types can package up other arbitrary
values of arbitrary type, whereas the simple types cannot.

We will explain only simple data type in this chapters. Array and Objects will be explained separately.
<b>Integers</b>

They are whole numbers, without a decimal point, like 4195. They are the simplest type .they correspond to simple whole numbers, both
positive and negative. Integers can be assigned to variables, or they can be used in expressions, like so&#45;

<xmp>$int_var = 12345;
$another_int = -12345 + 12345;</xmp>  

Integer can be in decimal (base 10), octal (base 8), and hexadecimal (base 16) format. Decimal format is the default, octal integers are
specified with a leading 0, and hexadecimals have a leading 0x.< >< >

For most common platforms, the largest integer is (2**31 . 1) (or 2,147,483,647), and the smallest (most negative) integer is . (2**31 . 1)
(or .2,147,483,647).  
<b>Doubles</b>

They like 3.14159 or 49.1. By default, doubles print with the minimum number of decimal places needed. For example, the code&#45;

<xmp><?php
   $many = 2.2888800;
   $many_2 = 2.2111200;
   $few = $many + $many_2;
   
   print("$many + $many_2 = $few < >");
?></xmp>< >< >

It produces the following browser output&#45;

2.28888 + 2.21112 = 4.5 

<b>Boolean</b>

They have only two possible values either true or false. PHP provides a couple of constants especially for use as Booleans: TRUE and FALSE,
which can be used like so&#45;

<xmp> if (TRUE)
   print("This will always print< >");

else
   print("This will never print< >"); </xmp>

<b>Interpreting other types as Booleans</b>

<b>Here are the rules for determine the "truth" of any value not already of the Boolean type&#45;</b>

   <div style="margin-left:70px"> *If the value is a number, it is false if exactly equal to zero and true otherwise.

    *If the value is a string, it is false if the string is empty (has zero characters) or is the string "0", and is true otherwise.

    *Values of type NULL are always false.

    *If the value is an array, it is false if it contains no other values, and it is true otherwise. For an object, containing a value means
	having a member variable that has been assigned a value.

    *Valid resources are true (although some functions that return resources when they are successful will return FALSE when unsuccessful).

    *Don't use double as Booleans.</div>
<p>Each of the following variables has the truth value embedded in its name when it is used in a Boolean context.</p>
<xmp>$true_num = 3 + 0.14159;

$true_str = "Tried and true"

$true_array[49] = "An array element";

$false_array = array();

$false_null = NULL;

$false_num = 999 - 999;

$false_str = ""; </xmp>

<b>NULL</b>

NULL is a special type that only has one value: NULL. To give a variable the NULL value, simply assign it like this&#45;

<xmp>$my_var = NULL;</xmp>

The special constant NULL is capitalized by convention, but actually it is case insensitive; you could just as well have typed&#45;

<xmp>$my_var = null;</xmp>

A variable that has been assigned NULL has the following properties&#45;
<div style="margin-left:100px">
	*It evaluates to FALSE in a Boolean context.

    *It returns FALSE when tested with IsSet() function. </div>

<b>Strings</b>

They are sequences of characters, like "PHP supports string operations". Following are valid examples of string

<xmp>$string_1 = "This is a string in double quotes";

$string_2 = "This is a somewhat longer, singly quoted string";

$string_39 = "This string has thirty-nine characters";

$string_0 = ""; // a string with zero characters</xmp>


Singly quoted strings are treated almost literally, whereas doubly quoted strings replace variables with their values as well as specially
interpreting certain character sequences.

<xmp><?php
   $variable = "name";
   $literally = 'My $variable will not print!';
   
   print($literally);
   print "< >";
   
   $literally = "My $variable will print!";
   print($literally);
?></xmp>

This will produce following result&#45;

<xmp>My $variable will not print!\n</xmp>
My name will print

There are no artificial limits on string length - within the bounds of available memory, you ought to be able to make arbitrarily long
strings.

Strings that are delimited by double quotes (as in "this") are preprocessed in both the following two ways by PHP&#45;

   <div style="margin-left:100px">
	*Certain character sequences beginning with backslash (\) are replaced with special characters.

    *Variable names (starting with $) are replaced with string representations of their values.</div>
The escape-sequence replacements are&#45;

 <div style="margin-left:100px"> 
 <xmp>
*\n is replaced by the newline character

*\r is replaced by the carriage-return character

*\t is replaced by the tab character

*\$ is replaced by the dollar sign itself ($)

*\" is replaced by a single double-quote (")

*\\ is replaced by a single backslash (\)</xmp> </div>

<b>Here Document</b>

You can assign multiple lines to a single string variable using here document&#45;

<xmp><?php
   $channel =<<<_XML_
   
   <channel>
      <title>What's For Dinner</title>
      <link>http://menu.example.com/ </link>
      <description>Choose what to eat tonight.</description>
   </channel>
_XML_;
   
   echo <<<END
   This uses the "here document" syntax to output multiple lines with variable 
   interpolation. Note that the here document terminator must appear on a line with 
   just a semicolon. no extra whitespace!
   

END;
   
   print $channel;
?></xmp>
<b>This will produce following result&#45;</b>

This uses the "here document" syntax to output
multiple lines with variable interpolation.Note
that the here document terminator must appear on a
line with just a semicolon. no extra whitespace!

<xmp><channel>
<title>What's For Dinner<title>
<link>http://menu.example.com/<link>
<description>Choose what to eat tonight.</description></xmp>

<b>Variable Scope</b>

Scope can be defined as the range of availability a variable has to the program in which it is declared. PHP variables can be one of four
scope types&#45;

   <div style="margin-left:100px">
*Local variables

*Function parameters

*Global variables

*Static variables</div>

</div>		
			<div id="y3">Operator Types</div>
			<div id="y3a"><pre>
What is Operator? Simple answer can be given using expression 4 + 5 is equal to 9. Here 4 and 5 are called operands and + is called operator.
PHP language supports following type of operators.

    *Arithmetic Operators
	
    *Comparison Operators
	
    *Logical (or Relational) Operators
	
    *Assignment Operators
	
    *Conditional (or ternary) Operators

Lets have a look on all operators one by one.

<b>Arithmetic Operators</b>
<b>There are following arithmetic operators supported by PHP language&#45;</b>

Assume variable A holds 10 and variable B holds 20 then&#45;

Show Examples
<b>
Operator 	            		Description</b> 	                  								Example
+ 					Adds two operands 										A + B will give 30

&#45; 					Subtracts second operand from the first 							A&#45;B will give &#45;10

* 					Multiply both operands 										sA * B will give 200

/ 					Divide numerator by de-numerator 								B / A will give 2

% 					Modulus Operator and remainder of after an integer division 					B % A will give 0

++ 					Increment operator, increases integer value by one 						A++ will give 11

-- 					Decrement operator, decreases integer value by one 						A-- will give 9

<b>Comparison Operators</b>
<b>There are following COMPARISON OPERATOR supported by PHP language</b>

Assume variable A holds 10 and variable B holds 20 then&#45;
<b>
Operator 	Description </b>																						
== 			Checks if the value of two operands are equal or not, if yes then condition becomes true. 			
		
!= 			Checks if the value of two operands are equal or not, if values are not equal then condition becomes true.
 	
> 			Checks if the value of left operand is greater than the value of right operand, if yes then condition becomes true. 
	
< 			Checks if the value of left operand is less than the value of right operand, if yes then condition becomes true. 	

>= 			Checks if the value of left operand is greater than or equal to the value of right operand, if yes then condition becomes true. 

<= 			Checks if the value of left operand is less than or equal to the value of right operand, if yes then condition becomes true. 

<b>Logical Operators</b>
There are following logical operators supported by PHP language

Assume variable A holds 10 and variable B holds 20 then −
<b>
Operator 	    		Description 																			Example</b>
and 				Called Logical AND operator. If both the operands are true then condition becomes true. 		(A and B) is true.

or 				Called Logical OR Operator. If any of the two operands are non zero then condition becomes true.	 A or B) is true.

&& 				Called Logical AND operator. If both the operands are non zero then condition becomes true. 		(A && B) is true.

|| 				Called Logical OR Operator. If any of the two operands are non zero then condition becomes true. 	 A || B) is true.

<b>Assignment Operators</b>

<b>There are following assignment operators supported by PHP language&#45;</b>

Show Examples
<b>
Operator 			Description</b>
= 				Simple assignment operator, Assigns values from right side operands to left side operand 	
				Example: C = A + B will assign value of A + B into C
				
+= 				Add AND assignment operator, It adds right operand to the left operand and assign the result to left operand
				Example: C += A is equivalent to C = C + A
				
-= 				Subtract AND assignment operator, It subtracts right operand from the left operand and assign the result to left operand
				Example: C -= A is equivalent to C = C - A
				
*= 				Multiply AND assignment operator, It multiplies right operand with the left operand and assign the result to left operand
				Example: C *= A is equivalent to C = C * A
				
/= 				Divide AND assignment operator, It divides left operand with the right operand and assign the result to left operand
				Example: C /= A is equivalent to C = C / A
				
%= 				Modulus AND assignment operator, It takes modulus using two operands and assign the result to left operand
				Example: C %= A is equivalent to C = C % A

<b>Conditional Operator</b>

There is one more operator called conditional operator. This first evaluates an expression for a true or false value and then execute one of 
the two given statements depending upon the result of the evaluation. 

The conditional operator has this syntax&#45;

Show Examples
<b>
Operator 		Description 										Example</b>
? : 			Conditional Expression 	If Condition is true ? 					Then value X : Otherwise value Y

<b>Operators Categories</b>

All the operators we have discussed above can be categorised into following categories&#45;

    *Unary prefix operators, which precede a single operand.

    *Binary operators, which take two operands and perform a variety of arithmetic and logical operations.

    *The conditional operator (a ternary operator), which takes three operands and evaluates either the second or third expression, depending
	on the evaluation of the first expression.

    *Assignment operators, which assign a value to a variable.

<b>Precedence of PHP Operators</b>

Operator precedence determines the grouping of terms in an expression. This affects how an expression is evaluated. Certain operators have 
higher precedence than others; for example, the multiplication operator has higher precedence than the addition operator&#45;

For example x = 7 + 3 * 2; Here x is assigned 13, not 20 because operator * has higher precedence than + so it first get multiplied with
3*2 and then adds into 7.

Here operators with the highest precedence appear at the top of the table, those with the lowest appear at the bottom. Within an expression,
higher precedence operators will be evaluated first.

<b>
Category 					Operator 							Associativity</b>
Unary 						! ++ -- 							Right to left

Multiplicative 					* / % 								Left to right

Additive 					+ - 								Left to right

Relational 					< <= > >= 							Left to right

Equality 					== != 								Left to right

Logical AND 					&& 								Left to right

Logical OR 					|| 								Left to right

Conditional 					?: 								Right to left

Assignment 					= += -= *= /= %= 						Right to left
</pre>
</div>

			<div id="y5">Loops</div>
			<div id="y5a"><pre>
Loops in PHP are used to execute the same block of code a specified number of times. 
PHP supports following four loop types.

    <b>for</b>			&#45;loops through a block of code a specified number of times.

    <b>while</b>		&#45;loops through a block of code if and as long as a specified condition is true.

    <b>do...while</b>		&#45;loops through a block of code once, and then repeats the loop as long as a special condition is true.

    <b>foreach</b>		&#45;loops through a block of code for each element in an array.

	
We will discuss about <b>CONTINUE</b> and <b>BREAK</b> keywords used to control the loops execution.


<b>The for loop statement</b>

The for statement is used when you know how many times you want to execute a statement or a block of statements.

</b>Syntax&#45;</b>

for (initialization; condition; increment){
   code to be executed;
}

The initializer is used to set the start value for the counter of the number of loop iterations. A variable may be declared here for this
purpose and it is traditional to name it "$i".

<b>Example&#45;</b>

The following example makes five iterations and changes the assigned value of two variables on each pass of the loop&#45;

<xmp><html>
   <body>
      
      <?php
         $a = 0;
         $b = 0;
         
         for( $i = 0; $i<5; $i++ ) {
            $a += 10;
            $b += 5;
         }
         
         echo ("At the end of the loop a = $a and b = $b" );
      ?>
   
   </body>
</html></xmp>

This will produce the following result&#45;
<html>
   <body>
      
      <?php
         $a = 0;
         $b = 0;
         
         for( $i = 0; $i<5; $i++ ) {
            $a += 10;
            $b += 5;
         }
         
         echo ("At the end of the loop a = $a and b = $b" );
      ?>
   
   </body>
</html>
At the end of the loop a = 50 and b = 25


<b>The while loop statement</b>

The while statement will execute a block of code if and as long as a test expression is true.

If the test expression is true then the code block will be executed. After the code has executed the test expression will again be evaluated
and the loop will continue until the test expression is found to be false.

<b>Syntax</b>

while (condition) {
   code to be executed;
}

<b>Example</b>

This example decrements a variable value on each iteration of the loop and the counter increments until it reaches 10 when the evaluation is
false and the loop ends.

<xmp><html>
   <body>
   
      <?php
         $i = 0;
         $num = 50;
         
         while( $i < 10) {
            $num--;
            $i++;
         }
         
         echo ("Loop stopped at i = $i and num = $num" );
      ?>
      
   </body>
</html></xmp>

This will produce the following result&#45;
<html>
   <body>
   
      <?php
         $i = 0;
         $num = 50;
         
         while( $i < 10) {
            $num--;
            $i++;
         }
         
         echo ("Loop stopped at i = $i and num = $num" );
      ?>
      
   </body>
</html>
Loop stopped at i = 10 and num = 40 


<b>The do...while loop statement</b>

The do...while statement will execute a block of code at least once - it then will repeat the loop as long as a condition is true.
<b>Syntax</b>

do {
   code to be executed;
}
while (condition);

<b>Example</b>

The following example will increment the value of i at least once, and it will continue incrementing the variable i as long as it has a value
of less than 10&#45;

<xmp><html>
   <body>
   
      <?php
         $i = 0;
         $num = 0;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
         echo ("Loop stopped at i = $i" );
      ?>
      
   </body>
</html></xmp>

This will produce the following result&#45;
<html>
   <body>
   
      <?php
         $i = 0;
         $num = 0;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
         echo ("Loop stopped at i = $i" );
      ?>
      
   </body>
</html>
Loop stopped at i = 10


<b>The foreach loop statement</b>

The foreach statement is used to loop through arrays. For each pass the value of the current array element is assigned to $value and the
array pointer is moved by one and in the next pass next element will be processed.

<b>Syntax</b>

foreach (array as value) {
   code to be executed;
}

<b>Example</b>

Try out following example to list out the values of an array.

<xmp><html>
   <body>
   
      <?php
         $array = array( 1, 2, 3, 4, 5);
         
         foreach( $array as $value ) {
            echo "Value is $value <br />";
         }
      ?>
      
   </body>
</html></xmp>

This will produce the following result&#45;
<html>
   <body>
   
      <?php
         $array = array( 1, 2, 3, 4, 5);
         
         foreach( $array as $value ) {
            echo "Value is $value <br />";
         }
      ?>
      
   </body>
</html>
Value is 1
Value is 2
Value is 3
Value is 4
Value is 5


<b>The break statement</b>

The PHP break keyword is used to terminate the execution of a loop prematurely.

The break statement is situated inside the statement block. If gives you full control and whenever you want to exit from the loop you can
come out. After coming out of a loop immediate statement to the loop will be executed.

<b>PHP Break Statement</b>
<b>Example</b>

In the following example condition test becomes true when the counter value reaches 3 and loop terminates.

<xmp><html>
   <body>
   
      <?php
         $i = 0;
         
         while( $i < 10) {
            $i++;
            if( $i == 3 )break;
         }
         echo ("Loop stopped at i = $i" );
      ?>
   
   </body>
</html></xmp>

This will produce the following result&#45;
<html>
   <body>
   
      <?php
         $i = 0;
         
         while( $i < 10) {
            $i++;
            if( $i == 3 )break;
         }
         echo ("Loop stopped at i = $i" );
      ?>
   
   </body>
</html>
Loop stopped at i = 3


<b>The continue statement</b>

The PHP continue keyword is used to halt the current iteration of a loop but it does not terminate the loop.

Just like the break statement the continue statement is situated inside the statement block containing the code that the loop executes,
preceded by a conditional test. For the pass encountering continue statement, rest of the loop code is skipped and next pass starts.

<b>PHP Continue Statement</b>
<b>Example</b>

In the following example loop prints the value of array but for which condition becomes true it just skip the code and next value is printed.

<xmp>
<html>
   <body>
   
      <?php
         $array = array( 1, 2, 3, 4, 5);
         
         foreach( $array as $value ) {
            if( $value == 3 )continue;
            echo "Value is $value <br />";
         }
      ?>
   
   </body>
</html></xmp>
This will produce the following result&#45;
<html>
   <body>
   
      <?php
         $array = array( 1, 2, 3, 4, 5);
         
         foreach( $array as $value ) {
            if( $value == 3 )continue;
            echo "Value is $value <br />";
         }
      ?>
   
   </body>
</html>
Value is 1
Value is 2
Value is 4
Value is 5
</pre></div>
			
			<div id="y6">Array</div>
			<div id="y6a"><pre>
An array is a data structure that stores one or more similar type of values in a single value. For example if you want to store 100 numbers
then instead of defining 100 variables its easy to define an array of 100 length.

There are three different kind of arrays and each array value is accessed using an ID c which is called array index.

    <b>Numeric array</b>&#45;		An array with a numeric index. Values are stored and accessed in linear fashion.

    <b>Associative array</b>		&#45;An array with strings as index. This stores element values in association with key values rather
									than in a strict linear index order.

    <b>Multidimensional array</b>	&#45;An array containing one or more arrays and values are accessed using multiple indices
	

<b>NOTE</b>&#45;Built-in array functions is given in function reference PHP Array Functions

<b>Numeric Array</b>

These arrays can store numbers, strings and any object but their index will be represented by numbers. By default array index starts from
zero.
<b>Example</b>

Following is the example showing how to create and access numeric arrays.

Here we have used array() function to create array. This function is explained in function reference.

<xmp><html>
   <body>
   
      <?php
         /* First method to create array. */
         $numbers = array( 1, 2, 3, 4, 5);
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }
         
         /* Second method to create array. */
         $numbers[0] = "one";
         $numbers[1] = "two";
         $numbers[2] = "three";
         $numbers[3] = "four";
         $numbers[4] = "five";
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }
      ?>
      
   </body>
</html></xmp>

This will produce the following result&#45;

<html>
   <body>
   
      <?php
         /* First method to create array. */
         $numbers = array( 1, 2, 3, 4, 5);
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }
         
         /* Second method to create array. */
         $numbers[0] = "one";
         $numbers[1] = "two";
         $numbers[2] = "three";
         $numbers[3] = "four";
         $numbers[4] = "five";
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }
      ?>
      
   </body>
</html>


<b>Associative Arrays</b>

The associative arrays are very similar to numeric arrays in term of functionality but they are different in terms of their index.
Associative array will have their index as string so that you can establish a strong association between key and values.

To store the salaries of employees in an array, a numerically indexed array would not be the best choice. Instead, we could use the
employees names as the keys in our associative array, and the value would be their respective salary.

<b>NOTE</b>&#45;;Don't keep associative array inside double quote while printing otherwise it would not return any value.
<b>Example</b>

<xmp><html>
   <body>
      
      <?php
         /* First method to associate create array. */
         $salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);
         
         echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
         echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
         echo "Salary of zara is ".  $salaries['zara']. "<br />";
         
         /* Second method to create array. */
         $salaries['mohammad'] = "high";
         $salaries['qadir'] = "medium";
         $salaries['zara'] = "low";
         
         echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
         echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
         echo "Salary of zara is ".  $salaries['zara']. "<br />";
      ?>
   
   </body>
</html></xmp>

This will produce the following result&#45;
<html>
   <body>
      
      <?php
         /* First method to associate create array. */
         $salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);
         
         echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
         echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
         echo "Salary of zara is ".  $salaries['zara']. "<br />";
         
         /* Second method to create array. */
         $salaries['mohammad'] = "high";
         $salaries['qadir'] = "medium";
         $salaries['zara'] = "low";
         
         echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
         echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
         echo "Salary of zara is ".  $salaries['zara']. "<br />";
      ?>
   
   </body>
</html>



<b>Multidimensional Arrays</b>

A multi-dimensional array each element in the main array can also be an array. And each element in the sub-array can be an array, and so on. Values in the multi-dimensional array are accessed using multiple index.
Example

In this example we create a two dimensional array to store marks of three students in three subjects −

This example is an associative array, you can create numeric array in the same fashion.

<xmp><html>
   <body>
      
      <?php
         $marks = array( 
            "mohammad" => array (
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
            ),
            
            "qadir" => array (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            ),
            
            "zara" => array (
               "physics" => 31,
               "maths" => 22,
               "chemistry" => 39
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "Marks for mohammad in physics : " ;
         echo $marks['mohammad']['physics'] . "<br />"; 
         
         echo "Marks for qadir in maths : ";
         echo $marks['qadir']['maths'] . "<br />"; 
         
         echo "Marks for zara in chemistry : " ;
         echo $marks['zara']['chemistry'] . "<br />"; 
      ?>
   
   </body>
</html></xmp>

This will produce the following result&#45;
<html>
   <body>
      
      <?php
         $marks = array( 
            "mohammad" => array (
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
            ),
            
            "qadir" => array (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            ),
            
            "zara" => array (
               "physics" => 31,
               "maths" => 22,
               "chemistry" => 39
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "Marks for mohammad in physics : " ;
         echo $marks['mohammad']['physics'] . "<br />"; 
         
         echo "Marks for qadir in maths : ";
         echo $marks['qadir']['maths'] . "<br />"; 
         
         echo "Marks for zara in chemistry : " ;
         echo $marks['zara']['chemistry'] . "<br />"; 
      ?>
   
   </body>
</html>
</pre></div>
			

		<div id="div_button4" class="div-mar">body {
    background-color: #d0e4fe;
}

h1 {
    color: orange;
    text-align: center;
}

p {
    font-family: "Times New Roman";
    font-size: 20px;
}</div>
	</div>
</div>

</body>
</html>