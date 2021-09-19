<?php
$insert = false;
if(isset($_POST['fname'])){

    $server = "localhost";
    $username = "root";
    $password = "";
    
    $con= mysqli_connect($server, $username,$password);
    
    if(!$con){
        die("connection to this database failed due to " . mysqli_connect_error());
    }
    // echo "successfully connected to the database";
    
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $no = $_POST['no'];
    $rdi = $_POST['rdi'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    $sql = "INSERT INTO `test`.`contact` (`fname`, `sname`, `no`, `rdi`, `subject`, `message`,`datetime`) VALUES ('$fname', '$sname', '$no', '$rdi', '$subject', '$message', current_timestamp());";
    
    // echo $sql;
    
    if($con->query($sql) == true ){
        // echo "inserted successfully";
        $insert = true ;
    }
    else{
        echo "ERROR: $sql <br> $con->error ";
    }
    $con->close();

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <img src="/Image/logo1.png" alt="Claudia Cupcakes" id="image">
        <div id="nav1" class="menu-area">
            <ul class="ul1">
                <li class="li1"><a href="cakes indeed.html" class="menuitem">Home</a> </li>
                <li class="li1">
                    <a href="menu.html" class="menuitem">Menu</a>
                    <ul class="dropdown">
                        <li><a href="">Cake</a></li>
                        <li><a href="">Brownie</a></li>
                        <li><a href="">Rusk</a></li>
                        <li><a href="">Bread</a></li>
                        <li><a href="">Cupcake</a></li>
                        <li><a href="">Pastry</a></li>
                        <li><a href="">Cookies</a></li>
                    </ul> 
                </li>
                <li class="li1"><a href="special.html" class="menuitem">Services</a> </li>
                <li class="li1"><a href="about.html" class="menuitem">About Us</a> </li>
                <li class="li1"><a href="contact.html" class="menuitem">Contact Us</a> </li>
            </ul>
        </div>
    </nav>
    <section>
    <?php
    if($insert == true ){

        echo "<footer>
        <h1>
        Thanks for submitting your form 
        </h1>
        </footer>";
    }
?>
        <form action="contact.php">
            <h2 class="feed">Feedback Form </h2>  
            <input type="text" name="fname" id="fname" placeholder="First Name" class="fitem">
            <input type="text" name="sname" id="sname" placeholder="Last Name" class="fitem">
            <input type="text" name="no" id="no" placeholder="Contact number" class="fitem">
            <div class="fitem" id="radio">
                <div class="radio">
                    <label for="Question">Question</label>
                    <input type="radio" name="rdi" id="Question">
                </div>
                <div class="radio">
                    <label for="Suggestion">Suggestion</label>
                    <input type="radio" name="rdi" id="Suggestion">
                </div>
                <div class="radio">
                    <label for="Comment">Comment</label>
                    <input type="radio" name="rdi" id="Comment">
                </div>
            </div>
            <input type="text" name="subject" id="subject" placeholder="Subject" class="fitem">
            <textarea name="message" id="message"  class="fitem" cols="30" rows="10" placeholder="Message"></textarea>
            <!-- <div class="fitem"> -->
                    <button type="submit" value="submit" id="submit" class="fitem">
                       <p> Submit </p>
                        <img src="/Image/vector-removebg-preview-removebg-preview.png" alt="aero" id="aero">
                    </button>
            <!-- </div> -->
        </form>
        <div id="touch">
            <div class="care">
                <h2 class="feed">Customer Care</h2>
                <a href="tel:6353839190" class="ink">
    
                     &phone; 239-234-4432
                </a>
                <a href="mailto:jatinbhimani04@gmail.com" class="ink">
                    &#9993; jatinbhimani04@gmail.com
                </a>
            </div>
            <div class="care">
                <h2 class="feed">Get in Touch</h2>
                <a href="tel:6353839190" class="ink">
    
                     &phone; +91 6353839190
                </a>
                <a href="mailto:jatinbhimani04@gmail.com" class="ink">
                    &#9993; jatinbhimani18@gnu.ac.in
                </a>
            </div>
        </div>

        <div id="follow">

            <h2 class="feed" id="tube">Follow Us</h2> 
            <div>
                <a href="http://www.youtube.com" target="_blank" class="media">
                    <img src="/Image/you_tube-removebg-preview.png" alt="youtube" class="account">
                    <p>Visit our channel on youtube</p>
                </a>
                <a href="http://www.twitter.com" target="_blank" class="media">
                    <img src="/Image/twitter-removebg-preview.png" alt="twitter" class="account">
                    <p> Follow us on Twitter</p>
                </a>
                <a href="http://www.instagram.com" target="_blank" class="media">
                    <img src="/Image/instagram-removebg-preview.png" alt="instagram" class="account">
                    <p> Follow us on Instagram</p>
                </a>
                <a href="http://www.facebook.com" target="_blank" class="media">
                    <img src="/Image/facebook-removebg-preview.png" alt="facebook" class="account">
                    <p> Follow us on Facebook</p>
                </a>
            </div>
        </div>
    </section>
    <footer>

        <div class="footeritem" id="name1">
            <div id="name">
                <p id="claudia"> Claudia </p>
                <p id="cup"> Cupcakes </p>
            </div>
            <div id="items2">
                <ul id="ul1" class="ul ">
                    <li class="li2"> <a href="about.html" class="a8"> About Claudia Cupcakes</a> </li>
                    <li class="li2">Read our blog</li>
                    <li class="li2">Buy gift cards</li>
                    <li class="li2">Create Business account</li>
                </ul>
                <ul id="ul2" class="ul">
                    <li class="li2"> <a href="contact.html" class="a8"> Get help</a></li>
                    <li class="li2">View store location</li>
                    <li class="li2">Buy our franchise</li>
                </ul>
            </div>

        </div>
        <div id="social" class="footeritem">
            <div id="links">
                <a href="http://www.facebook.com" target="_blank"><img src="/Image/facebook-removebg-preview.png"
                        alt="Facebook Id" class="social"></a>
                <a href="http://www.instagram.com" target="_blank"><img src="/Image/instagram-removebg-preview.png"
                        alt="Instagram Id" class="social"></a>
                <a href="http://www.twitter.com" target="_blank"><img src="/Image/twitter-removebg-preview.png"
                        alt="Twitter Id" class="social"></a>
                <a href="http://www.youtube.com" target="_blank"><img src="/Image/you_tube-removebg-preview.png"
                        alt="Twitter Id" class="social"></a>
            </div>
            <div id="privacy">
                <P class="policy">Privacy Policy</P>
                <p class="policy"> |</p>
                <p class="policy">Terms</p>
                <p class="policy"> |</p>
                <P class="policy">Pricing </P>
            </div>
        </div>
        <div class="footeritem" id="copyright">
            By continuing past this page, you agree to our Terms of Service, Cookie Policy, Privacy Policy and Content
            Policies. All trademarks are properties of their respective owners. 2008-2021 © Claudia Cupcakes™ Pvt Ltd.
            All rights reserved.
        </div>
    </footer>
</body>

</html>