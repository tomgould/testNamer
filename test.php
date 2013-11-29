<!DOCTYPE html><html>
<head>
<title></title>
<style type="text/css">
  body {background: #000}
  #content {
    width:300px;
    margin:25px auto 0;
    background-color:#fff;
    padding:20px 15px;
    border:7px solid #ccc;
    border-bottom:10px solid #999;
    border-top:5px solid #ddd;
    border-radius:10px;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
  }
  h1 {
    color:#00FF00;
    text-align:center;
    font-size:50px;
  }
  p {
    font-family:"Times New Roman";
    font-size:20px;
  }
  form input {
    font-family:"Times New Roman";
    font-size:30px;
    width: 800px;
    background-color:#000;
    border: 3px solid #00FF00;
    color: #00FF00;
  }
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.js"></script>
</head>
<body>
<?php
if ($_GET['string']) {
  print '<h1>test' . trim(str_replace(' ', '', ucwords($_GET['string']))) . '</h1>';
}
?>
<table class="content" width="100%">
  <tr>
    <td align="center">
      <form action="">
        <input name="string">
      </form>
    </td>
  </tr>
</table>
<script type="text/javascript">
var colors = Array('#000000', '#FF0000', '#0000FF', '#FFFF00', '#00FFFF', '#FF00FF', '#C0C0C0', '#FFFFFF'); //List the hex codes you want to loop through here.
var color_index = 0;
var interval = 10; //How long the color blend transition lasts. (in milliseconds, 1000 = 1 second)

function bg_color_tween() {
	$('body').animate({ backgroundColor: colors[color_index] }, interval, 'linear', function() {
		if(color_index == colors.length) { color_index = 0; } //If we are at the end of the colors array go back to the beginning.
		else { color_index++; } //Lets move to the next color in the colors array.s

		bg_color_tween();
	});
}

$(document).ready(function() {
	//bg_color_tween();
});
</script>
</body>
</html>
