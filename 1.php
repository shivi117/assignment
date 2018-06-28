amlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LIC Insurance</title>
<style type="text/css">
.header{
	width:100%;
	height:200px;

	background-color:#FF3300;
	float:left;
	text-align:center;
	color:#FF33FF;
		}
		
		
.footer{
	width:100%;
	height:200px;

	background-color:#FFFF00;
	float:left;
	text-align:center;
	color:#09F;
		}		
.menu{
	width:100%;
	height:50px;
	
	background-color:blue;
	float:left;
	text-align:center;
	color:#CC3300;
		}
 .image{
    width:100%;
	height:50%px;
	
	background-color:pink;
	float:left;
	text-align:center;
	color:#66CC99;
		}
		
.leftcontent{
	width:33%;
	height:250px;

	background-color:#990000;
	float:left;
	text-align:center;
	color:#CC9900;
		}
.centercontent{
	width:33%;
	height:250px;
	background-image:url(1.jpg);
	float:left;
	text-align:center;
	color: #FFF;
		}
.rightcontent{
	width:32%;
	height:250px;
	
	background-color: #F90;
	float:left;
	text-align:center;
	color: #FFF;
		}		



.leftcontent2{
	width:33%;
	height:250px;

	background-color: #999;
	float:left;
	text-align:center;
	color: #FFF;
		}
.centercontent2{
	width:33%;
	height:250px;

	background-color: #3F6;
	float:left;
	text-align:center;
	color: #FFF;
		}
.rightcontent2{
	width:32%;
	height:250px;

	background-color: #66C;
	float:left;
	text-align:center;
	color: #FFF;
		}	
.frontform{
	margin-top:10px;
}
</style>
<script language="javascript1.5">
function f1()
{
var pa=parseInt(document.getElementById('pa').value);
var duration=parseInt(document.getElementById('duration').value);
var total=pa +(pa*10*duration)/100;
document.getElementById('ta').value=total;
}

</script>
</head>
<body>
<div class="header">
Site's Header <div class="image"><img src="2.jpg"height=50px width=100px>
</div>
<div class="menu">
Site's Menu
</div>
<div class="image">
site's image
</div>

<form method="POST">
<div class="frontform"><input type="text" name="uname" placeholder="Your Name" required="required"  /></div>
<div class="frontform"><input type="email" name="uemail" placeholder="Your Email" required="required"  /></div>
<div class="frontform"><input type="text" name="contact" placeholder="Your Contact" maxlength="10" required="required"  /></div>
<div class="frontform">Male: <input type="radio" name="gender" value="male" /> |
Fe-Male: <input type="radio" name="gender" value="female" /></div>
<div class="frontform">Tech. Prob.<input type="checkbox" value="techproblem" name="techproblem" /> |
duration of course<input type="checkbox" name="duration of course" value="duration of course" /> |
Other<input type="checkbox" name="other" value="other" />
</div>
<div class="frontform"><textarea name="problem" required="required"> Problem ? </textarea></div>

<div class="frontform">
<select name="city" required="required">
<option value="">Select City </option><option value="Delhi">Delhi</option><option value="Meerut">Meerut</option>
</select>
<input type="submit" name="submit"  />
</div>
</div>
</form>
<div class="footer">
</div>

</body>
</html>lkasmdkl