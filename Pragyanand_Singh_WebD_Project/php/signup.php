<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Set High</title>
    <link rel="stylesheet" href="../css/signup.css">             
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lobster&family=Baloo+Bhaijaan+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"/>
    
    <script src="../js/mysite.js" ></script>
</head>
<body>
    <div class="container">
        <heading id="heading">Set High</heading>
        <nav id="navbar" >
            <span class="item" id="item1"><a href="../index.html" target="_blank">Home</a></span>
            <span class="item" id="item2"><a href="" target="_blank">Blogs</a></span>
            <span class="item" id="item3"><a href="../About_Us.html" target="_blank">About Us</a></span>
            <span class="item" id="item4"><a href="../Contact_Us.html" target="_blank">Contact Us</a></span>
            <input id="Search" class="item" placeholder="Search our cources">
            <i id="bar" class="fas fa-solid fa-bars" onclick="btn()"></i>
        </nav>
        <div id="bar_item"  class="show">
            <div><a href="../index.html" >Sign in</a> </div>
            <div><a href="signup.php">Register</a></div>
            <div><a href="../Contact_Us.html">Help</a></div>
        </div>
<section id="section1" >
        <form method="post">
        <table style="border-radius: 30px;" border="5" width="40%" align="center" valign="middle"
            cellspacing="7" bgcolor="lightgrey">      

            <tr halign="center" valign="middle">
                <th colspan=2 Class="Round" bgcolor="honeydew">
                    <font face="algerian" color="blue" size="5">Sign Up Now
                </th>
            </tr>


            <tr align="center" valign="middle">
                <td Class="Round">Name</td>
                <td Class="Round">
                    <input type="text" name="txt1" Class="Round">
                </td>
            </tr>

            <tr align="center" valign="middle">
                <td Class="Round">Age</td>
                <td Class="Round">
                    <input type="text" name="txt2" Class="Round">   
                </td>
            </tr>

            <tr align="center" valign="middle">
                <td Class="Round">Email ID</td>
                <td Class="Round">
                    <input type="email" name="txt3" Class="Round">
                </td>
            </tr>

            <tr align="center" valign="middle">
                <td Class="Round">Password</td>
                <td Class="Round">
                    <input type="Password" name="ps1" Class="Round">
                </td>
            </tr>

            <tr align="center" valign="middle">
                <td Class="Round">Gender</td>
                <td Class="Round">
                        <input type="radio" name="rd" />Male
                        <input type="radio" name="rd" />Female
                        <input type="radio" name="rd" />Others
                    
                </td>
            </tr>

            <tr align="center" valign="middle">
                <td Class="Round">Phone</td>
                <td Class="Round">
                    <input type="text" name="txt3" Class="Round">
                </td>
            </tr>

        </table>
            <input type="submit" name="sb1" value="Sign Up" id="MySub" Class="FinalCall" onclick="message()" />
        </form>
</section>
<footer id="footer" >
    <span class="copy" style="font-family:serif; color:white; font-weight:bold;">&copy; All rights
        reserved (PNS 2022)</span>
        <span class="icon" id="icon1"><img src="../icons/fb.png" height="35px" width="40px"></span>
        <span class="icon" id="icon2"><img src="../icons/twitter.png" height="30px" width="30px"></span>
        <span class="icon" id="icon3"><img src="../icons/yt.png" height="50px" width="60px"></span>
        <span class="icon" id="icon4"><img src="../icons/wtsap.png" height="30px" width="30px"></span>
        <span class="icon" id="icon5"><img src="../icons/insta.png" height="40px" width="40px"></span>
</footer>
</body>
</html>