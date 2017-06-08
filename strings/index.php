<?php
$offset = 0;

if(isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith']) ){
	$text = $_POST['text'];
	$search = $_POST['searchfor'];
	$replace = $_POST['replacewith'];
	$search_length = strlen($search);
	
	if(!empty("text") && !empty("search") && !empty("replace") ){
		while($strpos = strpos($text,$search,$offset) ){
			$strpos.'<br>';
			$offset = $strpos + $search_length; 
			$text = substr_replace($text,$replace,$strpos,$search_length);
			
		}
				
		
		
	}
	else{
		echo "Please Fill all the Fields.";
	}
	
	
	
	
}
?>
<form action = "index.php" method = "POST">

Message:<br><br>
<textarea name="text" rows="6" cols = "30"></textarea><br><br>
Search for:<br>
<input type="text"  name="searchfor"><br><br>
Replace With:<br>
<input type="text" name="replacewith"><br><br>
Search for:<br>
<input type="Submit" value="Find and Replace"><br><br>
<div style="border:2px solid red;background: #dddddd;border-bottom-left-radius: 2em" >
Output:<br><br>
<?php

echo $text;

?>
</div>
</form>



