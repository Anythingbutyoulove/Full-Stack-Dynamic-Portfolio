<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio | Nehal Ahmed</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    <!-- Navigation Bar -->
    <header class="navbar">
        <div class="logo">NEHAL<span class="dot">.</span></div>
        <nav class="nav-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Education</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Page</a></li>
            </ul>
        </nav>
        <a href="#" class="btn-contact">Contact Me</a>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-left">
            <h1>I’m Designer <span>Nehal Ahmed</span></h1>
            <div class="hero-buttons">
                <a href="#" class="btn-skyblue">Learn More</a>
                <a href="#" class="btn-secondary">Hire Me</a>
            </div>
        </div>
        <div class="hero-right">
            <img src="{{ asset('image/pic.jpg') }}" alt="Nehal" />
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section">
        <div class="info-box">
            <h3>Designing With Passion While Exploring The World.</h3>
        </div>
        <div class="info-box">
            <h3>Any Type Of Query & Discussion.</h3>
        </div>
    </section>
</body>
</html>
