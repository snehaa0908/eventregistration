<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 100%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.container {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.container:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.click{
  text-align: center;
}
</style>
</head>
<body>

<h2>Images Side by Side</h2>
<p>How to create side-by-side images with the CSS float property:</p>

<div class="row">
  <div class="column">
    <div class="container">
  <img src="https://content.thriveglobal.in/wp-content/uploads/sites/3/2019/02/IMG_20190208_111641.jpg" alt="Avatar" class="image" >
  <div class="overlay">
    <div class="text">TECHNICAL<div class="click">
<a href="tech.php" class="myButton" style="width:200px;height: 50px;text-align: center;padding-left: center;">VIEW EVENTS</a>
</div></div>
  </div>
</div>
  </div>
  <div class="column">
    <div class="container">
  <img src="https://content.thriveglobal.in/wp-content/uploads/sites/3/2019/02/IMG_20190208_111641.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">NON TECHNICAL<div class="click">
<a href="#" class="myButton" style="width:200px;height: 50px;text-align: center;padding-left: center;">VIEW EVENTS</a>
</div></div>
  </div>
</div>
  </div>
  <div class="column">
    <div class="container">
  <img src="https://content.thriveglobal.in/wp-content/uploads/sites/3/2019/02/IMG_20190208_111641.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">PROJECT DISPLAY<div class="click">
<a href="#" class="myButton" style="width:200px;height: 50px;text-align: center;padding-left: center;">VIEW EVENTS</a>
</div></div>
  </div>
</div>
  </div>
</div>

</body>
</html>