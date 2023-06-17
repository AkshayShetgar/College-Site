
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angadi</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="Angadilogo.jpg" type="image/png">
   
    
</head>

<body>

    <!-- header section starts  -->

    <header class="header">

      <a href="#" class="logo">
         <img src="Image/Angadilogo.jpg" alt="college logo" style="width: 90px; height: 87px; " /> 
         <div class="collage-name">Angadi Institute Of Technology And Management</div></a>
   
         <nav class="navbar">
            <div id="close-navbar" class="close-icon"><img src="Image/close-icon.gif" width="50" /></div>

               <ul class="navbar-links">

              <li class="navbar-dropdown">
                <a href="#">course</a>
                <div class="dropdown"><ul>
                  <li><a href="#">Computer Department</a>
                     <ul class='dropdown2'>
                        <li><p style="font-size:20px">CS</li>
                        <li><p style="font-size:20px">CSE</p></li>
                        <li><p style="font-size:20px">MCA</p></li>
                        <li><p style="font-size:20px">AI</p></li>
                        <li><p style="font-size:20px">E&C</p></li>
      </text>
                      </ul>
                  </li>
                  <li><a href="#">Management Department</a>
                     <ul class='dropdown2'>
                        <li><p style="font-size:20px">B.Tech</p></li>
                        <li><p style="font-size:20px">M.Tech</p></li>
                        <li><p style="font-size:20px">MBA</p></li>
                        <li><p style="font-size:20px">EEE</p></li>
                        <li><p style="font-size:20px">CIVIL</p></li>
                        <li><p style="font-size:20px">MECHANICAL</p></li>
                     </ul>
                  </li>
               </ul>
                </div>
              </li>

           
            
                      

                         <li class="navbar-dropdown">
                          <a href="About-us.php">About us</a> </li>

                          <li class="navbar-dropdown">
                          <a href="admision-form.php">Gallery</a> </li>
                
                

      <li class="navbar-dropdown">
                      <a href="Contact.php">Contact us</a> </li>

            
        </ul>
         </nav>
   
      <div class="icons">
         <div id="account-btn" class="header-icon"><img src="Image/avatar-icon.svg" alt="user-icon" />
           <img src="Image/avatar-icon-hover.gif" alt="user-icon" width="10" class="header-icon-hover" /></div>

         <div id="menu-btn" class="header-icon"><img src="Image/menu-icon.svg" alt="menu-icon" />
           <img src="Image/menu-icon-hover.gif" alt="menu-icon" width="30" class="header-icon-hover" /></div>
      </div>
   
   </header>
   
   <!-- account form section starts  -->
  
   <div class="account-form">

<div id="close-form" class="close-icon"><img src="Image/Close1.gif" alt="close menu" width="50"></div>
  
      <div class="buttons">
         <span class="btn active login-btn">login</span>
         <span class="btn1 register-btn"></span>
      </div>
     
     <form class="login-form active" action="">
     <h3>login now</h3>
    <form action="" method="POST">
         <p style="font-size:19px">Email:<input type="text" name="username" class="box"></p>
         <p style="font-size:19px">Password:<input type="text" name="password" class="box"></p>
    <div class="flex">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>

         </div>
         <input type="submit" name="Login" class="btn">
       </form>
       </form>
