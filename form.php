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
        let input = document.querySelector("#command").value;
        input = "'" + input + "'";
        answerDiv.innerHTML = "";
        fetch("/final/api.php?command=" + encodeURIComponent(input), {
            method: 'GET'
        }).then(response => response.json())
            .then((result) => {console.log(result); return result})
            .then(result => {answerDiv.innerHTML = JSON.stringify(result)
            });
    }

    let button = document.getElementById("button");
    button.addEventListener("click", function () {
        let doc = new jsPDF("p", "pt", [841.89, 595.28]);
        let makePDF = document.getElementById("printDiv");
        const margins = {
            top: 40,
            left: 40
        };

        doc.fromHTML(makePDF, margins.left, margins.top);
        doc.save("popis_API.pdf");
    });
</script>
</body>
</html>
