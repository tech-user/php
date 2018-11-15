<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Php 7 </title>

   <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
   <link rel="stylesheet" href="css/style.css">

<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>






</head>
<body>
   <div class="container border border-warning">

<h1 class="text-center">PHP 7 Tutorial</h1>
<hr>
<h5>Index</h5>
<div>


<ul class="list-group">
    <li  class="list-group-item"><a href="#intro">Php Introduction</a></li>
    <li  class="list-group-item"><a href="#comments">Comments</a></li>




</ul>

</div>
<br>
<br>



<h2 id="intro">PHP Introduction</h2>
<p>PHP is the most popular server-side scripting language for creating dynamic web pages.</p>
<br>
<p><img src="images/php-illustration.png" alt=""></p>

<br>

<h4>What is PHP?</h4>
<p>PHP stands for Hypertext Preprocessor. PHP is a very popular and widely-used open source server-side scripting language to write dynamically generated web pages. PHP was originally created by Rasmus Lerdorf in 1994. It was initially known as Personal Home Page.</p>

<P>PHP scripts are executed on the server and the result is sent to the web browser as plain HTML. PHP can be integrated with the number of popular databases, including MySQL, PostgreSQL, Oracle, Microsoft SQL Server, Sybase, and so on. The current major version of PHP is 7. All of the code in this tutorial has been tested and validated against the most recent release of PHP 7.</p>


<br>
<br>


<h4>What You Can Do with PHP</h4>
<ul>
   <li>You can generate pages and files dynamically.</li>
   <li>You can create, open, read, write and close files on the server.</li>
   <li>You can collect data from a web form such as user information, email, phone no, etc.</li>
   <li>You can send emails to the users of your website.</li>
   <li>You can send and receive cookies to track the visitor of your website.</li>
   <li>You can store, delete, and modify information in your database.</li>
   <li>You can restrict unauthorized access to your website.</li>
   <li>You can encrypt data for safe transmission over internet.</li>
</ul>

<br>
<br>
<h4>Advantages of PHP over Other Languages</h4>
                <p>If you're familiar with other server-side languages like ASP.NET or Java, you might be wondering what makes PHP so special. There are several advantages why one should choose PHP.</p>
                <ul>
                	<li><strong>Easy to learn:</strong> PHP is easy to learn and use. For beginner programmers who just started out in web development, PHP is often considered as the preferable choice of language to learn.</li>
                    <li><strong>Open source:</strong> PHP is an open-source project. It is developed and maintained by a worldwide community of developers who make its source code freely available to download and use.</li>
                    <li><strong>Portability:</strong> PHP runs on various platforms such as Microsoft Windows, Linux, Mac OS, etc. and it is compatible with almost all servers used today such Apache, IIS, etc.</li>
                    <li><strong>Fast Performance:</strong> Scripts written in PHP usually execute or runs faster than those written in other scripting languages like ASP, Ruby, Python, Java, etc.</li>
                    <li><strong>Vast Community:</strong> Since PHP is supported by the worldwide community, finding help or documentation related to PHP online is extremely easy. </li>
                </ul>




<br>
<br>

<h4>Setting Up a Local Web Server</h4>
                <p>PHP script execute on a web server running PHP. So before you start writing any PHP program you need the following program installed on your computer.</p>
                <ul>
                    <li>The Apache Web server</li>
                    <li>The PHP engine</li>
                    <li>The MySQL database server</li>
                </ul>


<br>
<br>

<h4>Creating Your First PHP Script</h4> <br>
<h5 class="example">Example</h5>

        <?php
             echo "Hello, Wolrd"; //Display Greeting message
        ?>

<br>
<br>
<p class="notes">PHP can be embedded within a normal HTML web page. That means inside your HTML document you can write the PHP statements.</p>


<br>
<br>

<h4>Standard PHP Syntax</h4>
<p>A PHP script starts with the <code>&lt;?php</code> and ends with the <code>?&gt;</code> tag.</p>

<p>Every PHP statement end with a semicolon (<code>;</code>) — this tells the PHP engine that the end of the current statement has been reached.</p>

<br>

<h4>Embedding PHP within HTML</h4>
<p>PHP files are plain text files with <code>.php</code> extension. Inside a PHP file you can write HTML like you do in regular HTML pages as well as embed PHP codes for server side execution.</p>

<p><img src="images/php-html.png" alt="" width="700" height="300"></p>

<br>

<h5 class="example">Example</h5>

<h6><?php echo "Hello, php"; ?></h6>

<br>
<hr>
<h4 id="comments">PHP Comments</h4>
<p>A comment is simply text that is ignored by the PHP engine. The purpose of comments is to make the code more readable. It may help other developer (or you in the future when you edit the source code) to understand what you were trying to do with the PHP.</p>

<p>PHP support single-line as well as multi-line comments. To write a single-line comment either start the line with either two slashes (<code>//</code>) or a hash symbol (<code>#</code>). For example:</p>


<br>

<h5 class="example">Example</h5>
// This is single line comment <br>
# This is also single line comment <br>
<br>
<?php

// This is single line comment
# This is also single line comment

echo "Hello, php";

?>

<br>
<br>

<p>However to write multi-line comments, start the comment with a slash followed by an asterisk (<code>/*</code>) and end the comment with an asterisk followed by a slash (<code>*/</code>), like this:</p> <br>
<h5 class="example">Example</h5>

/*
This is a multiple line comment block <br>
that spans across more than<br>
one line<br>
*/


<br>
<br>

<hr>

<h4>Case Sensitivity in PHP</h4>

<p>Variable names in PHP are case-sensitive. As a result the variables <code>$color</code>, <code>$Color</code> and <code>$COLOR</code> are treated as three different variables.</p>

<h5 class="example">Example</h5>

<?php

//Assing value to variable

$color = "blue";


// Try to print variable value

echo "The Color of the sky is " . $color . "<br>"."<br>"."<br>";

echo "Undefined Variable Error will occurs"."<br>";

echo "The Color of the sky is " . $Color . "<br>";
echo "The Color of the sky is " . $COLOR. "<br>";

?>

<br>
<br>

<p>However the keywords, function and classes names are case-insensitive. As a result calling the <code>gettype()</code> or <code>GETTYPE()</code> produce the same result.</p>

<br>
<h5 class="example">Example</h5>
<?php
    $color = "red";

    echo gettype($color) . "<br>";
    echo GETTYPE($color) . "<br>";

?>

<br>
<br>
<hr>
<h4>PHP Variables</h4>
<h5>What is Variable in PHP</h5>

<p>Variables are used to store data, like string of text, numbers, etc. Variable values can change over the course of a script. Here're some important things to know about variables:</p>
                <ul>
                    <li>In PHP, a variable does not need to be declared before adding a value to it. PHP automatically converts the variable to the correct data type, depending on its value.</li>
                    <li>After declaring a variable it can be reused throughout the code.</li>
                    <li>The assignment operator (<code>=</code>) used to assign value to a variable.</li>
                </ul>
                <p>In PHP variable can be declared as: <code>$var_name = value;</code></p>


<br>

<h5 class="example">Example</h5>

<?php
//Declaring variables

$txt = "Hello, PHP";
$number = 10;


//Displaying Variable Values

echo $txt."<br>"; // Output: Hello World!
echo $number;// Output: 10

?>

<br>
<br>

<h4>Naming Conventions for PHP Variables</h4>
<p>These are the following rules for naming a PHP variable:</p>
                <ul>
                	<li>All variables in PHP start with a <code>$</code> sign, followed by the name of the variable.</li>
                    <li>A variable name must start with a letter or the underscore character <code>_</code>.</li>
                    <li>A variable name cannot start with a number.</li>
                    <li>A variable name in PHP can only contain alpha-numeric characters and &nbsp;&nbsp; underscores (<code>A-z</code>, <code>0-9</code>, and <code>_</code>).</li>
                    <li>A variable name cannot contain spaces.</li>
                </ul>

<br>

<p class="notes"><strong>Note:</strong> Variable names in PHP are case sensitive, it means <code>$x</code> and <code>$X</code> are two different variables. So be careful while defining variable names.</p>


<br>
<br>
<hr>
<h4>PHP Constants</h4>
<h5>What is Constant in PHP</h5>

<p>A constant is a name or an identifier for a fixed value. Constant are like variables except that one they are defined, they cannot be undefined or changed (except <a href="https://www.tutorialrepublic.com/php-tutorial/php-magic-constants.php" target="_blank">magic constants</a>).</p>
                <p>Constants are very useful for storing data that doesn't change while the script is running. Common examples of such data include configuration settings such as database username and password, website's base URL, company name, etc.</p>
				<p> Constants are defined using PHP's <code>define()</code> function, which accepts two arguments: the name of the constant, and its value. Once defined the constant value can be accessed at any time just by referring to its name. Here is a simple example:</p>


<br>
<h5 class="example">Example</h5>

<?php

    //Define Constant

    define("SITE_URL", "https://www.apple.com/");

    echo 'Thanks for visiting - ' . SITE_URL;


?>

<br>
<br>

<p class="tip"><strong>Tip:</strong> By storing the value in a constant instead of a variable, you can make sure that the value won't get changed accidentally when your application runs.</p>


<br>

<p>Naming Conventions for PHP Constants</p>
<p>Name of constants must follow the same rules as variable names, which means a valid constant name must starts with a letter or underscore, followed by any number of letters, numbers or underscores with one exception: the <code>$</code> prefix is not required for constant names.</p>

<br>
<br>

<p class="notes"><strong>Note:</strong> By convention, constant names are usually written in uppercase letters. This is for their easy identification and differentiation from variables in the source code.</p>


<br>
<br>
<hr>
<h4>PHP Echo and Print Statements</h4>
<br>
<h5>The PHP echo Statement</h5>

<p>The echo statement can output one or more strings. In general terms, the echo statement can display anything that can be displayed to the browser, such as string, numbers, variables values, the results of expressions etc.</p>

<p>Since echo is a language construct not actually a function (like if statement), you can use it without parentheses e.g. <code>echo</code> or <code>echo()</code>. However, if you want to pass more than one parameter to echo, the parameters must not be enclosed within parentheses.</p>

<br>
<h4>Display Strings of Text</h4>
<p>The following example will show you how to display a string of text with the echo statement:</p>

<h5 class="example">Example</h5>

<?
 //Displaying string of text

 echo "Hello, World";
?>

<br>
<br>

<h5>Display HTML Code</h5>

<?php
// Displaying HTML code
echo "<h4>This is a simple heading.</h4>";
echo "<h4 style='color: red;'>This is heading with style.</h4>";
?>

<br>
<br>

<h4>Display Variables</h4>

<?php
// Defining variables
$txt = "Hello World!";
$num = 123456789;
$colors = array("Red", "Green", "Blue");

// Displaying variables
echo $txt;
echo "<br>";
echo $num;
echo "<br>";
echo $colors[1];
?>


<br>
<br>

<h4>The PHP print Statement</h4>
<p>You can also use the <code>print</code> statement (an alternative to echo) to display output to the browser. Like echo the print is also a language construct not a real function. So you can also use it without parentheses like: <code>print</code> or <code>print()</code>.</p>

<p>Both <code>echo</code> and <code>print</code> statement works exactly the same way except that the <code>print</code> statement can only output one string, and always returns 1. That's why the <code>echo</code> statement considered marginally faster than the <code>print</code> statement since it doesn't return any value.</p>


<br>
<br>
<h5 class="example">Example</h5>

<h5>Display Strings of Text</h5>
<?php
    print "Hello, Ganesh";

?>


<br>
<br>

<h5>Display HTML Code</h5>

<?php
print "<h4>This is a simple heading.</h4>";
print "<h4 style='color: red;'>This is heading with style.</h4>";


?>

<br>
<br>

<h5>Display Variables</h5>


<?php
// Defining variables
$txt = "Hello World!";
$num = 123456789;
$colors = array("Red", "Green", "Blue");

// Displaying variables
print $txt;
print "<br>";
print $num;
print "<br>";
print $colors[0];
?>

<hr>

<br>

<h4>PHP Data Types</h4>


<p>The values assigned to a PHP variable may be of different data types including simple string and numeric types to more complex data types like arrays and objects.

<br>
<br>

PHP supports total eight primitive data types: <code>Integer, Floating point number or Float, String, Booleans, Array, Object, resource and NULL </code>. These data types are used to construct variables. </p>

<br>

<h4>PHP Integers</h4>
<p>Integers are whole numbers, without a decimal point (..., -2, -1, 0, 1, 2, ...). Integers can be specified in decimal (base 10), hexadecimal (base 16 - prefixed with 0x) or octal (base 8 - prefixed with 0) notation, optionally preceded by a sign (- or +).</p>

<br>

<h5 class="example">Example</h5>

<?php

$a = 123; //decimal number

var_dump($a);
echo "<br>";

$b = -123; // a negative number
var_dump($b);
echo "<br>";

$c = 0x1A; // hexadecimal number
var_dump($c);
echo "<br>";

$d = 0123; // octal number
var_dump($d);

?>

<br>
<br>

<h4>PHP Strings</h4>
<p>Strings are sequences of characters, where every character is the same as a byte.</p>
<p>A string can hold <code>letters, numbers, and special characters</code> and it can be as large as up to 2GB (2147483647 bytes maximum). The simplest way to specify a string is to enclose it in single quotes (e.g. <code>'Hello world!'</code>), however you can also use double quotes (<code>"Hello world!"</code>).</p>

<h5 class="example">Example</h5>

<?php
$a = 'Hello world!';
echo $a;
echo "<br>";

$b = "Hello world!";
echo $b;
echo "<br>";

$c = 'Stay here, I\'ll be back.';
echo $c;
?>

<br>
<br>

<h4>PHP Floating Point Numbers or Doubles</h4>
<p>Floating point numbers (also known as <code>"floats", "doubles", or "real numbers"</code>) are decimal or fractional numbers, like demonstrated in the example below.</p>

<h5 class="example">Example</h5>

<?php
$a = 1.234;
var_dump($a);
echo "<br>";

$b = 10.2e3;
var_dump($b);
echo "<br>";

$c = 4E-10;
var_dump($c);
?>


<br>
<br>

<h4>PHP Booleans</h4>
<p>Booleans are like a switch it has only two possible values either <code>1 (true) or 0 (false)</code>.</p>

<h5 class="example">Example</h5>

<?php
// Assign the value TRUE to a variable

$show_error = true;

var_dump($show_error);


?>

<br>
<br>

<h4>PHP Arrays</h4>
<p>An array is a variable that can hold more than one value at a time. It is useful to aggregate a series of related items together, for example a set of country or city names.</p>
<p>An array is formally defined as an indexed collection of data values. Each index (also known as the key) of an array is unique and references a corresponding value.</p>

<h5 class="example">Example</h5>

<?php

$colors = array("Red", "Green", "Blue");
var_dump($colors);
echo "<br>"."<br>";


$color_codes = array(
    "Red" => "#ff0000",
    "Green" => "#00ff00",
    "Blue" => "#0000ff"
);
var_dump($color_codes);

?>


<br>
<br>

<h4>PHP Objects</h4>
<p>An object is a data type that not only allows storing data but also information on, how to process that data. An object is a specific instance of a class which serve as templates for objects. Objects are created based on this template via the new keyword.</p>

<p>Every object has properties and methods corresponding to those of its parent class. Every object instance is completely independent, with its own properties and methods, and can thus be manipulated independently of other objects of the same class.</p>

<h5 class="example">Example</h5>

<?php
// Class definition

class habits{
    // properties

    public $str = "Painting";

    // methods

    function show_habits (){
        return $this->str;
    }


}

// Create object from class

$message = new habits;

var_dump($message);


?>

<br>
<br>

<p class="tip"><strong>Tip:</strong> The data elements stored within an object are referred to as its properties and the information, or code which describing how to process the data is called the methods of the object.</p>

<br>
<br>

<h4>PHP NULL</h4>

<p>The special <code>NULL</code> value is used to represent empty variables in PHP. A variable of type NULL is a variable without any data. NULL is the only possible value of type null.</p>

<h5 class="example">Example</h5>
<?php

$a = NULL;
var_dump($a);

echo "<br>";

$b = "Hello World";
$b = NULL;

var_dump($b);

?>
<br>
<br>
<p>When a variable is created without a value in PHP like <code>$var;</code> it is automatically assigned a value of null. Many novice PHP developers mistakenly considered both <code>$var1 = NULL;</code> and <code>$var2 = "";</code> are same, but this is not true. Both variables are different — the <code>$var1</code> has null value while <code>$var2</code> indicates no value assigned to it.</p>

<br>
<h4>PHP Resources</h4>
<p>A resource is a special variable, holding a reference to an external resource.</p>
<p>Resource variables typically hold special handlers to opened files and database connections.</p>

<h5 class="example">Example</h5>

<?php
// Open a file for reading
$handle = fopen("note.txt", "r");
var_dump($handle);
echo "<br>";

// Connect to MySQL database server with default setting
$link = mysqli_connect("localhost", "root", "");
var_dump($link);
?>

<hr>

<br>

<h4>PHP Strings</h4>
<br>
<h5>What is String in PHP</h5>

<p>A <code>string</code> is a sequence of letters, numbers, special characters and arithmetic values or combination of all. The simplest way to create a string is to enclose the string literal (i.e. string characters) in single quotation marks ('), like this:</p>

<h5 class="example">Example</h5>
<span>$my_string = 'Hello, World';</span> <br>

<br>
<p>You can also use double quotation marks ("). However, single and double quotation marks work in different ways. Strings enclosed in single-quotes are treated almost literally, whereas the strings delimited by the double quotes replaces variables with the string representations of their values as well as specially interpreting certain escape sequences.</p>
                <p>The escape-sequence replacements are:</p>
                <ul>
                    <li><code>\n</code> is replaced by the newline character</li>
                    <li><code>\r</code> is replaced by the carriage-return character</li>
                    <li><code>\t</code> is replaced by the tab character</li>
                    <li><code>\$</code> is replaced by the dollar sign itself (<code>$</code>)</li>
                    <li><code>\"</code> is replaced by a single double-quote (<code>"</code>)</li>
                    <li><code>\\</code> is replaced by a single backslash (<code>\</code>)</li>
                </ul>

<br>

<h5 class="example">Example</h5>
<?php
$my_str = 'World';
echo "Hello, $my_str!<br>";      // Displays: Hello World!
echo 'Hello, $my_str!<br>';      // Displays: Hello, $my_str!
echo '<pre>Hello\tWorld!</pre>'; // Displays: Hello\tWorld!
echo "<pre>Hello\tWorld!</pre>"; // Displays: Hello   World!
echo 'I\'ll be back';            // Displays: I'll be back
?>


<br>
<br>
<br>
<h4>Manipulating PHP Strings</h4>
<p>PHP provides many built-in functions for manipulating strings like calculating the length of a string, find substrings or characters, replacing part of a string with different characters, take a string apart, and many others. Here are the examples of some of these functions.</p>

<br>

<h4>Calculating the Length of a String</h4>
<p>The <code>strlen()</code> function is used to calculate the number of characters inside a string. It also includes the blank spaces inside the string.</p>


<h5 class="example">Example</h5>
<?php

$msg_str = "Hai, How are you Doe?";

// Outputs :21
echo strlen($msg_str);

?>

<br>

<br>


<h4>Counting Number of Words in a String</h4>

<p>The <code>str_word_count()</code> function counts the number of words in a string.</p>
<h5 class="example">Example</h5>

<?php
$my_str = 'The quick brown fox jumps over the lazy dog. And Eaten Food.';

// Outputs: 9
echo str_word_count($my_str);
?>
<br>
<br>
<h4>Replacing Text within Strings</h4>
<p>The <code>str_replace()</code> replaces all occurrences of the search text within the target string.</p>


<h5 class="example">Example</h5>

<?php
$my_str = 'If the facts do not fit the theory, change the facts.';

// Display replaced string
echo str_replace("facts", "truth", $my_str);
?>

<br>
<br>

<p>You can optionally pass the fourth argument to the <code>str_replace()</code> function to know how many times the string replacements was performed, like this.</p>

<h5 class="example">Example</h5>


<?php
$my_str = 'If the facts do not fit the theory, change the facts. And facts';

// Perform string replacement
str_replace("facts", "truth", $my_str, $count);

// Display number of replacements performed
echo "The text was replaced $count times.";
?>

<br>
<br>

<h4>Reversing a String</h4>
<p>The <code>strrev()</code> function reverses a string.</p>
<h5 class="example">Example</h5>

<?php
    $my_str = "Nothing is impossible";

    // Display reversed string

    echo strrev($my_str);

?>

<p>
For a complete list of useful string functions, please check out
    <a href="string_ref.html" target="_blank">PHP String Reference.</a>
</p>

<br>

<hr>

<h4>PHP Operators</h4>
<h5>What is Operators in PHP</h5>
<p>Operators are symbols that tell the PHP processor to perform certain actions. For example, the addition <code>(+)</code> symbol is an operator that tells PHP to add two variables or values, while the greater-than <code>(>)</code> symbol is an operator that tells PHP to compare two values.</p>

<br>

<h5>PHP Arithmetic Operators</h5>
<p>The arithmetic operators are used to perform common arithmetical operations, such as addition, subtraction, multiplication etc. Here's a complete list of PHP's arithmetic operators:</p>

subtraction, multiplication etc. Here's a complete list of PHP's arithmetic operators:</p>
                <div>
                	<table class="table table-bordered">
                    	<tbody><tr>
                        	<th>Operator</th>
                            <th>Description</th>
                            <th>Example</th>
                            <th>Result</th>
                        </tr>
                        <tr>
                        	<td><code>+</code></td>
                            <td>Addition</td>
                            <td><code>$x + $y</code></td>
                            <td>Sum of $x and $y</td>
                        </tr>
                        <tr>
                        	<td><code>-</code></td>
                            <td>Subtraction</td>
                            <td><code>$x - $y</code></td>
                            <td>Difference of $x and $y.</td>
                        </tr>
                        <tr>
                        	<td><code>*</code></td>
                            <td>Multiplication</td>
                            <td><code>$x * $y</code></td>
                            <td>Product of $x and $y.</td>
                        </tr>
                        <tr>
                        	<td><code>/</code></td>
                            <td>Division</td>
                            <td><code>$x / $y</code></td>
                            <td>Quotient of $x and $y</td>
                        </tr>
                        <tr>
                        	<td><code>%</code></td>
                            <td>Modulus</td>
                            <td><code>$x % $y</code></td>
                            <td>Remainder of $x divided by $y</td>
                        </tr>
                    </tbody></table>
                </div>


<h5 class="example">Example</h5>

<?php
$x = 10;
$y = 4;
echo($x + $y). "<br>"; // 0utputs: 14
echo($x - $y). "<br>"; // 0utputs: 6
echo($x * $y). "<br>"; // 0utputs: 40
echo($x / $y). "<br>"; // 0utputs: 2.5
echo($x % $y). "<br>"; // 0utputs: 2
?>
<br>

<h5>PHP Assignment Operators</h5>
<p>The assignment operators are used to assign values to variables.</p>
<br>
<div>
                	<table class="table table-bordered">
                    	<tbody><tr>
                        	<th>Operator</th>
			    			<th style="width: 40%;">Description</th>
                            <th>Example</th>
                            <th>Is The Same As</th>
                        </tr>
                        <tr>
                        	<td><code>=</code></td>
			    			<td>Assign</td>
                            <td><code>$x = $y</code></td>
                            <td><code class="plain">$x = $y</code></td>
                        </tr>
                        <tr>
                        	<td><code>+=</code></td>
			    			<td>Add and assign</td>
                            <td><code>$x += $y</code></td>
                            <td><code class="plain">$x = $x + $y</code></td>
                        </tr>
                        <tr>
                        	<td><code>-=</code></td>
			    			<td>Subtract and assign</td>
                            <td><code>$x -= $y</code></td>
                            <td><code class="plain">$x = $x - $y</code></td>
                        </tr>
                        <tr>
                        	<td><code>*=</code></td>
			    			<td>Multiply and assign</td>
                            <td><code>$x *= $y</code></td>
                            <td><code class="plain">$x = $x * $y</code></td>
                        </tr>
                        <tr>
                        	<td><code>/=</code></td>
			    			<td>Divide and assign quotient</td>
                            <td><code>$x /= $y</code></td>
                            <td><code class="plain">$x = $x / $y</code></td>
                        </tr>
                        <tr>
                        	<td><code>%=</code></td>
			    			<td>Divide and assign modulus</td>
                            <td><code>$x %= $y</code></td>
                            <td><code class="plain">$x = $x % $y</code></td>
                        </tr>
                    </tbody></table>
                </div>


<br>
<p>The following example will show you these assignment operators in action:</p>

<?php
$x = 10;
echo $x; // Outputs: 10

echo "<br>" . "<br>";

$x = 20;
$x += 30;
echo $x; // Outputs: 50

echo "<br>" . "<br>";

$x = 50;
$x -= 20;
echo $x; // Outputs: 30

echo "<br>" . "<br>";

$x = 5;
$x *= 25;
echo $x; // Outputs: 125

echo "<br>" . "<br>";

$x = 50;
$x /= 10;
echo $x; // Outputs: 5

echo "<br>" . "<br>";

$x = 100;
$x %= 15;
echo $x; // Outputs: 10
?>

<br>
<br>
<br>

<h5>PHP Comparison Operators</h5> <br>
<p>The comparison operators are used to compare two values in a Boolean fashion.</p>
<div>
                	<table class="table table-bordered">
                    	<tbody><tr>
                        	<th>Operator</th>
                            <th style="width:28%;">Name</th>
                            <th style="width:15%;">Example</th>
                            <th>Result</th>
                        </tr>
                        <tr>
                        	<td><code>==</code></td>
                            <td>Equal</td>
                            <td><code>$x == $y</code></td>
                            <td>True if $x is equal to $y</td>
                        </tr>
                        <tr>
                        	<td><code>===</code></td>
                            <td>Identical</td>
                            <td><code>$x === $y</code></td>
                            <td>True if $x is equal to $y, and they are of the same type</td>
                        </tr>
                        <tr>
                        	<td><code>!=</code></td>
                            <td>Not equal</td>
                            <td><code>$x != $y</code></td>
                            <td>True if $x is not equal to $y</td>
                        </tr>
                        <tr>
                        	<td><code>&lt;&gt;</code></td>
                            <td>Not equal</td>
                            <td><code>$x &lt;&gt; $y</code></td>
                            <td>True if $x is not equal to $y</td>
                        </tr>
                        <tr>
                        	<td><code>!==</code></td>
                            <td>Not identical</td>
                            <td><code>$x !== $y</code></td>
                            <td>True if $x is not equal to $y, or they are not of the same type</td>
                        </tr>
						<tr>
                        	<td><code>&lt;</code></td>
                            <td>Less than</td>
                            <td><code>$x &lt; $y</code></td>
                            <td>True if $x is less than $y</td>
                        </tr>
                        <tr>
                        	<td><code>&gt;</code></td>
                            <td>Greater than</td>
                            <td><code>$x &gt; $y</code></td>
                            <td>True if $x is greater than $y</td>
                        </tr>
                        <tr>
                        	<td><code>&gt;=</code></td>
                            <td>Greater than or equal to</td>
                            <td><code>$x &gt;= $y</code></td>
                            <td>True if $x is greater than or equal to $y</td>
                        </tr>
                        <tr>
                        	<td><code>&lt;=</code></td>
                            <td>Less than or equal to</td>
                            <td><code>$x &lt;= $y</code></td>
                            <td>True if $x is less than or equal to $y</td>
                        </tr>
                    </tbody></table>
</div>

<br>
<p>The following example will show you these comparison operators in action:</p>

<br>


<h5 class="example">Example</h5>
<br>
<?php
$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z);  // Outputs: boolean true
echo "<br>" . "<br>";
var_dump($x === $z); // Outputs: boolean false
echo "<br>" . "<br>";
var_dump($x != $y);  // Outputs: boolean true
echo "<br>" . "<br>";
var_dump($x !== $z); // Outputs: boolean true
echo "<br>" . "<br>";
var_dump($x < $y);   // Outputs: boolean true
echo "<br>" . "<br>";
var_dump($x > $y);   // Outputs: boolean false
echo "<br>" . "<br>";
var_dump($x <= $y);  // Outputs: boolean true
echo "<br>" . "<br>";
var_dump($x >= $y);  // Outputs: boolean false
?>


<br>
<br>
<br>

<h5>PHP Incrementing and Decrementing Operators</h5>
<p>The increment/decrement operators are used to increment/decrement a variable's value.</p>

<div>
                	<table class="table table-bordered">
                    	<tbody><tr>
                        	<th>Operator</th>
                            <th>Name</th>
                            <th>Effect</th>
                        </tr>
                        <tr>
                        	<td><code>++$x</code></td>
                            <td>Pre-increment</td>
                            <td>Increments $x by one, then returns $x</td>
                        </tr>
                        <tr>
                        	<td><code>$x++</code></td>
                            <td>Post-increment</td>
                            <td>Returns $x, then increments $x by one</td>
                        </tr>
						<tr>
                        	<td><code>--$x</code></td>
                            <td>Pre-decrement</td>
                            <td>Decrements $x by one, then returns $x</td>
                        </tr>
                        <tr>
                        	<td><code>$x--</code></td>
                            <td>Post-decrement</td>
                            <td>Returns $x, then decrements $x by one</td>
                        </tr>
                    </tbody></table>
                </div>

<br>
<br>

<h5 class="example">Example</h5>

<?php

$x = 10;
echo ++$x; //Outputs :11
echo "<br>";
echo $x; //Outputs :11
echo "<br>";

$x = 10;
echo $x++; // Outputs: 10
echo "<br>";
echo $x;   // Outputs: 11
echo "<br>";

$x = 10;
echo --$x; // Outputs: 9
echo "<br>";
echo $x;   // Outputs: 9
echo "<br>";

$x = 10;
echo $x--; // Outputs: 10
echo "<br>";
echo $x;   // Outputs: 9

?>


<br>
<br>
<br>

<h4>PHP Logical Operators</h4>
<p>The logical operators are typically used to combine conditional statements.</p>

<div>
                	<table class="table table-bordered">
                    	<tbody><tr>
                        	<th>Operator</th>
                            <th style="width:12%;">Name</th>
                            <th>Example</th>
                            <th>Result</th>
                        </tr>
                        <tr>
                        	<td><code>and</code></td>
                            <td>And</td>
                            <td><code>$x and $y</code></td>
                            <td>True if both $x and $y are true</td>
                        </tr>
                        <tr>
                        	<td><code>or</code></td>
                            <td>Or</td>
                            <td><code>$x or $y</code></td>
                            <td>True if either $x or $y is true</td>
                        </tr>
                        <tr>
                        	<td><code>xor</code></td>
                            <td>Xor</td>
                            <td><code>$x xor $y</code></td>
                            <td>True if either $x or $y is true, but not both</td>
                        </tr>
                        <tr>
                        	<td><code>&amp;&amp;</code></td>
                            <td>And</td>
                            <td><code>$x &amp;&amp; $y</code></td>
                            <td>True if both $x and $y are true</td>
                        </tr>
                        <tr>
                        	<td><code>||</code></td>
                            <td>Or</td>
                            <td><code>$x || $y</code></td>
                            <td>True if either $$x or $y is true</td>
                        </tr>
                        <tr>
                        	<td><code>!</code></td>
                            <td>Not</td>
                            <td><code>!$x</code></td>
                            <td>True if $x is not true</td>
                        </tr>
                    </tbody></table>
                </div>


<br>
<br>
<h5 class="example">Example</h5>

<?php
$year = 2020;

// Leap years are divisible by 400 or by 4 but not 100

if (($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))) {
    echo "$year is a Leap year.";
} else {
    echo "$year is not a Leap year";
}


