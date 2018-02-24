<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<div class="title-background">
<div class="acc-title"> E-shop</div>
<div class="search_bar_class">
<form method="post" action="search.php">
<input type="text" name="search" id="search" class="search_bar" placeholder="Search for products brands and more">
</form>
</div>
<?php 
session_start();
$c_id=$_SESSION['Cd'];
//echo var_dump($_SESSION['Username']);
if(empty($_SESSION['Username'])){
echo "<div class=\"start\">";
echo "<a href=\"#\" class=\"start1\" id=\"loginclick\" >Login</a>";
echo "<a href=\"para.html\" class=\"start2\">Signup</a>";
echo "</div>";

}

else{
	echo "<div class=\"drop\">";
//session_start();
echo "<div class=\"black\">";
echo $_SESSION['Username']."'s account";
echo "</div>";
echo "<div class=\"dropdown-content1\">";
echo "<a href=\"account.php\"><span class=\"contents\">Account</span></a>";
echo "<span class=\"contents\">Orders</span>";
echo "<span class=\"contents\">Wallet</span>";
echo "<span class=\"contents\">Reviews</span>";
echo "<span class=\"contents\">Wishlist</span>";
echo "<A href=\"logout.php\"><span class=\"contents\">Logout</span></a>";

echo "</div>";
echo "</div>";
}
?>
<div class="clear"></div>
<script>
$(document).ready(function(){
		$(".dropdown-content1").hide();
	$(".drop").click(function(){
		$(".dropdown-content1").toggle();
	});
});
</script>
<div id="lm" class="login-modal">
<div class="login-content">
<div class="login-border1">
</div>
<div class="login-border2">
<span class="close">&times;</span>
<form method="post" action="check.php">
<div class="enter-title">Enter your Username/Mobile number</div>
<input type="text" name="username" class="login-form" required>
<div class="enter-paswrd">Enter password</div>
<input type="password" name="passrd" class="login-form" autocomplete="on"  required><br>	
<button type="submit"class="getin">Get in</button>
<a href="#">
<div class="new-sign">
New to E-shop.!?
</div>
</a>
</form>
<div class="forgot">Forgot anything!?</div>
</div>
</div>
</div>
<script>
var clicks1=document.getElementById("loginclick");
var modal=document.getElementById('lm');
var close=document.getElementsByClassName("close")[0];
clicks1.onclick=function(){
modal.style.display="block";
}
close.onclick=function(){
modal.style.display="none";
}
window.onclick=function(event){
if(event.target==modal){
modal.style.display="none";
}
}
</script>
</div>

<div class="categories">
<span class="cat_title">Featured-Categories</span>
</div>

<div class="left-pane">
<div class="left-pane-border">
<span class="item1">Electronics</span>
</div>
<div class="left-pane-border">
<span>Appliances</span>
</div>
<div class="left-pane-border">
<span class="move">Men</span>
</div>
<div class="left-pane-border">
<span class="move1">Women</span>
</div>
<div class="left-pane-border">
<span>Baby&Kids</span>
</div>
<div class="left-pane-border1">
<span class="move-1">Home&Furniture</span>
</div>
<div class="left-pane-border">
<span>Books&More</span>
</div>
</div>
<div class="right-pane">
<div class="Electronics-pane">
<div class="right-pane-title">
<span>Electronics</span>
</div>
<div class="border-head">
<div class="inside-title">Mobiles</div>
</div>
<div class="border-head">
<div class="inside-title">Laptops</div>
</div>
<div class="border-head">
<div class="inside-title1">Televisions</div>
</div>
<div class="border-head">
<div class="inside-title2">Computer-Pheripherals</div>
</div>
<div class="border-head">
<div class="inside-title3">Mobile-Accessories</div>
</div>
<div class="border-head">
<div class="inside-title">Camera</div>
</div>
<div class="border-head">
<div class="inside-title">Tablets</div>
</div>
<div class="border-head">
<div class="inside-title4">Other Products</div>
</div>
</div>
</div>
<div class="clear"></div>
<?php
$name=$_SESSION['name'];
$Ratings=$_SESSION['Ratings'];
$uname=$_SESSION['Username'];
$pd=$_SESSION['prod_id'];
echo "<div class=\"rate-border\">";
echo "<div class=\"rate-title\">Ratings & Reviews</div>";
echo "<div class=\"product-details\">$name</div>";
echo "<div class=\"clear\"></div>";
echo "<div class=\"product-details1\">$Ratings&#9733;</div>";
echo "</div>";
echo "<div class=\"review-section\">";
echo "<div class=\"review123\">";
echo "<div class=\"review-title\">Review Tips</div>";
echo "<div class=\"rate-tips\">Your review should be about your experience with the product.</div>";
echo "<div class=\"rate-tips\">Your valuable feedback will help fellow shoppers decide!</div>";
echo "<div class=\"rate-tips\">Your review should include facts. An honest opinion is always appreciated. If you have an issue with the product or service please contact us from the help centre.</div>";
echo "</div>";	
echo "</div>";
echo "<div class=\"review-section1\">";
echo "<div class=\"review123-1\">";
echo "<div class=\"space-align-rate\">";
echo "<form method=\"post\" action=\"ratecheck.php\">";
echo "<div class=\"select-star\">Rate this product</div>";
echo "<div class=\"star p\"><span class=\"star q\"></span><span class=\"star r\"></span><span class=\"star s\"></span><span class=\"star t\"></span></div>";
echo "<div class=\"rate-title-1\">Description</div>";
echo "<textarea class=\"desc-border\" name=\"desc_review\"> </textarea>";	
echo "<div class=\"review_title\">Title</div> ";
echo "<textarea class=\"desc-border2\" name=\"desc_title\"></textarea>";
echo "<br>";
echo "<input type=\"submit\"Value=\"SUBMIT\" class=\"sub_review\">";
echo "</form>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "<div class=\"clear\"></div>";
echo "<div class=\"space-bottom\"></div>";
?>
<div class="end-section">
<div class="end-1">
<div class="end-section-title">Help</div>
<div class="end-section1">
<div class="space">
<li>Payments</li>
<li>Saved Cards</li>
<li>Shipping</li>
<li>FAQ</li></div>
</div>
</div>
<div class="end-2">
<div class="end-section-title">E-shop</div>
<div class="end-section1">
<div class="space">
<li>Contact Us</li>
<li>About Us</li>
<li>Carrear</li>
<li>Sell on Eshop</li></div>
</div>
</div>
<div class="end-3">
<div class="end-section-title">Misc</div>
<div class="end-section1">
<div class="space">
<li>Online shopping</li>
<li>Return centre</li>
<li>100% guarantee</li>
<li>Site map</li></div>
</div>
</div>

<div class="end-4">
<div class="end-section-title">Address</div>
<div class="end-section2">
<div class="space">
<li>Eshop Internet private Limited</li>
<li>No-5c Poonga nagar</li>
<li>Varadharajapuram,Cbe-15</li>
<li>Moblie-9442370007</li></div>
</div>
</div>
</div>

<Script>
$(document).ready(function(){
	$(".Electronics-pane").css('display','none');
	$(".item1").on("click",function(){
		$(".Electronics-pane").css('display','block');
		$(".border-head").fadeIn("1000");
	});
});
</script>
<script>
$(document).ready(function(){
		$(".left-pane-border,.left-pane-border1,.left-pane,.right-pane").hide();
	$(".categories").on("click",function(){
		$(".left-pane-border,.left-pane-border1,.left-pane,.right-pane").toggle();
	});
});
</script>
</body>
</html>
