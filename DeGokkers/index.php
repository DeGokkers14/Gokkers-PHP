<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>De Gokkers</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
    <header>
       <img class="logo" src="img/DeGokkersLogo.png" alt="Logo">
       <div class="content-section">
        <nav>
            <a href=>Video</a>
            <a href="">Download</a>
            <a href="">Members</a>
            <a href="">Contact</a>

            <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>

            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register</button>

            <div id="id01" class="modal">

                <form class="modal-content animate" action="PHP.php" method="Post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="container">
                        <label for="uname"><b>Email</b></label>
                        <input type="email" name="reg_email" id="reg_email" placeholder="Email" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" minlength="7" name="reg_password" id="reg_password" placeholder="Password" required>

                        <label>
                            <input type="checkbox" name="check" id="check"><a href="">terms of conditions</a>
                        </label>

                        <input type="submit" name="insert" id="insert" placeholder="Register">

                    </div>

                    <div class="container">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    </div>
                </form>
            </div>

            <div id="id02" class="modal">

                <form class="modal-content animate" action="PHP.php" method="Post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="container">
                        <label for="uname"><b>Email</b></label>
                        <input type="email" name="log_email" id="log_email" placeholder="Email" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" minlength="7" name="log_password" id="log_password" placeholder="Password" required>
                        
                        <button type="submit" name="submit">Login</button>

                    </div>

                    <div class="container">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                    </div>
                </form>
            </div>

            <script>
                // Get the modal
                var modal = document.getElementById('id01');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>

        <nav>
      </div>
    </header>
    <div id="video-section">
        <h2>Video</h2>
        <iframe src="https://www.youtube.com/embed/5vFgzd2ALGo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <div id="download-section">
        <h2>Download</h2>
        <p class="download-p">Hier is uw download :D</p>
        <a class="download" href="">Download</a>
    </div>
    <div id="members-section">
        <h2>Members</h2>
        <div class="container">
            <div class="items">
                    <h4>Berke</h4>
                  <div class="member">
                    <img src="img/Berke2.jpg" alt="Berke">
                  </div>
            </div>
            <div class="items">
                    <h4>Emil</h4>
                  <div class="member">
                    <img src="img/Emil.jpg" alt="Emil">
                  </div>
            </div>
            <div class="items">
                    <h4>Rick</h4>
                  <div class="member">
                    <img src="img/Fate.jpg" alt="Rick">
                  </div>
            </div>
            <div class="items">
                    <h4>Tom</h4>
                  <div class="member">
                    <img src="img/Tom2.jpg" alt="Tom">
                  </div>
            </div>
            <div class="items">
                    <h4>Melad</h4>
                  <div class="member">
                    <img src="img/Melad.jpg" alt="Melad">
                  </div>
            </div>
        </div>
    </div>
    <div id="contact-section">
        <h2>Contact</h2>
    </div>
        





        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
