What does a special set of tags <?= and ?> do in PHP? - The output is displayed directly to the browser.

What’s the difference between include and require? - It’s how they handle failures. If the file is not found by require(), it will cause a fatal error and halt the execution of the script. If the file is not found by include(), a warning will be issued, but execution will continue.
I am trying to assign a variable the value of 0123, but it keeps coming up with a different number, what’s the problem? - PHP Interpreter treats numbers beginning with 0 as octal. Look at the similar PHP interview questions for more numeric problems.

Would I use print "$a dollars" or "{$a} dollars" to print out the amount of dollars in this example? - 
In this example it wouldn’t matter, since the variable is all by itself, but if you were to print something like "{$a},000,000 mln dollars", then you definitely need to use the braces.
How do you define a constant? - Via define() directive, like define ("MYCONSTANT", 100);
How do you pass a variable by value? - Just like in C++, put an ampersand in front of it, like $a = &$b
Will comparison of string "10" and integer 11 work in PHP? - Yes, internally PHP will cast everything to the integer type, so numbers 10 and 11 will be compared.
When are you supposed to use endif to end the conditional statement? -
 When the original if was followed by : and then the code block without braces.
Explain the ternary conditional operator in PHP? - 
Expression preceding the ? is evaluated, if it’s true, then the expression preceding	the : is executed, otherwise, 
the expression following : is executed.
How do I find out the number of parameters passed into function? 
func_num_args() function returns the number of parameters passed in.
If the variable $a is equal to 5 and variable $b is equal to character a, what’s the value of $$b? - 100, it’s a reference to existing variable.
What’s the difference between accessing a class method via -> and via ::? - :: is allowed to access methods that can perform static operations, i.e. those, which do not require object initialization.
Are objects passed by value or by reference? - Everything is passed by value.
How do you call a constructor for a parent class? - parent::constructor($value)
What’s the special meaning of __sleep and __wakeup? - __sleep returns the array of all the variables than need to be saved, while __wakeup retrieves them.
Why doesn’t the following code print the newline properly?    <?php
            $str = ‘Hello, there.nHow are you?nThanks for visiting TechInterviews’;
            print $str;
    ?>
Because inside the single quotes the n character is not interpreted as newline, just as a sequence of two characters - and n.
Would you initialize your strings with single quotes or double quotes? - Since the data inside the single-quoted string is not parsed for variable substitution, it’s always a better idea speed-wise to initialize a string with single quotes, unless you specifically need variable substitution.
How come the code <?php print "Contents: $arr[1]"; ?> works, but <?php print "Contents: $arr[1][2]"; ?> doesn’t for two-dimensional array of mine? - Any time you have an array with more than one dimension, complex parsing syntax is required. print "Contents: {$arr[1][2]}" would’ve worked.
What is the difference between characters 23 and x23? - The first one is octal 23, the second is hex 23.
With a heredoc syntax, do I get variable substitution inside the heredoc contents? - Yes.
I want to combine two variables together:
 $var1 = 'Welcome to ';
 $var2 = 'TechInterviews.com';
What will work faster? Code sample 1:

$var 3 = $var1.$var2;
Or code sample 2:

$var3 = "$var1$var2";
Both examples would provide the same result - $var3 equal to "Welcome to TechInterviews.com". However, Code Sample 1 will work significantly faster. Try it out with large sets of data (or via concatenating small sets a million times or so), and you will see that concatenation works significantly faster than variable substitution.

For printing out strings, there are echo, print and printf. Explain the differences. - 
echo is the most primitive of them, and just outputs the contents following the construct to the screen. 
print is also a construct (so parentheses are optional when calling it), but it returns TRUE on successful output and FALSE if it was unable to print out the string.
 
However, you can pass multiple parameters to echo, like:
 <?php echo 'Welcome ', 'to', ' ', 'TechInterviews!'; ?>
and it will output the string "Welcome to TechInterviews!" print does not take multiple parameters. It is also generally argued that echo is faster, but usually the speed advantage is negligible, and might not be there for future versions of PHP. printf  is a function, not a construct, and allows such advantages as formatted output, but it’s the slowest way to print out data out of echo, print and printf.

I am writing an application in PHP that outputs a printable version of driving directions. 
It contains some long sentences, and I am a neat freak, and would like to make sure that no line exceeds 50 characters. 

How do I accomplish that with PHP? -
 On large strings that need to be formatted according to some length specifications, use wordwrap() or chunk_split().
What’s the output of the ucwords function in this example?
	$formatted = ucwords("TECHINTERVIEWS IS COLLECTION OF INTERVIEW QUESTIONS");
	print $formatted;
