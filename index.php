<?php session_start(); ?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0" />
	<title>Hadley Fellows</title>
</head>
<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="/favicon.png">
<!-- favicon -->
<!-- stylesheets -->
<!-- <link href="css/jplayer.blue.monday.css" rel="stylesheet" type="text/css" /> -->
<link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
<!--
	<link rel="stylesheet" href="css/bootstrap.min.css">
-->
<style>


	html,body
	{
		width: 100%;
	    height: 100%;
	    margin: 0px;
	    padding: 0px;
	    /*overflow-x: hidden;*/
	    /*overflow:scroll;*/
		/*-webkit-overflow-scrolling:touch;*/
	    font-family: 'Lato', sans-serif;
	}
		h1
		{
			margin: 20px 0;
			padding: 10px;
			font-size: 102px;
			color: #22231F;
			background: linear-gradient(120deg, #22231F, #161614);
			box-shadow: 0px 5px 8px 1px #161614;
			border: 1px solid #161614;
		}

		h1.main
		{
			font-size: 50px;
	    	/*font-family: 'Satisfy', cursive;*/
			text-align: center;
			width: auto;
			padding: 100px 20px 20px 20px;
			margin: 0 auto;
			color: #000;
			background: #FFF;
			box-shadow: none;
			border: none;
			text-shadow: 2px 5px 5px rgba(0,0,0,0.2);
			display: block;
		}
		h1.author
		{
			text-align: right;
			margin-right: 40px; 
		}
		li.main 
		{
			font-size: 40px;
			text-align: center;
			width: auto;
			padding: 40px;
			margin: 40px 20px;
			/* margin: 0 auto; */
			box-shadow: none;
			border: none;
			list-style: none;
			display: inline-block;
			text-shadow: 0px 1px 1px #4d4d4d;
			background: #161614;
			color: #fff;
			text-shadow: 0px 2px 1px #3A3C35;
			box-shadow: 0px 2px 1px #3a3c35;
		}
		li.main.first
		{
			margin: 40px 20px 40px 40px;
			background: #18A4E7;
		}
		h2
		{
			margin: 0px 30px 0px;
			padding: 40px;
			font-size: 40px;
			text-shadow: 6px 6px 0px rgba(0,0,0,0.2);
		}
		ul
		{
			padding: 0;
			margin: 0;
			/*background: #70E820;*/
			width: 300px;
		}
		option
		{
			color: #272822;
		}
		p
		{
			font-size: 60px;
			text-align: left;
		}
		#js
		{
			background: #3A3C35;
			color: #FFF;
		}

				#string-manip
				{
					display: block;
					width: auto;
					text-align: center;
					font-size: 64px;
					margin: 10px;
				}
				#js ul
				{
					width: 650px;
					margin: 0 auto;
					list-style: none;
					padding-bottom: 10px; 
				}
				#js li
				{
					display: inline-block;
					vertical-align: top;
					padding: 10px;
					font-size: 25px;
				}


</style>
<!-- stylesheets -->
<!-- jquery -->
 
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){



				// strings

				var counter = 0;
				setInterval(function(){
					var ii = document.getElementById('string-effects');
					if(counter == 1)
					{
						ii.getElementsByTagName("li")[4].style.color = "white";
						ii.getElementsByTagName("li")[0].style.color = "#EC8013";
						document.getElementById('string-manip').innerHTML = "*"+document.getElementById('string-manip').innerHTML+"*";		
					}
					else if(counter == 2)
					{
						ii.getElementsByTagName("li")[0].style.color = "white";
						ii.getElementsByTagName("li")[1].style.color = "#EC8013";
						document.getElementById('string-manip').innerHTML =document.getElementById('string-manip').innerHTML.toUpperCase();
					}
					else if(counter == 3)
					{
						ii.getElementsByTagName("li")[1].style.color = "white";
						ii.getElementsByTagName("li")[2].style.color = "#EC8013";
						document.getElementById('string-manip').innerHTML =document.getElementById('string-manip').innerHTML.split("").reverse().join("");
					}
					else if(counter == 4)
					{
						ii.getElementsByTagName("li")[2].style.color = "white";
						ii.getElementsByTagName("li")[3].style.color = "#EC8013";
						var arr = [];
						var stringSplit = document.getElementById('string-manip').innerHTML.split("");
						for (var i = 0; i <=  stringSplit.length; i++) {
							if(
								stringSplit[i] == "a" ||
								stringSplit[i] == "e" ||
								stringSplit[i] == "i" || 
								stringSplit[i] == "o" ||
								stringSplit[i] == "u" ||
								stringSplit[i] == "A" ||
								stringSplit[i] == "E" ||
								stringSplit[i] == "I" || 
								stringSplit[i] == "O" ||
								stringSplit[i] == "U"
							)
							{
							}
							else
							{
								arr.push(stringSplit[i])
							}
						};
						document.getElementById('string-manip').innerHTML = arr.join("");
					}
					else if(counter == 5)
					{
						ii.getElementsByTagName("li")[3].style.color = "white";
						ii.getElementsByTagName("li")[4].style.color = "#EC8013";
						document.getElementById('string-manip').innerHTML = "String Example";
						counter=0;
					}
					counter++;
				},3000);
				// var string = document.getElementById('string-manip');
				// console.log(string);
				function stringAdd() {
					document.getElementById('string-manip').innerHTML = "*"+document.getElementById('string-manip').innerHTML+"*";
					}
				function stringUpcase() {
					document.getElementById('string-manip').innerHTML =document.getElementById('string-manip').innerHTML.toUpperCase();
					}
				function stringReverse() {
					document.getElementById('string-manip').innerHTML =document.getElementById('string-manip').innerHTML.split("").reverse().join("");
					}
				function stringRVowels() {
					var arr = [];
					var stringSplit = document.getElementById('string-manip').innerHTML.split("");
					for (var i = 0; i <=  stringSplit.length; i++) {
						if(
							stringSplit[i] == "a" ||
							stringSplit[i] == "e" ||
							stringSplit[i] == "i" || 
							stringSplit[i] == "o" ||
							stringSplit[i] == "u" ||
							stringSplit[i] == "A" ||
							stringSplit[i] == "E" ||
							stringSplit[i] == "I" || 
							stringSplit[i] == "O" ||
							stringSplit[i] == "U"
						)
						{
						}
						else
						{
							arr.push(stringSplit[i])
						}
					};
					document.getElementById('string-manip').innerHTML = arr.join("");
					}
				function stringReset() {
						document.getElementById('string-manip').innerHTML = "Holla at yo boyeeee";
					}

				// strings




		});
	</script>
<body>
		<div id="js">

			<div id="javascript">
				<h1>RAW JS</h1>
				<div id="jstring">
					<h2>Strings</h2>
					<h3 id="string-manip">String example</h3>
					<div id="string-effects">
						<ul>
							<li onclick="stringAdd()">Add</li>
							<li onclick="stringUpcase()">Upper Case</li>
							<li onclick="stringReverse()">Reverse</li>
							<li onclick="stringRVowels()">Remove Vowels</li>
							<li onclick="stringReset()">Reset</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>