<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wix Style Page</title>

</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    color: #333;
}

header {
    background-color: #333;
    padding: 10px 20px;
    color: white;
}

header .logo {
    font-size: 24px;
    font-weight: bold;
    display: inline-block;
}

header .nav-links {
    list-style-type: none;
    display: inline-block;
    margin-left: 50px;
}

header .nav-links li {
    display: inline;
    margin-right: 20px;
}

header .nav-links a {
    color: white;
    text-decoration: none;
    font-size: 18px;
}

.hero {
    background: url('https://www.example.com/hero-image.jpg') center center/cover no-repeat;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-align: center;
}

.hero-content {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 30px;
    border-radius: 10px;
}

.hero h1 {
    font-size: 50px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 20px;
    margin-bottom: 20px;
}

.cta-button {
    background-color: #8a2be2;
    color: white;
    border: none;
    padding: 15px 30px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.cta-button:hover {
    background-color: #7a1eae;
}

.features {
    display: flex;
    justify-content: center;
    gap: 30px;
    padding: 50px 20px;
}

.feature {
    background-color: white;
    padding: 30px;
    width: 250px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.feature h3 {
    font-size: 24px;
    margin-bottom: 15px;
}

.feature p {
    font-size: 16px;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

</style>
<body>
    <header>
        <nav>
            <div class="logo">MySite</div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Our Website</h1>
            <p>Your journey starts here with us.</p>
            <button class="cta-button">Get Started</button>
        </div>
    </section>

    <section class="features">
        <div class="feature">
            <h3>Feature One</h3>
            <p>Description of the first feature.</p>
        </div>
        <div class="feature">
            <h3>Feature Two</h3>
            <p>Description of the second feature.</p>
        </div>
        <div class="feature">
            <h3>Feature Three</h3>
            <p>Description of the third feature.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 MySite. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const ctaButton = document.querySelector('.cta-button');

    // Add animation on click
    ctaButton.addEventListener('click', () => {
        ctaButton.style.backgroundColor = '#7a1eae';
        ctaButton.innerText = 'Loading...';
        setTimeout(() => {
            ctaButton.innerText = 'Get Started';
            ctaButton.style.backgroundColor = '#8a2be2';
        }, 2000);
    });
});

    </script>
</body>
</html>
