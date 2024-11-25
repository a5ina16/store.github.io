
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Tech</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    
        body {
            background-color: #2c3e50;
            background-image: url('https://example.com/your-background-image.jpg');
            background-size: cover;
            background-position: center center;
            color: #ffffff;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            position: relative;
            background-attachment: fixed;
        }
    
        body::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            background-image: radial-gradient(circle, rgba(255, 255, 255, 0.5) 1px, transparent 1px);
            background-size: 80px 80px;
            animation: twinkling 3s infinite alternate;
            z-index: -1;
        }
    
        @keyframes twinkling {
            0% {
                background-image: radial-gradient(circle, rgba(255, 255, 255, 0.4) 1px, transparent 1px);
            }
            25% {
                background-image: radial-gradient(circle, rgba(255, 255, 255, 1) 1px, transparent 1px);
            }
            50% {
                background-image: radial-gradient(circle, rgba(255, 255, 255, 0.9) 1px, transparent 1px);
            }
            75% {
                background-image: radial-gradient(circle, rgba(255, 255, 255, 1) 1px, transparent 1px);
            }
            100% {
                background-image: radial-gradient(circle, rgba(255, 255, 255, 0.4) 1px, transparent 1px);
            }
        }
    
        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #13131a;
            margin-top: 20px;
        }
    
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #5865f2;
            margin-right: 80px;
        }
    
        .nav-links {
            list-style: none;
            display: flex;
            gap: 60px;
        }
    
        .nav-links li {
            position: relative;
        }
    
        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }
    
        .nav-links a:hover {
            color: #5865f2;
        }
    
        .button {
            padding: 8px 15px;
            border: 2px solid #5865f2;
            border-radius: 5px;
            color: #5865f2;
            transition: background-color 0.3s;
        }
    
        .welcome-message {
            text-align: center;
            padding: 50px 20px;
        }
    
        .welcome-message h1 {
            font-size: 36px;
            color: #ffffff;
            margin-bottom: 20px;
        }
    
        .background-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #0b0b0f;
            background-image: radial-gradient(circle at 50% 50%, rgba(37, 38, 49, 0.3), transparent),
                              radial-gradient(circle at 20% 80%, rgba(37, 38, 49, 0.3), transparent),
                              radial-gradient(circle at 80% 20%, rgba(37, 38, 49, 0.3), transparent);
            z-index: -1;
            overflow: hidden;
        }
    
        .geometric-lines {
            position: absolute;
top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://i.imgur.com/3mvIlhX.png');
            background-size: cover;
            opacity: 0.1;
            z-index: -2;
        }
    
        .product-cards-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 50px;
            width: 90%;
        }
    
        .product-card {
            width: 17%;
            padding: 25px;
            background-color: #13131a;
            border: 1px solid #1e1e2a;
            border-radius: 10px;
            text-align: center;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.3s, border-color 0.3s;
            margin-bottom: 20px;
        }
    
        .product-card:hover {
            box-shadow: 0 0 15px rgba(88, 101, 242, 0.6);
            border-color: #5865f2;
        }
    
        .product-card .title {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 15px;
        }
    
        .product-card .icon {
            width: 60px;
            height: 60px;
            margin: 20px 0;
        }
    
        .product-card .price-availability {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            margin: 15px 0;
            color: #b3b3b3;
        }
    
        .product-card .price {
            color: #ffffff;
            font-weight: bold;
        }
    
        .product-card .availability {
            color: #b3b3b3;
        }
    
        .product-card .buy-button {
            display: inline-block;
            padding: 10px 20px;
            border: 1px solid #5865f2;
            color: #5865f2;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s;
            margin-top: 20px;
        }
    
        .product-card .buy-button:hover {
            background-color: #5865f2;
            color: #ffffff;
        }
    
        .navbar-bottom {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #13131a;
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 10;
        }
    
        .navbar-bottom .logo {
            font-size: 24px;
            font-weight: bold;
            color: #5865f2;
            margin-right: 80px;
        }
    
        .navbar-bottom .nav-links {
            list-style: none;
            display: flex;
            gap: 60px;
        }
    
        .navbar-bottom .nav-links li {
            position: relative;
        }
    
        .navbar-bottom .nav-links a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }
    
        .navbar-bottom .nav-links a:hover {
            color: #5865f2;
        }
    
        .social-media-section {
            text-align: center;
            margin-top: 80px;
            margin-bottom: 30px;
        }

        .social-media-section h2 {
            color: #ffffff;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .social-icon {
            color: #ffffff;
            font-size: 30px;
            text-decoration: none;
            transition: color 0.3s;
        }

        .social-icon:hover {
            color: #5865f2;
        }

