<?php 
session_start();
if(!isset($_SESSION['userid']))
{
    header('Location: index.php');
}
if(!isset($_GET['id']))
{
  header('Location: service.php');
}
$serv = $_GET['id'];
$cst = $_GET['cst'];
$st = array('ES'=> 'Engine Services', 'SP' => 'Spare Parts', 'AC'=>'AC Services', 'PS' => 'Puncture Services', 'OS'=>'Oil Services', 'CW' => 'Car Wash', 'OTS'=>'Other Services');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
   
	.sel 
	{
		font-weight: bold;
		font-size: 28px;
		
	}
	
    .logo{
     width: 150px;
   cursor: pointer;
   background-color: black;
   color: #000;
}
.navbar{
	width: 100%;
	margin: auto;
	padding: 0px 0px;
	display: flex;
	align-items: center;
	justify-content: space-between;
    background-color: #000;
}
.navbar ul li{
	list-style: none;
	display: inline-block;
	margin: 0 30px;
	position: relative;
}
.navbar ul li a{
	text-decoration: none;
	color: #f8f3f3;
	text-transform: uppercase;
}
.navbar ul li::after{
	content: '';
	height: 7px;
	width: 0;
	background: #009688;
	position: absolute;
	left: 0px;
	bottom: -10px;
	transition: 0.9s;
}
.navbar ul li:hover::after{
	width: 100%;
}
.content{
  margin-top: 2rem;
  background-color: white;
  border-radius: 10px;
  padding: 30px 15px;
  margin-bottom: 5px;
  margin-left: 100px;
  box-shadow: -3px -3px 9px #aaa9a9a2,
              3px 3px 7px rgba(147, 149, 151, 0.671);     
 align-items: center;      
 width: 120%;
}
.content1{
  margin-top: 2rem;
  background-color: white;
  border-radius: 10px;
  padding: 30px 15px;
  margin-bottom: 5px;
  margin-left: 350px;
  margin-top: 100px;
  margin-right: 0px;
  box-shadow: -3px -3px 9px #aaa9a9a2,
              3px 3px 7px rgba(147, 149, 151, 0.671);     
 align-items: center;      
 width: 4   0%;
 height: 250px;
}


.content .text{
  font-size: 40px;
  font-weight: 600;
  margin-bottom: 5px;
  padding-left: 2.5rem;
  color: black;
}
.content .items label {
    font-size: 30px;
    padding-left: 1rem;
}
.content .items input {
    font-size: 30px;
    justify-content: center;
    margin-left: 3rem;
}
.content1 .text{
  font-size: 40px;
  font-weight: 600;
  margin-bottom: 5px;
  padding-left: 2.5rem;
  color: black;
}
.content1 .items label {
    font-size: 30px;
    padding-left: 1rem;
}
.content1 .items .a {
    margin-left: 2.55rem;
}
.content1 .items .b {
    margin-left: 0.75rem;
}
.content1 .items .c {
    margin-left: 1.15rem;
}
h1{
    font-size: 40px;
    margin-left: 5.5rem;
}
.content .items .d{
    margin-left: 4rem;
}
form{
    font-size: 25px;
}
footer{
  /* position: fixed; */
  bottom: 0;
}
@media( max-height:800px)
{
  footer{
    position:static;
  }
  header{
    padding-top: 40px;
  }
}
.footer-distributed{
  background-color: #2d2a30;
  box-sizing: border-box;
  widows: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 50px 50px 60px 50px;
  margin-top: 80px;
}
.footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}
.footer-distributed .footer-left{
  width: 30%;
}
.footer-distributed h3{
  color: #fff;
  font: normal 36px 'cookie',cursive;
  margin:0;
}
.footer-distributed h3 span{
  color:#009688;
}
.footer-distributed .footer-links{
  color:#fff;
  margin: 20px 0 12px;
}
.footer-distributed .footer-links a{
  display: inline-block;
  line-height:1.8;
  text-decoration: none;
  color: inherit;
}
.footer-distributed .footer-company-name{
  color:#fff;
  font-size: 14px;
  font-weight: normal;
  margin: 0;

}
.footer-distributed .footer-center{
  width: 35%;
}
.footer-distributed .footer-center i{
  background-color:#33383b;
  color:#fff;
  font-size: 25px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}
