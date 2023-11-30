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
        filter: blur(1px);
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
       width: 100%;
    }
    #rights
    {
        padding-right:20px;
        font-size:0.8rem;    
        bottom: 0px;
        text-align: right;
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
                    Fusce erat dui, venenatis et erat in, vulputate dignissim lacus. <br>
                    Donec vitae tempus dolor,sit amet elementum lorem. <br>
                    Ut cursus tempor turpis.
                </p>";
                echo "</div>";
            break;
                //categories content
            case "2":
                
            break;
                //news content
            case "3":
               
            break;
                //contact content
            case"4":
                echo "<div id ='backgroundContact'></div>";
                echo"<div class ='content'>";
                echo"<p id='welcome'>Thank you for using our store page!</p>
                <p id='message'>Contact infos can be view bellow, we hope you had a wonderful time browsing!</p>
                <p id='message'>Feel free to contact us about any trouble you face, we are here to help!</p></div>";
                echo"<div class = 'footer' id='support'>
                        <p>Support lines:</p>
                        <p>Warranty: <b style ='color:#660D1A; font-weight:bolder; font-size:1.2rem;'>0363490614</b></p>
                        <p>Complain: <b style ='color:#660D1A; font-weight:bolder; font-size:1.2rem;'>0963794634</b></p>
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
            break;
         }
        
        ?>
</body>
</html>