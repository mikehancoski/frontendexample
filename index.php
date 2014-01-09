<!DOCTYPE HTML>
<html>
<head>
        <meta http-equiv="content-type" content="text/html" />
        <meta name="author" content="Michael Hancoski" />
    <link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />
        <title>CMS Example Site</title>
</head>

<body>
    <div id="header">
        <h1>This is a basic CMS site id = header</h1>
    </div>
    <div id="main">



        <table id="structure">
            <tr>
                <td id="navigation">
                    <?php
                        echo "Navigation goes here </br> id = navigation";
                    ?>
        
                </td>
                <td id="page">
                    <h2>
                        <?php 
                                echo "menu names go here h2 id = page";
                                ?>
                    </h2>
                    <div class="pagecontent">
                        <?php
                            
                            echo "page content goes here id = pagecontent" . ' <br/>';
                            
                            
                        ?>
                    </div>
                </td>
            </tr>
            
        </table>
    </div>
    <div id="footer">Michael Hancoski (585) 727-7007 mikehancoski@gmail.com <br /> Denver Colorado id = footer</div>   
</body>
</html>