What will be printed is TECHINTERVIEWS IS COLLECTION OF INTERVIEW QUESTIONS.
ucwords() makes every first letter of every word capital, but it does not lower-case anything else. To avoid this, 
and get a properly formatted string, it’s worth using strtolower() first.

What’s the difference between htmlentities() and htmlspecialchars()? 
- htmlspecialchars only takes care of <, >, single quote ‘, double quote " and ampersand. 
  htmlentities translates all occurrences of character sequences that have different meaning in HTML.
   
What’s the difference between md5(), crc32() and sha1() crypto on PHP? -
The major difference is the length of the hash generated. CRC32 is, evidently, 32 bits, while sha1() returns a 128 bit value, and md5() returns a 160 bit value. 
This is important when avoiding collisions.
So if md5() generates the most secure hash, why would you ever use the less secure crc32() and sha1()? - 
Crypto usage in PHP is simple, but that doesn’t mean it’s free. First off, depending on the data that you’re encrypting, 
you might have reasons to store a 32-bit value in the database instead of the 160-bit value to save on space. Second, the more secure the crypto is, the longer is the computation time to deliver the hash value. A high volume site might be significantly slowed down, if frequent md5() generation is required.
How do you match the character ^ at the beginning of the string? - ^^









What is PHP?
-->
PHP (Hyper text Pre Processor) is a scripting language commonly used for web applications. PHP can be easily embedded in HTML. PHP generally runs on a web server. It is available for free and can be used across a variety of servers, operating systems and platforms.

What are the differences between GET and POST methods in form submitting, give the case where we can use get and we can use post methods?
-->
On the server side, the main difference between GET and POST is where the submitted is stored. The $_GET array stores data submitted by the GET method. The $_POST array stores data submitted by the POST method. 

On the browser side, the difference is that data submitted by the GET method will be displayed in the browser's address field. Data submitted by the POST method will not be displayed anywhere on the browser. 

GET method is mostly used for submitting a small amount and less sensitive data. POST method is mostly used for submitting a large amount or sensitive data.
Who is the father of php and explain the changes in php versions?
-->
Rasmus Lerdorf for version changes go to http://php.net/ Marco Tabini is the founder and publisher of php|architect.
How can we submit from without a submit button?
-->
We can use a simple JavaScript code linked to an event trigger of any form field. In the JavaScript code, we can call the document.form.submit() function to submit the form.
How many ways we can retrieve the date in result set of mysql Using php?
-->
As individual objects so single record or as a set or arrays.
What is the difference between $message and $$message?
-->
They are both variables. But $message is a variable with a fixed name. $$message is a variable who's name is stored in $message. For example, if $message contains "var", $$message is the same as $var.
What are the differences between require and include, include_once?
-->
File will not be included more than once. If we want to include a file once only and further calling of the file will be ignored then we have to use the PHP function include_once(). This will prevent problems with function redefinitions, variable value reassignments, etc.
What are the different tables present in mysql?
-->
Total 5 types of tables we can create 

1. MyISAM 

2. Heap 

3. Merge 

4. InnoDB 

5. ISAM 

6. BDB 

MyISAM is the default storage engine as of MySQL 3.23.
How can I execute a php script using command line?
-->
Just run the PHP CLI (Command Line Interface) program and provide the PHP script file name as the command line argument. For example, "php myScript.php", assuming "php" is the command to invoke the CLI program. 

Be aware that if your PHP script was written for the Web CGI interface, it may not execute properly in command line environment.
What is meant by nl2br()?
-->
Nl2br Inserts HTML line breaks before all newlines in a string string nl2br (string); For example: echo nl2br("god bless you")

will output "god bless you" to your browser.
What are the current versions of apache, php, and mysql?
-->
PHP: php 5.3 
MySQL: MySQL 5.5 
Apache: Apache 2.2
What are the reasons for selecting lamp (Linux, apache, mysql, php) instead of combination of other software programs, servers and operating systems?
-->
All of those are open source resource. Security of linux is very very more than windows. Apache is a better server that IIS both in functionality and security. Mysql is world most popular open source database. PHP is more faster that asp or any other scripting language.
How can we encrypt and decrypt a data present in a mysql table using mysql?
-->
AES_ENCRYPT () and AES_DECRYPT ()
How can we encrypt the username and password using php?
-->
You can encrypt a password with the following Mysql>SET PASSWORD=PASSWORD("Password"); We can encode data using base64_encode($string) and can decode using base64_decode($string);
What are the different types of errors in php?
-->
E_ERROR: A fatal error that causes script termination 
E_WARNING: Run-time warning that does not cause script termination 
E_PARSE: Compile time parse error. 
E_NOTICE: Run time notice caused due to error in code 
E_CORE_ERROR: Fatal errors that occur during PHP's initial startup (installation) 
E_CORE_WARNING: Warnings that occur during PHP's initial startup 
E_COMPILE_ERROR: Fatal compile-time errors indication problem with script. 
E_USER_ERROR: User-generated error message. 
E_USER_WARNING: User-generated warning message. 
E_USER_NOTICE: User-generated notice message. 
E_STRICT: Run-time notices. 
E_RECOVERABLE_ERROR: Catchable fatal error indicating a dangerous error 
E_ALL: Catches all errors and warnings
What is the functionality of the function htmlentities?
-->
Answer: htmlentities Convert all applicable characters to HTML entities This function is identical to htmlspecialchars() in all ways, except with htmlentities(), all characters which have HTML character entity equivalents are translated into these entities.
What is meant by urlencode and urldocode?
-->
Urlencode() returns the URL encoded version of the given string. URL coding converts special characters into % signs followed by two hex digits. For example: urlencode("10.00%") will return "10%2E00%25?. URL encoded strings are safe to be used as part of URLs. 
urldecode() returns the URL decoded version of the given string.

