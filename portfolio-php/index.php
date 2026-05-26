<?php
$research = [
    [
        "title" => "Visual Classification of Ten Region-Specific Flower Species in Bangladesh Using Hybrid CNN and Vision Transformers",
        "description" => "This work presents a hybrid CNN–Vision Transformer model for classifying ten region-specific flower species of Bangladesh by combining local feature extraction and global attention for improved accuracy and robust plant identification.",
        "tech" => ["CNN", "Vision Transformers (ViT)", "Python", "Data Augmentation", "Image Processing"]
    ]
];

$projects = [
    [
        "title" => "3D Aquarium Simulation",
        "description" => "An OpenGL-based animated aquarium with fish movement, bubbles, underwater plants, and interactive food dropping.",
        "tech" => ["C", "OpenGL", "GLUT"]
    ],
    [
        "title" => "Blood Bank Management System",
        "description" => "Built a Blood Bank Management System for handling donor data, blood stock, and search operations to improve blood donation and availability management.",
        "tech" => ["PHP", "MySQL", "JavaScript"]
    ],
    [
        "title" => "Cat Sound Emotion Classifier",
        "description" => "Developed a 2D CNN model to classify 10 cat vocal emotions using Mel-Spectrogram, achieving 96% accuracy and deployed it as a real-time web app.",
        "tech" => ["Machine Learning", "CNN", "TensorFlow"]
    ],
    [
        "title" => "ASL Detection",
        "description" => "American Sign Language (ASL) detection system using VGG19 with a custom classification head, achieving 95% accuracy.",
        "tech" => ["Machine Learning", "Keras", "Numpy"]
    ],
    [
        "title" => "Time-Based Encryption System",
        "description" => "A cryptographic system where data encryption & decryption are dependent on time-based parameters.",
        "tech" => ["Python", "Cryptography", "hashlib"]
    ]
];

$skills = [
    "C", "C++", "Java", "Python", "PHP", "HTML", "CSS",
    "JavaScript", "OpenGL", "Web Development", "MySQL",
    "Android Development", "Machine Learning", "Deep Learning",
    "Image Processing", "Vision Transformer", "CNN", "Data Analysis", 
    "Project Management", "Feature Engineering","Open CV", 
    "Cryptography", "Git & GitHub", "Team Collaboration"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<title>Sowme Portfolio</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background: radial-gradient(circle at top, #0b1220, #020617);
    color:white;
    font-family: 'Poppins', sans-serif;
}

body::before{
    content:'';
    position: fixed;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(0,255,255,0.15), transparent 60%);
    top: -200px;
    left: -200px;
    z-index: -1;
}

html{
    scroll-behavior:smooth;
}

/* NAVBAR */
.navbar{
    position: sticky;
    top: 0;
    z-index: 1000;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding: 12px 50px;
    background: rgba(15, 23, 42, 0.6);
    backdrop-filter: blur(14px);
    border-bottom: 1px solid rgba(255,255,255,0.08);
    height: 60px;
}

.nav-logo{
    height: 100%;
    display: flex;
    align-items: center;
}

.nav-logo img{
    height: 70px;
    width: auto;
    object-fit: cover;
}

.nav-links{
    list-style:none;
    display:flex;
    gap:25px;
}

.nav-links a{
    position: relative;
    transition: 0.3s;
}

.nav-links a::after{
    content:'';
    position:absolute;
    left:0;
    bottom:-5px;
    width:0%;
    height:2px;
    background:cyan;
    transition:0.3s;
}

.nav-links a:hover::after{
    width:100%;
}

.nav-links a:hover{
    color: white;
}

.bg-animation span{
    position:absolute;
    border-radius:50%;
    background: rgba(0,255,255,0.08);
    animation: animateBg 15s linear infinite;
}

.bg-animation span:nth-child(1){
    width:300px;
    height:300px;
    left:5%;
    top:20%;
}

.bg-animation span:nth-child(2){
    width:200px;
    height:200px;
    right:10%;
    top:10%;
    background: rgba(138,43,226,0.08);
}

.bg-animation span:nth-child(3){
    width:250px;
    height:250px;
    bottom:5%;
    left:40%;
}

@keyframes animateBg{
    0%{
        transform: translateY(0px) rotate(0deg);
    }
    50%{
        transform: translateY(-40px) rotate(180deg);
    }
    100%{
        transform: translateY(0px) rotate(360deg);
    }
}

