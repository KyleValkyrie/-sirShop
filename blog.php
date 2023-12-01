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
    }
    #textName
    {
        text-decoration: overline underline;
        color:crimson;
        font-size:1.8rem;
        font-weight:bolder;
    }
    #backButton
    {
        position:relative;
        border: none;
        background: none;
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
    #blog
    {
        width:70%;
    }
    #author
    {
        width:29%;
        text-align:Center;
    }
    #title,#date,#authorName,#bio
    {
        font-weight:bold;
        text-align:center;
        font-size:25px;
        width:5%;
    }
    #titleName
    {
        font-size:50px;
        color:#660D1A;
    }
    td,table
    {
        border: 3px solid;
        border-color:#660D1A;
    }
    #dateRow, #titleRow
    {
        height:75px;
    }
    #content,#desc
    {
        font-size:1.5em;
        padding:20px;
        vertical-align:top;
        text-align:left;
        height:700px;
    }
    table
    {
        display: inline-table;
        color: white;
    }
    #avatar,img
    {
        border-radius:90px; 
        height:143px;
        width:143px;
    }
    #desc
    {
        height:400px;
    }
    #buttonHolder
    {
        height:299px; 
    }
    button:hover
    {
        filter:contrast(200%);
    }
</style>
<body>
<?php 
    $id = null;
    if (isset($_POST["blogID"] ) ) 
    {
        $id =$_POST["blogID"];
        
        include_once("db_config.php");
        $cn = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
        if($cn->connect_error)
        {
            die("Error connecting: ". $cn->connect_error);
        }
        $sql = "select * from blogs where id = '$id'";
        $result = $cn->query($sql);
        $row = $result->fetch_assoc();
            echo "<div id='header'>
                ÆSIR BLOGS
            </div>";
            echo "<div>
                <table id='blog'>
                    <tr id='titleRow'>
                    <td id='title'>Title: </td>
                    <td id='titleName'>{$row['title']}</td>
                    </tr>
                    <tr id='dateRow'>
                    <td id ='date'>Date:</td>
                    <td>{$row['dateOfPost']}</td>
                    </tr>
                    <tr>
                    <td colspan =2 id='content'>{$row['content']}</td>
                    </tr>
                </table>
                <table id='author'>
                    <tr>
                    <td rowspan=2 id='avatar'>
                    <img src='{$row['avatar']}' 
                    onerror='this.onerror=null;this.src='https://static.vocadb.net/img/tag/mainOrig/7099.png''>
                    </td>
                    <td id = 'authorName'>Author:</td>
                    <td id='textName'>{$row['authorName']}</td>
                    </tr>
                    <tr>
                    <td colspan=2 id='bio'>Biography:</td>
                    </tr>
                    <tr>
                    <td colspan=3 id='desc'>{$row['bio']}</td>
                    </tr>
                    <tr id='buttonHolder'>
                    <td colspan=3>
                        <button id ='backButton' onclick='window.history.go(-1)'><img  src='backButton.png'></button>
                    </td>
                    </tr>
                </table>";
            echo "</div>";
        $cn ->close();
    } 
?>
</body>
</html>