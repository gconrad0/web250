<html> <head>   <title>Process the HTML form data with the POST method</title> </head> <body>     
	<h2>Courtesy of <a href = "http://webcheatsheet.com/php/form_processing.php">webcheatsheet</a>
    </h2>  
    <form name="myform" action="#" method="GET">    <input type="hidden" name="check_submit" value="I'm hidden!" />    Name: <input type="text" name="Soemthing else"  value = "Icky" /><br />    Password: <input type="password" name="Password" maxlength="10" value = "akakakakaa" /><br />    Select something from the list: <select name="Seasons">      <option value="Spring" selected="selected">Spring</option>      <option value="Summer">Summer</option>      <option value="Autumn">Autumn</option>      <option value="Winter">Winter</option>    </select><br /><br />    Choose one:       <input type="radio" name="Country" value="USA" /> USA      <input type="radio" name="Country" value="Canada" /> Canada      <input type="radio" name="Country" value="Other" /> Other    <br />    Choose the colors:       <input type="checkbox" name="Colors[]" value="green" checked="checked" /> Green      <input type="checkbox" name="Colors[]" value="yellow" /> Yellow      <input type="checkbox" name="Colors[]" value="red" checked = "checked" /> Red      <input type="checkbox" name="Colors[]" value="gray" /> Gray    <br /><br />    Comments:<br />     <textarea name="Comments" rows="10" cols="60">Enter your comments here</textarea><br />    <input type="submit" />  </form>        
    <?php
//Check whether the form has been submitted//
    if (array_key_exists('check_submit', $_REQUEST)) 
    	if ($_REQUEST){   
//all this commented code is useful but some is not necessary... came from original source example$   on this site: http://webcheatsheet.com/php/form_processing.php       
//Converts the new line characters (\n) in the text area into HTML line breaks (the <br /> tag)
   /* $_REQUEST['Comments'] = nl2br($_REQUEST['Comments']);         
   
  	if ( isset($_REQUEST['Colors']) )    {      
		$_REQUEST['Colors'] = implode(', ', $_REQUEST['Colors']); 
   //Converts an array into a single string   
   }
   
   	echo "<hr><hr>FOREACH: ";  

   	foreach($_REQUEST as $item)    {
   	echo $item . "***";    
   }  

echo "<hr>";
 /*         //Let's now print out the received values in the browser   
echo "Your name: {$_REQUEST['Name']}<br />";   
echo "Your password: {$_REQUEST['Password']}<br />";   
echo "Your favourite season: {$_REQUEST['Seasons']}<br /><br />";   
echo "Your comments:<br />{$_REQUEST['Comments']}<br /><br />";       

if (isset($_REQUEST['Country']))   {        
	echo "You are from: {$_REQUEST['Country']}<br />";   
}       

echo "Colors you chose: {$_REQUEST['Colors']}<br />"; echo "<hr>"; // echo "<hr><hr>POST ARRAY VALUES: " .  print_r($_REQUEST) . "<br /><hr>"; */
foreach($_REQUEST as $submittedValue) // cycle thru the POST array and on each cycle assign that value to $submittedValue    
		{                  
			if (is_array($submittedValue)) {
// see if it's an array (for checkboxes)        
			 // if it is combine the array values into a comma separated string and overwrite the original array variable with the string            
				$submittedValue = implode(', ', $submittedValue); 
//Converts an array into a single string
        	}                
        echo "ITEM: " . $submittedValue."</br>";  
// now that there are only values (no arrays) spit 'em out
            }    
        }
            else 
// could easily add and else GET and repeate all the code with get, or maybe combine somehow.
            {    echo "You can't see this page without submitting the form.";}
