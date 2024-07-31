<?php include "Includes/header.php" ?>
<?php include "Includes/navbar.php" ?>
<div id="about">
    <div class="container1">
        <div class="row">
            <div class="about-col1">
                <img src="IMG\1.PNG" alt="Joel">
            </div>
            <div class="about-col2">
                <h1 class="sub-title">About Me</h1>
                <p>
                 Joel Nguru is a passionate web developer with a knack for creating
                 innovative and user-friendly websites. With a strong background in 
                 both front-end and back-end development, Joel excels at turning complex
                  problems into elegant digital solutions. His dedication to staying updated
                 with the latest industry trends ensures that every project he undertakes is
                cutting-edge and efficient. Outside of coding, Joel enjoys exploring new 
                technologies and contributing to open-source projects, continuously expanding 
                his expertise in the ever-evolving world of web development.</p>
            
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links"onclick="opentab('experience')">Experience</p>
                        <p class="tab-links"onclick="opentab('education')">Education</p>
                    </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                    <li><span>GUI</span><br>Designing Web/App Interfaces</li>
                    <li><span>Web Development</span><br>Web app Development</li>
                    <li><span>App Development</span><br>Building Android/iOS apps</li>
                    </ul>
                </div>
                <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>2024 - current</span><br>FrontEnd Designer at Starehe Institute</li>
                        <li><span>2020 - 2023</span><br>Computer club chairman</li>
                        <li><span>2016 - 2020</span><br>Minor Coder at Kawangware</li>
                     </ul>
                </div>
                <div class="tab-contents" id="education">
                    <ul>
                    <li><span>2012</span><br>Lower Primary Studies at Joywell School</li>
                    <li><span>2019</span><br>Higher Primary Studies at The Milimani School</li>
                    <li><span>2023</span><br>Secondary Studies at Starehe Boys Centre</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   <div class="bars">
    <div class="skill-item">
        <h5>CSS</h5>
        <div class="progress">  
            <div class="progress-in" style="width: 93%;"></div>
            <div class="skill-percent">93%</div>
        </div>
    </div>
    <div class="skill-item">
        <h5>JS</h5>
        <div class="progress">  
            <div class="progress-in" style="width: 86%;"></div>
            <div class="skill-percent">86%</div>
        </div>
    </div>
    <div class="skill-item">
        <h5>PHP</h5>
        <div class="progress">  
            <div class="progress-in" style="width: 60%;"></div>
            <div class="skill-percent">60%</div>
        </div>
    </div>
    <div class="skill-item">
        <h5>HTML</h5>
        <div class="progress">  
            <div class="progress-in" style="width: 96%;"></div>
            <div class="skill-percent">96%</div>
        </div>
    </div>
    <div class="skill-item">
        <h5>Bootstrap</h5>
        <div class="progress">  
            <div class="progress-in" style="width: 76%;"></div>
            <div class="skill-percent">76%</div>
        </div>
    </div>
   </div>
</div>
<?php include "Includes/footer.php" ?>