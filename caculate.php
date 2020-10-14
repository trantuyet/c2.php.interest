<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input {
        width: 300px;
        font-size: 18px;
        border: 2px solid #33065f;
        border-radius: 30px;
        padding: 12px 10px 12px 10px;
    }

    #submit {
        border: 1px solid black;
        border-radius: 20px;
        padding: 10px 32px;
        font-size: 16px;
        background: #3c088e;
    }
</style>
<body>
<form method="post">
    <table>
        <tr>
            <td><h2 style="color: purple">Số tiền gốc </h2></td>
            <td><input type="text" name="present_value" ></td>
        </tr>
        <tr>
            <td><h2 style="color: purple">Lãi suất (%) </h2></td>
            <td><input type="text" name="interest_rate" ></td>
        </tr>
        <tr>
            <td><h2 style="color: purple">Số năm</h2></td>
            <td><input type="text" name="years" ></td>
        </tr>
        <tr>
            <td>
                <button type="submit" id="submit">Gửi</button>
            </td>
        </tr>
    </table>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value_1 = $_POST["present_value"];
    $value_2 = $_POST["interest_rate"];
    $value_3 = $_POST["years"];
    $future = ($value_1 + ($value_1*$value_2))*$value_3;
    echo "Số tiền sẽ có được trong ".$value_3." năm ". ", với lãi suất ". $value_2 . "% là " ."<h2> $future </h2";
}
?>
</body>
</html>