<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nostrum</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>





<body>
    <!-- Overlay for Login/Register -->
    <div id="overlay">
        <div class="form-container">
           <!-- Register Form
            <div id="register-form" style="display: none;">
                <h2>Register</h2>
                <input type="text" id="register-username" placeholder="Username">
                <input type="password" id="register-password" placeholder="Password">
                <input type="password" id="register-confirm-password" placeholder="Confirm Password">
                <button id="register-submit">Confirm</button>
                <button id="show-login">Back to Login</button>
            </div> --->
        </div>
    </div>

    <!-- Main Content -->
    <header>
        <img src="assets/img/nostrum.png" alt="">
        <ul>
            <li>
                <a href="">Lorem</a>
                <a href="">Ipsum</a>
                <a href="">Dolor</a>
            </li>
        </ul>
        <div>
            <img src="assets/img/searchicon.png" alt="">
            <input type="search" placeholder="Aperiam">
        </div>
    </header>

    <div class="hero">
        <div class="hero_content">
            <div class="hero_content1">
                <h1>Sed ut perspiciatis unde omnis iste natus error sit</h1>
                <h2 style="margin-top: 5px; font-size: 1.6rem;">Nemo enim ipsam voluptatem quia voluptas sit</h2>
                <button>Voluptatibus</button>
            </div>
            <div>
                <img class="device_black" src="assets/img/device_black.png" alt="">
            </div>
        </div>
    </div>

    <div class="tech">
        <div class="container">
            <img src="assets/img/wifi.png" alt="">
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit</p>
        </div>
        <div class="container">
            <img src="assets/img/connect.png" alt="">
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit</p>
        </div>
        <div class="container">
            <img src="assets/img/message.png" alt="">
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit</p>
        </div>
    </div>

    <div class="content">
        <div class="iphone_container">
            <img class="iphone_img" src="assets/img/iphone7.png" alt="">
            <div>
                <h1>At vero eos et accusamus et iusto odio</h1>
                <p>Nam libero tempore, cum soluta nobis est eligendi optio <br>nihil impedit quo minus id quod maxime placeat facere.</p>
                <br>
                <br>
                <button>Vel illum qui</button>
            </div>
        </div>
        <div style="display: flex; gap: 30px;">
            <div class="phone_container">
                <h1 style="margin-bottom: 10px;">Ut enim ad minima veniam</h1>
                <div style="display: flex; gap: 1rem; align-items: center;">
                    <div>
                        <img src="assets/img/phone.png" alt="">
                    </div>
                    <div>
                        <div class="container" style="margin-bottom: 10px;">
                            <img src="assets/img/wifi.png" alt="">
                            <p class="paragraph">Nam libero tempore, cum soluta nobis est eligendi</p>
                        </div>
                        <div class="container" style="margin-bottom: 10px;">
                            <img src="assets/img/connect.png" alt="">
                            <p class="paragraph">Nam libero tempore, cum soluta nobis est eligendi</p>
                        </div>
                        <div class="container" style="margin-bottom: 10px;">
                            <img src="assets/img/messageicon.png" alt="">
                            <p class="paragraph">Nam libero tempore, cum soluta nobis est eligendi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="container12">
                <div class="nav-tabs">
                    <button id="loginTab" onclick="showLogin()">Login</button>
                    <button id="registerTab" onclick="showRegister()">Register</button>
                </div>
                
                <!-- Login Form -->
                <form id="loginForm" action="login.php" method="post">
                    <input style="width: 95%;" type="email" name="email" placeholder="Email" required>
                    <input style="width: 95%;" type="password" name="password" placeholder="Password" required>
                    <button type="submit" name="login">Login</button>
                </form>
                
                <!-- Registration Form -->
                <form id="registerForm" action="register.php" method="post" style="display: none;">
                    
                    <input style="width: 95%;" type="email" name="email" placeholder="Email" required>
                    <input style="width: 95%;" type="password" name="password" placeholder="Password" required>
                    <button type="submit" name="register">Register</button>
                </form>
                
                <div class="switch-link">
                    <p id="switchText">Don't have an account yet? <a href="javascript:void(0)" onclick="showRegister()">Register</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
    <script>
        function showLogin() {
            document.getElementById('loginForm').style.display = 'block';
            document.getElementById('registerForm').style.display = 'none';
            document.getElementById('switchText').innerHTML = 'Don\'t have an account yet? <a href="javascript:void(0)" onclick="showRegister()">Register</a>';
            document.getElementById('loginTab').style.backgroundColor = '#142459';
            document.getElementById('registerTab').style.backgroundColor = '#FFB000';
        }

        function showRegister() {
            document.getElementById('loginForm').style.display = 'none';
            document.getElementById('registerForm').style.display = 'block';
            document.getElementById('switchText').innerHTML = 'Already have an account? <a href="javascript:void(0)" onclick="showLogin()">Login</a>';
            document.getElementById('loginTab').style.backgroundColor = '#FFB000';
            document.getElementById('registerTab').style.backgroundColor = '#142459';
        }
    </script>
</body>
</html>