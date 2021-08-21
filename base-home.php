<!DOCTYPE html>
<html lang="en">
<head>
    <title>homepage</title>

    <link rel="stylesheet" href="base_furniture/style.css" type="text/css" media="screen">

<style>

    /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  margin-left: auto;
  margin-right: auto;
  width: 960px;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: right;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Containers
----------------------------------------------------------------------------------------------------*/
.container_12 {
	margin-left: auto;
	margin-right: auto;
	width: 960px;
}

.grid_1, .grid_2, .grid_3, .grid_4, .grid_5, .grid_6, .grid_7, .grid_8, .grid_9, .grid_10, .grid_11, .grid_12 {
	display:inline;
	float: left;
	position: relative;
	margin-left: 10px;
	margin-right: 10px;
}

.logo {
	display:inline-block;
	font-size:40px;
	line-height:1.2em;
	;
	color:#262626;
	cursor:pointer;
	letter-spacing:-3px
}
.logo strong {
	color:#ff9601;
	font-weight:normal
}

.menu li a, .list-1 li a, .list-2 li a, .link, .button, .logo {
	text-decoration:none
}



/***** search form *****/
#search-form {
	padding:35px 0px 0 37px
}
#search-form fieldset {
	position:relative;
	width:100%;
	display:block;
	overflow:hidden
}
#search-form .search-field {
	width:181px;
	height:29px;
	background:url(../images/search-input-tail.gif) 0 0 repeat-x;
	border:1px solid #d7d7d7
}
#search-form input {
	width:137px;
	font-size:13px;
	line-height:1.23em;
	padding:6px 10px 7px;
	font-family:Arial, Helvetica, sans-serif;
	background:none;
	border:none;
	margin:0;
	outline:none
}
#search-form .search-button {
	display:block;
	width:17px;
	height:16px;
	text-indent:-5000px;
	background:url(../images/search-icon.gif) 0 0 no-repeat;
	position:absolute;
	right:8px;
	top:7px
}

.row-2 {
	width:100%;
	min-height:101px;
	background:url(../images/row2-tail.gif) left top repeat-x #fff
}

.main {
	width:980px;
	padding:0;
	margin:0 auto;
	font-size:0.8125em;
	line-height:1.6153em
}



.img{
    float:right;
    
    margin-right: 80px;
    width:800px;
    
}

.img2{
    float:left;
    width:15%;
    height:15%;
    margin-left: 262px;
    
}

.img3{
    float:right;
    width:15%;
    height:15%;
    margin-right: 390px;
    
}

.img4{
    float:right;
    width:15%;
    height:15%;
    margin-right: 200px;
    padding-top: 0px;
    
}

.con {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #fbfbfb;
  margin-left: auto;
  margin-right: auto;
  width: 960px;
}

.wrapper {
	width:100%;
	overflow:hidden;
	position:relative
}

.bg-bot {
	width:100%;
	background:url(../images/bg-bot-tail.gif) center top repeat-x #fff;
	padding:30px 0 55px
}
#page3 .bg-bot, #page4 .bg-bot {
	padding:30px 0 49px
}

.prev-indent-bot {
	margin-bottom:10px
}
.prev-indent-bot2 {
	margin-bottom:5px
}


</style>
</head>


    <body>

        <!-- Tab links -->
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'home')">Home</button>
            <button class="tablinks" onclick="openCity(event, 'services')">services</button>
            <button class="tablinks" onclick="openCity(event, 'gallery')">gallery</button>
        </div>

        <div class="row-2">
            <div class="main">
                <div class="container_12">
                    <div class="grid_9">
                    <h1> <a class="logo" href="index.html">BASEL<strong>I</strong>NE</a> <span>Design</span> </h1>
                    </div>
                    <div class="grid_3">
                        <form id="search-form" action="#" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <div class="search-field">
                                <input name="search" type="text">
                                <a class="search-button" href="#"><span>search</span></a> </div>
                            </fieldset>
                        </form>
                    </div>
                <div class="clear"></div>
            </div>
            </div>
        </div>
    <section id="content">
        <div class="con">
             <!--<img src = "base.jpg" class = "img"></img>
             <img src = "base2.jpg" class = "img2"></img>
             <img src = "base3.jpg" class = "img3"></img>
             <img src = "base4.jpg" class = "img4"></img> -->
             <img src = "base5.jpg" class = "img">

            
        </div>

        <div class="bg-bot">
            <div class="main">
                <div class="container_12">
                        <div class="wrapper">
                            <article class="grid_4">
                                <h3 class="prev-indent-bot">About Us</h3>
                                <p class="prev-indent-bot">This Interior Design Template goes with two pack ages: with PSD source files and without them.</p>
                                PSD source files are available for free for the registered members of Templates.com. The basic package (without PSD source) is available for anyone without registration. 
                            </article>
                            <article class="grid_4">
                                <h3 class="prev-indent-bot">Testimonials</h3>
                                <div class="quote">
                                <p class="prev-indent-bot">At vero eos et accusamus et iusto odio tium voluptatum deleniti atque corrupti quos<br>
                                    dolores et quas molestias excepturi sint occaecati cupiditate.</p>
                                <h5>James Reese</h5>
                                Managing Director </div>
                            </article>
                            <article class="grid_4">
                                <h3 class="prev-indent-bot">What’s New?</h3>
                                <time class="tdate-1" datetime="2011-08-15"><a class="link" href="#">15.08.2011</a></time>
                                <p class="prev-indent-bot">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                <time class="tdate-1" datetime="2011-08-11"><a class="link" href="#">11.08.2011</a></time>
                                Totam rem aperiam, eaque ipsa quae ab illo inven tore veritatis et quasi architecto. 
                            </article>
                        </div>
                    </div>
                </div>
        </div>
</section>


<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <div class="grid_4">
          <div>Copyright &copy; <a href="#"></a> All Rights Reserved</div>
          <div>Design by <a target="_blank" href="http://www.calebdesigns.com/">Caleb Nwaeze</a></div>
          <!-- {%FOOTER_LINK} -->
        </div>
        <div class="grid_4"> <span class="phone-numb"><span>+234</span>8067427072</span> </div>
        <div class="grid_4">
          <ul class="list-services">
            <li><a href="#"></a></li>
            <li><a class="item-2" href="#"></a></li>
            <li><a class="item-3" href="#"></a></li>
            <li><a class="item-4" href="#"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
    
    </body>








</html>