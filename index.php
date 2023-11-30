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
        posiion:absolute;
        padding-bottom: 10px;
        background-image: url("upscaled_artwork.jpg");
        filter: blur(1px);
        background-repeat: no-repeat;
        height: 900px;
        background-size: 100% 100%;
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
    body{
        color:white;
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

                echo "
               
                
                
                
                
                
                
                
                
                
                ";
                
            break;
                //news content
            case"3":
                echo "<br>"; 
                $idnew = null;
                $cnnew = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
                if($cnnew->connect_error)
                {
                    die("Error connecting: ". $cnnew->connect_error);
                }
                $sqlnew = "select *
                            from new order by id"; 
                $resulnew = $cnnew->query($sqlnew);
                while($rownew = $resultnew->fetch_assoc())
                {
                    if($idnew === null)
                    {
                        $idnew = $rownew["id"];
                    }echo"$idnew";
                    echo "<table>";
                    echo "<tr>
                        <td id ='imgnew' colspan ='1' rowspan ='4'>
                                <img src = '{$rownew['imageLink']}'>
                        </td>
                        <td id ='namenew'>
                            <a id='newTab' href ='new.php' style ='text-decoration:none'>
                                {$rownew['title']}
                            </a>
                        </td>
                          </tr>";  
                    echo "<tr>
                            <td id ='author'>
                                Author name: {$rownew['authorName']}
                            </td>
                          </tr>";
                    echo "<tr>
                          <td id='date'>
                              Date: {$rownew['dateOfPost']}
                          </td>
                        </tr>";
                    echo "<tr>
                            <td id='descBlog'>
                                {$rownew['description']}
                            </td>
                            </tr>";
                    echo "</table>";  
                    echo "<br>";   
                    echo "<form method='post' action='new.php' style='display:inline;'>";
                    echo "<input type='hidden' name ='id' value = '{$idnew}'>";
                    echo "<input type='hidden' name ='action' value='show'>";
                }
                
                


            break;
                //contact content
            case"4":
                echo"
                <head>
    <meta charset='UTF-8;>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        table {
            margin-top: auto; /* Đặt margin-top: auto để đẩy table xuống dưới cùng */
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
            
        }
        
    </style>
</head>
<body>

    <!-- Các phần nội dung khác của trang ở đây -->

    <table>
        <thead>
            <tr>
                <th><div>Welcome to dịch vụ hỗ trợ </div>
<div>Tổng đài hỗ trợ (Miễn phí gọi)</div>
<div>Khiếu nại: 778.779.779</div>
<div>Bảo hành: 0909.778.779</div>
              
              
              
              </th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><p>
                © 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.<br>
                Địa chỉ: 128 Trần Quang Khải, P.Tân Định, Q.1, TP.Hồ Chí Minh. Địa chỉ liên hệ và gửi chứng từ: Lô T2-1.2, Đường D1, Đ. D1, P.Tân Phú, TP.Thủ Đức, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email: cskh@thegioimaytinh.com. Chịu trách nhiệm nội dung: kyle đẹp trai. Email: kylebaodeptrai@thegioimaytinh.com.
                
                </a>
            </p>
              
              
              
              
              </td>
                
            </tr>
            <!-- Thêm các hàng khác nếu cần -->
        </tbody>
    </table>
</body>
</html>";

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