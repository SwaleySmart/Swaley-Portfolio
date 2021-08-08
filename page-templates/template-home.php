<?php
/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>


<div class="home-hero px-2 d-flex flex-column">
    <img src="/wp-content/themes/understrap/sass/assets/images/logo.png" alt="" class="img-responsive p-4">
    <div class="d-flex flex-row">
        <a href="#aboutme" class="btn btn-primary mx-1 text-uppercase">About Me</a>
        <a href="#portfolio" class="btn btn-primary mx-1 text-uppercase">Portfolio</a>
        <a href="#testimonials" class="btn btn-primary mx-1 text-uppercase">Testimonials</a>
        <a href="https://github.com/SwaleySmart/Swaley-Portfolio" target="_blank" class="btn btn-primary mx-1 text-uppercase"><span class="fa fa-github"></span></a>
    </div>
</div>

<div class="container">
<!-- About Me Section -->
    <section id="aboutme" class="mt-5 mb-5">
        <div class="row p-3">

            <div>
                <div class="display mt-5 mb-5 text-center">
                    <h2>About Me - My story so far...</h2>
                </div>
                <p class="content-text">
                I am a 33 year old Web Designer & Developer, I have been designing and coding websites since the age of 15.
                When I first got started, Microsoft notepad was my weapon of choice with snippets of Javascript and PHP as I needed them.
                Things progressed and I began to design websites in Photoshop, slice them up and code them in Dreamweaver.
                </p>
                <p class="content-text">
                As WordPress became more popular I switched over to using the CMS for all websites, which was a gift and a curse.
                It was a gift because it meant I could get new websites up and running quickly using themes and adding functionality with the many plugins.
                However, it was a curse because for many years this became a crutch and I neglected doing things by hand and progressing my skillset with modern web development technologies.
                </p>
                <p class="content-text">
                This was my progression in terms of Web Development from roughly 2004 - 2016, during those years however I did build up another skillset in SEO & Marketing.
                Prior to 2012 I was building and ranking many websites using on and off-page SEO techniques which would later be hit in various Google algorithm updates.
                From 2013 onwards my main monthly income from Google Adsense, Amazon and other affiliate networks decreased to a level that I would soon need to enter employment.
                </p>
                <p class="content-text">
                As a sidenote, from 2009 - 2014 I also owned and operated a private events company which provided visitor attractions for many large outdoor events throughout the year, such as festivals and corporate hire.
                I eventually sold all of the equipment and decided to focus my efforts back into my internet based business.
                </p>
                <p class="content-text">
                In 2017 I took up employment at Big Yellow Marketing & Communications Ltd where during my time there I was able to give value from the different skills and knowledge I had gained over the years.
                Some of my proudest achievements were helping to build the team back up from only 2 staff to 8 and bringing in thousands in monthly revenue with successful email and social media campaigns.
                I feel I had a positive effect and left the company healthier than it was prior to me starting.
                However, as I was the only developer; speed and resources meant I had to use the most efficient tools possible which meant custom designing websites using builders such as Divi and Elementor.
                </p>
                <p class="content-text">
                In 2019 looking for a bigger challenge and wanting to be part of a larger team of developers and pursue a career as a Full Stack Developer, I made the move 
                to Havas Helia as an email developer. This was a big move going from a team of 8 to a huge office block of 200 staff and freelancers. This was an exciting role and it allowed me to work on larger projects for companies such as GAP, Pets at Home, Royal Mail, Diageo and others.
                Unfortunately, due to a medical issue around this time I felt it best to take some time out of employment to focus on my health and also use this free time to upskill in modern web development technologies.
                </p>
                <p class="content-text">
                Over the remainder of 2019 and during the global pandemic and lockdowns of 2020 I took courses in Javascript, React, PHP and touched briefly on frameworks such as Laravel, NextJS, Gatsby, Craft CMS, VUE JS and Tailwind.
                At the start of 2021 I decided to go at it alone and founded Firejam Ltd and I have managed to onboard new clients this year just by word of mouth, without any real promotion.
                I have been building client websites in Oxygen for Wordpress, which is a really unique builder requiring knowledge of HTML, CSS and PHP to use effectively.
                It also has addons such as Monster and OxyNinja, which are essentially extensions of the Tailwind CSS framework.
                </p>
                <p class="content-text">
                While I feel I could continue to build upon the business my main passion is Design & Development. 
                I have realised quite quickly that to make a service based business work it requires a person to work ON the business rather than IN the business.
                So for me this creates a problem as I would rather spend my days doing the actual work than organising freelancers and other tasks involved in growing and scaling a small agency.
                For this reason I am now seeking employment so that I can be part of a team once again and continue to push my knowledge even further.
                </p>
                <p class="content-text">
                If you've got this far, thank you for reading the story of my career progression so far :)
                </p>
                
            </div>

        </div>

    </section>

