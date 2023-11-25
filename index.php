<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Electrolize' rel = 'stylesheet'>
    <title>Aesir Store</title>
</head>

<style>
    body
    {
        background-color: black;
        font-family: 'Electrolize';
    }
    #welcome
    {
        font-size: 40px;
    }
    #logo
    {
        position:absolute;
        left:30px;
        top:-25px;
        width:200px;
        height:150px;
    }
    #message
    {
        font-size: 25px;
    }
    #header
    {
        height: 50px;
        background-color:#220C0C ;
        text-align: center;
        padding-top: 25px;
    }
    #background
    {
        padding-bottom: 10px;
        background-image: url("upscaled_artwork.jpg");
        filter: blur(1px);
        background-repeat: no-repeat;
        background-size: cover;
        height: 720px;
    }
    .content
    {
        position:absolute; /* or absolute */
        color: white;
        text-align: center;
        font-size: 15px;
        position: absolute;
        top:  50%;
        left: 50%;
        transform: translate(-50%,-50%)
    }
    ul.menu
    {
        margin :0px;
        padding:0px;
    }
    li.menu
    {
        display: inline;
        font-size:  = 20px;
    }
    a.menu
    {
        color : white;
        margin-right: 50px;
        padding: 10px;
        text-decoration: none;

    }
    a.menu:hover
    {
        background-color: #660D1A;
        color: white;
    }
    a.active
    {
        background-color: white;
        color: #F5331F ;
    }
    button, input[type = submit]
    {
        padding: 10px;
        margin:5px;
    }
    #content
    {
        padding-top: 20px;
    }
    #action
    {
        margin-top: :20px;

    }
</style>
<body>
    <!-- header for index page -->
    <div id ="header">
        <img id = "logo" src="logo.png" alt="logoimage">
        <?php
        //get db config
        include_once("db_config.php");
        //conditioning for id
        $id = null;
        if(isset($_GET["id"]))
        {
            $id = $_GET["id"];
        }
        //setup connection
        $cn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
        if($cn->connect_error)
        {
            die("Error connecting: ". $cn->connect_error);
        }
        $sql = "select id, title from navpages order by id";
        $result = $cn->query($sql);
        $result = $cn->query($sql);
        echo "<ul class ='menu'>";
        while($row = $result->fetch_assoc())
        {
            if($id === null)
            {
                $id = $row["id"];
            }
            $active = "";
            if($row["id"] == $id)
            {
                $active = "active";
            }
            echo "<a class = 'menu {$active}' href = '?id={$row['id']}'> <li class ='menu'>{$row['title']}</li></a>";
        }
        echo "</ul>";
        ?>
    </div>
    <!-- background image -->
    <div id ="background"></div>
    <!-- content for index page -->
    <div class = "content">
        <p id ="welcome">
        Welcome to Æsir Store!
        </p id="">
        <p id = "message">
            Fusce erat dui, venenatis et erat in, vulputate dignissim lacus. <br>
            Donec vitae tempus dolor,sit amet elementum lorem. <br>
            Ut cursus tempor turpis.
        </p>
    </div>
</body>
</html>