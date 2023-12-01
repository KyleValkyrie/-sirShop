<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Electrolize' rel = 'stylesheet'>
    <title>AesirNews</title>
</head>
<style>
 body
{
    background-color: black;
    font-family: 'Electrolize';
    color:white;
}
#header
{
    text-decoration: overline underline;
    font-weight:bold;
    padding-top:20px;
    background-color:Black;
    font-size:4rem;
    height:100px;
    text-align:center;
    color:#660D1A;
}
#title
{
    padding-left: 50px;
    font-size:3rem;
    font-weight:bold;
    color:#660D1A;
}
#desc
{
    padding-left: 50px;
    width:60%;
    font-size:1.8rem;
}
span
{
    padding-left: 50px;
    font-size:1rem;
    padding:5px;
    border-radius:30px;
    border:1px solid;
}
#misc
{
    padding-left: 50px;
    padding-top: 10px;
    padding-bottom:10px;
}
#content
{
    padding-left: 100px;
    width:60%;
    font-size:1.5rem;
    display:inline-block;
}
#backButton
{
    padding-left:300px;
    border: none;
    background: none;
}
button:hover
{
    filter:contrast(200%);
}
img
{
    width: 150px;
    height:150px;
}
</style>
<body>
    <?php
     $id = null;
     if (isset($_POST["newsID"] ) ) 
     {
        $id =$_POST["newsID"];
        
        include_once("db_config.php");
        $cn = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
        if($cn->connect_error)
        {
            die("Error connecting: ". $cn->connect_error);
        }
        $sql = "select * from news where id = '$id'";
        $result = $cn->query($sql);
        $row = $result->fetch_assoc();
        echo "<div id='header'>
        ÆSIR NEWS
        </div>";
        echo "<div>";
                echo "<div id='title'>{$row['title']}</div>";
                echo "<div id='desc'>{$row['description']}</div>";
                echo "<div id='misc'><span>{$row['type']}</span> Date: {$row['dateOfPost']}</div>";
                echo "<div id='content'>{$row['content']}</div>";
                echo "<button id ='backButton' onclick='window.history.go(-1)'><img  src='backButton.png'></button>";
        echo "</div>";
     }
    ?>
</body>
</html>