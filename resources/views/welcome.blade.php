@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('assets/style1.css')}}">
  <title>My Website</title>
</head>
<style> 
   @import 'https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700&display=swap';
* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
html {
	font-size: 10px;
	font-family: 'Montserrat', sans-serif;
	scroll-behavior: smooth;
}
a {
	text-decoration: none;
}
.container {
	min-height: 100vh;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
}
img {
	height: 100%;
	width: 100%;
	object-fit: cover;
}
p {
	color: black;
	font-size: 1.4rem;
	margin-top: 5px;
	line-height: 2.5rem;
	font-weight: 300;
	letter-spacing: 0.05rem;
}
.section-title {
	font-size: 4rem;
	font-weight: 300;
	color: black;
	margin-bottom: 10px;
	text-transform: uppercase;
	letter-spacing: 0.2rem;
	text-align: center;
}
.section-title span {
	color: crimson;
}

.cta {
	display: inline-block;
	padding: 10px 30px;
	color: white;
	background-color: transparent;
	border: 2px solid crimson;
	font-size: 2rem;
	text-transform: uppercase;
	letter-spacing: 0.1rem;
	margin-top: 30px;
	transition: 0.3s ease;
	transition-property: background-color, color;
}
.cta:hover {
	color: white;
	background-color: crimson;
}
.brand h1 {
	font-size: 3rem;
	text-transform: uppercase;
	color: white;
}
.brand h1 span {
	color: crimson;
}

/* Header section */
#header {
	position: fixed;
	z-index: 1000;
	left: 0;
	top: 0;
	width: 100vw;
	height: auto;
}
#header .header {
	min-height: 8vh;
	background-color: rgba(31, 30, 30, 0.24);
	transition: 0.3s ease background-color;
}
#header .nav-bar {
	display: flex;
	align-items: center;
	justify-content: space-between;
	width: 100%;
	height: 100%;
	max-width: 1300px;
	padding: 0 10px;
}
#header .nav-list ul {
	list-style: none;
	position: absolute;
	background-color: rgb(31, 30, 30);
	width: 100vw;
	height: 100vh;
	left: 100%;
	top: 0;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	z-index: 1;
	overflow-x: hidden;
	transition: 0.5s ease left;
}
#header .nav-list ul.active {
	left: 0%;
}
#header .nav-list ul a {
	font-size: 2.5rem;
	font-weight: 500;
	letter-spacing: 0.2rem;
	text-decoration: none;
	color: white;
	text-transform: uppercase;
	padding: 20px;
	display: block;
}
#header .nav-list ul a::after {
	content: attr(data-after);
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%) scale(0);
	color: rgba(240, 248, 255, 0.021);
	font-size: 13rem;
	letter-spacing: 50px;
	z-index: -1;
	transition: 0.3s ease letter-spacing;
}
#header .nav-list ul li:hover a::after {
	transform: translate(-50%, -50%) scale(1);
	letter-spacing: initial;
}
#header .nav-list ul li:hover a {
	color: crimson;
}
#header .hamburger {
	height: 60px;
	width: 60px;
	display: inline-block;
	border: 3px solid white;
	border-radius: 50%;
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
	z-index: 100;
	cursor: pointer;
	transform: scale(0.8);
	margin-right: 20px;
}
#header .hamburger:after {
	position: absolute;
	content: '';
	height: 100%;
	width: 100%;
	border-radius: 50%;
	border: 3px solid white;
	animation: hamburger_puls 1s ease infinite;
}
#header .hamburger .bar {
	height: 2px;
	width: 30px;
	position: relative;
	background-color: white;
	z-index: -1;
}
#header .hamburger .bar::after,
#header .hamburger .bar::before {
	content: '';
	position: absolute;
	height: 100%;
	width: 100%;
	left: 0;
	background-color: white;
	transition: 0.3s ease;
	transition-property: top, bottom;
}
#header .hamburger .bar::after {
	top: 8px;
}
#header .hamburger .bar::before {
	bottom: 8px;
}
#header .hamburger.active .bar::before {
	bottom: 0;
}
#header .hamburger.active .bar::after {
	top: 0;
}
/* End Header section */