.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  list-style: 38px;
}
.footer-distributed .footer-center p{
  display: inline-block;
  color: #fff;
  vertical-align: middle;
  margin: 0;
}
.footer-distributed .footer-center p span{
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}
.footer-distributed .footer-center p a{
  color:#009688;
  text-decoration: none;
}
.footer-distributed .footer-right{
  width:30%;
}
.footer-distributed .footer-company-about{
  line-height: 20px;
  color:#fff;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}
.footer-distributed .footer-company-about span{
  display: block;
  color:#fff;
  font-size:18px;
  font-weight:bold;
  margin-bottom: 20px;
}
.footer-company-name .footer-icons{
  margin-top:25px;

}
.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color: #33383b;
  border-radius: 2px;
  font-size: 20px;
  color: #fff;
  text-align: center;
  line-height: 35px;
  margin-right: 3px;
  margin-bottom: 5px;
}
.footer-distributed .footer-icons a:hover{
  background-color: #3f71ea;
}
.footer-links a:hover{
  color: #3f71ea;
}
@media(max-width: 880px){
  .footer-distributed .footer-links, .footer-distributed .footer-center, .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }
}
.footer-distributed .footer-center i{
  margin-left: 0;
}
body{	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("./uml-pro2.jpg");
	background-repeat:no-repeat;
    background-position: center;
    background-size: cover;

	}
</style>
<body>
    <div class="banner">
             
    <div class="navbar" id = "navBar" data-sel='payment'>	</div>
 
    <table>
        <tr>
   
          <td>  <div class="content">
          <div class="text">Slot Details</div>
           <div class="items">
           <form>
                <label> Service Type: <?=$st[$serv]?></label><br>
               <label>services :  ₹<?= $cst ?>/-</label><br>
               <label>Taxs     : ₹<?= ($cst*12)/100 ?>/-</label><br>
               <label>Total    : ₹<?= $cst + ($cst*12)/100 ?>/-</label><br>
               <label>Discount : ₹<?=(($cst + ($cst*12)/100)*20)/100 ?>/-</label><br>
               <h2 style="margin: 1px 1px 1px 1px">Order Total : ₹<?= $cst + ($cst*12)/100 - (($cst + ($cst*12)/100)*20)/100 ?>/-</h2> 
           </div>
        </div> 
        <h1 style="color: white">Select a Payment method</h1>
        <div class="content">
        <div class="text">Payment Details</div>
           <div class="items">
           <form>
           <input class="a" type="radio" name="user name">Credit or debit card<br>
           <input class="a" type="radio" name="user name">Net banking<br>
           <input class="a" type="radio" name="user name">Other UPI Apps<br>
           <input class="a" type="radio" name="user name">Cash on Delivery<br>
           </form></td>
           <td><div class="content1">
           <div class="text">Customer Details</div>
               <div class="items">
              <form action="dbins.php" method="post">
              <label>Name :</label>
              <input class="a" id="name" type="text" name="name" placeholder="Enter Your Name" required><br>
              <label>Phone no:</label>
              <input class="b" id="phno" type="text" name="phno" placeholder="Enter Your Number" required><br>
              <label>Address   :</label>
              <input class="c" id="addr" type="text" name="addr" placeholder="Enter Your Address" required><br>
              <button type = "submit" value="submit">Submit</button>
              </form>
            </div> </td>
        </tr>

        </table>
        <section class="footer">
			<footer class="footer-distributed">
				<div class="footer-left">
					<h3>Extra <span>Mile</span></h3>

					<p class="footer-links">
						
						<a href="index.php">Home</a>
						|
            <a href="service.php">Services</a>
						|
						<a href="about.php">About</a>
			
					</p>

					<p class="footer-company-name">Copyright @ 2023 <strong>Extra Mail</strong>
					All right reserved</p>
				</div>
				<div class="footer-center">
					<div>
						<i class="fa fa-map-marker"></i>
						<p><span>Visakhapatnam</span>Andhra Pradesh</p>	
					</div>
					<div>
						<i class="fa fa-phone"></i>
						<p><span>+91 9391230151</span></p>
					</div>
					<div>
						<i class="fa fa-envelope"></i>
						<p><a href="#"><span>extramile@gmail.com</span></a></p>
					</div>
				</div>
					<div class="footer-right">
						<p class="footer-company-about">
							<span>About the company</span>
							<strong>Extra Mile</strong>This is a car and bike services providing company .we can have expect mechanics 
						</p><br>
						<div class="footer-icons">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</div>
							
						
					</div>
			</footer>
		   </section>
	
</body>
</html>