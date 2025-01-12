<?php
// If the request is made from our space preview functionality then turn on PHP error reporting
if (isset($_SERVER['HTTP_X_FORWARDED_URL']) && strpos($_SERVER['HTTP_X_FORWARDED_URL'], '.w3spaces-preview.com/') !== false) {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
}
?>

<html>
<head>
<title>RR Pilot App</title>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
div.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  background-color: yellow;
  /* padding: 50px; */
  /* font-size: 12px; */
}

div.stickytop{
  position: -webkit-sticky;
  position: sticky;
  top: 0;

}
div.stickybottom {
  position: -webkit-sticky;
  position: sticky;
  bottom: 0;
}

div.stickyClear {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  background-color: none;
  padding: 50px;
  font-size: 20px;
}


.overflowfixedtop {
    /* background-color: orange; */
    margin: 0;
    height: 20%;
    overflow: auto;
    position: fixed;
    top: 0;
    left:0
}
.overflowfixedright {
    /* background-color: blue; */
    width: 60%;
    height: 50%;
    overflow: auto;
    position: fixed;
    top: 20%;
    right: 0;
}

.overflowfixedrightbottom {
    /* background-color: blue; */
    width: 60%;
    height: 50%;
    overflow: auto;
    position: fixed;
    bottom: 0;
    right: 0;
} 
	
.overflowfixedrightbottom40h10b {
    /* background-color: blue; */
    width: 60%;
    height: 40%;
    overflow: auto;
    position: fixed;
    bottom: 10%;
    right: 0;
} 
	
.overflowfixedleft {
  /* background-color: grey; */
    width: 40%;
    height: 50%;
    overflow: auto;
    overflow-wrap: break-word;
    position: fixed;
    top: 20%;
    left: 0;
}
.overflowfixedleftbottom {
  /* background-color: grey; */
    width: 40%;
    height: 50%;
    overflow-wrap: break-word;
    overflow: auto;
    position: fixed;
    bottom: 0;
    left: 0;
}
.overflowfixedleftbottom40h10b {
  /* background-color: grey; */
    width: 40%;
    height: 40%;
    overflow-wrap: break-word;
    overflow: auto;
    position: fixed;
    bottom: 10%;
    left: 0;
}	
	
.overflowfixedbottom30 {
    background-color: white;
    width: 100%;
    height: 30%;
    overflow-wrap: break-word;
    overflow: auto;
    position: fixed;
    bottom: 0;
    left:0
}
.overflowfixedbottom0 {
    background-color: white;
    width: 100%;
    overflow-wrap: break-word;
    overflow: auto;
    position: fixed;
    bottom: 0;
    left:0
}

.overflowfixedbottom10h0b {
    background-color: white;
    width: 100%;
    height: 10%;
    overflow-wrap: break-word;
    overflow: auto;
    position: fixed;
    bottom: 0;
    left:0
}
	
.overflowfixedmiddle {
  background-color: white;
    /* width: 100%; */
    height: 30%;
    overflow-wrap: break-word;
    overflow: auto;
    position: fixed;
    top: 20%;
    left:0
}
td, th {
vertical-align:top;
}
.rrp-border-black-1{
  border: 1px solid black;
}
.rrp-border-black-5{
  border: 5px solid black;
}


.rrp-height-5p{
  height: 5%;
} 
.rrp-height-10p{
  height: 10%;
} 
.rrp-height-15p{
  height: 15%;
}
.rrp-height-20p{
  height: 20%;
}
.rrp-height-25p{
  height: 25%;
} 
.rrp-height-30p{
  height: 30%;
}
.rrp-height-35p{
  height: 35%;
} 
.rrp-height-40p{
  height: 40%;
} 
.rrp-height-45p{
  height: 45%;
}
.rrp-height-50p{
  height: 50%;
} 
.rrp-height-55p{
  height: 55%;
} 
.rrp-height-60p{
  height: 60%;
} 
.rrp-height-65p{
  height: 65%;
} 
.rrp-height-70p{
  height: 70%;
}
.rrp-height-75p{
  height: 75%;
} 
.rrp-height-80p{
  height: 80%;
} 
.rrp-height-85p{
  height: 85%;
} 
.rrp-height-90p{
  height: 90%;
}
.rrp-height-95p{
  height: 95%;
}
.rrp-height-100p{
  height: 100%; 
}


.rrp-width-5p{
  width: 5%;
} 
.rrp-width-10{
  width: 10%;
} 
.rrp-width-15p{
  width: 15%;
} 
.rrp-width-20p{
  width: 20%;
} 
.rrp-width-30p{
  width: 30%;
} 
.rrp-width-35p{
  width: 35%;
} 
.rrp-width-40p{
  width: 40%;
} 
.rrp-width-50p{
  width: 50%;
} 
.rrp-width-60p{
  width: 60%;
} 
.rrp-width-70p{
  width: 70%;
} 
.rrp-width-80p{
  width: 80%;
} 
.rrp-width-90p{
  width: 90%;
} 
.rrp-width-100p{
  width: 100%;
} 





</style>
<body>
// <?php
//   $y = 9 * 8;
  
//   echo '<h1>My awesome space ' . $y . '</h1>';
//   echo $y; 
// ?>

<div class="w3-container"> 
<div class="overflowfixedtop rrp-border-black-1 rrp-width-100p">Top</div> 
<div>Top Left</div> <div>Top Right</div> 
<div>Mid Left</div> <div>Mid Right</div>
<div class="overflowfixedbottom0 rrp-border-black-1 rrp-width-100p">Bottom</div> 
</div> 
</body>
</html>
