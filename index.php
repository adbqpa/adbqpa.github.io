<!DOCTYPE html>
<html lang="ru-RU"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Deeplink test</title>
    <script type="text/javascript">
        function addDeeplinkToList() {
            let deeplinkInput = document.getElementById("deeplink")
            let deepList = document.getElementById("links")
            for (let i = 0; i < deepList.children.length; i++) {
                if (deepList.children[i].firstChild.href == deeplinkInput.value) {
                    return
                }
                if (deepList.children[i].firstChild.href == deeplinkInput.value + "/") {
                    return
                }
            }
            let a = document.createElement("a")
            a.href = deeplinkInput.value
            a.innerHTML = a.href
            let li = document.createElement("li")
            li.appendChild(a)
            deepList.appendChild(li)
        }
    </script>
</head>
<body>
    <form>
        <label for="deeplink">Paste deeplink here:</label>
        <input type="text" id="deeplink">
        <input type="button" value="Add" onclick="addDeeplinkToList()">
    </form>
    <ul id="links">
    </ul>
</body>
</html>