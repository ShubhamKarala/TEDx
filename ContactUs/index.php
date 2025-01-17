
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="../Style/nav.css" />
    <link rel="stylesheet" href="../Style/contact.css" />
    <link rel="stylesheet" href="../Style/footer.css" />
    <link rel="stylesheet" href="../Style/navMedia.css" />
    <link rel="stylesheet" href="../Style/footerMedia.css" />
    <link rel="stylesheet" href="../Style/contactMedia.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="http://parsleyjs.org/dist/parsley.js"></script>
</head>

<body>
    <div class="top"></div>
    <label id="overlay" for="sidebar"></label>
    <nav>
        <input type="checkbox" name="ham" id="sidebar" />
        <label for="sidebar"><img src="../Images/Hamburger.svg" class="white open-sidebar" /></label>

        <div class="navbar">
            <div class="logo">
                <a href="index.html">
                    <img src="../Images/TedxLogo.svg" alt="TEDx Logo" />
                </a>
            </div>

            <ul class="menu">
                <label for="sidebar"><img src="Images/Close.svg" alt="" class="white close-sidebar" /></label>
                <li><a href="../index.html">HOME</a></li>
                <li><a href="../speakers.html">SPEAKERS</a></li>
                <li><a href="../team.html">OUR TEAM</a></li>
                <li><a href="#Contact">SPONSORS</a></li>
                <li><a href="index.php" id="current">CONTACT US</a></li>
                <li id="Register"><a href="../Respond/index.php">REGISTER</a></li>
            </ul>
        </div>
    </nav>

    <section class="layout">
        <div class="block">
            <h1>Contact Us</h1>
            <form id="form" method="POST">
                <div class="input">
                    <p>Name</p>
                    <input type="text" name="name" id="name" placeholder="John Doe" required data-parsley-pattern="^[a-zA-Z\s'-]+$" data-parsley-trigger="keyup" class="form-control" data-parsley-pattern-message="Enter Valid Name" />
                </div>
                <div class="input">
                    <p>E-Mail Address</p>
                    <input type="text" name="email" id="email" placeholder="yourname@example.com" required data-parsley-type="email" data-parsley-trigger="keyup" />
                </div>
                <div class="input">
                    <p>Phone Number</p>
                    <input type="text" name="phone" id="phone" placeholder="12345 67890" value="" data-parsley-pattern="^(?:\+91|91|0)?[6-9]\d{9}$" data-parsley-pattern-message="Enter Valid Phone Number" data-parsley-trigger="keyup" required class="form-control" />
                </div>
                <div class="input">
                    <p>Message</p>
                    <textarea name="message" id="message" placeholder="Enter the message..." rows="6" cols="40" required data-parsley-trigger="keyup" class="form-control"></textarea>
                </div>
                <button type="submit" id="submit" class="submit" name="submit" value="Register">Send</button>
            </form>
        </div>
        <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" class="svg1">
            <defs>
                <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                    <stop id="stop1" stop-color="rgba(106, 1, 1, 1)" offset="0%"></stop>
                    <stop id="stop2" stop-color="rgba(33, 0, 0, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path fill="url(#sw-gradient)" d="M20.8,-27.4C25.5,-20.8,26.8,-12.9,27.1,-5.6C27.3,1.6,26.5,8.2,24.5,16.5C22.5,24.8,19.4,34.8,12.7,39C6,43.1,-4.2,41.4,-10.7,36.1C-17.1,30.8,-19.8,21.9,-24.8,13.9C-29.9,6,-37.4,-1,-38.7,-9.2C-40.1,-17.4,-35.3,-26.9,-27.8,-33C-20.4,-39.1,-10.2,-41.7,-1.1,-40.5C8,-39.2,16.1,-33.9,20.8,-27.4Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: 0.3s" stroke="url(#sw-gradient)"></path>
        </svg>
        <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" class="svg2">
            <defs>
                <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                    <stop id="stop1" stop-color="rgba(106, 1, 1, 1)" offset="0%"></stop>
                    <stop id="stop2" stop-color="rgba(33, 0, 0, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path fill="url(#sw-gradient)" d="M18.1,-27C24,-20.6,29.7,-16.1,30.1,-10.8C30.4,-5.5,25.3,0.5,23.1,7.6C20.9,14.6,21.6,22.7,18.3,29.6C14.9,36.6,7.4,42.4,-0.5,43.1C-8.5,43.9,-17,39.5,-23.5,33.5C-30,27.6,-34.5,20.1,-33.8,13.1C-33.2,6.1,-27.3,-0.4,-23.8,-6.7C-20.3,-12.9,-19.1,-18.7,-15.5,-25.9C-11.9,-33.1,-6,-41.5,0.1,-41.6C6.1,-41.7,12.2,-33.4,18.1,-27Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: 0.3s" stroke="url(#sw-gradient)"></path>
        </svg>
    </section>
    <div class="mailAlert">
        <div class="content">
            <ion-icon name="checkmark-circle-outline" class="tick"></ion-icon>
            <p class="alertMsg">Email Sent Successfully</p>
        </div>
        <ion-icon name="close-outline" class="cross"></ion-icon>
        <div class="progress"></div>
    </div>
    <section id="footer">
        <div class="footLogo">
            <img src="../Images/TedxLogoWhite.svg" alt="" />
            <p>
                This independent TEDx event is operated under license from TED.
                Copyright Stichting TEDxRamanujanCollege, 2024. All Rights Reserved.
            </p>
        </div>
        <div class="links">
            <div class="box">
                <a href="#" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a>
            </div>
            <div class="box">
                <a href="mailto:tedx@ramanujan.du.ac.in" target="_blank">
                    <ion-icon name="mail-outline"></ion-icon></a>
            </div>
            <div class="box">
                <a href="https://www.instagram.com/tedx_ramanujancollege?igsh=MWNwenIyd3Foazl0OA==" target="_blank">
                    <ion-icon name="logo-instagram"></ion-icon></a>
            </div>
        </div>
    </section>
    <div class="button">
        <a href="#top"><img src="../Images/ArrowUp.svg" alt="Top Arrow" /></a>
    </div>
    <script src="../JavaScript/nav.js"></script>
    <script>
        const button = document.querySelector("button");
        const mailAlert = document.querySelector(".mailAlert");
        const closeBtn = document.querySelector(".cross");
        const progress = document.querySelector(".progress");
        $("#form").parsley();


        function showAlert(message) {
            document.querySelector(".alertMsg").innerHTML = message;
            mailAlert.style.display = "flex";
            progress.style.display = "flex";
            setTimeout(() => {
                mailAlert.classList.add("active");
                progress.classList.add("active");
            }, 10);

            setTimeout(() => {
                mailAlert.classList.remove("active");
            }, 5000);

            setTimeout(() => {
                progress.classList.remove("active");
            }, 5300);
            setTimeout(() => {
                mailAlert.style.display = "none";
            }, 5250);
            setTimeout(() => {
                progress.style.display = "none";
            }, 5320);
        }

        function hideAlert() {
            mailAlert.classList.remove("active");
            setTimeout(() => {
                progress.classList.remove("active");
            }, 300);
            setTimeout(() => {
                progress.style.display = "none";
            }, 310);
            setTimeout(() => {
                mailAlert.style.display = "none";
            }, 320);
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>


    <?php
    include "send.php";

    if (isset($_SESSION['mailSent'])) {
        if ($_SESSION['mailSent'] === 'true') {
            echo '<script>
        showAlert("Mail sent successfully!");
        console.log("sent");
        closeBtn.addEventListener("click", hideAlert);
        </script>';
            unset($_SESSION['mailSent']);
        } else if ($_SESSION['mailSent'] === 'false') {
            echo '<script>
            showAlert("Check Details");
            closeBtn.addEventListener("click", hideAlert);
            </script>';
            unset($_SESSION['mailSent']);
        }
    }
    ?>
</body>

</html>