</div>
          
      <?php

      if(isset($_POST['Login']))
      {

        //1.get data from the database
        $full_name = $_POST['username'];
        $pass = $_POST['password'];

        //2.Sql query to save data into database
        $sql = "INSERT INTO login SET
              full_name = '$username',
              pass = '$password',
              ";

        //3.Execute query and save data in database

        session_start();

        $conn = mysqli_connect('localhost','root','')or die(mysqli_error());//database connection
        $db_select = mysqli_select_db($conn,'collegedatabase')or die(mysqli_error());//Selecting database

        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        if($res==TRUE)
        {
          
        }
        else
        {
        
        }
      }

   ?>
    <?php

        $conn = mysqli_connect('localhost','root','')or die(mysqli_error());//database connection
        $db_select = mysqli_select_db($conn,'collegedatabase')or die(mysqli_error());//Selecting database

        $sql = "select * from login";
        $res = mysqli_query($conn, $sql);

        if($res==TRUE)
        {
          $count = mysqli_num_rows($res);

          if($count>0)
          {
            while($rows=mysqli_fetch_assoc($res))
            {
                $full_name = $rows['username'];
                $pass = $rows['password'];
                ;?>

                <p><?php echo $full_name; ?></p>
                <p><?php echo $pass; ?></p><br>

                <?php
            }
          }
          else
          {

          }
        }

    ?>




   <!-- Parallex Effect starts  -->   
   <section>
    <div class="paralex-body">
     <div class="paralex-head paralex-images">
       <div class="paralex-text">
         <h1>Welcome To Angadi Institute of Technology And Management</h1>
         <p>Approved by AICTE ,New Delhi & Affiliated to VTU Belgavi, Accrdited by NAAC<p>

         </div>
     </div>
   </div>
  </section>


<!-- Counter container Start  -->
 
 <section>
    <div class="counter count-section">
       <div class="count-container">

          <div class="counter-box">
             <h2>
                <span id="count1"></span>+
             </h2>
             <p>Admission Every Year</p>
          </div>
       

        <div class="counter-box">
         <h2>
            <span id="count2"></span>+
         </h2>
         <p>Placement Every Year</p>
      </div>

      <div class="counter-box">
         <h2>
            <span id="count3"></span>+
         </h2>
         <p>Passsing rate / Year</p>
      </div>
    </div>
    </div>

 </section>

<!--course section -->

<section class="course-section">
   <div class="section-flex">
       
         <div class="course-box">
         <div class="course-head">

      <h4>Management Department</h4>  
  <ul>
      <li>EEE</li>
      <li>MBA</li>
      <li>M.Tech</li>
      <li>B.Tech</li>
      <li>CIVIL</li>
      <li><MECHANICAL</li>
    </ul>

        <a href="admission-form.html" class="button"> Admission now</a>
         </div>

      <div class="course-image"style="margin-top: -54px">         
        <a href="#">
         <img width="225" height="270" src="Image/bba-department.png" alt="bba-image"/></a>
      </div>
      </div>
      


      <div class="course-box">
        <div class="course-head">

         <h4>Computer Department</h4> 
          <ul>
            <li>AI</li>
            <li>MCA</li>
            <li>CS</li>
            <li>CSE</li>
            <li>E&C</li>
          </ul>
         <a href="admission-form.php" class="button"> Admission now </a>
        </div>


      <div class="course-image" style="margin-top: -50px">
       <a href="#">           
     <img width="20" height="270" src="Image/bca-department.png" alt="bba-image"/></a>
      </div>
      </div>
</div>
</section>

