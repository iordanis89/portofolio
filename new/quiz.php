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


   <?php

     include 'includes/dbh.inc.php';
     
     $query = mysqli_query($conn,"SELECT * FROM questions");
     $ans = array();
     $qs = array();

     while ($row = mysqli_fetch_array($query)) {
         
        $questions[] = array(
            'answers' => explode(',',$row['answers']),
            'correct' => $row['correct'],
            'question' => $row['text_question']
        );

    }


     ?>

     <?php foreach($questions as $q){ ?>

        <p><?= $q['question'] ?></p>
        <?php foreach($q['answers'] as $a) { ?>
        <span><?= $a ?></span><input type="radio" name="choice">
        <?php } ?>

     <?php } ?>
           
     




   

  
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