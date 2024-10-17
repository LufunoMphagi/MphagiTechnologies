<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="mphagi-technologies-high-resolution-logo.png">
    <title>Mphagi Technologies</title>
    <style>

        *{
            user-select: none;
        }


        .contact-section {
    padding: 50px 0;
    border: 2px solid #1a1919;
    border-radius: 8px;
    
    
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.contact-info, .contact-form {
    flex: 1;
    margin: 0 15px;
}

.contact-info h2, .contact-form h2 {
    font-size: 24px;
    margin-bottom: 15px;
    color: #fff;
}

.contact-info p {
    margin-bottom: 20px;
}

.contact-info ul {
    list-style: none;
    padding: 0;
}

.contact-info ul li {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
}

.contact-info ul li i {
    margin-right: 10px;
    color: #00aaff;  /* Updated color for icons */
}

.contact-info ul li a {
    color: #00aaff;  /* Updated color for links */
    text-decoration: none;
}

.contact-info ul li a:hover {
    text-decoration: underline;
}

.contact-form h2 span {
    color: #00aaff;  /* Updated color for "Me" span */
}

.contact-form form {
    display: flex;
    flex-direction: column;
}

.contact-form form input, .contact-form form textarea {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #333;
    background-color: #222;
    color: #fff;
    border-radius: 5px;
}

.contact-form form textarea {
    resize: vertical;
    height: 100px;
}

.contact-form form button {
    padding: 10px;
    background-color: #00aaff;  /* Updated button color */
    border: none;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.contact-form form button:hover {
    background-color: #0088cc;  /* Slightly darker shade for hover effect */
}

@media (max-width: 768px) {
    .container {
        flex-direction: column;
        align-items: center;
    }

    .contact-info, .contact-form {
        margin: 15px 0;
    }
}



.section h2 {
            font-size: 28px;
            border-bottom: 2px solid #00aaff;
            display: inline-block;
            margin-bottom: 20px;
        }
        .about {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .about-text {
            max-width: 50%;
        }
        .about-text h2 {
            font-size: 28px;
            color: #00aaff;
            margin-bottom: 10px;
        }
        .about-text p {
            font-size: 18px;
            line-height: 1.6;
        }
        /* .contact-info {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
        .contact-info a {
            color: #00aaff;
            text-decoration: none;
            margin-bottom: 5px;
        } */
        .profile-image {
            max-width: 45%;
        }
        .profile-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #121212;
            color: #ffffff;
        }
        header {
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px 50px;
            background-color: #1d1d1d;
            z-index: 1000;
        }

        header nav {
    display: flex;
    gap: 20px;
}

header nav a {
    color: white;
    text-decoration: none;
}
.menu-toggle {
    display: none;
    font-size: 1.5em;
    cursor: pointer;
}

/* Sidebar styling */
.sidebar {
    display: flex;
    flex-direction: column;
    gap: 10px;
    position: absolute;
    top: 60px;
    left: 0;
    background-color: #333;
    width: 200px;
    transform: translateX(-100%);
    transition: transform 0.3s ease;
}

.sidebar a {
    padding: 10px;
    color: white;
    text-decoration: none;
}

.sidebar.show {
    transform: translateX(0);
}

/* Responsive styling */
@media (max-width: 768px) {
    header nav {
        display: none;
    }

    .menu-toggle {
        display: block;
    }
}
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #00aaff;
        }
        nav a {
            color: #ffffff;
            margin: 0 15px;
            text-decoration: none;
            position: relative;
        }
        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: #00aaff;
            left: 50%;
            bottom: -5px;
            transition: width 0.3s, left 0.3s;
        }
        nav a:hover::after {
            width: 100%;
            left: 0;
        }
        
        .hero {
            background: url('https://tommcfarlin.com/wp-content/uploads/2015/10/laptop-1024x683.jpg') no-repeat center center/cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            
            position: relative;
            overflow: hidden;
        }
        .hero h1, .hero h2 {
            margin: 0;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 3s forwards;
        }
        .hero h1 {
            font-size: 3em;
            animation-delay: 0.5s;
        }
        .hero h2 {
            font-size: 2em;
            animation-delay: 1s;
        }
        .buttons {
            margin-top: 20px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s forwards 1.5s;
        }
        .buttons a {
            color: #ffffff;
            background-color: #00aaff;
            padding: 10px 20px;
            text-decoration: none;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .buttons a:hover {
            background-color: #0088cc;
            transform: translateY(-5px);
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
        
@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}



        



        .content {
            padding: 50px;
        }
        .section {
            margin-bottom: 50px;
        }
        .section h2 {
            font-size: 28px;
            border-bottom: 2px solid #00aaff;
            display: inline-block;
            margin-bottom: 20px;
        }
        .section p {
            font-size: 18px;
            line-height: 1.6;
        }
        .skills, .experience {
            display: flex;
            flex-wrap: wrap;
        }
        .skill, .job {
            background-color: #1d1d1d;
            margin: 10px;
            padding: 20px;
        
            border-radius: 5px;
            display: flex;
            align-items: center;
            transition: transform 0.3s;
            width: calc(50% - 40px);
        }
        .skill:hover, .job:hover , .job1:hover{
            transform: scale(1.05);
        }
        .skill img, .job img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

         .job1
        {
            background-color: #1d1d1d;
            margin: 10px;
            padding: 20px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            transition: transform 0.3s;
            width: calc(100% - 40px);
        }
        /* .contact-info {
            display: flex;
            flex-direction: column;
        }
        .contact-info a {
            color: #00aaff;
            text-decoration: none;
            margin-bottom: 5px;
        } */
        footer {
            background-color: #1d1d1d;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #00aaff;
        }
        nav a {
            color: #ffffff;
            margin: 0 15px;
            text-decoration: none;
            position: relative;
            
        }
        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: #00aaff;
            left: 50%;
            bottom: -5px;
            transition: width 0.3s, left 0.3s;
        }
        nav a:hover::after {
            width: 100%;
            left: 0;
        }
        .content {
            padding: 50px;
        }
        .section {
            margin-bottom: 50px;
        }
        .section h2 {
            font-size: 28px;
            border-bottom: 2px solid #00aaff;
            display: inline-block;
            margin-bottom: 20px;
        }
        .section p {
            font-size: 18px;
            line-height: 1.6;
        }
        .resume {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .column {
            flex: 1;
            padding: 20px;
        }
        .column h3 {
            font-size: 20px;
            color: #00aaff;
            margin-bottom: 10px;
        }
        .skills, .experience, .education, .design-skills, .hobbies {
            margin-bottom: 30px;
        }
        .skill, .job, .education-item, .design-skill, .hobby {
            background-color: #1d1d1d;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            transition: transform 0.3s;
        }
        .skill:hover, .job:hover, .education-item:hover, .design-skill:hover, .hobby:hover {
            transform: scale(1.05);
        }
        .skill img, .job img, .education-item img, .design-skill img, .hobby img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }
        .skill-bar {
            flex: 1;
            height: 6px;
            background-color: #333333;
            border-radius: 3px;
            margin-left: 10px;
            overflow: hidden;
        }
        .skill-bar div {
            height: 100%;
            background-color: #00aaff;
        }
        .experience .job {
            flex-direction: column;
            align-items: flex-start;
        }
        .experience .job h4 {
            margin: 5px 0;
        }
        .experience .job p {
            margin: 2px 0;
        }
        /* .contact-info a {
            color: #00aaff;
            text-decoration: none;
            margin-bottom: 5px;
        } */
    </style>

    <script>
        // script.js

