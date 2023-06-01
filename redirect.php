<?php
$deeplink = $_GET['deeplink'];
if (!empty($deeplink)) {
    header("Location: $deeplink");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru-RU"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Deeplink test</title>
</head>
<body>
    <form>
        <label for="deeplink">Paste deeplink here:</label>
        <input type="text" id="deeplink" name="deeplink">
        <input type="submit" value="Navigate">
    </form>
</body>
</html>