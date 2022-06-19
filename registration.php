<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> REGISTRATION FORM</title>
    <link rel="stylesheet" href="registration.css">
</head>

<body>
        <div class="imgbox">
            <img src="regphoto.jpg" class="hospital">
        </div>
       
        <div id="intro2" class="hc-body"><marquee>Do Register With Us</marquee></div>
        <div id="intro3" class="hc-body"> we are always there for you...</div>
        <div id="form3" class="hc-body">
        <form id="signupform" action="backend/register.php" method="GET" >
            <input placeholder=" Name" type="text" id="namebox1" name="name" />
            <input placeholder="Address" type="text" id="namebox2 " name="addresss1" /> <br>
            <input placeholder="Phonenumber" type="text" id="namebox3" name="phone" /> <br>
            <input placeholder="Email" type="text" id="mailbox"  name="email"/><br>
            <input placeholder="Password" type="password" id="passwordbox"   name="pswd"/><br>
            <input type="date" id="datebox" name="dob" /><br><br>
            <input type="radio" id="m"  value="male" name="gen1" />Male
            <input type="radio" id="f"  value="female" name="gen2"/>Female<br><br>
            <input type="submit" class="button2" value="Create an account" name="signup" />
        </form>
            <br>
            <hr>
            <p id="intro5">Created by @Alisha</p>
            
        </div>
        <div class="inputbox">
            <p>Have an account? <a href="loginpage.php">Login</a></p>
        </div>
    
   
</body>

</html>