What is the difference between the functions unlink and unset?
-->
Unlink() deletes the given file from the file system. 
unset() makes a variable undefined.
How can we register the variables into a session?
-->
We can use the session_register ($ur_session_var) function.
How can we get the properties (size, type, width, height) of an image using php image functions?
-->
To know the Image type use exif_imagetype () function 
To know the Image size use getimagesize () function 
To know the image width use imagesx () function 
To know the image height use imagesy() function
What is the maximum size of a file that can be uploaded using php and how can we change this?
-->
You can change maximum size of a file set upload_max_filesize variable in php.ini file.
How can we increase the execution time of a php script?
-->
Set max_execution_time variable in php.ini file to your desired time in second.
How can we take a backup of a mysql table and how can we restore it.?
-->
Create a full backup of your database: shell> mysqldump tab=/path/to/some/diropt db_name Or: shell> mysqlhotcopy db_name /path/to/some/dir The full backup file is just a set of SQL statements, so restoring it is very easy: 

shell> mysql "."Executed"; 
mysql_close($link2);
How many ways can we get the value of current session id?
-->
session_id() function returns the session id for the current session.
How can we destroy the session, how can we unset the variable of a session?
-->
session_destroy
session_unset
How can we destroy the cookie?
-->
Set same the cookie in past
What is the difference between ereg_replace() and eregi_replace()?
-->
eregi_replace() function is identical to ereg_replace() except that this ignores case distinction when matching alphabetic characters.eregi_replace() function is identical to ereg_replace() except that this ignores case distinction when matching alphabetic characters.
How can we know the count/number of elements of an array?
-->
2 ways 
a) sizeof($urarray) This function is an alias of count() 
b) count($urarray)
interestingly if u just pass a simple var instead of a an array it will return 1.
What is the maximum length of a table name, database name, and fieldname in mysql?
-->
Database name- 64 
Table name -64 Fieldname-64
How many values can the SET function of mysql takes?
-->
Mysql set can take zero or more values but at the maximum it can take 64 values
What is maximum size of a database in mysql?
-->
If the operating system or filesystem places a limit on the number of files in a directory, MySQL is bound by that constraint. 
The efficiency of the operating system in handling large numbers of files in a directory can place a practical limit on the number of tables in a database. If the time required to open a file in the directory increases significantly as the number of files increases, database performance can be adversely affected. 
The amount of available disk space limits the number of tables. 
MySQL 3.22 had a 4GB (4 gigabyte) limit on table size. With the MyISAM storage engine in MySQL 3.23, the maximum table size was increased to 65536 terabytes (2567 â€" 1 bytes). With this larger allowed table size, the maximum effective table size for MySQL databases is usually determined by operating system constraints on file sizes, not by MySQL internal limits. 
The InnoDB storage engine maintains InnoDB tables within a tablespace that can be created from several files. This allows a table to exceed the maximum individual file size. The tablespace can include raw disk partitions, which allows extremely large tables. The maximum tablespace size is 64TB. 
The following table lists some examples of operating system file-size limits. This is only a rough guide and is not intended to be definitive. For the most up-to-date information, be sure to check the documentation specific to your operating system. 
Operating System File-size Limit 
Linux 2.2-Intel 32-bit 2GB (LFS: 4GB) 
Linux 2.4+ (using ext3 filesystem) 4TB 
Solaris 9/10 16TB 
NetWare w/NSS filesystem 8TB 
Win32 w/ FAT/FAT32 2GB/4GB 
Win32 w/ NTFS 2TB (possibly larger) 
MacOS X w/ HFS+ 2TB
What is meant by MIME?
-->
Multipurpose Internet Mail Extensions.
WWW ability to recognise and handle files of different types is largely dependent on the use of the MIME (Multipurpose Internet Mail Extensions) standard. The standard provides for a system of registration of file types with information about the applications needed to process them. This information is incorporated into Web server and browser software, and enables the automatic recognition and display of registered file types.
What is meant by PEAR in php?
-->
PEAR is short for "PHP Extension and Application Repository" and is pronounced just like the fruit. The purpose of PEAR is to provide: 
A structured library of open-sourced code for PHP users 
A system for code distribution and package maintenance 
A standard style for code written in PHP 
The PHP Foundation Classes (PFC), 
The PHP Extension Community Library (PECL), 
A web site, mailing lists and download mirrors to support the PHP/PEAR community 
PEAR is a community-driven project with the PEAR Group as the governing body. The project has been founded by Stig S. Bakken in 1999 and quite a lot of people have joined the project since then. 

http://pear.php.net/manual/en/about.pear.php
What are the differences between mysql_fetch_array(), mysql_fetch_object(), mysql_fetch_row()?
-->
Mysql_fetch_array Fetch a result row as an associative array, a numeric array, or both. 
mysql_fetch_object ( resource result ) 
Returns an object with properties that correspond to the fetched row and moves the internal data pointer ahead. Returns an object with properties that correspond to the fetched row, or FALSE if there are no more rows 
mysql_fetch_row() fetches one row of data from the result associated with the specified result identifier. The row is returned as an array. Each result column is stored in an array offset, starting at offset 0.
What is PHP?
-->
PHP Version 3.0 is an HTML-embedded scripting language. Much of its syntax is borrowed from C, Java and Perl with a couple of unique PHP-specific features thrown in. The goal of the language is to allow web developers to write dynamically generated pages quickly.
What is the difference between include and require?
-->
If you require a file and it cannot be found, the script will terminate with a fatal error. If you use include then you will get an error but the script will continue to execute. Therefore when the information you wish to reference from another file is essential to the correct running of a page, use require.
Is PHP a case sensitive programming language?
-->
PHP is a partially case sensitive programming language. We can use function names, class names in case insensitive manner.
What is mean by LAMP?
-->
LAMP means combination of Linux, Apache, MySQL and PHP.
How do you get the user's ip address in PHP?
-->
Using the server variable: $_SERVER['REMOTE_ADDR']
How do you make one way encryption for your passwords in PHP?
-->
Using md5 function or sha1 function
What is meant by PEAR in php?
-->
Answer1: PEAR is the next revolution in PHP. This repository is bringing higher level programming to PHP. PEAR is a framework and distribution system for reusable PHP components. It eases installation by bringing an automated wizard, and packing the strength and experience of PHP users into a nicely organised OOP library. PEAR also provides a command-line interface that can be used to automatically install "packages" 
Answer2: 
PEAR is short for "PHP Extension and Application Repository" and is pronounced just like the fruit. The purpose of PEAR is to provide: 
A structured library of open-sourced code for PHP users 
A system for code distribution and package maintenance 
A standard style for code written in PHP 
The PHP Foundation Classes (PFC), 
The PHP Extension Community Library (PECL), 
A web site, mailing lists and download mirrors to support the PHP/PEAR community 
PEAR is a community-driven project with the PEAR Group as the governing body. The project has been founded by Stig S. Bakken in 1999 and quite a lot of people have joined the project since then.
How can we repair a MySQL table?
-->
The syntex for repairing a mysql table is: 

REPAIR TABLE tablename 
REPAIR TABLE tablename QUICK 
REPAIR TABLE tablename EXTENDED 

This command will repair the table specified. 
If QUICK is given, MySQL will do a repair of only the index tree. 
If EXTENDED is given, it will create index row by row.
What is the difference between echo and print statement?
-->
Echo() can take multiple expressions,Print cannot take multiple expressions. 

Print return true or false based on success or failure whereas echo just does what its told without letting you know whether or not it worked properly.
What are the features and advantages of OBJECT ORIENTED PROGRAMMING?
-->
One of the main advantages of OO programming is its ease of modification; objects can easily be modified and added to a system there by reducing maintenance costs. OO programming is also considered to be better at modeling the real world than is procedural programming. It allows for more complicated and flexible interactions. OO systems are also easier for non-technical personnel to understand and easier for them to participate in the maintenance and enhancement of a system because it appeals to natural human cognition patterns. 

For some systems, an OO approach can speed development time since many objects are standard across systems and can be reused. Components that manage dates, shipping, shopping carts, etc. can be purchased and easily modified for a specific system. 

Credits:http://www.w3schools.in. 
By Jilani Shaikh