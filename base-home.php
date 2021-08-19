<!DOCTYPE html>
<html lang="en">
<head>
    <title>homepage</title>
</head>
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
</style>

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
    
    </body>








</html>