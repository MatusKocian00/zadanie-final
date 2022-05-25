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
  let ctx2;
  let width = 400;
  let height = 250;

  let loop = function(car, wheel) {
    canvas = document.getElementById("animation");
    ctx2 = canvas.getContext("2d");

    let carPoint = wheel * 100;
    let wheelPoint = car;

    /* Drawing */
    ctx2.clearRect(0, 0, width, height);
    ctx2.save();

    /* Chasey */
    ctx2.beginPath();
    ctx2.strokeStyle = "blue"
    ctx2.lineWidth = 15;
    ctx2.arc(width / 2, carPoint + 95, 70, 3.15, 2 * Math.PI);
    ctx2.stroke();

    ctx2.beginPath();
    ctx2.moveTo(width / 2 - 120, carPoint + 100);
    ctx2.lineTo(137.5, carPoint + 100);
    ctx2.stroke();

    ctx2.beginPath();
    ctx2.moveTo(width / 2 + 120, carPoint + 100);
    ctx2.lineTo(262.5, carPoint + 100);
    ctx2.stroke();

    /* Outer wheel part */
    ctx2.beginPath();
    ctx2.strokeStyle = "black"
    ctx2.fillStyle = "red"
    ctx2.lineWidth = 5;
    ctx2.arc(width / 2, wheelPoint + 100, 50, 0, 2 * Math.PI);
    ctx2.fill();

    /* Inner wheel part */
    ctx2.beginPath();
    ctx2.fillStyle = "#fff";
    ctx2.lineWidth = 3;
    ctx2.arc(width / 2, wheelPoint + 100, 30, 0, 2 * Math.PI);
    ctx2.fill();

    /* Road */
    ctx2.beginPath();
    ctx2.lineWidth = 1;
    ctx2.moveTo(0, wheelPoint + 150);
    ctx2.lineTo(width, wheelPoint + 150);
    ctx2.stroke();

    ctx2.restore();

    iterator++;

    if (iterator >= carData.length) {
      clearInterval(interval);
    }
  };

  const interval = setInterval(() => loop(wheelData[iterator], carData[iterator]), 10000 / data.length);
</script>