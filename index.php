<html>
  <head>
    <title> Junsay Canvas </title>
	
  </head>
  <script>
  window.onload=function() {
	var canvas=document.getElementById("canvas1");
    var ctx=canvas.getContext('2d');
	
	var canvas=document.getElementById("canvas2");
    var context_2=canvas.getContext('2d');

	var canvas = document.getElementById("canvas3");
    var smileCtx = canvas.getContext("2d");
	var radgrad = smileCtx.createRadialGradient(100,100,10,100,100,100);

	var canvas = document.getElementById("canvas4");
    var ctx4 = canvas.getContext("2d");

	var canvas = document.getElementById("canvas5");
    var context_3 = canvas.getContext("2d");

	var canvas = document.getElementById("canvas6");
    var ctx6 = canvas.getContext("2d");

	var canvas = document.getElementById("canvas7");
    var ctx7 = canvas.getContext("2d");

	var canvas = document.getElementById("canvas8");
    var context_1 = canvas.getContext("2d");

    ctx.fillStyle = '#0065BD';
    ctx.fillRect(0, 0, 200, 200);

    ctx.beginPath();
    ctx.lineWidth = "15";
    ctx.strokeStyle = "white";
    ctx.moveTo(0, 0);
    ctx.lineTo(100, 110);
    ctx.moveTo(200, 0);
    ctx.lineTo(100, 100);
    ctx.stroke();
	
	context_2.beginPath();
context_2.rect(10, 30, 90, 50);
context_2.lineWidth = "6";
context_2.stroke();

context_2.beginPath();
context_2.fillRect(20, 70, 70, 30);
context_2.fillStyle = "#FF0000";

context_2.beginPath();
context_2.rect(30, 6, 50, 20);
context_2.lineWidth = "3";
context_2.stroke();

context_2.beginPath();
context_2.rect(35, 11, 40, 1);
context_2.lineWidth = "1";
context_2.stroke();

context_2.beginPath();
context_2.rect(35, 15, 40, 1);
context_2.lineWidth = "1";
context_2.stroke();

context_2.beginPath();
context_2.rect(35, 19, 40, 1);
context_2.lineWidth = "1";
context_2.stroke();


    radgrad.addColorStop(.5, 'rgba(247,241,192,1)');
    radgrad.addColorStop(1, 'rgba(244,225,56,1)');
    smileCtx.beginPath();

    smileCtx.fillStyle = radgrad;
    smileCtx.arc(100,100,99,0,Math.PI*2);

    smileCtx.stroke();
    smileCtx.fill();

    smileCtx.beginPath();
    smileCtx.moveTo(170,100);
    smileCtx.arc(100,100,70,0,Math.PI);
    smileCtx.stroke();

    smileCtx.beginPath();
    smileCtx.fillStyle = 'black';
    smileCtx.moveTo(60, 65);
    smileCtx.arc(60,65,12,0,Math.PI*2);
    smileCtx.fill();

    smileCtx.beginPath();
    smileCtx.moveTo(140,65);
    smileCtx.arc(140,65,12,0,Math.PI*2);  
    smileCtx.fill();

	ctx4.fillStyle = 'white';
	ctx4.fillRect(90,30,30,120);   
	ctx4.fillStyle = 'white';
	ctx4.fillRect(50,75,110,30);
	
	context_3.beginPath();
context_3.rect(10, 20, 80, 10);
context_3.lineWidth = "6";
context_3.stroke();

context_3.beginPath();
context_3.fillRect(37.5, 2, 25, 15);
context_3.fillStyle = "#FF0000";

context_3.beginPath();
context_3.rect(10, 37, 80, 70);
context_3.lineWidth = "5";
context_3.stroke();

context_3.beginPath();
context_3.rect(30, 50, 1, 40);
context_3.lineWidth = "1";
context_3.stroke();

context_3.beginPath();
context_3.rect(50, 50, 1, 40);
context_3.lineWidth = "1";
context_3.stroke();

context_3.beginPath();
context_3.rect(70, 50, 1, 40);
context_3.lineWidth = "1";
context_3.stroke();

	ctx6.strokeStyle = "green";
    ctx6.lineWidth = 4;
    ctx6.strokeRect(90, 50, 100, 90);
    ctx6.fillStyle = "red";
    ctx6.fillRect(30, 30, 120, 120);
    ctx6.fillStyle = "orange";
    ctx6.beginPath();
    ctx6.arc(90, 90, 55, 0, 2 * Math.PI);
    ctx6.fill();

	ctx7.beginPath();
ctx7.arc(100, 100, 100, 0, 2 * Math.PI, false);
ctx7.closePath();
ctx7.fillStyle = "rgb(255, 0, 0)";
ctx7.stroke();
ctx7.fill();

ctx7.beginPath();
ctx7.arc(100, 100, 20, 0, 2 * Math.PI, false);
ctx7.closePath();
ctx7.fillStyle = "rgb(255, 255, 255)";
ctx7.stroke();
ctx7.fill();
ctx7.beginPath();
ctx7.arc(100, 100, 4, 0, 2 * Math.PI, false);
ctx7.closePath();
ctx7.fillStyle = "rgb(0, 0, 255)";
ctx7.stroke();
ctx7.fill();
ctx7.beginPath();
ctx7.arc(160, 100, 20, 0, 2 * Math.PI, false);
ctx7.closePath();
ctx7.fillStyle = "rgb(255, 255, 255)";
ctx7.stroke();
ctx7.fill();
ctx7.beginPath();
ctx7.arc(160, 100, 4, 0, 2 * Math.PI, false);
ctx7.closePath();
ctx7.fillStyle = "rgb(0, 0, 255)";
ctx7.stroke();
ctx7.fill();
ctx7.beginPath();
ctx7.arc(115, 130, 60, 0, 3, false);
ctx7.closePath();
ctx7.lineWidth = 5;
ctx7.strokeStyle = "rgb(255, 255, 0)";
ctx7.fillStyle = "rgb(255, 255, 255)";
ctx7.stroke();
ctx7.fill();

context_1.beginPath();
context_1.arc(50,50,40,0,2*Math.PI);
context_1.fillStyle = "red";
context_1.fill();

context_1.beginPath();
context_1.arc(50,50,30,0,2*Math.PI);
context_1.fillStyle = "gray";
context_1.fill();

context_1.beginPath();
context_1.fillStyle = "#000000";
context_1.fillRect(48, 0, 5, 105);

context_1.beginPath();
context_1.fillStyle = "#000000";
context_1.fillRect(0, 50, 105, 5);
  }

  </script>
  <body>
  
  <div class = "container">
  <canvas id="canvas1" width="200" height="200"></canvas>
  <canvas id="canvas2" width="200" height="200"></canvas>
  <canvas id="canvas3" width="200" height="200"></canvas>
  <canvas id="canvas4" width="200" height="200" style="background:#D52B1E"></canvas>
  <canvas id="canvas5" width="200" height="200"></canvas>
  <canvas id="canvas6" width="200" height="200"></canvas>
  <canvas id="canvas7" width="200" height="200"></canvas>
  <canvas id="canvas8" width="200" height="200"></canvas>

    
</div>