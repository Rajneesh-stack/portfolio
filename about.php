

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/portfolio.css">
    <link rel="stylesheet" href="./css/responsiv.css">
    <link href="./css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
</head>
<body>
    <!-- Navbar section start -->
    <?php
            include "navbar.php"
            ?>
 <!-- Navbar section start -->
 <!-- about section start -->
 <section class="about">
        <div class="about-part1"  >
            <h2>About us</h2>
            <h3>I’m a Creative developer based on India, who loves clean, simple & unique design. I also love designing.</h3>
        </div>
        <div class="about-part2">
            <div class="about-part2-content">
                <h3>My Qualification</h3>
                <p> Diploma(CS&E) <sub> with 69%</sub></p>
                <p> Intermediate <sub> with 74%</sub></p>
                <p> Highschool <sub> with 73%</sub></p>
                <h3>Skills</h3>
                <p>C,HTML, CSS, JS, JQUERY, BOOTSTRAP,&nbsp;PHP.</p>
                    <button class="cv">Download CV</button>
            </div>
            <div class="about-part2-persentage">
                <div class="rangtext">
                    <p>Web Designing</p><span>90%</span>
                </div>
                <div class="range">
                    <div class="inner-range" id="inner-range1"></div>
                </div>
                <div class="rangtext">
                    <p>HTML</p><span>80%</span>
                </div>
                <div class="range">
                    <div class="inner-range" id="inner-range2"></div>
                </div>
                <div class="rangtext">
                    <p>CSS</p><span>75%</span>
                </div>
                <div class="range">
                    <div class="inner-range" id="inner-range3"></div>
                </div>
                <div class="rangtext">
                    <p>JAVA SCRIPT</p><span>70%</span>
                </div>
                <div class="range">
                    <div class="inner-range" id="inner-range4"></div>
                </div>
            </div>
        </div>
      </section>

       <!-- about section end -->
 <!-- my work section start -->
 <section class="my-work">
            <div class="mywork-content">
                <h3>My Work</h3>
            </div>
            <div class="my-workdemo">
                <div class="forslide"data-aos="zoom-out-up"data-aos-easing="linear"
                data-aos-duration="800">
                    <img src="./images/Screenshot 2024-12-09 190146.png" alt="Calculater" class="cal">
                    <div class="innerslide1">
                        <P>This Calculater is design with HTML CSS & JS</P>
                        <p>A little Javascript Project
                        </p>
                        <button id="calcu">Source code</button>
                    </div>
                </div>
                <div class="forslide"data-aos="zoom-out-up"data-aos-easing="linear"
                data-aos-duration="800">
                   <img src="./images/Screenshot 2024-12-09 190513.png" alt="To do list aap" class="todo">
                   <div class="innerslide1">
                    <P>This Todo app is design with HTML CSS & JS</P>
                    <p>A little Javascript Project
                    </p>
                    <button id="todo">Source code</button>
                   </div>
                </div>
                <div class="forslide"data-aos="zoom-out-up"data-aos-easing="linear"
                data-aos-duration="800">
                     <img src="./images/Screenshot 2024-12-09 191458.png" alt="Responsiv Webpage" class="wepage">
                     <div class="innerslide1">
                        <P>This webpage is design with HTML CSS & JS</P>
                        <p>A fully responsive webpage</p>
                        <button id="investa">Source code</button>
                     </div>
                </div>
            </div>
           </section>
           <!-- my work section end -->

 
                <!-- footer section start -->
                <?php
               include "footer.php"
               ?>

                  <!-- footer section start -->

                  <!-- <script>
                      //Extra navbar show and hide code here---------------------
  
</body>
</html>
