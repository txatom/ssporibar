

<style type="text/css">
body
{
margin: 0px;
}
#modalPage
{
display: none;
position: absolute;
width: 100%;
height: 100%;
top: 0px; left: 0px;
}
.modalBackground
{
	filter: Alpha(Opacity=70);
	-moz-opacity:0.4;
	opacity: 0.6;
	width: 100%;
	height: 100%;
	position: absolute;
	z-index:500;
	top: 0px;
	left: 0px;
}
.modalContainer
{
position: absolute;
width: 500px;
left: 50%;
top: 50%;
z-index: 750;
}
.modal
{
background-color: white;
border: solid 4px #DBDBDB; 
position: relative;
top: -150px;
left: -250px;
z-index: 1000;
width: 550px;
min-height: 350px;
padding: 0px;
}
.modalTop
{
width: 550px;
background-image:url(images/hdd.jpg);
color: #ffffff;
min-height:50px;
}
.modalTop a, .modalTop a:visited
{
color: #ffffff;
}
.modalTop a:hover
{
opacity:0.5;
font-size:18px;}

.modalBody
{
padding: 10px;
}
</style>


 
<script language="javascript" type="text/javascript">
function revealModal(divID)
{
window.onscroll = function () { document.getElementById(divID).style.top = document.body.scrollTop; };
document.getElementById(divID).style.display = "block";
document.getElementById(divID).style.top = document.body.scrollTop;
}
function hideModal(divID)
{
document.getElementById(divID).style.display = "none";
}
</script>
<body onLoad="revealModal('modalPage')">

<div id="modalPage">
<div class="modalBackground">
<img src="images/ESCAPE.JPG" height="100%" width="100%" >
</div>
<div class="modalContainer">
<div class="modal">
<div class="modalTop">

<div style="width:60%; float:left; padding-left:80px" align="center"><img src="images/title.png"/></div>
<div style="width:20%; float:right;margin-top:-5px; padding-top: 14px;"align="right">
<a href="<?php echo $link ?>" onClick="hideModal('modalPage')" target="_self"><img src="images/close.png" /></a>
</div></div>

<div style="padding:3px;"><?php echo $arc_mage ?></div>



</div>
</div>
</div>
</body>
