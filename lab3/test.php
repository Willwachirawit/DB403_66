<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function random_char($len){
        $chars = "Test What Why When"; //ตัวอักษรที่สามารถสุ่มได้
        $ret_char = "";
        $num = strlen($chars);
        for($i = 0; $i < $len; $i++) {
            $ret_char.= $chars[rand()%$num];
            $ret_char.=""; 
        }
        return $ret_char; 
}

echo random_char(4);    //สุ่มตัวอักษรตามต้องการในที่นี้คือ  4
?>
</body>
</html>