?>

<br>
<br>

<h4>PHP String Operators</h4>
<p>There are two operators which are specifically designed for strings.</p>

<div>
                	<table class="table table-bordered">
                    	<tbody><tr>
                        	<th>Operator</th>
                            <th>Description</th>
                            <th>Example</th>
                            <th>Result</th>
                        </tr>
                        <tr>
                        	<td><code>.</code></td>
                            <td>Concatenation</td>
                            <td><code>$str1 . $str2</code></td>
                            <td>Concatenation of $str1 and $str2</td>
                        </tr>
                        <tr>
                        	<td><code>.=</code></td>
                            <td>Concatenation assignment</td>
                            <td><code>$str1 .= $str2</code></td>
                            <td>Appends the $str2 to the $str1</td>
                        </tr>
                    </tbody></table>
                </div>


<h5 class="example">Example</h5>

<?php
$x = "Hello";
$y = " World!";
echo $x . $y; // Outputs: Hello World!

echo "<br>";

$x .= $y;
echo $x; // Outputs: Hello World!
?>

<br>
<br>
<br>
<h4>PHP Array Operators</h4>

<p>The array operators are used to compare arrays:</p>
				<div>
                	<table class="table table-bordered">
                    	<tbody><tr>
                        	<th>Operator</th>
                            <th>Name</th>
                            <th style="width:15%;">Example</th>
                            <th>Result</th>
                        </tr>
						<tr>
                        	<td><code>+</code></td>
                            <td>Union</td>
                            <td><code>$x + $y</code></td>
                            <td>Union of $x and $y</td>
                        </tr>
                        <tr>
                        	<td><code>==</code></td>
                            <td>Equality</td>
                            <td><code>$x == $y</code></td>
                            <td>True if $x and $y have the same key/value pairs</td>
                        </tr>
                        <tr>
                        	<td><code>===</code></td>
                            <td>Identity</td>
                            <td><code>$x === $y</code></td>
                            <td>True if $x and $y have the same key/value pairs in the same order and of the same types</td>
                        </tr>
                        <tr>
                        	<td><code>!=</code></td>
                            <td>Inequality</td>
                            <td><code>$x != $y</code></td>
                            <td>True if $x is not equal to $y</td>
                        </tr>
                        <tr>
                        	<td><code>&lt;&gt;</code></td>
                            <td>Inequality</td>
                            <td><code>$x &lt;&gt; $y</code></td>
                            <td>True if $x is not equal to $y</td>
                        </tr>
						<tr>
                        	<td><code>!==</code></td>
                            <td>Non-identity</td>
                            <td><code>$x !== $y</code></td>
                            <td>True if $x is not identical to $y</td>
                        </tr>
                    </tbody></table>
                </div>

<br>
<br>
<h5 class="example">Example</h5>

<?php

$x = array(

    "a" => "Red",
    "b" => "Green",
    "c" => "Blue"
);

$y = array(
    "u" => "Yellow",
    "v" => "Orange",
    "w" => "Pink"
);

$z = $x + $y; // Union of $x and $y


var_dump($z);
echo "<br>";
var_dump($x == $y);   // Outputs: boolean false
echo "<br>";
var_dump($x === $y);  // Outputs: boolean false
echo "<br>";
var_dump($x != $y);   // Outputs: boolean true
echo "<br>";
var_dump($x <> $y);   // Outputs: boolean true
echo "<br>";
var_dump($x !== $y);  // Outputs: boolean true


?>


<br>
<br>
<br>

<h4>PHP Spaceship Operator <span class="badge badge-secondary">PHP 7</span></h4>
				<p>PHP 7 introduces a new spaceship operator (<code>&lt;=&gt;</code>) which can be used for comparing two expressions. It is also known as combined comparison operator.</p>
				<p>The spaceship operator returns <code>0</code> if both operands are equal, <code>1</code> if the left is greater, and <code>-1</code> if the right is greater. It basically provides three-way comparison as shown in the following table:</p>
				<div>
                	<table class="table table-bordered">
						<thead>
							<tr>
								<th>Operator</th>
								<th><code>&lt;=&gt;</code> Equivalent</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>$x &lt; $y</code></td>
								<td><code class="plain">($x &lt;=&gt; $y) === -1</code></td>
							</tr>
							<tr>
								<td><code>$x &lt;= $y</code> </td>
								<td><code class="plain">($x &lt;=&gt; $y) === -1 || ($x &lt;=&gt; $y) === 0</code></td>
							</tr>
							<tr>
								<td><code>$x == $y</code></td>
								<td><code class="plain">($x &lt;=&gt; $y) === 0</code></td>
							</tr>
							<tr>
								<td><code>$x != $y</code></td>
								<td><code class="plain">($x &lt;=&gt; $y) !== 0</code></td>
							</tr>
							<tr>
								<td><code>$x &gt;= $y</code></td>
								<td><code class="plain">($x &lt;=&gt; $y) === 1 || ($x &lt;=&gt; $y) === 0</code></td>
							</tr>
							<tr>
								<td><code>$x &gt; $y</code></td>
								<td><code class="plain">($x &lt;=&gt; $y) === 1</code></td>
							</tr>
						</tbody>
					</table>
				</div>


<br>
<br>

<h5 class="example">Example</h5>

// Comparing Integers <br>
echo 1 <=> 1; // Outputs: 0<br>
echo 1 <=> 2; // Outputs: -1<br>
echo 2 <=> 1; // Outputs: 1<br><br>

// Comparing Floats<br>
echo 1.5 <=> 1.5; // Outputs: 0<br>
echo 1.5 <=> 2.5; // Outputs: -1<br>
echo 2.5 <=> 1.5; // Outputs: 1<br><br>

// Comparing Strings<br>
echo "x" <=> "x"; // Outputs: 0<br>
echo "x" <=> "y"; // Outputs: -1<br>
echo "y" <=> "x"; // Outputs: 1<br>






<br>
<br>
<br>

<hr>

<h4>PHP If…Else Statements</h4>
<br>

<h5>PHP Conditional Statements</h5>
<p>Like most programming languages, PHP also allows you to write code that perform different actions based on the results of a logical or comparative test conditions at run time. This means, you can create test conditions in the form of expressions that evaluates to either true or false and based on these results you can perform certain actions.</p>
                <p>There are several statements in PHP that you can use to make decisions:</p>
				<ul>
		    		<li>The <strong>if</strong> statement</li>
		    		<li>The <strong>if...else</strong> statement</li>
					<li>The <strong>if...elseif....else</strong> statement</li>
		    		<li>The <strong>switch...case</strong> statement</li>
				</ul>


<br>
<br>

<h5>The if Statement</h5>
<p>The <code>if</code> statement is used to execute a block of code only if the specified condition evaluates to true. This is the simplest PHP's conditional statements and can be written like:</p>

<p>
    <code>if</code>(condtion) { <br>
        // Code to executed<br>
    }
</p>

<br>

<h5 class="example">Example</h5>

<?php

$d = date("D");

if ($d == "Fri") {
    echo "Have a nice day";
}
?>

<br>
<br>

<h5>The if...else Statement</h5>

<p>You can enhance the decision making process by providing an alternative choice through adding an <code>else</code> statement to the <code>if</code> statement. The <code>if...else</code> statement allows you to execute one block of code if the specified condition is evaluates to true and another block of code if it is evaluates to false.</p>

<p>
   <code>if</code> (condition) {<br>
    <span class="text-secondary">// Code to be executed if condition is true</span><br>
} <code>else</code> {<br>
    <span class="text-secondary">// Code to be executed if condition is false</span><br>
}

</p>


<br>
<h5 class="example">Example</h5>

<?php

$age = 41;

if ($age >= 40) {
    echo "You are eligible for Pension";
} else {
    echo "sorry, you are not eligible for Pension";
}


?>


<br>
<br>

<h5>The if...elseif...else Statement</h5>
<p>The <code>if...elseif...else</code> a special statement that is used to combine multiple <code>if...else</code> statements.</p>

<p><strong>Syntax</strong></p>


<p>
    <code>if</code> (condition1) { <br>
    <span class="text-secondary">// Code to be executed if condition1 is true</span><br>
} <code>elseif</code> (condition2) {<br>
    <span class="text-secondary">// Code to be executed if the condition1 is false and condition2 is true</span><br>
} <code>else</code> {<br>
    <span class="text-secondary">// Code to be executed if both condition1 and condition2 are false</span><br>
}
</p>

<h5 class="example">Example</h5>

<?php
$approved_limit = 25000;

$credit_limit = 23000;

if ($credit_limit == 25000) {
    echo "Credit Card limit is over";
} elseif($credit_limit > 25000) {
    echo "Credit card limit is exceeded. " . " And Check your approved limit is only " . $approved_limit;
} else {
    echo "your credit card balance = " . $credit_limit;
}


?>


<br>
<br>
<br>

<h5>The Ternary Operator</h5>
<p>The ternary operator provides a shorthand way of writing the <code>if...else</code> statements. The ternary operator is represented by the question mark (<code>?</code>) symbol and it takes three operands: a condition to check, a result for ture, and a result for false.</p>


<h5 class="example">Example</h5>

<?php
$age = 18;

if ($age < 18) {
    echo 'Child'; //Display child if age is less than 18
} else{
    echo 'Adult'; // Display Adult if age is greater than or equal to 18
}

?>

<br>
<br>
<p class="text-primary">Using the ternary operator the same code could be written in a more compact way:</p>

<?php
$age = 18;

echo ($age < 18) ? 'child' : 'adult';

?>
<br>
<br>

<p class="tip"><strong>Tip:</strong> Code written using the ternary operator can be hard to read. However, it provides a great way to write compact if-else statements.</p>

<br>
<br>
<br>

<h4>The Null Coalescing Operator <span class="badge badge-secondary">PHP7</span> </h4>
<br>
<p>PHP 7 introduces a new null coalescing operator (<code>??</code>) which you can use as a shorthand where you need to use a ternary operator in conjunction with <code>isset()</code> function.</p>
<p>To uderstand this in a better way consider the following line of code. It fetches the value of <code>$_GET['name']</code>, if it does not exist or <code>NULL</code>, it returns 'anonymous'.</p>


<br>
<br>

<h5 class="example">Example</h5>
<?php

$name = isset($_GET['name']) ? $_GET['name'] : 'anonymous';

echo $name;

?>

<br>
<br>

<p class="text-primary">Using the null coalescing operator the same code could be written as:</p>

<?php

$name = $_GET['name'] ?? 'anonymous';

echo $name;

?>



<br>
<br>

<hr>

<h4>PHP Switch…Case Statements</h4>

<h5>PHP If…Else Vs Switch…Case</h5>

<p>The switch-case statement is an alternative to the if-elseif-else statement, which does almost the same thing. The switch-case statement tests a variable against a series of values until it finds a match, and then executes the block of code corresponding to that match.</p>

<h5 class="example">Syntax</h5>
<p>
    <img src="images/switch-case.png" alt="" width="700" height="300">
</p>

<br>
<h5 class="example">Example</h5>

<?php

$today = date("D");

switch($today){
    case "Mon":
        echo "Today is Monday. Clean your house.";
        break;
    case "Tue":
        echo "Today is Tuesday. Buy some food.";
        break;
    case "Wed":
        echo "Today is Wednesday. Visit a doctor.";
        break;
    case "Thu":
        echo "Today is Thursday. Repair your car.";
        break;
    case "Fri":
        echo "Today is Friday. Party tonight.";
        break;
    case "Sat":
        echo "Today is Saturday. Its movie time.";
        break;
    case "Sun":
        echo "Today is Sunday. Do some rest.";
        break;
    default:
        echo "No information available for that day.";
        break;
}


?>



<br>
<br>
<br>

<p>The <code>switch-case</code> statement differs from the <code>if-elseif-else</code> statement in one important way. The <code>switch</code> statement executes line by line (i.e. statement by statement) and once PHP finds a <code>case</code> statement that evaluates to true, it's not only executes the code corresponding to that case statement, but also executes all the subsequent <code>case</code> statements till the end of the <code>switch</code> block automatically.</p>
<p>To prevent this add a <code>break</code> statement to the end of each <code>case</code> block. The <code>break</code> statement tells PHP to break out of the <code>switch-case</code> statement block once it executes the code associated with the first true case.</p>


<br>
<br>

<hr>
<h4>PHP Arrays</h4>
<br>
<h5>What is PHP Arrays</h5>

<p>Arrays are complex variables that allow us to store more than one value or a group of values under a single variable name. Let's suppose you want to store colors in your PHP script. Storing the colors one by one in a variable could look something like this:</p>


<h5 class="example">Example</h5>

<?php

    $color1 = "Red";
    $color2 = "Green";
    $color3  = "Blue";

    // Display

    echo $color1 . "<br>";
    echo $color2 . "<br>";
    echo $color3 . "<br>";

?>

<br>
<p>But what, if you want to store the states or city names of a country in variables and this time this not just three may be hundred. It is quite hard, boring, and bad idea to store each city name in a separate variable. And here array comes into play.</p>

<br>

<h4>Types of Arrays in PHP</h4>

<ul>
        <li><strong>Indexed array</strong> — An array with a numeric key.</li>
        <li><strong>Associative array</strong> — An array where each key has its own specific value.</li>
        <li><strong>Multidimensional array</strong> — An array containing one or more arrays within itself.</li>
</ul>

<br>

<h5>Indexed Arrays</h5>

<p>An indexed or numeric array stores each array element with a numeric index. The following examples shows two ways of creating an indexed array, the easiest way is:</p>


<br>

<h5 class="example">Example</h5>
<?php
// Define an indexed array

$colors = array("Red", "Green", "Blue");


print_r($colors);


?>


<br>
<br>

<p class="notes"><strong>Note:</strong> In an indexed or numeric array, the indexes are automatically assigned and start with 0, and the values can be any data type.</p>

<br>

<h5 class="example">Example</h5>

<?php
$colors[0] = "Red";
$colors[1] = "Green";
$colors[2] = "Blue";


// Printing Array structure

print_r($colors);

?>
<br>
<br>

<h5>Associative Arrays</h5>
<p>In an associative array, the keys assigned to values can be arbitrary and user defined strings. </p>

<br>

<h5 class="example">Example</h5>

<?php

$ages = array("Peter"=> 22, "Clark"=> 32, "John"=>28);

// Printing array structure

print_r($ages);


?>

<br>
<br>

<p>The following example is equivalent to the previous example, but shows a different way of creating associative arrays:</p>

<h5 class="example">Example</h5>
<?php
$ages["Peter"] = "22";
$ages["Clark"] = "32";
$ages["John"] = "28";

// Printing array structure
print_r($ages); 
?>

<br>
<br>
<br>

<h5>Multidimensional Arrays</h5>
<p>The multidimensional array is an array in which each element can also be an array and each element in the sub-array can be an array or further contain array within itself and so on. </p>


<br>
<h5 class="example">Example</h5>

<?php

$contacts = array(

        array(
            "name" => "Ganesh",
            "email" => "ganesh.v@tpplnews",
        ),

        array(
            "name" => "Honey",
            "email" => "honey@vadla.in",
        ),

        array(
            "name" => "Yaswhin",
            "email" => "yaswhin@vadla.in"
        )


);

// Access nested value
echo "Peter Parker's Email-id is: " . $contacts[1]["email"];

?>


<br>
<br>
<br>

<h5>Viewing Array Structure and Values</h5>

<p>You can see the structure and values of any array by using one of two statements — <code>var_dump()</code> or <code>print_r()</code>. The <code>print_r()</code> statement, however, gives somewhat less information. Consider the following example:</p>

<br>
<h5 class="example">Example</h5>

<?php
// Define Array

$cities = array("London","Paris","New York");

// Display the cities array

print_r($cities);
echo "<br>";

?>

<br>
<br>
<p>This output shows the key and the value for each element in the array. To get more information, use the following statement:</p>

<h5 class="example">Example</h5>

<?php
// Define array
$cities = array("London", "Paris", "New York");
 
// Display the cities array
var_dump($cities);
?>


<p>This output shows the data type of each element, such as a string of 6 characters, in addition to the key and value.</p>


<br>

<hr>
<h4>PHP Sorting Arrays</h4>
<h5>PHP Functions For Sorting Arrays</h5>
<p>PHP comes with a number of built-in functions designed specifically for sorting array elements in different ways like alphabetically or numerically in ascending or descending order. Here we'll explore some of these functions most commonly used for sorting arrays.</p>

<ul>
   <li><code>sort()</code> and <code>rsort()</code> — For sorting indexed arrays</li>
   <li><code>asort()</code> and <code>arsort()</code> — For sorting associative arrays by value</li>
   <li><code>ksort()</code> and <code>krsort()</code> — For sorting associative arrays by key</li>
</ul>

<br>
<h5>Sorting Indexed Arrays in Ascending Order</h5>
<p>The <code>sort()</code> function is used for sorting the elements of the indexed array in ascending order (alphabetically for letters and numerically for numbers).</p>

<h5 class="example">Example</h5>


<?php
$colors = array("Red", "Green","Blue","Yellow");

sort($colors);

print_r($colors);

?>

<br>
<br>

<p>Similarly you can sort the numeric elements of the array in ascending order.</p>

<h5 class="Example">Example</h5>
<?php

//Define array

$numbers = array(1, 9, 3, 2, 6, 8, 11, 15);

// Sorting and printing arrays

sort($numbers);

print_r($numbers);



?>

<br>
<br>
<br>


<h5>Sorting Indexed Arrays in Descending Order</h5>
<p>The <code>rsort()</code> function is used for sorting the elements of the indexed array in descending order (alphabetically for letters and numerically for numbers).</p>

<h5 class="example">Example</h5>
<?php
// Define array
$colors = array("Red", "Green", "Blue", "Yellow");
 
// Sorting and printing array
rsort($colors);
print_r($colors);
?>


<br>
<br>
<br>

<h5>Sorting Associative Arrays in Ascending Order By Value</h5>
<p>The <code>asort()</code> function sorts the elements of an associative array in ascending order according to the value. It works just like <code>sort()</code>, but it preserves the association between keys and its values while sorting.</p>

<h5 class="example">Example</h5>


<?php
//Define array

$age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);

//soring array by value and print

asort($age);
print_r($age);


?>


<br>
<br>
<br>

