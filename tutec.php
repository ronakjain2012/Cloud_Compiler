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
    margin:10px 0px 40px 0px;
	background-color:white;;
	color:;
}
#panel1{
	text-align: left;
    
    display: none;
	background-color:;;
	color:black;
}

#button1,#button2,#button3,#button4
{
	margin:10px 0px 40px 0px;
	background-color:DarkGrey;
	width:100%;
	text-align:center;
    color:white;
	cursor: pointer;
	height:25px;
}

#y1,#y2,#y3,#y4,#y5,#y6,#y7,#y8,#y9,#y10,#y11,#y12,#z1,#z2,#z3,#z4,#z5,#z6,#z7,#z8,#z9,#z10
{
margin:10px 0px 20px 0px;
	width:150px;
	text-align:center;
	color:white;
	background-color:DarkGrey;
	cursor: pointer;
	height:30px;
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
<div id="panel">
	<div id="flip1">C Tutorial</div>
	<div id="panel1">
	<div id="button1" class="div-mar">Introduction</div>
		<div id="div_button1">
			<div style="font-size:20px"> <pre><p>
C is a general-purpose, high-level language that was originally developed by Dennis M. Ritchie to develop
the UNIX operating system at Bell Labs. C was originally first implemented on the DEC PDP-11 computer 
in 1972.

In 1978, Brian Kernighan and Dennis Ritchie produced the first publicly available description of C, now
known as the K&R standard.

The UNIX operating system, the C compiler, and essentially all UNIX application programs have been written
in C. 

<b>C has now become a widely used professional language for various reasons&#45;</b>
  <b>
    *Easy to learn
	
    *Structured language
	
    *It produces efficient programs
	
    *It can handle low-level activities
	
    *It can be compiled on a variety of computer platforms</b>

<b>Facts about C</b>

    *C was invented to write an operating system called UNIX.
	
    *C is a successor of B language which was introduced around the early 1970s.
	
    *The language was formalized in 1988 by the American National Standard Institute (ANSI).
	
    *The UNIX OS was totally written in C.
	
    *Today C is the most widely used and popular System Programming Language.
	
    *Most of the state-of-the-art software have been implemented using C.
	
    *Today's most popular Linux OS and RDBMS MySQL have been written in C.

<b>Why use C?</b>

C was initially used for system development work, particularly the programs that make-up the operating
system. C was adopted as a system development language because it produces code that runs nearly as fast
as the code written in assembly language. 

Some examples of the use of C might be&#45;
<b>
    *Operating Systems
	
    *Language Compilers
	
    *Assemblers
	
    *Text Editors
	
    *Print Spoolers
	
    *Network Drivers
	
    *Modern Programs
	
    *Databases
	
    *Language Interpreters
	
    *Utilities</b>

<b>C Programs</b>

A C program can vary from 3 lines to millions of lines and it should be written into one or more text
files with extension ".c"; 
for example, hello.c. </pre></p>
			</div>
		</div>
		
		<div id="button2" class="div-mar">C BASICS</div>
		<div id="div_button2">
			
			<div id="y1">C-Data Types</div>
			<div style="font-size:20px">
			<div id="y1a"><pre>
Data types in c refer to an extensive system used for declaring variables or functions of different types.
The type of a variable determines how much space it occupies in storage and how the bit pattern stored is
interpreted.

<b>The types in C can be classified as follows</b>

<b>Basic Types</b>
They are arithmetic types and are further classified into: (a) integer types and (b) floating-point types.
	
<b>Enumerated types</b>
They are again arithmetic types and they are used to define variables that can only assign certain discrete
integer values throughout the program.
	
<b>The type void</b>
The type specifier void indicates that no value is available.
	
<b>Derived types</b>
They include (a) Pointer types, (b) Array types, (c) Structure types, (d) Union types and (e) Function types.

The "Array types" and "Structure types" are referred collectively as the "Aggregate types". 
The type of a function specifies the type of the function's return value. 

We will see the basic types in the following section, where as other types will be covered in the upcoming
chapters.

<b>Integer Types</b>

The following table provides the details of standard integer types with their storage sizes and value ranges:
<b>
Type 			Storage size 			 Value range</b>

char			1byte				-128 to 127 or 0 to 255

unsignedchar		1byte				0 to 255

signed char		1byte				-128 to 127

int2 or 		4bytes				-32,768 to 32,767 or -2,147,483,648 to 2,147,483,647

unsigned int		2 or 4 bytes			0 to 65,535 or 0 to 4,294,967,295

short  			2bytes				-32,768 to 32,767

unsigned short		2bytes				0 to 65,535

long			4bytes				-2,147,483,648 to 2,147,483,647

unsigned 		long4bytes			0 to 4,294,967,295

To get the exact size of a type or a variable on a particular platform, you can use the sizeof operator.
The expressions sizeof(type) yields the storage size of the object or type in bytes. 

Given below is an example to get the size of int type on any machine :

<b>#include <stdio.h>
#include <limits.h>

int main() {

   printf("Storage size for int : %d \n", sizeof(int));
   
   return 0;
}
</b>

When you compile and execute the above program, it produces the following result on Linux :

<b>Storage size for int : 4</b>


<b>Floating-Point Types</b>

The following table provide the details of standard floating-point types with storage sizes and value ranges
and their precision :

Type 		Storage size 			Value range 			Precision

float 		4 byte 				1.2E-38 to 3.4E+38 		6 decimal places

double 		8 byte 				2.3E-308 to 1.7E+308 		15 decimal places

long double 	10 byte 			3.4E-4932 to 1.1E+4932 		19 decimal places

The header file float.h defines macros that allow you to use these values and other details about the binary
representation of real numbers in your programs.

The following example prints the storage space taken by a float type and its range values :

<b>#include <stdio.h>
#include <float.h>

int main() {

   printf("Storage size for float : %d \n", sizeof(float));
   printf("Minimum float positive value: %E\n", FLT_MIN );
   printf("Maximum float positive value: %E\n", FLT_MAX );
   printf("Precision value: %d\n", FLT_DIG );
   
   return 0;
}
</b>
When you compile and execute the above program, it produces the following result on Linux :

<b>Storage size for float : 4
Minimum float positive value: 1.175494E-38
Maximum float positive value: 3.402823E+38
Precision value: 6</b>


<b>The void Type</b>
The void type specifies that no value is available. It is used in three kinds of situations :

<b>1.Function returns as void</b>
There are various functions in C which do not return any value or you can say they return void.
A function with no return value has the return type as void. 
<b>For example, void exit (int status);</b>

<b>2.Unction arguments as void</b>
There are various functions in C which do not accept any parameter. A function with no parameter
can accept a void.
<b>For example,int rand(void);	</b>

<b>3.Pointers to void</b>
A pointer of type void * represents the address of an object, but not its type. 
<b>For example, a memory allocation function void *malloc( size_t size ); returns a pointer to
void which can be casted to any data type.
</b></div></pre></div>
		<div id="y2">C-Variables</div> <div id="y2a"><div style="font-size:20px"><pre>
A variable is nothing but a name given to a storage area that our programs can manipulate.
Each variable in C has a specific type, which  determines the size and layout of the variable's
memory; the range of values that can be stored within that memory; and the set of operations that
can be applied to the variable.

The name of a variable can be composed of letters, digits, and the underscore character. It must begin
with either a letter or an underscore.
Upper and lowercase letters are distinct because C is case-sensitive. Based on the basic types explained
in the previous chapter,
There will be the following basic variable types :
<b>
Type 	Description

char 	Typically a single octet(one byte). This is an integer type.

int 	The most natural size of integer for the machine.

float 	A single-precision floating point value.

double 	A double-precision floating point value.

void 	Represents the absence of type.</b>

C programming language also allows to define various other types of variables, which we will cover in 
 chapters like Enumeration, Pointer, Array, Structure, Union, etc. For this chapter, let us study only
 basic variable types.

<b>Variable Definition in C</b>
A variable definition tells the compiler where and how much storage to create for the variable.
A variabledefinition specifies a data type and contains a list of one or more variables of that
type as follows :

<b>type variable_list;</b>
Here, type must be a valid C data type including char, w_char, int, float, double, bool, or any
user-definedobject; and variable_list may consist of one or more identifier names separated by commas.

Some valid declarations are shown here :
<b>
int    i, j, k;
char   c, ch;
float  f, salary;
double d;</b>

The line int i, j, k; declares and defines the variables i, j, and k; which instruct the compiler to create
variables named i, j and k of type int.

Variables can be initialized (assigned an initial value) in their declaration. The initializer consists of
an equal sign followed by a constant expression as follows :

<b>type variable_name = value;</b>

Some examples are :
<b>
extern int d = 3, f = 5;    // declaration of d and f. 

int d = 3, f = 5;           // definition and initializing d and f.

byte z = 22;                // definition and initializes z. 

char x = 'x';               // the variable x has the value 'x'.</b>

For definition without an initializer: variables with static storage duration are implicitly initialized
with NULL (all bytes have the value 0); the initial value of all other variables are undefined.

<b>Variable Declaration in C</b>
A variable declaration provides assurance to the compiler that there exists a variable with the given type
and name so that the compiler can proceed for further compilation without requiring the complete detail
about the variable. A variable definition has its meaning at the time of compilation only, the compiler
needs actual variable definition at the time of linking the program.

A variable declaration is useful when you are using multiple files and you define your variable in one of
the files which will be available at the time of linking of the program. You will use the keyword extern to
declare a variable at any place. Though you can declare a variable multiple times in your C program, it can
be defined only once in a file, a function, or a block of code.

<b>Example</b>
Try the following example, where variables have been declared at the top, but they have been defined and
initialized inside the main function:

<b>#include <stdio.h>

// Variable declaration:
extern int a, b;
extern int c;
extern float f;

int main () {

   /* variable definition: */
   int a, b;
   int c;
   float f;
 
   /* actual initialization */
   a = 10;
   b = 20;
  
   c = a + b;
   printf("value of c : %d \n", c);

   f = 70.0/3.0;
   printf("value of f : %f \n", f);
 
   return 0;
}
</b>
When the above code is compiled and executed, it produces the following result :
<b>
value of c : 30
value of f : 23.333334
</b>

The same concept applies on function declaration where you provide a function name at the time of its
declaration and its actual definition can be given anywhere else. 

For example :

<b>// function declaration
int func();

int main() {

   // function call
   int i = func();
}

// function definition
int func() {
   return 0;
}
</b>


<b>Lvalues and Rvalues in C</b>

There are two kinds of expressions in C :

    <b>Lvalue&#45;</b>Expressions that refer to a memory location are called "lvalue" expressions.
An lvalue may appear as either the left-hand or right-hand side of an assignment.

    <b>Rvalue&#45;</b>The term rvalue refers to a data value that is stored at some address in memory.
An rvalue is an expression that cannot have a value assigned to it which means an rvalue may appear on
the right-hand side but not on the left-hand side of an assignment.

Variables are Lvalues and so they may appear on the left-hand side of an assignment. Numeric literals
are Rvalues and so they may not be assigned and cannot appear on the left-hand side. 

Take a look at the following valid and invalid statements :

<b>int g = 20; // valid statement

10 = 20; // invalid statement; would generate compile-time error</b>
</div></pre> </div>
			<div id="y3">C-Operators</div> <div id="y3a"><div style="font-size:20px"><pre>
An operator is a symbol that tells the compiler to perform specific mathematical or logical functions.
C language is rich in built-in operators and provides the following types of operators :

   <b>
    *Arithmetic Operators
	
    *Relational Operators
	
    *Logical Operators
	
    *Bitwise Operators
	
    *Assignment Operators
	
    *Misc Operators</b>


<b>Arithmetic Operators</b>
The following table shows all the arithmetic operators supported by the C language.
Assume variable A holds 10 and variable B holds 20 then:

<b>Show Examples

Operator 	Description 							Example

+ 		Adds two operands.						A + B = 30

− 		Subtracts second operand from the first.			A &#45;B = -10

* 		Multiplies both operands.					A * B = 200

/ 		Divides numerator by de-numerator.				B / A = 2

% 		Modulus Operator and remainder of after an integer division.	B % A = 0

++ 		Increment operator increases the integer value by one.		A++ = 11

-- 		Decrement operator decreases the integer value by one.		A-- = 9


Relational Operators</b>
The following table shows all the relational operators supported by C. Assume variable A holds 10 and
variable B holds 20 then :

<b>Show Examples

Operator 	Description 	
== 			Checks if the values of two operands are equal or not.If yes, then the condition 
			becomes true.
			Example:(A == B) is not true.
			
!= 			Checks if the values of two operands are equal or not. If the values are not equal,
			then the condition becomes true.
			Example:(A != B) is true.
			
> 			Checks if the value of left operand is greater than the value of right operand.
			If yes, then the condition becomes true. 	
			Example:(A > B) is not true.
			
< 			Checks if the value of left operand is less than the value of right operand.
			If yes, then the condition becomes true. 	(
			Example:A < B) is true.
			
>= 			Checks if the value of left operand is greater than or equal to the value of
			right operand if yes,then the condition becomes true.
			Example:(A >= B) is not true.
			
<= 			Checks if the value of left operand is less than or equal to the value of right
			operand. If yes, then the condition becomes true.
			Example:(A <= B) is true.</b>
			
			
<b>Logical Operators</b>
Following table shows all the logical operators supported by C language. Assume variable A holds 1 and 
variable B holds 0, then :

<b>Show Examples

Operator 		Description 
	
&& 			Called Logical AND operator. If both the operands are non-zero, then the condition
			becomes true. 	
			Example:(A && B) is false.
				
|| 			Called Logical OR Operator. If any of the two operands is non-zero, then the
			condition becomes true. 	
			Example:(A || B) is true.
				
! 			Called Logical NOT Operator.It is used to reverse the logical state of its operand.
			If a condition is true,then Logical NOT Operator will make it false. 	
			Example:!(A && B) is true.</b>



<b>Bitwise Operators</b>
Bitwise operator works on bits and perform bit-by-bit operation.
The truth tables for &, |, and ^ is as follows :

<b>
p 	q 	p & q 	p | q 	p ^ q
0 	0 	  0 	  0 	  0
0 	1 	  0 	  1 	  1
1 	1 	  1 	  1 	  0
1 	0 	  0 	  1 	  1</b>

Assume A = 60 and B = 13 in binary format, they will be as follows :

<b>
A = 0011 1100

B = 0000 1101

-----------------

A&B = 0000 1100

A|B = 0011 1101

A^B = 0011 0001

~A = 1100 0011
</b>

The following table lists the bitwise operators supported by C.
Assume variable 'A' holds 60 and variable 'B' holds 13, then :

<b>Show Examples

Operator 	Description 	

& 			Binary AND Operator copies a bit to the result if it exists in both operands. 	
			Example:(A & B) = 12, i.e., 0000 1100
			
| 			Binary OR Operator copies a bit if it exists in either operand. 	
			Example:(A | B) = 61, i.e., 0011 1101
			
^ 			Binary XOR Operator copies the bit if it is set in one operand but not both. 	
			Example:(A ^ B) = 49, i.e., 0011 0001
			
~ 			Binary Ones Complement Operator is unary and has the effect of 'flipping' bits. 	
			Example:(~A ) = -61, i.e,. 1100 0011 in 2's complement form.
			
<< 			Binary Left Shift Operator. The left operands value is moved left by the number of
			bits specified by the right operand. 	
			Example:A << 2 = 240 i.e., 1111 0000
			
>> 			Binary Right Shift Operator. The left operands value is moved right by the number
			of bits specified by the right operand. 	
			Example:A >> 2 = 15 i.e., 0000 1111
			
			
Assignment Operators</b>
The following table lists the assignment operators supported by the C language:
<b>
Show Examples

Operator 		Description 	
= 			Simple assignment operator. Assigns values from right side operands to left side
			operand.	
			Example:C = A + B will assign the value of A + B to C
			
+= 			Add AND assignment operator. It adds the right operand to the left operand and
			assign the result to the left operand. 	
			Example:C += A is equivalent to C = C + A
			
-= 			Subtract AND assignment operator. It subtracts the right operand from the left
			operand and assigns the result to the left operand.
			Example:C -= A is equivalent to C = C - A
			
*= 			Multiply AND assignment operator. It multiplies the right operand with the left
			operand and assigns the result to the left operand.
			Example:C *= A is equivalent to C = C * A
			
/= 			Divide AND assignment operator. It divides the left operand with the right operand
			and assigns the result to the left operand. 
			Example:C /= A is equivalent to C = C / A
			
%= 			Modulus AND assignment operator. It takes modulus using two operands and assigns the
			result to the left operand. 	
			Example:C %= A is equivalent to C = C % A
			
<<= 			Left shift AND assignment operator. 	
			Example:C <<= 2 is same as C = C << 2
			
>>= 			Right shift AND assignment operator. 	
			Example:C >>= 2 is same as C = C >> 2
			
&= 			Bitwise AND assignment operator. 	
			Example:C &= 2 is same as C = C & 2
			
^= 			Bitwise exclusive OR and assignment operator. 	
			Example:C ^= 2 is same as C = C ^ 2
			
|= 			Bitwise inclusive OR and assignment operator. 	
			Example:C |= 2 is same as C = C | 2


Misc Operators ↦ sizeof & ternary</b>
Besides the operators discussed above, there are a few other important operators including sizeof
and ? : supported by the C Language.

<b>Show Examples
Operator 	Description 				Example
sizeof() 	Returns the size of a variable. 	sizeof(a), where a is integer, will return 4.
& 		Returns the address of a variable. 	&a; returns the actual address of the variable.
* 		Pointer to a variable. 			*a;
? : 		Conditional Expression. 		If Condition is true ? then value X : otherwise value Y

Operators Precedence in C</b>

Operator precedence determines the grouping of terms in an expression and decides how an expression is
evaluated. Certain operators have higher precedence than others; for example, the multiplication operator
has a higher precedence than the addition operator.

For example, x = 7 + 3 * 2; here, x is assigned 13, not 20 because operator * has a higher precedence than +,
so it first gets multiplied with 3*2 and then adds into 7.

Here, operators with the highest precedence appear at the top of the table, those with the lowest appear at the
bottom. Within an expression, higher precedence operators will be evaluated first.

<b>Show Examples
Category 			Operator 					Associativity
Postfix 			() [] -> . ++ - - 				Left to right
Unary 				+ - ! ~ ++ - - (type)* & sizeof 		Right to left
Multiplicative 			* / % 						Left to right
Additive 			+ - 						Left to right
Shift 				<< >> 						Left to right
Relational 			< <= > >= 					Left to right
Equality 			== != 						Left to right
Bitwise AND 			& 						Left to right
Bitwise XOR 			^ 						Left to right
Bitwise OR 			| 						Left to right
Logical AND 			&& 						Left to right
Logical OR 			|| 						Left to right
Conditional 			?: 						Right to left
Assignment 			= += -= *= /= %=>>= <<= &= ^= |= 		Right to left
Comma 				, 						Left to right</b>
</div><pre></div>
			<div id="y5">Decision Making</div> <div id="y5a"><div style="font-size:20px"><pre>
Decision making structures require that the programmer specifies one or more conditions to be evaluated
or tested by the program, along with a statement or statements to be executed if the condition is
determined to be true, and optionally, other statements to be executed if the condition is determined to
be false.

Show below is the general form of a typical decision making structure found in most of the programming
languages:

<b>Decision making statements in C</b>

C programming language assumes any non-zero and non-null values as true, and if it is either zero or null,
then it is assumed as false value.

C programming language provides the following types of decision making statements.

<b>1 	if statement</b>
An if statement consists of a boolean expression followed by one or more statements.

<b>2 	if...else statement</b>
An if statement can be followed by an optional else statement, which executes when the Boolean expression
is false.

<b>3 	nested if statements</b>
You can use one if or else if statement inside another if or else if statement(s).

<b>4 	switch statement</b>
A switch statement allows a variable to be tested for equality against a list of values.

<b>5 	nested switch statements</b>
You can use one switch statement inside another switch statement(s).

<b>The ? : Operator</b>
We have covered conditional operator ? : in the previous chapter which can be used to replace if...else 
statements. It has the following general form :

<b>Exp1 ? Exp2 : Exp3;</b>

Where Exp1, Exp2, and Exp3 are expressions. Notice the use and placement of the colon.

The value of a ? expression is determined like this :

Exp1 is evaluated. If it is true, then Exp2 is evaluated and becomes the value of the entire ? expression.

If Exp1 is false, then Exp3 is evaluated and its value becomes the value of the expression.
</div></pre></div>
			<div id="y6">C-Loops</div><div id="y6a"><div style="font-size:20px"><pre>
You may encounter situations, when a block of code needs to be executed several number of times.
In general, statements are executed sequentially: The first statement in a function is executed first,
followed by the second, and so on.

Programming languages provide various control structures that allow for more complicated execution paths.

A loop statement allows us to execute a statement or group of statements multiple times. Given below is the
general form of a loop statement in most of the programming languages:

C programming language provides the following types of loops to handle looping requirements.

<b>1 	while loop</b>
Repeats a statement or group of statements while a given condition is true. It tests the condition before
executing the loop body.

<b>2 	for loop</b>
Executes a sequence of statements multiple times and abbreviates the code that manages the loop variable.

<b>3 	do...while loop</b>
It is more like a while statement, except that it tests the condition at the end of the loop body.

<b>4 	nested loops</b>
You can use one or more loops inside any other while, for, or do..while loop.

<b>Loop Control Statements</b>
Loop control statements change execution from its normal sequence. When execution leaves a scope,
all automatic objects that were created in that scope are destroyed.

C supports the following control statements.
<b>
1 	break statement</b>
Terminates the loop or switch statement and transfers execution to the statement immediately following
the loop or switch.

<b>2 	continue statement</b>
Causes the loop to skip the remainder of its body and immediately retest its condition prior to
reiterating.

<b>3 	goto statement</b>
Transfers control to the labeled statement.

<b>The Infinite Loop</b>
A loop becomes an infinite loop if a condition never becomes false. The for loop is traditionally used
for this purpose. Since none of the three expressions that form the 'for' loop are required, you can make
an endless loop by leaving the conditional expression empty.
<b>
#include <stdio.h>
 
int main () {

   for( ; ; ) {
      printf("This loop will run forever.\n");
   }

   return 0;
}
</b>

When the conditional expression is absent, it is assumed to be true. You may have an initialization and
increment expression,but C programmers more commonly use the for(;;)construct to signify an infinite loop.

<b>NOTE :You can terminate an infinite loop by pressing Ctrl + C keys.</b>
</div></pre></div>
			<div id="y7">Functions</div><div id="y7a"><div style="font-size:20px"><pre>
A function is a group of statements that together perform a task. Every C program has at least one
function, which is main(), and all the most trivial programs can define additional functions.

You can divide up your code into separate functions.How you divide up your code among different functions
is up to you, but logically the division is such that each function performs a specific task.

A function declaration tells the compiler about a function's name, return type, and parameters.
A function definition provides the actual body of the function.

The C standard library provides numerous built-in functions that your program can call.
For example, strcat() to concatenate two strings, memcpy() to copy one memory location to another
location, and many more functions.

A function can also be referred as a method or a sub-routine or a procedure, etc.

<b>Defining a Function</b>
The general form of a function definition in C programming language is as follows:
<b>
return_type function_name( parameter list ) {
   body of the function
}
</b>
A function definition in C programming consists of a function header and a function body.
Here are all the parts of a function :

    <b>Return Type:</b>A function may return a value. The return_type is the data type of the value the
		function returns. Some functions perform the desired operations without returning a value.
		In this case, the return_type is the keyword void.

    <b>Function Name:</b>This is the actual name of the function.The function name and the parameter list
		together constitute the function signature.

    <b>Parameters:</b>A parameter is like a placeholder. When a function is invoked, you pass a value to the
		parameter. This value is referred to as actual parameter or argument. The parameter list refers
		to the type, order, and number of the parameters of a function. Parameters are optional;
		that is, a function may contain no parameters.

    <b>Function Body:</b>The function body contains a collection of statements that define what the function
		does.

<b>Example</b>

Given below is the source code for a function called max(). This function takes two parameters
num1 and num2 and returns the maximum value between the two :

<b>/* function returning the max between two numbers */
int max(int num1, int num2) {

   /* local variable declaration */
   int result;
 
   if (num1 > num2)
      result = num1;
   else
      result = num2;
 
   return result; 
}
</b>

<b>Function Declarations</b>
A function declaration tells the compiler about a function name and how to call the function.
The actual body of the function can be defined separately.

A function declaration has the following parts:

<b>return_type function_name( parameter list );</b>

For the above defined function max(), the function declaration is as follows :
int max(int num1, int num2);

Parameter names are not important in function declaration only their type is required, so the following
is also a valid declaration :

<b>int max(int, int);</b>

Function declaration is required when you define a function in one source file and you call that function
in another file. In such case, you should declare the function at the top of the file calling the function.

<b>Calling a Function</b>
While creating a C function, you give a definition of what the function has to do. To use a function,
you will have to call that function to perform the defined task.

When a program calls a function, the program control is transferred to the called function.
A called function performs a defined task and when its return statement is executed or when its
function-ending closing brace is reached, it returns the program control back to the main program.

To call a function, you simply need to pass the required parameters along with the function name,
and if the function returns a value, then you can store the returned value.
For example:
<b>
#include <stdio.h>
 
/* function declaration */
int max(int num1, int num2);
 
int main () {

   /* local variable definition */
   int a = 100;
   int b = 200;
   int ret;
 
   /* calling a function to get max value */
   ret = max(a, b);
 
   printf( "Max value is : %d\n", ret );
 
   return 0;
}
 
/* function returning the max between two numbers */
int max(int num1, int num2) {

   /* local variable declaration */
   int result;
 
   if (num1 > num2)
      result = num1;
   else
      result = num2;
 
   return result; 
}
</b>
We have kept max() along with main() and compiled the source code. While running the final executable,
it would produce the following result :

<b>Max value is : 200</b>

<b>Function Arguments</b>
If a function is to use arguments, it must declare variables that accept the values of the arguments.
These variables are called the formal parameters of the function.

Formal parameters behave like other local variables inside the function and are created upon entry into
the function and destroyed upon exit.

While calling a function, there are two ways in which arguments can be passed to a function :
<b>
1 	Call by value</b>
This method copies the actual value of an argument into the formal parameter of the function.
In this case, changes made to the parameter inside the function have no effect on the argument.
<b>
2 	Call by reference</b>
This method copies the address of an argument into the formal parameter. Inside the function,
the address is used to access the actual argument used in the call. This means that changes made to
the parameter affect the argument.

By default, C uses call by value to pass arguments. In general, it means the code within a function
cannot alter the arguments used to call the function.
</div></pre></div>
			<div id="y8">Arrays</div><div id="y8a"><div style="font-size:20px"><pre>
Arrays a kind of data structure that can store a fixed-size sequential collection of elements of the
same type. An array is used to store a collection of data, but it is often more useful to think of an 
array as a collection of variables of the same type.

Instead of declaring individual variables, such as number0, number1, ..., and number99,
you declare one array variable such as numbers and use numbers[0], numbers[1], and ..., numbers[99] to
represent individual variables. A specific element in an array is accessed by an index.

All arrays consist of contiguous memory locations. The lowest address corresponds to the first element
and the highest address to the last element.

<b>Arrays in C</b>

<b>Declaring Arrays</b>
To declare an array in C, a programmer specifies the type of the elements and the number of elements
required by an array as follows :

<b>type arrayName [ arraySize ];</b>

This is called a single-dimensional array. The arraySize must be an integer constant greater than zero
and type can be any valid C data type. For example, to declare a 10-element array called balance of
type double, use this statement :

<b>double balance[10];</b>

Here balance is a variable array which is sufficient to hold up to 10 double numbers.
Initializing Arrays

You can initialize an array in C either one by one or using a single statement as follows :

<b>double balance[5] = {1000.0, 2.0, 3.4, 7.0, 50.0};</b>

The number of values between braces { } cannot be larger than the number of elements that we declare
for the array between square brackets [ ].

If you omit the size of the array, an array just big enough to hold the initialization is created.
Therefore, if you write :

<b>double balance[] = {1000.0, 2.0, 3.4, 7.0, 50.0};</b>

You will create exactly the same array as you did in the previous example. Following is an example to
assign a single element of the array :

<b>balance[4] = 50.0;</b>

The above statement assigns the 5th element in the array with a value of 50.0. All arrays have 0 as
the index of their first element which is also called the base index and the last index of an array
will be total size of the array minus 1.Shown below is the pictorial representation of the array we
discussed above:

<b>Array Presentation</b>

<b>Accessing Array Elements</b>
An element is accessed by indexing the array name. This is done by placing the index of the element
within square brackets after the name of the array. For example :

<b>double salary = balance[9];</b>

The above statement will take the 10th element from the array and assign the value to salary variable.
The following example Shows how to use all the three above mentioned concepts viz. declaration,
assignment, and accessing arrays :
<b>
#include <stdio.h>
 
int main () {

   int n[ 10 ]; /* n is an array of 10 integers */
   int i,j;
 
   /* initialize elements of array n to 0 */         
   for ( i = 0; i < 10; i++ ) {
      n[ i ] = i + 100; /* set element at location i to i + 100 */
   }
   
   /* output each array element's value */
   for (j = 0; j < 10; j++ ) {
      printf("Element[%d] = %d\n", j, n[j] );
   }
 
   return 0;
}
</b>
When the above code is compiled and executed, it produces the following result :
<b>
Element[0] = 100
Element[1] = 101
Element[2] = 102
Element[3] = 103
Element[4] = 104
Element[5] = 105
Element[6] = 106
Element[7] = 107
Element[8] = 108
Element[9] = 109
</b>

<b>Arrays in Detail</b>
Arrays are important to C and should need a lot more attention. The following important concepts
related to array should be clear to a C programmer :
<b>
1 	Multi-dimensional arrays</b>
C supports multidimensional arrays. The simplest form of the multidimensional array is the
two-dimensional array.
<b>
2 	Passing arrays to functions</b>
You can pass to the function a pointer to an array by specifying the array's name without an index.
<b>
3 	Return array from a function</b>
C allows a function to return an array.
<b>
4 	Pointer to an array</b>
You can generate a pointer to the first element of an array by simply specifying the array name,
without any index.
</div></pre></div>
			<div id="y9">Pointers</div><div id="y9a"><div style="font-size:20px"><pre>
Pointers in C are easy and fun to learn. Some C programming tasks are performed more easily with
pointers, and other tasks, such as dynamic memory allocation, cannot be performed without using
pointers. So it becomes necessary to learn pointers to become a perfect C programmer.

Let's start learning them in simple and easy steps.

As you know, every variable is a memory location and every memory location has its address defined which
can be accessed using ampersand (&) operator, which denotes an address in memory. Consider the following
example, which prints the address of the variables defined :
<b>
#include <stdio.h>
int main () {

   int  var1;
   char var2[10];

   printf("Address of var1 variable: %x\n", &var1  );
   printf("Address of var2 variable: %x\n", &var2  );

   return 0;
}
</b>
When the above code is compiled and executed, it produces the following result :
<b>
Address of var1 variable: bff5a400
Address of var2 variable: bff5a3f6
</b>
<b>What are Pointers?</b>
A pointer is a variable whose value is the address of another variable, i.e., direct address of the
memory location. Like any variable or constant, you must declare a pointer before using it to store any
ariable address. 

The general form of a pointer variable declaration is:

<b>type *var-name;</b>

Here, type is the pointer's base type; it must be a valid C data type and var-name is the name of the
pointer variable. The asterisk * used to declare a pointer is the same asterisk used for multiplication.
However, in this statement the asterisk is being used to designate a variable as a pointer.
Take a look at some of the valid pointer declarations :
<b>
int    *ip;    /* pointer to an integer */
double *dp;    /* pointer to a double */
float  *fp;    /* pointer to a float */
char   *ch     /* pointer to a character */
</b>
The actual data type of the value of all pointers, whether integer, float, character, or otherwise,is
the same, a long hexadecimal number that represents a memory address. The only difference between
pointers of different data types is the data type of the variable or constant that the pointer points to.

<b>How to Use Pointers?</b>

There are a few important operations, which we will do with the help of pointers very frequently.

(a) We define a pointer variable
(b) assign the address of a variable to a pointer and
(c) finally access the value at the address available in the pointer variable. This is done by using
unary operator * that returns the value of the variable located at the address specified by its operand.

The following example makes use of these operations:
<b>
#include <stdio.h>

int main () {

   int  var = 20;   /* actual variable declaration */
   int  *ip;        /* pointer variable declaration */

   ip = &var;  /* store address of var in pointer variable*/

   printf("Address of var variable: %x\n", &var  );

   /* address stored in pointer variable */
   printf("Address stored in ip variable: %x\n", ip );

   /* access the value using the pointer */
   printf("Value of *ip variable: %d\n", *ip );

   return 0;
}
</b>

When the above code is compiled and executed, it produces the following result :
<b>
Address of var variable: bffd8b3c
Address stored in ip variable: bffd8b3c
Value of *ip variable: 20

NULL Pointers</b>
It is always a good practice to assign a NULL value to a pointer variable in case you do not have an
exact address to be assigned. This is done at the time of variable declaration. A pointer that is
assigned NULL is called a null pointer.

The NULL pointer is a constant with a value of zero defined in several standard libraries.

Consider the following program −
<b>
#include <stdio.h>

int main () {

   int  *ptr = NULL;

   printf("The value of ptr is : %x\n", ptr  );
 
   return 0;
}
</b>

When the above code is compiled and executed, it produces the following result :
<b>
The value of ptr is 0
</b>

In most of the operating systems, programs are not permitted to access memory at address 0 because that
memory is reserved by the operating system. However, the memory address 0 has special significance;
it signals that the pointer is not intended to point to an accessible memory location. But by convention,
if a pointer contains the null (zero) value, it is assumed to point to nothing.

To check for a null pointer, you can use an 'if' statement as follows :
</b>
if(ptr)     /* succeeds if p is not null */
if(!ptr)    /* succeeds if p is null */
</b>

<b>Pointers in Detail</b>

Pointers have many but easy concepts and they are very important to C programming. 
he following important pointer concepts should be clear to any C programmer :
<b>
1 	Pointer arithmetic</b>
There are four arithmetic operators that can be used in pointers: ++, --, +, -

<b>2 	Array of pointers</b>
You can define arrays to hold a number of pointers.
<b>
3 	Pointer to pointer</b>
C allows you to have pointer on a pointer and so on.
<b>
4 	Passing pointers to functions in C</b>
Passing an argument by reference or by address enable the passed argument to be changed in the calling
function by the called function.
<b>
5 	Return pointer from functions in C</b>
C allows a function to return a pointer to the local variable, static variable, and dynamically
allocated memory as well.
</div></pre></div>
	<div id="y10">C-Structures</div><div id="y10a"><div style="font-size:20px"><pre>
Arrays allow to define type of variables that can hold several data items of the same kind.
Similarly structure is another user defined data type available in C that allows to combine data items
of different kinds.

Structures are used to represent a record. Suppose you want to keep track of your books in a library.
You might want to track the following attributes about each book :
<b>
    Title
    Author
    Subject
    Book ID
	
Defining a Structure</b>
To define a structure, you must use the struct statement. The struct statement defines a new data type,
with more than one member. The format of the struct statement is as follows :
<b>
struct [structure tag] {

   member definition;
   member definition;
   ...
   member definition;
} [one or more structure variables];  
</b>
The structure tag is optional and each member definition is a normal variable definition, such as int i;
or float f; or any other valid variable definition. At the end of the structure's definition, before the
final semicolon, you can specify one or more structure variables but it is optional. Here is the way you
would declare the Book structure :
<b>
struct Books {
   char  title[50];
   char  author[50];
   char  subject[100];
   int   book_id;
} book;  
</b>
<b>Accessing Structure Members</b>
To access any member of a structure, we use the member access operator (.). The member access operator
is coded as a period between the structure variable name and the structure member that we wish to access.
You would use the keyword struct to define variables of structure type. The following example shows how
to use a structure in a program :
<b>
#include <stdio.h>
#include <string.h>
 
struct Books {
   char  title[50];
   char  author[50];
   char  subject[100];
   int   book_id;
};
 
int main( ) {

   struct Books Book1;        /* Declare Book1 of type Book */
   struct Books Book2;        /* Declare Book2 of type Book */
 
   /* book 1 specification */
   strcpy( Book1.title, "C Programming");
   strcpy( Book1.author, "Nuha Ali"); 
   strcpy( Book1.subject, "C Programming Tutorial");
   Book1.book_id = 6495407;

   /* book 2 specification */
   strcpy( Book2.title, "Telecom Billing");
   strcpy( Book2.author, "Zara Ali");
   strcpy( Book2.subject, "Telecom Billing Tutorial");
   Book2.book_id = 6495700;
 
   /* print Book1 info */
   printf( "Book 1 title : %s\n", Book1.title);
   printf( "Book 1 author : %s\n", Book1.author);
   printf( "Book 1 subject : %s\n", Book1.subject);
   printf( "Book 1 book_id : %d\n", Book1.book_id);

   /* print Book2 info */
   printf( "Book 2 title : %s\n", Book2.title);
   printf( "Book 2 author : %s\n", Book2.author);
   printf( "Book 2 subject : %s\n", Book2.subject);
   printf( "Book 2 book_id : %d\n", Book2.book_id);

   return 0;
}
</b>
When the above code is compiled and executed, it produces the following result :
<b>
Book 1 title : C Programming
Book 1 author : Nuha Ali
Book 1 subject : C Programming Tutorial
Book 1 book_id : 6495407
Book 2 title : Telecom Billing
Book 2 author : Zara Ali
Book 2 subject : Telecom Billing Tutorial
Book 2 book_id : 6495700
</b>
<b>Structures as Function Arguments</b>
You can pass a structure as a function argument in same way as you pass any other variable or pointer.
<b>
#include <stdio.h>
#include <string.h>
 
struct Books {
   char  title[50];
   char  author[50];
   char  subject[100];
   int   book_id;
};

/* function declaration */
void printBook( struct Books book );

int main( ) {

   struct Books Book1;        /* Declare Book1 of type Book */
   struct Books Book2;        /* Declare Book2 of type Book */
 
   /* book 1 specification */
   strcpy( Book1.title, "C Programming");
   strcpy( Book1.author, "Nuha Ali"); 
   strcpy( Book1.subject, "C Programming Tutorial");
   Book1.book_id = 6495407;

   /* book 2 specification */
   strcpy( Book2.title, "Telecom Billing");
   strcpy( Book2.author, "Zara Ali");
   strcpy( Book2.subject, "Telecom Billing Tutorial");
   Book2.book_id = 6495700;
 
   /* print Book1 info */
   printBook( Book1 );

   /* Print Book2 info */
   printBook( Book2 );

   return 0;
}

void printBook( struct Books book ) {

   printf( "Book title : %s\n", book.title);
   printf( "Book author : %s\n", book.author);
   printf( "Book subject : %s\n", book.subject);
   printf( "Book book_id : %d\n", book.book_id);
}
</b>
When the above code is compiled and executed, it produces the following result :
<b>
Book title : C Programming
Book author : Nuha Ali
Book subject : C Programming Tutorial
Book book_id : 6495407
Book title : Telecom Billing
Book author : Zara Ali
Book subject : Telecom Billing Tutorial
Book book_id : 6495700
</b>
<b>Pointers to Structures</b>
You can define pointers to structures in the same way as you define pointer to any other variable :

<b>struct Books *struct_pointer;</b>
Now, you can store the address of a structure variable in the above defined pointer variable.
To find the address of a structure variable, place the '&'; operator before the structure's name as
follows :

<b>struct_pointer = &Book1;</b>

To access the members of a structure using a pointer to that structure,
you must use the → operator as follows :
<b>
struct_pointer->title;
</b>
Let us re-write the above example using structure pointer.
<b>
#include <stdio.h>
#include <string.h>
 
struct Books {
   char  title[50];
   char  author[50];
   char  subject[100];
   int   book_id;
};

/* function declaration */
void printBook( struct Books *book );
int main( ) {

   struct Books Book1;        /* Declare Book1 of type Book */
   struct Books Book2;        /* Declare Book2 of type Book */
 
   /* book 1 specification */
   strcpy( Book1.title, "C Programming");
   strcpy( Book1.author, "Nuha Ali"); 
   strcpy( Book1.subject, "C Programming Tutorial");
   Book1.book_id = 6495407;

   /* book 2 specification */
   strcpy( Book2.title, "Telecom Billing");
   strcpy( Book2.author, "Zara Ali");
   strcpy( Book2.subject, "Telecom Billing Tutorial");
   Book2.book_id = 6495700;
 
   /* print Book1 info by passing address of Book1 */
   printBook( &Book1 );

   /* print Book2 info by passing address of Book2 */
   printBook( &Book2 );

   return 0;
}

void printBook( struct Books *book ) {

   printf( "Book title : %s\n", book->title);
   printf( "Book author : %s\n", book->author);
   printf( "Book subject : %s\n", book->subject);
   printf( "Book book_id : %d\n", book->book_id);
}
</b>
When the above code is compiled and executed, it produces the following result :
<b>
Book title : C Programming
Book author : Nuha Ali
Book subject : C Programming Tutorial
Book book_id : 6495407
Book title : Telecom Billing
Book author : Zara Ali
Book subject : Telecom Billing Tutorial
Book book_id : 6495700
</b>
<b>Bit Fields</b>
Bit Fields allow the packing of data in a structure. This is especially useful when memory or data
storage is at a premium. 
Typical examples include :

    <b>Packing several objects into a machine word. e.g. 1 bit flags can be compacted.

    Reading external file formats -- non-standard file formats could be read in, e.g., 9-bit integers.</b>

C allows us to do this in a structure definition by putting :bit length after the variable. For example:
<b>
struct packed_struct {
   unsigned int f1:1;
   unsigned int f2:1;
   unsigned int f3:1;
   unsigned int f4:1;
   unsigned int type:4;
   unsigned int my_int:9;
} pack;
</b>
Here, the packed_struct contains 6 members: Four 1 bit flags f1..f3, a 4-bit type and a 9-bit my_int.

C automatically packs the above bit fields as compactly as possible, provided that the maximum length of
the field is less than or equal to the integer word length of computer.If this is not the case,then some
compilers may allow memory overlap for fields while others would store the next field in the next word.
</div></pre></div>
	<div id="y11">C-Unions</div><div id="y11a"><div style="font-size:20px"><pre>
A union is a special data type available in C that allow to store different data types in the same memory
location. You can define a union with many members, but only one member can contain a value at any given
time. Unions provide an efficient way of using the same memory location for multiple-purpose. 

<b>Defining a Union</b>
To define a union, you must use the union statement in the same way as you did while defining a structure.
The union statement defines a new data type with more than one member for your program.
The format of the union statement is as follows :
<b>
union [union tag] {
   member definition;
   member definition;
   ...
   member definition;
} [one or more union variables];  
</b>

The union tag is optional and each member definition is a normal variable definition,
such as int i; or float f; or any other valid variable definition. At the end of the union's definition,
before the final semicolon, you can specify one or more union variables but it is optional. Here is the
way you would define a union type named Data having three members i, f, and str :
<b>
union Data {
   int i;
   float f;
   char str[20];
} data;  
</b>
Now, a variable of Data type can store an integer, a floating-point number, or a string of characters.
It means a single variable, i.e., same memory location, can be used to store multiple types of data.
You can use any built-in or user defined data types inside a union based on your requirement.

The memory occupied by a union will be large enough to hold the largest member of the union.
For example, in the above example, Data type will occupy 20 bytes of memory space because this is the
maximum space which can be occupied by a character string. The following example displays the total
memory size occupied by the above union :
<b>
#include <stdio.h>
#include <string.h>
 
union Data {
   int i;
   float f;
   char str[20];
};
 
int main( ) {

   union Data data;        

   printf( "Memory size occupied by data : %d\n", sizeof(data));

   return 0;
}
</b>
When the above code is compiled and executed, it produces the following result :

<b>Memory size occupied by data : 20</b>

<b>Accessing Union Members</b>
To access any member of a union, we use the member access operator (.). The member access operator is
coded as a period between the union variable name and the union member that we wish to access. You would
use the keyword union to define variables of union type. 

The following example shows how to use unions in a program :
<b>
#include <stdio.h>
#include <string.h>
 
union Data {
   int i;
   float f;
   char str[20];
};
 
int main( ) {

   union Data data;        

   data.i = 10;
   data.f = 220.5;
   strcpy( data.str, "C Programming");

   printf( "data.i : %d\n", data.i);
   printf( "data.f : %f\n", data.f);
   printf( "data.str : %s\n", data.str);

   return 0;
}
</b>
When the above code is compiled and executed, it produces the following result :
<b>
data.i : 1917853763
data.f : 4122360580327794860452759994368.000000
data.str : C Programming
</b>

Here, we can see that the values of i and f members of union got corrupted because the final value
assigned to the variable has occupied the memory location and this is the reason that the value of str
member is getting printed very well.

Now let's look into the same example once again where we will use one variable at a time which is the
main purpose of having unions :
<b>
#include <stdio.h>
#include <string.h>
 
union Data {
   int i;
   float f;
   char str[20];
};
 
int main( ) {

   union Data data;        

   data.i = 10;
   printf( "data.i : %d\n", data.i);
   
   data.f = 220.5;
   printf( "data.f : %f\n", data.f);
   
   strcpy( data.str, "C Programming");
   printf( "data.str : %s\n", data.str);

   return 0;
}
</b>
When the above code is compiled and executed, it produces the following result :
<b>
data.i : 10
data.f : 220.500000
data.str : C Programming
</b>
Here, all the members are getting printed very well because one member is being used at a time.
</div></pre></div>
		<div id="y12">File I/O</div><div id="y12a"><div style="font-size:20px"><pre>
The last chapter explained the standard input and output devices handled by C programming language.
This chapter cover how C programmers can create, open, close text or binary files for their data storage.

A file represents a sequence of bytes, regardless of it being a text file or a binary file. C programming
language provides access on high level functions as well as low level (OS level) calls to handle file on
your storage devices. This chapter will take you through the important calls for file management.
<b>
Opening Files</b>
You can use the fopen( ) function to create a new file or to open an existing file.
This call will initialize an object of the type FILE, which contains all the information necessary to
control the stream.
The prototype of this function call is as follows :
<b>
FILE *fopen( const char * filename, const char * mode );
</b>
Here, filename is a string literal, which you will use to name your file, and access mode can have one
of the following values :
<b>
Mode 	Description
r 	Opens an existing text file for reading purpose.
w 	Opens a text file for writing. If it does not exist, then a new file is created. Here your program
	will start writing content from the beginning of the file.
a 	Opens a text file for writing in appending mode. If it does not exist, then a new file is created.
	Here your program will start appending content in the existing file content.
r+ 	Opens a text file for both reading and writing.
w+ 	Opens a text file for both reading and writing. It first truncates the file to zero length if it
	exists,otherwise creates a file if it does not exist.
a+ 	Opens a text file for both reading and writing. It creates the file if it does not exist.
	The reading will start from the beginning but writing can only be appended.
</b>
If you are going to handle binary files, then you will use following access modes instead of the above
mentioned ones :
<b>
"rb", "wb", "ab", "rb+", "r+b", "wb+", "w+b", "ab+", "a+b"
</b>
<b>Closing a File</b>
To close a file, use the fclose( ) function. The prototype of this function is :
<b>
int fclose( FILE *fp );
</b>
The fclose(&#45;) function returns zero on success, or EOF if there is an error in closing the file.
This function actually flushes any data still pending in the buffer to the file, closes the file, and
releases any memory used for the file. The EOF is a constant defined in the header file stdio.h.

There are various functions provided by C standard library to read and write a file, character by
character, or in the form of a fixed length string.

<b>Writing a File</b>
Following is the simplest function to write individual characters to a stream :
<b>
int fputc( int c, FILE *fp );
</b>
The function fputc() writes the character value of the argument c to the output stream referenced by fp.
It returns the written character written on success otherwise EOF if there is an error. You can use the
following functions to write a null-terminated string to a stream :
<b>
int fputs( const char *s, FILE *fp );
</b>
The function fputs() writes the string s to the output stream referenced by fp. It returns a non-negative
value on success, otherwise EOF is returned in case of any error. You can use int fprintf(FILE *fp,const
char *format, ...) function as well to write a string into a file. Try the following example.

Make sure you have /tmp directory available. If it is not, then before proceeding, you must create this
directory on your machine.
<b>
#include <stdio.h>

main() {
   FILE *fp;

   fp = fopen("/tmp/test.txt", "w+");
   fprintf(fp, "This is testing for fprintf...\n");
   fputs("This is testing for fputs...\n", fp);
   fclose(fp);
}
</b>
When the above code is compiled and executed, it creates a new file test.txt in /tmp directory and writes
two lines using two different functions. Let us read this file in the next section.

<b>Reading a File</b>
Given below is the simplest function to read a single character from a file :
<b>
int fgetc( FILE * fp );</b>
The fgetc() function reads a character from the input file referenced by fp. The return value is the
character read, or in case of any error, it returns EOF. The following function allows to read a string
from a stream :
<b>
char *fgets( char *buf, int n, FILE *fp );</b>
The functions fgets() reads up to n-1 characters from the input stream referenced by fp. It copies the
read string into the buffer buf, appending a null character to terminate the string.

If this function encounters a newline character '\n' or the end of the file EOF before they have read the
maximum number of characters, then it returns only the characters read up to that point including the new
line character. You can also use int fscanf(FILE *fp, const char *format, ...) function to read strings
from a file, but it stops reading after encountering the first space character.
<b>
#include <stdio.h>

main() {

   FILE *fp;
   char buff[255];

   fp = fopen("/tmp/test.txt", "r");
   fscanf(fp, "%s", buff);
   printf("1 : %s\n", buff );

   fgets(buff, 255, (FILE*)fp);
   printf("2: %s\n", buff );
   
   fgets(buff, 255, (FILE*)fp);
   printf("3: %s\n", buff );
   fclose(fp);

}</b>

When the above code is compiled and executed, it reads the file created in the previous section and
produces the following result :
<b>
1 : This
2: is testing for fprintf...

3: This is testing for fputs...
</b>
Let's see a little more in detail about what happened here. First, fscanf() read just This because
after that, it encountered a space, second call is for fgets() which reads the remaining line till it
encountered end of line. Finally, the last call fgets() reads the second line completely.

<b>Binary I/O Functions</b>
There are two functions, that can be used for binary input and output :
<b>
size_t fread(void *ptr, size_t size_of_elements, size_t number_of_elements, FILE *a_file);
              
size_t fwrite(const void *ptr, size_t size_of_elements, size_t number_of_elements, FILE *a_file);
</b>
Both of these functions should be used to read or write blocks of memories - usually arrays or structures.
</div></pre></div>

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
	</pre>
</div>

</body>
</html>