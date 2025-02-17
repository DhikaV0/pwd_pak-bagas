<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Project Pak Bagas</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #ffffff;
}

nav {
    background-color: #000000;
    padding: 10px 20px;
    display: flex;
    justify-content: center;
    position: sticky;
    top: 0;
    z-index: 10;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li {
    display: inline;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

nav ul li a:hover {
    background-color: #0056b3;
}

#home {
    background-color: #ffffff;
    padding: 30px;
    height: 100vh;
    box-sizing: border-box;
    text-align: left;
}

#home h1 {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 20px;
}

#home p {
    font-size: 18px;
    line-height: 1.6;
    color: #555;
}

#about {
    background-color: #ffffff;
    padding: 30px;
}

.profile-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.profile-header {
    display: flex;
    align-items: center;
}

.profile-image {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin-right: 20px;
}

.profile-details {
    text-align: left;
}

.profile-name {
    font-size: 24px;
    font-weight: bold;
    margin: 0;
}

.profile-title {
    font-size: 18px;
    color: #777;
}

.profile-bio {
    font-size: 16px;
    color: #555;
}


#contact {
    background-color: #ffffff;
    padding: 30px;
    height: 10vh;
}

.contact-container {
    width: 700px;
    height: 500px;
    margin: 0 auto;
    margin-top: 200px;
    padding: 20px;
    background-color: rgb(228, 228, 228);
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(224, 224, 224, 0.1);
    text-align: center;
    overflow: auto;
}

.contact-container h2 {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
}

.contact-container p {
    font-size: 16px;
    color: #555;
    line-height: 1.6;
}


    </style>
</head>
<body>

    <nav>
        <ul>
            <li><a href="javascript:void(0)" onclick="showContent('home')">Home</a></li>
            <li><a href="javascript:void(0)" onclick="showContent('about')">About</a></li>
            <li><a href="javascript:void(0)" onclick="showContent('contact')">Contact</a></li>
        </ul>
    </nav>

<div id="home" class="section" style="display: block;">
    <h1>Home</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, soluta! Maiores laudantium dolorem, quas eum deleniti voluptate odit nihil, labore vero vitae atque sapiente in. Nostrum ab repudiandae dolorum praesentium?
    </p>
</div>


<div id="about" class="section" style="display: none;">
    <div class="profile-container">
        <div class="profile-header">
            <img src="images/Sensei.jfif" alt="Profile Picture" class="profile-image">
            <div class="profile-details">
                <h2 class="profile-name">Andhika Judha Pratama</h2>
                <p class="profile-title">Web Developer Pemula</p>
                <p class="profile-title">XI RPL 2</p>
                <p class="profile-bio">
                    Saya Andhika, panggil aja Dhika. dah Terima Kasih.
                </p>
            </div>
        </div>
    </div>
</div>


<div id="contact" class="section" style="display: none;">
    <div class="contact-container">
        <h2>Contact</h2>
        <li><a href="https://mail.google.com/mail/u/0/?tf=cm&fs=1&to=judhapratamaa@gmail.com">Email</a></li>
        <li><a href="https://github.com/DhikaV0">Github</a></li>
        <li><a href="https://www.instagram.com/dhik_dihk/">Instagram</a></li>

    </div>
</div>


<script>
    function showContent(page) {
        let sections = ['home', 'about', 'contact'];
        sections.forEach(id => {
            let section = document.getElementById(id);
            if (id === page) {
                section.style.display = 'block';
            } else {
                section.style.display = 'none';
            }
        });
    }
</script>

</body>
</html>
