<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demilew</title>

        <link href="{{url('css/style.css')}}" rel="stylesheet">
        </head>
<body>

    <div class=" header">
        <img src="image/profile.jpg" class="header_image">
            <div class="header_space">   </div>
          <div class="header_icon_container">

            <div class="header_icon">
            <a href="#Abouht">Profile</a>

            </div>

            <div class="header_icon">
            <a href="#Abouht_me_section">Abouht Me</a>
            </div>

            <div class="header_icon">
              <a href="#projects">My Projects</a>
            </div>

            <div class="header_icon">
              <a href="#contact"> Contact</a>

            </div>

            <div class="header_icon">
              <a href="#contact me">Accounts</a>

             </div>
          </div>

    </div>



            <div class="Wrapper">
                 <div>

                </div>
                <div class="static_text">I'm a</div>
                <ul class="dynamic_text">
                    <li><span>Laravel Developer </span></li>
                    <li><span>Freelancer </span></li>
                    <li><span>Website Developer</span></li>
                    <li><span>Machine Learning Expert </span></li>
                </ul>

            </div>



   <!-- social media content -->


<!-- Abouht me descripiton  -->

    <div class="Abouht_me_section"id="Abouht_me_section">
      <div class="Abouht_me_image_container">
           <div class="">
             <img src="image/Demilew.jpg" class="Abuoht_me_image">
           </div>
           <img src="image/Demilew.jpg" class="Abuoht_me_image">

      </div>
           <img src="image/Demilew.jpg" class="Abuoht_me_lift_image">

      <div class="Abouht_me_description">
          <p class="moto">"Everything is achievable with hard work"</p>
          <h1>About Me</h1>

          <div class="Wrapper2">

                <ul class="dynamic_text2">
                    <li><span>I am 23 years old outgoing, confident, and a friendly young man.
                        I have extensive knowledge in  PHP,JavaScript, Python, CSS and HTML.
                         I am well versed in Laravel and Drupal frameworks.</span></li>

                </ul>
            </div>
          <p class="Abouht_me_description">
             I am currently building web app in Laravel framework.
             I will graduate In the comming Augrst 2022, in bachlor of software engineering from Bahir Dar University.
           </p>

           <div class="channel">
            <p><a href="/download-file"><b>Download CV</b></a></p>
            </div>
        </div>
      </div>
<!-- this is fot recent project -->
   <div class="recent_project"id="projects">

       <div>
        <h2>My Recent Projects</h2>
        <p class="project_description"> You learn most by building projects.<br>
         &nbsp &nbsp &nbsp &nbsp Go ahead and build something right now.</p>
       </div>

      <div class="project_header">
           <div class="project_header_icon">
             All project
            </div>

            <div class="project_header_icon">
              Laravel
            </div>

            <div class="project_header_icon">
              Machine Learning
            </div>

            <div class="project_header_icon">
              Flask
            </div>

            <div class="project_header_icon">
              Python
             </div>
      </div>

      <div class="project_full">
      <img src="image/laravel.webp" class="Project_image">
      </div>
      <div class="project_full_info">
       <p>Laravel, Tailwind.css, Vue3
          Full Stack app with Laravel, Tailwindcss and Vue 3</p>
             <p class="project_detail_button"> View Detail</p>

      </div>
    </div>

  <!-- this is bussiness enquiry page -->

    <div class="contact"id="contact">
      <div class="bussiness_description">
        <h1>FOR BUSINESS ENQUIRIES</h1>
        <p>If you feel my experience and skills fits your needs, feel free to contact me.</p>
      </div>
      <div class="bussiness_email_form">

      <form action="#">
          <input type="text"placeholder="Your Name"id="name" class="form_input"><br>
          <input type="text"placeholder="Your Email"id="email" class="form_input"><br>
          <input type="text"placeholder="Your Message"id="message" class="form_message_input"><br><br><br>
          <input type="submit"id="send_button"class="send_button" value="send message">
        </form>
      </div>
    </div>

<!-- This is My social media channel part -->
<div class="social_media_contnet" id="contact me">
            <div class="channel_descrioption">
            <h2> Check my web development raod map<h2>
             <p>Check my Github and Linkdean Account.</p>
             phone 09 53 22 98 31
            </div>


            <div class="Github">
            <p> <a href="https://github.com/Demilew11/"><b>Check Github</b> </a></p>
            </div>

            <div class="Linkdean">
            <p> <b>Linkdean </b> </p>
            </div>
          </div>
</body>
</html>
