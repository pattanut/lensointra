<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        foreach ($rs as $row) {
            echo $row->Description . '<br>';
        }
        //var_dump($rs);
        ?>
    </body>
</html>
