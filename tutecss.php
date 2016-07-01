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
	<div id="flip1">CSS Tutorial</div>
	<div id="panel1">
	<div id="button1" class="div-mar">Introduction</div>
		<div id="div_button1">
			<div style="font-size:15px"><pre>
			<P> 
Cascading Style Sheets, fondly referred to as CSS, is a simple design language intended to simplify the process of making web
pages presentable.

CSS handles the look and feel part of a web page. Using CSS, you can control the color of the text, the style of fonts, the spacing between 
paragraphs, how columns are sized and laid out, what background images or colors are used, layout designs,variations in display for different
devices and screen sizes as well as a variety of other effects.

CSS is easy to learn and understand but it provides powerful control over the presentation of an HTML document. Most commonly, CSS is 
combined with the markup languages HTML or XHTML. <BR> <BR>
<h3> Advantages of CSS </h3>

    <div style="margin-left:100px"> <h4>*CSS saves time</h4> You can write CSS once and then reuse same sheet in multiple HTML pages. You can
define a style for each HTML element and apply it to as many Web pages as you want.

     <h4>*Pages load faster</h4> If you are using CSS, you do not need to write HTML tag attributes every time. Just write one CSS rule of a 
tag and apply it to all the occurrences of that tag. So less code means faster download times.

     <h4>*Easy maintenance</h4> To make a global change, simply change the style, and all elements in all the web pages will be updated 
automatically.

     <h4>*Superior styles to HTML</h4> CSS has a much wider array of attributes than HTML, so you can give a far better look to your HTML 
page in comparison to HTML attributes.

     <h4>*Multiple Device Compatibility</h4> Style sheets allow content to be optimized for more than one type of device. 
By using the same HTML document, different versions of a website can be presented for handheld devices such as PDAs and 
cell phonesor for printing.

     <h4>*Global web standards</h4> Now HTML attributes are being deprecated and it is being recommended to use CSS. So its a good idea to 
start using CSS in all the HTML pages to make them compatible to future browsers.

     <h4>*Offline Browsing</h4> CSS can store web applications locally with the help of an offline catche.Using of this, we can view offline 
websites.The cache also ensures faster loading and better overall performance of the website.

     <h4>*Platform Independence</h4> The Script offer consistent platform independence and can support latest browsers as well.</div> 

<h3> WHO CREATES AND MAINTAINS CSS?</h3>

CSS was invited by Håkon Wium Lie on October 10, 1994 and maintained through a group of people within the W3C called the CSS Working Group. 
The CSS Working Group creates documents called specifications. When a specification has been discussed and officially ratified by W3C members,
it becomes a recommendation. <br>

These ratified specifications are called recommendations because the W3C has no control over the actual implementation of the language. 
Independent companies and organizations create that software. <br>

NOTE − The World Wide Web Consortium, or W3C is a group that makes recommendations about how the Internet works and how it should evolve.<br>
<h2>CSS Versions</h2>

Cascading Style Sheets, level 1 (CSS1) was came out of W3C as a recommendation in December 1996. This version describes the CSS language as 
well as a simple visual formatting model for all the HTML tags. <br><br>

CSS2 was became a W3C recommendation in May 1998 and builds on CSS1. This version adds support for media-specific style sheets e.g. printers 
and aural devices, downloadable fonts, element positioning and tables. <br><br>

CSS3 was became a W3C recommendation in June 1999 and builds on older versions CSS. it has divided into documentations is called as Modules 
and here each module having new extension features defined in CSS2. <br>
<h2>CSS3 Modules</h2> 

<b> CSS3 Modules are having old CSS specifications as well as extension features.</b> <br> <br>

    Selectors<br><br>
    Box Model<br><br>
    Backgrounds and Borders<br><br>
    Image Values and Replaced Content<br><br>
    Text Effects<br><br>
    2D/3D Transformations<br><br>
    Animations<br><br>
    Multiple Column Layout<br><br>
    User Interface </div> <br>

</p>
		</div>
		<div id="button2" class="div-mar">CSS BASICS</div>
		<div id="div_button2">
		
			<div id="y1">Fonts</div>
			<div id="y1a">This chapter teaches you how to set fonts of a content, available in an HTML element. You can set following font 
			properties of an element--<br><br>

    The <b>font-family</b> property is used to change the face of a font. <br><br>

    The <b>font-style</b> property is used to make a font italic or oblique.<br><br>

    The <b>font-variant</b> property is used to create a small-caps effect.<br><br>

    The <b>font-weight</b> property is used to increase or decrease how bold or light a font appears.<br><br>

    The <b>font-size</b> property is used to increase or decrease the size of a font.<br><br>

    The <b>font</b> property is used as shorthand to specify a number of other font properties.<br><br>

<u><b>Set the Font Family</b></u><br><br>

Following is the example, which demonstrates how to set the font family of an element. Possible value could be any font family name.

<b><p>



</p></b>

It will produce the following result −
Set the Font Style

Following is the example, which demonstrates how to set the font style of an element. Possible values are normal, italic and oblique.

<xmp><html>
   <head>
   </head>
   <body>
      <p style="font-style:italic;">
      This text will be rendered in italic style
      </p>
   </body>
</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="font-style:italic;">
      This text will be rendered in italic style
      </p>
   </body>
</html>
Set the Font Variant

The following example demonstrates how to set the font variant of an element. Possible values are normal and small-caps.

<xmp><html>
   <head>
   </head>
   <body>
      <p style="font-variant:small-caps;">
      This text will be rendered as small caps
      </p>
   </body>
</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="font-variant:small-caps;">
      This text will be rendered as small caps
      </p>
   </body>
</html>
Set the Font Weight

The following example demonstrates how to set the font weight of an element. The font-weight property provides the functionality to specify 
how bold a font is. Possible values could be normal, bold, bolder, lighter, 100, 200, 300, 400, 500, 600, 700, 800, 900.

<xmp><html>
   <head>
   </head>
   <body>
      <p style="font-weight:bold;">This font is bold.</p>
      <p style="font-weight:bolder;">This font is bolder.</p>
      <p style="font-weight:500;">This font is 500 weight.</p>
   </body>
</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="font-weight:bold;">This font is bold.</p>
      <p style="font-weight:bolder;">This font is bolder.</p>
      <p style="font-weight:500;">This font is 500 weight.</p>
   </body>
</html>
Set the Font Size

The following example demonstrates how to set the font size of an element. The font-size property is used to control the size of fonts. 
Possible values could be xx-small, x-small, small, medium, large, x-large, xx-large, smaller, larger, size in pixels or in %.

<xmp><html>
   <head>
   </head>
   <body>
      <p style="font-size:20px;">This font size is 20 pixels</p>
      <p style="font-size:small;">This font size is small</p>
      <p style="font-size:large;">This font size is large</p>
   </body>
</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="font-size:20px;">This font size is 20 pixels</p>
      <p style="font-size:small;">This font size is small</p>
      <p style="font-size:large;">This font size is large</p>
   </body>
</html>
Set the Font Size Adjust

The following example demonstrates how to set the font size adjust of an element. This property enables you to adjust the x-height to make 
fonts more legible. Possible value could be any number.

<xmp><html>
   <head>
   </head>
   <body>
      <p style="font-size-adjust:0.61;">
         This text is using a font-size-adjust value.
      </p>
   </body>
</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="font-size-adjust:0.61;">
         This text is using a font-size-adjust value.
      </p>
   </body>
</html>
Set the Font Stretch

The following example demonstrates how to set the font stretch of an element. This property relies on the user's computer to have an expanded
 or condensed version of the font being used.

Possible values could be normal, wider, narrower, ultra-condensed, extra-condensed, condensed, semi-condensed, semi-expanded, expanded, 
extra-expanded, ultra-expanded.

<xmp><html>
   <head>
   </head>
   <body>
      <p style="font-stretch:ultra-expanded;">
         If this doesn't appear to work, it is likely that your computer doesn't have a  
         condensed or expanded version of the font being used.
      </p>
   </body>
</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="font-stretch:ultra-expanded;">
         If this doesn't appear to work, it is likely that your computer doesn't have a  
         condensed or expanded version of the font being used.
      </p>
   </body>
</html>
Shorthand Property

You can use the font property to set all the font properties at once. For example −

<xmp><html>
   <head>
   </head>
   <body>
      <p style="font:italic small-caps bold 15px georgia;">
      Applying all the properties on the text at once.
      </p>
   </body>
</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="font:italic small-caps bold 15px georgia;">
      Applying all the properties on the text at once.
      </p>
   </body>
</html>

