<!DOCTYPE html>
<html>
    <head>
        <link href="/css/normalize.css" rel="stylesheet" type="text/css">
        <link href="/css/excel_test.css" rel="stylesheet" type="text/css">
    </head>
    <body>

    <form method="get" enctype="multipart/form-data">
        Choose file:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload file" name="submit">
    </form>
    </body>
</html>
<?php
ini_set("display_errors", TRUE);
if(isset($_GET['submit']))
{
    echo $_GET['fileToUpload'];

    parseFile();
};
function parseFile()
{

    $file = $_GET['fileToUpload'];
    if ( $xlsx = SimpleXLSX::parse($file) ) {
        
        echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';
        foreach( $xlsx->rows() as $r ) {
            echo '';
            echo '<tr><td>'.implode('</td><td>', $r ).'</td></tr>';
        }
        echo '</table>';
        // or $xlsx->toHTML();	
    } else {
        echo SimpleXLSX::parseError();
    }
}