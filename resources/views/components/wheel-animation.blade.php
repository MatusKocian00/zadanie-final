<canvas id="canvas" width="400" height="250"></canvas>

<script>
  const jsObject = {{Js::from(json_decode($data))}};

  let data = []
    let data2 = []
    for (let i = 1; i < jsObject.length - 1; i++) {
        labels.push(jsObject[i][1]);
        // wheel
        data.push({
            x: jsObject[i][1],
            y: jsObject[i][2]
        })
        //car
        data2.push({
            x: jsObject[i][1],
            y: jsObject[i][3]
        })
    }

//     const data = [
//   58.138888888888886, 66.56141975308641, 77.30046982167352, 89.80153067367779,
//   103.45026591178512, 117.60180926809844, 131.61044298950804,
//   144.85832478733695, 156.7820183124677, 166.89572123953997, 174.81026868061917,
//   180.24720815452378, 183.04748483909717, 183.17453075244714, 180.71180710191,
//   175.85509392408366, 168.90004478889227, 160.22571752314536, 150.2749470541169,
//   139.53253795387306, 128.502318581243, 117.68411458408981, 107.55166784977108,
//   98.5324507688287, 90.99020977863645, 85.21092305351122, 81.39268263906744,
//   79.63981989892434, 79.96139392127827, 82.2739646352747,
// ];

let iterator = 0;

/* Spring stiffness, in kg / s^2 */
var k = -20;
var spring_length = 100;

/* Damping constant, in kg / s */
var b = -0.5;

/* Block position and velocity. */
var block = { x: 50, v: 0, mass: 0.5 };
var wall = { x: 50, lx: 50, v: 100, t: 0, frequency: 0 };

var frameRate = 1 / 30;
var frameDelay = frameRate * 100000;

var canvas;
var ctx;
var width = 400;
var height = 250;

var loop = function (val) {
  console.log(val);

  canvas = document.getElementById("canvas");
  ctx = canvas.getContext("2d");

  block.x = val;

  /* Drawing */
  ctx.clearRect(0, 0, width, height);
  ctx.save();

  /* Chasey */
  ctx.beginPath();
  ctx.lineWidth = 15;
  ctx.arc(width / 2, block.x - 5, 70, 3.15, 2 * Math.PI);
  ctx.stroke();

  ctx.beginPath();
  ctx.moveTo(width / 2 - 120, block.x);
  ctx.lineTo(137.5, block.x);
  ctx.stroke();

  ctx.beginPath();
  ctx.moveTo(width / 2 + 120, block.x);
  ctx.lineTo(262.5, block.x);
  ctx.stroke();

  /* Outer wheel part */
  ctx.beginPath();
  ctx.lineWidth = 5;
  ctx.arc(width / 2, block.x, 50, 0, 2 * Math.PI);
  ctx.fill();

  /* Inner wheel part */
  ctx.beginPath();
  ctx.fillStyle = "#fff";
  ctx.lineWidth = 3;
  ctx.arc(width / 2, block.x, 30, 0, 2 * Math.PI);
  ctx.fill();

  /* Road */
  ctx.beginPath();
  ctx.lineWidth = 1;
  ctx.moveTo(0, block.x + 50);
  ctx.lineTo(width, block.x + 50);
  ctx.stroke();

  ctx.restore();

  iterator++;

  if (iterator >= data.length) {
    clearInterval(interval);
  }
};

const interval = setInterval(() => loop(data[iterator]), 3000 / 502);

</script>