<!-- About us section-->
<section class="about-section-head" id="about-section id">
   <div class="about-container">
       <div class="row">
         <div class="section-title" style="width: 1300px;">
            <h2 style="font-size: 36px; margin-bottom: 30px;"> About Our <span style="color: #f93"> AITM</span> </h2>         
           </div>
           
           
           <div class="about-left">

                <h4>ANGADI INSTITUTE OF TECHONOLOGY AND MANAGEMENT ( AITM )</h4>
             
               <p>Suresh Angadi Education Foundation (SAEF) was established in the year of 2008 under the leadership of the late Shri. Suresh Angadiji. The Foundation accounts for institutes like “Angadi College of Commerce & Science (ACCS)”, “Angadi Institute of Technology & Management (AITM)”, “Angadi International School (AIS)”. </p>
              <p>Under the wing of the Suresh Angadi Education Foundation (SAEF), the Angadi Institute of Technology & Management (AITM) was established in the year 2009. The Institute offers Undergraduate courses in Bachelor of Engineering in Artificial intelligence & Data Science, Civil, Computer Science, Electronics & Communication, Electrical & Electronics, and Mechanical Engineering. AITM has recently introduced Robotics and Automation Engineering in the basket of engineering courses. It also offers Post Graduate courses in Master of Business Administration(MBA), Master of Computer Application(MCA). </p>
              <p>Master of Technology (M.Tech.) in Civil and Mechanical Engineering. AITM also offers Diploma courses in, Civil Engineering, Computer Science,  Electrical Engineering and  Mechanical Engineering. AITM is also recognized as Research Centre in Physics, Chemistry, Mathematics, Civil and Mechanical Engineering Departments approved by VTU, Belagavi..</p>
                   
                   <div class="about-director">    <div>
                      <h4 style="font-size: 18px;">Dr.  Anand Deshpande</h4>
                           <small>(Director of AITM)</small>
                           </div>
                           
                           <button class="btn"><a href="About-us.html">Explore more</a></button>
                           
                   </div>         
             </div>               
             
           
             <div class="about-right">    <div class="box-hover">
                        <div class="about-icon">
                          <img src="Image/library-icon.png" alt="">
                          </div>               
                        <div class="featured-content">
                               <h4> Library</h4>
                               <p> AITM has excellent collection of books and Journals on Management, Computer Sciences & other subjects over 17500+ books.</p>
                        </div></div>
                       <span class="about-line"></span>
                   
                        
                        <div class="box-hover">
                         <div class="about-icon">
                            <img src="Image/computer-icon.png" alt="">     
                         </div>     
                       <div class="featured-content">                     
                               <h4> Computer Lab</h4>          
                               <p>AITM has 200 computers in four labs with updated configuration & Internet connectivity also available.</p>               
                       </div>       </div>                         
                         <span class="about-line"></span>
                
                   <div class="box-hover">
                       <div class="about-icon">
                          <img src="Image/sports-icon.png" alt="">            
                       </div>
                       <div class="featured-content">                     
                               <h4> Sports</h4>
                               <p>AITM Students are sponsored to various inter college sports/ cultural/ literary activities. Institute organizes an annual sports meet “Pratispardha” every year.</p>
                       </div>
                    </div>
           </div>
          
       </div>
   </div>
</section>


<!-- Why Choose AITM Start  -->
<section class="about-bottom">
   <div class="about-bottom-container">
   
        <div class="section-title">
          <h2 style="font-size: 34px;"> Why choose <span style="color: #f93"> AITM</span> </h2>
          <p>AITM is one of the best college with good infrastucture and the environment.  </p>
        </div>
        
        <div class="row">
        
         <div class="bottom-box">
              <div class="bottom-box-img">
                <img src="Image/save-money.gif" alt=""/>
              </div>
              
                <h4>Affordable</h4>
                <p>The Angadi college providing the afforadable courses for every studednt.Anyone one can take admission.  </p>         
         </div>
        
         <div class="bottom-box">
              <div class="bottom-box-img">
                <img src="Image/education.gif" alt=""/>
              </div>
  
                <h4>Quality Education</h4>
                <p>Experienced and motivated faculty using latest techniques in teaching as well as self development.</p>
              </div>
  
            <div class="bottom-box">
              <div class="bottom-box-img">
                <img src="Image/Placement job.gif" alt=""/>
              </div>
 
                <h4> Placement</h4>
                <p>Our Training and placement cell are facilitate students to choose their career with variety of choice for growth & sucess. </p>
              </div>


      </div>
    </div>
</section>