Applying all the properties on the text at once.
</div>
			<div id="y2">Text</div>
			<div id="y2a">This chapter teaches you how to manipulate text using CSS properties. You can set following text properties of an 
			element −

    The color property is used to set the color of a text.

    The direction property is used to set the text direction.

    The letter-spacing property is used to add or subtract space between the letters that make up a word.

    The word-spacing property is used to add or subtract space between the words of a sentence.

    The text-indent property is used to indent the text of a paragraph.

    The text-align property is used to align the text of a document.

    The text-decoration property is used to underline, overline, and strikethrough text.

    The text-transform property is used to capitalize text or convert text to uppercase or lowercase letters.

    The white-space property is used to control the flow and formatting of text.

    The text-shadow property is used to set the text shadow around a text.

Set the Text Color

The following example demonstrates how to set the text color. Possible value could be any color name in any valid format.

<xmp><html>
   <head>
   </head>
   <body>
      <p style="color:red;">
      This text will be written in red.
      </p>
   </body>
</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="color:red;">
      This text will be written in red.
      </p>
   </body>
</html>
Set the Text Direction

The following example demonstrates how to set the direction of a text. Possible values are ltr or rtl.

<xmp><html>
   <head>
   </head>
   <body>
      <p style="direction:rtl;">
      This text will be renedered from right to left
      </p>
   </body>
</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="direction:rtl;">
      This text will be renedered from right to left
      </p>
   </body>
</html>
Set the Space between Characters

The following example demonstrates how to set the space between characters. Possible values are normal or a number specifying space..

<xmp><html>
   <head>
   </head>
   <body>
      <p style="letter-spacing:5px;">
      This text is having space between letters.
      </p>
   </body>
</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="letter-spacing:5px;">
      This text is having space between letters.
      </p>
   </body>
</html>
Set the Space between Words

The following example demonstrates how to set the space between words. Possible values are normal or a number specifying space.

<xmp><html>
   <head>
   </head>
   <body>
      <p style="word-spacing:5px;">
      This text is having space between words.
      </p>
   </body>
</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="word-spacing:5px;">
      This text is having space between words.
      </p>
   </body>
</html>
Set the Text Indent

The following example demonstrates how to indent the first line of a paragraph. Possible values are % or a number specifying indent space.

<xmp><head>
   </head>
   <body>
      <p style="text-indent:1cm;">
      This text will have first line indented by 1cm and this line will remain at 
      its actual position this is done by CSS text-indent property.
      </p>
   </body>
</html></xmp>

It will produce the following result&#45;
<head>
   </head>
   <body>
      <p style="text-indent:1cm;">
      This text will have first line indented by 1cm and this line will remain at 
      its actual position this is done by CSS text-indent property.
      </p>
   </body>
</html>
Set the Text Alignment

The following example demonstrates how to align a text. Possible values are left, right, center, justify.

<xmp><html>
   <head>
   </head>
   <body>
      <p style="text-align:right;">
      This will be right aligned.
      </p>
      
      <p style="text-align:center;">
      This will be center aligned.
      </p>
      
      <p style="text-align:left;">
      This will be left aligned.
      </p>
      
   </body>
</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="text-align:right;">
      This will be right aligned.
      </p>
      
      <p style="text-align:center;">
      This will be center aligned.
      </p>
      
      <p style="text-align:left;">
      This will be left aligned.
      </p>
      
   </body>
</html>
Decorating the Text

The following example demonstrates how to decorate a text. Possible values are none, underline, overline, line-through, blink.

<xmp><html>
   <head>
   </head>
   <body>
      <p style="text-decoration:underline;">
      This will be underlined
      </p>
      
      <p style="text-decoration:line-through;">
      This will be striked through.
      </p>
      
      <p style="text-decoration:overline;">
      This will have a over line.
      </p>
      
      <p style="text-decoration:blink;">
      This text will have blinking effect
      </p>
   </body>
</html></xmp>

It will produce the following result &#45;
<html>
   <head>
   </head>
   <body>
      <p style="text-decoration:underline;">
      This will be underlined
      </p>
      
      <p style="text-decoration:line-through;">
      This will be striked through.
      </p>
      
      <p style="text-decoration:overline;">
      This will have a over line.
      </p>
      
      <p style="text-decoration:blink;">
      This text will have blinking effect
      </p>
   </body>
</html>
Set the Text Cases

The following example demonstrates how to set the cases for a text. Possible values are none, capitalize, uppercase, lowercase.

<xmp><html>
   <head>
   </head>
   <body>
      <p style="text-transform:capitalize;">
      This will be capitalized
      </p>
      
      <p style="text-transform:uppercase;">
      This will be in uppercase
      </p>
      
      <p style="text-transform:lowercase;">
      This will be in lowercase
      </p>
      </body>

</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="text-transform:capitalize;">
      This will be capitalized
      </p>
      
      <p style="text-transform:uppercase;">
      This will be in uppercase
      </p>
      
      <p style="text-transform:lowercase;">
      This will be in lowercase
      </p>
      </body>

</html>
Set the White Space between Text

The following example demonstrates how white space inside an element is handled. Possible values are normal, pre, nowrap.

<xmp><html>
   <head>
   </head>
   <body>
      <p style="white-space:pre;">
      This text has a line break and the white-space pre setting tells the browser to honor 
      it just like the HTML pre tag.</p> 
   </body>
</html></xmp> 

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="white-space:pre;">
      This text has a line break and the white-space pre setting tells the browser to honor 
      it just like the HTML pre tag.</p> 
   </body>
</html>
Set the Text Shadow

The following example demonstrates how to set the shadow around a text. This may not be supported by all the browsers.

<xmp><html>
   <head>
   </head>
   <body>
      <p style="text-shadow:4px 4px 8px blue;">
      If your browser supports the CSS text-shadow property, this text will have a blue shadow.
      </p>
   </body>
</html></xmp> 

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="text-shadow:4px 4px 8px blue;">
      If your browser supports the CSS text-shadow property, this text will have a blue shadow.
      </p>
   </body>
</html></div>
			<div id="y3">Images</div>
			<div id="y3a">Images play an important role in any webpage. Though it is not recommended to include a lot of images, but it is 
			still important to use good images wherever required.

CSS plays a good role to control image display. You can set the following image properties using CSS.

    The border property is used to set the width of an image border.

    The height property is used to set the height of an image.

    The width property is used to set the width of an image.

    The -moz-opacity property is used to set the opacity of an image.

The Image Border Property

The border property of an image is used to set the width of an image border. This property can have a value in length or in %.

A width of zero pixels means no border.

Here is the example −

<xmp><html>
   <head>
   </head>
   <body>
      <img style="border:0px;" src="/css/images/logo.png" />
      <br />
      <img style="border:3px dashed red;" src="/css/images/logo.png" />
   </body>
</html> </xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <img style="border:0px;" src="/css/images/logo.png" />
      <br />
      <img style="border:3px dashed red;" src="/css/images/logo.png" />
   </body>
</html>
The Image Height Property

The height property of an image is used to set the height of an image. This property can have a value in length or in %. While giving value 
in %, it applies it in respect of the box in which an image is available.

Here is an example :

<xmp><html>
   <head>
   </head>
   <body>
      <img style="border:1px solid red; height:100px;" src="/css/images/logo.png" />
      <br />
      <img style="border:1px solid red; height:50%;" src="/css/images/logo.png" />
   </body>
</html> </xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <img style="border:1px solid red; height:100px;" src="/css/images/logo.png" />
      <br />
      <img style="border:1px solid red; height:50%;" src="/css/images/logo.png" />
   </body>
</html>
The Image Width Property

The width property of an image is used to set the width of an image. This property can have a value in length or in %. While giving value in 
%, it applies it in respect of the box in which an image is available.

Here is an example :

<xmp><html>
   <head>
   </head>
   <body>
      <img style="border:1px solid red; width:150px;" src="/css/images/logo.png" />
      <br />
      <img style="border:1px solid red; width:100%;" src="/css/images/logo.png" />
   </body>
</html></xmp> 

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <img style="border:1px solid red; width:150px;" src="/css/images/logo.png" />
      <br />
      <img style="border:1px solid red; width:100%;" src="/css/images/logo.png" />
   </body>
</html>
The -moz-opacity Property

The -moz-opacity property of an image is used to set the opacity of an image. This property is used to create a transparent image in Mozilla. IE uses filter:alpha(opacity=x) to create transparent images.

In Mozilla (-moz-opacity:x) x can be a value from 0.0 - 1.0. A lower value makes the element more transparent (The same things goes for the 
CSS3-valid syntax opacity:x).

In IE (filter:alpha(opacity=x)) x can be a value from 0 - 100. A lower value makes the element more transparent.

Here is an example :