<!-- End About Me Section -->

<!-- Portfolio Section -->

    <section id="portfolio" class="mt-5 mb-5">
        <div class="display mb-5 text-center">
            <h2>Web Design & Development Portfolio</h2>
        </div>
        

        <div class="row g-5">
            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.prettygoldsoulbeauty.co.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/PGS.jpg" alt=""></a>  
                <p>Pretty Gold Soul</p>
            </div>        
            
            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://wordpress-616714-2087188.cloudwaysapps.com/" target="_blank"><img src="/wp-content/themes/understrap/img/AEI.jpg" alt=""></a>  
                <p>Aldridge Electrical Installations<br><strong>(Under construction)</strong></p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.precisionbuildersltd.co.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/PBL.jpg" alt=""></a>  
                <p>Precision Builders Ltd</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.qcautomotive.co.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/QCA.jpg" alt=""></a>  
                <p>QC Automotive</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://capa-angus.co.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/CAPA.jpg" alt=""></a>  
                <p>CAPA</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.nogrey.co.uk" target="_blank"><img src="/wp-content/themes/understrap/img/BW.jpg" alt=""></a>  
                <p>B&W Group</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.oddpennyaccommodation.co.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/OPA.jpg" alt=""></a>  
                <p>Odd Penny Accomodation</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.just2saygifts.co.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/JTS.jpg" alt=""></a>  
                <p>Just To Say</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://majaneng.com/" target="_blank"><img src="/wp-content/themes/understrap/img/MEC.jpg" alt=""></a>  
                <p>Majan Engineering Oman</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.muddywellies.org.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/MW.jpg" alt=""></a>  
                <p>Muddy Wellies</p>
            </div>


            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.creoatman.com/" target="_blank"><img src="/wp-content/themes/understrap/img/CA.jpg" alt=""></a>  
                <p>Creo Atman</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.thecarriersarms.co.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/TCA.jpg" alt=""></a>  
                <p>The Carriers Arms</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.fountainfotos.com/" target="_blank"><img src="/wp-content/themes/understrap/img/FF.jpg" alt=""></a>  
                <p>Fountain Fotos</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.cirencestereca.co.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/CECA.jpg" alt=""></a>  
                <p>Cirencester ECA</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="http://www.angelinarizza.co.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/AR.jpg" alt=""></a>  
                <p>Angelina Rizza</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.paulwestleyopticians.co.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/PWO.jpg" alt=""></a>  
                <p>Paul Westley Opticians</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.c-hubcirencester.org.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/CHUB.jpg" alt=""></a>  
                <p>C-Hub Cirencester</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.tasf.org.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/TASF.jpg" alt=""></a>  
                <p>The Ashley Scrivens Foundation</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.happyhoundscirencester.co.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/HHC.jpg" alt=""></a>  
                <p>Happy Hounds Cirencester</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.diecastconstruction.co.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/DC.jpg" alt=""></a>  
                <p>Diecast Construction</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://petrol-signuk.com/" target="_blank"><img src="/wp-content/themes/understrap/img/PSUK.jpg" alt=""></a>  
                <p>Petrol Sign UK</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.vaughancleaningservices.co.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/VCS.jpg" alt=""></a>  
                <p>Vaughan Cleaning Services</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.tierraandmar.co.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/TAM.jpg" alt=""></a>  
                <p>Tierra & Mar</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.tlc-events.org.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/TLCE.jpg" alt=""></a>  
                <p>TLC Events</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.thermelec.ie/" target="_blank"><img src="/wp-content/themes/understrap/img/TMLC.jpg" alt=""></a>  
                <p>Thermelec Ltd</p>
            </div>

            <div class="col-sm-6 col-md-4 p-4">
                <a href="https://www.houseproudconstructionltd.co.uk/" target="_blank"><img src="/wp-content/themes/understrap/img/HPC.jpg" alt=""></a>  
                <p>Houseproud Construction</p>
            </div>


        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- Testimonials Section -->
