<?php
//This is a tag which signifies the start of php code to your server
?>
<?php
//You can hace multiple of them they run in order going down the page. usually there is only one.


//rn we are in the index.php page.  all websites start with an index file of some sort that handles basic functions.

//Ignore these few lines. these just are setting up the web server to print all errors for you guys...
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Completely ignore these they are just for errors.

//Echo is how you put data on the screen,
echo "Hola! Welcome to my web API!!!!!</br>";
echo "If you see these in your browser youve followed my steps to get started and it works!!!!!</br></br></br></br>";


echo "Now to see how you ask me for data you want! </br>";
echo "In your browser URL line at the end of your website address, add a /?runTutorialCode </br>";
echo "AFTER THAT, In your browser URL line at the end of your website address, add a /?multiplyThisNumberPlease=INSERTMYNUMBERHERE</br>";
//So what these are are variables passed to the server in the request
//Note the $_GET is the variable passef to the server in the url line.
//php has no variables, only the dollar sign followed by the name of the var
if (isset($_GET['runTutorialCode']))
{
  echo "</br></br></br></br></br>";
  include('mysecondfile.php');
}
if (isset($_GET['multiplyThisNumberPlease']))
{
  //Remember all vars are just the dollar sign followed by the name.
  echo "</br></br></br></br></br>";
  $myNumber = $_GET['multiplyThisNumberPlease'];
  $myNewNumber = $myNumber * 50;
  echo "Your new number is ".$myNewNumber."</br>";
  echo "So our api is literally gonna take in things like READFILECONTENTS=name of desired file, and return the contents of the desired file</br>";
  echo "Or in a more finished case itd be like /?username=DanielI&password=myPass555   (yes the & allows for muliple vars to be sent the same way)</br>";
}
if (isset($_GET['imDoneWithYourShittyTutorialDan']))
{
  echo "</br></br></br></br></br>";
  echo "Feel free to mess around and break this and see what happens</br>";
  echo "<h1><b><i>PRO TIP, you can use html tags to change the way things look and thats always fun...</i></b></h1></br>";
}
?>
