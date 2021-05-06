
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="value"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Calculator Value</title>
    <style type="text/css">
        .nhapvao {
            width:230px;
            margin:0;
            padding:10px;
            border:1px #CCC solid;
        }
        h2 {
            text-align: center;
        }
        .nhapvao input {
            padding:5px; margin:5px
        }
    </style>

</head>
<body>
<form method="post">
    <div class="nhapvao">
        <h2>Future Value Calculator</h2>
        <label>
            Inventment Amount:
            <input type="text" name="inven" size="20"  placeholder="Lượng tiền đầu tư ban đầu" />
        </label>
        <label>
            Yearly Interest Rate:
            <input type="text" name="rate" size="20" placeholder="Lãi suất năm" />
        </label>
        <label>
            Number of Years:
            <input type="text" name="year" size="20" placeholder="Số năm đầu tư" />
        </label>
        <input type="submit" value="Calculate" />
    </div>
</form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $invent = $_POST['inven'];
        $rate = $_POST['rate'];
        $year = $_POST['year'];
    }
    function calculate($invent,$rate,$year) {
        $resultOneYear = $invent + ($invent * $rate);
        $result = $resultOneYear * $year;
        return $result;
    }
    echo "<p>Gia tri tuong lai la: " . calculate($invent,$rate,$year) . "</p>";
?>
</body>
</html>