<h5>Sorting Associative Arrays in Descending Order By Value</h5>
<p>The <code>arsort()</code> function sorts the elements of an associative array in descending order according to the value. It works just like <code>rsort()</code>, but it preserves the association between keys and its values while sorting.</p>

<h5 class="example">Example</h5>


<?php
//Define array

$age = array(
    "Peter"=>20, 
    "Harry"=>14, 
    "John"=>45, 
    "Clark"=>35
);

//soring array by value and print

arsort($age);
print_r($age);


?>



<br>
<br>
<br>

<h5>Sorting Associative Arrays in Ascending Order By Key</h5>
<p>The <code>ksort()</code> function sorts the elements of an associative array in ascending order by their keys. It preserves the association between keys and its values while sorting, same as <code>asort()</code> function.</p>

<h5 class="example">Example</h5>

<?php

//Define array

$age = array(

    "Ganesh" => 32,
    "Krishna" => 30,
    "Raju" => 45,
    "Babu" => 28,

);

//Sorting array by key and print

ksort($age);
print_r($age);


?>


<br>
<br>
<br>

<h5>Sorting Associative Arrays in Descending Order By Key</h5>
<p>The <code>krsort()</code> function sorts the elements of an associative array in descending order by their keys. It preserves the association between keys and its values while sorting, same as <code>arsort()</code> function.</p>


<h5 class="example">Example</h5>

<?php

//Define array

$age = array(

    "Ganesh" => 32,
    "Krishna" => 30,
    "Raju" => 45,
    "Babu" => 28,

);

//Sorting array by key and print

krsort($age);
print_r($age);


?>

<br>
<br>
<hr>
<h4>PHP Loops</h4>

<h5>Different Types of Loops in PHP</h5>
    <p>Loops are used to execute the same block of code again and again, until a certain condition is met. The basic idea behind a loop is to automate the repetitive tasks within a program to save the time and effort. PHP supports four different types of loops.</p>
    <ul>
       	<li><strong>while</strong> — loops through a block of code until the condition is evaluate to true. </li>
        <li><strong>do…while</strong> — the block of code executed once and then condition is evaluated. If the condition is true the statement is repeated as long as the specified condition is true.</li>
        <li><strong>for</strong> — loops through a block of code until the counter reaches a specified number.</li>
        <li><strong>foreach</strong> — loops through a block of code for each element in an array.</li>
    </ul>

<br>
<br>

<h5>PHP while Loop</h5>

<p>The <code>while</code> statement will loops through a block of code until the condition in the <code>while</code> statement evaluate to true.</p>


<h5 class="example">Syntax</h5>

<p>
    <code>while</code>(condition){ <br>
        <span class="text-secondary">// Code to be execuited</span> <br>
    }<br>
</p>



<h5 class="example">Example</h5>
<p>The example below define a loop that starts with <code>$i=1</code>. The loop will continue to run as long as <code>$i</code> is less than or equal to 3. The <code>$i</code> will increase by 1 each time the loop runs:</p>

<br>

<?php

$i = 1;
while ($i <= 3) {
    
    $i++;

    echo "The Number is " . $i . "<br>";

}
?>


<br>
<h5>PHP do…while Loop</h5>

<p>The <code>do-while</code> loop is a variant of while loop, which evaluates the condition at the end of each loop iteration. With a <code>do-while</code> loop the block of code executed once, and then the condition is evaluated, if the condition is true, the statement is repeated as long as the specified condition evaluated to is true.</p>

<h5 class="example">Syntax</h5>

<p>
    <code>do</code>{ <br>
        <span class="text-secondary">// Code to be execuited</span> <br>
    }<br>
    <code>while</code>(condition);
</p>

<h5 class="example">Example</h5>

<p>The following example define a loop that starts with <code>$i=1</code>. It will then increase <code>$i</code> with 1, and print the output. Then the condition is evaluated, and the loop will continue to run as long as <code>$i</code> is less than, or equal to 3.</p>

<br>

<?php
 $i = 1;
 do{
     $i++;
     echo "The number is " . $i . "<br>";
 }

 while ($i <=3);
?>

<br>

<h5>Difference Between while and do…while Loop</h5>
<p>The <code>while</code> loop differs from the <code>do-while</code> loop in one important way — with a <code>while</code> loop, the condition to be evaluated is tested at the beginning of each loop iteration, so if the conditional expression evaluates to false, the loop will never be executed.</p>
<p>With a <code>do-while</code> loop, on the other hand, the loop will always be executed once, even if the conditional expression is false, because the condition is evaluated at the end of the loop iteration rather than the beginning.</p>
                
<br>
<br>
<h5>PHP for Loop</h5>

<p>The <code>for</code> loop repeats a block of code until a certain condition is met. It is typically used to execute a block of code for certain number of times.</p>

<h5 class="example">Syntax</h5>

<p> <code>for</code>(initialization; condition; increment){ <br>
    <span class="text-secondary">// Code to be executed</span><br>
}<br>
</p>

<p>The parameters of <code>for</code> loop have following meanings:</p>
                <ul>
                	<li><code>initialization</code> — it is used to initialize the counter variables, and evaluated once unconditionally before the first execution of the body of the loop.</li>
                    <li><code>condition</code> — in the beginning of each iteration, condition is evaluated. If it evaluates to <code>true</code>, the loop continues and the nested statements are executed. If it evaluates to <code>false</code>, the execution of the loop ends.</li>
                    <li><code>increment</code> — it updates the loop counter with a new value. It is evaluate at the end of each iteration.</li>
                </ul>


<br>

<h5>Example</h5>
<p>The example below defines a loop that starts with <code>$i=1</code>. The loop will continued until <code>$i</code> is less than, or equal to 5. The variable  <code>$i</code> will increase by 1 each time the loop runs:</p>

<?php

for ($i=1; $i<=5; $i++) { 
        echo "The number is " . $i . "<br>";
}


?>

<br>
<br>

<h5>PHP foreach Loop</h5>
<p>The <code>foreach</code> loop is used to iterate over arrays.</p>
 
 <h5 class="example">Syntax</h5>

<p>
    <code>foreach</code>($array as $value) { <br>
        <span class="text-secondary">// Code to be executed</span><br>
    }<br>

</p>


<h5 class="example">Example</h5>

<?php
    $names = array("Ganesh", "Yashwin", "Raju");

    // Loop through names array

    foreach ($names as $namevalues) {
        echo $namevalues. "<br>";
    }

?>

<br>
<p>There is one more syntax of <code>foreach</code> loop, which is extension of the first.</p>


<h5 class="example">Syntax</h5>

<p>
    <code>foreach</code>($array <code>as</code> $key => $value) { <br>
        <span class="text-secondary">// Code to be executed</span><br>
    }<br>

</p>

<h5 class="example">Example</h5>

<?php

$employee = array(

        "Name" => "Ganesh",
        "Designation" => "Sr.Engineer",
        "Department" => "Operations",
        "Section" => "Technical",
        "Address" => "Musheerabad",
        "Cell" => 9182777833


);
foreach ($employee as $key => $employeevalues) {
    
        echo $key . " : " . $employeevalues . "<br>";

}

?>

<br>
<br>

<hr>
<h4>PHP Functions</h4>
<p>A function is a self-contained block of code that performs a specific task.</p>
<h5>PHP Built-in Functions</h5>
<p>PHP has a huge collection of internal or built-in functions that you can call directly within your PHP scripts to perform a specific task, like <code>gettype()</code>, <code>print_r()</code>,  <code>var_dump</code>, etc.</p>

<br>
<h5>PHP User-Defined Functions</h5>
                <p>In addition to the built-in functions, PHP also allows you to define your own functions. It is a way to create reusable code packages that perform specific tasks and can be kept and maintained separately form main program. Here are some advantages of using functions:</p>
                <ul>
                    <li><strong>Functions reduces the repetition of code within a program</strong> — Function allows you to extract commonly used block of code into a single component. Now you can perform the same task by calling this function wherever you want within your script without having to copy and paste the same block of code again and again.</li>
                    <li><strong>Functions makes the code much easier to maintain</strong> — Since a function created once can be used many times, so any changes made inside a function automatically implemented at all the places without touching the several files.</li>
                    <li><strong>Functions makes it easier to eliminate the errors</strong> — When the program is subdivided into functions, if any error occur you know exactly what function causing the error and where to find it. Therefore, fixing errors becomes much easier.</li>
                    <li><strong>Functions can be reused in other application</strong> — Because a function is separated from the rest of the script, it's easy to reuse the same function in other applications just by including the php file containing those functions.</li>
                </ul>


<br>

<h5>Creating and Invoking Functions</h5> <br>
<h5 class="example">Syntax</h5>

<p>
    <code>function</code> functionname( ){ <br>
     <span class="text-secondary">//Code to be executed</span>   <br>
    }<br>
</p>
<p>The declaration of a user-defined function start with the word <code>function</code>, followed by the name of the function you want to create followed by parentheses i.e. <code>()</code> and finally place your function's code between curly brackets <code>{}</code>.</p>

<h5 class="example">Example</h5>
<?php
// Define Function

function whatIsToday(){
    echo "Today is " . date('l', mktime());
}

//Calling function

whatIsToday();

?>
<br>
<br>
<p class="notes"><strong>Note:</strong> A function name must start with a letter or underscore character not with a number, optionally followed by the more letters, numbers, or underscore characters. Function names are case-insensitive.</p>


<br>


<h5>Functions with Parameters</h5>
<p>You can specify parameters when you define your function to accept input values at run time. The parameters work like placeholder variables within a function; they're replaced at run time by the values (known as argument) provided to the function at the time of invocation. </p>


<h5 class="example">Syntax</h5>

<p>
    <code>function</code> myFunc($oneParameter, $anotherParameter ){ <br>
     <span class="text-secondary">//Code to be executed</span>   <br>
    }<br>
</p>

<p>You can define as many parameters as you like. However for each parameter you specify, a corresponding argument needs to be passed to the function when it is called.</p>

<h5 class="example">Example</h5>


<p>The <code>getSum()</code> function in following example takes two integer values as arguments, simply add them together and then display the result in the browser.</p>

<?php

//Define function

function getSum($num1, $num2){
    $sum = $num1 + $num2;
    echo "Sum of the two numbers $num1 and $num2 is : <strong>$sum</strong>";
}

// Calling function

getSum(32, 43);
?>


<br>
<br>

<h5>Functions with Optional Parameters and Default Values</h5>
<p>You can also create functions with optional parameters — just insert the parameter name, followed by an equals <code>(=)</code> sign, followed by a default value, like this.</p>

<br>

<h5 class="example">Example</h5>

<?php

// Define function

function customFont($font, $size=1.5){
    echo "<p style=\"font-family:$font; font-size:{$size}em;\">Hello, Php</p>";
}

//Calling function

customFont("Arial", 2);
customFont("Times", 3);
customFont("Courier", 4);

?>

<p>As you can see the third call to <code>customFont()</code> doesn't include the second argument. This causes PHP engine to use the default value for the <code>$size</code> parameter which is 1.5.</p>

<br>

<h5>Returning Values from a Function</h5>
<p>A function can return a value back to the script that called the function using the return statement. The value may be of any type, including arrays and objects.</p>


<?php
// Defining function
function getSum2($num1, $num2){
    $total = $num1 + $num2;
    return $total;
}
 
// Printing returned value
echo getSum2(5, 10); // Outputs: 15
?>

<br>

<p>A function can not return multiple values. However, you can obtain similar results by returning an array, as demonstrated in the following example.</p>

<?php

//Defining function

function divideNumbers($dividend, $divisor){
        $quotient = $dividend / $divisor;
        $array = array($dividend, $divisor, $quotient);
        return $array;
    }

// Assign variables as if they were an array

list($dividend, $divisor, $quotient) = divideNumbers(10, 2);

echo $dividend . "<br>"; 
echo $divisor . "<br>";
echo $quotient . "<br>";

?>

<br>
<h5>Passing Arguments to a Function by Reference</h5>
<p>In PHP there are two ways you can pass arguments to a function: by value and by reference. By default, function arguments are passed by value so that if the value of the argument within the function is changed, it does not get affected outside of the function. However, to allow a function to modify its arguments, they must be passed by reference.</p>

<p>Passing an argument by reference is done by prepending an ampersand (<code>&</code>) to the argument name in the function definition, as shown in the example below:</p>

<h5 class="example">Example</h5>

<?php
/* Defining a function that multiply a number
by itself and return the new value */
function selfMultiply(&$number){
    $number *= $number;
    return $number;
}
 
$mynum = 5;
echo $mynum . "<br>"; // Outputs: 5
 
selfMultiply($mynum);
echo $mynum; // Outputs: 25
?>

<br>
<br>

<h5>Understanding the Variable Scope</h5>

<p>However, you can declare the variables anywhere in a PHP script. But, the location of the declaration determines the extent of a variable's visibility within the PHP program i.e. where the variable can be used or accessed. This accessibility is known as variable scope.</p>


<p>By default, variables declared within a function are local and they cannot be viewed or manipulated from outside of that function, as demonstrated in the example below:</p>

<h5 class="example">Example</h5>
<?php
//Defining function

function test(){
     $greet = "Hello, Wolrd";
     echo "inside function variable : " . $greet;
}

test();

echo "Outside function variable calling :" . $greet;

?>

<br>
<br>
<br>

<p>Similarly, if you try to access or import an outside variable inside the function, you'll get an undefined variable error, as shown in the following example:</p>


<h5 class="example">Example</h5>

<?php

$greetings = "Hello, Php";

// Defining function

function testG(){

echo $greetings;

}

testG(); // Generate undefined variable error

echo "Outside Variable" . $greetings; // Outputs : Hello, Php


?>

<br>
<br>

<p>As you can see in the above examples the variable declared inside the function is not accessible from outside, likewise the variable declared outside of the function is not accessible inside of the function. This separation reduces the chances of variables within a function getting affected by the variables in the main program.</p>


<p class="tip"><strong>Tip:</strong> It is possible to reuse the same name for a variable in different functions, since local variables are only recognized by the function in which they are declared.</p>


<br>
<br>

<h5>The global Keyword</h5>
<p>There may be a situation when you need to import a variable from the main program into a function, or vice versa. In such cases, you can use the <code>global</code> keyword before the variables inside a function. This keyword turns the variable into a global variable, making it visible or accessible both inside and outside the function, as show in the example below:</p>


<br>

<h5 class="example">Example</h5>
<?php

$greeting = "hello, Ganesh";

function Hello(){
    global $greeting; // Making Global variable adding 'global' keyword
    echo $greeting;
}

Hello();
echo "<br>";
echo $greeting; 
echo "<br>";

// Assign a new value to variable

$greeting = "Have a nice day";

Hello();
echo "<br>";
echo $greeting;


?>

<br>
<br>

<h5>Creating Recursive Functions</h5>
<p>A recursive function is a function that calls itself again and again until a condition is satisfied. Recursive functions are often used to solve complex mathematical calculations, or to process deeply nested structures e.g., printing all the elements of a deeply nested array.</p>

<h5 class="example">Example</h5>

<?php
// Defining recursive function
function printValues($arr) {
    global $count;
    global $items;
    
    // Check input is an array
    if(!is_array($arr)){
        die("ERROR: Input is not an array");
    }
    
    /*
    Loop through array, if value is itself an array recursively call the function,
    else add the value found to the output items array, 
    and increment counter by 1 for each value found
    */
    foreach($arr as $a){
        if(is_array($a)){
            printValues($a);
        } else{
            $items[] = $a;
            $count++;
        }
    }
    
    // Return total count and values found in array
    return array('total' => $count, 'values' => $items);
}
 
// Define nested array
$species = array(
    "birds" => array(
        "Eagle",
        "Parrot",
        "Swan"
    ),


    "mammals" => array(
        "Human",

        "cat" => array(
            "Lion",
            "Tiger",
            "Jaguar"
        ),

        "Elephant",
        "Monkey"
    ),


    "reptiles" => array(

        "snake" => array(

            "Cobra" => array(
                "King Cobra",
                "Egyptian cobra"
            ),

            "Viper",
            "Anaconda"

        ),

        "Crocodile",

        "Dinosaur" => array(
            "T-rex",
            "Alamosaurus"
        )
    )
);
 
// Count and print values in nested array
$result = printValues($species);
echo $result['total'] . ' value(s) found: '. "<br>" . "<br>";
echo implode('<br>', $result['values']);
?>

<br>
<br>

<p class="notes"><strong>Note:</strong> Be careful while creating recursive functions, because if code is written improperly it may result in an infinite loop of function calling.</p>


<br>

<hr>

<br>

<h4>PHP Math Operations</h4>
<br>
<h5>Performing Math Operations</h5>
<p>PHP has several built-in functions that help you perform anything from simple additions or subtraction to advanced calculations.</p>

<h5 class="example">Example</h5>

<?php
echo 7 + 3 . "<br>"; // 0utputs: 10
echo 7 - 2 . "<br>"; // 0utputs: 5
echo 7 * 2 . "<br>"; // 0utputs: 14
echo 7 / 2 . "<br>"; // 0utputs: 3.5
echo 7 % 2 . "<br>"; // 0utputs: 1
?>

<br>

<p>Every math operation has a certain precedence level; generally multiplication and division are performed before addition and subtraction. However, parentheses can alter this precedence; expressions enclosed within parentheses are always evaluated first, regardless of the operation's precedence level, as demonstrated in the following example:</p>

<h5 class="example">Example</h5>
<?php
echo 5 + 4 * 10 . "<br>";         // 0utputs: 45
echo (5 + 4) * 10 . "<br>";       // 0utputs: 90
echo 5 + 4 * 10 / 2 . "<br>";     // 0utputs: 25
echo 8 * 10 / 4 - 2 . "<br>";     // 0utputs: 18
echo 8 * 10 / (4 - 2) . "<br>";   // 0utputs: 40
echo 8 + 10 / 4 - 2 . "<br>";     // 0utputs: 8.5
echo (8 + 10) / (4 - 2) . "<br>"; // 0utputs: 9
?>

<br>

<h5>Find the Absolute Value of a Number</h5>

<p>In the following section we're going to look at some built-in PHP functions that are most frequently used in performing mathematical operations.</p>

<p>The absolute value of an <code>integer</code> or a <code>float</code> can be found with the <code>abs()</code> function, as demonstrated in the following example:</p>

<h5 class="example">Example</h5>

<?php

echo abs(5) . "<br>";    // 0utputs: 5 (integer)
echo abs(-5) . "<br>";   // 0utputs: 5 (integer)
echo abs(4.2) . "<br>";  // 0utputs: 4.2 (double/float)
echo abs(-4.2);             // 0utputs: 4.2 (double/float)


?>

<p>As you can see if the given number is negative, the valued returned is positive. But, if the number is positive, this function simply returns the number.</p>


<h5>Round a Fractional Value Up or Down</h5>

<p>The <code>ceil()</code> function can be used to round a fractional value up to the next highest integer value, whereas the <code>floor()</code> function can be used to round a fractional value down to the next lowest integer value.</p>

<h5 class="Example">Example</h5>

<?php
//Round fractions up
echo ceil(4.2) . "<br>"; // Outputs : 5
echo ceil(9.99) . "<br>";   // 0utputs: 10
echo ceil(-5.18) . "<br><br>";  // 0utputs: -5
 
// Round fractions down
echo floor(4.2) . "<br>";    // 0utputs: 4
echo floor(9.99) . "<br>";   // 0utputs: 9
echo floor(-5.18) . "<br>";  // 0utputs: -6


?>

<br>

<h5>Find the Square Root of a Number</h5>

<p>You can use the <code>sqrt()</code> function to find the square root of a positive number. This function returns a special value <code>NAN</code> for negative numbers. Here's an example:</p>

<h5 class="example">Example</h5>

<?php
    echo sqrt(9) . "<br>"; //Outputs : 3
    echo sqrt(25) . "<br>";  // 0utputs: 5
    echo sqrt(10) . "<br>";  // 0utputs: 3.1622776601684
    echo sqrt(-16) . "<br>"; // 0utputs: NAN


?>

<br>

<h5>Generate a Random Number</h5>
<p>The <code>rand()</code> function can be used to generate a random number. You can optionally specify a range by passing the min, max arguments</p>

<h5 class="example">Example</h5>

<?php 

//Generate some random numbers

echo rand() . "<br>";
echo rand() . "<br><br>";

// Generate some random numbers between 1 and 10 (inclusive)
echo rand(1, 10) . "<br>";
echo rand(1, 10) . "<br>";

?>

<br>

<p>If <code>rand()</code> function is called without the optional <code><b>min</b></code>, <code><b>max</b></code> arguments, it returns a pseudo-random number between <code>0</code> and <code>getrandmax()</code>. The <code>getrandmax()</code> function show the largest possible random value, which is only 32767 on Windows platform. So, if you require a range larger than 32767, you may simply specify the <code><b>min</b></code> and <code><b>max</b></code> arguments.</p>

<br>
<h5>Convert Decimal Numbers to Binary and Vice Versa</h5>
<p>The <code>decbin()</code> function is used to convert a decimal number into binary number. Whereas its counterpart the <code>bindec()</code> function converts a number from binary to decimal.</p>

<h5 class="example">Example</h5>

<?php

//Convert Decimal to Binary

echo decbin(2) . "<br>"; // Outputs : 10
echo decbin(12) . "<br>";   // 0utputs: 1100  
echo decbin(100) . "<br><br>";  // 0utputs: 1100100
 
// Convert Binary to Decimal
echo bindec(10) . "<br>";       // 0utputs: 2 
echo bindec(1100) . "<br>";     // 0utputs: 12  
echo bindec(1100100) . "<br>";  // 0utputs: 100
?>

<br>

<h5>Convert Decimal Numbers to Hexadecimal and Vice Versa</h5>
<p>The <code>dechex()</code> function is used to convert a decimal number into hexadecimal representation. Whereas, the <code>hexdec()</code> function is used to converts a hexadecimal string to a decimal number.</p>

<h5 class="example">Example</h5>

<?php
// Convert decimal to hexadecimal

echo dechex(255) . "<br>"; // Outputs : ff
echo dechex(196) . "<br>";  // 0utputs: c4
echo dechex(450021) . "<br><br>";    // 0utputs: 0
 
// Convert hexadecimal to decimal
echo hexdec('ff') . "<br>";  // 0utputs: 255
echo hexdec('c4') . "<br>";  // 0utputs: 196
echo hexdec(0) . "<br>";     // 0utputs: 0

?>

<br>

<h5>Convert Decimal Numbers to Octal and Vice Versa</h5>

<p>The <code>decoct()</code> function is used to convert a decimal number into octal representation. Whereas, the <code>octdec()</code> function is used to converts a octal number to a decimal number.</p>

<h5 class="example">Example</h5>

<?php
// Convert decimal to octal 
echo decoct(12) . "<br>";   // 0utputs: 14
echo decoct(256) . "<br>";  // 0utputs: 400
echo decoct(77) . "<br>";   // 0utputs: 115
 
// Convert octal to decimal
echo octdec('14') . "<br>";   // 0utputs: 12
echo octdec('400') . "<br>";  // 0utputs: 256
echo octdec('105') . "<br>";  // 0utputs: 69
?>

<br>

<h5>Convert a Number from One Base System to Another</h5>
<p>The <code>base_convert()</code> function can be used to convert a number from one base system to other. For example, you can convert decimal <i>(base 10)</i> to binary <i>(base 2)</i>, hexadecimal <i>(base 16)</i> to octal <i>(base 8)</i>, octal to hexadecimal, hexadecimal to decimal, and so on.</p>

<h5 class="example">Syntax</h5>
<p><code>base_convert</code>(number, frombase, tobase);</p>
<p>Here, the number can be either an integer or a string representing an integer. Both frombase and tobase have to be between 2 and 36, inclusive. Digits in numbers with a base higher than 10 will be represented with the letters a-z, where a means 10, b means 11 and z means 35. Here's a simple example to show how this function works:</p>

<h5 class="example">Example</h5>

<?php
// Convert decimal to binary
echo base_convert('12', 10, 2) . "<br>";  // 0utputs: 1100
// Convert binary to decimal
echo base_convert('1100', 2, 10) . "<br>";  // 0utputs: 12
 
// Convert decimal to hexadecimal
echo base_convert('10889592', 10, 16) . "<br>";  // 0utputs: a62978
// Convert hexadecimal to decimal
echo base_convert('a62978', 16, 10) . "<br>";  // 0utputs: 10889592
 
// Convert decimal to octal
echo base_convert('82', 10, 8) . "<br>";  // 0utputs: 122
// Convert octal to decimal
echo base_convert('122', 8, 10) . "<br>";  // 0utputs: 82
 
// Convert hexadecimal to octal
echo base_convert('c2c6a8', 16, 8) . "<br>";  // 0utputs: 60543250
// Convert octal to hexadecimal
echo base_convert('60543250', 8, 16) . "<br>";  // 0utputs: c2c6a8
 
// Convert octal to binary
echo base_convert('42', 8, 2) . "<br>";  // 0utputs: 100010
// Convert binary to octal
echo base_convert('100010', 2, 8) . "<br>";  // 0utputs: 42
 