<!--student Notice board-->
<section id="notice-board for student">
   <div class="notice-container">
     <div class="row">
     
     <div class="notice-area">
     
    <div class="first-box">
 
   <div class="notice-heading">
     <h4 class="line">
     <span>Student Notice Board</span></h4>
   </div>
   
 <div class="second-box">
   <br>
  <div class="third-box">
    
 
 <marquee direction="up" scrollamount="5px" onmouseover= "this.stop();" onmouseout="this.start();">
 
 <div><fieldset class="alert-box simple-alert" >
 <legend align= "right" class="flash">New Notice</legend>
     <a style="text-decoration: none;" href="#">Intra college activity of Collage Making was organized for MCA students in the institute.</a>  
 </fieldset></div>
 
 <div><fieldset class="alert-box simple-alert" >
 <legend align= "right" class="flash">New Notice</legend>
     <a style="text-decoration: none;" href="#">A Talent hunt Show is organized in AITM Campus to hunt the talented students.</a>  
 </fieldset></div>
 <div class="alert-box simple-alert" >
     <a style="text-decoration: n one;" href="#">AITM has organized Debate competition held on 3rd April 2022. Students have participated in activity with full enthusiasm.</a>  
 </div>
 <div class="alert-box simple-alert" >
     <a style="text-decoration: none;" href="#">Management Department has organized an activity Just a Minute in Auditorium on 16 Feb. 2022</a>  
 </div>
 <div class="alert-box simple-alert" >
     <a style="text-decoration: none;" href="#">AITM students participated in Collage making Competition held on 25th Jan 2022</a>  
 </div>
 <div class="alert-box simple-alert" >
     <a style="text-decoration: none;" href="#">AITM Celebrated Cashless Day to promote cashless transaction. MCA students have shared their ideas in this workshop on 23rd Jan 2022.</a>  
 </div>
 <div class="alert-box simple-alert" >
     <a style="text-decoration: none;" href="#">Computer Department has organised IT Quiz to enhance the knowledge of IT field among students</a>  
 </div>
 </marquee>
     
   </div></div>
 </div></div>
  
  <!-- upcoming event start -->
  
  <div class="upcoming-event-section">
  
   <div class="event-header">
       <h4>Upcoming <span style="color: #f93">Events</span></h4>
          <span class="event-line"></span>
    </div>
      
      
  <div class="event-body"> 
    <div class="event-box"> 

       <div class="time-from">
         <div class="date">14 <span style="font-size:10px;">September</span></div>
       </div>
 
    <div class="event-wrapper"><a href="">
        <h5 class="title"> Farewell party</h5>
        <div class="time">10:00 am - 3:30 pm</div>
       </a>
    </div>
 </div>
 
  
 <div class="event-box"> 

   <div class="time-from">
     <div class="date">10 <span style="font-size:10px;">September</span></div>
   </div>

<div class="event-wrapper"><a href="">
    <h5 class="title"> JOSH Event organized by MCA Department</h5>
    <div class="time">10:00 am - 4:00 pm</div>
   </a>
</div>
</div>

<div class="event-box"> 

   <div class="time-from">
     <div class="date">20 <span style="font-size:10px;">December</span></div>
   </div>

<div class="event-wrapper"><a href="">
    <h5 class="title"> Freshers for MCA</h5>
    <div class="time">10:00 am - 3:00 pm</div>
   </a>
</div>
</div>

 </div>
 </div>
 
 </div></div>
 </section>

<!--our Recruiters-->
<section class="marquee-section">
   <div class="marquee-container">
   
        <div class="partner-title">
          <h2 style="font-size: 32px;"> Our <span style="color: #f93"> Recruiters</span> </h2>
        </div>
 
   <marquee behavior="alternate" direction="left">
     <img src="Image/ibm-logo.png" alt="Natural" style="width: auto; height: 90px;" />
     <img src="Image/Cognizant.jpg" alt="Natural" style="width: auto; height: 70px;" />
     <img src="Image/Deloite.png" alt="Natural" style="width: auto; height: 90px;" />
     <img src="Image/Jspider.jpg" alt="Natural" style="width: auto; height: 90px;" />
     <img src="Image/Mindtree.jpg" alt="Natural" style="width: auto; height: 90px;" />
     <img src="Image/Mphasis.png" alt="Natural" style="width: auto; height: 90px;" />
     <img src="Image/Ntt.png" alt="Natural" style="width: auto; height: 90px;" />
     <img src="Image/Qspider.jpg" alt="Natural" style="width: auto; height: 70px;" />
     <img src="Image/Robosoft.png" alt="Natural" style="width: auto; height: 90px;" />
     <img src="Image/Tcs.png" alt="Natural" style="width: auto; height: 70px;" />
     <img src="Image/tech-mahindra.png" alt="Natural" style="width: auto; height: 90px;" />
     <img src="Image/Wipro.png" alt="Natural" style="width: auto; height: 70px;" />

   </marquee>
   </div>
</section>



<!-- footer section starts -->

