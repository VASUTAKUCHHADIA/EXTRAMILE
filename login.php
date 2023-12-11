<?php 
session_start();
if(isset($_SESSION['userid']))
{
    header('Location: index.php');
}
?>
<html lang="en"><head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    }
    .sel 
	{
		font-weight: bold;
		font-size: 28px;
		
	}
    html{
    background: url("https://i.ibb.co/ssM7wzc/PHOTO-2023-09-11-10-39-02.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 600px;}
    body{
    display: grid;
    place-items: center;
    text-align: center;
    background-size: cover;
    

    
    
    }
    body.content{
        padding-top: 30px;
    }
    
    .content{
    width: 330px;
    background-color: rgba(0, 0, 0, 0.58);
    border: 2px solid white;
    border-radius: 10px;
    padding: 40px 30px;
    margin-top: -50px;
    }
    
    
    .content .lable{
    font-size: 25px;
    font-weight: 600;
    margin-bottom: 35px;
    text-align: left;
    color: rgb(247, 233, 233);
    align-items: flex-start;
flex-direction: row;
    }
    
    .content .field{
    height: 50px;
    width: 100%;
    display: flex;
    position: relative;
    }
    
    .from label{
    height: 100%;
    width: 100%;
    padding-left: 45px;
    font-size: 18px;
    outline: none;
    border: none;
    color: #e0d2d2;
    border: 1px solid rgba(255, 255, 255, 0.438);
    border-radius: 8px;
    background: rgba(105, 105, 105, 0);
    
    }
    
    
    .field input::placeholder{
    color: #e0d2d2a6;
    }
    .field:nth-child(2){
    margin-top: 20px;
    }
    
    .field span{
    position: absolute;
    width: 50px;
    line-height: 50px;
    color: #ffffff;
    }
    
    
    
    button{
    margin: 25px 0 0 0;
    width: 50%;
    height: 40px;
    color: rgb(238, 226, 226);
    font-size: 18px;
    font-weight: 600;
    border: 2px solid rgba(255, 255, 255, 0.438);
    border-radius: 8px;
    background: rgba(105, 105, 105, 0);
    margin-top: 40px;
    outline: none;
    cursor: pointer;
    border-radius: 8px;
    
    }
    
    .content .or{
    color: rgba(255, 255, 255, 0.733);
    margin-top: 9px;
    }
    
    .icon-button{
    margin-top: 10px;
    }
    .icon-button span{
    padding-left: 17px;
    padding-right: 17px;
    padding-top: 6px;
    padding-bottom: 6px;
    color: rgba(244, 247, 250, 0.795);
    border-radius: 5px;
    line-height: 30px;
    background: rgba(255, 255, 255, 0.164);
    backdrop-filter: blur(10px);
    }
    .icon-button span.facebook{
    margin-right: 17px;
    
    }
    button:hover,
    .icon-button span:hover{
    background-color: #babecc8c;
    }
    .field input{
        border:2px solid white;
        color:white;
    }
    button{
        border:2px solid white;
        margin-bottom: 18px;    }
    .content label{color: whitesmoke;
      margin-top: 10px;  
    }
    a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
img{
   height: 200px;
   width: 250px;
   margin-left: -1000px;
   margin-top: -35px;
}
h2{
    color: whitesmoke;
    margin-bottom: 10px;
    margin-top: 1px;
}

    </style>
    </head>
    <body>
        <div class="img" ><img src="https://i.ibb.co/J32W5QH/exm-dribbble-4x-removebg-preview-1.png" alt="" srcset="">
        </div>
        <div class="content">.
            <h2>OTP Login</h2>
            <form id="otpFor" method = "POST"></form>
              <div class="a">
                <label for="phoneNumber">Enter Phone Number:</label>
                <br>
                <input type="text" id="phoneNumber" name="phoneNumber" required></div>
                <button type="button" id="sendOTP">Send OTP</button>
                <div id="otpInput">
                    <label for="otp">Enter OTP:</label>
                    <br>
                    <input type="text" id="otp" name="otp" required>
                    <button type="button" id="login">Login</button>
                </div>
            </form>
        </div>
    
        <script>
            var otp = "";
            var phoneNumber = "";
            function generateOTP() {
                return Math.floor(1000 + Math.random() * 9000);
            }
    
            document.getElementById("sendOTP").addEventListener("click", function () {
                phoneNumber = document.getElementById("phoneNumber").value;
                if (phoneNumber) {
                    otp = generateOTP();
                    alert("OTP sent to " + phoneNumber + ": " + otp);
                    document.getElementById("otpInput").style.display = "block";
                    document.getElementById("sendOTP").style.display = "none";
                } else {
                    alert("Please enter a phone number.");
                }
            });
    
            document.getElementById("login").addEventListener("click", function () {
                const enteredOTP = document.getElementById("otp").value;
                const generatedOTP = otp; 
    
                if (enteredOTP === generatedOTP.toString()) {
                    alert("OTP is correct. You are logged in!");
                    window.location.replace(`validLogin.php?userid=${phoneNumber}`);
             
                } else {
                    alert("Enter valid OTP.");
                }
            });
        </script>

    </body>
    </html>