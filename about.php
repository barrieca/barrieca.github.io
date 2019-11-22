<!DOCTYPE html>
<html>
<head>
<title>About Me</title>
<base href="http://web.engr.oregonstate.edu/~barrieca/cs290/">
<meta charset="utf-8">
<link rel="stylesheet" href="./style.css">
<style>
.schedule{
	align: center;
	/*background-color: yellow;*/
}
.schedule table {
	width: 500px;
	border-collapse: collapse;
	border-spacing: 0;
	margin: auto;

}
.schedule th,td {
	width: 12.5%;
	border-style: solid;
	border-width: 1px;
}
.schedule th {
	background-color: gray;
}
.film {
	background-color: #da81f5;
}
.web {
	background-color: #819ff7;
}
.opsystem {
	background-color: #f4fa58;
}
.math {
	background-color: #58fa82;
}
.mecop {
	background-color: #faac58;
}
</style>
</head>
<body>
<?php include('nav'); ?>
<section>
<h4>My Name is Cameron and I am a CS major at OSU.</h4>
<img src="images/IMG_1021.JPG" width=500 alt="cannot display image"><br>
You can contact me at: <a href="mailto:barrieca@oregonstate.edu">barrieca@oregonstate.edu</a>
<br><br><br><br>
<figure class=schedule>
<figcaption>My Schedule</figcaption>
<table>
<tr><td style="border-top: 0px; border-left: 0px;"></td><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>
<tr><td>10:00</td><td rowspan=25>Relax. It's the weekend</td><td></td><td rowspan=3 class=film>Film 125</td><td></td><td rowspan=3 class=film>Film 125</td><td></td><td rowspan=25>Relax. It's the weekend</td></tr>
<tr><td>10:30</td><td></td><td></td><td></td></tr>
<tr><td>11:00</td><td></td><td></td><td></td></tr>
<tr><td>11:30</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>12:00</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>12:30</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>1:00</td><td rowspan=2 class=math>Math 351</td><td></td><td rowspan=2 class=math>Math 351</td><td></td><td rowspan=2 class=math>Math 351</td></tr>
<tr><td>1:30</td><td></td><td></td></tr>
<tr><td>2:00</td><td rowspan=2 class=web>CS 290</td><td></td><td rowspan=2 class=web>CS 290</td><td></td><td rowspan=2 class=web>CS 290</td></tr>
<tr><td>2:30</td><td></td><td></td></tr>
<tr><td>3:00</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>3:30</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>4:00</td><td rowspan=2 class=opsystem>CS 344</td><td></td><td rowspan=2 class=opsystem>CS 344</td><td></td><td rowspan=2 class=opsystem>CS 344</td></tr>
<tr><td>4:30</td><td></td><td></td></tr>
<tr><td>5:00</td><td rowspan=2 class=mecop>ENGR 407</td><td></td><td rowspan =2 class=mecop>ENGR 407</td><td></td><td></td></tr>
<tr><td>5:30</td><td></td><td></td><td></td></tr>
<tr><td>6:00</td><td></td><td></td><td></td><td rowspan=8 class=film>Film 125 Lab</td><td></td></tr>
<tr><td>6:30</td><td></td><td></td><td></td><td></td></tr>
<tr><td>7:00</td><td></td><td></td><td></td><td></td></tr>
<tr><td>7:30</td><td></td><td></td><td></td><td></td></tr>
<tr><td>8:00</td><td></td><td></td><td></td><td></td></tr>
<tr><td>8:30</td><td></td><td></td><td></td><td></td></tr>
<tr><td>9:00</td><td></td><td></td><td></td><td></td></tr>
<tr><td>9:30</td><td></td><td></td><td></td><td></td></tr>
<tr><td>10:00</td><td></td><td></td><td></td><td></td><td></td></tr>
</table>
</figure>
</section>
<?php include('footer'); ?>
</body>
</html>
