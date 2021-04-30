<!DOCTYPE html>
<html lang="en-us">

<head>
  
	<title>Register</title>
    
</head>

<body>
    <?php
        echo $_POST['name'],'<br>',$_POST['nric'];
        
/*         if (file_exists($_POST['nric'] . '.txt')){     //Check for filename with given nric
            echo '<h3>You are already registered!</h3>';
        }
        else{   //filename not found, write to file
            
           $content_to_write = "Name: " . $_POST['input_name'] . "\n";
           $content_to_write .= "NRIC: " . $_POST['input_nric'] . "\n";
           file_put_contents($_POST['input_nric'] . '.txt', $content_to_write);
           echo '<h3>Registration is successful!</h3>';
        } */

    ?>
   
</body>
</html>