<footer style="background:url(Image/Speedline-50s-1846px.svg)">
   <div class="content">
     <div class="top">
       <div class="logo-details">
         <span>Angadi Insitute of Technology And Management</span>
       </div>
       <div class="media-icons">
         <a href="https://www.facebook.com/aitmbgm" target="_blank"><i class="fab fa-facebook-f"></i></a>
         <a href="https://instagram.com/mcaaitm?igshid=YmMyMTA2M2Y=" target="_blank" ><i class="fab fa-instagram"></i></a>
         <a href="https://www.youtube.com/watch?v=YhXWAnHWb_c" target="_blank"><i class="fab fa-youtube"></i></a>
       </div>
     </div>
     
     <div class="link-boxes">
       <ul class="box">
         <li class="link_name">About</li>
         <li><a href="Index.php">Home</a></li>
         <li><a href="Contact.php">Contact us</a></li>
         <li><a href="About-us.php">About us</a></li>
       </ul>
       <ul class="box">
         <li class="link_name">Quick Links</li>
         <li><a href="admision-form.php">Gallery</a></li>
         <li><a href="#notice-board for student">Notice Board</a></li>
         
       </ul>
       <ul class="box">
        <li class="link_name">Student's Corner</li>
  <li><a href="#upcoming-event-section">Events</a></li>
        <li><a href="fees-payment.php">FAQs</a></li>
        <li><a href="complaint.php">Feedback</a></li>
      
        
        
      </ul>
       <ul class="box">
         <li class="link_name">Account</li>
         <li><a href="#">Admin Login</a></li>
         <li><a href="#">My account</a></li>
       </ul>
       
       </div>
   </div>
   <div class="bottom-details">
     <div class="bottom_text">
       <span class="copyright_text">Copyright © 2022 | All rights reserved To Akshay And Swapnil</span>
       <span class="policy_terms">
         <a href="#">Privacy policy</a>
         <a href="#">Terms & condition</a>
       </span>
     </div>
   </div>
 </footer>
 
<!--footer section ends -->


<div class="chat-button"> 
 
  <div class="glass-container glass">
 
    <h2 style="font-size: 32px;"> Ask Your <spam style="color: #f93"> Question</span> </h2>
 
  <div class="input">
  <p id="chatLog"></p>
  
    <input type="text" id="userBox" onkeydown="if(event.keyCode == 13) { talk()}" placeholder="Type your Question" 
    list="my-chatbot" id="chatbot" name="chatbot" />
 
 <datalist id="my-chatbot">
     <option value="who are you">
     <option value="cs fees">
     <option value="mca fees">
     <option value="mba fees">
     <option value="bba fees">
     <option value="m.tech fees">
     <option value="b.tech fees">
     <option value="ai fees">
     <option value="civil fees">
     <option value="mechanical fees">
     <option value="e&c fees">
 </datalist>
  
   
   
 </div>
 
 </div>

<script src="//code.tidio.co/sdappuxo1tpwzporvf9giubyedri7c7x.js" async></script>

<script src="js/script.js"></script>
<Script>
  function talk(){  
   var know = {  
    "who are you" : "Chatbot, for your help",  
    "cs fees" : "100000/- only.",  
    "mca fees" : "30,985/- only.",  
    "mba fees" : " 28,000/- only",  
    "bba fees" : " 28,000/- only",  
    "m.tech fees" : "68,185/- only",  
    "b.tech fees" : "68,000/- only",  
    "ai fees" : "30,985/- & only",  
    "civil fees" : "28,000/- only",  
    "mechanical fees" : "28,000/- only",  
    "ok" : "Thank You So Much ",  
    "bye" : "Okay! Will meet soon.."  
   };  
   var user = document.getElementById('userBox').value;  
    document.getElementById('chatLog').innerHTML = user + "<br>";  
   if (user in know) {  
    document.getElementById('chatLog').innerHTML = know[user] + "<br>";  
   }
   else{  
    document.getElementById('chatLog').innerHTML = "Sorry,I didn't understand <br>";  
   }  
  }
</Script>
</body>
</html>
