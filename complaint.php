<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complain Area - AITM website </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="favicon.png" type="image/png">
   
    
</head>

<body>

  
    <!-- header section starts  -->

    <header class="header">

      <a href="index.html" class="logo">
         <img src="Image/Angadilogo.jpg" alt="college logo" style="width: 80px; height: 55px; " /> 
         <div class="collage-name">Angadi Institute of Technology And Management</div></a>
   
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
                <a href="admision-form.php" target ="_blank" >Gallery</a> </li>
                  
                <li class="navbar-dropdown">
                  <a href="About-us.php">About Us</a> </li>

            <li class="navbar-dropdown">
                <a href="Contact.php">Contac Us</a> </li>
        </ul>
         </nav>
   
         <div id="menu-btn" class="header-icon"><img src="image/menu-icon.svg" alt="menu-icon" />
           <img src="image/menu-icon-hover.gif" alt="menu-icon" width="30" class="header-icon-hover" /></div>
      </div>
   
   </header>
  


    <!-- header section Ends  -->


<div style="background-image: linear-gradient(60deg, #000, transparent), url(../image/College2.jpg); background-size: cover; ">

  <section style="position: relative; padding: 80px;  min-height: 100vh; display: flex; justify-content: center; align-items: center; flex-direction: column;">
    
  <div class="contactForm" style="width: 600px; margin: auto;">

    <form method="post" name="complain-sheet" >
        <h2>Give Feedbacak...</h2> <br> <br>
        
      <div class="inputBox">
        <input type="text" name="Name" placeholder=" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;                           
                " required="required" pattern="[A-z ]+" >
          <span>Enter your name</span>
      </div>

        <div class="inputBox">
        <input type="email" name="Email" required="required" pattern="[A-z0-9, ]+" >
          <span>Enter your email</span>
      </div>
     
      <div class="inputBox">
        <input type="text" name="Subject" required="required" pattern="[A-z0-9, ]+" >
          <span>Subject</span>
      </div>
     

      <div class="inputBox">
        <textarea required="required==]" name="Feedback"></textarea>
          <span>Give your feedback...</span>
      </div>
     
      <div class="inputBox">
        <input type="submit" name="submit" value="Send">
      </div>
    </form>
   
   </div>
  </section>








</div>


<!-- footer section starts -->

<footer style="background:url(Image/Speedline-50s-1846px.svg)">
  <div class="content">
    <div class="top">
      <div class="logo-details">
        <span>Angadi Insitute of Technology And Management</span>
      </div>
      <div class="media-icons">
        <a href="https://www.facebook.com/him.sonepat/" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://directorhimsonepat@gmail.com/compose"><i class="fa-solid fa-envelope"></i></a>
        <a href="https://instagram.com/official._.him" target="_blank" ><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://www.youtube.com/watch?v=UFhMLlQCQ7k&ab_channel=FunkyTeens" target="_blank"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
    
    <div class="link-boxes">
      <ul class="box">
        <li class="link_name">About</li>
        <li><a href="Index.php">Home</a></li>
        <li><a href="contact.php">Contact us</a></li>
        <li><a href="About-us.php">About us</a></li>
      </ul>
      <ul class="box">
        <li class="link_name">Quick Links</li>
        <li><a href="admision-form.php">Gallery</a></li>
        <li><a href="#notice-board for student">Notice Board</a></li>
       
      </ul>
      <ul class="box">
       <li class="link_name">Student's Corner</li>
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


         
         

         <script src="js/script.js"></script>
         <script>
          const scriptURL = 'https://script.google.com/macros/s/AKfycbyslT6Ggp8sW_7y6JMYAcXR81ps9hqPUN9XVPrkgQxir8IfX9sSNusDtq-KvvCDpB0/exec'
          const form = document.forms['complain-sheet']
        
          form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
              .then(response => alert("Thanks for your complaint or feedback..! We Will try solve, as soon as possible....."))
              .catch(error => console.error('Error!', error.message))

                
      const inputs = [];  
      form.querySelectorAll("input").forEach((input) => {  
       const { name, value } = input;  
       inputs.push({ name, value });  
      });  
      console.log(inputs);  
      form.reset();  
              
          })

           
        </script>

         </body>
         </html>