<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
	
  margin:120px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<center><h1>BANK APPLICATION</h1></center>

<div style='float:left'>
<h3>Provide Feedback</h3>
  <form method="post" name="guestform" onsubmit="return validate_form(this)">
    <label for="fname"> Name</label>
    <input type="text" id="fname" name="txtName" placeholder="Your name.."><br>

    <label for="lname">Comment</label>
    <input type="text" id="lname" name="mtxMessage" placeholder="comment.."><br>

    <input name="btnSign" type="submit" value="Add Feedback" onclick="return checkForm();">
  </form>
</div>

<div style='float:right'>
<h3>User Login </h3>
  <form action="/action_page.php">
    <label for="fname">UserName</label>
    <input type="text" id="fname" name="firstname" placeholder="User name.."><br>

    <label for="lname">Password</label>
    <input type="password" id="lname" name="lastname" placeholder="Password..."><br>
  
    <input type="submit" value="Log in">
  </form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><h2>      "Reviews"  </h2></center>
<!--<script>
String.prototype.escape = function() {
    var tagsToReplace = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;'
    };
    return this.replace(/[&<>]/g, function(tag) {
        return tagsToReplace[tag] || tag;
    });
};
function renderData(list){
    var str = '';
    list.forEach(obj => {
        var id = (obj.id).escape();
        var url = (obj.thumbnailUrl).escape();
        var name = (obj.name).escape();
        var price = (obj.price+'').escape();
        str = str + '<tr><td>'+id+'</td><td><img src="'+url+'" /></td><td>'+name+'</td><td>'+price+'</td></tr>';
    })
    document.getElementById('t-body').innerHTML = (str);
}
</script>-->
<div>
<?php

 $con = mysqli_connect("localhost","root","","guestbook");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
if(isset($_POST['btnSign']))
{
 
   $message = trim($_POST['mtxMessage']);
   $name    = trim($_POST['txtName']);
   
   // Sanitize message input
   $message = stripslashes($message);
   $message = mysqli_real_escape_string($con,$message);
   $message = htmlspecialchars( $message );
   
   // Sanitize name input
   $name = mysqli_real_escape_string($con,$name);
   $name = htmlspecialchars( $name );
   
 /*  declare(strict_types=1);

namespace App\Service\Sanitization;

use HTMLPurifier;
use HTMLPurifier_Config;

final class SanitizationService
{
     @var HTMLPurifier 
    private $htmlPurifier;

    public function __construct()
    {
        $config = HTMLPurifier_Config::createDefault();
        
        // Remove this after you configured your final set
        $config->set('Cache.DefinitionImpl', null);
        
        $config->set('Core.Encoding', 'UTF-8');

        $allowedElements = [
            'p[style]',
            'br',
            'b',
            'strong',
            'i',
            'em',
            's',
            'u',
            'ul',
            'ol',
            'li',
            'span[class|data-custom-id|contenteditable]',
            'table[border|cellpadding|cellspacing]',
            'tbody',
            'tr',
            'td[valign]',
        ];

        $config->set('HTML.Allowed', implode(',', $allowedElements));

        $def = $config->getHTMLDefinition(true);
        $def->addAttribute('span', 'data-custom-id', 'name');
        $def->addAttribute('span', 'contenteditable', 'message');

        $this->htmlPurifier = new HTMLPurifier($config);
    }

    public function sanitizeHtml(string $content): string
    {
        return $this->htmlPurifier->purify($content);
    }
}*/
   
   $query = "INSERT INTO guestbook (comment,name) VALUES ('$message','$name');";
   
   $result = mysqli_query($con,$query) or die('<pre>' . mysql_error() . '</pre>' );
   
}

$sql = "SELECT name,comment FROM guestbook";
 $result = mysqli_query($con,$sql) or die('<pre>' . mysql_error() . '</pre>' );

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> name: ". $row["name"]. " - comment: ". $row["comment"]. "<br>";
    }
} else {
    echo "0 results";
}

$con->close();

?>
</div>
</body>
</html>
