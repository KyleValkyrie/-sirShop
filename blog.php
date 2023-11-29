
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Electrolize' rel = 'stylesheet'>
    <title>AesirBlog</title>
</head>
<style>
    body
    {
        background-color: black;
        font-family: 'Electrolize';
        color:white;
    }
    table
    {
        margin-left: auto;
        margin-right: auto;
        background-color:black;
        width:80%;
        border: 3px solid;
        border-color:#660D1A;
        border-spacing: 10px;
    }
</style>
<body>
<?php
    $id=null;   
    $title = "";
    $content ="";
    if ( isset( $_POST["show"] ) ) 
    {
        $id =$_POST["id"];
        include_once("db_config.php");
        $cn = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
        if($cn->connect_error)
        {
            die("Error connecting: ". $cn->connect_error);
        }
        $action = $_POST["action"];
        if($action == "show")
        {
            $sql = "Select * from blogs where id = {$id}";
            $result =$cn->query($sql);
            $row =$result->fetch_assoc();
            $title = $row["title"];
            $content = $row["content"]; 
            $cn->close();
        }
    }
    echo"$title <br>";
    echo"$content";
?>
</body>
</html>