<section id="testimonials"></section>
    <div class="display text-center">
            <h2>Testimonials</h2>
        </div>

    <div class="container">
    <div id="testimonials" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption">
                    <p>Swaley has repeatedly proved that he is able to quickly grasp and execute against 
                        a sometimes demanding timeframe. He has the ability to assimilate new information 
                        as well as remembering previous learnings within the campaigns he has commenced on our behalf. 
                        Happy to recommend </p> <img src="/wp-content/themes/understrap/img/tim.jpg">
                    <div id="image-caption">Tim Rooney</div>
                    <p>CEO - Salad Money</p>
                </div>
            </div>
            
            <div class="carousel-item">
                <div class="carousel-caption">
                    <p>Swaley is a technical talent and an engaging, engaged individual. 
                        He listens intently and helps us focus on what we need. 
                        Absolutely trusted to deliver on time and on spec every time.</p> <img src="/wp-content/themes/understrap/img/matthew.jpg" class="img-fluid">
                    <div id="image-caption">Matthew Spowage</div>
                    <p>Capital One</p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-caption">
                    <p>Really enjoying working with Swaley on the re-design and maintenance of two web sites. 
                        His knowledge is extensive and his creativity is hugely beneficial to us. 
                        Very efficient, pleasant, and easy to work with.</p> <img src="/wp-content/themes/understrap/img/michael.jpg" class="img-fluid">
                    <div id="image-caption">Michael O'Reilly</div>
                    <p>Managing Director - Pneumatics Group</p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-caption">
                    <p>Swaley is always very professional, knowledgable and quick to respond to my needs. 
                        He has gone beyond the call of duty to resolve a recent issue and takes the time to 
                        explain complex issues in a way that is easy for a lehman to understand! 
                        Thanks for your ongoing support :D</p> <img src="/wp-content/themes/understrap/img/dan.jpg" class="img-fluid">
                    <div id="image-caption">Dan Taylor</div>
                    <p>Director - BeAdvised Mortgage Solutions</p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-caption">
                    <p>Swaley is a highly skilled web developer, with a wide range of skills and expertise which he can loan to any project. 
                        His creativity and passion shines through his work no matter the subject, 
                        and he always delivers to his clients on deadline. 
                        Swaley is a pleasure to work with, and I would confidently recommend him to anyone 
                        looking for assistance with their creative projects.</p> <img src="/wp-content/themes/understrap/img/tara.jpg" class="img-fluid">
                    <div id="image-caption">Tara Barry</div>
                    <p>Secretary - TA Baxter Contracting</p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-caption">
                    <p>Swaley built my website earlier this year. I felt the brief was vague in terms of product and placement, 
                        but he understood what I was saying quickly and completely. 
                        The first draft was almost there in style, content and colour. 
                        Only a few tweaks and I was satisfied. Swaley continues to support me with requested changes and additions, 
                        and is always responsive and in tune. Good work! Thanks Swaley. 
                        Highly recommended. </p> <img src="/wp-content/themes/understrap/img/teena.jpg" class="img-fluid">
                    <div id="image-caption">Teena Ackary</div>
                    <p>Writer</p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-caption">
                    <p>A highly skilled and technically savvy Web Developer, Swaley holds a wealth of experience. 
                        His knowledge and passion for the creative industry and online world is indisputable. 
                        It was a pleasure to work with Swaley. 
                        His ability to understand what clients want combined with his expertise and vast range of skills 
                        makes Swaley a unique digital talent. Highly recommend. </p> <img src="/wp-content/themes/understrap/img/bridget.jpg" class="img-fluid">
                    <div id="image-caption">Bridget Anderson</div>
                    <p>Digital Marketing Executive of E-Commerce, Gardner Bros</p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-caption">
                    <p>Swaley is the first person that comes to mind when someone is after an incredibly skilled and experienced web developer. 
                        I would 110% recommend him as he is professional, understanding as well as creative and just an all-round great guy. 
                        It was a pleasure to work with him!</p> <img src="/wp-content/themes/understrap/img/keelan.jpg" class="img-fluid">
                    <div id="image-caption">Keelan Little</div>
                    <p>Creative Director - Design Arc Studio</p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-caption">
                    <p>Professional, friendly and very skilled. Absolutely loved the work Swaley has done for us and cannot recommend him enough! 
                        5 star rating</p> <img src="/wp-content/themes/understrap/img/hedi.jpg" class="img-fluid">
                    <div id="image-caption">Hedi Fountain</div>
                    <p>Photographer/Videographer - Fountain Fotos</p>
                </div>
            </div>
           
        </div> <a class="carousel-control-prev" href="#testimonials" data-slide="prev"> <i class='fa fa-arrow-left'></i> </a> <a class="carousel-control-next" href="#testimonials" data-slide="next"> <i class='fa fa-arrow-right'></i> </a>
    </div>
</div>
</section>
    <!-- Testimonial Section -->

</div>

<?php
get_footer();