.highlighted-message {
            font-size: 20px;
            color: #5865f2;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
        }
        .stats {
    display: flex;
    justify-content: center;
    width: 80%;
    margin-top: 20px; 
    color: #ffffff;
    font-size: 18px;
    gap: 40px;  
}

.stat-item {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;  
}

.stat-item span {
    font-size: 30px;
    font-weight: bold;
    color: #5865f2;  
}

.stat-item p {
    margin: 0;
    font-size: 16px; 
}

.stat-item .star {
    color: #5865f2;  
}


        /* التصميم الخاص بنافذة تسجيل الدخول فقط */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #2c3e50;
            margin: 5% auto;
            padding: 40px;
            border-radius: 15px;
            width: 40%;
            color: #fff;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            animation: modalAnimation 0.5s ease-out;
            position: relative;
        }

        .close {
            font-size: 30px;
            font-weight: bold;
            color: #fff;
            position: absolute;
            top: 10px;
            right: 20px;
            cursor: pointer;
        }

        .login-modal-style {
            background-color: #2c3e50;
            border-radius: 10px;
            width: 350px;
            padding: 30px;
            position: relative;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
        }

        .login-icon {
            font-size: 50px;
            color: #5865f2;
            margin-bottom: 15px;
        }

        .input-group {
            margin: 15px 0;
            position: relative;
        }

        .input-group input[type="text"],
        .input-group input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #5865f2;
            border-radius: 5px;
            background-color: #f0f4f8;
            color: #333;
            font-size: 16px;
        }

        .input-group .toggle-password {
            position: absolute;
            top: 50%;
            margin: 10px;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #5865f2;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #5865f2;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #4e55d4;
        }

        .error-message {
            background-color: #e74c3c;
            color: #fff;
            padding: 8px;
            border-radius: 5px;
            margin-top: 15px;
            display: none;
        }

        .hidden {
            display: none;
        }

        #errorMessage:not(.hidden) {
            display: block;
            text-align: center;
        }

    </style>
    
</head>
<body>

    <div class="background-pattern"></div>
    <div class="geometric-lines"></div>

    <header>
        <nav class="navbar">
            <div class="logo">Info Tech</div>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('product') }}">Products</a></li>
                <li><a href="javascript:void(0);" class="button" id="adminBtn">Admin Panel</a></li>
            </ul>
        </nav>
    </header>

    <div class="welcome-message">
        <h1>Welcome To Info Tech</h1>
    </div>


        <div class="stats">
            <div class="stat-item">
                <span>11+</span>
                <p>products sold</p>
            </div>
            <div class="stat-item">
                <span>5 ★</span>
                <p>reviews</p>
            </div>
        </div>

            <!-- Modal -->
    <div class="modal" id="loginModal">
        <div class="modal-content login-modal-style">
            <span class="close">&times;</span>
            <div class="login-icon"><i class="fas fa-user-circle"></i></div>
            <h2>Admin Login</h2>
            <form id="loginForm">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required placeholder="Username">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Password">
                    <i class="fas fa-eye toggle-password" id="togglePassword"></i>
                </div>
                <button type="submit">Login</button>
                <div id="errorMessage" class="error-message hidden">Invalid username or password!</div>
            </form>
        </div>
    </div>

    <div class="social-media-section">
        <h2>Follow Us</h2>
        <div class="social-icons">         
            <a href="#" class="social-icon" aria-label="Discord">
                <i class="fab fa-discord"></i>
            </a>
            <a href="#" class="social-icon" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>

    <nav class="navbar-bottom">
        <div class="logo">Info Tech</div>
        <ul class="nav-links">
            <li><a href="#">Terms</a></li>
        </ul>
    </nav>
    <script>
        var adminBtn = document.getElementById("adminBtn");
        var loginModal = document.getElementById("loginModal");
        var closeBtn = document.getElementsByClassName("close")[0];
        var loginForm = document.getElementById("loginForm");
        var errorMessage = document.getElementById("errorMessage");
        var togglePassword = document.getElementById("togglePassword");
        var passwordField = document.getElementById("password");

        adminBtn.onclick = function() {
            loginModal.style.display = "block";
            errorMessage.classList.add("hidden");
        };

        closeBtn.onclick = function() {
            loginModal.style.display = "none";
        };

        window.onclick = function(event) {
            if (event.target == loginModal) {
                loginModal.style.display = "none";
            }
        };

        loginForm.onsubmit = function(event) {
            event.preventDefault();

            var username = document.getElementById("username").value;
            var password = passwordField.value;

            if (username === "unk" && password === "2005") {
                window.location.href = "{{ route('adminpanel') }}";
            } else {
                errorMessage.classList.remove("hidden");
            }
        };

        togglePassword.onmousedown = function() {
            passwordField.type = "text";
        };

        togglePassword.onmouseup = function() {
            passwordField.type = "password";
        };
    </script>


</body>
</html>