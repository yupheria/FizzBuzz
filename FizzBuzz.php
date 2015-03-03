<html>
<head></head>
<body>
<?php 
for ($i = 1; $i <= 100; $i++) {
    echo $i;
    echo " ";
    if(fmod($i/3,1)==0){
    	echo "Fizz";
    }
    if(fmod($i/5,1)==0){
    	echo "Buzz";
    }
    echo "<br />";
}
?>
</body>
</html>