/* Hero Section */
#hero {
	background-image: url(https://scontent.xx.fbcdn.net/v/t1.15752-9/441287381_964906465120169_3898509429434908803_n.jpg?stp=dst-jpg_s600x600&_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGQ5zyzEwh9bKQTahoFiX7dUF7HOfj5rZxQXsc5-PmtnNo7OVs4Ohpmy1Y4LPH2EpQt8nIPE5tyrd8P7usZYzqc&_nc_ohc=9xcZyNopfGgQ7kNvgHTDR3a&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_Q7cD1QH2P5g_1PGxWbjkt6SHMrNWgvdLm_vVKAokx873LifPlg&oe=666AFA43);
	background-size: cover;
	background-position: top center;
	position: relative;
	z-index: 1;
}
#hero::after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-color: black;
	opacity: 0.7;
	z-index: -1;
}
#hero .hero {
	max-width: 1200px;
	margin: 0 auto;
	padding: 0 50px;
	justify-content: flex-start;
}
#hero h1 {
	display: block;
	width: fit-content;
	font-size: 4rem;
	position: relative;
	color: transparent;
	animation: text_reveal 0.5s ease forwards;
	animation-delay: 1s;
}
#hero h1:nth-child(1) {
	animation-delay: 1s;
}
#hero h1:nth-child(2) {
	animation-delay: 2s;
}
#hero h1:nth-child(3) {
	animation: text_reveal_name 0.5s ease forwards;
	animation-delay: 3s;
}
#hero h1 span {
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 0;
	background-color: crimson;
	animation: text_reveal_box 1s ease;
	animation-delay: 0.5s;
}
#hero h1:nth-child(1) span {
	animation-delay: 0.5s;
}
#hero h1:nth-child(2) span {
	animation-delay: 1.5s;
}
#hero h1:nth-child(3) span {
	animation-delay: 2.5s;
}

/* End Hero Section */

/* Services Section */
#services .services {
	flex-direction: column;
	text-align: center;
	max-width: 1500px;
	margin: 0 auto;
	padding: 100px 0;
}
#services .service-top {
	max-width: 500px;
	margin: 0 auto;
}
#services .service-bottom {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-wrap: wrap;
	margin-top: 50px;
}
#services .service-item {
	flex-basis: 80%;
	display: flex;
	align-items: flex-start;
	justify-content: center;
	flex-direction: column;
	padding: 30px;
	border-radius: 10px;
	background-image: url(./img/pp.jpg);
	background-size: cover;
	margin: 10px 5%;
	position: relative;
	z-index: 1;
	overflow: hidden;
}
#services .service-item::after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
	opacity: 0.9;
	z-index: -1;
}
#services .service-bottom .icon {
	height: 80px;
	width: 80px;
	margin-bottom: 20px;
}
#services .service-item h2 {
	font-size: 2rem;
	color: white;
	margin-bottom: 10px;
	text-transform: uppercase;
}
#services .service-item p {
	color: white;
	text-align: left;
}
/* End Services Section */

/* Projects section */
#projects .projects {
	flex-direction: column;
	max-width: 1200px;
	margin: 0 auto;
	padding: 100px 0;
}
#projects .projects-header h1 {
	margin-bottom: 50px;
}
#projects .all-projects {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
}
#projects .project-item {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	width: 80%;
	margin: 20px auto;
	overflow: hidden;
	border-radius: 10px;
}
#projects .project-info {
	padding: 30px;
	flex-basis: 50%;
	height: 100%;
	display: flex;
	align-items: flex-start;
	justify-content: center;
	flex-direction: column;
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
	color: white;
}
#projects .project-info h1 {
	font-size: 4rem;
	font-weight: 500;
}
#projects .project-info h2 {
	font-size: 1.8rem;
	font-weight: 500;
	margin-top: 10px;
}
#projects .project-info p {
	color: white;
}
#projects .project-img {
	flex-basis: 50%;
	height: 300px;
	overflow: hidden;
	position: relative;
}
#projects .project-img:after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
	opacity: 0.7;
}
#projects .project-img img {
	transition: 0.3s ease transform;
}
#projects .project-item:hover .project-img img {
	transform: scale(1.1);
}
/* End Projects section */

/* About Section */
#about .about {
	flex-direction: column-reverse;
	text-align: center;
	max-width: 1200px;
	margin: 0 auto;
	padding: 100px 20px;
}
#about .col-left {
	width: 250px;
	height: 360px;
}
#about .col-right {
	width: 100%;
}
#about .col-right h2 {
	font-size: 1.8rem;
	font-weight: 500;
	letter-spacing: 0.2rem;
	margin-bottom: 10px;
}
#about .col-right p {
	margin-bottom: 20px;
}
#about .col-right .cta {
	color: black;
	margin-bottom: 50px;
	padding: 10px 20px;
	font-size: 2rem;
}
#about .col-left .about-img {
	height: 100%;
	width: 100%;
	position: relative;
	border: 10px solid white;
}
#about .col-left .about-img::after {
	content: '';
	position: absolute;
	left: -33px;
	top: 19px;
	height: 98%;
	width: 98%;
	border: 7px solid crimson;
	z-index: -1;
}
/* End About Section */

