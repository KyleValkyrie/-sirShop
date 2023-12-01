<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Electrolize' rel = 'stylesheet'>
    <title>Product Info</title>
</head>
<style>
body
{
    color:white;
    background-color: black;
    font-family: 'Electrolize';
}
#header
{
    height: 50px;
    background-color:#220C0C ;
    text-align: center;
    padding-top: 25px;
}
#logo
{
    position:absolute;
    left:30px;
    top:-25px;
    width:200px;
    height:150px;
}
#categoriesHeader
{
    text-align:Center;
    width:100%;
    color:crimson;
    font-size:4rem;
    font-weight:bolder;
    border: 2px solid;
    border-color: crimson;
}
td
{
    width:50%;
}
table
{
    width:90%;
    margin-left: auto;
    margin-right: auto;
    height :800px;
}
#name
{
    text-align :center;;
    color:crimson;
    font-size:2.8rem;
    height:15%;
}
#type
{
    vertical-align: center;
    height:12%;
}
#spec
{
    color:slategray;
    padding:15px;
    font-size:1.5rem;
    vertical-align: top;
    height:50%; 
}
#price
{
    padding:20px;
    height:10%;
    font-size:2rem;
    text-align: right;
}
#buttons
{
    text-align: center;
    height: 10%;
}
#image
{
    text-align: center;;
}
#stock
{
    padding:20px;
    font-size:1.5rem;
}
img
{
    width:90%;
}
span
{   
    margin-left:15px;
    font-size:1.2rem;
    padding:5px;
    border-radius:30px;
    border:1px solid;
}
button
{
    margin:30px 30px;
    background-color: crimson;
    color:white;
    font-family: 'Electrolize';
    font-size:1.5rem;
    width:100px;
    height:50px;
}
button:hover
{
    filter: contrast(120%);
}
</style>
<body>
<div id ="header"><img id = "logo" src="logo.png" alt="logoimage"></div>
<div id='categoriesHeader'>Product Info</div>
<?php
$id = null;
if (isset($_POST["productID"] ) ) 
{
   $id =$_POST["productID"];
   
   include_once("db_config.php");
   $cn = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
   if($cn->connect_error)
   {
       die("Error connecting: ". $cn->connect_error);
   }
   $sql = "select * from products where id = '$id'";
   $result = $cn->query($sql);
   $row = $result->fetch_assoc();
}
$price = number_format($row["price"]);
$spec = str_replace("  ","<br>",$row["spec"]);
$boughtStock = $row["stock"]-1;
echo"<table>
<tr>
    <td rowspan=6 id ='image'><img src='{$row['image']}' alt='Placeholder'></td>
    <td id='name'>{$row['name']}</td>
</tr>
<tr>
    <td id='type'><span>{$row['category']}</span></td>
</tr>
<tr>
    <td id='spec'>{$spec}</td>
</tr>
<tr>
    <td id='price'>{$price}vnd</td>
</tr>
<tr>
    <td id='stock'>Remaining: {$row['stock']} units</td>
</tr>
<tr>
    <td id='buttons'>
    <button onclick='window.history.go(-1)'>Buy</button>
    <button onclick='window.history.go(-1)'>Back</button>     
    </td>";
echo "</tr>
</table>"; 
?>
</body>
</html>