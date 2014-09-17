<! doctype html>
<html>
<head>
	<title>Samantha Nakis CSCI E-15 Class Projects</title>
</head>
<style>
#header {
    width: 100%;
    padding: 10px;
    border-top-style: solid;
    border-bottom-style: solid;
    border-color: gray;
    border-width: 5px;
    margin: 0; 
    text-align: center;
    background-color: #DB7093;
}

#sidebar {
	border: solid gray 5px;
	border-top-style: none;
	margin: 0;	
	height: 100%;
	background-color: #BC8F8F;
	width: 110px;
	float: left;
	text-align: center;
}

#aboutme {
	text-align: center;
	margin-right: 300px;
	margin-left: 300px;
	padding: 10px;
	background-color: #FFE4E1;
	border-radius: 25px;
}

#mypic {
	border: double gray 5px;
}

#bodyofsite {
	background-image: url("images/flower_image.jpg");
	background-size: 100% 100%;
	background-repeat: no-repeat;
}

.question {
	font-style: bold;
}
.answer {
	font-style: italic;
}

div {
	font-family: "Arial";
	color: #2F4F4F;
}

/* color of unvisited link */
a:link {
    color: #2F4F4F;
}

/*color of visited link */
a:visited {
	color: #800000;
}

</style>

<body>
	<div id="header">
	<h1>Samantha Nakis CSCI E-15 Projects</h1>
	</div>

	<div id="bodyofsite">
		<div id="sidebar">
		<br>
		<b>Project Links</b>
		<br><br>
		<a class="projectlink" href="http://p2.samanthanakis.me/">Project 2</a>
		<br><br>
		<a class="projectlink" href="http://p3.samanthanakis.me/">Project 3</a>
		<br><br>
		<a class="projectlink" href="http://p4.samanthanakis.me/">Project 4</a>
		<br><br>
		</div>

		<div id="aboutme">
		<br>
		<img id= "mypic" src="images/sam_picture.jpg" alt="Samantha Nakis">
		<br>
		<h3 class="question">Who am I and what do I do?</h3><br>
		<p class="answer">I am a manager at a software company for a group of software developers, all of which are new college graduates. Most of my day to day activities are project management and managing interactions with our customers. However, from time to time I also like to get my hands dirty with code.</p><br>
		<h3 class="question">Why am I taking this course?</h3><br>
		<p class="answer">The software world is quicky moving toward web-based everything. Applications that were previously written in C++ and installed on your desktop are now running as a web-app in your browser. I am hoping to gain some practical skills that will enable me develop these applications on my own. I am also hoping to gain skills that allow me to more compitently work with web-based teams at work.</p><br>
		<h3 class="question">What previous experience do I have with programming?</h3><br>
		<p class="answer">My educational background is in computer engineering and most of my technical work has been in C/C++ and low-level programming.</p><br>
		<h3 class="question">What platform am I using?</h3>
		<p class="answer">I am working on a Windows 8 machine.</p><br>
		</div>
	</div>

</body>
</html>
