<?php 
session_start();
$vis = true;
if(isset($_SESSION['userid']))
{
	$vis = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}
.footer-distributed .footer-left{
  width: 100%;
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
.sec{
    width:auto;
    height: 650px;
}
.a{
    display: flex;
    flex-direction: row;
    width: auto;
    color: white;
     height: 200px;
     justify-content: space-around;
     /* background-color: #212121; */
}
footer{
  background-color: #212121;
}
        .navbar{
	width: 100%;
	margin: auto;
	padding: 0px 0px;
	display: flex;
	align-items: center;
	justify-content: space-between;
    background-color: #070404;
}
.sel 
	{
		font-weight: bold;
		font-size: 28px;
		
	}
.logo{
     width: 200px;
	 /* height: 50px; */
   cursor: pointer;
}
.navbar ul li{
	list-style: none;
	display: inline-block;
	margin: 0 30px;
	position: relative;
}
.navbar ul li a{
	text-decoration: none;
	color: whitesmoke;
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
.vd{
    width: 100%;
	margin: auto;
	padding: 0px 0px;
	display: flex;
	align-items: center;
	justify-content: space-evenly;
    
}

.vd ul li{
	list-style: none;
	display: inline-block;
	margin: 0 30px;
	position: relative;
    font-size: 25px;
    font: bold;
    color:black;
}
.vd input{
    font-size: 15px;
    box-shadow: #070404;
    filter: drop-shadow(2.5px 2.5px 2.5px #070407);
}
h1{ text-align: center;
    color: rgb(195, 32, 32);
   }
body{	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("./uml-pro2.jpg");
	background-repeat:no-repeat;
    background-position: center;
    background-size: cover;

    color: white;
	}
.services td img{
    width: 450px;
	height: 350px;
	object-fit:cover;
	overflow: hidden;
    padding-left: 11rem;
    margin-top: 2.5rem;
    border-radius:  4rem ;
    filter:drop-shadow(10px 10px 10px rgb(144, 140, 140));
    
}
.services td h1{font-size: 35px;
margin-top:5rem;
padding-left:7rem ;
color: white;

margin-bottom: 0px;
margin-bottom: 2rem;}
.services td ul li{font-size: 1.5rem;
    justify-content: space-between;
    margin-top: 9px; 
    color:white;
}
.services td ul {
margin-top: -4rem;
padding-left: 8rem;}
.services td button{margin-left: 6rem;
font-size: 30px;
margin-top: -3rem;
background-color: rgb(55, 215, 162);}
button:hover{
	background: #fff;zx
	color: #009688;
	font-weight:bold;
}
button a{
	text-decoration: none;
	color: white;
}
.services td  h2{
    font-size: 25px;
    color:white;
}


    </style>
</head>
<body>
<div class="navbar" id = "navBar" data-sel='services' <?= ($vis==true)?'data-vis="true"':'data-vis="false"' ?> >	</div>

    <h1 style="color:white">CAR SERVICES</h1>
    <div class="vd">
    <ul>
    <li><b style="color:white">Vehicle Name:</b><input type="text" value="<?php echo isset($_SESSION['vehicle']) ? $_SESSION['vehicle'] : ''; ?>"></li>
    <li><b style="color:white">Vehicle Brand:</b><input type="text" value="<?php echo isset($_SESSION['brand']) ? $_SESSION['brand'] : ''; ?>"></li>
    <li><b style="color:white">Fuel Type:</b><input type="text" value="<?php echo isset($_SESSION['fuel']) ? $_SESSION['fuel'] : ''; ?>"></li>
</ul>


    </div>	
    <div class="services">
        <table>
            <tr>
                <td rowspan="3"><div class="box">
                    <img src="https://i.ibb.co/rm9ppMN/IMG-5154.jpg" alt="">
                </div></td>
                <td><h1>Engine Services</h1></td></tr>
               <tr>   <td> <ul>
                        <li>Air filter change </li>
                        <li>Oil and filter change </li>
                        <li>Coolant</li>
                    </ul></td>
                    <td>
                    <ul>
                        <li>Batteries</li>
                        <li>Alignment</li>
                        <li>Brake fluid</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><h2><pre style="color:white">          2500/-               </pre></h2></td>
                <td><button><a href="payments.php?id=ES&cst=2500">Book your slot</a></button></td></tr>
        </table>

    </div>
    <div class="services">
        <table>
            <tr>
                <td rowspan="3"><div class="box">
                    <img src="https://i.ibb.co/zrqw5Kc/IMG-5156.jpg" alt="">
                </div></td>
                <td><h1>Spare Parts</h1></td></tr>
               <tr>   <td> <ul>
                        <li>PM spares </li>
                        <li> Repair Parts </li>
                        <li>Overhaul </li>
                    </ul></td>
                    <td>
                    <ul>
                        <li>Breakdown spares</li>
                        <li>Shutdown Parts</li>
                        <li>interior parts</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><h2><pre style="color:white">          2500/-               </pre></h2></td>
                <td><button><a href="payments.php?id=SP&cst=2500">Book your slot</a></button></td></tr>
        </table>

    </div>
     <div class="services">
        <table>
            <tr>
                <td rowspan="3"><div class="box">
                    <img src="https://i.ibb.co/Qf2SxVy/IMG-5157.jpg" alt="">
                </div></td>
                <td><h1>AC  Services</h1></td></tr>
               <tr>   <td> <ul>
                        <li>AC installation service </li>
                        <li>Air Filtration Installation</li>
                        <li>Ac Gas Refilling Service </li>
                    </ul></td>
                    <td>
                    <ul>
                        <li>Basic cleaning</li>
                        <li>AC Uninstallation service</li>
                        <li>Duct a C</li>
                    </ul>
                </td>
            </tr>
            <tr><td><h2><pre style="color:white">          2500/-                </pre></h2></td>
                <td><button><a href="payments.php?id=AC&cst=2500">Book your slot</a></button></td></tr>
        </table>

    </div>
    
    <div class="services">
        <table>
            <tr>
                <td rowspan="3"><div class="box">
                    <img src="https://i.ibb.co/XbyrBLX/IMG-5159.jpg" alt="">
                </div></td>
                <td><h1>Puncture Services</h1></td></tr>
               <tr>   <td> <ul>
                        <li>Patch repair </li>
                        <li>Plug repair </li>
                        <li>Combination repair</li>
                    </ul></td>
                    <td>
                    <ul>
                        <li>Tyre Replacement.</li>
                        <li>Air Cheking</li>
                        <li>spare Replacement</li>
                    </ul>
                </td>
            </tr>
            <tr><td><h2><pre style="color:white">          2500/-                </pre></h2></td>
                <td><button><a href="payments.php?id=PS&cst=2500">Book your slot</a></button></td></tr>
        </table>

    </div>
    <div class="services">
        <table>
            <tr>
                <td rowspan="3"><div class="box">
                    <img src="https://i.ibb.co/rm9ppMN/IMG-5154.jpg" alt="">
                </div></td>
                <td><h1>oil Services</h1></td></tr>
               <tr>   <td> <ul>
                        <li>visual oil inspecting </li>
                        <li>anti freeze </li>
                        <li>brake fluid </li>
                    </ul></td>
                    <td>
                    <ul>
                        <li>washer fluid</li>
                        <li>steeing fuild</li>
                        <li>lubrication</li>
                    </ul>
                </td>
            </tr>
            <tr><td><h2><pre style="color:white">          2500/-                </pre></h2></td>
                <td><button><a href="payments.php?id=OS&cst=2500">Book your slot</a></button></td></tr>
        </table>

    </div>
    <div class="services">
        <table>
            <tr>
                <td rowspan="3"><div class="box">
                    <img src="https://i.ibb.co/WgCt8tR/IMG-5158.jpg" alt="">
                </div></td>
                <td><h1>Car Wash</h1></td></tr>
               <tr>   <td> <ul>
                        <li>Automatic Washing </li>
                        <li>anti freeze </li>
                        <li>Waterless Washing</li>
                    </ul></td>
                    <td>
                    <ul>
                        <li>washer fluid</li>
                        <li>Rinseless Washing</li>
                        <li>Interial cleaning</li>
                    </ul>
                </td>
            </tr>
            <tr><td><h2><pre style="color:white">          2500/-                </pre></h2></td>
                <td><button><a href="payments.php?id=CW&cst=2500">Book your slot</a></button></td></tr>
        </table>

    </div>
    <div class="services">
        <table>
            <tr>
                <td rowspan="3"><div class="box">
                    <img src="https://i.ibb.co/55tf4Dx/IMG-5160.jpg" alt="">
                </div></td>
                <td><h1>Other Services</h1></td></tr>
               <tr>   <td> <ul>
                        <li>Normal Winch Towing Service.</li>
                        <li>Spare vehicle </li>
                        <li>Transporting vehicle </li>
                    </ul></td>
                    <td>
                    <ul>
                        <li>Hydraulic Towing Service.</li>
                        <li>steeing fuild</li>
                        <li>Flatbed Towing Service</li>
                    </ul>
                </td>
            </tr>
            <tr><td><h2><pre style="color:white">          2500/-</pre></h2></td>
                <td><button><a href="payments.php?id=OTS&cst=2500">Book your slot</a></button></td></tr>
        </table>
</div><br><br>
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
        <script src="./navScript.js"></script>
</body>
</html>