// Convert hexadecimal to binary
echo base_convert('abc', 16, 2) . "<br>";  // 0utputs: 101010111100
// Convert binary to hexadecimal
echo base_convert('101010111100', 2, 16);  // 0utputs: abc
?>

<br>
<br>

<p class="notes"><strong>Note:</strong> The <code>base_convert()</code> function will always return a string value. If the returned value is in base 10 the resulting string can be used as a numeric string in calculations and PHP will convert it to a number when the calculation is performed.
</p>

<br>


<hr>

<h4>PHP GET and POST</h4>

<h5>Methods of Sending Information to Server</h5>
<p>A web browser communicates with the server typically using one of the two HTTP (Hypertext Transfer Protocol) methods —  <code>GET</code> and <code>POST</code>. Both methods pass the information differently and have different advantages and disadvantages</p>


<br>

<h5>The GET Method</h5>
<p>In GET method the data is sent as URL parameters that are usually strings of name and value pairs separated by ampersands (<code>&</code>). In general, a URL with GET data will look like this:</p>

<p>http://www.example.com/action.php?name=john&age=24</p>
<p>The bold parts in the URL are the GET parameters and the italic parts are the value of those parameters. More than one <code>parameter=value</code> can be embedded in the URL by concatenating with ampersands (<code>&</code>). One can only send simple text data via GET method.</p>

<h5>Advantages and Disadvantages of Using the GET Method</h5>

<ul>
                	<li>Since the data sent by the GET method are displayed in the URL, it is possible to bookmark the page with specific query string values.</li>
                    <li>The GET method is not suitable for passing sensitive information such as the username and password, because these are fully visible in the URL query string as well as potentially stored in the client browser's memory as a visited page.</li>
                    <li>Because the GET method assigns data to a server environment variable, the length of the URL is limited. So, there is a limitation for the total data to be sent.</li>
                </ul>


<p>PHP provides the superglobal variable <code>$_GET</code> to access all the information sent either through the URL or submitted through an HTML form using the <code>method="get"</code>.</p>

<h5 class="example">Example of PHP Get method</h5>

<?php
    if (isset($_GET["name"])) {
        echo "<p>Hi, " . $_GET["name"] . "</p>";
    }

?>

<form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-inline">

        <label for="inputName" class="mr-sm-2">Name:</label>
        <input type="text" name="name" id="inputname" class="form-control mr-sm-2">
        <input type="submit" value="Submit" class="btn btn-primary">

</form>

<br>
<br>

<h5>The POST Method</h5>
<p>In <code>POST</code> method the data is sent to the server as a package in a separate communication with the processing script. Data sent through <code>POST</code> method will not visible in the URL.</p>


<ul>
        <li>It is more secure than GET because user-entered information is never visible in the URL query string or in the server logs.</li>
        <li>There is a much larger limit on the amount of data that can be passed and one can send text data as well as binary data (uploading a file) using POST.</li>
        <li>Since the data sent by the POST method is not visible in the URL, so it is not possible to bookmark the page with specific query.</li>

</ul>

<p>Like <code>$_GET</code>, PHP provide another superglobal variable <code>$_POST</code> to access all the information sent via post method or submitted through an HTML form using the method="post".</p>



<h5>Example of PHP POST method</h5>

<?php
if(isset($_POST["name"])){
    echo "<p>Hi, " . $_POST["name"] . "</p>";
}
?>

<!-- Form -->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-inline">

<label for="inputName2" class="mr-sm-2">Name:</label>
<input type="text" name="name" id="inputName2" class="form-control mr-sm-2">
<button type="submit" class="btn btn-warning">Submit</button>


</form>


<br>
<br>

<h5>The $_REQUEST Variable</h5>
<p>PHP provides another superglobal variable <code>$_REQUEST</code> that contains the values of both the <code>$_GET</code> and <code>$_POST</code> variables as well as the values of the <code>$_COOKIE</code> superglobal variable.</p>

<h5 class="example">Example of PHP $_REQUEST variable</h5>

<?php
if(isset($_REQUEST["name"])){
    echo "<p>Hi, " . $_REQUEST["name"] . "</p>";
}
?>

<!-- Form -->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-inline">

<label for="inputName3" class="mr-sm-2">Name:</label>
<input type="text" name="name" id="inputName3" class="form-control mr-sm-2">
<button type="submit" class="btn btn-info">Submit</button>


</form>
<br>
<br>
<p class="notes"> <strong>Note:</strong> The superglobal variables <code>$_GET</code>, <code>$_POST</code> and <code>$_REQUEST</code> are built-in variables that are always available in all scopes throughout a script.</p>

<br>
<br>
<hr>
<h4>PHP Date and Time</h4> <br>
<h5>The PHP Date() Function</h5>
<p>The PHP <code>date()</code> function convert a timestamp to a more readable date and time.</p>

<p>The computer stores dates and times in a format called UNIX Timestamp, which measures time as a number of seconds since the beginning of the Unix epoch (midnight Greenwich Mean Time on January 1, 1970 i.e. January 1, 1970 00:00:00 GMT ).</p>

<p>Since this is an impractical format for humans to read, PHP converts a timestamp to a format that is readable to humans and dates from your notation into a timestamp the computer understands. The syntax of the PHP <code>date()</code> function can be given with.</p>


<p><code>date</code>(<i>format, timestamp</i>)</p>

<p>The <i>format</i> parameter in the <code>date()</code> function is required which specifies the format of returned date and time. However the timestamp is an optional parameter, if not included then current date and time will be used. </p>

<h5 class="example">Example</h5>
<?php 
//Return current date from the remote server

$today = date("d/m/y");

echo $today;

?>

<br>
<br>


<h5>Formatting the Dates and Times with PHP</h5>
<p>The format parameter of the <code>date()</code> function is in fact a string that can contain multiple characters allowing you to generate a date string containing various components of the date and time, like day of the week, AM or PM, etc. Here are some the date-related formatting characters that are commonly used in format string:</p>
                <ul>
                	<li>d - Represent day of the month; two digits with leading zeros (01 or 31)</li>
                    <li>D - Represent day of the week in text as an abbreviation (Mon to Sun)</li>
                    <li>m - Represent month in numbers with leading zeros (01 or 12)</li>
                    <li>M - Represent month in text, abbreviated (Jan to Dec)</li>
                    <li>y - Represent year in two digits (08 or 14)</li>
                    <li>Y - Represent year in four digits (2008 or 2014)</li>
                </ul>


<br>
<h5 class="example">Examples</h5>

<?php 
echo date("d/m/y"). "<br>";
echo date("D d M Y"). "<br>";
echo date("d-m-Y"). "<br>";


?>

<br>

<h5>The PHP time() Function</h5>
<p>The <code>time()</code> function is used to get the current time as a Unix timestamp (the number of seconds since the beginning of the Unix epoch: January 1 1970 00:00:00 GMT).</p>

<h5 class="example">Example</h5>

<?php 

$timestamp = time();

echo ($timestamp);

?>
<br>
<br>
<p>We can convert this timestamp to a human readable date through passing it to the previously introduce <code>date()</code> function.</p>


<h5 class="example">Example</h5>

<?php
$timestamp = time();
echo(date("F d, Y h:i:s", $timestamp));
?>

<br>
<br>

<h5>The PHP mktime() Function</h5>
<p>The <code>mktime()</code> function is used to create the timestamp based on a specific date and time. If no date and time is provided, the timestamp for the current date and time is returned.</p>

<h5 class="example">Syntax</h5>
<p>
    <code>mktime</code> (<i>hour, minute, second, month, day, year</i>);
</p>


<h5 class="example">Example</h5>
<?php

// Create the timestamp for a particular date

echo mktime(15, 20, 12, 5, 10, 2018);

?>

<br>
<br>


<p>The <code>mktime()</code> function can be used to find the weekday name corresponding to a particular date. To do this, simply use the 'l' (lowercase 'L') character with your timestamp, as in the following example, which displays the day that falls on April 1, 2014:</p>

<h5 class="example">Example</h5>

<?php

//Get the weekday name of a particular date

echo date('l', mktime(0, 0, 0, 1, 4, 2014));

?>

<br>
<br>
<br>

<p>The <code>mktime()</code> function can also be used to find a particular date in future after a specific time period. As in the following example, which displays the date which falls on after 30 month from the current date?</p>


<h5 class="example">Example</h5>


<?php 
$futuredate = mktime(0, 0, 0, date("m")+30, date("d"), date("Y"));
echo date("d/m/Y", $futuredate);
?>
<br>
<a href="date_time_ref.html" target="_blank">Complete Date & Time Reference</a>

<br>
<br>
<br>

<hr>

<h4>PHP Include and Require Files</h4> <br>
<h5>Including a PHP File into Another PHP File</h5>
<p>The <code>include()</code> and <code>require()</code> statement allow you to include the code contained in a PHP file within another PHP file. Including a file produces the same result as copying the script from the file specified and pasted into the location where it is called.</p>

<p>You can save a lot of time and work through including files — Just store a block of code in a separate file and include it wherever you want using the <code>include()</code> and <code>require()</code> statements instead of typing the entire block of code multiple times. A typical example is including the header, footer and menu file within all the pages of a website.</p>

<p>The basic syntax of the <code>include()</code> and <code>require()</code> statement can be given with:</p>


<p>include("<code>path/to/filename</code>"); -Or- include "<code> path/to/filename</code>"; <br>
require("<code>path/to/filename</code>"); -Or- require "<code>path/to/filename</code>";	
</p>

<br>

<p class="tip"><strong>Tip:</strong> Like the print and echo statements, you can omit the parentheses while using the include and require statements as demonstrated above. </p>
<p>The following example will show you how to include the common header, footer and menu codes which are stored in separate <code>'header.php'</code>, <code>'footer.php'</code> and <code>'menu.php'</code> files respectively, within all the pages of your website. Using this technique you can update all pages of the website at once by making the changes to just one file, this saves a lot of repetitive work.</p>

<br>

<?php include "header.html"; ?>
<?php include "nav.html"; ?>
<h5>Welcome to Our Website!</h5>
    <p>Here you will find lots of useful information.</p>

<?php include "footer.html" ?>

<br>
<br>

<h5>Difference Between include and require Statements</h5>
<p>You might be thinking if we can include files using the <code>include()</code> statement then why we need <code>require()</code>. Typically the <code>require()</code> statement operates like <code>include()</code>.</p>

<p>The only difference is — the <code>include()</code> statement will only generate a PHP warning but allow script execution to continue if the file to be included can't be found, whereas the <code>require()</code> statement will generate a fatal error and stops the script execution.</p>

<h5 class="example">Example</h5>

<?php require "nav.html"; ?>

<p>This is require function</p>

<?php require "footer.html"; ?>

<br>
<br>

<p class="tip"><strong>Tip:</strong> It is recommended to use the <code>require()</code> statement if you're including the library files or files containing the functions and configuration variables that are essential for running your application, such as database configuration file.</p>

<br>

<h5>The include_once and require_once Statements</h5>
<p>If you accidentally include the same file (typically functions or classes files) more than one time within your code using the <code>include</code> or <code>require</code> statements, it may cause conflicts. To prevent this situation, PHP provides <code>include_once</code> and <code>require_once</code> statements. These statements behave in the same way as <code>include</code> and <code>require</code> statements with one exception.</p>
				<p>The <code>include_once</code> and <code>require_once</code> statements will only include the file once even if asked to include it a second time i.e. if the specified file has already been included in a previous statement, the file is not included again. To better understand how it works, let's check out an example. Suppose we've a 'my_functions.php' file with the following code:</p>


<br>

<?php 
//Include file

require "functions/my_functions.php";

//Calling function

multiplySelf(8);
echo "<br>";

// Including file once again

//require "functions/my_functions.php";

//Calling function

//multiplySelf(7);


?>


<br>

<p>When you run the above script, you will see the error message something like this: "Fatal error: Cannot redeclare multiplySelf()". This occurs because the 'my_functions.php' included twice, this means the function <code>multiplySelf()</code> is defined twice, which caused PHP to stop script execution and generate fatal error. Now rewrite the above example with require_once.</p>


<h5 class="example">Example</h5>
<?php
// Including file
require_once "functions/my_functions.php";
// Calling the function
multiplySelf(2); // Output: 4
echo "<br>";
 
// Including file once again
require_once "functions/my_functions.php";
// Calling the function
multiplySelf(5); // Output: 25
?>

<p>As you can see, by using <code>require_once</code> instead of <code>require</code>, the script works as we expected.</p>



<br>
<br>


<hr>
<h4>PHP File System</h4>
<h5>Working with Files in PHP</h5>
<p>Since PHP is a server side programming language, it allows you to work with files and directories stored on the web server. In this tutorial you will learn how to create, access, and manipulate files on your web server using the PHP file system functions.</p>

<br>

<h5>Opening a File with PHP fopen() Function</h5>

<p>To work with a file you first need to open the file. The PHP <code>fopen()</code> function is used to open a file. The basic syntax of this function can be given with:</p>

<h5 class="example">Syntax</h5>
<p><code>fopen</code>(<i>filename, mode</i>)</p>

<p>The first parameter passed to <code>fopen()</code> specifies the name of the file you want to open, and the second parameter specifies in which mode the file should be opened. For example:</p>

<br>
<h5 class="example">Example</h5>


<?php 
$handle = fopen("data.txt", "r") or die (" Error : Cannont open the file");

if ($handle) {
 echo "File opened Successfully";
 // Closing the file handle
 fclose($handle);
}

?>

<br>

<p>The file may be opened in one of the following modes:</p>

<br>
<div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            	<th style="width: 50px;">Modes</th>
                            	<th>What it does</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>r</code></td>
                                <td>Open the file for reading only.</td>
                            </tr>
                            <tr>
                                <td><code>r+</code></td>
                                <td>Open the file for reading and writing.</td>
                            </tr>
                            <tr>
                                <td><code>w</code></td>
                                <td>Open the file for writing only and clears the contents of file. If the file does not exist, PHP will attempt to create it.</td>
                            </tr>
                            <tr>
                                <td><code>w+</code></td>
                                <td>Open the file for reading and writing and clears the contents of file. If the file does not exist, PHP will attempt to create it.</td>
                            </tr>
                            <tr>
                                <td><code>a</code></td>
                                <td>Append. Opens the file for writing only. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.</td>
                            </tr>
                            <tr>
                                <td><code>a+</code></td>
                                <td>Read/Append. Opens the file for reading and writing. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.</td>
                            </tr>
                            <tr>
                                <td><code>x</code></td>
                                <td>Open the file for writing only. Return <code>FALSE</code> and generates an error if the file already exists. If the file does not exist, PHP will attempt to create it.</td>
                            </tr>
                            <tr>
                                <td><code>x+</code></td>
                                <td>Open the file for reading and writing; otherwise it has the same behavior as 'x'.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


<p>If you try to open a file that doesn't exist, PHP will generate a warning message. So, to avoid these error messages you should always implement a simple check whether a file or directory exists or not before trying to access it, with the PHP <code>file_exists()</code> function.</p>

<br>

<h5 class="example">Example</h5>

<?php
$file = "dat.txt";
// Check the existence of file

if (file_exists($file)) {
// Attempt to open the file
$handle = fopen($file, "r");
 echo "File Opened Successfully";
} else{
    echo "ERROR : File does not exist.";
}

?>
<br>
<br>
<p class="tip"><strong>Tip:</strong> Operations on files and directories are prone to errors. So it's a good practice to implement some form of error checking so that if an error occurs your script will handle the error gracefully. See the tutorial on PHP error handling.
</p>

<h5>Closing a File with PHP fclose() Function</h5>
<p>Once you've finished working with a file, it needs to be closed. The <code>fclose()</code> function is used to close the file, as shown in the following example:</p>

<h5 class="example">Example</h5>

<?php
$file = "data.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Open the file for reading
    $handle = fopen($file, "r") or die("ERROR: Cannot open the file.");
    
     echo "File Opened Success<br>";

    /* Some code to be executed */
        
    // Closing the file handle
    fclose($handle);

    echo "File Closed Success";

} else{
    echo "ERROR: File does not exist.";
}
?>

<br>
<br>
<p class="notes"><strong>Note:</strong> Although PHP automatically closes all open files when script terminates, but it's a good practice to close a file after performing all the operations.</p>

<br>
<h5>Reading Fixed Number of Characters</h5>

<p>The <code>fread()</code> function can be used to read a specified number of characters from a file. The basic syntax of this function can be given with.</p>

<p><code>fread</code>(<i class="text-secondary">file handle, length in bytes</i>)</p>
<p>This function takes two parameter — A file handle and the number of bytes to read. The following example reads 20 bytes form the "data.txt" file including spaces. Let's suppose the file "data.txt" contains a paragraph of text "The quick brown fox jumps over the lazy dog."</p>

<h5 class="example">Example</h5>

<?php 
        $file = "data.txt";

        //Check the existence of file

        if (file_exists($file)) {
                //Open the file for reading

                $handle = fopen($file, "r") or die("ERROR : Cannot open the file");

            // Read fixed number of bytes from the file

            $content = fread($handle, "100");

            //Closing the file handle

            fclose($handle);

            //Display the file content

            echo $content;


        } else {
            echo "Error : file does not exists.";
        }

?>

<br>
<br>
<br>

<h5>Reading the Entire Contents of a File</h5>
<p>The <code>fread()</code> function can be used in conjugation with the <code>filesize()</code> function to read the entire file at once. The <code>filesize()</code> function returns the size of the file in bytes.</p>

<h5 class="example">Example</h5>

<?php 
        $file = "data.txt";

        //Check the existence of file

        if (file_exists($file)) {
                //Open the file for reading

                $handle = fopen($file, "r") or die("ERROR : Cannot open the file");

            // Read fixed number of bytes from the file

            $content = fread($handle, filesize($file));

            //Closing the file handle

            fclose($handle);

            //Display the file content

            echo $content;


        } else {
            echo "Error : file does not exists.";


        }

?>


<br>
<br>

<p>The easiest way to read the entire contents of a file in PHP is with the <code>readfile()</code> function. This function allows you to read the contents of a file without needing to open it. The following example will generate the same output as above example:</p>

<h5 class="example">Example</h5>


<?php 
$file = "data.txt";

//Check the file exists
if (file_exists($file)) {
    //Reads and outputs the entire file

    readfile($file) or die("ERROR: Cannot open the file");

} else {
    # code...

    echo "ERROR: File does not exists";
}


?>
<br>
<br>

<p>Another way to read the whole contents of a file without needing to open it is with the <code>file_get_contents()</code> function. This function accepts the name and path to a file, and reads the entire file into a string variable. Here's an example:</p>

<h5 class="example">Example</h5>


<?php 

$file = "data.txt";

if (file_exists($file)) {

$content = file_get_contents($file) or die ("ERROR : Cannot open the file.");

echo $content;


} else{
    echo "ERROR: File does not exists.";
}


?>


<br>
<br>

<p>One more method of reading the whole data form a file is the PHP's <code>file()</code> function. It does a similar job to <code>file_get_contents()</code> function, but it returns the file contents as an array of lines, rather than a single string. Each element of the returned array corresponds to a line in the file.</p>

<h5 class="example">Example</h5>


<?php
$file = "data.txt";

if (file_exists($file)) {

    // Reading the entire file into an array

    $arr = file($file) or die("ERROR : Cannot open the file.");

        foreach($arr as $line){
            echo $line;
        }


} else {
    echo "ERROR: File not found.";
}


?>


<br>
<br>

<h5>Writing the Files Using PHP fwrite() Function</h5>

<p>Similarly, you can write data to a file or append to an existing file using the PHP <code>fwrite()</code> function. The basic syntax of this function can be given with:</p>

<p><code>fwrite</code>(<i class="text-secondary">file handle, string</i>)</p>

<p>The <code>fwrite()</code> function takes two parameter — A file handle and the string of data that is to be written, as demonstrated in the following example:</p>

<h5 class="example">Example</h5>

<?php 
$file = "note.txt";

// String of data to be written
$data = "This is Example of writing data";

//Open the file for writing
$handle = fopen($data, "w") or die("ERROR: file cannot be open");

//Writen data to the file
fwrite($handle, $data) or die("ERROR: Cannot write the file.");


//Closing the connection
fclose($handle);

echo "Data written to the file successfully.";

?>

<br>
<br>
<p>In the above example, if the "note.txt" file doesn't exist PHP will automatically create it and write the data. But, if the "note.txt" file already exist, PHP will erase the contents of this file, if it has any, before writing the new data, however if you just want to append the file and preserve existing contents just use the mode <code>a</code> instead of <code>w</code> in the above example.</p>

<p>An alternative way is using the <code>file_put_contents()</code> function. It is counterpart of <code>file_get_contents()</code> function and provides an easy method of writing the data to a file without needing to open it. This function accepts the name and path to a file together with the data to be written to the file. Here's an example:</p>

<h5 class="example">Example</h5>

<?php 

$file = "note.txt";

//String of data to be written

$data = "The quick brown fox jumps over the lazy dog.";


//Write data to the file

file_put_contents($file, $data) or die("ERROR : Cannont write the file.");

echo "Data written to the file successfully."

?>


<br>
<br>

<p>If the file specified in the <code>file_put_contents()</code> function already exists, PHP will overwrite it by default. If you would like to preserve the file's contents you can pass the special <code>FILE_APPEND</code> flag as a third parameter to the <code>file_put_contents()</code> function. It will simply append the new data to the file instead of overwitting it. Here's an example:</p>

<br>

<h5 class="example">Example</h5>

<?php
$file = "note.txt";
    
// String of data to be written
$data = "The quick brown fox jumps over the lazyy.";
    
// Write data to the file
file_put_contents($file, $data, FILE_APPEND) or die("ERROR: Cannot write the file.");
    
echo "Data written to the file successfully.";
?>

<br>
<br>

<h5>Renaming Files with PHP rename() Function</h5>

<p>You can rename a file or directory using the PHP's <code>rename()</code> function, like this:</p>

<h5 class="example">Example</h5>

<!-- <?php
$file = "note.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Attempt to rename the file
    if(rename($file, "newfile.txt")){
        echo "File renamed successfully.";
    } else{
        echo "ERROR: File cannot be renamed.";
    }
} else{
    echo "ERROR: File does not exist.";
}
?> -->

<br>
<br>


<h5>Removing Files with PHP unlink() Function</h5>
<p>You can delete files or directories using the PHP's <code>unlink()</code> function, like this:</p>

<h5 class="example">Example</h5>

<!-- <?php
$file = "file.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Attempt to delete the file
    if(unlink($file)){
        echo "File removed successfully.";
    } else{
        echo "ERROR: File cannot be removed.";
    }
} else{
    echo "ERROR: File does not exist.";
}
?> -->

<br>
<br>

<h5>PHP Filesystem Functions</h5>
<p>The following table provides the overview of some other useful PHP filesystem functions that can be used for reading and writing the files dynamically.</p>


                <div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            	<th style="width: 150px;">Function</th>
                            	<th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>fgetc()</code></td>
                                <td>Reads a single character at a time.</td>
                            </tr>
                            <tr>
                                <td><code>fgets()</code></td>
                                <td>Reads a single line at a time.</td>
                            </tr>
                            <tr>
                                <td><code>fgetcsv()</code></td>
                                <td>Reads a line of comma-separated values.</td>
                            </tr>
							<tr>
                                <td><code>filetype()</code></td>
                                <td>Returns the type of the file.</td>
                            </tr>
							<tr>
                                <td><code>feof()</code></td>
                                <td>Checks whether the end of the file has been reached.</td>
                            </tr>
							<tr>
                                <td><code>is_file()</code></td>
                                <td>Checks whether the file is a regular file.</td>
                            </tr>
							<tr>
                                <td><code>is_dir()</code></td>
                                <td>Checks whether the file is a directory.</td>
                            </tr>
							<tr>
                                <td><code>is_executable()</code></td>
                                <td>Checks whether the file is executable.</td>
                            </tr>
							<tr>
                                <td><code>realpath()</code></td>
                                <td>Returns canonicalized absolute pathname.</td>
                            </tr>
							<tr>
                                <td><code>rmdir()</code></td>
                                <td>Removes an empty directory.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
<br>
<br>

<hr>
<h4>PHP Parsing Directories</h4>
<h5>Working with Directories in PHP</h5>

<br>

<h5>Creating a New Directory</h5>
<p>You can create a new and empty directory by calling the PHP <code>mkdir()</code> function with the path and name of the directory to be created, as shown in the example below:</p>


<h5 class="example">Example</h5>

<?php 

$dir = "newfolder";

//Check the existence of directory

if (!file_exists($dir)) {
    //Attempt to create directory

    if (mkdir($dir)) {
        echo "Directory crated successfully.";
    } else {
        echo "ERROR: Directory could not be created.";
    }

} else {
    echo " <span class=\"text-danger\">ERROR</span>: Directory already exists.";
}

?>
<br>
<br>

<p>To make the <code>mkdir()</code> function work, the parent directories in the directory path parameter has to exist already, for example, if you specify the directory path as testdir/subdir than the testdir has to exist otherwise PHP will generate an error.</p>


