<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
		<img src="kepek/nje.png" draggable="true" ondragstart="drag(event)" id="drag1" width="400" height="300">
	</div>
	<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    
    <canvas id="mycanvas" width="300" height="150" style="border:1px solid #d3d3d3;">
        Your browser does not support canvas!
    </canvas> 
    <script>
        var c = document.getElementById("mycanvas");
        var ctx = c.getContext("2d");
        ctx.rotate(20 * Math.PI / 180);
        ctx.fillRect(50, 20, 100, 50);
    </script>

    <svg width="400" height="100">
	  <rect width="400" height="100" style="fill:rgb(0,0,255);stroke-width:10;stroke:rgb(0,0,0)" />
	</svg>
	<div>
	Name:<br>
		<input type="text" id="name1" name="name2" value="" onKeyUp="typing();">
		<br>
		<select size="10" id="list1" name="list2" onChange="choose();">
		</select>
        <div id="exam" style="display: none">
            <h2>Exam</h2>
            <p>Time: <span id="time1"></span><br>
            Venue: <span id="venue1"></span></p>
        </div>
    </div>