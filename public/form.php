<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <div>
        <label for="command" id="label">Enter command</label>
        <input type="text" id="command" name="command">
        <button type="button" onclick="get_data()">GO</button>
    </div>
    <div id="answerDiv">
    </div>
<script>
    const get_data = () => {
        let answerDiv = document.querySelector("#answerDiv");
        answerDiv.innerHTML = "";
        fetch(`/final/api.php`, {
            method: 'GET'
        }).then(response => response.json())
            .then((result) => {console.log(result); return result})
            .then(result => {answerDiv.innerHTML = JSON.stringify(result)
            });
    }
</script>
</body>
</html>
