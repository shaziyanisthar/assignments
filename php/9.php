<html>
<head>
</head>
<body>
<form method="post">
    text:<input type="text" name="data"><br><input type="submit">

</form>
</br>
<?php
if(isset($_POST['data'])) {
    if($_POST['data']!=" ") {
        # code...
        $data=$_POST['data'];
        echo $data;
        switch ($data) {
            case "6b":
                echo "im 6b</br>";
                # code...
                break;
            case "6bz":
                echo "im 6bz</br>";
                # code...
                break;
            case "6":
                echo "im 6</br>";
                # code...
                break;
            case 6:
                echo "im integer 6</br>";
                # code...
                break;
            default:
                echo "im no where </br>";
                # code...
                break;
        }
    }
    # code...
}
?>
</body>
</html>