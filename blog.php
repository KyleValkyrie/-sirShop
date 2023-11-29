<?php 
    $id = null;
    var_dump($_POST);
    if (isset($_POST["id"] ) ) 
    {
        $id =$_POST["id"];
        
        include_once("db_config.php");
        $cn = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
        if($cn->connect_error)
        {
            die("Error connecting: ". $cn->connect_error);
        }
        $sql = "select title, description, imageLink, authorName, dateOfPost, content
        from blogs where id = '$id'";
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
                    <td rowspan=2 id='img'><img src='https://i1.sndcdn.com/avatars-000437089554-1mam5a-t500x500.jpg' ></td>
                    <td id = 'authorName'>Author:</td>
                    <td>{$row['authorName']}</td>
                    </tr>
                    <tr>
                    <td colspan=2 id='bio'>Biography:</td>
                    </tr>
                    <tr>
                    <td colspan=3 id='desc'>Placeholder</td>
                    </tr>
                    <tr id='buttonHolder'>
                    <td colspan=3>
                        <button>Back</button>
                    </td>
                    </tr>
            </table>";
            echo "</div>";
        } 
?>
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
    #header
    {
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
    #img, img
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
</style>
<body>

</body>
</html>