/* SECTION */
section{
    padding: 100px 10%;
}

.dark{
    background: #0f172a;
}

h2{
    color: cyan;
    font-size: 30px;
    font-weight: 600;
    text-align: center;
    margin-bottom: 50px;
    background: linear-gradient(90deg, cyan, #8a2be2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.hidden{
    opacity:0;
    transform: translateY(50px);
    transition: all 1s ease;
}

.show{
    opacity:1;
    transform: translateY(0);
}

/* HERO */
.hero{
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 40px;
}

.hero-text{
    max-width: 600px;
}

.intro{
    color: cyan;
    margin-bottom: 10px;
}

.hero h1{
    font-size: 64px;
    background: linear-gradient(90deg, cyan, #8a2be2, #ff2e63);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.typing-text{
    color: cyan;
    font-size: 24px;
    min-height: 35px;
    margin-bottom: 20px;
}

.description{
    color: #cbd5e1;
    line-height: 1.6;
    margin-bottom: 30px;
}

.buttons{
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.btn{
    position:relative;
    padding:12px 26px;
    border-radius:12px;
    overflow:hidden;
    z-index:1;
    text-decoration: none;  
}

.btn::before{
    content:'';
    position:absolute;
    inset:0;
    background: linear-gradient(90deg, cyan, #8a2be2, #ff2e63);
    z-index:-1;
    opacity:0;
    transition:0.4s;
}

.btn:hover::before{
    opacity:1;
}

.outline{
    border: 2px solid cyan;
    color: cyan;
}

.outline:hover{
    background: cyan;
    color: black;
}

.scholar-link{
    border: 1px solid #ca319c;
    color: white;
}

.scholar-link:hover{
    background: #ca319c;
}

.hero-image {
    display: flex;
    justify-content: center;
    align-items: center;
    perspective: 1000px;
}

.circle{
    width: 240px;
    height: 240px;
    border-radius: 50%;
    position: relative;
    padding: 6px;
    display: flex;
    justify-content: center;
    align-items: center;
    animation: floatMove 6s ease-in-out infinite;
    transform-style: preserve-3d;
    transition: 0.5s;
}

@keyframes floatMove{
    0%{
        transform: translateY(0px) translateX(0px) rotate(0deg) scale(1);
    }
    20%{
        transform: translateY(-18px) translateX(8px) rotate(2deg) scale(1.02);
    }
    40%{
        transform: translateY(-30px) translateX(-10px) rotate(-2deg) scale(1.04);
    }
    60%{
        transform: translateY(-18px) translateX(12px) rotate(2deg) scale(1.02);
    }
    80%{
        transform: translateY(-8px) translateX(-6px) rotate(-1deg) scale(1.01);
    }
    100%{
        transform: translateY(0px) translateX(0px) rotate(0deg) scale(1);
    }
}

/* 1. THE NEON GLOW (Soft multi-color backdrop) */
.circle::before {
    content: '';
    position: absolute;
    inset: -15px; /* Spreads the light outwards beyond the circle boundary */
    border-radius: 50%;
    /* Distributes cyan to the sides and magenta to the top and bottom */
    background: conic-gradient(
        #b84fd6 0deg, 
        #00f5ff 75deg, 
        #00f5ff 105deg, 
        #b84fd6 180deg, 
        #00f5ff 255deg, 
        #00f5ff 285deg, 
        #b84fd6 360deg
    );
    filter: blur(22px); /* Creates the seamless glowing atmosphere */
    opacity: 0.85;
    z-index: 1;
    animation: glowRotate 8s linear infinite;
}

/* 2. THE CRUNCHY WHITE RING (Overlays the glowing colors on the edge) */
.circle::after {
    content: '';
    position: absolute;
    inset: 2px; /* Pulls it perfectly onto the border boundary */
    border: 3px solid #ffffff; /* Sharp white outer ring */
    border-radius: 50%;
    pointer-events: none;
    z-index: 3; /* Positions it right above the image layer for separation */
}

/* 3. THE IMAGE */
.circle img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
    position: relative;
    z-index: 2; /* Sandwiched safely between the soft glow and the sharp white line */
}

@keyframes glowRotate{
    0%{
        transform: rotate(0deg) scale(1);
        filter: blur(22px);
    }
    50%{
        transform: rotate(180deg) scale(1.08);
        filter: blur(30px);
    }
    100%{
        transform: rotate(360deg) scale(1);
        filter: blur(22px);
    }
}

.about-wrapper{
    display: flex;
    gap: 40px;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
}

.about-left{
    flex: 1;
    min-width: 200px;
    line-height: 1.5;
}

.about-right{
    flex: 2;
    max-width: 500px;
    color: #cbd5e1;
    line-height: 1.7;
}

.about-right b{
    font-size: 20px;
    color: #73a3dd;
}

/* =========================
   ACADEMIC SECTION
========================= */

.academic-grid{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
    gap: 25px;
    margin-top: 25px;
}

.academic-card{
    position:relative;
    overflow:hidden;

    background: linear-gradient(
        145deg,
        rgba(15,23,42,0.95),
        rgba(30,41,59,0.95)
    );

    border:1px solid rgba(255,255,255,0.08);
    border-radius:28px;
    padding:32px 28px;
    transition:0.45s ease;
    box-shadow:
        0 10px 35px rgba(0,0,0,0.35),
        0 0 0 rgba(0,255,255,0);
}

/* GLOW EFFECT */
.academic-card::before{
    content:'';
    position:absolute;
    width:250px;
    height:250px;
    background: radial-gradient(
        circle,
        rgba(0,255,255,0.18),
        transparent 70%
    );
    top:-120px;
    right:-120px;
    transition:0.5s ease;
}

/* TOP LINE */
.academic-card::after{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:4px;
    background: linear-gradient(
        90deg,
        cyan,
        #8a2be2,
        #ff2e63
    );
}

/* HOVER */
.academic-card:hover{
    transform:translateY(-10px) scale(1.02);
    border-color:rgba(0,255,255,0.35);
    box-shadow:
        0 15px 45px rgba(0,0,0,0.45),
        0 0 30px rgba(0,255,255,0.15);
}

.academic-card:hover::before{
    transform:scale(1.2);
    opacity:1;
}

/* DEGREE TITLE */
.academic-card h3{
    font-size:24px;
    font-weight:700;
    line-height:1.4;
    margin-bottom:12px;
    background: linear-gradient(
        90deg,
        #ffffff,
        #73a3dd
    );
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

/* INSTITUTE */
.institute{
    display:inline-block;
    margin-bottom:18px;
    color:cyan;
    font-size:15px;
    font-weight:600;
    letter-spacing:0.5px;
    padding:8px 16px;
    border-radius:30px;
    background:rgba(0,255,255,0.08);
    border:1px solid rgba(0,255,255,0.2);
}

/* DESCRIPTION */
.academic-desc{
    color:#cbd5e1;
    font-size:15px;
    line-height:1.8;
    margin-bottom:25px;
}

/* RESULT + YEAR WRAPPER */
.academic-footer{
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:12px;
}

/* RESULT BADGE */
.result{
    padding:10px 18px;
    border-radius:14px;
    background: linear-gradient(
        90deg,
        rgba(138,43,226,0.18),
        rgba(255,46,99,0.18)
    );
    border:1px solid rgba(255,255,255,0.08);
    color:#fff;
    font-size:14px;
    font-weight:600;
    backdrop-filter:blur(10px);
}

/* YEAR BADGE */
.year{
    padding:10px 18px;
    border-radius:14px;
    background: rgba(255,255,255,0.05);
    border:1px solid rgba(255,255,255,0.08);
    color:#94a3b8;
    font-size:14px;
    font-weight:500;
}

/* MOBILE */
@media(max-width:768px){

    .academic-grid{
        grid-template-columns:1fr;
    }

    .academic-card{
        padding:26px 22px;
    }

    .academic-card h3{
        font-size:20px;
    }

    .academic-footer{
        flex-direction:column;
        align-items:flex-start;
    }
}

/* GRID */
.skills-grid,
.projects-grid,
.research-grid{
    display: grid;
    gap: 17px;
}

.skills-grid{
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.projects-grid {
    grid-template-columns: repeat(auto-fit,minmax(300px,1fr));
}

.research-grid{
    grid-template-columns: repeat(auto-fit,minmax(280px,1fr));
}

/* CARD */
.project-card,
.research-card{
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    padding: 25px;
    border-radius: 24px;
    transition: 0.5s ease;
    position: relative;
    overflow: hidden;
}

.project-card::before,
.research-card::before{
    content:'';
    position:absolute;
    width:150%;
    height:150%;
    background: linear-gradient(
        1deg,
        transparent,
        rgba(0,255,255,0.1),
        transparent
    );
    top:-120%;
    left:-120%;
    transition:0.7s;
}

.project-card:hover::before,
.research-card:hover::before{
    top:100%;
    left:100%;
}

.project-card p {
  font-size: 15px;
  opacity: 0.8;
  line-height: 1.5;
}

.card{
    background: rgba(255,255,255,0.06);
    border:1px solid rgba(255,255,255,0.08);
    padding:12px 22px;
    border-radius:40px;
    font-size:14px;
    transition:0.35s ease;
    cursor:pointer;
    position:relative;
    overflow:hidden;
}

.card::before{
    content:'';
    position:absolute;
    inset:0;
    background: linear-gradient(90deg, cyan, #8a2be2);
    opacity:0;
    transition:0.4s;
    z-index:-1;
}

.card:hover::before{
    opacity:1;
}

.card:hover{
    transform: translateY(-5px) scale(1.08);
    color:white;
    box-shadow:0 0 20px rgba(0,255,255,0.4);
}

.research-card h3 {
    margin: 10px 0;
    font-size: 18px;
    color: #8a2be2;
}

.project-card:hover,
.research-card:hover{
    transform: translateY(-10px) scale(1.02);
    border-color: cyan;
    box-shadow: 0 10px 40px rgba(0,255,255,0.2);
}

/* =========================
   ACHIEVEMENT SECTION
========================= */

.achievement-grid{
    display:grid;
    grid-template-columns: repeat(auto-fit,minmax(300px,1fr));
    gap:28px;
    margin-top:30px;
}

/* CARD DESIGN */
.achievement-card{
    position:relative;
    overflow:hidden;
    padding:28px 24px;
    border-radius:22px;
    background: linear-gradient(
        145deg,
        rgba(15,23,42,0.95),
        rgba(2,6,23,0.95)
    );
    border:1px solid rgba(255,255,255,0.08);
    box-shadow:
        0 10px 30px rgba(0,0,0,0.35);
    transition:0.45s ease;
}

/* TOP ACCENT LINE */
.achievement-card::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:4px;
    background: linear-gradient(
        90deg,
        #00f5ff,
        #8a2be2,
        #ff2e63
    );
}

/* FLOATING GLOW */
.achievement-card::after{
    content:'';
    position:absolute;
    width:220px;
    height:220px;
    background: radial-gradient(
        circle,
        rgba(0,255,255,0.15),
        transparent 70%
    );
    top:-120px;
    right:-120px;
    transition:0.5s ease;
}

/* HOVER EFFECT */
.achievement-card:hover{
    transform:translateY(-10px) scale(1.02);
    border-color:rgba(0,255,255,0.3);
    box-shadow:
        0 15px 45px rgba(0,0,0,0.45),
        0 0 25px rgba(0,255,255,0.15);
}

.achievement-card:hover::after{
    transform:scale(1.2);
}

/* TITLE */
.achievement-card h3{
    font-size:20px;
    font-weight:700;
    margin-bottom:12px;
    color:#ffffff;
}

/* DESCRIPTION */
.achievement-card p{
    color:#cbd5e1;
    line-height:1.7;
    font-size:15px;
    margin-bottom:18px;
}

/* BADGE */
.achieve-badge{
    display:inline-block;
    padding:8px 14px;
    border-radius:999px;
    font-size:13px;
    font-weight:600;
    background: rgba(0,255,255,0.08);
    color: cyan;
    border:1px solid rgba(0,255,255,0.2);
    letter-spacing:0.5px;
}

/* ICON STYLE (optional future upgrade) */
.achievement-card h3::before{
    content:"★ ";
    color:#8a2be2;
}

/* MOBILE */
@media(max-width:768px){
    .achievement-card{
        padding:22px 18px;
    }

    .achievement-card h3{
        font-size:18px;
    }
}

.badge{
    display: inline-block;
    padding: 5px 12px;
    background: #8a2be2;
    border-radius: 20px;
    font-size: 12px;
    margin-bottom: 12px;
}

.research-meta{
    color: cyan;
    font-size: 14px;
    margin-left: 8px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 500;
    opacity: 0.9;
}

.tech-list{
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 15px;
}

.tech{
    background:rgba(0,255,255,0.1);
    color: cyan;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 14px;
}

/* CONTACT FORM SECTION */
.contact-wrapper {
    display: flex;
    gap: 30px;
    flex-direction: column;
    margin-top: 20px;
}

.contact-info{
    flex:1;
    min-width:280px;
}

.contact-info h3{
    font-size:20px;
    margin-bottom:15px;
    color: #ca319c;
}

.contact-info p{
    opacity:0.8;
    line-height:1.8;
    font-size:16px;
}

.contact-form { 
    flex: 1; 
    max-width: 900px; 
    display: flex; 
    flex-direction: column; 
    gap: 15px; 
}

.contact-form input,
.contact-form textarea {
    padding: 12px;
    border-radius: 10px;
    border: 1px solid rgba(255, 46, 99, 0.4);
    background: #0f0f0f;
    color: white;
    outline: none;
}

.contact-form input:focus,
.contact-form textarea:focus{
    border-color: #ff2e63;
    box-shadow: 0 0 10px rgba(255,46,99,0.3);
}

.contact-form button { 
    padding: 12px; 
    border: none; 
    border-radius: 10px; 
    background: linear-gradient(90deg, cyan, #eb1d0f);
    color: white; 
    cursor: pointer; 
    font-weight: bold; 
    transition: 0.3s; 
}

.contact-form button:hover{
    transform: scale(1.05);
}

/* GET IN TOUCH */
.contact-wrapper1{
    display:flex;
    flex-direction:column;
    align-items:center;
    gap:20px;
    margin-top:20px;
}

.contact-email{
    font-size:18px;
    font-weight:500;
    text-align:center;
    color: #ca319c;
}

/* SOCIAL LINKS */
.contact-social{
    display:flex;
    gap:18px;
    justify-content:center;
    flex-wrap:wrap;
}

.social-btn{
    display:flex;
    align-items:center;
    gap:8px;
    text-decoration:none;
    color:white;
    padding:10px 16px;
    border:1px solid;
    border-radius:10px;
    transition:0.3s;
}

.social-btn img{
    width:20px;
    height:20px;
    object-fit:cover;
}

.social-btn:hover{
    transform:translateY(-3px);
}

/* INDIVIDUAL COLORS */
.github{
    border-color: #0a66c2;
}

.github:hover{
    background: #0a66c2;
}

.linkedin{
    border-color: #0a66c2;
}

.linkedin:hover{
    background: #0a66c2;
}

.whatsapp{
    border-color: darkgreen;
}

.whatsapp:hover{
    background: darkgreen;
}

.facebook{
    border-color: blue;
}

.facebook:hover{
    background: blue;
}

.instagram{
    border-color:rgb(223, 27, 118);
}

.instagram:hover{
    background:linear-gradient(90deg,#c40d59,#cf6219,#da21da);
}

.x{
    border-color:rgb(53, 43, 43);
}

.x:hover{
    background:rgb(53, 43, 43);
}

/* FOOTER */
footer{
    text-align: center;
    padding: 20px;
    border-top: 1px solid #1e293b;
    color: #94a3b8;
}

/* MOBILE */
@media(max-width:768px){

    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: nowrap;
        gap: 15px;   /* 👈 space between logo and links */
    }

    .nav-links {
        display: flex;
        flex-wrap: nowrap;
        gap: 20px;   /* space between menu items */
        overflow-x: auto;
        white-space: nowrap;
    }

    /* optional: hide scrollbar */
    .nav-links::-webkit-scrollbar {
        display: none;
    }

    .hero{
        flex-direction: column;
        text-align: center;
    }

    .hero h1{
        font-size: 40px;
    }

    .circle{
        width: 180px;
        height: 180px;
    }

    .about-wrapper{
        flex-direction: column;
    }

    .about-right{
        flex-direction: column;
    }
    
    .skills-grid{
        grid-template-columns: repeat(2,1fr);
    }
}

</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-logo">
        <img src="files/logo.png" alt="Profile">
    </div>

    <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#research">Research</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#achievement">Achievement</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>

<div class="bg-animation">
    <span></span>
    <span></span>
    <span></span>
</div>

<!-- HERO -->
<section id="home" class="hero">

    <div class="hero-text">

        <p class="intro">Hello, I'm</p>
        <h1>Ommey Habiba <br> Sowme</h1>

        <h2 class="typing-text">
            <span id="typing"></span>
        </h2>

        <p class="description">  Passionate researcher and developer focused on AI, machine learning and innovative software solutions. </p>

        <div class="buttons">
            <a href="files/Ommey_Habiba_Sowme_CV.pdf" download class="btn outline">Download CV</a>

            <a href="https://scholar.google.com/citations?user=Tdk6JVgAAAAJ&hl=en"
               target="_blank"
               class="btn scholar-link">
                Google Scholar ↗
            </a>
        </div>

    </div>

    <div class="hero-image">
        <div class="circle">
            <img src="files/sowme3.png" alt="Profile">
        </div>
    </div>

</section>

<!-- ABOUT -->
<section id="about" class="section dark">

    <h2>About Me</h2>
    <div class="about-wrapper">

        <!-- LEFT SIDE -->
        <div class="about-left">
            <p>
                I am a passionate researcher and software developer with interests in AI, machine learning and modern software technologies. My goal is to use technology and research to solve real-world problems creatively and efficiently. 
                <br><br>
                I am constantly learning new skills and exploring emerging technologies to grow as a developer and researcher. I enjoy working on innovative projects that combine research, creativity, and technology to create impactful and intelligent solutions.
            </p>
        </div>

        <!-- RIGHT SIDE -->
        <div class="about-right">
            <p><b> Contact </b></p>
            <p>📍 Narayangani - 1400, Bangladesh </p>
            <p>📞 +8801955701262 </p>
            <p>📧 ummehabibasawme@gmail.com </p>
        </div>
    </div>
</section>

<!-- ACADEMIC SECTION -->
<section class="section dark">

  <h2>Academic Background</h2>

  <div class="academic-grid">

    <div class="academic-card">

        <h3>B.Sc. in Computer Science & Engineering</h3>

        <p class="institute"> R.P. Shaha University </p>
        <p class="academic-desc"> Focused on Artificial Intelligence, Machine Learning, Computer Vision and Software Engineering. </p>

        <div class="academic-footer">
            <span class="result"> CGPA: 3.91 / 4.00 </span>
            <span class="year"> 2022 - 2026 </span>
        </div>
    </div>

    <div class="academic-card">

        <h3>Higher Secondary Certificate (HSC)</h3>

        <p class="institute"> Narayanganj Govt. Mohila College </p>
        <p class="academic-desc"> Science background with strong foundation in Mathematics, Physics, and Computer Fundamentals. Developed early interest in programming and problem solving. </p>

        <div class="academic-footer">
            <span class="result"> GPA: 5.00 / 5.00 </span>
            <span class="year"> 2018 - 2020 </span>
        </div>
    </div>

</section>

<!-- SKILLS -->
<section id="skills" class="section">

    <h2>Skills</h2>

    <div class="skills-grid">

        <?php foreach($skills as $skill): ?>

            <div class="card">
                <?= $skill ?>
            </div>

        <?php endforeach; ?>

    </div>

</section>

<!-- RESEARCH -->
<section id="research" class="section dark">

    <h2>Research Work</h2>

    <div class="research-grid">

        <?php foreach($research as $item): ?>

            <div class="research-card">

                <span class="badge">Research Paper</span>

                <div><span class="research-meta"> IEEE · 28th ICCIT 2025</span></div>

                <h3><?= $item['title'] ?></h3>

                <p><?= $item['description'] ?></p>

                <div class="tech-list">

                    <?php foreach($item['tech'] as $tech): ?>

                        <span class="tech"><?= $tech ?></span>

                    <?php endforeach; ?>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<!-- PROJECTS -->
<section id="projects" class="section dark">

    <h2>Featured Projects</h2>

    <div class="projects-grid">

        <?php foreach($projects as $project): ?>

            <div class="project-card">

                <span class="badge"><?= $project['title'] ?></span>

                <p><?= $project['description'] ?></p>

                <div class="tech-list">

                    <?php foreach($project['tech'] as $tech): ?>

                        <span class="tech"><?= $tech ?></span>

                    <?php endforeach; ?>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<!-- ACHIEVEMENTS -->
<section id="achievement" class="section">

    <h2>Achievements</h2>

    <div class="achievement-grid">

        <div class="achievement-card">
            <h3>Academic Excellence Award</h3>
            <p> Recognized for outstanding academic performance and consistent excellence in coursework. </p>
            <span class="achieve-badge">Academic</span>
        </div>

        <div class="achievement-card">
            <h3>Campus Ambassador - ICT Olympiad</h3>
            <p> Acted as a Campus Ambassador for the ICT Olympiad, promoting participation, encouraging student engagement, and raising awareness about national-level ICT competitions across the university campus. </p>
            <span class="achieve-badge">Leadership</span>
        </div>

    </div>

</section>

 <!-- CONTACT -->
  <section id="contact" class="section dark">

    <h2>Contact Me</h2>

    <div class="contact-wrapper">

      <!-- LEFT -->
      <div class="contact-info">
        <h3>Let’s Connect</h3>

        <p>
          Feel free to reach out for research collaboration,
          project discussions, or any opportunities in AI,
          ML, and software development.
        </p>
      </div>

      <!-- RIGHT -->
      <form class="contact-form" method="POST">

        <input
          type="email"
          name="email"
          placeholder="Your Email"
          required
        />

        <textarea
          name="message"
          placeholder="Your Message / Description"
          rows="5"
          required
        ></textarea>

        <button type="submit">
          Send Message
        </button>
      </form>
    </div>
  </section>

  <!-- GET IN TOUCH -->
  <section class="section">

    <h2>Get In Touch</h2>
    <div class="contact-wrapper1">

      <!-- EMAIL -->
      <p class="contact-email">
        ummehabibasawme@gmail.com
      </p>

      <!-- SOCIAL -->
      <div class="contact-social">
        <a
          href="https://github.com/sowme62"
          target="_blank"
          class="social-btn github"
        >
          <img src="files/github.png" alt="GitHub">
          GitHub
        </a>

        <a
          href="https://wa.me/8801955701262"
          target="_blank"
          class="social-btn whatsapp"
        >
          <img src="files/whatsapp.jpg" alt="WhatsApp">
          WhatsApp
        </a>

        <a
          href="https://www.linkedin.com/in/ommey-habiba-sowme-8a29a3240/"
          target="_blank"
          class="social-btn linkedin"
        >
          <img src="files/linkedin.png" alt="LinkedIn">
          LinkedIn
        </a>

        <a
          href="https://www.instagram.com/ummehabibasawme"
          target="_blank"
          class="social-btn instagram"
        >
          <img src="files/instagram.jpg" alt="Instagram">
          Instagram
        </a>

        <a
          href="https://www.facebook.com/ummehabibasawme"
          target="_blank"
          class="social-btn facebook"
        >
          <img src="files/facebook.png" alt="Facebook">
          Facebook
        </a>

        <a
          href="https://x.com/ummehabibasawme"
          target="_blank"
          class="social-btn x"
        >
          <img src="files/x.png" alt="X">
          X
        </a>
      </div>
    </div>
  </section>

<footer>
    © 2026 Ommey Habiba Sowme. All rights reserved.
</footer>

<script>

const observer = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        if(entry.isIntersecting){
            entry.target.classList.add("show");
        }
    });
});

const hiddenElements = document.querySelectorAll("section");
hiddenElements.forEach((el)=>{
    el.classList.add("hidden");
    observer.observe(el);
});

const texts = ["Researcher", "Data Analyst", "AI Enthusiast"];

let index = 0;
let charIndex = 0;
let currentText = "";
let isDeleting = false;

function typeEffect(){

    const typing = document.getElementById("typing");

    if(index >= texts.length){
        index = 0;
    }
    currentText = texts[index];

    if(!isDeleting){
        typing.innerHTML = currentText.substring(0, charIndex + 1);
        charIndex++;

        if(charIndex === currentText.length){
            isDeleting = true;
            setTimeout(typeEffect, 1000);
            return;
        }
    }else{
        typing.innerHTML = currentText.substring(0, charIndex - 1);
        charIndex--;

        if(charIndex === 0){
            isDeleting = false;
            index++;
        }
    }
    setTimeout(typeEffect, isDeleting ? 60 : 120);
}
typeEffect();

</script>
</body>
</html>