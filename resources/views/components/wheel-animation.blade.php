<canvas style="display: block; margin: 20px auto; width: 400px; height: 250px; border: 1px solid #333;" id="animation" width="400" height="250"></canvas>
<script>
  let wheelData = data.map(({
    y
  }) => y);

  let carData = data2.map(({
    y
  }) => y);

  let iterator = 0;

  let canvas;
  let ctx;
  let width = 400;
  let height = 250;

  let loop = function(car, wheel) {
    canvas = document.getElementById("animation");
    ctx = canvas.getContext("2d");

    let carPoint = wheel * 100;
    let wheelPoint = car;
    
    /* Drawing */
    ctx.clearRect(0, 0, width, height);
    ctx.save();

    /* Chasey */
    ctx.beginPath();
    ctx.strokeStyle = "blue"
    ctx.lineWidth = 15;
    ctx.arc(width / 2, carPoint + 95, 70, 3.15, 2 * Math.PI);
    ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(width / 2 - 120, carPoint + 100);
    ctx.lineTo(137.5, carPoint + 100);
    ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(width / 2 + 120, carPoint + 100);
    ctx.lineTo(262.5, carPoint + 100);
    ctx.stroke();

    /* Outer wheel part */
    ctx.beginPath();
    ctx.strokeStyle = "black"
    ctx.fillStyle = "red"
    ctx.lineWidth = 5;
    ctx.arc(width / 2, wheelPoint + 100, 50, 0, 2 * Math.PI);
    ctx.fill();

    /* Inner wheel part */
    ctx.beginPath();
    ctx.fillStyle = "#fff";
    ctx.lineWidth = 3;
    ctx.arc(width / 2, wheelPoint + 100, 30, 0, 2 * Math.PI);
    ctx.fill();

    /* Road */
    ctx.beginPath();
    ctx.lineWidth = 1;
    ctx.moveTo(0, wheelPoint + 150);
    ctx.lineTo(width, wheelPoint + 150);
    ctx.stroke();

    ctx.restore();

    iterator++;

    if (iterator >= carData.length) {
      clearInterval(interval);
    }
  };

  const interval = setInterval(() => loop(wheelData[iterator], carData[iterator]), 10000 / data.length);
</script>