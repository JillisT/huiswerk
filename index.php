<html>
<head>
    <title>Hello World (Student)</title>
</head>
<body>


<form action="index.php" method="post">
    Getal1: <input type="number" name="Getal1">
    Getal2: <input type="number" name="Getal2">
    <br>

    <button type="submit" name="plus"> + </button>
    <button type="submit" name = "min"> - </button>
    <button type="submit" name = "keer"> * </button>
    <button type="submit" name = "deel"> / </button>


</form>

<br>
<br>
<br>

<?php

If($_SERVER["REQUEST_METHOD"] == "POST")
    if (isset($_POST["Getal1"]))
    {
        echo $_POST["Getal1"];
    }

?>

</body>
</html>