document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');

    menuToggle.addEventListener('click', function() {
        sidebar.classList.toggle('show');
    });
});

    </script>
</head>
<body>
    <header class="fade-in">
        <div class="logo">Mphagi Technologies</div>
        <div class="menu-toggle" id="menu-toggle">&#9776;</div>
        <nav id="sidebar" class="sidebar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#resume">Resume</a>
            <a href="#Contact">Contact</a>
        </nav>
    </header>
    <div id="home" class="hero">
        <h1>Lufuno Mphagi</h1>
        <h2>Back and Front End Developer</h2>
        <div class="buttons">
            <a href="#resume">Resume</a>
            <a href="#Contact">Contact</a>
        </div>
    </div>
    <div class="content">
        <section id="about" class="section fade-in">
            <div class="about">
                <div class="about-text">
                    <h2>ABOUT</h2>
                    
                    <p>At Mphagi Technologies, we are at the forefront of innovation, specializing in both front-end and back-end network development. Our company was founded in 2024 by visionary Lufuno Mphagi, who is currently studying for a bachelor's degree in computer science. Our company is dedicated to providing cutting-edge solutions that enhance your digital presence.

                        <br>
                        <br>

                        Our origins may be traced back to our passion for technology, and we have since grown to provide a wide range of development and technological services.Mphagi Technologies is the best option for individuals who want a user-friendly interface, extensive backend capabilities, or a combination of the two.
                        
                        <br>
                        <br>

                        In addition to development, we provide IT technical services to ensure that your systems operate at peak performance. Our expert staff is dedicated to providing quality on every project we tackle. As we develop, our dedication to innovation, quality, and client satisfaction remains unchanged. Join us on this exciting technology journey and let us make your ideas a reality.
                        
                        <br>
                        <br>

                        Thank you for choosing Mphagi Technologies - where innovation meets expertise...</p>
                    
                </div>
                <div class="profile-image">
                    <img src="mphagi-technologies-high-resolution-logo.png" alt="Profile Image">
                </div>
            </div>
        </section>
      
            <section id="resume" class="section fade-in">
                <h2>Resume</h2>
                <div class="resume">
                    <div class="column">
                        <h3>Programming Skills</h3>
                        <div class="skills">
                            <div class="skill">
                              
                                Front-End Web Devlopment
                                <!-- <div class="skill-bar"><div style="width: 90%;"></div></div> -->
                            </div>
                            <div class="skill">
                              
                                Back-End Web Development
                                <!-- <div class="skill-bar"><div style="width: 80%;"></div></div> -->
                            </div>
                            <div class="skill">
                              
                                Object-Oriented Programming
                                <!-- <div class="skill-bar"><div style="width: 70%;"></div></div> -->
                            </div>
                            <div class="skill">
                              
                                Database Adminstration
                                <!-- <div class="skill-bar"><div style="width: 85%;"></div></div> -->
                            </div>
                           
                        </div>
                        <h3>Languages</h3>
                        <div class="skills">
                            <div class="skill">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg" alt="CPlusPlus">
                                <div class="skill-bar"><div style="width: 70%;"></div></div>
                            </div>
                            <div class="skill">
                                <img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/181_Java_logo_logos-512.png" alt="Java">
                                <div class="skill-bar"><div style="width: 65%;"></div></div>
                            </div>
                            <div class="skill">
                                <img src="https://e7.pngegg.com/pngimages/780/934/png-clipart-html-logo-html5-logo-icons-logos-emojis-tech-companies-thumbnail.png" alt="html">
                                <div class="skill-bar"><div style="width: 78%;"></div></div>
                            </div>
                            <div class="skill">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/CSS3_logo.svg/512px-CSS3_logo.svg.png?20210705212817" alt="css">
                                <div class="skill-bar"><div style="width: 76%;"></div></div>
                            </div>
                            <div class="skill">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/JavaScript-logo.png/600px-JavaScript-logo.png" alt="javascript">
                                <div class="skill-bar"><div style="width: 71%;"></div></div>
                            </div>
                            <div class="skill">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Node.js_logo.svg" alt="nodejs">
                                <div class="skill-bar"><div style="width: 64%;"></div></div>
                            </div>
                            <div class="skill">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="php">
                                <div class="skill-bar"><div style="width: 68%;"></div></div>
                            </div>
                            <div class="skill">
                                <img src="https://upload.wikimedia.org/wikipedia/labs/8/8e/Mysql_logo.png?20080127184102" alt="mysql">

                                <div class="skill-bar"><div style="width: 86%;"></div></div>
                            </div>
                            <div class="skill">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/R_logo.svg/724px-R_logo.svg.png?20240131042527" alt="R">

                                <div class="skill-bar"><div style="width: 70%;"></div></div>
                            </div>
                            <div class="skill">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="python">
                                <div class="skill-bar"><div style="width: 63%;"></div></div>
                            </div>
                        </div>
                        <h3>Personal Skills</h3>
                        <div class="skills">
                            <div class="skill">
                                Creativity - Team Work - Organization
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <h3>Experience</h3>
                        <div class="experience">
                            <div class="job">
                                <h4>July 2023 - Present</h4>
                                <h4>Student IT Lab Technician</h4>
                                <p>University of Pretoria</p>
                            </div>
                            <div class="job">
                                <h4>April 2023 - 2024</h4>
                                <h4>Vendors Manager</h4>
                                <p>Plankton</p>
                            </div>
                            <div class="job1">
                                <h4>August 2022 - August 2023</h4>
                                <h4>Radio Technical Producer</h4>
                                <p>Tuks FM</p>
                            </div>
                           
                        </div>
                        <h3>Education</h3>
                        <div class="education">
                            <div class="education-item">
                                <h4>Persuing BSC Computer Science, University of Pretoria</h4>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <h3>Achievements & Leadership</h3>
                        <div class="design-skills">
                            <div class="design-skill">
                                <h4>2022 WITS MATHEMATICS COMPETITION UNDERGRAD FINALIST</h4>
                            </div>
                            <div class="design-skill">
                                <h4>University of Pretoria School of IT Sub House Chairperson</h4>
                            </div>
                            <div class="design-skill">
                                <h4>African Centre of Excellence for Information Ethics (ACEIE), Department of Information Science, University Of Pretoria
                                    •	Issues with the grey digital divide itself and solutions which exist. 
                                    </h4>
                            </div>
                        </div>
                        <h3>Technical IT Skills</h3>
                        <div class="design-skills">
                            <div class="design-skill">
                                <h4>PC Casting</h4>
                            </div>
                            <div class="design-skill">
                                <h4>Computer Networking</h4>
                            </div>
                            <div class="design-skill">
                                <h4>IT Technical Support</h4>
                            </div>
                            <div class="design-skill">
                                <h4>Software & Hardware Maintence</h4>
                            </div>
                        </div>
                        <!-- <h3>Hobbies & Interests</h3>
                        <div class="hobbies">
                            <div class="hobby">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/OOjs_UI_icon_reading-ltr-progressive.svg" alt="Reading">
                                Reading
                            </div>
                            <div class="hobby">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4b/Icon_Scenery.svg" alt="Photography">
                                Photography
                            </div>
                            <div class="hobby">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Icon_drawing.svg" alt="Drawing">
                                Drawing
                            </div>
                            <div class="hobby">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3b/Icon_travel.svg" alt="Travel">
                                Travel
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
        
      
       

    <!-- <div class="heading">
        <h2 style="color: #fff;">get in <span>touch</span></h2>
    </div> -->

    <!-- <div class="box-contact_container">

        <div class="contact-item">
            <i class="fas fa-phone-alt" style="color: #fff;"></i>
            <h3 style="color: #fff;">phone</h3>
            <p style="color: #bbb;">+123 456 7890</p>
        </div>

        <div class="contact-item">
            <i class="fas fa-envelope" style="color: #fff;"></i>
            <h3 style="color: #fff;">email</h3>
            <p style="color: #bbb;">elora@example.com</p>
        </div>

        <div class="contact-item">
            <i class="fas fa-map-marker-alt" style="color: #fff;"></i>
            <h3 style="color: #fff;">address</h3>
            <p style="color: #bbb;">123 Street, City, Country</p>
        </div>

    </div> -->

    <section class="contact-section" id="Contact" class="section fade-in">
        <div class="container">
            <div class="contact-info">
                <h2>Get In Touch</h2>
                
                <ul>
                    <li><i class="fas fa-phone"></i> <a href="tel:+27724090369">+27 72 409 0369</a></li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:lufunomphagi@gmail.com">lufunomphagi@gmail.com</a></li>

                    <li><i class="fab fa-linkedin"></i> <a href="https://www.linkedin.com/in/lufunomphagi/">Lufuno Mphagi</a></li>
                    <li><i class="fab fa-github"></i> <a href="https://github.com">Lufuno Mphagi</a></li>
                </ul>
            </div>
            <div class="contact-form">
                <h2>Contact <span>Me</span></h2>
                    <?php if (isset($success) && $success): ?>
                        <div class="success-message">Message sent successfully!</div>
                    <?php elseif (isset($error)): ?>
                        <div class="error-message"><?php echo $error; ?></div>
                    <?php endif; ?>

                <form action="submit_message.php" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br><br>
            
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br><br>
            
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea><br><br>
            
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </section>
    </div>
    <footer class="fade-in">
        &copy; 2024 Mphagi Technologies
    </footer>
</body>
</html>
