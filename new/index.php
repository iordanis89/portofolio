<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="design.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 </head>
 <body>

 
  
   <nav id="mynav" class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
     <div class="container-fluid">
    <button  class="navbar-toggler" data-toggle="collapse" data-target="#collapse-target">
      <span class="navbar-toggler-icon"></span>
    </button>
       <a class="navbar-brand"><img src="images/logo.png"></a> 
     <div class="collapse navbar-collapse" id="collapse-target">
       <ul id="menu" class="navbar-nav ml-auto">
         <li class="nav-item">
            <a class="nav-link" href="index.php">Αρχική</a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="index.php#paixnidi">Το παιχνίδι</a>
         </li>
         <li class="nav-item">
         <a class="nav-link" href="index.php#kathgoriesh">Κατηγορίες</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Επικοινωνία</a>
         </li>
       </ul>
         <ul id="enter" class="navbar-nav ml-auto">
              <li><a href="login.php">Είσοδος</a></li>
              <li><a href="signup.php" class="buttonn">Εγγραφή</a></li>
            </ul>
            </div>
            </div>
   </nav>

   <div class="container-fluid text-center">
     <div class="row">
      <div class="col-sm-2"></div>
    <div id="kalos" class="col-xs-1 col-sm-4 col-lg-2">
          <h1>Καλώς ήρθες</h1> 
       <p>Ξεκίνα εδώ</p> 
      </div>
    <div id="shma" class="col-sm-6">
    <img src="images/main.png" class="img-fluid" alt="Image">
    </div>
    </div>
  </div>

  <div id="paixnidi" class="container-fluid bg-3 text-center main-text">  
    <h3>To παιχνίδι</h3>
      <br>
      <p>Στο Quiz Journey θα βρείς μια πληθόρα ερωτήσεων</p>
      <p>για να τεστάρεις τις γνώσεις σου σε 6 διαφορετικά πεδία
      <br>
      <br>
      <p>Όταν επιλέξεις κατηγορία</p>
      <p>θα απαντήσεις σε ένα σέτ ερωτήσεων</p>
      <p>με πολλαπλές επιλογές</p>
      <p>μέσα σε ένα χρονικό όριο.</p> 
      <br>
      <p>Eνδιάμεσα θα μπορέσεις να χρησιμοποιήσεις κάποιες βοήθειες</p>
      <p>και στο τέλος μπορείς να δείς το τελικό σου σκόρ!</p>
      <br>
      <p>Για περισσότερες πληροφορίες για τις κατηγορίες</p>
      <p>και τις βοήθειες στην διαθεσή σου, δες τη σελίδα των κανόνων</p>
      <br>
      <p>Επίλεξε κατηγορία,</p>
      <p>απάντα στις ερωτήσεις,</p>
      <p>και συγκρινέ το σκόρ με φίλους!</p>
  </div>

  <div id="kathgoriesh" class="container-fluid bg-3 text-center bottom_images categories">    
    <p>Κατηγορίες</p>
    <div id="kathgories" class="row">
      <div class="col-sm-4">
        <img src="images/Categ_1.png" class="img-fluid" alt="Image">
      </div>
      <div class="col-sm-4"> 
        <img src="images/Categ_2.png" class="img-fluid" alt="Image">
      </div>
      <div class="col-sm-4"> 
        <img src="images/Categ_3.png" class="img-fluid" alt="Image">
      </div>
      <div class="col-sm-4"> 
        <img src="images/Categ_4.png" class="img-fluid"  alt="Image">
      </div>    
      <div class="col-sm-4"> 
        <img src="images/Categ_5.png" class="img-fluid"  alt="Image">
      </div>   
       <div class="col-sm-4"> 
        <img src="images/Categ_6.png" class="img-fluid" alt="Image">
      </div>
    </div>
  </div>



      
  
   <!--footer-->
   <div id="footerr" class="fixed">
    <div class="container-fluid text-center">
    <div class="row">
   <div class="col-sm-1 col-xs-1">
     <img src="images/logo.png" class="img-fluid" alt="Image">
     <p>The designsters</p></div>    
         <div class="col-sm-2 col-6">
           <p>stay tuned</p>
           <a href="http://www.facebook.com">
           <img src="images/facebook.png" class="img-fluid" style="width:20%"  alt="Image">
           </a>
           <a href="http://www.instagram.com">
             <img src="images/insta.png" class="img-fluid" style="width:20%" alt="Image">
             </a>
             <a href="http://www.twitter.com">
             <img src="images/twitter.png" class="img-fluid" style="width:20%" alt="Image">
             </a>
           </div>
       <div class="col-sm-3 col-6">
         <p>Subscribe</p>
         <input type="text" placeholder="Email address" name="mail" required><input type="image"  alt="Submit">
           </div>
           <div class="col-sm-1 col-6">
             <p>Useful   links</p></div>
             <div class="col-sm-1 col-6">
               <p>FAQ</p>
             </div>
               <div class="col-sm-1 col-6">
                 <p>Terms of service<p>
                 </div>
                 <div class="col-sm-1 col-6">
                   <p>Bussiness contact</p>
                 </div>
                 <div class="col-sm-1 col-3">
                 </div>
                 </div>
          </footer>

</body>
</html>