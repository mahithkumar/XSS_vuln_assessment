<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-teal">
<h1>VIT Student Blogs</h1>
</div>
<br><center> <form name="XSS" action="#" method="GET">
			<input type="text" name="name">
			<button >Search</button>
		</form></center>
        
<div class="w3-content">

<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="image1.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Blog by Mahith Kumar</h2>
  <br>
  <button>Click here to read more </button>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="image2.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Monterosso</h2>
   <br>
  <button>Click here to read more </button>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="image3.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Vernazza</h2>
   <br>
  <button>Click here to read more </button>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="image4.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Manarola</h2>
   <br>
  <button>Click here to read more </button>
</div>

</div>

</div>
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

<?php

// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
    // Get input
    $name = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_GET[ 'name' ] );

    // Feedback for end user
    echo "<pre>Hello ${name}</pre>";
}
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
?>
</body>
</html>
