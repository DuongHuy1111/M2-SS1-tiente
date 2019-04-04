<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    Amount <input type="text" name="amount">
    <br><br>
    From Currency <select name="from">
        <option value="USD">USD</option>
        <option value="VND">VND</option>
    </select>
    To Currency <select name="to">
        <option value="VND">VND</option>
        <option value="USD">USD</option>
    </select>

    <input type="submit" value="Convert">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dola = $_POST["amount"];
        $from = $_POST["from"];
        $to = $_POST["to"];
        $money = 0;

        if ($from == "USD" && $to == "VND") {
            $money = $dola * 23000;
        } else {
            $money = $dola / 23000;
        }
        echo $money;
    }
    ?>
</form>

</body>
</html>