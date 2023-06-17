<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <title>Contact us - AITM website</title>
</head>
<body>

     <!-- header section starts  -->

     <header class="header">

      <a href="index.html" class="logo">
         <img src="Image/Angadilogo.jpg" alt="college logo" style="width: 85px; height: 80px; " /> 
         <div class="collage-name">Angadi Institute of Technology And Management</div></a>
   
         <nav class="navbar">
            <div id="close-navbar" class="close-icon"><img src="Image/close-icon.gif" width="50" /></div>

               <ul class="navbar-links">

              <li class="navbar-dropdown">
                <a href="#">course</a>
                <div class="dropdown"><ul>
                  <li><a href="#">Computer Department</a>
                     <ul class='dropdown2'>
                        <li><a style="font-size:20px">MCA</li>
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
                <a href="About-us.php" target ="_blank" >About us</a> </li>
		
		<li class="navbar-dropdown">
                <a href="admision-form.php" target ="_blank" >Gallery</a> </li>
                  
                <li class="navbar-dropdown">
                  <a href="Contact.php">Contact us</a> </li>

        </ul>
         </nav>
   
         <div id="menu-btn" class="header-icon"><img src="image/menu-icon.svg" alt="menu-icon" />
           <img src="image/menu-icon-hover.gif" alt="menu-icon" width="30" class="header-icon-hover" /></div>
      </div>
   
   </header>
  


    <!-- header section Ends  -->


    
   <section class="contact">
      <div class="content">
        
        <h2 style="font-size: 40px;"> Contact<span style="color: #fa8007"> Us</span> </h2>
        <p></p>
      </div>
      
      <div class="contact-container">
      <div class="contactInfo">
      <div class="box">
        <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
        <div class="text">
          <h3>Address</h3>
          <p>Angadi Institute of Teechnology And Management,Belgavi, Karnataka</p>
        </div>
      </div>
      
       <div class="box">
        <div class="icon"><i class="fa-solid fa-phone"></i></div>
        <div class="text">
          <h3>Phone Number</h3>
          <p>9955441125</p>
        </div>
      </div>
      
       <div class="box">
        <div class="icon"><i class="fa-solid fa-envelope"></i></div>
        <div class="text">
          <h3>Email Id</h3>
          <p>infoaitm@gmail.com</p>
        </div>
        </div>
      
     </div>
    
     <div class="contactForm">
       <form method="post" name="contact-us">
           <h2>Send Message</h2> <br>

         <div class="inputBox">
           <input type="text" name="Full Name" pattern="[A-z ]+" required="required">
             <span>Full Name</span>
         </div>
        
         <div class="inputBox">
           <input type="text" name="Email" required="required">
             <span>Email</span>
         </div>
        
         <div class="inputBox">
           <textarea required="required" name="Type your Message"></textarea>
             <span>Type your Message...</span>
         </div>
        
         <div class="inputBox">
           <input type="submit" name="submit" value="Send Message">
         </div>
       </form>
      
      </div>
     </div>
    </section>
<br>
   


<!-- footer section starts -->

<footer style="background:url(Image/Speedline-50s-1846px.svg)">
  <div class="content">
    <div class="top">
      <div class="logo-details">
        <span>Angadi Institute of Tehnology And Management</span>
      </div>
      <div class="media-icons">
        <a href="https://www.facebook.com/aitmbgm/" target="_blank"><i class="fab fa-facebook-f"></i></a>
      
        <a href="https://instagram.com/official._.him" target="_blank" ><i class="fab fa-instagram"></i></a>
       
        <a href="https://www.youtube.com/channel/UCAiB7U8VsxJ7fa00Mi3qN_g" target="_blank"><i class="fab fa-youtube"></i></a>
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
       <li><a href="fees-payment.php">FAQs</a></li>
       <li><a href="#">Events</a></li>
       
       
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
  const scriptURL = 'https://script.google.com/macros/s/AKfycbw5WYbxdJmexwK6jcsx7fLaOeDLVnmybnqqmeo12k5KnSCj88q2dKxeTXWT3lYA1Rc/exec'
  const form = document.forms['contact-us']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => alert("Thanks for contact us..! We Will Contact You Soon.."))
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

   
</script>
     
    
</body>
</html>