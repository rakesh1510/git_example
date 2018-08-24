<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './qr/qrlib.php';
        QRcode::png("rakesh is great", "new.png", "M", "10", "10");
        ?>
        <img src="new.png" />
    </body>
</html>
