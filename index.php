<html>
<head>

</head>
<body>
    
<form method="post" action="yourFileName.php">
    <input type="text" name="colorname">
    <input type="submit" value="click" name="submit"> <!-- assign a name for the button -->
</form>
<script>
    function display()
{
        switch ($favcolor) {
    case "red":
        document.body.style.backgroundColor="red";
        echo "Your favorite color is red!";
        break;
    case "blue":
            document.body.style.backgroundColor="blue";
        echo "Your favorite color is blue!";
        break;
    case "green":
            document.body.style.backgroundColor="green";
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
    echo "hello ".$_POST["colorname"];
}
if(isset($_POST['submit']))
{
   display();
} 
</script>
</body>
</html>