<xmp><html>
   <head>
   </head>
   <body>
      <img style="border:1px solid red;-moz-opacity:0.4;filter:alpha(opacity=40);" src="/css/images/logo.png" />
   </body>
</html> </xmp>

It will produce the following result&#45;
><html>
   <head>
   </head>
   <body>
      <img style="border:1px solid red;-moz-opacity:0.4;filter:alpha(opacity=40);" src="/css/images/logo.png" />
   </body>
</html>
</div>
			<div id="y4">Links</div>
			<div id="y4a">This chapter teaches you how to set different properties of a hyper link using CSS. You can set following properties
			of a hyper link −

We will revisit the same properties when we will discuss Pseudo-Classes of CSS.

    The :link signifies unvisited hyperlinks.

    The :visited signifies visited hyperlinks.

    The :hover signifies an element that currently has the user's mouse pointer hovering over it.

    The :active signifies an element on which the user is currently clicking.

Usually, all these properties are kept in the header part of the HTML document.

Remember a:hover MUST come after a:link and a:visited in the CSS definition in order to be effective. Also, a:active MUST come after a:hover 
in the CSS definition as follows −

<xmp><style type="text/css">
   a:link {color: #000000}
   a:visited {color: #006600}
   a:hover {color: #FFCC00}
   a:active {color: #FF00CC}
</style></xmp>

Now, we will see how to use these properties to give different effects to hyperlinks.
Set the Color of Links

The following example demonstrates how to set the link color. Possible values could be any color name in any valid format.

<xmp><html>
   <head>
      <style type="text/css">
         a:link {color:#000000}
     </style>
   </head>
   <body>
      <a href="">Link</a>
   </body>
</html> </xmp>

It will produce the following black link:
<html>
   <head>
      <style type="text/css">
         a:link {color:#000000}
     </style>
   </head>
   <body>
      <a href="">Link</a>
   </body>
</html>
Set the Color of Visited Links

The following example demonstrates how to set the color of visited links. Possible values could be any color name in any valid format.

<xmp><html>
   <head>
      <style type="text/css">
         a:visited {color: #006600}
      </style>
   </head>
   <body>
      <a href=""> link</a> 
   </body>
</html> </xmp>

It will produce the following link. Once you will click this link, it will change its color to green.
<html>
   <head>
      <style type="text/css">
         a:visited {color: #006600}
      </style>
   </head>
   <body>
      <a href=""> link</a> 
   </body>
</html>
Change the Color of Links when Mouse is Over

The following example demonstrates how to change the color of links when we bring a mouse pointer over that link. Possible values could be 
any color name in any valid format.

<xmp><html>
   <head>
      <style type="text/css">
         a:hover {color: #FFCC00}
      </style>
   </head>
   <body>
      <a href="">Link</a>
   </body>
</html></xmp> 

It will produce the following link. Now, you bring your mouse over this link and you will see that it changes its color to yellow.
<html>
   <head>
      <style type="text/css">
         a:hover {color: #FFCC00}
      </style>
   </head>
   <body>
      <a href="">Link</a>
   </body>
</html>
Change the Color of Active Links

The following example demonstrates how to change the color of active links. Possible values could be any color name in any valid format.

<xmp><html>
   <head>
      <style type="text/css">
         a:active {color: #FF00CC}
      </style>
   </head>
   <body>
      <a href="">Link</a>
   </body>
</html> </xmp>

It will produce the following link. It will change its color to pink when the user clicks it.
<html>
   <head>
      <style type="text/css">
         a:active {color: #FF00CC}
      </style>
   </head>
   <body>
      <a href="">Link</a>
   </body>
</html> 
</div>
			<div id="y5">Tables</div>
			<div id="y5a">This tutorial will teach you how to set different properties of an HTML table using CSS. You can set following
			properties of a table −

    The border-collapse specifies whether the browser should control the appearance of the adjacent borders that touch each other or whether
	each cell should maintain its style.

    The border-spacing specifies the width that should appear between table cells.

    The caption-side captions are presented in the <caption> element. By default, these are rendered above the table in the document. You 
	use the caption-side property to control the placement of the table caption.

    The empty-cells specifies whether the border should be shown if a cell is empty.

    The table-layout allows browsers to speed up layout of a table by using the first width properties it comes across for the rest of a 
	column rather than having to load the whole table before rendering it.

Now, we will see how to use these properties with examples.
The border-collapse Property:

This property can have two values collapse and separate. The following example uses both the values:

<xmp><html>
   <head>
   
      <style type="text/css">
         table.one {border-collapse:collapse;}
         table.two {border-collapse:separate;}
         td.a {
            border-style:dotted;
            border-width:3px;
            border-color:#000000; 
            padding: 10px;
         }
         td.b {
            border-style:solid;
            border-width:3px;
            border-color:#333333;
            padding:10px;
         }
      </style>
      
   </head>
   <body>
   
      <table class="one">
         <caption>Collapse Border Example</caption>
         <tr><td class="a"> Cell A Collapse Example</td></tr>
         <tr><td class="b"> Cell B Collapse Example</td></tr>
      </table>
      <br />
      
      <table class="two">
         <caption>Separate Border Example</caption>
         <tr><td class="a"> Cell A Separate Example</td></tr>
         <tr><td class="b"> Cell B Separate Example</td></tr>
      </table>
      
   </body>
</html> </xmp>

It will produce the following result&#45;
<html>
   <head>
   
      <style type="text/css">
         table.one {border-collapse:collapse;}
         table.two {border-collapse:separate;}
         td.a {
            border-style:dotted;
            border-width:3px;
            border-color:#000000; 
            padding: 10px;
         }
         td.b {
            border-style:solid;
            border-width:3px;
            border-color:#333333;
            padding:10px;
         }
      </style>
      
   </head>
   <body>
   
      <table class="one">
         <caption>Collapse Border Example</caption>
         <tr><td class="a"> Cell A Collapse Example</td></tr>
         <tr><td class="b"> Cell B Collapse Example</td></tr>
      </table>
      <br />
      
      <table class="two">
         <caption>Separate Border Example</caption>
         <tr><td class="a"> Cell A Separate Example</td></tr>
         <tr><td class="b"> Cell B Separate Example</td></tr>
      </table>
      
   </body>
</html> 

<b>The border-spacing Property</b>

The border-spacing property specifies the distance that separates adjacent cells'. borders. It can take either one or two values; these 
should be units of length.

If you provide one value, it will applies to both vertical and horizontal borders. Or you can specify two values, in which case, the first 
refers to the horizontal spacing and the second to the vertical spacing −

NOTE − Unfortunately, this property does not work in Netscape 7 or IE 6.

<xmp><style type="text/css">
   /* If you provide one value */
   table.example {border-spacing:10px;}
   /* This is how you can provide two values */
   table.example {border-spacing:10px; 15px;}
</style></xmp>

Now let's modify the previous example and see the effect :

<xmp><html>
   <head>
   
      <style type="text/css">
         table.one {
            border-collapse:separate;
            width:400px;
            border-spacing:10px;
         }
         table.two {
            border-collapse:separate;
            width:400px;
            border-spacing:10px 50px;
         }
      </style>
      
   </head>
   <body>
   
      <table class="one" border="1">
         <caption>Separate Border Example with border-spacing</caption>
         <tr><td> Cell A Collapse Example</td></tr>
         <tr><td> Cell B Collapse Example</td></tr>
      </table>
      <br />
      
      <table class="two" border="1">
         <caption>Separate Border Example with border-spacing</caption>
         <tr><td> Cell A Separate Example</td></tr>
         <tr><td> Cell B Separate Example</td></tr>
      </table>
      
   </body>
</html> </xmp>

It will produce the following result&#45;
<html>
   <head>
   
      <style type="text/css">
         table.one {
            border-collapse:separate;
            width:400px;
            border-spacing:10px;
         }
         table.two {
            border-collapse:separate;
            width:400px;
            border-spacing:10px 50px;
         }
      </style>
      
   </head>
   <body>
   
      <table class="one" border="1">
         <caption>Separate Border Example with border-spacing</caption>
         <tr><td> Cell A Collapse Example</td></tr>
         <tr><td> Cell B Collapse Example</td></tr>
      </table>
      <br />
      
      <table class="two" border="1">
         <caption>Separate Border Example with border-spacing</caption>
         <tr><td> Cell A Separate Example</td></tr>
         <tr><td> Cell B Separate Example</td></tr>
      </table>
      
   </body>
</html> 
The caption-side Property

The caption-side property allows you to specify where the content of a <caption> element should be placed in relationship to the table.
The table that follows lists the possible values.

This property can have one of the four values top, bottom, left or right. The following example uses each value.

NOTE: These properties may not work with your IE Browser.

<xmp><html>
   <head>
   
      <style type="text/css">
         caption.top {caption-side:top}
         caption.bottom {caption-side:bottom}
         caption.left {caption-side:left}
         caption.right {caption-side:right}
      </style>
      
   </head>
   <body>
   
      <table style="width:400px; border:1px solid black;">
         <caption class="top">
         This caption will appear at the top
         </caption>
         <tr><td > Cell A</td></tr>
         <tr><td > Cell B</td></tr>
      </table>
      <br />
      
      <table style="width:400px; border:1px solid black;">
         <caption class="bottom">
         This caption will appear at the bottom
         </caption>
         <tr><td > Cell A</td></tr>
         <tr><td > Cell B</td></tr>
      </table>
      <br />
      
      <table style="width:400px; border:1px solid black;">
         <caption class="left">
         This caption will appear at the left
         </caption>
         <tr><td > Cell A</td></tr>
         <tr><td > Cell B</td></tr>
      </table>
      <br />
      
      <table style="width:400px; border:1px solid black;">
         <caption class="right">
         This caption will appear at the right
         </caption>
         <tr><td > Cell A</td></tr>
         <tr><td > Cell B</td></tr>
      </table>
      
   </body>
</html> </xmp>

It will produce the following result&#45;
<html>
   <head>
   
      <style type="text/css">
         caption.top {caption-side:top}
         caption.bottom {caption-side:bottom}
         caption.left {caption-side:left}
         caption.right {caption-side:right}
      </style>
      
   </head>
   <body>
   
      <table style="width:400px; border:1px solid black;">
         <caption class="top">
         This caption will appear at the top
         </caption>
         <tr><td > Cell A</td></tr>
         <tr><td > Cell B</td></tr>
      </table>
      <br />
      
      <table style="width:400px; border:1px solid black;">
         <caption class="bottom">
         This caption will appear at the bottom
         </caption>
         <tr><td > Cell A</td></tr>
         <tr><td > Cell B</td></tr>
      </table>
      <br />
      
      <table style="width:400px; border:1px solid black;">
         <caption class="left">
         This caption will appear at the left
         </caption>
         <tr><td > Cell A</td></tr>
         <tr><td > Cell B</td></tr>
      </table>
      <br />
      
      <table style="width:400px; border:1px solid black;">
         <caption class="right">
         This caption will appear at the right
         </caption>
         <tr><td > Cell A</td></tr>
         <tr><td > Cell B</td></tr>
      </table>
      
   </body>
</html>
The empty-cells Property

The empty-cells property indicates whether a cell without any content should have a border displayed.

This property can have one of the three values - show, hide or inherit.

Here is the empty-cells property used to hide borders of empty cells in the <table> element.

<xmp><html>
   <head>
   
      <style type="text/css">
         table.empty{
            width:350px;
            border-collapse:separate;
            empty-cells:hide;
         }
         td.empty{
            padding:5px;
            border-style:solid;
            border-width:1px;
            border-color:#999999;
         }
      </style>
      
   </head>
   <body>
   
      <table class="empty">
      <tr>
         <th></th>
         <th>Title one</th>
         <th>Title two</th>
      </tr>
      
      <tr>
         <th>Row Title</th>
         <td class="empty">value</td>
         <td class="empty">value</td>
      </tr>
      
      <tr>
         <th>Row Title</th>
         <td class="empty">value</td>
         <td class="empty"></td>
      </tr>
      </table>
      
   </body>
</html> </xmp>

It will produce the following result&#45;
<html>
   <head>
   
      <style type="text/css">
         table.empty{
            width:350px;
            border-collapse:separate;
            empty-cells:hide;
         }
         td.empty{
            padding:5px;
            border-style:solid;
            border-width:1px;
            border-color:#999999;
         }
      </style>
      
   </head>
   <body>
   
      <table class="empty">
      <tr>
         <th></th>
         <th>Title one</th>
         <th>Title two</th>
      </tr>
      
      <tr>
         <th>Row Title</th>
         <td class="empty">value</td>
         <td class="empty">value</td>
      </tr>
      
      <tr>
         <th>Row Title</th>
         <td class="empty">value</td>
         <td class="empty"></td>
      </tr>
      </table>
      
   </body>
</html> 
The table-layout Property

The table-layout property is supposed to help you control how a browser should render or lay out a table.

This property can have one of the three values: fixed, auto or inherit.

The following example shows the difference between these properties.

NOTE − This property is not supported by many browsers so do not rely on this property.

<xmp><html>
   <head>
   
      <style type="text/css">
         table.auto {
            table-layout: auto
         }
         table.fixed{
            table-layout: fixed
         }
      </style>
      
   </head>
   <body>
   
      <table class="auto" border="1" width="100%">
      <tr>
         <td width="20%">1000000000000000000000000000</td>
         <td width="40%">10000000</td>
         <td width="40%">100</td>
      </tr>
      </table>
      <br />
      
      <table class="fixed" border="1" width="100%">
      <tr>
         <td width="20%">1000000000000000000000000000</td>
         <td width="40%">10000000</td>
         <td width="40%">100</td>
      </tr>
      </table>
      
   </body>
</html> </xmp>

It will produce the following result&#45;
<html>
   <head>
   
      <style type="text/css">
         table.auto {
            table-layout: auto
         }
         table.fixed{
            table-layout: fixed
         }
      </style>
      
   </head>
   <body>
   
      <table class="auto" border="1" width="100%">
      <tr>
         <td width="20%">1000000000000000000000000000</td>
         <td width="40%">10000000</td>
         <td width="40%">100</td>
      </tr>
      </table>
      <br />
      
      <table class="fixed" border="1" width="100%">
      <tr>
         <td width="20%">1000000000000000000000000000</td>
         <td width="40%">10000000</td>
         <td width="40%">100</td>
      </tr>
      </table>
      
   </body>
</html><br><br>
</div>
			<div id="y6">Borders</div>
			<div id="y6a">The border properties allow you to specify how the border of the box representing an element should look. There 
are three properties of a border you can change:

    The border-color specifies the color of a border.

    The border-style specifies whether a border should be solid, dashed line, double line, or one of the other possible values.

    The border-width specifies the width of a border.

Now, we will see how to use these properties with examples.
The border-color Property

The border-color property allows you to change the color of the border surrounding an element. You can individually change the color of the
bottom, left, top and right sides of an element's border using the properties −

    border-bottom-color changes the color of bottom border.

    border-top-color changes the color of top border.

    border-left-color changes the color of left border.

    border-right-color changes the color of right border.

The following example shows the effect of all these properties −

<xmp><html>
   <head>
   
      <style type="text/css">
         p.example1{
            border:1px solid;
            border-bottom-color:#009900; /* Green */
            border-top-color:#FF0000;    /* Red */
            border-left-color:#330000;   /* Black */
            border-right-color:#0000CC;  /* Blue */
         }
         p.example2{
            border:1px solid;
            border-color:#009900;        /* Green */
         }
      </style>
      
   </head>
   <body>
   
      <p class="example1">
      This example is showing all borders in different colors.
      </p>
      
      <p class="example2">
      This example is showing all borders in green color only.
      </p>
      
   </body>
</html> </xmp>

It will produce the following result&#45;
<html>
   <head>
   
      <style type="text/css">
         p.example1{
            border:1px solid;
            border-bottom-color:#009900; /* Green */
            border-top-color:#FF0000;    /* Red */
            border-left-color:#330000;   /* Black */
            border-right-color:#0000CC;  /* Blue */
         }
         p.example2{
            border:1px solid;
            border-color:#009900;        /* Green */
         }
      </style>
      
   </head>
   <body>
   
      <p class="example1">
      This example is showing all borders in different colors.
      </p>
      
      <p class="example2">
      This example is showing all borders in green color only.
      </p>
      
   </body>
</html>
The border-style Property

The border-style property allows you to select one of the following styles of border −

 <div style="margin=100px">
	*none: No border. (Equivalent of border-width:0;)

    *solid: Border is a single solid line.

    *dotted: Border is a series of dots.

    *dashed: Border is a series of short lines.

    *double: Border is two solid lines.

    *groove: Border looks as though it is carved into the page.

    *ridge: Border looks the opposite of groove.

    *inset: Border makes the box look like it is embedded in the page.

    *outset: Border makes the box look like it is coming out of the canvas.

    *hidden: Same as none, except in terms of border-conflict resolution for table elements.
</div>
You can individually change the style of the bottom, left, top, and right borders of an element using the following properties −

  <div style="margin=100px">
	*border-bottom-style changes the style of bottom border.

    *border-top-style changes the style of top border.

    *border-left-style changes the style of left border.

    *border-right-style changes the style of right border. </div><br>

The following example shows all these border styles&#45;

<xmp><html>
   <head>
   </head>
   
   <body>.
      <p style="border-width:4px; border-style:none;">
      This is a border with none width.
      </p>
      
      <p style="border-width:4px; border-style:solid;">
      This is a solid border.
      </p>
      
      <p style="border-width:4px; border-style:dashed;">
      This is a dahsed border.
      </p>
      
      <p style="border-width:4px; border-style:double;">
      This is a double border.
      </p>
      
      <p style="border-width:4px; border-style:groove;">
      This is a groove border.
      </p>
      
      <p style="border-width:4px; border-style:ridge">
      This is aridge  border.
      </p>
      
      <p style="border-width:4px; border-style:inset;">
      This is a inset border.
      </p>
      
      <p style="border-width:4px; border-style:outset;">
      This is a outset border.
      </p>
      
      <p style="border-width:4px; border-style:hidden;">
      This is a hidden border.
      </p>
      
      <p style="border-width:4px;border-top-style:solid;
      border-bottom-style:dashed; border-left-style:groove; border-right-style:double;">
      This is a a border with four different styles.
      </p>
   </body>
   
</html> </xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   
   <body>.
      <p style="border-width:4px; border-style:none;">
      This is a border with none width.
      </p>
      
      <p style="border-width:4px; border-style:solid;">
      This is a solid border.
      </p>
      
      <p style="border-width:4px; border-style:dashed;">
      This is a dahsed border.
      </p>
      
      <p style="border-width:4px; border-style:double;">
      This is a double border.
      </p>
      
      <p style="border-width:4px; border-style:groove;">
      This is a groove border.
      </p>
      
      <p style="border-width:4px; border-style:ridge">
      This is aridge  border.
      </p>
      
      <p style="border-width:4px; border-style:inset;">
      This is a inset border.
      </p>
      
      <p style="border-width:4px; border-style:outset;">
      This is a outset border.
      </p>
      
      <p style="border-width:4px; border-style:hidden;">
      This is a hidden border.
      </p>
      
      <p style="border-width:4px;border-top-style:solid;
      border-bottom-style:dashed; border-left-style:groove; border-right-style:double;">
      This is a a border with four different styles.
      </p>
   </body>
   
</html> <br>

The border-width Property&#45;


The border-width property allows you to set the width of an element borders. The value of this property could be either a length in px, pt 
or cm or it should be set to thin, medium or thick.

You can individually change the width of the bottom, top, left, and right borders of an element using the following properties:

   <div style="margin=100px"> border-bottom-width changes the width of bottom border.

    *border-top-width changes the width of top border.

    *border-left-width changes the width of left border.

    *border-right-width changes the width of right border. </div> <br>

The following example shows all these border width&#45;


<xmp><html>
   <head>
   </head>
   <body>
      <p style="border-width:4px; border-style:solid;">
      This is a solid border whose width is 4px.
      </p>
      
      <p style="border-width:4pt; border-style:solid;">
      This is a solid border whose width is 4pt.
      </p>
      
      <p style="border-width:thin; border-style:solid;">
      This is a solid border whose width is thin.
      </p>
      
      <p style="border-width:medium; border-style:solid;">
      This is a solid border whose width is medium;
      </p>
      
      <p style="border-width:thick; border-style:solid;">
      This is a solid border whose width is thick.
      </p>
      
      <p style="border-bottom-width:4px;border-top-width:10px;
      border-left-width: 2px;border-right-width:15px;border-style:solid;">
      This is a a border with four different width.
      </p>
   </body>
</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="border-width:4px; border-style:solid;">
      This is a solid border whose width is 4px.
      </p>
      
      <p style="border-width:4pt; border-style:solid;">
      This is a solid border whose width is 4pt.
      </p>
      
      <p style="border-width:thin; border-style:solid;">
      This is a solid border whose width is thin.
      </p>
      
      <p style="border-width:medium; border-style:solid;">
      This is a solid border whose width is medium;
      </p>
      
      <p style="border-width:thick; border-style:solid;">
      This is a solid border whose width is thick.
      </p>
      
      <p style="border-bottom-width:4px;border-top-width:10px;
      border-left-width: 2px;border-right-width:15px;border-style:solid;">
      This is a a border with four different width.
      </p>
   </body>
</html> <br>

Border Properties Using Shorthand<br>

The border property allows you to specify color, style, and width of lines in one property&#45; <br>

The following example shows how to use all the three properties into a single property. This is the most frequently used property to set 
border around any element.<br>

<xmp><html>
   <head>
   </head>
   <body>
      <p style="border:4px solid red;">
      This example is showing shorthand property for border.
      </p>
   </body>
</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="border:4px solid red;">
      This example is showing shorthand property for border.
      </p>
   </body>
</html>
</div> 
			<div id="y7">Margin</div>
			<div id="y7a"><pre>
The margin property defines the space around an HTML element. It is possible to use negative values to overlap content.

The values of the margin property are not inherited by the child elements. Remember that the adjacent vertical margins (top and bottom 
margins) will collapse into each other so that the distance between the blocks is not the sum of the margins, but only the greater of the 
two margins or the same size as one margin if both are equal.

We have the following properties to set an element margin.

   <div style="margin=100px">
	The margin specifies a shorthand property for setting the margin properties in one declaration.<br>

    The margin-bottom specifies the bottom margin of an element.<br>

    The margin-top specifies the top margin of an element.<br>

    The margin-left specifies the left margin of an element.<br>

    The margin-right specifies the right margin of an element. </div><br>

Now, we will see how to use these properties with examples.<br>

<b>The Margin Property</b><br>

The margin property allows you set all of the properties for the four margins in one declaration. Here is the syntax to set margin around a 
paragraph −

Here is an example −

<xmp><html>
   <head>
   </head>
   
   <body>
      <p style="margin: 15px; border:1px solid black;"> 
      all four margins will be 15px 
      </p>
      
      <p style="margin:10px 2%; border:1px solid black;">
      top and bottom margin will be 10px, left and right margin will be 2% of the total width of the document. 
      </p>
      
      <p style="margin: 10px 2% -10px; border:1px solid black;">
      top margin will be 10px, left and right margin will be 2% of the total width of the document, bottom margin will be -10px
      </p> 
      
      <p style="margin: 10px 2% -10px auto; border:1px solid black;">
      top margin will be 10px, right margin will be 2% of the total width of the document, bottom margin will be -10px, left margin will be 
	  set by the browser 
      </p>
   </body>
   
</html></xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   
   <body>
      <p style="margin: 15px; border:1px solid black;"> 
      all four margins will be 15px 
      </p>
      
      <p style="margin:10px 2%; border:1px solid black;">
      top and bottom margin will be 10px, left and right margin will be 2% of the total width of the document. 
      </p>
      
      <p style="margin: 10px 2% -10px; border:1px solid black;">
      top margin will be 10px, left and right margin will be 2% of the total width of the document, bottom margin will be -10px
      </p> 
      
      <p style="margin: 10px 2% -10px auto; border:1px solid black;">
      top margin will be 10px, right margin will be 2% of the total width of the document, bottom margin will be -10px, left margin will be 
	  set by the browser 
      </p>
   </body>
   
</html>

The margin-bottom Property

The margin-bottom property allows you set bottom margin of an element. It can have a value in length, % or auto.

Here is an example −

<xmp><html>
   <head>
   </head>
   <body>
      <p style="margin-bottom: 15px; border:1px solid black;">
      This is a paragraph with a specified bottom margin.
      </p> 
   
      <p style="margin-bottom: 5%; border:1px solid black;"> 
      This is another paragraph with a specified bottom margin in percent
      </p>
   </body>
</html> </xmp>

It will produce the following result&#45;
<html>
   <head>
   </head>
   <body>
      <p style="margin-bottom: 15px; border:1px solid black;">
      This is a paragraph with a specified bottom margin.
      </p> 
   
      <p style="margin-bottom: 5%; border:1px solid black;"> 
      This is another paragraph with a specified bottom margin in percent
      </p>
   </body>
</html>

The margin-top Property

The margin-top property allows you set top margin of an element. It can have a value in length, % or auto.

Here is an example −

<xmp><html>
   <head>
   </head>
   <body>
      <p style="margin-top: 15px; border:1px solid black;"> 
      This is a paragraph with a specified top margin 
      </p> 
      
      <p style="margin-top: 5%; border:1px solid black;"> 
      This is another paragraph with a specified top margin in percent 
      </p>
   </body>
</html> </xmp>

It will produce the following result:
<html>
   <head>
   </head>
   <body>
      <p style="margin-top: 15px; border:1px solid black;"> 
      This is a paragraph with a specified top margin 
      </p> 
      
      <p style="margin-top: 5%; border:1px solid black;"> 
      This is another paragraph with a specified top margin in percent 
      </p>
   </body>
</html>

The margin-left Property

The margin-left property allows you set left margin of an element. It can have a value in length, % or auto.

Here is an example:

<xmp><html>
   <head>
   </head>
   <body>
      <p style="margin-left: 15px; border:1px solid black;"> 
      This is a paragraph with a specified left margin 
      </p> 
   
      <p style="margin-left: 5%; border:1px solid black;"> 
      This is another paragraph with a specified top margin in percent 
      </p>
   </body>
</html> </xmp>

It will produce the following result:
<html>
   <head>
   </head>
   <body>
      <p style="margin-left: 15px; border:1px solid black;"> 
      This is a paragraph with a specified left margin 
      </p> 
   
      <p style="margin-left: 5%; border:1px solid black;"> 
      This is another paragraph with a specified top margin in percent 
      </p>
   </body>
</html>

The margin-right Property

The margin-right property allows you set right margin of an element. It can have a value in length, % or auto.

Here is an example:

<xmp><html>
   <head>
   </head>
   <body>
      <p style="margin-right: 15px; border:1px solid black;"> 
      This is a paragraph with a specified right margin 
      </p> 
      
      <p style="margin-right: 5%; border:1px solid black;"> 
      This is another paragraph with a specified right margin in percent 
      </p>
   </body>
</html> </xmp>

It will produce the following result:
<html>
   <head>
   </head>
   <body>
      <p style="margin-right: 15px; border:1px solid black;"> 
      This is a paragraph with a specified right margin 
      </p> 
      
      <p style="margin-right: 5%; border:1px solid black;"> 
      This is another paragraph with a specified right margin in percent 
      </p>
   </body>
</html>
</pre></div>
			<div id="y8">Lists</div>
			<div id="y8a"><pre>
<pre>
Lists are very helpful in conveying a set of either numbered or bullet points. This chapter teaches you how to control list type, position, 
style, etc., using CSS.

We have the following five CSS properties, which can be used to control lists:

    *The list-style-type allows you to control the shape or appearance of the marker.

    *The list-style-position specifies whether a long point that wraps to a second line should align with the first line or start underneath
	the start of the marker.

    *The list-style-image specifies an image for the marker rather than a bullet point or number.

    *The list-style serves as shorthand for the preceding properties.

    *The marker-offset specifies the distance between a marker and the text in the list.

Now, we will see how to use these properties with examples.
<b>The list-style-type Property</b>

The list-style-type property allows you to control the shape or style of bullet point (also known as a marker) in the case of unordered 
lists and the style of numbering characters in ordered lists.

Here are the values which can be used for an unordered list:
<b>Value 	Description
none 	NA
disc (default) 	A filled-in circle
circle 	An empty circle
square 	A filled-in square

Here are the values, which can be used for an ordered list&#45;
<b>Value 	                     Description 											Example</b>
decimal 	                 Number 	    										1,2,3,4,5
decimal-leading-zero 	     0 before the number 									01, 02, 03, 04, 05
lower-alpha 				 Lowercase alphanumeric characters 						a, b, c, d, e
upper-alpha 				 Uppercase alphanumeric characters						A, B, C, D, E
lower-roman 				 Lowercase Roman numerals 						   		i, ii, iii, iv, v
upper-roman 				 Uppercase Roman numerals 								I, II, III, IV, V
lower-greek 				 The marker is lower-greek 								alpha, beta, gamma
lower-latin 				 The marker is lower-latin 								a, b, c, d, e
upper-latin 				 The marker is upper-latin 								A, B, C, D, E
hebrew 						 The marker is traditional 								Hebrew numbering 	 
armenian 					 The marker is traditional 								Armenian numbering 	 
georgian 					 The marker is traditional 								Georgian numbering 	 
cjk-ideographic 	  		 The marker is plain 									ideographic numbers 	 
hiragana 					 The marker is hiragana 								a, i, u, e, o, ka, ki
katakana 					 The marker is katakana 								A, I, U, E, O, KA, KI
hiragana-iroha 				 The marker is hiragana-iroha 							i, ro, ha, ni, ho, he, to
katakana-iroha 				 The marker is katakana-iroha 							I, RO, HA, NI, HO, HE, TO </b>

Here is an example:

<xmp><html>
   <head>
   </head>
   
   <body>
      <ul style="list-style-type:circle;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ul style="list-style-type:square;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ol style="list-style-type:decimal;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
      
      <ol style="list-style-type:lower-alpha;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
      
      <ol style="list-style-type:lower-roman;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
   </body>
   
</html></xmp>

It will produce the following result:
<html>
   <head>
   </head>
   
   <body>
      <ul style="list-style-type:circle;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ul style="list-style-type:square;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ol style="list-style-type:decimal;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
      
      <ol style="list-style-type:lower-alpha;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
      
      <ol style="list-style-type:lower-roman;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
   </body>
   
</html>

<b>The list-style-position Property</b>

The list-style-position property indicates whether the marker should appear inside or outside of the box containing the bullet points. 
It can have one the two values:
Value 				Description
none 				NA
inside 				If the text goes onto a second line, the text will wrap underneath the marker. It will also appear indented to where 
					the text would have started if the list had a value of outside.
outside 			If the text goes onto a second line, the text will be aligned with the start of the first line (to the right of the bullet).

Here is an example:

<xmp><html>
   <head>
   </head>
   
   <body>
      <ul style="list-style-type:circle; list-style-position:outside;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ul style="list-style-type:square;list-style-position:inside;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ol style="list-style-type:decimal;list-style-position:outside;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
      
      <ol style="list-style-type:lower-alpha;list-style-position:inside;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
   </body>
   
</html></xmp>

It will produce the following result:
<html>
   <head>
   </head>
   
   <body>
      <ul style="list-style-type:circle; list-style-position:outside;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ul style="list-style-type:square;list-style-position:inside;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ol style="list-style-type:decimal;list-style-position:outside;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
      
      <ol style="list-style-type:lower-alpha;list-style-position:inside;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
   </body>
   
</html>

<b>The list-style-image Property</b>

The list-style-image allows you to specify an image so that you can use your own bullet style. The syntax is similar to the background-image
property with the letters url starting the value of the property followed by the URL in brackets. If it does not find the given image then 
default bullets are used.

Here is an example:

<xmp><html>
   <head>
   </head>
   
   <body>
      <ul>
         <li style="list-style-image: url(/images/bullet.gif);">Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ol>
         <li style="list-style-image: url(/images/bullet.gif);">Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
   </body>
   
</html></xmp>

It will produce the following result:
<html>
   <head>
   </head>
   
   <body>
      <ul>
         <li style="list-style-image: url(/images/bullet.gif);">Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ol>
         <li style="list-style-image: url(/images/bullet.gif);">Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
   </body>
   
</html>

</b>The list-style Property</b>

The list-style allows you to specify all the list properties into a single expression. These properties can appear in any order.

Here is an example:

<xmp><html>
   <head>
   </head>
   
   <body>
      <ul style="list-style: inside square;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ol style="list-style: outside upper-alpha;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
   </body>
   
</html> </xmp>

It will produce the following result:
<html>
   <head>
   </head>
   
   <body>
      <ul style="list-style: inside square;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ol style="list-style: outside upper-alpha;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
   </body>
   
</html>

<b>The marker-offset Property</b>

The marker-offset property allows you to specify the distance between the marker and the text relating to that marker. Its value should be a length as shown in the following example −

Unfortunately, this property is not supported in IE 6 or Netscape 7.

Here is an example:

<xmp><html>
   <head>
   </head>
   
   <body>
      <ul style="list-style: inside square; marker-offset:2em;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ol style="list-style: outside upper-alpha; marker-offset:2cm;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
   </body>
   
</html></xmp>

It will produce the following result:
<html>
   <head>
   </head>
   
   <body>
      <ul style="list-style: inside square; marker-offset:2em;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ol style="list-style: outside upper-alpha; marker-offset:2cm;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
   </body>
   
</html>
</pre></div> 
			<div id="y9">Padding</div>
			<div id="y9a"><pre>
The padding property allows you to specify how much space should appear between the content of an element and its border:

The value of this attribute should be either a length, a percentage, or the word inherit. If the value is inherit, it will have the same 
padding as its parent element. If a percentage is used, the percentage is of the containing box.

The following CSS properties can be used to control lists. You can also set different values for the padding on each side of the box using 
the following properties −

   <div style="margin=100px"> The padding-bottom specifies the bottom padding of an element.

    *The padding-top specifies the top padding of an element.

    *The padding-left specifies the left padding of an element.

    *The padding-right specifies the right padding of an element.

    *The padding serves as shorthand for the preceding properties. </div>

Now, we will see how to use these properties with examples.
The padding-bottom Property

The padding-bottom property sets the bottom padding (space) of an element. This can take a value in terms of length of %.

Here is an example:

<xmp><html>
   <head>
   </head>
   
   <body>
      <p style="padding-bottom: 15px; border:1px solid black;">
      This is a paragraph with a specified bottom padding
      </p>
      
      <p style="padding-bottom: 5%; border:1px solid black;">
      This is another paragraph with a specified bottom padding in percent
      </p>
   </body>
   
</html> </xmp>

It will produce the following result:
<html>
   <head>
   </head>
   
   <body>
      <p style="padding-bottom: 15px; border:1px solid black;">
      This is a paragraph with a specified bottom padding
      </p>
      
      <p style="padding-bottom: 5%; border:1px solid black;">
      This is another paragraph with a specified bottom padding in percent
      </p>
   </body>
   
</html>

<b>The padding-top Property</b>

The padding-top property sets the top padding (space) of an element. This can take a value in terms of length of %.

Here is an example:

<xmp><html>
   <head>
   </head>
   
   <body>
      <p style="padding-top: 15px; border:1px solid black;">
      This is a paragraph with a specified top padding
      </p>
      
      <p style="padding-top: 5%; border:1px solid black;">
      This is another paragraph with a specified top padding in percent
      </p>
   </body>
   
</html></xmp> 

It will produce the following result:
<html>
   <head>
   </head>
   
   <body>
      <p style="padding-top: 15px; border:1px solid black;">
      This is a paragraph with a specified top padding
      </p>
      
      <p style="padding-top: 5%; border:1px solid black;">
      This is another paragraph with a specified top padding in percent
      </p>
   </body>
   
</html>

<b>The padding-left Property</b>

The padding-left property sets the left padding (space) of an element. This can take a value in terms of length of %.

Here is an example:

<xmp><html>
   <head>
   </head>
   
   <body>
      <p style="padding-left: 15px; border:1px solid black;">
      This is a paragraph with a specified left padding
      </p>
      
      <p style="padding-left: 15%; border:1px solid black;">
      This is another paragraph with a specified left padding in percent
      </p>
   </body>
   
</html></xmp>

It will produce the following result:
<html>
   <head>
   </head>
   
   <body>
      <p style="padding-left: 15px; border:1px solid black;">
      This is a paragraph with a specified left padding
      </p>
      
      <p style="padding-left: 15%; border:1px solid black;">
      This is another paragraph with a specified left padding in percent
      </p>
   </body>
   
</html>

<b>The padding-right Property</b>

The padding-right property sets the right padding (space) of an element. This can take a value in terms of length of %.

Here is an example:

<xmp><html>
   <head>
   </head>
   
   <body>
      <p style="padding-right: 15px; border:1px solid black;">
      This is a paragraph with a specified right padding
      </p>
      
      <p style="padding-right: 5%; border:1px solid black;">
      This is another paragraph with a specified right padding in percent
      </p>
   </body>
   
</html> </xmp>

It will produce the following result:
<html>
   <head>
   </head>
   
   <body>
      <p style="padding-right: 15px; border:1px solid black;">
      This is a paragraph with a specified right padding
      </p>
      
      <p style="padding-right: 5%; border:1px solid black;">
      This is another paragraph with a specified right padding in percent
      </p>
   </body>
   
</html>
<b>
The Padding Property</b>

The padding property sets the left, right, top and bottom padding (space) of an element. This can take a value in terms of length of %.

Here is an example:

<xmp><html>
   <head>
   </head>
   
   <body>
      <p style="padding: 15px; border:1px solid black;">
      all four padding will be 15px 
      </p> 
      
      <p style="padding:10px 2%; border:1px solid black;"> 
      top and bottom padding will be 10px, left and right
      padding will be 2% of the total width of the document. 
      </p> 
      
      <p style="padding: 10px 2% 10px; border:1px solid black;">
      top padding will be 10px, left and right padding will 
      be 2% of the total width of the document, bottom padding will be 10px
      </p> 
      
      <p style="padding: 10px 2% 10px 10px; border:1px solid black;">
      top padding will be 10px, right padding will be 2% of
      the total width of the document, bottom padding and top padding will be 10px 
      </p>
   </body>
   
</html> </xmp>

It will produce the following result:
<html>
   <head>
   </head>
   
   <body>
      <p style="padding: 15px; border:1px solid black;">
      all four padding will be 15px 
      </p> 
      
      <p style="padding:10px 2%; border:1px solid black;"> 
      top and bottom padding will be 10px, left and right
      padding will be 2% of the total width of the document. 
      </p> 
      
      <p style="padding: 10px 2% 10px; border:1px solid black;">
      top padding will be 10px, left and right padding will 
      be 2% of the total width of the document, bottom padding will be 10px
      </p> 
      
      <p style="padding: 10px 2% 10px 10px; border:1px solid black;">
      top padding will be 10px, right padding will be 2% of
      the total width of the document, bottom padding and top padding will be 10px 
      </p>
   </body>
   
</html>
</pre>
</div>
			<div id="y10">Cursor</div>
			<div id="y10a"><pre>
			
The cursor property of CSS allows you to specify the type of cursor that should be displayed to the user.

One good usage of this property is in using images for submit buttons on forms. By default, when a cursor hovers over a link, the cursor 
changes from a pointer to a hand. However, it does not change form for a submit button on a form. Therefore, whenever someone hovers over 
an image that is a submit button, it provides a visual clue that the image is clickable.

The following table shows the possible values for the cursor property:

<b>Value 	                  				Description</b>
auto 	                  			Shape of the cursor depends on the context area it is over. For example, an 'I' over text, a 
						'hand' over a link,and so on.
crosshair 					A crosshair or plus sign
default 					An arrow
pointer 					A pointing hand (in IE 4 this value is hand).
move 						The 'I' bar
e-resize 					The cursor indicates that an edge of a box is to be moved right (east).
ne-resize 					The cursor indicates that an edge of a box is to be moved up and right (north/east).
nw-resize 					The cursor indicates that an edge of a box is to be moved up and left (north/west).
n-resize 					The cursor indicates that an edge of a box is to be moved up (north).
se-resize 					The cursor indicates that an edge of a box is to be moved down and right (south/east).
sw-resize 					The cursor indicates that an edge of a box is to be moved down and left (south/west).
s-resize 					The cursor indicates that an edge of a box is to be moved down (south).
w-resize 					The cursor indicates that an edge of a box is to be moved left (west).
text 						The I bar.
wait 						An hour glass.
help 						A question mark or balloon, ideal for use over help buttons.

<b><url></b> 	The source of a cursor image file.

NOTE: You should try to use only these values to add helpful information for users, and in places, they would expect to see that cursor. 
For example, using the crosshair when someone hovers over a link can confuse visitors.

Here is an example −

<xmp><html>
   <head>
   </head>
   
   <body>
      <p>Move the mouse over the words to see the cursor change:</p>
      
      <div style="cursor:auto">Auto</div>
      <div style="cursor:crosshair">Crosshair</div>
      <div style="cursor:default">Default</div>
      <div style="cursor:pointer">Pointer</div>
      <div style="cursor:move">Move</div>
      <div style="cursor:e-resize">e-resize</div>
      <div style="cursor:ne-resize">ne-resize</div>
      <div style="cursor:nw-resize">nw-resize</div>
      <div style="cursor:n-resize">n-resize</div>
      <div style="cursor:se-resize">se-resize</div>
      <div style="cursor:sw-resize">sw-resize</div>
      <div style="cursor:s-resize">s-resize</div>
      <div style="cursor:w-resize">w-resize</div>
      <div style="cursor:text">text</div>
      <div style="cursor:wait">wait</div>
      <div style="cursor:help">help</div>
   </body>
   </html> </xmp>
It will produce the following result:
<html>
   <head>
   </head>
   
   <body>
      <p>Move the mouse over the words to see the cursor change:</p>
      
      <div style="cursor:auto">Auto</div>
      <div style="cursor:crosshair">Crosshair</div>
      <div style="cursor:default">Default</div>
      <div style="cursor:pointer">Pointer</div>
      <div style="cursor:move">Move</div>
      <div style="cursor:e-resize">e-resize</div>
      <div style="cursor:ne-resize">ne-resize</div>
      <div style="cursor:nw-resize">nw-resize</div>
      <div style="cursor:n-resize">n-resize</div>
      <div style="cursor:se-resize">se-resize</div>
      <div style="cursor:sw-resize">sw-resize</div>
      <div style="cursor:s-resize">s-resize</div>
      <div style="cursor:w-resize">w-resize</div>
      <div style="cursor:text">text</div>
      <div style="cursor:wait">wait</div>
      <div style="cursor:help">help</div>
   </body>
   
</html>
</pre>
</div>
			<div id="y11">Outlines</div>
			<div id="y11a"><pre>
	Outlines are very similar to borders, but there are few major differences as well:

    *An outline does not take up space.

    *Outlines do not have to be rectangular.

    *Outline is always the same on all sides; you cannot specify different values for different sides of an element.

NOTE − The outline properties are not supported by IE 6 or Netscape 7.

You can set the following outline properties using CSS.:

    <b>*The outline-width property is used to set the width of the outline.</b>

    <b>*The outline-style property is used to set the line style for the outline.</b>

    <b>*The outline-color property is used to set the color of the outline.</b>

    <b>*The outline property is used to set all the above three properties in a single statement.</b>

<b>The outline-width Property</b>

The outline-width property specifies the width of the outline to be added to the box. Its value should be a length or one of the values thin,
medium, or thick, just like the border-width attribute.

A width of zero pixels means no outline.

Here is an example:

<xmp><html>
   <head>
   </head>
   
   <body>
      <p style="outline-width:thin; outline-style:solid;">
      This text is having thin outline.
      </p>
      <br />
      
      <p style="outline-width:thick; outline-style:solid;">
      This text is having thick outline.
      </p>
      <br />
      
      <p style="outline-width:5px; outline-style:solid;">
      This text is having 5x outline.
      </p>
   </body>
   
</html> </xmp>

It will produce the following result :
<html>
   <head>
   </head>
   
   <body>
      <p style="outline-width:thin; outline-style:solid;">
      This text is having thin outline.
      </p>
      <br />
      
      <p style="outline-width:thick; outline-style:solid;">
      This text is having thick outline.
      </p>
      <br />
      
      <p style="outline-width:5px; outline-style:solid;">
      This text is having 5x outline.
      </p>
   </body>
   
</html> 

<b>The outline-style Property</b>

The outline-style property specifies the style for the line (solid, dotted, or dashed) that goes around an element. It can take one of the 
following values:

    <b>*none: No border. (Equivalent of outline-width:0;)</b>

    <b>*solid: Outline is a single solid line.</b>

    <b>*dotted: Outline is a series of dots.</b>

    <b>*dashed: Outline is a series of short lines.</b>

    <b>*double: Outline is two solid lines.</b>

    <b>*groove: Outline looks as though it is carved into the page.</b>

    <b>*ridge: Outline looks the opposite of groove.</b>

    <b>*inset: Outline makes the box look like it is embedded in the page.</b>

    <b>*outset: Outline makes the box look like it is coming out of the canvas.</b>

    <b>*hidden: Same as none.</b>

Here is an example:
<xmp><html>
   <head>
   </head>
   
   <body>
      <p style="outline-width:thin; outline-style:solid;">
      This text is having thin solid  outline.
      </p>
      <br />
      
      <p style="outline-width:thick; outline-style:dashed;">
      This text is having thick dashed outline.
      </p>
      <br />
      
      <p style="outline-width:5px;outline-style:dotted;">
      This text is having 5x dotted outline.
      </p>
   </body>
   
</html> </xmp>

It will produce the following result :
<html>
   <head>
   </head>
   
   <body>
      <p style="outline-width:thin; outline-style:solid;">
      This text is having thin solid  outline.
      </p>
      <br />
      
      <p style="outline-width:thick; outline-style:dashed;">
      This text is having thick dashed outline.
      </p>
      <br />
      
      <p style="outline-width:5px;outline-style:dotted;">
      This text is having 5x dotted outline.
      </p>
   </body>
   
</html> 

<b>The outline-color Property</b>

The outline-color property allows you to specify the color of the outline. Its value should either be a color name, a hex color, or an RGB 
value, as with the color and border-color properties.

Here is an example :

<xmp><html>
   <head>
   </head>
   
   <body>
      <p style="outline-width:thin; outline-style:solid;outline-color:red">
      This text is having thin solid red  outline.
      </p>
      <br />
      
      <p style="outline-width:thick; outline-style:dashed;outline-color:#009900">
      This text is having thick dashed green outline.
      </p>
      <br />
      
      <p style="outline-width:5px;outline-style:dotted;outline-color:rgb(13,33,232)">
      This text is having 5x dotted blue outline.
      </p>
   </body>
   
</html></xmp> 

It will produce the following result :
<html>
   <head>
   </head>
   
   <body>
      <p style="outline-width:thin; outline-style:solid;outline-color:red">
      This text is having thin solid red  outline.
      </p>
      <br />
      
      <p style="outline-width:thick; outline-style:dashed;outline-color:#009900">
      This text is having thick dashed green outline.
      </p>
      <br />
      
      <p style="outline-width:5px;outline-style:dotted;outline-color:rgb(13,33,232)">
      This text is having 5x dotted blue outline.
      </p>
   </body>
   
</html>

<b>The outline Property</b>

The outline property is a shorthand property that allows you to specify values for any of the three properties discussed previously in any 
order but in a single statement.

Here is an example :

<xmp><html>
   <head>
   </head>
   
   <body>
      <p style="outline:thin solid red;">
      This text is having thin solid red outline.
      </p>
      <br />
       
      <p style="outline:thick dashed #009900;">
      This text is having thick dashed green outline.
      </p>
      <br />
      
      <p style="outline:5px dotted rgb(13,33,232);">
      This text is having 5x dotted blue outline.
      </p>
   </body>
   
</html> </xmp>

It will produce the following result :
<html>
   <head>
   </head>
   
   <body>
      <p style="outline:thin solid red;">
      This text is having thin solid red outline.
      </p>
      <br />
       
      <p style="outline:thick dashed #009900;">
      This text is having thick dashed green outline.
      </p>
      <br />
      
      <p style="outline:5px dotted rgb(13,33,232);">
      This text is having 5x dotted blue outline.
      </p>
   </body>
   
</html>
</pre>
</div>
			<div id="y12">Scrollbars</div>
			<div id="y12a"><pre>
There may be a case when an element's content might be larger than the amount of space allocated to it. For example, given width and height
properties do not allow enough room to accommodate the content of the element.

CSS provides a property called overflow which tells the browser what to do if the box's contents is larger than the box itself. This property
can take one of the following values:
<b>
Value		Description</b>

visible		Allows the content to overflow the borders of its containing element.
hidden		The content of the nested element is simply cut off at the border of the containing element and no scrollbars is visible.
scroll		The size of the containing element does not change, but the scrollbars are added to allow the user to scroll to see the content.
auto		The purpose is the same as scroll, but the scrollbar will be shown only if the content does overflow.

Here is an example :

<xmp><html>
   <head>
   </head>
   
      <style type="text/css">
         .scroll{
            display:block;
            border: 1px solid red;
            padding:5px;
            margin-top:5px;
            width:300px;
            height:50px;
            overflow:scroll;
         }
         .auto{
            display:block;
            border: 1px solid red;
            padding:5px;
            margin-top:5px;
            width:300px;
            height:50px;
            overflow:auto;
         }
      </style>
      
   <body>
   
      <p>Example of scroll value:</p>
      <div class="scroll">
      I am going to keep lot of content here just to show you how scrollbars works if there is an overflow in an 
      element box. This provides your horizontal as well as vertical scrollbars.
      </div>
      <br />
      
      <p>Example of auto value:</p>
      
      <div class="auto">
      I am going to keep lot of content here just to show you how scrollbars works if there is an overflow in an element box. 
      This provides your horizontal as well as vertical scrollbars.
      </div>
      
   </body>
</html> </xmp>

It will produce the following result :
<html>
   <head>
   </head>
   
      <style type="text/css">
         .scroll{
            display:block;
            border: 1px solid red;
            padding:5px;
            margin-top:5px;
            width:300px;
            height:50px;
            overflow:scroll;
         }
         .auto{
            display:block;
            border: 1px solid red;
            padding:5px;
            margin-top:5px;
            width:300px;
            height:50px;
            overflow:auto;
         }
      </style>
      
   <body>
   
      <p>Example of scroll value:</p>
      <div class="scroll">
      I am going to keep lot of content here just to show you how scrollbars works if there is an overflow in an 
      element box. This provides your horizontal as well as vertical scrollbars.
      </div>
      <br />
      
      <p>Example of auto value:</p>
      
      <div class="auto">
      I am going to keep lot of content here just to show you how scrollbars works if there is an overflow in an element box. 
      This provides your horizontal as well as vertical scrollbars.
      </div>
      
   </body>
</html>
<pre>
</div> </pre>

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