<br>

<h5>Copying Files from One Location to Another</h5>
<p>You can copy a file from one location to another by calling PHP <code>copy()</code> function with the file's source and destination paths as arguments. If the destination file already exists it'll be overwritten. Here's an example which creates a copy of "example.txt" file inside backup folder.</p>

<h5 class="example">Example</h5>
<?php 
    // Source file path
    $file = "test.txt";

    //Destination file path
    $newfile = "newfolder/test.txt";

    //Check the existence of file
    if (file_exists($file)) {

            //Attempt to copy file
            if (copy($file, $newfile)) {
                echo "File copied successfully.";
            } else {
                echo "ERROR: File could not be copied.";
            }
    } else{
        echo "ERROR: File does not exist.";
    }


?>


<br>
<br>

<h5>Listing All Files in a Directory</h5>
<p>You can use the PHP <code>scandir()</code> function to list files and directories inside the specified path.</p>
<p>Now we're going to create a custom function that will recursively list all files in a directory using PHP. This script will be helpful if you're working with deeply nested directory structure.</p>


<h5 class="example">Example</h5>
<?php
// Define a function to output files in a directory
function outputFiles($path){
    // Check directory exists or not
    if(file_exists($path) && is_dir($path)){
        // Scan the files in this directory
        $result = scandir($path);
        
        // Filter out the current (.) and parent (..) directories
        $files = array_diff($result, array('.', '..'));
        
        if(count($files) > 0){
            // Loop through retuned array
            foreach($files as $file){
                if(is_file("$path/$file")){
                    // Display filename
                    echo $file . "<br>";
                } else if(is_dir("$path/$file")){
                    // Recursively call the function if directories found
                    outputFiles("$path/$file");
                }
            }
        } else{
            echo "ERROR: No files found in the directory.";
        }
    } else {
        echo "ERROR: The directory does not exist.";
    }
}
 
// Call the function
outputFiles("newfolder");
?>



<br>
<br>

<h5>Listing All Files of a Certain Type</h5>
<p>While working on directory and file structure, sometimes you might need to find out certain types of files within the directory, for example, listing only <code>.text</code> or .png files, etc. You can do this easily with the PHP <code>glob()</code> function, which matches files based on the pattern.</p>

<p>The PHP code in the following example will search the documents directory and list all the files with <code>.text</code> extension. It will not search the subdirectories.</p>

<h5 class="example">Example</h5>

<?php 

/* Search the directory and loop through returned array 
containing the matched files */

foreach (glob("newfolder/*.txt") as $file) {
    echo basename($file) . "(size: " . filesize($file) . "bytes)" , "<br>";
}

?>

<br>

<p>The <code>glob()</code> function can also be used to find all the files within a directory or its subdirectories. The function defined in the following example will recursively list all files within a directory, just like we've done in previous example with the <code>scandir()</code> function.</p>


<br>
<br>

<h5 class="example">Example</h5>

<?php
// Define a function to output files in a directory
function outputFile($path){
    // Check directory exists or not
    if(file_exists($path) && is_dir($path)){
        // Search the files in this directory
        $files = glob($path ."/*");
        if(count($files) > 0){
            // Loop through retuned array
            foreach($files as $file){
                if(is_file("$file")){
                    // Display only filename
                    echo basename($file) . "<br>";
                } else if(is_dir("$file")){
                    // Recursively call the function if directories found
                    outputFile("$file");
                }
            }
        } else{
            echo "ERROR: No such file found in the directory.";
        }
    } else {
        echo "ERROR: The directory does not exist.";
    }
}
 
// Call the function
outputFile("newfolder");
?>

<br>
<br>


<hr>
<h4>PHP File Upload</h4>
<h5>Uploading Files with PHP</h5>

<p>In this tutorial we will learn how to upload files on remote server using a Simple HTML form and PHP. You can upload any kind of file like images, videos, ZIP files, Microsoft Office documents, PDFs, as well as executables files and a wide range of other file types.</p>
<h5>Step 1: Crating a HTML form to upload the file</h5>

<h5 class="example">Example</h5>

<div>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

<h6>Upload Files</h6>
<label for="fileSelect">Filename:</label>
<input type="file" name="photo" id="fileSelect">
<input type="submit" name="submit" value="Upload">
<p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>

</form>

</div>

<p class="notes"><strong>Note:</strong> In addition to a <code>file-select</code> field the upload form must use the <code>HTTP post</code> method and must contain an <code>enctype="multipart/form-data"</code> attribute. This attribute ensures that the form data is encoded as mulitpart MIME data — which is required for uploading the large quantities of binary data such as files.</p>

<h5>Step 2: Processing the uploaded file</h5>
<p>Here's the complete code of our "upload-manager.php" file. It will store the uploaded file in a "upload" folder on permanent basis as well as implement some basic security check like file type and file size to ensure that users upload the correct file type and within the allowed limit.</p>

<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
           
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}

?>



<p class="notes"><strong>Note:</strong> The above script prevents uploading a file with the same name as an existing file in the same folder. However, if you want to allow this just prepend the file name with a random string or timestamp, like <code>$filename = time() . '_' . $_FILES["photo"]["name"];</code>
</p>


<br>
<h5>Explanation of Code</h5>
<p>Once the form is submitted information about the uploaded file can be accessed via PHP superglobal array called <code>$_FILES</code>. For example, our upload form contains a file select field called photo (i.e. <code>name="photo"</code>), if any user uploaded a file using this field, we can obtains its details like the name, type, size, temporary name or any error occurred while attempting the upload via the <code>$_FILES["photo"]</code> associative array, like this:</p>
     <ul>
        <li><code>$_FILES["photo"]["name"]</code> — This array value specifies the original name of the file, including the file extension. It doesn't include the file path.</li>
        <li><code>$_FILES["photo"]["type"]</code> — This array value specifies the MIME type of the file.</li>
        <li><code>$_FILES["photo"]["size"]</code> — This array value specifies the file size, in bytes.</li>
        <li><code>$_FILES["photo"]["tmp_name"]</code> — This array value specifies the temporary name including full path that is assigned to the file once it has been uploaded to the server.</li>
        <li><code>$_FILES["photo"]["error"]</code> — This array value specifies error or status code associated with the file upload, e.g. it will be 0, if there is no error.</li>
    </ul>
    
<p>The PHP code in the following example will simply display the details of the uploaded file and stores it in a temporary directory on the web server.</p>
               
<br>

<?php 

if ($_FILES["photo"]["error"] > 0) {
        echo "Error: " . $_FILES["photo"]["error"] . "<br>";
} else {
    echo "File Name:" . $_FILES["photo"]["name"] . "<br>";
    echo "File Type:" . $_FILES["photo"]["type"] . "<br>";
    echo "File Size:" . ($_FILES["photo"]["size"] / 1024) . "KB<br>";
    echo "Stored in: " . $_FILES["photo"]["tmp_name"];
}

?>


<br>
<br>

<p class="tip"><strong>Tip:</strong> Once a file has been successfully uploaded, it is automatically stored in a temporary directory on the server. To store this file on a permanent basis, you need to move it from the temporary directory to a permanent location using the PHP's <code>move_uploaded_file()</code> function.</p>



<br>
<br>

<hr>
<h4>PHP File Download</h4>
<h5>Downloading Files with PHP</h5>
<p>Normally, you don't necessarily need to use any server side scripting language like PHP to download images, zip files, pdf documents, exe files, etc. If such kind of file is stored in a public accessible folder, you can just create a hyperlink pointing to that file, and whenever a user click on the link, browser will automatically downloads that file.</p>


<h5 class="example">Example</h5>

<div>
<p><a href="https://www.tutorialrepublic.com/examples/downloads/test.zip">Download Zip file</a></p>
    <p><a href="https://www.tutorialrepublic.com/examples/downloads/masters.pdf">Download PDF file</a></p>
    <p><a href="https://www.tutorialrepublic.com/examples/downloads/sample.jpg">Download Image file</a></p>

</div>

<p>Clicking a link that points to a PDF or an Image file will not cause it to download to your hard drive directly. It will only open the file in your browser. Further you can save it to your hard drive. However, zip and exe files are downloaded automatically to the hard drive by default.</p>

<h5>Forcing a Download Using PHP</h5>
<p>You can force images or other kind of files to download directly to the user's hard drive using the PHP <code>readfile()</code> function. Here we're going to create a simple image gallery that allows users to download the image files from the browser with a single mouse click.</p>

<h5 class="example">Example</h5>

<!-- <?php
    // Array containing sample image file names

    $images = array("7-2-vector-png-file.png", "11.png", "bokey.png");

    // Loop through array to create image gallery

    foreach ($images as $image) {
        echo '<div class="img-box';
        echo '<img src="upload/' . $image . ' " width="200" alt="'. pathinfo($image, PATHINFO_FILENAME) . '">';
        echo '<p><a href="download.php?file=' . urlencode($image) . '">Download</a></p>';
        echo '</div>';
    }

?> -->


<br>
<br>

<p>If you see the above example code carefully, you'll find the download link pints to a "download.php" file, the URL also contains image file name as a query string. Also, we've used PHP <code>urlencode()</code> function to encode the image file names so that it can be safely passed as URL parameter, because file names may contain URL unsafe characters.</p>


<br>
<br>

<hr>
<h4>PHP Cookies</h4>
<h5>What is a Cookie</h5>
<p>A cookie is a small text file that lets you store a small amount of data (nearly 4KB) on the user's computer. They are typically used to keeping track of information such as username that the site can retrieve to personalize the page when user visit the website next time.</p>

<p class="tip"><strong>Tip:</strong> Each time the browser requests a page to the server, all the data in the cookie is automatically sent to the server within the request.</p>

<h5>Setting a Cookie in PHP</h5>
<p>The <code>setcookie()</code> function is used to set a cookie in PHP. Make sure you call the <code>setcookie()</code> function before any output generated by your script otherwise cookie will not set. </p>

<h5 class="example">Syntax</h5>

<p><code>setcookie(<i class="text-secondary">name, value, expire, path, domain, secure</i>);</code></p>

<p>The parameters of the <code>setcookie()</code> function have the following meanings:</p>
                <div>
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        	<th>Parameter</th>
                        	<th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        	<td><code>name</code></td>
                        	<td>The name of the cookie.</td>
                        </tr>
                        <tr>
                        	<td><code>value</code></td>
                        	<td>The value of the cookie. Do not store sensitive information since this value is stored on the user's computer.</td>
                        </tr>
                        <tr>
                        	<td><code>expires</code></td>
                        	<td>The expiry date in UNIX timestamp format. After this time cookie will become inaccessible. The default value is 0.</td>
                        </tr>			    
                        <tr>
                        	<td><code>path</code></td>
                        	<td>Specify the path on the server for which the cookie will be available. If set to <code>/</code>, the cookie will be available within the entire domain.</td>
                        </tr>
                        <tr>
                        	<td><code>domain</code></td>
                        	<td>Specify the domain for which the cookie is available to e.g www.example.com.</td>
                        </tr>
                        <tr>
                        	<td><code>secure</code></td>
                        	<td>This field, if present, indicates that the cookie should be sent only if a secure HTTPS connection exists.</td>
                        </tr>
                    </tbody>
                    </table>
                </div>


<p class="tip"><strong>Tip:</strong> If the expiration time of the cookie is set to 0, or omitted, the cookie will expire at the end of the session i.e. when the browser closes.</p>

<h5 class="example">Example</h5>

<p>Here's an example that uses <code>setcookie()</code> function to create a cookie named username and assign the value value <code>John Carter</code> to it. It also specify that the cookie will expire after 30 days <code>(30 days * 24 hours * 60 min * 60 sec)</code>.</p>

<?php  

// Setting a cookie

setcookie("username", "John Carter", time()+30*24*60*60);

?>

<br>

<h5>Accessing Cookies Values</h5>
<p>The PHP <code>$_COOKIE</code> superglobal variable is used to retrieve a cookie value. It typically an associative array that contains a list of all the cookies values sent by the browser in the current request, keyed by cookie name. The individual cookie value can be accessed using standard array notation, for example to display the username cookie set in the previous example, you could use the following code.</p>

<h5 class="example">Example</h5>
<?php 
    // Accessing an individual cookie value

    echo $_COOKIE["username"];

?>
<br>
<br>

<p>It's a good practice to check whether a cookie is set or not before accessing its value. To do this you can use the PHP <code>isset()</code> function, like this:</p>

<h5 class="example">Example</h5>

<?php 
//Verifying whether a cookie is set or not

    if(isset($_COOKIE["username"])){
        echo "Hi " . $_COOKIE["username"];
        } else {
        echo "Welcome Guest";
    }

?>

<br>
<br>

<p>You can use the <code>print_r()</code> function like <code>print_r($_COOKIE);</code> to see the structure of this <code>$_COOKIE</code> associative array, like you with other arrays.</p>
<h5 class="example">Example</h5>

<?php
print_r($_COOKIE);

?>


<br>
<br>

<h5>Removing Cookies</h5>
<p>You can delete a cookie by calling the same <code>setcookie()</code> function with the cookie name and any value (such as an empty string) however this time you need the set the expiration date in the past, as shown in the example below:</p>

<h5 class="example">Example</h5>

<?php

// Deleting a cookie

setcookie("username", "", time()-3600);

?>


<br>
<br>

<p class="tip"><strong>Tip:</strong> You should pass exactly the same path, domain, and other arguments that you have used when you first created the cookie in order to ensure that the correct cookie is deleted.</p>



<br>
<br>

<hr>
<h4>PHP Sessions</h4>
<h5>What is a Session</h5>
<p>Although you can store data using cookies but it has some security issues. Since cookies are stored on user's computer it is possible for an attacker to easily modify a cookie content to insert potentially harmful data in your application that might break your application.</p>
<p>Also every time the browser requests a URL to the server, all the cookie data for a website is automatically sent to the server within the request. It means if you have stored 5 cookies on user's system, each having 4KB in size, the browser needs to upload 20KB of data each time the user views a page, which can affect your site's performance.</p>
<p>You can solve both of these issues by using the PHP session. A PHP session stores data on the server rather than user's computer. In a session based environment, every user is identified through a unique number called session identifier or SID. This unique session ID is used to link each user with their own information on the server like emails, posts, etc.</p>

<p class="tip"><strong>Tip:</strong> The session IDs are randomly generated by the PHP engine which is almost impossible to guess. Furthermore, because the session data is stored on the server, it doesn't have to be sent with every browser request.</p>

<h5>Starting a PHP Session</h5>
<p>Before you can store any information in session variables, you must first start up the session. To begin a new session, simply call the PHP <code>session_start()</code> function. It will create a new session and generate a unique session ID for the user.</p>

<h5 class="example">Example</h5>

<!-- <?php  
// Starting session

session_start();

?> -->
<br>
<p>The<code>session_start()</code> function first checks to see if a session already exists by looking for the presence of a session ID. If it finds one, i.e. if the session is already started, it sets up the session variables and if doesn't, it starts a new session by creating a new session ID.</p>

<p class="notes"><strong>Note:</strong> You must call the <code>session_start()</code> function at the beginning of the page i.e. before any output generated by your script in the browser, much like you do while setting the cookies with <code>setcookie()</code> function.</p>

<br>

<h5>Storing and Accessing Session Data</h5>

<p>You can store all your session data as key-value pairs in the <code>$_SESSION[]</code> superglobal array. The stored data can be accessed during lifetime of a session. Consider the following script, which creates a new session and registers two session variables.</p>

<h5 class="example">Example</h5>

<?php 
// Starting session

session_start();

// Storing session data

$_SESSION["firstname"] = "Ganesh";
$_SESSION["secondname"] = "Vadla";



// Accessing session data
echo 'Hi, ' . $_SESSION["firstname"] .  ' ' . $_SESSION["secondname"];

?>


<br>
<br>

<h5>Destroying a Session</h5>
<p>If you want to remove certain session data, simply unset the corresponding key of the <code>$_SESSION</code> associative array, as shown in the following example:</p>

<h5 class="example">Example</h5>
<?php 
// Starting session

session_start();

// Storing session data

$_SESSION["firstname"] = "Yashwin";
$_SESSION["secondname"] = "Vadla";

// Removing session data

if (isset($_SESSION["lastname"])) {
            unset($_SESSION["lastname"]);
}

echo "Display session information - lastname Vadla session destroyed. <br>";

echo $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];

?>

<br>
<br>

<p>However, to destroy a session completely, simply call the <code>session_destroy()</code> function. This function does not need any argument and a single call destroys all the session data.</p>

<h5 class="example">Example</h5>
<?php 
//Session start

session_start();

//Destroying session

session_destroy();


?>

<br>
<p class="notes"><strong>Note:</strong> Before destroying a session with the <code>session_destroy()</code> function, you need to first recreate the session environment if it is not already there using the <code>session_start()</code> function, so that there is something to destroy.</p>


<p>Every PHP session has a timeout value — a duration, measured in seconds — which determines how long a session should remain alive in the absence of any user activity. You can adjust this timeout duration by changing the value of <code>session.gc_maxlifetime</code> variable in the PHP configuration file ( <code>php.ini</code> ).</p>


<br>
<br>

<hr>

<h4>PHP Send Emails</h4>
<h5>The PHP mail() Function</h5>

<p>Sending email messages are very common for a web application, for example, sending welcome email when a user create an account on your website, sending newsletters to your registered users, or getting user feedback or comment through website's contact form, and so on.</p>

<p>You can use the PHP <code>built-in mail()</code> function for creating and sending email messages to one or more recipients dynamically from your PHP application either in a plain-text form or formatted HTML. The basic syntax of this function can be given with:</p>

<h5 class="example">Syntax</h5>
<p><code>mail</code>(<i class="text-secondary">to, subject, message, headers, parameters</i>)</p>

<p>The following table summarizes the parameters of this function.</p>
                <div>
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        	<th>Parameter</th>
                        	<th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        	<td class="section" colspan="2"><strong>Required</strong> — The following parameters are required</td>
                        </tr>
                        <tr>
                        	<td><code>to</code></td>
                        	<td>The recipient's email address.</td>
                        </tr>
                        <tr>
                        	<td><code>subject</code></td>
                        	<td>Subject of the email to be sent. This parameter i.e. the subject line cannot contain any newline character (<code>\n</code>).</td>
                        </tr>
                        <tr>
                        	<td><code>message</code></td>
                        	<td>Defines the message to be sent. Each line should be separated with a line feed-LF (<code>\n</code>). Lines should not exceed 70 characters.</td>
                        </tr>
                        <tr>
                        	<td class="section" colspan="2"><strong>Optional</strong> — The following parameters are optional</td>
                        </tr>
                        <tr>
                        	<td><code>headers</code></td>
                        	<td>This is typically used to add extra headers such as "From", "Cc", "Bcc". The additional headers should be separated with a carriage return plus a line feed-CRLF (<code>\r\n</code>).</td>
                        </tr>
                        <tr>
                        	<td><code>parameters</code></td>
                        	<td>Used to pass additional parameters.</td>
                        </tr>
                    </tbody>
                    </table>
                </div>

<br>

<h5>Sending Plain Text Emails</h5>
<p>The simplest way to send an email with PHP is to send a text email. In the example below we first declare the variables — recipient's email address, subject line and message body — then we pass these variables to the <code>mail()</code> function to send the email.</p>

<h5 class="example">Example</h5>
<?php
$to = 'ganeshvadla@gmail.com';
$subject = 'PHP Testing';
$message = 'This is testing message from php script';

//Sending mail

if (mail($to, $subject, $message)) {
        echo 'Your mail has been sent successfully';

} else {
    echo 'Unable to send mail.';
}

?>
<br>
<br>

<p>When you send a text message using PHP, all the content will be treated as simple text. We're going to improve that output, and make the email into a HTML-formatted email.</p>

<p>To send an HTML email, the process will be the same. However, this time we need to provide additional headers as well as an HTML formatted message.</p>

<h5 class="example">Example</h5>
<?php
$to = 'ganeshvadla@email.com';
$subject = 'Marriage Proposal';
$from = 'tech@tppl.news';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>

<br>
<br>

<p class="notes"><strong>Note:</strong> However, the PHP <code>mail()</code> function is a part of the PHP core but you need to set up a mail server on your machine to make it really work.</p>

<br>
<br>

<hr>
<h4>PHP Form Handling</h4>
<h5>Creating a Simple Contact Form</h5>

<p>In this tutorial we are going to create a simple HMTL contact form that allows users to enter their comment and feedback then displays it to the browser using PHP.</p>

<h5 class="example">Example</h5>

<h5>Contact Us</h5>
<p>Please fill in this form and send us.</p>

<form action="process-form.php" method="post">
<p>
    <label for="inputName">Name:<sup>*</sup></label>
    <input type="text" name="name" id="inputName" required>
</p>
    <label for="inputEmail">Email:<sup>*</sup></label>
    <input type="text" name="email" id="inputEmail" required>
<p>
    <label for="inputSubject">Subject:</label>
    <input type="text" name="subject" id="inputSubject" required>
</p>
<p>
    <label for="inputComment">Message:<sup>*</sup></label>
    <textarea name="message" id="inputComment" rows="5" cols="30" required></textarea>
</p>
    <input type="submit" value="Submit" class="btn btn-primary">
    <input type="reset" value="Reset" class="btn btn-secondary">

</form>


<br>

<p>The PHP code above is quite simple. Since the form data is sent through the post method, you can retrieve the value of a particular form field by passing its name to the <code>$_POST</code> superglobal array, and displays each field value using <code>echo()</code> statement.</p>

<br>
<br>

<hr>
<h4 id="formvalidation">PHP Form Validation</h4>
<h5>Sanitizing and Validating Form Data</h5>
<p>As you have seen in the previous tutorial, the process of capturing and displaying the submitted form data is quite simple. In this tutorial you will learn how to implement a simple contact form on your website that allows the user to send their comment and feedback through email. We will use the same <code>PHP mail() function</code> to send the emails.</p>


<p>The following is our all-in-one PHP script which does the following things:</p>
                <ul>
                	<li>It will ask the users to enter his comments about the website.</li>
                    <li>The same script displays the contact form and process the submitted form data.</li>
                    <li>The script sanitizes and validates the user inputs. If any required field (marked with <code title="asterisk">*</code>) is missing or validation failed due to incorrect inputs the script redisplays the form with an error message for corresponding form field.</li>
                    <li>The script remembers which fields the user has already filled in, and prefills those fields when the form redisplayed due to validation error.</li>
                    <li>If the data submitted by the user are acceptable and everything goes well it will send an email to the website administrator and display a success message to the user.</li>
                </ul>

<h5 class="example">Example</h5>

<p><a href="contact.php" target="_blank">click</a> for contact form</p>


<h5>Explanation of code</h5>
<p>You might think what that code was all about. OK, let's get straight into it.</p>
                <ul>
                    <li>The <code>filterName()</code> function validate input value as person's name. A valid name can only contain alphabetical characters (a-z, A-Z).</li>
                    <li>The <code>filterEmail()</code> function validate input value as email address.</li>
                    <li>The <code>filterString()</code> function only sanitize the input value by stripping HTML tags and special characters. It doesn't validate the input value against anything.</li>
                    <li>The attribute <code>action="contact.php"</code> inside the <a href="../html-reference/html-form-tag.php"><code>&lt;form&gt;</code></a> tag specifies that the same <code>contact.php</code> file display the form as well as process the form data.</li>
                    <li>The PHP code inside the value attribute of <a href="../html-reference/html-input-tag.php"><code>&lt;input&gt;</code></a> and <a href="../html-reference/html-textarea-tag.php"><code>&lt;textarea&gt;</code></a> e.g. <code>&lt;?php echo $name; ?&gt;</code> display prefilled value when form is redisplayed upon validation error.</li>
                    <li>The PHP code inside the <code>.error</code> class e.g. <code>&lt;span class="error"&gt;&lt;?php echo $nameErr; ?&gt;&lt;/span&gt;</code> display error for corresponding field.</li>
                </ul>


<br>

<p class="notes"><strong>Note:</strong> You need to setup a mail server on your machine for the PHP <code>mail()</code> function to work. If you just want to implement the form validation you can replace the mail part</p>


<br>
<br>

<hr>
<h4>PHP Filters</h4>
<h5>Validating and Sanitizing Data with Filters</h5>
<p>Sanitizing and validating user input is one of the most common tasks in a web application. To make this task easier PHP provides native filter extension that you can use to sanitize or validate data such as e-mail addresses, URLs, IP addresses, etc.</p>

<p>To validate data using filter extension you need to use the PHP's <code>filter_var()</code> function. The basic syntax of this function can be given with:</p>

<h5 class="example">Syntax</h5>

<p><span class="example">filter_var</span>(<i>variable, filter, options</i>)</p>

<p>This function takes three parameters out of which the last two are optional. The first parameter is the value to be filtered, the second parameter is the ID of the filter to apply, and the third parameter is the array of options related to filter. Let's see how it works.</p>


<h5>Sanitize a String</h5>

<h5 class="example">Example</h5>

<?php 

//Sample user comment

