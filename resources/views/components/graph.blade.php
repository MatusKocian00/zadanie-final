<div class="panel-body">
    <canvas id="canvas" height="280 " width="600"></canvas>
</div>
<script>
    const jsObject = {{Js::from(json_decode($data))}};
    const labels = []
    let data = []
    let data2 = []
    for (let i = 1; i < jsObject.length - 1; i++) {
        labels.push(jsObject[i][1]);
        data.push({
            x: jsObject[i][1],
            y: jsObject[i][2]
        })
        data2.push({
            x: jsObject[i][1],
            y: jsObject[i][3]
        })

    }
    var ctx = document.getElementById("canvas").getContext('2d');
    const totalDuration = 5000;
    const delayBetweenPoints = totalDuration / data.length;
    const previousY = (ctx) => ctx.index === 0 ? ctx.chart.scales.y.getPixelForValue(100) : ctx.chart.getDatasetMeta(ctx.datasetIndex).data[ctx.index - 1].getProps(['y'], true).y;
    const animation = {
        x: {
            type: 'number',
            easing: 'linear',
            duration: delayBetweenPoints,
            from: NaN, // the point is initially skipped
            delay(ctx) {
                if (ctx.type !== 'data' || ctx.xStarted) {
                    return 0;
                }
                ctx.xStarted = true;
                return ctx.index * delayBetweenPoints;
            }
        },
        y: {
            type: 'number',
            easing: 'linear',
            duration: delayBetweenPoints,
            from: previousY,
            delay(ctx) {
                if (ctx.type !== 'data' || ctx.yStarted) {
                    return 0;
                }
                ctx.yStarted = true;
                return ctx.index * delayBetweenPoints;
            }
        }
    };
    const config = {
        type: 'line',
        data: {
            datasets: [{
                    borderColor: 'red',
                    borderWidth: 1,
                    radius: 0,
                    data: data,
                },
                {
                    borderColor: 'blue',
                    borderWidth: 1,
                    radius: 0,
                    data: data2,
                }
            ]
        },
        options: {
            animation,
            plugins: {
                legend: true
            },
            scales: {
                x: {
                    type: 'linear'
                },
            }
        }
    };
    var myChart = new Chart(ctx, config);
</script>