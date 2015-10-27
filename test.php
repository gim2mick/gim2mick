<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>gim2mick</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/themes/default/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.mobile-1.4.5.min.js" type="text/javascript"></script>
    </head>   
    <body>
        
        <section data-role="page" id="testphp">
            <header data-role="header" data-position="fixed">
                <h1>Test PHP</h1>
            </header>
            <div data-role="content">
                <?php
                    echo 'Hello World';
                ?>
            </div>
            <footer data-role="footer" data-position="fixed">
                <h1>&copy; 2558</h1>
            </footer>
        </section>
   </body>
</html>