$comment = "Hey there, How are you doing today?";

//Sanitize and print comment string

$sanitizedComment = filter_var($comment, FILTER_SANITIZE_STRING);

echo $sanitizedComment;



?>

<br>
<br>

<h5>Validate Integer Values</h5>
<h5 class="example">Example</h5>

<?php 
// Sample integer value

$int = 20;

//Validate sample integer value

if (filter_var($int, FILTER_VALIDATE_INT)) {
    echo "The <b>$int</b> is a valid integer";
} else{
    echo "The <b>$int</b> is not a valid integer";
}


?>

<br>
<br>

<p>In the above example, if variable <code>$int</code> is set to 0, the example code will display invalid integer message. To fix this problem, you need to explicitly test for the value 0, as follow:</p>

<h5 class="example">Example</h5>

<?php
// Sample integer value
$int = 0;
 
// Validate sample integer value
if(filter_var($int, FILTER_VALIDATE_INT) === 0 || filter_var($int, FILTER_VALIDATE_INT)){
    echo "The <b>$int</b> is a valid integer";
} else{
    echo "The <b>$int</b> is not a valid integer";
}
?>

<br>
<br>

<h5>Validate IP Addresses</h5>
<h5 class="example">Example</h5>
<?php
// Sample IP address
$ip = "172.16.254.1";
 
// Validate sample IP address
if(filter_var($ip, FILTER_VALIDATE_IP)){
    echo "The <b>$ip</b> is a valid IP address";
} else {
    echo "The <b>$ip</b> is not a valid IP address";
}
?>

<br>
<br>

<p>You can further apply validation for IPV4 or IPV6 IP addresses by using the <code>FILTER_FLAG_IPV4</code> or <code>FILTER_FLAG_IPV6</code> flags, respectively. Here's an example:</p>

<?php
// Sample IP address
$ip = "172.16.254.1";
 
// Validate sample IP address
if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)){
    echo "The <b>$ip</b> is a valid IPV6 address";
} else {
    echo "The <b>$ip</b> is not a valid IPV6 address";
}
?>


<br>
<br>

<h5>Sanitize and Validate Email Addresses</h5>
<h5 class="example">Example</h5>

<?php 
// Sample email address

$email = "some@@example.com";

//Remove all illegal characters

$email = filter_var($email, FILTER_SANITIZE_EMAIL);

//Validate email address


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "The <b>$email</b> is a valid email address";
} else{
    echo "The <b>$email</b> is not a valid email address";
}


?>

<br>
<br>

<h5>Sanitize and Validate URLs</h5>

<h5 class="example">Example</h5>

<?php
// Sample website url
$url = "http:://wwww.example.com";
 
// Remove all illegal characters from url
$url = filter_var($url, FILTER_SANITIZE_URL);
 
// Validate website url
if(filter_var($url, FILTER_VALIDATE_URL)){
    echo "The <b>$url</b> is a valid website url";
} else{
    echo "The <b>$url</b> is not a valid website url";
}
?>

<br>
<br>

<p>You can also check whether a URL contains query string or not by using the flag <code>FILTER_FLAG_QUERY_REQUIRED</code>, as shown in the following example:</p>

<h5 class="example">Example</h5>

<?php
// Sample website url
$url = "http://www.example.com?topic=filters";
 
// Validate website url for query string
if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
    echo "The <b>$url</b> contains query string";
} else{
    echo "The <b>$url</b> does not contain query string";
}
?>

<br>
<br>

<h5>Validate Integers Within a Range</h5>
<p>The following example will validate whether the supplied value is an integer or not, as well as whether it lies within the range of 0 to 100 or not.</p>
<h5 class="example">Example</h5>
<?php
// Sample integer value
$int = 52;
 
// Validate sample integer value
if(filter_var($int, FILTER_VALIDATE_INT, 
            array(
                "options" => array(
                    "min_range" => 0,
                    "max_range" => 100)
                    )
            )
    ){

    echo "The <b>$int</b> is within the range of 0 to 100";
} else{
    echo "The <b>$int</b> is not within the range of 0 to 100";
}
?>

<br>
<br>
<hr>
<h4>PHP Error Handling</h4>
<h5>Handling Errors</h5>
<p>Sometimes your application will not run as it supposed to do, resulting in an error. There are a number of reasons that may cause errors, for example:</p>
                <ul>
                    <li>The Web server might run out of disk space</li>
                    <li>A user might have entered an invalid value in a form field</li>
                    <li>The file or database record that you were trying to access may not exist</li>
                    <li>The application might not have permission to write to a file on the disk</li>
                    <li>A service that the application needs to access might be temporarily unavailable</li>
                </ul>
                <p>These types of errors are known as runtime errors, because they occur at the time the script runs. They are distinct from syntax errors that need to be fixed before the script will run.</p>
                <p class="space">A professional application must have the capabilities to handle such runtime error gracefully. Usually this means informing the user about the problem more clearly and precisely.</p>


<br>

<h5>Understanding Error Levels</h5>
<p>Usually, when there's a problem that prevents a script from running properly, the PHP engine triggers an error. Each error is represented by an integer value and an associated constant. The following table list some of the common error levels:</p>

<div>
                    <table class="table table-bordered">
                        <tbody><tr>
                            <th>Error Level</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>E_ERROR</code></td>
                            <td><code>1</code></td>
                            <td>A fatal run-time error, that can't be recovered from. The execution of the script is stopped immediately.</td>
                        </tr>
                        <tr>
                            <td><code>E_WARNING</code></td>
                            <td><code>2</code></td>
                            <td>A run-time warning. It is non-fatal and most errors tend to fall into this category. The execution of the script is not stopped.</td>
                        </tr>
                        <tr>
                            <td><code>E_NOTICE</code></td>
                            <td><code>8</code></td>
                            <td>A run-time notice. Indicate that the script encountered something that could possibly an error, although the situation could also occur when running a script normally.</td>
                        </tr>
                        <tr>
                            <td><code>E_USER_ERROR</code></td>
                            <td><code>256</code></td>
                            <td>A fatal user-generated error message. This is like an <code>E_ERROR</code>, except it is generated by the PHP script using the function <code>trigger_error()</code> rather than the PHP engine.</td>
                        </tr>
                        <tr>
                            <td><code>E_USER_WARNING</code></td>
                            <td><code>512</code></td>
                            <td>A non-fatal user-generated warning message. This is like an <code>E_WARNING</code>, except it is generated by the PHP script using the function <code>trigger_error()</code> rather than the PHP. engine</td>
                        </tr>
                        <tr>
                            <td><code>E_USER_NOTICE</code></td>
                            <td><code>1024</code></td>
                            <td>A user-generated notice message. This is like an <code>E_NOTICE</code>, except it is generated by the PHP script using the function <code>trigger_error()</code> rather than the PHP engine.</td>
                        </tr>
                        <tr>
                            <td><code>E_STRICT</code></td>
                            <td><code>2048</code></td>
                            <td>Not strictly an error, but triggered whenever PHP encounters code that could lead to problems or forward incompatibilities</td>
                        </tr>
                        <tr>
                            <td><code>E_ALL</code></td>
                            <td><code>8191</code></td>
                            <td>All errors and warnings, except of <code>E_STRICT</code> prior to PHP 5.4.0.</td>
                        </tr>
                    </tbody></table>
                </div>


<br>

<p>The PHP engine triggers an error whenever it encounters a problem with your script, but you can also trigger errors yourself to generate more user friendly error messages. This way you can make your application more sofisticated. The following section describes some of common methods used for handling errors in PHP:</p>

<h5>Basic Error Handling Using the die() Function</h5>

<h5 class="example">Example</h5>

<?php 

// Try to open a non-existent file

$file = fopen("test.txt", "r");


?>

<br>
<p>If we follow some simple steps we can prevent the users from getting such error message.</p>

<h5 class="example">Example</h5>

<?php 
if (file_exists("test.txt")) {
        $file = fopen("test.txt", "r");
} else{
    die("Error: The file you are trying to access does't exist.");
}


?>
<br>

<p>As you can see by implementing a simple check whether the file exist or not before trying to access it, we can generate an error message that is more meaningful to the user.</p>

<p>The <code>die()</code> function used above simply display the custom error message and terminate the current script if 'sample.txt' file is not found.</p>


<h5>Creating a Custom Error Handler</h5>

<p>You can create your own error handler function to deal with the run-time error generated by PHP engine. The custom error handler provides you greater flexibility and better control over the errors, it can inspect the error and decide what to do with the error, it might display a message to the user, log the error in a file or database or send by e-mail, attempt to fix the problem and carry on, exit the execution of the script or ignore the error altogether.</p>

<p>The custom error handler function must be able to handle at least two parameters (errno and errstr), however it can optionally accept an additional three parameters (errfile, errline, and errcontext), as described below:</p>

<div>
                    <table class="table table-bordered">
                        <tbody><tr>
                            <th style="width: 90px;">Parameter</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td class="section" colspan="2"><strong>Required</strong> — The following parameters are required</td>
                        </tr>
                        <tr>
                            <td>errno</td>
                            <td>Specifies the level of the error, as an integer. This corresponds to the appropriate error level constant ( <code>E_ERROR</code>, <code>E_WARNING</code>, and so on)</td>
                        </tr>
                        <tr>
                            <td>errstr</td>
                            <td>Specifies the error message as a string</td>
                        </tr>
                        <tr>
                            <td class="section" colspan="2"><strong>Optional</strong> — The following parameters are optional</td>
                        </tr>
                        <tr>
                            <td>errfile</td>
                            <td>Specifies the filename of the script file in which the error occurred, as a string</td>
                        </tr>
                        <tr>
                            <td>errline</td>
                            <td>Specifies the line number on which the error occurred, as a string</td>
                        </tr>
                        <tr>
                            <td>errcontext</td>
                            <td>Specifies an array containing all the variables and their values that existed at the time the error occurred. Useful for debugging</td>
                        </tr>
                    </tbody></table>
                </div>

<h5 class="example">Example</h5>
<?php 
// Error handler function

function customError($errno, $errstr){
        echo "<b>Error:</b> [$errno] $errstr";
}


// Set error handler

set_error_handler("customError");

//Trigger error

echo($test);

?>

<br>
<br>
<p>You need to tell the PHP to use your custom error handler function — just call the built-in <code>set_error_handler()</code> function, passing in the name of the function.</p>

<h5>Error Logging</h5>
<p>Log Error Messages in a Text File</p>

<h5 class="example">Example</h5>


<?php
function calcDivision($dividend, $divisor){
    if($divisor == 0){
        trigger_error("calcDivision(): The divisor cannot be zero<br>", E_USER_WARNING);
        return false;
    } else{
        return($dividend / $divisor);
    }
}
function customError2($errno, $errstr, $errfile, $errline, $errcontext){
    $message = date("Y-m-d H:i:s - ");
    $message .= "Error: [" . $errno ."], " . "$errstr in $errfile on line $errline, ";
    $message .= "Variables:" . print_r($errcontext, true) . "\r\n";
    
    error_log($message, 3, "logs/app_errors.log");
    die("There was a problem, please try again.");
}
set_error_handler("customError");
echo calcDivision(10, 0);
echo "This will never be printed.";
?>

<br>
<br>

<h5>Send Error Messages by E-Mail</h5>
<p>You can also send e-mail with the error details using the same <code>error_log()</code> function.</p>

<h5 class="example">Example</h5>

<?php
function calcDivision2($dividend, $divisor){
    if ($divisor == 0){
        trigger_error("calcDivision(): The divisor cannot be zero <br>", E_USER_WARNING);
        return false;
    } else{
        return($dividend / $divisor);
    }
}
function customError3($errno, $errstr, $errfile, $errline, $errcontext){
    $message = date("Y-m-d H:i:s - ");
    $message .= "Error: [" . $errno ."], " . "$errstr in $errfile on line $errline, ";
    $message .= "Variables:" . print_r($errcontext, true) . "\r\n";
    
    error_log($message, 1, "tech@tppl.news");
    die("There was a problem, please try again. Error report submitted to webmaster.");
}
set_error_handler("customError");
echo calcDivision2(10, 0);
echo "This will never be printed.";
?>


<br>
<br>

<h5>Trigger an Error</h5>
<p>Although the PHP engine triggers an error whenever it encounters a problem with your script, however you can also trigger errors yourself. This can help to make your application more robust, because it can flag potential problems before they turn into serious errors.</p>

<p>To trigger an error from within your script, call the <code>trigger_error()</code> function, passing in the error message that you want to generate:</p>

<h5 class="example">Syntax</h5>

<p>trigger_error("There was a problem");</p>

<h5 class="example">Example</h5>

<?php
function calcDivision4($dividend, $divisor){
        return($dividend / $divisor);
}
// Calling the function

echo calcDivision4(10, 0);

?>

<br>
<br>

<p>This message doesn't look very informative. Consider the following example that uses the <code>trigger_error()</code> function to generate the error.</p>
<h5 class="example">Example</h5>

<?php 
function calcDivision5($dividend, $divisor){
        if ($divisor == 0) {
            trigger_error("The divisor cannot be zero", E_USER_WARNING);
            return false;
        } else{
            return($dividend / $divisor);
        }
}

// Calling the function

echo calcDivision5(10, 0);

?>

<br>
<br>

<hr>
<h4>PHP Classes and Objects</h4>

<h5>What is Object Oriented Programming</h5>
<p>Object-Oriented Programming <code>(OOP)</code> is a programming model that is based on the concept of classes and objects. As opposed to procedural programming where the focus is on writing procedures or functions that perform operations on the data, in object-oriented programming the focus is on the creations of objects which contain both data and functions together.</p>

<p><p>Object-oriented programming has several advantages over conventional or procedural style of programming. The most important ones are listed below:</p>
				<ul>
					<li>It provides a clear modular structure for the programs.</li>
					<li>It helps you adhere to the "don't repeat yourself" (DRY) principle, and thus make your code much easier to maintain, modify and debug.</li>
					<li>It makes it possible to create more complicated behavior with less code and shorter development time and high degree of reusability.</li>
				</ul></p>


<p class="tip"><strong>Tip:</strong> The idea behind Don't Repeat Yourself (DRY) principle is reducing the repetition of code by abstracting out the code that are common for the application and placing them at a single place and reuse them instead of repeating it.</p>

<h5>Understanding Classes and Objects</h5>

<p>Classes and objects are the two main aspects of object-oriented programming. A class is a self-contained, independent collection of variables and functions which work together to perform one or more specific tasks, while objects are individual instances of a class.</p>
				<p>A class acts as a template or blueprint from which lots of individual objects can be created. When individual objects are created, they inherit the same generic properties and behaviors, although each object may have different values for certain properties.</p>
				<p>For example, think of a class as a blueprint for a house. The blueprint itself is not a house, but is a detailed plan of the house. While, an object is like an actual house built according to that blueprint. We can build several identical houses from the same blueprint, but each house may have different paints, interiors and families inside, as shown in the illustration below.</p>
                <p class="text-center"><img src="images/class-object-relationship-illustration.png" alt="Class Object Relationship Illustration"></p>
				<p>A class can be declared using the <code>class</code> keyword, followed by the name of the class and a pair of curly braces (<code>{}</code>), as shown in the following example.</p>
                <p>Let's create a PHP file named Rectangle.php and put the following example code inside it so that our class code should be separated from rest of the program. We can then use it wherever it's needed by simply including the Rectangle.php file.</p>

<h5 class="example">Example</h5>

<?php
class RectangleF
{
    // Declare  properties
    public $length = 0;
    public $width = 0;
    
    // Method to get the perimeter
    public function getPerimeter(){
        return (2 * ($this->length + $this->width));
    }
    
    // Method to get the area
    public function getArea(){
        return ($this->length * $this->width);
    }
}
?>


<P>The <code>public</code> keyword before the properties and methods in the example above, is an access modifier, which indicates that this property or method is accessible from anywhere. We will learn more about this a little later in this chapter.</P>

<p class="notes"><strong>Note:</strong> Syntactically, variables within a class are called <i class="text-info">properties</i>, whereas functions are called <i class="text-info">methods</i>. Also class names conventionally are written in PascalCase i.e. each concatenated word starts with an uppercase letter (e.g. MyClass). </p>

<p>Once a class has been defined, objects can be created from the class with the <code>new</code> keyword. Class methods and properties can directly be accessed through this object instance.</p>

<h5 class="example">Example</h5>

<?php

//Include class definition
require "rectangle.php";

//Create a new object from rectangle class
$obj = new Rectangle;

//Get the object properties values
echo $obj->length;
echo $obj->width;

//Set object properties values
$obj->length = 30;
$obj->width = 20;

//Read the object properties values again to show the change
echo $obj->length;
echo $obj->width;

//Call the object method
echo $obj->getPerimeter();
echo $obj->getArea();


?>

<br>
<br>

<p>The arrow symbol (<code>-></code>) is an OOP construct that is used to access contained properties and methods of a given object. Whereas, the pseudo-variable <code>$this</code> provides a reference to the calling object i.e. the object to which the method belongs.</p>


<p>The real power of object oriented programming becomes evident when using multiple instances of the same class, as shown in the following example:</p>

<h5 class="example">Example</h5>

<p><a href="oop.php" target="_blank">Click</a> for external file</p>

<p>As you can see in the above example, calling the <code>getArea()</code> method on different objects causes that method to operate on a different set of data. Each object instance is completely independent, with its own properties and methods, and thus can be manipulated independently, even if they're of the same class.</p>

<h5>Using Constructors and Destructors</h5>
<p>To make the object-oriented programming easier, PHP provides some magic methods that are executed automatically when certain actions occur within an object.</p>
<p>For example, the magic method <code>__construct()</code> (known as constructor) is executed automatically whenever a new object is created. Similarly, the magic method <code>__destruct()</code> (known as destructor) is executed automatically when the object is destroyed. A destructor function cleans up any resources allocated to an object once the object is destroyed.</p>


<h5 class="example">Example</h5>

<?php 

class TestClass
{
        //Constructor
        public function __construct(){
            echo 'The class " ' . __CLASS__ .'" was initiated! <br>';
        }
    
        // Destructor
        public function __destruct()
        {
            echo 'The class " ' . __CLASS__ .'" was destroyed. <br>';
        }


} // class end


// create a new object
$obj = new TestClass;

// Output a Message
echo "The end of the file is reached.";


?>

<br>
<br>

<p>A destructor is called automatically when a scripts ends. However, to explicitly trigger the destructor, you can destroy the object using the PHP <code>unset()</code> function, as follow:</p>


<h5 class="example">Example</h5>

<?php 

class TestClass2
{
        //Constructor
        public function __construct(){
            echo 'The class " ' . __CLASS__ .'" was initiated! <br>';
        }
    
        // Destructor
        public function __destruct()
        {
            echo 'The class " ' . __CLASS__ .'" was destroyed. <br>';
        }


} // class end


// create a new object
$obj = new TestClass2;

//Destroy the object

unset($obj);

// Output a Message
echo "The end of the file is reached.";


?>

<br>
<br>

<p class="tip"><strong>Tip:</strong> PHP automatically clean up all resources allocated during execution when the script is finished, e.g. closing database connections, destroying objects, etc.</p>

<p class="notes"><strong>Note:</strong> The <code>__CLASS__</code> is a magic constant which contains the name of the class in which it is occur. It is empty, if it occurs outside of the class.</p>

<br>

<h5>Extending Classes through Inheritance</h5>
<p>Classes can inherit the properties and methods of another class using the extends keyword. This process of extensibility is called inheritance. It is probably the most powerful reason behind using the object-oriented programming model.</p>


<h5 class="example">Example</h5>

<p><a href="extend_class.php" target="_blank">Click</a> for Example</p>

<p>As you can see in the above example, even though the class definition of Square doesn't explicitly contain <code>getArea()</code> method nor the <code>$length</code> and <code>$width</code> property, instances of the Square class can use them, as they inherited from the parent Rectangle class.</p>

<p class="tip"><strong>Tip:</strong> Since a child class is derived from a parent class, it is also referred to as a derived class, and its parent is called the base class.</p>

<br>

<h5>Controlling the Visibility of Properties and Methods</h5>

<p>When working with classes, you can even restrict access to its properties and methods using the <em>visibility keywords</em> for greater control. There are three visibility keywords (from most visible to least visible): <code>public</code>, <code>protected</code>, <code>private</code>, which determines how and from where properties and methods can be accessed and modified.</p>
				<ul>
					<li><strong>public</strong> — A public property or method can be accessed anywhere, from within the class and outside. This is the default visibility for all class members in PHP.</li>
					<li><strong>protected</strong> —  A protected property or method can only be accessed from within the class itself or in child or inherited classes i.e. classes that extends that class.</li>
					<li><strong>private</strong> — A private property or method is accessible only from within the class that defines it. Even child or inherited classes cannot access private properties or methods.</li>
				</ul>
				<p>The following example will show you how this visibility actually works:</p>


<h5 class="example">Example</h5>

<p><a href="controlling_visibility.php" target="_blank">Click</a> here for example</p>

<h5>Static Properties and Methods</h5>
<p>In addition to the visibility, properties and methods can also be declared as <code>static</code>, which makes them accessible without needing an instantiation of the class. Static properties and methods can be accessed using the scope resolution operator (<code>::</code>), like this: <code>ClassName::$property</code> and <code>ClassName::method()</code>.</p>
				<p>A property declared as static cannot be accessed via the object of that class though a static method can be, as demonstrated in the following example:</p>
        
        
<h5 class="example">Example</h5>
<?php 

//Class definition

class HelloClass 
{
        // Declare a static property
        public static $greeting = "Hello, World! <br>";

        //Declare a static method
        public static function sayHello(){
                echo self::$greeting . "<br>";
        }
}

//Attempt to access static property and method directly
echo HelloClass::$greeting; //Output : Hello, world!
HelloClass::sayHello(); // Hello, world!

//Attempt to access static property and method via object
$hello = new HelloClass;
echo $hello->greeting; // strict warning
$hello->sayHello(); // Hello, world


?>



<p>The keyword <code>self</code> in the above example means "the current class". It is never preceded by a dollar sign (<code>$</code>) and always followed by the <code>::</code> operator (e.g. <code>self::$name</code>).</p>
				<p>The <code>self</code> keyword is different from the <code>this</code> keyword which means "the current object" or&nbsp; "the current instance of a class". The <code>this</code> keyword is always preceded by a dollar sign (<code>$</code>) and followed by the <code>-&gt;</code> operator (e.g. <code>$this-&gt;name</code>).</p>
				

<p class="notes"> <strong>Note:</strong> Since static methods can be called without an instance of a class (i.e. object), the pseudo-variable <code>$this</code> is not available inside the method declared as static.</p>


<br>
<br>

<hr>

<h4>PHP Magic Constants</h4>
<h5>What is Magic Constants</h5>
<p>PHP moreover also provide a set of special predefined constants that change depending on where they are used. These constants are called magic constants. For example, the value of <code>__LINE__</code> depends on the line that it's used on in your script.</p>

<p>Magic constants begin with two underscores and end with two underscores. The following section describes some of the most useful magical PHP constants.</p>

<h5>__LINE__</h5>
<p>The <code>__LINE__</code> constant returns the current line number of the file, like this:</p>

<h5 class="example">Example</h5>
<?php
    echo "Line number " . __LINE__ . "<br>";
    echo "Line number " . __LINE__ . "<br>";
    echo "Line number " . __LINE__ . "<br>";
    echo "Line number " . __LINE__ . "<br>";
    echo "Line number " . __LINE__ . "<br>";

?>

<br>
<br>

<h5>__FILE__</h5>
<p>The <code>__FILE__</code> constant returns full path and name of the PHP file that's being executed. If used inside an include, the name of the included file is returned.</p>

<h5 class="example">Example</h5>

<?php 

echo "The full path of this file : " . __FILE__;

?>


<br>
<br>

<h5>__DIR__</h5>
<p>The  <code>__DIR__</code> constant returns the directory of the file. If used inside an include, the directory of the included file is returned.</p>
<h5 class="example">Example</h5>

<?php 

echo "The full path of this file : " . __DIR__;

?>

<br>
<br>

<h5>__FUNCTION__</h5>
<p>The <code>__FUNCTION__</code> constant returns the name of the current function.</p>


<h5 class="example">Example</h5>

<?php 
function testFunction(){
    echo "The function name is : " . __FUNCTION__;
}
testFunction();// Displays: The function name is - testFunction


?>
<br>
<br>

<h5>__CLASS__</h5>

<p>The <code>__CLASS__</code> constant returns the name of the current class.</p>

<h5 class="example">Example</h5>

<?php 
class SampleClass{
    public function getClassName(){
        return __CLASS__;
    }

}

$obj = new SampleClass();
echo $obj->getClassName();
?>

<br>
<br>

<h5>__METHOD__</h5>
<p>The <code>__METHOD__</code> constant returns the name of the current class method.</p>
<h5 class="example">Example</h5>

<?php 

class Sample2{
        public function myMethod(){
            echo __METHOD__;
        }


}
$obj = new Sample2();
$obj->myMethod();


?>
<br>
<br>

