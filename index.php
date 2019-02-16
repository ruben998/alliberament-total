<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>
<?php require_once('includes/head_section.php') ?>
<title>LifeBlog | Home </title>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
  padding: 70px 25px;
  background: #1abc9c;
  text-align: center;
  margin-left: 1.2em;
}

.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.month .prev {
  float: left;
  padding-top: 10px;
}

.month .next {
  float: right;
  padding-top: 10px;
}

.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #ddd;
  margin-left: 1.2em;

}

.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: #666;
  text-align: center;
}

.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
  margin-left: 1.2em;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #777;
}

.days li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}

.calendar {
	width: 50%;
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
  .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
  .weekdays li, .days li {width: 12.5%;}
  .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
  .weekdays li, .days li {width: 12.2%;}
}
</style>
</head>
<body>
	<?php include('includes/navbar.php') ?>

	<br/>
	<div class="w3-display-container d-md-flex flex-md-equal" style="width: 98%; margin: 1.2em;">
		<img class="mySlides" src="static/images/img_nature_wide.jpg" style="width:100%">
		<img class="mySlides" src="static/images/img_snow_wide.jpg" style="width:100%">
		<img class="mySlides" src="static/images/img_mountains_wide.jpg" style="width:100%">
		<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
			<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
			<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
			<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
			<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
			<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
		</div>
	</div>
	<script>
		var slideIndex = 1;
		carousel();
		showDivs(slideIndex);

		function plusDivs(n) {
			showDivs(slideIndex += n);
		}

		function currentDiv(n) {
			showDivs(slideIndex = n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("demo");
			if (n > x.length) {slideIndex = 1}
				if (n < 1) {slideIndex = x.length}
					for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
					}
					for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" w3-white", "");
					}
					x[slideIndex-1].style.display = "block";  
					dots[slideIndex-1].className += " w3-white";
				}

		function carousel() {

		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  for (i = 0; i < x.length; i++) {
		    x[i].style.display = "none"; 
		  }
		  slideIndex++;
		  if (slideIndex > x.length) {slideIndex = 1} 
		  x[slideIndex-1].style.display = "block"; 
		  setTimeout(carousel, 5000); // Change image every 2 seconds
		  plusDivs(1);
		}
			</script>
			<div class="row">
			<div class="col calendar">
				<div class="month">      
					<ul>
						<li class="prev">&#10094;</li>
						<li class="next">&#10095;</li>
						<li>
							August<br>
							<span style="font-size:18px">2017</span>
						</li>
					</ul>
				</div>

				<ul class="weekdays">
					<li>Mo</li>
					<li>Tu</li>
					<li>We</li>
					<li>Th</li>
					<li>Fr</li>
					<li>Sa</li>
					<li>Su</li>
				</ul>

				<ul class="days">  
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
					<li>6</li>
					<li>7</li>
					<li>8</li>
					<li>9</li>
					<li><span class="active">10</span></li>
					<li>11</li>
					<li>12</li>
					<li>13</li>
					<li>14</li>
					<li>15</li>
					<li>16</li>
					<li>17</li>
					<li>18</li>
					<li>19</li>
					<li>20</li>
					<li>21</li>
					<li>22</li>
					<li>23</li>
					<li>24</li>
					<li>25</li>
					<li>26</li>
					<li>27</li>
					<li>28</li>
					<li>29</li>
					<li>30</li>
					<li>31</li>
				</ul>
			</div>
			<div class="col">
				<h4>News</h4>
			</div>
			</div>
	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
		<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
			<div class="my-3 py-3">
				<h2 class="display-5">Another headline</h2>
				<p class="lead">And an even wittier subheading.</p>
			</div>
			<div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
		</div>
		<div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
			<div class="my-3 p-3">
				<h2 class="display-5">Another headline</h2>
				<p class="lead">And an even wittier subheading.</p>
			</div>
			<div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
		</div>
	</div>

	<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

	<!-- footer -->
	<?php include('includes/footer.php') ?>