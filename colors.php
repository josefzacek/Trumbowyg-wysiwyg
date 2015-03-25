<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Colors plugin | Trumbowyg by Alex-D</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="trumbowyg.min.css">
        <link rel="stylesheet" href="trumbowyg.colors.min.css">
    </head>
    <body>
        <div id="main" role="main">
            <header>
                <h1>Colors plugin for Trumbowyg</h1>

                <p>
                    This plugin allow you to add a foreground and/or background color picker.
                </p>
            </header>

            <div id="editor">
                <h2>You can color me!</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, aliquam, minima fugiat placeat provident optio nam reiciendis eius beatae quibusdam!
                </p>
                <p>
                    The text is derived from Cicero's De Finibus Bonorum et Malorum (On the Ends of Goods and Evils, or alternatively [About] The Purposes of Good and Evil ). The original passage began: Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit (Translation: &quot;Neither is there anyone who loves grief itself since it is grief and thus wants to obtain it&quot;).
                </p>
            </div>

            <h2>The code</h2>
            <code><pre>
$('#editor')
.trumbowyg({
    // You can only add one of foreColor/backColor
    btnsAdd: ['foreColor', 'backColor']
});
            </pre></code>
            
            <ul class="links">
                <li><a href="index.php">Simple</a></li>
                <li><a href="colors.php">Colors</a></li>
            </ul>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="trumbowyg.min.js"></script>
        <script src="trumbowyg.colors.js"></script>
        <script>
            $('#editor').trumbowyg({
                btnsAdd: ['foreColor', 'backColor']
            });
        </script>
    </body>
</html>