<h5>__NAMESPACE__</h5>
<p>The <code>__NAMESPACE__</code> constant returns the name of the current namespace.</p>


<h5 class="example">Example</h5>

<?php

class MyClasss
{
    public function getNamespace(){
        return __NAMESPACE__;
    }
}
$obj = new MyClasss();
echo $obj->getNamespace(); // Displays: MyNamespace
?>


<br>
<br>

<hr>
<h4>PHP JSON Parsing</h4>
<h5>What is JSON</h5>

<p>JSON stands for <b>J</b>ava<b>S</b>cript <b>O</b>bject <b>N</b>otation. JSON is a standard lightweight data-interchange format which is quick and easy to parse and generate.</p>
				<p>JSON, like XML, is a text-based format that's easy to write and easy to understand for both humans and computers, but unlike XML, JSON data structures occupy less bandwidth than their XML versions. JSON is based on two basic structures:</p>
				<ul>
					<li><strong>Object:</strong> This is defined as a collection of key/value pairs (i.e. <code>key:value</code>). Each object begins with a left curly bracket <code>{</code> and ends with a right curly bracket <code>}</code>. Multiple key/value pairs are separated by a comma <code>,</code>.</li>
					<li><strong>Array:</strong> This is defined as an ordered list of values. An array begins with a left bracket <code>[</code> and ends with a right bracket <code>]</code>. Values are separated by a comma <code>,</code>.</li>
				</ul>
				<p>In JSON, keys are always strings, while the value can be a <code class="plain"><b>string</b></code>,  <code class="plain"><b>number</b></code>, <code class="plain"><b>true</b></code> or <code class="plain"><b>false</b></code>, <code class="plain"><b>null</b></code> or even an <code class="plain"><b>object</b></code> or an <code class="plain"><b>array</b></code>. Strings must be enclosed in double quotes <code>"</code> and can contain escape characters such as <code>\n</code>, <code>\t</code> and <code>\</code>. A JSON object may look like this:</p>
				<!--Code box-->

<br>
<h5 class="example">Example</h5>

<p> <a href="test.JSON" target="_blank">Click</a> for json example</p>

<p>Whereas an example of JSON array would look something like this:</p>

{ <br>
    "fruits": [<br>
        "Apple",<br>
        "Banana",<br>
        "Strawberry",<br>
        "Mango"<br>
    ]<br>
}


<br>
<br>
<p class="tip"><strong>Tip:</strong> A data-interchange format is a text format which is used to interchange or exchange data between different platforms and operating systems. JSON is the most popular and lightweight data-interchange format for web applications.</p>

<h5>Parsing JSON with PHP</h5>
<p>JSON data structures are very similar to PHP arrays. PHP has built-in functions to encode and decode JSON data. These functions are <code>json_encode()</code> and <code>json_decode()</code>, respectively. Both functions only works with UTF-8 encoded string data.</p>

<h5>Encoding JSON Data in PHP</h5>
<p>In PHP the <code>json_encode()</code> function is used to encode a value to JSON format. The value being encoded can be any PHP data type except a resource, like a database or file handle. </p>

<h5 class="example">Example</h5>

<?php 
// An associative array

$marks = array(
"Peter"=>65,
"Harry"=>80,
"John"=>87,
"Simon"=>59
);


echo json_encode($marks);

?>

<br>
<br>


<p>Similarly, you can encode the PHP indexed array into a JSON array, like this:</p>

<h5 class="example">Example</h5>


<?php 

$colors = array("Cyan", "Magenta", "Yellow", "Black");

echo json_encode($colors);

?>

<br>
<br>

<p>You can also force <code>json_encode()</code> function to return an PHP indexed array as JSON object by using the JSON_FORCE_OBJECT option, as shown in the example below:</p>

<h5 class="example">Example</h5>
<?php
// An indexed array
$colors = array("Red", "Green", "Blue", "Orange");
 
echo json_encode($colors, JSON_FORCE_OBJECT);
?>

<br>
<br>

<p>As you can see in the above examples a non-associative array can be encoded as array or object. However, an associative array always encoded as object.</p>


<h5>Decoding JSON Data in PHP</h5>
<p>Decoding JSON data is as simple as encoding it. You can use the PHP <code>json_decode()</code> function to convert the JSON encoded string into appropriate PHP data type. The following example demonstrates how to decode or convert a JSON object to PHP object.</p>

<h5 class="example">Example</h5>

<?php
// Store JSON data in a PHP variable
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
 
var_dump(json_decode($json));
?>

<br>
<br>


<p>By default the <code>json_decode()</code> function returns an object. However, you can optionally specify a second parameter <code class="plain"><b>$assoc</b></code> which accepts a boolean value that when set as <code>true</code> JSON objects are decoded into associative arrays. It is <code>false</code> by default. Here's an example:</p>

<h5 class="example">Example</h5>

<?php 
//Store JSON data in a PHP variable

$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';

var_dump(json_decode($json, true)); 

?>
<br>
<br>

<p>Now let's check out an example that will show you how to decode the JSON data and access individual elements of the JSON object or array in PHP.</p>
<h5 class="example">Example</h5>

<?php
// Assign JSON encoded string to a PHP variable
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
 
// Decode JSON data to PHP associative array
$arr = json_decode($json, true);
// Access values from the associative array
echo $arr["Peter"] . "<br>";  // Output: 65
echo $arr["Harry"] . "<br>";  // Output: 80
echo $arr["John"] . "<br>";   // Output: 78
echo $arr["Clark"] . "<br><br>";  // Output: 90
 
// Decode JSON data to PHP object
$obj = json_decode($json);
// Access values from the returned object
echo $obj->Peter . "<br>";   // Output: 65
echo $obj->Harry . "<br>";   // Output: 80
echo $obj->John . "<br>";    // Output: 78
echo $obj->Clark;   // Output: 90
?>

<br>
<br>

<p>You can also loop through the decoded data using <code>foreach()</code> loop, like this:</p>

<h5 class="example">Example</h5>


<?php 
// Assign JSON encoded string to a PHP variable
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';

//Decode JSON data to PHP associative array
$arr = json_decode($json, true);

//Loop through the associative array
foreach($arr as $key=>$value){
        echo $key . "=>" . $value . "<br>";
}

echo ".....................................<br>";

//Decode JSON data to php object
$obj = json_decode($json);

//Loop through the object
foreach($obj as $key=>$value){
        echo $key . "=>" . $value . "<br>";
}


?>

<br>
<br>

<h5>Extracting Values from Nested JSON Data in PHP</h5>

<p>JSON objects and arrays can also be nested. A JSON object can arbitrarily contains other JSON objects, arrays, nested arrays, arrays of JSON objects, and so on. The following example will show you how to decode a nested JSON object and print all its values in PHP.</p>

<h5 class="example">Example</h5>

<?php
// Define recursive function to extract nested values
function printValues2($arr) {
    global $count;
    global $values;
    
    // Check input is an array
    if(!is_array($arr)){
        die("ERROR: Input is not an array");
    }
    
    /*
    Loop through array, if value is itself an array recursively call the
    function else add the value found to the output items array,
    and increment counter by 1 for each value found
    */
    foreach($arr as $key=>$value){
        if(is_array($value)){
            printValues2($value);
        } else{
            $values[] = $value;
            $count++;
        }
    }
    
    // Return total count and values found in array
    return array('total' => $count, 'values' => $values);
}
 
// Assign JSON encoded string to a PHP variable
$json = '{
    "book": {
        "name": "Harry Potter and the Goblet of Fire",
        "author": "J. K. Rowling",
        "year": 2000,
        "characters": ["Harry Potter", "Hermione Granger", "Ron Weasley"],
        "genre": "Fantasy Fiction",
        "price": {
            "paperback": "$10.40", "hardcover": "$20.32", "kindle": "4.11"
        }
    }
}';
// Decode JSON data into PHP associative array format
$arr = json_decode($json, true);
 
// Call the function and print all the values
$result = printValues2($arr);
echo "<h3>" . $result["total"] . " value(s) found: </h3>";
echo implode("<br>", $result["values"]);
 
echo "<hr>";
 
// Print a single value
echo $arr["book"]["author"] . "<br>";  // Output: J. K. Rowling
echo $arr["book"]["characters"][0] . "<br>";  // Output: Harry Potter
echo $arr["book"]["price"]["hardcover"] . "<br>";  // Output: $20.32
?>


<br>
<br>

<hr>

<h4>PHP Regular Expressions</h4>

<h5>What is Regular Expression</h5>

<p>Regular Expressions, commonly known as "<strong>regex</strong>" or "<strong>RegExp</strong>", are a specially formatted text strings used to find patterns in text. Regular expressions are one of the most powerful tools available today for effective and efficient text processing and manipulations. For example, it can be used to verify whether the format of data i.e. name, email, phone number, etc. entered by the user was correct or not, find or replace matching string within text content, and so on.</p>
				<p>PHP (version 5.3 and above) supports Perl style regular expressions via its <code>preg_</code> family of functions. Why Perl style regular expressions? Because Perl (<em>Practical Extraction and Report Language</em>) was the first mainstream programming language that provided integrated support for regular expressions and it is well known for its strong support of regular expressions and its extraordinary text processing and manipulation capabilities.</p>
				<p>Let's begin with a brief overview of the commonly used PHP's built-in pattern-matching functions before delving deep into the world of regular expressions.</p>
				<div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Function</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>preg_match()</code></td>
								<td>Perform a regular expression match.</td>
							</tr>
							<tr>
								<td><code>preg_match_all</code></td>
								<td>Perform a global regular expression match.</td>
							</tr>							
							<tr>
								<td><code>preg_replace()</code></td>
								<td>Perform a regular expression search and replace.</td>
							</tr>
							<tr>
								<td><code>preg_grep()</code></td>
								<td>Returns the elements of the input array that matched the pattern.</td>
							</tr>
							<tr>
								<td><code>preg_split()</code></td>
								<td>Splits up a string into substrings using a regular expression.</td>
							</tr>
							<tr>
								<td><code>preg_quote()</code></td>
								<td>Quote regular expression characters found within a string.</td>
							</tr>
						</tbody>
					</table>
				</div>


<p class="notes"><strong>Note:</strong> The PHP <code>preg_match()</code> function stops searching after it finds the first match, whereas the <code>preg_match_all()</code> function continues searching until the end of the string and find all possible matches instead of stopping at the first match.</p>

<h5>Regular Expression Syntax</h5>

<p>Square brackets surrounding a pattern of characters are called a character class e.g. <code>[abc]</code>. A character class always matches a single character out of a list of specified characters that means the expression <code>[abc]</code> matches only a, b or c character.</p>
				<p>Negated character classes can also be defined that match any character except those contained within the brackets. A negated character class is defined by placing a caret (<code>^</code>) symbol immediately after the opening bracket, like this <code>[^abc]</code>.</p>
				<p>You can also define a range of characters by using the hyphen (<code>-</code>) character inside a character class, like <code>[0-9]</code>. Let's look at some examples of character classes:</p>
                
                <div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>RegExp</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>[abc]</code></td>
								<td>Matches any one of the characters a, b, or c.</td>
							</tr>
							<tr>
								<td><code>[^abc]</code></td>
								<td>Matches any one character other than a, b, or c.</td>
							</tr>
							<tr>
								<td><code>[a-z]</code></td>
								<td>Matches any one character from lowercase a to lowercase z.</td>
							</tr>
							<tr>
								<td><code>[A-Z]</code></td>
								<td>Matches any one character from uppercase a to uppercase z.</td>
							</tr>
							<tr>
								<td><code>[a-Z]</code></td>
								<td>Matches any one character from lowercase a to uppercase Z.</td>
							</tr>
							<tr>
								<td><code>[0-9]</code></td>
								<td>Matches a single digit between 0 and 9.</td>
							</tr>
							<tr>
								<td><code>[a-z0-9]</code></td>
								<td>Matches a single character between a and z or between 0 and 9.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<p>The following example will show you how to find whether a pattern exists in a string or not using the regular expression and PHP <code>preg_match()</code> function:</p>

<h5 class="example">Example</h5>

<?php 
$pattern = "/ca[kf]e/";

$text = "He was eating cake in the cafe.";

if (preg_match($pattern, $text)) {
 echo "Match found";
} else {
    echo "No Match found";
}

?>

<br>
<br>

<p>Similarly, you can use the <code>preg_match_all()</code> function to find all matches within a string:</p>
<h5 class="example">Example</h5>
<?php
$pattern = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found.";
?>


<br>
<br>

<p class="tip"> <code>Tip:</code> Regular expressions aren't exclusive to PHP. Languages such as Java, Perl, Python, etc. use the same notation for finding patterns in text.</p>

<h5>Predefined Character Classes</h5>
				<p>Some character classes such as digits, letters, and whitespaces are used so frequently that there are shortcut names for them. The following table lists those predefined character classes:</p>
				<div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th style="width: 60px;">Shortcut</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>.</code></td>
								<td>Matches any single character except newline <code>\n</code>.</td>
							</tr>
							<tr>
								<td><code>\d</code></td>
								<td>matches any digit character. Same as <code>[0-9]</code></td>
							</tr>
							<tr>
								<td><code>\D</code></td>
								<td>Matches any non-digit character. Same as <code>[^0-9]</code></td>
							</tr>
							<tr>
								<td><code>\s</code></td>
								<td>Matches any whitespace character (space, tab, newline or carriage return character). Same as <code>[ \t\n\r]</code></td>
							</tr>
							<tr>
								<td><code>\S</code></td>
								<td>Matches any non-whitespace character. Same as <code>[^ \t\n\r]</code></td>
							</tr>
							<tr>
								<td><code>\w</code></td>
								<td>Matches any word character (definned as a to z, A to Z,0 to 9, and the underscore). Same as <code>[a-zA-Z_0-9]</code></td>
							</tr>
							<tr>
								<td><code>\W</code></td>
								<td>Matches any non-word character. Same as <code>[^a-zA-Z_0-9]</code></td>
							</tr>
						</tbody>
					</table>
				</div>


<p>The following example will show you how to find and replace space with a hyphen character in a string using regular expression and PHP <code>preg_replace()</code> function:</p>


<h5 class="example">Example</h5>

<?php

$pattern = "/\s/";
$replacement = "-";
$text = "Earth revolves around\nthe\tSun";

//Replace spaces, newlines and tabs

echo preg_replace($pattern, $replacement, $text);
echo "<br>";

//Replace only spaces

echo str_replace(" ", "-", $text);

?>


<br>
<br>

<h5>Repetition Quantifiers</h5>
<p>In the previous section we've learnt how to match a single character in a variety of fashions. But what if you want to match on more than one character? For example, let's say you want to find out words containing one or more instances of the letter p, or words containing at least two p's, and so on. This is where quantifiers come into play. With quantifiers you can specify how many times a character in a regular expression should match.</p>

<p>The following table lists the various ways to quantify a particular pattern:</p>


<div>
<table class="table table-bordered">
						<thead>
							<tr>
								<th style="width: 80px;">RegExp</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>p+</code></td>
								<td>Matches one or more occurrences of the letter p.</td>
							</tr>
							<tr>
								<td><code>p*</code></td>
								<td>Matches zero or more occurrences of the letter p.</td>
							</tr>
							<tr>
								<td><code>p?</code></td>
								<td>Matches zero or one occurrences of the letter p.</td>
							</tr>
							<tr>
								<td><code>p{2}</code></td>
								<td>Matches exactly two occurrences of the letter p.</td>
							</tr>
							<tr>
								<td><code>p{2,3}</code></td>
								<td>Matches at least two occurrences of the letter p, but not more than three occurrences of the letter p.</td></tr>
							<tr>
								<td><code>p{2,}</code></td>
								<td>Matches two or more occurrences of the letter p.</td>
							</tr>
							<tr>
								<td><code>p{,3}</code></td>
								<td>Matches at most three occurrences of the letter p</td>
							</tr>
						</tbody>
					</table>

</div>



<p>The regular expression in the following example will splits the string at comma, sequence of commas, whitespace, or combination thereof using the PHP <code>preg_split()</code> function:</p>

<h5 class="example">Example</h5>

<?php 
$pattern = "/[\s,]+/";
$text = "My favourite colors are red, green and blue";
$parts = preg_split($pattern, $text);

// Loop through parts array and display substrings
foreach($parts as $part){
        echo $part . "<br>";
}

?>

<br>
<br>

<h5>Position Anchors</h5>
<p>There are certain situations where you want to match at the beginning or end of a line, word, or string. To do this you can use anchors. Two common anchors are caret (<code>^</code>) which represent the start of the string, and the dollar (<code>$</code>) sign which represent the end of the string.</p>
				<div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>RegExp</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>^p</code></td>
								<td>Matches the letter p at the beginning of a line.</td>
							</tr>
							<tr>
								<td><code>p$</code></td>
								<td>Matches the letter p at the end of a line.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<p>The regular expression in the following example will display only those names from the names array which start with the letter "J" using the PHP <code>preg_grep()</code> function:</p>
				<!--Code box-->


<h5 class="example">Example</h5>
<?php
$pattern = "/^J/";
$names = array("Jhon Carter", "Clark Kent", "John Rambo");
$matches = preg_grep($pattern, $names);
 
// Loop through matches array and display matched names
foreach($matches as $match){
    echo $match . "<br>";
}
?>

<br>
<br>

<h5>Pattern Modifiers</h5>
				<p>A pattern modifier allows you to control the way a pattern match is handled. Pattern modifiers are placed directly after the regular expression, for example, if you want to search for a pattern in a case-insensitive manner, you can use the <code>i</code> modifier, like this: <code>/pattern/i</code>. The following table lists some of the most commonly used pattern modifiers.</p>
				<div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Modifier</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>i</code></td>
								<td>Makes the match case-insensitive manner.</td>
							</tr>
							<tr>
								<td><code>m</code></td>
								<td>Changes the behavior of <code>^</code> and <code>$</code> to match against a newline boundary (i.e. start or end of each line within a multiline string), instead of a string boundary.</td>
							</tr>
							<tr>
								<td><code>g</code></td>
								<td>Perform a global match i.e. finds all occurrences.</td>
							</tr>
							<tr>
								<td><code>o</code></td>
								<td>Evaluates the expression only once.</td>
							</tr>
							<tr>
								<td><code>s</code></td>
								<td>Changes the behavior of <code>.</code> (dot) to match all characters, including newlines.</td>
							</tr>
							<tr>
								<td><code>x</code></td>
								<td>Allows you to use whitespace and comments within a regular expression for clarity.</td>
							</tr>
						</tbody>
					</table>
				</div>				
				<p>The following example will show you how to perform a global case-insensitive search using the <code>i</code> modifier and the PHP <code>preg_match_all()</code> function.</p>



<h5 class="example">Example</h5>

<?php
$pattern = "/color/i";
$text = "Color red is more visible than color blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found."
?>

<br>
<br>

<p>Similarly, the following example shows how to match at the beginning of every line in a multi-line string using ^ anchor and m modifier with PHP <code>preg_match_all()</code> function.</p>

<h5 class="example">Example</h5>
<?php
$pattern = "/^color/im";
$text = "Color red is more visible than \ncolor blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found."
?>
<br>
<br>

<h5>Word Boundaries</h5>
<p>A word boundary character ( <code>\b</code>) helps you search for the words that begins and/or ends with a pattern. For example, the regexp <code>/\bcar/</code> matches the words beginning with the pattern car, and would match cart, carrot, or cartoon, but would not match oscar.</p>

<p>Similarly, the regexp <code>/car\b/</code> matches the words ending with the pattern car, and would match scar, oscar, or supercar, but would not match cart. Likewise, the <code>/\bcar\b/</code> matches the words beginning and ending with the pattern car, and would match only the word car.</p>


<h5 class="example">Example</h5>

<?php
$pattern = '/\bcar\w*/';
$replacement = '<b>$0</b>';
$text = 'Words begining with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.';
echo preg_replace($pattern, $replacement, $text);
?>


<br>
<br>
<br>

<hr>

<h4>PHP Exception Handling</h4>
<h5>What is an Exception</h5>

<p>An exception is a signal that indicates some sort of exceptional event or error has occurred. Exceptions can be caused due to various reasons, for example, database connection or query fails, file that you're trying to access doesn't exist, and so on.</p>

<p>PHP provides a powerful exception handling mechanism that allows you to handle exceptions in a graceful way. As opposed to PHP's traditional error-handling system, exception handling is the object-oriented method for handling errors, which provides more controlled and flexible form of error reporting. Exception model was first introduced in PHP 5.</p>


<h5>Using Throw and Try...Catch Statements</h5>

<p>In exception-based approach, program code is written in a <code>try</code>block, an exception can be thrown using the <code>throw</code> statement when an exceptional event occurs during the execution of code in a <code>try</code> block. It is then caught and resolved by one or more <code>catch</code> blocks.</p>


<h5 class="example">Example</h5>

<?php
function division($dividend, $divisor){
    // Throw exception if divisor is zero
    if($divisor == 0){
        throw new Exception('Division by zero.');
    } else{
        $quotient = $dividend / $divisor;
        echo "<p>$dividend / $divisor = $quotient</p>";
    }
}
 
try{
    division(10, 2);
    division(30, -4);
    division(15, 0);
    
    // If exception is thrown following line won't execute
    echo '<p>All divisions performed successfully.</p>';
} catch(Exception $e){
    // Handle the exception
    echo "<p>Caught exception: " . $e->getMessage() . "</p>";
}
 
// Continue execution
echo "<p>Hello World!</p>";
?>

<br>

<h5>Explanation of Code</h5>
<p>The PHP's exception handling system has basically four parts: <code>try</code>, <code>throw</code>, <code>catch</code>, and the Exception class. The following list describes how each part exactly works.</p>
				<ul>
					<li>The <code>division()</code> function in the example above checks if a divisor is equal to zero. If it is, an exception is thrown via PHP's <code>throw</code> statement. Otherwise this function perform the division using given numbers and display the result.</li>
					<li>Later, the <code>division()</code> function is called within a <code>try</code> block with different arguments. If an exception is generated while executing the code within the <code>try</code> block, PHP stops execution at that point and attempt to find the corresponding <code>catch</code> block. If it is found, the code within that <code>catch</code> block is executed, if not, a fatal error is generated.</li>
					<li>The <code>catch</code> block typically catch the exception thrown within the <code>try</code> block and creates an object (<code>$e</code>) containing the exception information. The error message from this object can be retrieved using the Exception's <code>getMessage()</code> method.</li>
				</ul>
				<p>The PHP's Exception class also provides <code>getCode()</code>, <code>getFile()</code>, <code>getLine()</code> and <code>getTraceAsString()</code> methods that can be used to generate detailed debugging information.</p>
                

<br>

<h5 class="example">Example</h5>
<?php
// Turn off default error reporting
error_reporting(0);
 
try{
    $file = "somefile.txt";
    
    // Attempt to open the file
    $handle = fopen($file, "r");
    if(!$handle){
        throw new Exception("Cannot open the file!", 5);
    }
    
    // Attempt to read the file contents
    $content = fread($handle, filesize($file));
    if(!$content){
        throw new Exception("Could not read file!", 10);
    }
    
    // Closing the file handle
    fclose($handle);
    
    // Display file contents
    echo $content;
} catch(Exception $e){
    echo "<h6>Caught Exception!</h6>";
    echo "<p>Error message: " . $e->getMessage() . "</p>";    
    echo "<p>File: " . $e->getFile() . "</p>";
    echo "<p>Line: " . $e->getLine() . "</p>";
    echo "<p>Error code: " . $e->getCode() . "</p>";
    echo "<p>Trace: " . $e->getTraceAsString() . "</p>";
}
?>

<br>
<br>


<p>The Exception's constructor optionally takes an exception message and an exception code. While the exception message is typically used to display generic information on what went wrong, the exception code can be used to categorize the errors. The exception code provided can be retrieved later via Exception's <code>getCode()</code> method.</p>

<p class="tip"><strong>Tip:</strong> Exception should only be used to denote exceptional conditions; they should not be used to control normal application flow e.g., jump to another place in the script at a particular point. Doing that would adversely affect your application's performance.
</p>

<h5>Defining Custom Exceptions</h5>
<p>You can even define your own custom exception handlers to treat different types of exceptions in a different way. It allows you to use a separate <code>catch</code> block for each exception type.</p>

<p>You can define a custom exception by extending the Exception class, because Exception is the base class for all exceptions. The custom exception class inherits all the properties and methods from PHP's Exception class. You can also add your custom methods to the custom exception class. Let's check out the following example:</p>

<h5 class="example">Example</h5>
<?php
// Extending the Exception class
class EmptyEmailException extends Exception {}
class InvalidEmailException extends Exception {}
 
$email = "someuser@example..com";
 
try{
    // Throw exception if email is empty
    if($email == ""){
        throw new EmptyEmailException("<p>Please enter your E-mail address!</p>");
    }
    
    // Throw exception if email is not valid
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {           
        throw new InvalidEmailException("<p><b>$email</b> is not a valid E-mail address!</p>");
    }
    
    // Display success message if email is valid
    echo "<p>SUCCESS: Email validation successful.</p>";
} catch(EmptyEmailException $e){
    echo $e->getMessage();
} catch(InvalidEmailException $e){
    echo $e->getMessage();
}
?>


