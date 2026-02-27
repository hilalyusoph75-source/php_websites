<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website | Hilal Yusoph</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVIGATION -->
<nav class="navbar">
    <a href="#about">About</a>
    <a href="#hobbies">Hobbies</a>
    <a href="#skills">Skills</a>
    <a href="#contact">Contact</a>
</nav>

<!-- HEADER -->
<header class="site-header">
    <h1>Hilal Yusoph</h1>
    <p>IT Student | Aspiring Front-End Developer</p>
</header>

<main class="container">

    <!-- ABOUT -->
    <section class="card" id="about">
        <h2>About Me</h2>
        <p>
           I am an Information Technology student with a strong interest in learning how technology solves real-world problems. I am developing skills in programming, networking, and system management, and I enjoy exploring new tools and technologies.
        </p>
    </section>

    <!-- HOBBIES -->
    <section class="card" id="hobbies">
        <h2>Hobbies & Interests</h2>
        <ul>
            <li>Dancing TikTok</li>
            <li>Listening to music</li>
            <li>Watching YouTube</li>
            <li>Thirst trap content</li>
        </ul>
    </section>

    <!-- SKILLS -->
    <section class="card" id="skills">
        <h2>Skills</h2>
        <ul class="skills">
            <li>Basic Editing</li>
            <li>CSS</li>
            <li>HTML</li>
        </ul>
    </section>

    <!-- CONTACT -->
    <section class="card" id="contact">
        <h2>Contact Information</h2>
        <p>Email: <strong>hilalyusoph@gmail.com</strong></p>
        <p>Facebook: <a href="https://www.facebook.com/hilalangni123" target="_blank">Visit Profile</a></p>
    </section>

</main>

<!-- FOOTER -->
<footer class="site-footer">
    <p>&copy; <span id="year"></span> Hilal Yusoph. All rights reserved.</p>
</footer>

<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>

</body>
</html>