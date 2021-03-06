<?php
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != '')
    {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];

            //$to = "rupatil98@gmail.com";
            $body = "";

            $body .= "From : ".$userName. "\r\n";
            $body .= "Email : ".$userEmail. "\r\n";
            $body .= "Message : ".$message. "\r\n";

            //mail($to,$messageSubject,$body);
            $message_sent = true;
        }
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Medical Website</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="main_styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="contact_form_style.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
    <style type="text/css">
        span{
    font-weight: bold;
    color: #ff0000;
}
h3{
    text-transform: capitalize;
    font-size: 25px;
}

    </style>

</head>
<body>


    <header>
        <div class="mainheader">
            <div class="logo">
                <img src="images/logo.png">
            </div>

            <nav>
                <a href="index.html">home</a>
                <a href="about.html">about us</a>
                <a href="services.html">services</a>
                <a href="#">contact us</a>
            </nav>

        </div>

        <main>
            <section class="left-sec">
                <h2 style="margin-top: 40px;"><span>Address :</span> A/303, New Venus CHS, opposite Jiddha Hospital, Dindayal Road, Dombivli<br><br> <span>Mobile :</span> +91 8369146416 <br><br><span>E-mail : </span>rupatil98@gmail.com</h2><br><br>

                <h3><span>Map of our Location :</span></h3><br><br>
                
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1865.218899056341!2d73.08484531172354!3d19.22072655937285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7be1f6c54c353%3A0x43c1c0ca1598ccb6!2sNew%20Venus!5e0!3m2!1sen!2sin!4v1607008510897!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
                
            </section>

            <section class="right-sec">
                <figure>
                    <?php
    if($message_sent):
    ?>
        <h3>Thanks for reaching out to us !</h3>

    <?php
    else:
    ?>
    <h3><br><br><span>Send us your feedback</span></h3><br>
                    <div class="container">
        <form action="contact_form.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
        </form>
    </div>
    <?php
        endif;
      ?>
                </figure>
            </section>
        </main><br><br>
<center><h4 style="background-color: #000000;color: #ffffff; padding: 2px 0 2px 0;font-size: 19px;">Copyright &copy; 2020 | Developed by Rutvij, Mrunal and Sandra</h4></center>
    </header>
    
</body>
</html>