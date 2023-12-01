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
        color:white;
        background-color: black;
        font-family: 'Electrolize';
    }
    table
    {
        margin-left: auto;
        margin-right: auto;
        background-color:black;
        color:white;
        width:80%;
        border: 3px solid;
        border-color:#660D1A;
        border-spacing: 1px;
        border-collapse:collapse;
    }
    table:hover
    {
        color:black;
        background-color:white;
    }
    th, td
    {
    padding: 10px;
    }
    img
    {
        width:200px;
        height:150px;
    }
    tr
    {
        height:30px;
    }
    a
    {
        text-decoration: none;
    }
    #welcome
    {
        font-size: 80px;
        color: crimson;
    }
    #thankyou
    {
        font-size: 80px;
        color: whitesmoke;
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
        font-size: 30px;
        color:white ;
    }
    #header
    {
        height: 50px;
        background-color:#220C0C ;
        text-align: center;
        padding-top: 25px;
    }
    #nameBlog
    {
        font-size: 1.7rem;
        font-weight: bold;
        color:#660D1A;
    }
    #descBlog
    {
        height:70%;
    }
    #backgroundHomepage
    {
        padding-bottom: 10px;
        background-image: url("upscaled_artwork.jpg");
        filter: blur(0.5px);
        background-repeat: no-repeat;
        height: 900px;
        background-size: 100% 100%;
    }
    #backgroundContact
    {
        background-position: center;
        padding-bottom: 10px;
        background-image: url("background_Artwork.jpg");
        height: 100%;
        filter: blur(1px);
        height: 900px;
        background-repeat: no-repeat;
        background-size: 600px 600px;
    }
    #author, #date
    {
        font-size:0.9rem;
        height:10%;
    }
    .content
    {
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
        font-size: 20px;
    }
    a:visited
    {
        all:unset;
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
        margin-top: 20px;

    }
    .footer
    { 
       position: fixed;     
       text-align: left;    
       bottom: 0px; 
       width: 98.5%;
       
    }
    #rights
    {  
        padding-right:5px;
        font-size:0.8rem;    
        bottom: 0px;
        text-align: right;
        
    } 
    #support
    {  
        background-color:#220C0C;
        padding-left:10px;
    }
    .news-grid
    {
    position:relative;
    top:  0%;
    left: 50%;
    width:95%;
    transform: translate(-50%,0%);
    display: grid;
    grid-template-columns: auto auto auto auto;
    }
    .news-item 
    {
    background-color:#660D1A;
    color:white;
    border: 1px solid rgba(0, 0, 0, 0.8);
    margin:20px;
    padding: 20px;
    font-size: 25px;
    max-width:400px;
    width:80%;
    height:400px;
    }
    .news-item:hover
    {
        background-color:white;
        color:#660D1A;
    }
    img.news
    {
    max-width:100%;
    max-height:auto;
    width: 100%;
    }
    span
    {
    font-size:1rem;
    padding:5px;
    border-radius:30px;
    border:1px solid;
    }
    #newsType
    {
    padding-bottom:5px;
    }
    #newsDate
    {
    font-size:1.3rem;
    }
    #newsDesc
    {
    font-size:1rem;
    }
    #newsTitle  
    {
        font-size: 1.8rem;
        font-weight: bold;
        color:#D30D13;
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
        $idPage = null;
        if(isset($_GET["id"]))
        {
            $idPage = $_GET["id"];
        }
        //setup connection
        $cnPage = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
        if($cnPage->connect_error)
        {
            die("Error connecting: ". $cnPage->connect_error);
        }
        $sqlPage = "select id, title from navpages order by id";
        $resultPage = $cnPage->query($sqlPage);
        echo "<ul class ='menu'>";
        while($rowPage = $resultPage->fetch_assoc())
        {
            if($idPage === null)
            {
                $idPage = $rowPage["id"];
            }
            $activePage = "";
            if($rowPage["id"] == $idPage)
            {
                $activePage = "active";
            }
            echo "<a class = 'menu {$activePage}' href = '?id={$rowPage['id']}'> <li class ='menu'>{$rowPage['title']}</li></a>";
        }
        echo "</ul>";
        ?>
    </div>

        <?php
         switch ($idPage)
         {
            //homepage content
            default:
            case "1":  
                //background image
                echo "<div id ='backgroundHomepage'></div>";
                //content for index page
                echo "<div class = 'content'>";
                echo "<p id ='welcome'>
                Welcome to Æsir Store!
                </p>";
                echo "<p id = 'message'>
                    No.1 place for all your pc and laptops needs! <br>
                </p>";
                echo "</div>";
            break;
                //categories content
            case "2":
                
            break;
                //news content
            case "3":
                echo "<div class='news-grid'>";
                    $idNews = null;
                    $cnNews = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
                    if($cnNews->connect_error)
                    {
                        die("Error connecting: ". $cnNews->connect_error);
                    }
                    $sqlNews = "select id, title, description, imageLink, dateOfPost, type
                                from news order by id";
                    $resultNews = $cnNews->query($sqlNews);
                    while($rowNews = $resultNews->fetch_assoc())
                    {            
                    echo "<div class='news-item'>";
                    echo "<div><img class ='news' src='{$rowNews['imageLink']}'></div>
                          <div id='newsType'><span>{$rowNews['type']}</span></div>
                          <div id='newsDate'>Date: {$rowNews['dateOfPost']}</div>
                          <div>
                            <a id='newsTitle' href ='news.php' onclick='getNewsID{$rowNews['id']}();return false;' style ='text-decoration:none'>
                                {$rowNews['title']}
                            </a>
                          </div>
                          <div id='newsDesc'>{$rowNews['description']}</div>";
                    //get id via hidden form
                    echo"<form method='post' action='news.php' id='{$rowNews['id']}'>
                      <input type='hidden' name='newsID' value='{$rowNews['id']}'/>
                      </form>"; 
                    //submit id via js
                    echo "<script>
                        function getNewsID{$rowNews['id']}()
                        {
                            document.getElementById('{$rowNews['id']}').submit();
                        }
                        </script>";
                    echo "</div>";
                    }
                $cnNews->close();
                echo "</div>";
            break;
                //contact content
            case"4":
                echo "<div id ='backgroundContact'></div>";
                echo"<div class ='content'>";
                echo"<p id='thankyou'>Thank you for using our store page!</p>
                <p id='message'>Feel free to contact us, we are here to help!</p>
                <p id='message'>Contact infos can be found below!</p></div>";
                echo"<div class = 'footer' id='support'>
                        <p>Support lines:</p>
                        <p>Warranty: <b style ='color:maroon; font-weight:bolder; font-size:1.3rem;'>0363490614</b></p>
                        <p>Complain: <b style ='color:maroon; font-weight:bolder; font-size:1.3rem;'>0963794634</b></p>
                    </div>
                    <div class ='footer' id= 'rights'>
                    <p id='rights'>© Æsir Inc. Laptops and PCs are property of their own supplier.Æsir of Vietnam Inc. Headquarters are in Tan Binh, Ward 15, Ho Chi Minh City</p>
                        <p id='rights'>Powered by HTML, PHP and Javascript</p>
                        <p id='rights'>Special thanks to Mr.Tran Hoang Binh and Mr.Tran Vu Dai for helping us in hard times!</p>
                    </div>";
            break;
                //blog content
            case"5":
                echo "<br>"; 
                $idBlog = null;
                $cnBlog = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
                if($cnBlog->connect_error)
                {
                    die("Error connecting: ". $cnBlog->connect_error);
                }
                $sqlBlog = "select id, title, description, imageLink, authorName, dateOfPost 
                            from blogs order by id";
                $resultBlog = $cnBlog->query($sqlBlog);
                while($rowBlog = $resultBlog->fetch_assoc())
                {
                    //get id via hidden form
                    echo"<form method='post' action='blog.php' id='{$rowBlog['id']}'>
                      <input type='hidden' name='blogID' value='{$rowBlog['id']}'/>
                      </form>"; 
                    //submit id via js
                    echo "<script>
                        function getBlogID{$rowBlog['id']}()
                        {
                            document.getElementById('{$rowBlog['id']}').submit();
                        }
                        </script>";
                    //present page
                    echo "<table>";
                    echo "<tr>
                        <td id ='imgBlog' colspan ='1' rowspan ='4'>
                                <img src = '{$rowBlog['imageLink']}'>
                        </td>
                        <td id ='nameBlog'>                  
                            <a id='blogTab' href ='blog.php' onclick='getBlogID{$rowBlog['id']}();return false;' style ='text-decoration:none'>
                                {$rowBlog['title']}
                            </a>
                        </td>
                          </tr>";  
                    echo "<tr>
                            <td id ='author'>
                                Author name: {$rowBlog['authorName']}
                            </td>
                          </tr>";
                    echo "<tr>
                          <td id='date'>
                              Date: {$rowBlog['dateOfPost']}
                          </td>
                        </tr>";
                    echo "<tr>
                            <td id='descBlog'>
                                {$rowBlog['description']}
                            </td>
                            </tr>";
                    echo "</table>";  
                    echo "<br>";                 
                }  
                $cnBlog->close();  
            break;
         }
        
        ?>
</body>
</html>