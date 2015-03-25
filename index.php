<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="trumbowyg.min.css">
    <link rel="stylesheet" href="trumbowyg.colors.min.css">
</head>
<body>
  <div id="main" role="main">
            <header>
                <h1>Trumbowyg</h1>

                <p>
                    Simple version
                </p>
            </header>
   
   <div id="trumbowyg-demo"></div>
   
   <ul class="links">
        <li><a href="index.php">Simple</a></li>
        <li><a href="colors.php">Colors</a></li>
    </ul>
    
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="trumbowyg.min.js"></script>

<script>
    $( document ).ready(function() {
        $('#trumbowyg-demo').trumbowyg();
    });
    
</script>
    </body>


</html>