/* contact Section */
#contact .contact {
	flex-direction: column;
	max-width: 1200px;
	margin: 0 auto;
	width: 90%;
}
#contact .contact-items {
	/* max-width: 400px; */
	width: 100%;
}
#contact .contact-item {
	width: 80%;
	padding: 20px;
	text-align: center;
	border-radius: 10px;
	padding: 30px;
	margin: 30px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	box-shadow: 0px 0px 18px 0 #0000002c;
	transition: 0.3s ease box-shadow;
}
#contact .contact-item:hover {
	box-shadow: 0px 0px 5px 0 #0000002c;
}
#contact .icon {
	width: 70px;
	margin: 0 auto;
	margin-bottom: 10px;
}
#contact .contact-info h1 {
	font-size: 2.5rem;
	font-weight: 500;
	margin-bottom: 5px;
}
#contact .contact-info h2 {
	font-size: 1.3rem;
	line-height: 2rem;
	font-weight: 500;
}
/*End contact Section */

/* Footer */
#footer {
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
}
#footer .footer {
	min-height: 200px;
	flex-direction: column;
	padding-top: 50px;
	padding-bottom: 10px;
}
#footer h2 {
	color: white;
	font-weight: 500;
	font-size: 1.8rem;
	letter-spacing: 0.1rem;
	margin-top: 10px;
	margin-bottom: 10px;
}
#footer .social-icon {
	display: flex;
	margin-bottom: 30px;
}
#footer .social-item {
	height: 50px;
	width: 50px;
	margin: 0 5px;
}
#footer .social-item img {
	filter: grayscale(1);
	transition: 0.3s ease filter;
}
#footer .social-item:hover img {
	filter: grayscale(0);
}
#footer p {
	color: white;
	font-size: 1.3rem;
}
/* End Footer */

/* Keyframes */
@keyframes hamburger_puls {
	0% {
		opacity: 1;
		transform: scale(1);
	}
	100% {
		opacity: 0;
		transform: scale(1.4);
	}
}
@keyframes text_reveal_box {
	50% {
		width: 100%;
		left: 0;
	}
	100% {
		width: 0;
		left: 100%;
	}
}
@keyframes text_reveal {
	100% {
		color: white;
	}
}
@keyframes text_reveal_name {
	100% {
		color: crimson;
		font-weight: 500;
	}
}
/* End Keyframes */

/* Media Query For Tablet */
@media only screen and (min-width: 768px) {
	.cta {
		font-size: 2.5rem;
		padding: 20px 60px;
	}
	h1.section-title {
		font-size: 6rem;
	}

	/* Hero */
	#hero h1 {
		font-size: 7rem;
	}
	/* End Hero */

	/* Services Section */
	#services .service-bottom .service-item {
		flex-basis: 45%;
		margin: 2.5%;
	}
	/* End Services Section */

	/* Project */
	#projects .project-item {
		flex-direction: row;
	}
	#projects .project-item:nth-child(even) {
		flex-direction: row-reverse;
	}
	#projects .project-item {
		height: 400px;
		margin: 0;
		width: 100%;
		border-radius: 0;
	}
	#projects .all-projects .project-info {
		height: 100%;
	}
	#projects .all-projects .project-img {
		height: 100%;
	}
	/* End Project */

	/* About */
	#about .about {
		flex-direction: row;
	}
	#about .col-left {
		width: 600px;
		height: 400px;
		padding-left: 60px;
	}
	#about .about .col-left .about-img::after {
		left: -45px;
		top: 34px;
		height: 98%;
		width: 98%;
		border: 10px solid crimson;
	}
	#about .col-right {
		text-align: left;
		padding: 30px;
	}
	#about .col-right h1 {
		text-align: left;
	}
	/* End About */

	/* contact  */
	#contact .contact {
		flex-direction: column;
		padding: 100px 0;
		align-items: center;
		justify-content: center;
		min-width: 20vh;
	}
	#contact .contact-items {
		width: 100%;
		display: flex;
		flex-direction: row;
		justify-content: space-evenly;
		margin: 0;
	}
	#contact .contact-item {
		width: 30%;
		margin: 0;
		flex-direction: row;
	}
	#contact .contact-item .icon {
		height: 100px;
		width: 100px;
	}
	#contact .contact-item .icon img {
		object-fit: contain;
	}
	#contact .contact-item .contact-info {
		width: 100%;
		text-align: left;
		padding-left: 20px;
	}
	/* End contact  */
}
/* End Media Query For Tablet */

