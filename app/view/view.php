<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if($data!=null){
            echo $data['id']."<br>";
            echo $data['title']."<br>";
            echo $data['content']."<br>";
        }else{
            echo "Not Found ID";
        }

        ?>
    </body>
</html>
