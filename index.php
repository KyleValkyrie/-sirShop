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
    div
    {
    overflow:hidden;
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
        font-weight:bold;
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
        height:500px;
    }
    .news-item:hover
    {
        background-color:white;
        color:#660D1A;
    }
    img.news, img.productImage
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
        padding-top:10px;
        padding-bottom:10px;
    }
    #newsDate
    {
        font-size:20px;
    }
    #newsDesc
    {
        font-size:1rem;
    }
    #newsTitle , #productName
    {
        font-size: 30px;
        font-weight: bold;
        color:slategrey;
    }
    #categoriesHeader
    {
        text-align:Center;
        width:100%;
        color:crimson;
        font-size:2.4rem;
        font-weight:bolder;
        border: 2px solid;
        border-color: crimson;
    }
    .categoriesMenu
    {
        display: inline-block;
        padding-top:1px;
        width:20%;
    }
    .categoryOptions
    {
        color:crimson;
        font-weight:bold;
        text-align :center;
        font-size:1.5rem;
        cursor:pointer;
        list-style-type: none;
        border: 2px solid;
        height:40px;
    }
    .categoryOptions:active
    {
        background-color: white;
        color:Red;
    }
    .categoryOptions:hover
    {
        background-color: white;
        color:Red;
    }
    .productDisplay
    {
        width:79.4%;
        display: inline-block;
        position:absolute;    
    }
    #productGrid
    {
        position:relative;
        top:  0%;
        left: 50%;
        transform: translate(-50%,0%);
        display: grid;
        grid-template-columns: auto auto auto auto;
    }
    .product-item
    {
        position:relative;
        background-color:#660D1A;
        display:inline-block;
        color:white;
        border: 1px solid ;
        margin:20px;
        padding: 20px;
        font-size: 20px;
        max-width:400px;
        width:80%;
        height:500px;
    }
    .product-item:hover
    {
        background-color:white;
        color:#660D1A;
    }
    #productType
    {
        padding-top:10px;
        padding-bottom:5px;
    }
    #productPrice
    {
        font-size:20px;
        position: absolute;
        bottom:10px;
        right:10px;
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
                    No.1 place for all your pc and laptops needs!<br>
                </p>";
                echo "</div>";
            break;
                //categories content
            case "2":
                //display menu
                    echo"<div id='categoriesHeader'>Product categories</div>";
                    echo "<div class ='categoriesMenu'>";
                    $idCategories = null;
                    if(isset($_GET["id"]))
                    {
                        $idCategories = $_GET["id"];
                    }
                    $cnCategories = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
                    if($cnCategories->connect_error)
                    {
                        die("Error connecting: ". $cnNews->connect_error);
                    }
                    $sqlCategories = "select distinct category from products";
                    $resultCategories = $cnCategories->query($sqlCategories);
                    while($rowCategories = $resultCategories->fetch_assoc())
                    {
                        $functionName = str_replace(' ','',$rowCategories['category']);
                        echo "<li id ='{$rowCategories['category']}' name ='$functionName' class='categoryOptions'>
                        <a id ='options' onclick='getCategoryFor{$functionName}();'>
                        {$rowCategories['category']}
                        </a></li>";
                        //get category via hidden form
                        echo"<form method='post' action='' id='{$functionName}'>
                        <input type='hidden' name='category' value='{$rowCategories['category']}'/>
                        </form>"; 
                        //submit category via js
                        echo "<script>
                        function getCategoryFor{$functionName}(event)
                        {   
                            document.getElementById('{$functionName}').submit();
                        }
                        </script>";
                    }
                    echo "</div>";
                    //display products
                    echo"<div class ='productDisplay'>";
                    echo    "<div id ='productGrid'>";
                    if (isset($_POST["category"]))
                    {
                        $sqlProduct = "select id, name, category, image, price, stock
                        from products where category = '{$_POST['category']}' order by id";
                    }
                    else
                    {
                        $sqlProduct = "select id, name, category, image, price, stock
                        from products order by id";           
                    }
                    $resultProduct = $cnCategories->query($sqlProduct);
                    while($rowProduct = $resultProduct->fetch_assoc())
                    {
                    echo "<div class='product-item'>";
                    echo "<div><img class ='productImage' src='{$rowProduct['image']}'></div>
                        <div id='productType'><span>{$rowProduct['category']}</span></div>
                        <div>
                        <a id ='productName' href ='product.php' onclick='getProductID{$rowProduct['id']}();return false;'>
                        {$rowProduct['name']}
                        </a>
                        </div>
                        <div id ='productNumber'>In stock: {$rowProduct['stock']} units</div>";
                        $price = number_format($rowProduct["price"]);
                    echo "<div id ='productPrice'>Price: {$price}vnd</div>";
                    //get id via hidden form
                    echo"<form method='post' action='product.php' id='{$rowProduct['id']}'>
                      <input type='hidden' name='productID' value='{$rowProduct['id']}'/>
                      </form>";   
                    //submit id via js
                    echo "<script>
                    function getProductID{$rowProduct['id']}()
                    {
                        document.getElementById('{$rowProduct['id']}').submit();
                    }
                    </script>"; 
                    //set active class for menu
                    echo "</div>"; 
                    }
                    echo "</div>";
                    echo "</div>";
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
                //background image
                echo "<div id ='backgroundContact'></div>";
                //content for contact page
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