/* Media Query For Desktop */
@media only screen and (min-width: 1200px) {
	/* header */
	#header .hamburger {
		display: none;
	}
	#header .nav-list ul {
		position: initial;
		display: block;
		height: auto;
		width: fit-content;
		background-color: transparent;
	}
	#header .nav-list ul li {
		display: inline-block;
	}
	#header .nav-list ul li a {
		font-size: 1.8rem;
	}
	#header .nav-list ul a:after {
		display: none;
	}
	/* End header */

	#services .service-bottom .service-item {
		flex-basis: 22%;
		margin: 1.5%;
	}
}
/* End  Media Query For Desktop */

</style>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>R</span>A</span>P</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Interests</a></li>
            <li><a href="#projects" data-after="Projects">Skills</a></li>
            <li><a href="#about" data-after="About">Hobbies</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>My Name is <span></span></h1>
        <h1>Rafael Matthew C. Bandonil<span></span></h1>
        <a href="#projects" type="button" class="cta">Portfolio</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Int<span>ere</span>sts</h1>
        <p>Apart from being a IT student, I enjoy most of my time being outdoors. 
        During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>

        <p>When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, 
        I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology 
        advancements in the front-end web development world.</p>
      </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">My<span>Skills</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Photography</h1>
            <p>Photography has opened my eyes to the beauty in the world, allowing me to capture moments that evoke emotions and tell stories through my lens. 
                It's a creative outlet that constantly challenges me to see things from different perspectives and grow as an artist.</p>
          </div>
          <div class="project-img">
            <img src="https://scontent.fcrk1-2.fna.fbcdn.net/v/t1.15752-9/440811175_947900293539067_1548067518474723392_n.jpg?stp=dst-jpg_s403x403&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGWVId3gl2NnIWFd9iEoqaC_J6QoaxHChD8npChrEcKEHnMvmwNz1xaK674M_uEZkGcLOtiNRZhwEEBLx76vwfn&_nc_ohc=g6bmMgifd8AQ7kNvgGFM6lW&_nc_ht=scontent.fcrk1-2.fna&oh=03_Q7cD1QGn-lpS_gYTVLzg4d2awjBQTrrwubQMQm1t4PdzpKoudQ&oe=666AC8C8" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Programming</h1>
            <p>I got interested in programming because I love the idea of bringing ideas to life 
                through code and creating solutions that have a real impact on people's lives.</p>
          </div>
          <div class="project-img">
            <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29kaW5nfGVufDB8fDB8fHww" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/441232108_2450870041765719_4826024100091718148_n.jpg?stp=dst-jpg_p320x320&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF-lpwY_2IuyXX5UvG3trU79SN_ujwZOpz1I3-6PBk6nIx7I2IFk9-nykPabQF3b6SKHpn1IVnrKBCfmDuohrGN&_nc_ohc=CHmjEGpFm3AQ7kNvgFBWDaK&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_Q7cD1QHgCH7QQrB-ozOCiSp_jP4JrjEfJWRMo-Po4JpmMwBRbw&oe=666AD801" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title"> My Hob<span>bies</span></h1>
        <h2>Coding</h2>
        <h2>Watching MOvies or Animes</h2>
        <h2>Listening to music</h2>
        
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>09673604825</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>rafaelmatthewbandonil25@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Corro-oy, Santol, La Union</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>R</span>afael <span>M</span>atthew</h1>
      </div>
      <br>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <!-- <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div> -->
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      </div>
      <p>Copyright © 2024 Rafael Matthew. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
   <script>
    const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
    const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
    const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
    const header = document.querySelector('.header.container');

    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      mobile_menu.classList.toggle('active');
    });

    document.addEventListener('scroll', () => {
      var scroll_position = window.scrollY;
      if (scroll_position > 250) {
        header.style.backgroundColor = '#29323c';
      } else {
        header.style.backgroundColor = 'transparent';
      }
    });

    menu_item.forEach((item) => {
      item.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        mobile_menu.classList.toggle('active');
      });
    });
  </script>
    
</body>

</html>

@endsection
