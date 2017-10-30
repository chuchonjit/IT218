<html>
<head>
<link rel = "stylesheet" href ="styles.css">
 <script type="text/javascript">
            
     function validsec()
      {
         if( document.myForms.amount.value == "0" ||document.myForms.amount.value=="" )
         {}

     }         
     
  </script>
</head>
<body style = "background-color: #d6cbd3;">
<h1 style = "text-align:center;" >Welcome </h1>
<?php
define ('DB_NAME','jda29');
define ('DB_USER','jda29');
define ('DB_PASSWORD','r4mZlygN');
define ('DB_HOST','sql1.njit.edu');

$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$link){
  die('Could not connect: ' .mysql_error());
}
$db_selected = mysql_select_db(DB_NAME,$link);
if(!$db_selected){
  die('Can\'t use ' .DB_NAME .': ' .mysql_error());
}
echo 'Connected to Database'."</br>";

$value = $_GET['Name'];
$lname = $_get['lname'];
$value1 = $_GET['Email'];
$value2 = $_GET['Pin'];
$value3 = $_GET['Gender'];

echo "Welcome $value" ;
$lname;

?>



</body>
</html>
