<div class="panel-body">
    <canvas id="canvas" height="280" width="600"></canvas>
</div>
<script>
    const jsObject = {{Js::from($data)}};
    const labels = []
    const x1 = []
    const x2 = []
    for (let i = 1; i < jsObject.length; i++) {
        labels.push(jsObject[i][1]);
        x1.push(jsObject[i][2])
        x2.push(jsObject[i][3])

    }
    const data = {
        labels: labels,
        datasets: [{
                label: 'x1',
                data: x1,
                fill: false,
                borderColor: 'green',
                tension: 0.5
            },
            {
                label: 'x2',
                data: x2,
                fill: false,
                borderColor: 'red',
                tension: 0.1
            }
        ]
    }
    var ctx = document.getElementById("canvas").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });
</script>