<p>In the above example we've derived two new exception classes:<strong> EmptyEmailException</strong>, and <strong>InvalidEmailException</strong> from the Exception base class. Multiple catch blocks are used to display different error messages, depending on the type of exception generated.</p>

<p>Since these custom exception classes inherits the properties and methods from the Exception class, so we can use the Exception's class methods like <code>getMessage()</code>, <code>getLine()</code>, <code>getFile()</code>, etc. to retrieve error information from the exception object.</p>

<h5>Setting a Global Exception Handler</h5>
<p>As we've discussed earlier in this chapter if an exception is not caught, PHP generates a Fatal Error with an "Uncaught Exception ..." message. This error message may contain sensitive information like file name and line number where the problem occurs. If you don't want to expose such information to the user, you can create a custom function and register it with the <code>set_exception_handler()</code> function to handle all uncaught exceptions.</p>


<h5 class="example">Example</h5>

<p><a href="global_exception.php" target="_blank">Click</a> here for Example</p>


<p class="tip"><strong>Note:</strong> An uncaught exception will always result in script termination. So if you want the script to continue executing beyond the point where the exception occurred, you must have have at least one corresponding catch block for each try block.</p>


<br>
<br>

<hr>

<h4>PHP MySQL Introduction</h4>

<h5>What is MySQL</h5>
<p>MySQL is one of the most popular relational database system being used on the Web today. It is freely available and easy to install, however if you have installed Wampserver it already there on your machine. MySQL database server offers several advantages:</p>
                <ul>
                    <li>MySQL is easy to use, yet extremely powerful, fast, secure, and scalable.</li>
                    <li>MySQL runs on a wide range of operating systems, including UNIX or Linux, Microsoft Windows, Apple Mac OS X, and others.</li>
                    <li>MySQL supports standard SQL (Structured Query Language).</li>
                    <li>MySQL is ideal database solution for both small and large applications.</li>
                    <li>MySQL is developed, and distributed by Oracle Corporation.</li>
                    <li>MySQL includes data security layers that protect sensitive data from intruders.</li>
                </ul>
                <p>MySQL database stores data into tables like other relational database. A table is a collection of related data, and it is divided into rows and columns.</p>
                <p class="break">Each row in a table represents a data record that are inherently connected to each other such as information related to a particular person, whereas each column represents a specific field such as <i>id</i>, <i>first_name</i>, <i>last_name</i>, <i>email</i>, etc. The structure of a simple MySQL table that contains person's general information may look something like this:</p>
<pre>
+----+------------+-----------+----------------------+
| id | first_name | last_name | email                |
+----+------------+-----------+----------------------+
|  1 | Peter      | Parker    | peterparker@mail.com |
|  2 | John       | Rambo     | johnrambo@mail.com   |
|  3 | Clark      | Kent      | clarkkent@mail.com   |
|  4 | John       | Carter    | johncarter@mail.com  |
|  5 | Harry      | Potter    | harrypotter@mail.com |
+----+------------+-----------+----------------------+
</pre>

<p class="tip"><strong>Tip:</strong> Websites like Facebook, Twitter, Wikipedia uses MySQL for their storage need. So you can easily understand what MySQL is capable of.</p>

<h5>Talking to MySQL Databases with SQL</h5>
<p>SQL, the Structured Query Language, is a simple, standardized language for communicating with relational databases like MySQL. With SQL you can perform any database-related task, such as creating databases and tables, saving data in database tables, query a database for specific records, deleting and updating data in databases.</p>

<p>Look at the following standard SQL query that returns the email address of a person whose first name is equal to 'Peter' in the <i>persons</i> table:</p>
                <div class="shadow">
                    <div class="syntax"><span class="keyword">SELECT</span> email <span class="keyword">FROM</span> persons <span class="keyword">WHERE</span> first_name="Peter"</div>
                </div>
                <p>If you execute the SQL query above it will return the following record:</p>
                <div class="output-box">
                    peterparker@mail.com
                </div>


<br>

<hr>

<h4>PHP Connect to MySQL Server</h4>
<h5>Ways of Connecting to MySQL through PHP</h5>

<p>In order to store or access the data inside a MySQL database, you first need to connect to the MySQL database server. PHP offers two different ways to connect to MySQL server: <strong>MySQLi</strong> (Improved MySQL) and <strong>PDO</strong> (PHP Data Objects) extensions.</p>
				<p>While the PDO extension is more portable and supports more than twelve different databases, MySQLi extension as the name suggests supports MySQL database only. MySQLi extension however provides an easier way to connect to, and execute queries on, a MySQL database server. Both PDO and MySQLi offer an object-oriented API, but MySQLi also offers a procedural API which is relatively easy for beginners to understand.</p>
				<!--Tip Box-->




<p class="tip"><strong>Tip:</strong> The PHP's MySQLi extension provides both speed and feature benefits over the PDO extension, so it could be a better choice for MySQL-specific projects.</p>

<hr>

<h5>Connecting to MySQL Database Server</h5>
<p>In PHP you can easily do this using the <code>mysqli_connect()</code> function. All communication between PHP and the MySQL database server takes place through this connection. Here're the basic syntaxes for connecting to MySQL using MySQLi and PDO extensions:</p>


<p><strong>Syntax: MySQLi, Procedural way</strong></p>
<p class="codebox"> $link = <code>mysqli_connect</code>("hostname", "username", "password", "database"); </p>

<p><strong>Syntax: MySQLi, Object Oriented way</strong></p>
<p class="codebox"> $mysqli = <code>new mysqli</code>("hostname", "username", "password", "database"); </p>

<p><strong>Syntax: PHP Data Objects (PDO) way</strong></p>
<p class="codebox">$pdo =<code>new PDO</code>("mysql:host=hostname;dbname=database", "username", "password"); </p>


<p>The hostname parameter in the above syntax specify the host name (e.g. <code>localhost</code>), or IP address of the MySQL server, whereas the username and password parameters specifies the credentials to access MySQL server, and the database parameter, if provided will specify the default MySQL database to be used when performing queries.</p>

<p>The following example shows how to connect to MySQL database server using MySQLi (both procedural and object oriented way) and PDO extension.</p>


<h5 class="example">Example</h5>

<?php 
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$conn = mysqli_connect("localhost", "ganesh", "Ganesh$1", "global");

//Check connection

if ($conn === false) {
        die("ERROR: Could not connect." . mysqli_connect_error());
}

//Print host information

echo "Connected Successfully. Host info : " . mysqli_get_host_info($link);



?>


<br>
<br>

<h5>Closing the MySQL Database Server Connection</h5>

<p>The connection to the MySQL database server will be closed automatically as soon as the execution of the script ends. However, if you want to close it earlier you can do this by simply calling the PHP <code>mysqli_close()</code> function.</p>

<h5 class="example">Example</h5>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
 
// Close connection
mysqli_close($link);
?>
<br>
<br>

<h5>Object Oriented MySQL Connection</h5>

<h5 class="example">Example</h5>
<?php 

$mysqli = new mysqli("localhost", "root", "", "global");

//Check connection

if ($mysqli === false) {
        die("Error: Could not connect. " . $mysqli->connect_error);
}
//Print host information

echo "Object Oriented DB Connection successful . Host info: " . $mysqli->host_info;


//Close connection

$mysqli->close();


?>



<br>
<br>

<hr>

<h4>PHP MySQL Create Database</h4>

<h5>Creating MySQL Database Using PHP</h5>

<p>Now that you've understood how to open a connection to the MySQL database server. In this tutorial you will learn how to execute SQL query to create a database.</p>
				<p>Before saving or accessing the data, we need to create a database first. The <a href="https://www.tutorialrepublic.com/sql-tutorial/sql-create-database-statement.php" target="_blank"><code>CREATE DATABASE</code></a> statement is used to create a new database in MySQL.</p>
                <p>Let's make a SQL query using the <code>CREATE DATABASE</code> statement, after that we will execute this SQL query through passing it to the PHP <code>mysqli_query()</code> function to finally create our database. The following example creates a database named <i>demo</i>.</p>


<h5 class="example">Example</h5>

<?php 
//create server connection with server details
$conn = mysqli_connect("localhost", "root", "");


//Check connection
if($conn === false){
        die("Error: Could not connect . " .  mysqli_connect_error());
}


//Attempt to create database query execution

$sql = "CREATE DATABASE employees";

if(mysqli_query($conn, $sql)){
    echo "Database created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql." . mysqli_error($conn);
}


//Close connection

mysqli_close($conn);


?>

<br>
<br>

<h5>Using Object Oriented - Create Database</h5>
<h5 class="example">Example</h5>

<?php
$mysqli = new mysqli("localhost", "root", "");


//Check connection
if ($mysqli === false) {
        die("ERROR: Colud not connect. " . $mysqli->connect_error);
}


//Attempt to create database query execution
$sql = "CREATE DATABASE demo";

if($mysqli->query($sql) === true){
        echo "Database created OK.";
} else{
    echo "ERROR: Could not able to execute $sql." . $mysqli->error;
}


//close connection
$mysqli->close();


?>

<br>
<br>

<hr>
<h4>PHP MySQL Create Tables</h4>
<h5>Creating Tables inside MySQL Database Using PHP</h5>

<p>In the previous chapter we've learned how to create a database on MySQL server. Now it's time to create some tables inside the database that will actually hold the data. A table organizes the information into rows and columns.</p>
				<p>The SQL <a href="https://www.tutorialrepublic.com/sql-tutorial/sql-create-table-statement.php" target="_blank"><code>CREATE TABLE</code></a> statement is used to create a table in database.</p>
				<p>Let's make a SQL query using the <code>CREATE TABLE</code> statement, after that we will execute this SQL query through passing it to the PHP <code>mysqli_query()</code> function to finally create our table.</p>


<h5 class="example">Example</h5>

<?php 

//Server Connection

$conn = mysqli_connect("localhost", "root", "", "tppl");

//Check connection

if ($conn === false) {
    die("ERROR : Could not connect db server . " . mysqli_connect_error());
} 

// Attempt to create table query execution

$sql = "CREATE TABLE users(
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(200) NOT NULL,
    password VARCHAR(50) NOT NULL,
    center VARCHAR(100) NOT NULL,
    created_on DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
)";

if(mysqli_query($conn, $sql)){
    echo "Table Created Successfully";
} else{
    echo "ERROR: Could not able to execute query. " . mysqli_error($conn);
}

//close connection

mysqli_close($conn);


?>

<br>
<br>

<h5>Object Oriented method</h5>
<h5 class="example">Example</h5>


<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "demo");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt create table query execution
$sql = "CREATE TABLE persons(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE,
    created_on DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
)";
if($mysqli->query($sql) === true){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>
<br>
<br>

<p>The PHP code in the above example creates a table named <i>persons</i> with four columns <i>id</i>, <i>first_name</i>, <i>last_name</i> and <i>email</i> inside the <i>demo</i> database.</p>
				<p>Notice that each field name is followed by a data type declaration; this declaration specifies what type of data the column can hold, whether integer, string, date, etc.</p>
				<p>There are a few additional constraints (also called <i>modifiers</i>) that are specified after the column name in the preceding SQL statement, like <code>NOT NULL</code>, <code>PRIMARY KEY</code>, <code>AUTO_INCREMENT</code>, etc. Constraints define rules regarding the values allowed in columns.</p>
				<p>Please check out the tutorial on <a href="https://www.tutorialrepublic.com/sql-tutorial/sql-create-table-statement.php" target="_blank">SQL <code>CREATE TABLE</code> statement</a> for the detailed information about syntax, as well as the data types and constraints available in MySQL database system.</p>
				<!--Note box-->

<p class="notes"><strong>Note:</strong> Any number of line breaks may occur within a SQL statement, provided that any line break does not break off keywords, values, expression, etc.</p>

<br>
<hr>


<h4>PHP MySQL INSERT Query</h4>
<h5>Inserting Data into a MySQL Database Table</h5>

<p>Now that you've understood how to create database and tables in MySQL. In this tutorial you will learn how to execute SQL query to insert records into a table.</p>
				<p>The <a href="https://www.tutorialrepublic.com/sql-tutorial/sql-insert-statement.php" target="_blank"><code>INSERT INTO</code></a> statement is used to insert new rows in a database table.</p>
				<p>Let's make a SQL query using the <code>INSERT INTO</code> statement with appropriate values, after that we will execute this insert query through passing it to the PHP <code>mysqli_query()</code> function to insert data in table. Here's an example, which insert a new row to the <i>persons</i> table by specifying values for the <i>first_name</i>, <i>last_name</i> and <i>email</i> fields.</p>

<h5 class="example">Example</h5>

<?php

//Server connection
$link = mysqli_connect("localhost", "root", "", "demo");

//Check connection
if ($link === false) {
        die("ERROR: Could not connect to DB. " . mysqli_connect_erro());
}


//Attempt to insert data into table query
$sql = "INSERT INTO persons(first_name, last_name, email) VALUES ('Ganesh', 'Vadla', 'ganesh.v@tppl.news')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully";
} else{
    echo "ERROR: Colud not able to execute query $sql" . mysqli_error($link);
}


//Close connection

mysqli_close($link);


?>

<br>
<br>


<h5>Object Oriented method</h5>
<h5 class="example">Example</h5>

<?php

// server connections
$conn = new mysqli("localhost", "ganesh", "Ganesh$1", "demo");

//check connection

if($conn === false){
    die("ERROR: Could not connect db server" . $conn->connect_error);
}


//Attempt to insert data into table :: query

$sql = "INSERT INTO persons(first_name, last_name, email) VALUES ('Yashwin', 'Vadla', 'yashwin_v@outlook.com')";

if($conn->query($sql) === true){
 echo "Record inserted successfully.";
} else{
    echo "ERROR: Colud not able to execute $sql" . $conn->error;
}


//close connection

$conn->close();


?>

<br>
<br>
<p>If you remember from the preceding chapter, the id field was marked with the <code>AUTO_INCREMENT</code> flag. This modifier tells the MySQL to automatically assign a value to this field if it is left unspecified, by incrementing the previous value by 1.</p>

<hr>

<h5>Inserting Multiple Rows into a Table</h5>
<p>You can also insert multiple rows into a table with a single insert query at once. To do this, include multiple lists of column values within the INSERT INTO statement, where column values for each row must be enclosed within parentheses and separated by a comma.</p>


<h5 class="example">Example</h5>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "ganesh", "Ganesh$1", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES
            ('John', 'Rambo', 'johnrambo@mail.com'),
            ('Clark', 'Kent', 'clarkkent@mail.com'),
            ('John', 'Carter', 'johncarter@mail.com'),
            ('Harry', 'Potter', 'harrypotter@mail.com')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<br>
<br>
<hr>
<h5>Insert Data into a Database from an HTML Form</h5>
<p>In the previous section, we have learned how to insert data into database from a PHP script. Now, we'll see how we can insert data into database obtained from an HTML form. Let's create an HTML form that can be used to insert new records to persons table.</p>

<h6><strong>Step 1: Creating the HTML Form</strong></h6>
<br>
<h5 class="example">Example</h5>
<div>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"  class="form-group">

        <p>
            <label for="firstName">First Name :</label>
            <input type="text" name="first_name" id="firstName" class="form-control">
        </p>
        <p>
            <label for="lastName">Last Name:</label>
            <input type="text" name="last_name" id="lastName" class="form-control">
        </p>
        <p>
        <label for="emailAddress">Email Address:</label>
        <input type="email" name="email" id="emailAddress" class="form-control">
    </p>
        <button type="submit" value="submit" class="btn btn-primary">Submit</button>

        <button type="reset" value="reset" class="btn btn-secondary">Reset</button>


    </form>

</div>


<h5>Step 2: Retrieving and Inserting the Form Data</h5>
<p>When a user clicks the submit button of the add record HTML form, in the example above, the form data is sent to <code>'insert.php'</code> file. The 'insert.php' file connects to the MySQL database server, retrieves forms fields using the PHP <code>$_REQUEST</code> variables and finally execute the insert query to add the records.</p>




<?php

//server connection
$conn = mysqli_connect("localhost", "ganesh", "Ganesh$1", "demo");

//check connection
if ($conn === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
}

//Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);


//attempt to insert query execution

$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";

if(mysqli_query($conn, $sql)){
      echo "Records added successfully";
} else{
   echo "ERROR: Colud not able to execute $sql." . mysqli_error($conn) ;
}


//Close connections

mysqli_close($conn);

?>



<br>
<br>

<h5>Object Oriented Method</h5>

<h5 class="example"Example></h5>
<div>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"  class="form-group">

        <p>
            <label for="firstName">First Name :</label>
            <input type="text" name="first_name" id="firstName" class="form-control">
        </p>
        <p>
            <label for="lastName">Last Name:</label>
            <input type="text" name="last_name" id="lastName" class="form-control">
        </p>
        <p>
        <label for="emailAddress">Email Address:</label>
        <input type="email" name="email" id="emailAddress" class="form-control">
    </p>
        <button type="submit" value="submit" class="btn btn-primary">Submit</button>

        <button type="reset" value="reset" class="btn btn-secondary">Reset</button>


    </form>

</div>


<br>
<br>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "ganesh", "Ganesh$1", "demo");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$first_name = $mysqli->real_escape_string($_REQUEST['first_name']);
$last_name = $mysqli->real_escape_string($_REQUEST['last_name']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
 
// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>

<br>
<br>


<p class="notes"><strong>Note:</strong> The mysqli_real_escape_string() function escapes special characters in a string and create a legal SQL string to provide security against SQL injection.</p>

<p>This is very basic example of inserting the form data in a MySQL database table. You can extend this example and make it more interactive by adding validations to the user inputs before inserting it to the database tables. Please check out the tutorial on <a href="#formvalidation">form validation</a> to learn more about sanitizing and validating user inputs using PHP.</p>


<br>
<br>

<hr>

<h4>PHP MySQL Prepared Statements</h4>
<h5>What is Prepared Statement</h5>

<p>A prepared statement (also known as parameterized statement) is simply a SQL query template containing placeholder instead of the actual parameter values. These placeholders will be replaced by the actual values at the time of execution of the statement.</p>
<p>MySQLi supports the use of anonymous positional placeholder (<code>?</code>), as shown below:</p>

<h5 class="example">Example</h5>
<p><code>INSERT INTO</code> persons (first_name, last_name, email) <code>VALUES</code> (?, ?, ?);</p>

<p>While, PDO supports both anonymous positional placeholder (<code>?</code>), as well as the named placeholders. A named placeholder begins with a colon (<code>:</code>) followed by an identifier, like this:</p>

<h5 class="example">Example</h5>
<p><code>INSERT INTO</code> persons (first_name, last_name, email)
<code>VALUES</code> (:first_name, :last_name, :email);</p>
 
<p>The prepared statement execution consists of two stages: prepare and execute.</p>
				<ul>
					<li><strong>Prepare</strong> — At the prepare stage a SQL statement template is created and sent to the database server. The server parses the statement template, performs a syntax check and query optimization, and stores it for later use.</li>
					<li><strong>Execute</strong> — During execute the parameter values are sent to the server. The server creates a statement from the statement template and these values to execute it.</li>
				</ul>
				<p class="space">Prepared statements is very useful, particularly in situations when you execute a particular statement multiple times with different values, for example, a series of <code>INSERT</code> statements. The following section describes some of the major benefits of using it.</p>


<h5>Advantages of Using Prepared Statements</h5>
<p>A prepared statement can execute the same statement repeatedly with high efficiency, because the statement is parsed only once again, while it can be executed multiple times. It also minimize bandwidth usage, since upon every execution only the placeholder values need to be transmitted to the database server instead of the complete SQL statement.</p>

<p>Prepared statements also provide strong protection against SQL injection, because parameter values are not embedded directly inside the SQL query string. The parameter values are sent to the database server separately from the query using a different protocol and thus cannot interfere with it. The server uses these values directly at the point of execution, after the statement template is parsed. That's why the prepared statements are less error-prone, and thus considered as one of the most critical element in database security.</p>


<h5 class="example">Example</h5>

<?php

// Server connection
$link = mysqli_connect("localhost", "root", "", "demo");


//CHeck connection
if($link === false){
        die("ERROR: Could not connect to server . " . mysqli_connect_error());
}


//SQL insert querey
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)";


if($stmt = mysqli_prepare($link, $sql)){

        //Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);



/* set the parameter values and execute the 
statement again to insert another row */

$first_name = "Steve";
$last_name = "Jobs";
$email = "steve@apple.com";

mysqli_stmt_execute($stmt);

$first_name = "Clara";
$last_name = "Jobs";
$email = "clara@apple.com";

mysqli_stmt_execute($stmt);

echo "Record inserted successfully.";

}else{
    echo "ERROR : Could not prepare query $sql" . mysqli_error($link); 
}

//Close statement
mysqli_stmt_close($stmt);

//Close connection
mysqli_close($link);



?>

<br>
<br>

<h5 class="example">Object Oriented Example</h5>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "demo");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Prepare an insert statement
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)";
 
if($stmt = $mysqli->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("sss", $first_name, $last_name, $email);
    
    /* Set the parameters values and execute
    the statement again to insert another row */
    $first_name = "Hermione";
    $last_name = "Granger";
    $email = "hermionegranger@mail.com";
    $stmt->execute();
    
    /* Set the parameters values and execute
    the statement to insert a row */
    $first_name = "Ron";
    $last_name = "Weasley";
    $email = "ronweasley@mail.com";
    $stmt->execute();
    
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
}
 
// Close statement
$stmt->close();
 
// Close connection
$mysqli->close();
?>



<p>As you can see in the above example we've prepared the <code>INSERT</code> statement just once but executed it multiple times by passing the different set of parameters.</p>

<h5>Explanation of Code (Procedural style)</h5>


<p>Inside the SQL <code>INSERT</code> statement (<i>line no-12</i>) of the example above, the question marks is used as the placeholders for the <i>first_name</i>, <i>last_name</i>, <i>email</i> fields values.</p>
				<p>The <code>mysqli_stmt_bind_param()</code> function (<i>line no-16</i>) bind variables to the placeholders (<code>?</code>) in the SQL statement template. The placeholders (<code>?</code>) will be replaced by the actual values held in the variables at the time of execution. The <i>type</i> definition string provided as second argument i.e. the "sss" string specifies that the data type of each bind variable is string.</p>
				<p>The type definition string specify the data types of the corresponding bind variables and contains one or more of the following four characters:</p>
				<ul>
					<li><strong>b</strong> — binary (such as image, PDF file, etc.)</li>
					<li><strong>d</strong> — double (floating point number)</li>
					<li><strong>i</strong> — integer (whole number)</li>
					<li><strong>s</strong> — string (text)</li>
				</ul>
				<p>The number of bind variables and the number of characters in type definition string must match the number of placeholders in the SQL statement template.</p>


<br>

<h5>Using Inputs Received through a Web Form</h5>

<p>If you remember from the previous chapter, we've created an HTML form to insert data into database. Here, we're going to extend that example by implementing the prepared statement. You can use the same HTML form to test the following insert script example, but just make sure that you're using the correct file name in the <code>action</code> attribute of the form.</p>


<p>Here's the updated PHP code for inserting the data. If you see the example carefully you'll find we didn't use the <code>mysqli_real_escape_string()</code> to escape the user inputs, like we've done in the previous chapter example. Since in prepared statements, user inputs are never substituted into the query string directly, so they do not need to be escaped correctly.</p>



<h5 class="example"Example>Example</h5>
<div>
    <form action="sender.php" method="post"  class="form-group">

        <p>
            <label for="firstName">First Name :</label>
            <input type="text" name="first_name" id="firstName" class="form-control">
        </p>
        <p>
            <label for="lastName">Last Name:</label>
            <input type="text" name="last_name" id="lastName" class="form-control">
        </p>
        <p>
        <label for="emailAddress">Email Address:</label>
        <input type="email" name="email" id="emailAddress" class="form-control">
    </p>
        <button type="submit" value="submit" class="btn btn-primary">Submit</button>

        <button type="reset" value="reset" class="btn btn-secondary">Reset</button>


    </form>

</div>

<br>

<h5 class="example">Object Oriented Example</h5>
<div>
    <form action="sender-obj.php" method="post"  class="form-group">

        <p>
            <label for="firstName">First Name :</label>
            <input type="text" name="first_name" id="firstName" class="form-control">
        </p>
        <p>
            <label for="lastName">Last Name:</label>
            <input type="text" name="last_name" id="lastName" class="form-control">
        </p>
        <p>
        <label for="emailAddress">Email Address:</label>
        <input type="email" name="email" id="emailAddress" class="form-control">
    </p>
        <button type="submit" value="submit" class="btn btn-primary">Submit</button>

        <button type="reset" value="reset" class="btn btn-secondary">Reset</button>


    </form>

</div>






<br>
<br>
<br>
</div><!-- Container End-->

<div style="margin:200px 0px 0px 0px;"></div>
</body>
</html>
