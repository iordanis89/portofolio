<?php
   
    $product = $_GET['p'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://use.fontawesome.com/afa0033372.js"></script>
    <title>Eshop</title>
</head>
<body>
    <div class="wrapper">


        <header>
            <!-- .upper-header + TAB -->
            <div class="upper-header">
               <h1>COLLECTIBLES</h1>
            </div>
            <div class="ebay-header">
              <button class="hamburger" id="hamburger">
                <i class="fa fa-bars"></i>

              </button>
                    <!-- ul > li*4 + TAB -->
                    <nav>
                    <ul class="nav-ul" id="nav-ul">
                        <li><a href="index.html">Αρχική</a></li>
                        <li><a href="about.html">Εταιρεία</a></li>
                        <li><a href="sale.php">Εκπτώσεις</a></li>
                        <li><a href="contact.html">Επικοινωνία</a></li>
                        </ul>
                    </nav>
            </div>
        </header>

            <div class="parent">  
            <?php if($product == 1) { ?>
      
                  <div class="item1">
                  <img src="images/nikerubber.jpg" class="image-shoes">
                  </div>
                  
                  <div class="item1">
                     <div class="inner-item">
                        <h1 class="title">NIKE AIR FORCE ONE LIMITED</h1>
                        <p class="price-tag">160 &euro;</p>
                        <br>
                        <h3>ΕΠΙΛΕΞΤΕ ΜΕΓΕΘΟΣ</h3>
                        <select id="size">
                           <option>ΕΠΙΛΕΞΕ</option>
                           <option>38</option>
                           <option>39</option>
                           <option>40</option>
                           <option>41</option>
                           <option>42</option>
                           <option>43</option>
                           <option>44</option>
                           <option>45</option>
                           <option>46</option>
                           <option>47</option>
                           <option>48</option>
                        </select>
                        <a href="checkout.php?p=1">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ &nbsp; <i class='fas fa-tag'></i></a>
                        <h3 class="epistrofh">Δωρεάν επιστροφή για 45 μέρες</h3>
                        <h3 class="metaforika">Μεταφορικά δωρεάν</h3>
                     </div>
                  </div>
                  <?php } ?>

             </div>


             <div id="xaraxtiristika" class="parent">
                <div class="item4">
                   <h3>ΠΕΡΙΓΡΑΦΗ</h3>
                   <h2>Υλικό</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique neque, veniam iste placeat quaerat illum! Perferendis maiores 
                      dignissimos porro delectus ducimus repellendus quidem ratione architecto possimus, laborum animi odit debitis inventore! Facere, quibusdam. 
                      Provide</p>
                </div>
                <div class="item4">
                   <h3>ΔΩΡΕΑΝ ΕΠΙΣΤΡΟΦΗ ΚΑΙ ΑΛΛΑΓΗ</h3>
                   <h2>Eπιστροφές</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique neque, veniam iste placeat quaerat illum! Perferendis maiores 
                      dignissimos porro delectus ducimus repellendus quidem ratione architecto possimus, laborum animi odit debitis inventore! Facere, quibusdam. 
                      Provident quibusdam quas sit dolor veniam itaque ea, magni cumque, saepe tenetur vitae dolore totam nam inventore?</p>
                </div>
             </div>


             <div class="parent">        
               <?php if($product == 2) { ?>
                  <div class="item1">
                  <img src="images/adidas.jpg" class="image-shoes">
                  </div>
                  
                  <div class="item1">
                     <div class="inner-item">
                        <h1 class="title">ADIDAS LIMITED</h1>
                        <p class="price-tag">345 &euro;</p>
                        <br>
                        <h3>ΕΠΙΛΕΞΤΕ ΜΕΓΕΘΟΣ</h3>
                        <select id="size">
                           <option>ΕΠΙΛΕΞΕ</option>
                           <option>38</option>
                           <option>39</option>
                           <option>40</option>
                           <option>41</option>
                           <option>42</option>
                           <option>43</option>
                           <option>44</option>
                           <option>45</option>
                           <option>46</option>
                           <option>47</option>
                           <option>48</option>
                        </select>
                        <a href="checkout.php?p=2">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ &nbsp; <i class='fas fa-tag'></i></a>
                  
                        <h3 class="epistrofh">Δωρεάν επιστροφή για 45 μέρες</h3>
                        <h3 class="metaforika">Μεταφορικά δωρεάν</h3>
                     </div>
                  </div>
               <?php } ?>
             </div>

             <div class="parent">        
               <?php if($product == 3) { ?>
                  <div class="item1">
                  <img src="images/nikebas.jpg" class="image-shoes">
                  </div>
                  
                  <div class="item1">
                     <div class="inner-item">
                        <h1 class="title">NIKE LEBRON JAMES</h1>
                        <p class="price-tag">290 &euro;</p>
                        <br>
                        <h3>ΕΠΙΛΕΞΤΕ ΜΕΓΕΘΟΣ</h3>
                        <select id="size">
                           <option>ΕΠΙΛΕΞΕ</option>
                           <option>38</option>
                           <option>39</option>
                           <option>40</option>
                           <option>41</option>
                           <option>42</option>
                           <option>43</option>
                           <option>44</option>
                           <option>45</option>
                           <option>46</option>
                           <option>47</option>
                           <option>48</option>
                        </select>
                        <a href="checkout.php">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ &nbsp; <i class='fas fa-tag'></i></a>
                  
                        <h3 class="epistrofh">Δωρεάν επιστροφή για 45 μέρες</h3>
                        <h3 class="metaforika">Μεταφορικά δωρεάν</h3>
                     </div>
                  </div>
               <?php } ?>
             </div>

             <div class="parent">        
               <?php if($product == 4) { ?>
                  <div class="item1">
                  <img src="images/adidasss.jpg" class="image-shoes">
                  </div>
                  
                  <div class="item1">
                     <div class="inner-item">
                        <h1 class="title">ADIDAS ULTRA BOOST</h1>
                        <p class="price-tag">190 &euro;</p>
                        <br>
                        <h3>ΕΠΙΛΕΞΤΕ ΜΕΓΕΘΟΣ</h3>
                        <select id="size">
                           <option>ΕΠΙΛΕΞΕ</option>
                           <option>38</option>
                           <option>39</option>
                           <option>40</option>
                           <option>41</option>
                           <option>42</option>
                           <option>43</option>
                           <option>44</option>
                           <option>45</option>
                           <option>46</option>
                           <option>47</option>
                           <option>48</option>
                        </select>
                        <a href="checkout.php">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ &nbsp; <i class='fas fa-tag'></i></a>
                  
                        <h3 class="epistrofh">Δωρεάν επιστροφή για 45 μέρες</h3>
                        <h3 class="metaforika">Μεταφορικά δωρεάν</h3>
                     </div>
                  </div>
               <?php } ?>
             </div>

             <div class="parent">        
               <?php if($product == 5) { ?>
                  <div class="item1">
                  <img src="images/reebok.jpg" class="image-shoes">
                  </div>
                  
                  <div class="item1">
                     <div class="inner-item">
                        <h1 class="title">REEBOK LIMITED</h1>
                        <p class="price-tag">260 &euro;</p>
                        <br>
                        <h3>ΕΠΙΛΕΞΤΕ ΜΕΓΕΘΟΣ</h3>
                        <select id="size">
                           <option>ΕΠΙΛΕΞΕ</option>
                           <option>38</option>
                           <option>39</option>
                           <option>40</option>
                           <option>41</option>
                           <option>42</option>
                           <option>43</option>
                           <option>44</option>
                           <option>45</option>
                           <option>46</option>
                           <option>47</option>
                           <option>48</option>
                        </select>
                        <a href="checkout.php">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ &nbsp; <i class='fas fa-tag'></i></a>
                  
                        <h3 class="epistrofh">Δωρεάν επιστροφή για 45 μέρες</h3>
                        <h3 class="metaforika">Μεταφορικά δωρεάν</h3>
                     </div>
                  </div>
               <?php } ?>
             </div>

             <div class="parent">        
               <?php if($product == 6) { ?>
                  <div class="item1">
                  <img src="images/white.jpg" class="image-shoes">
                  </div>
                  
                  <div class="item1">
                     <div class="inner-item">
                        <h1 class="title">NIKE SPEED LIMITED</h1>
                        <p class="price-tag">120 &euro;</p>
                        <br>
                        <h3>ΕΠΙΛΕΞΤΕ ΜΕΓΕΘΟΣ</h3>
                        <select id="size">
                           <option>ΕΠΙΛΕΞΕ</option>
                           <option>38</option>
                           <option>39</option>
                           <option>40</option>
                           <option>41</option>
                           <option>42</option>
                           <option>43</option>
                           <option>44</option>
                           <option>45</option>
                           <option>46</option>
                           <option>47</option>
                           <option>48</option>
                        </select>
                        <a href="checkout.php">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ &nbsp; <i class='fas fa-tag'></i></a>
                  
                        <h3 class="epistrofh">Δωρεάν επιστροφή για 45 μέρες</h3>
                        <h3 class="metaforika">Μεταφορικά δωρεάν</h3>
                     </div>
                  </div>
               <?php } ?>
             </div>

             <div class="parent">        
               <?php if($product == 7) { ?>
                  <div class="item1">
                  <img src="images/nike.jpg" class="image-shoes">
                  </div>
                  
                  <div class="item1">
                     <div class="inner-item">
                        <h1 class="title">NIKE AIR FORCE ONE LIMITED</h1>
                        <p class="price-tag">490 &euro;</p>
                        <br>
                        <h3>ΕΠΙΛΕΞΤΕ ΜΕΓΕΘΟΣ</h3>
                        <select id="size">
                           <option>ΕΠΙΛΕΞΕ</option>
                           <option>38</option>
                           <option>39</option>
                           <option>40</option>
                           <option>41</option>
                           <option>42</option>
                           <option>43</option>
                           <option>44</option>
                           <option>45</option>
                           <option>46</option>
                           <option>47</option>
                           <option>48</option>
                        </select>
                        <a href="checkout.php">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ &nbsp; <i class='fas fa-tag'></i></a>
                  
                        <h3 class="epistrofh">Δωρεάν επιστροφή για 45 μέρες</h3>
                        <h3 class="metaforika">Μεταφορικά δωρεάν</h3>
                     </div>
                  </div>
               <?php } ?>
             </div>

             <div class="parent">        
               <?php if($product == 8) { ?>
                  <div class="item1">
                  <img src="images/nike2.jpg" class="image-shoes">
                  </div>
                  
                  <div class="item1">
                     <div class="inner-item">
                        <h1 class="title">NIKE AIR FORCE</h1>
                        <p class="price-tag">190 &euro;</p>
                        <br>
                        <h3>ΕΠΙΛΕΞΤΕ ΜΕΓΕΘΟΣ</h3>
                        <select id="size">
                           <option>ΕΠΙΛΕΞΕ</option>
                           <option>38</option>
                           <option>39</option>
                           <option>40</option>
                           <option>41</option>
                           <option>42</option>
                           <option>43</option>
                           <option>44</option>
                           <option>45</option>
                           <option>46</option>
                           <option>47</option>
                           <option>48</option>
                        </select>
                        <a href="checkout.php">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ &nbsp; <i class='fas fa-tag'></i></a>
                  
                        <h3 class="epistrofh">Δωρεάν επιστροφή για 45 μέρες</h3>
                        <h3 class="metaforika">Μεταφορικά δωρεάν</h3>
                     </div>
                  </div>
               <?php } ?>
             </div>

             <div class="parent">        
               <?php if($product == 9) { ?>
                  <div class="item1">
                  <img src="images/adidas2.jpg" class="image-shoes">
                  </div>
                  
                  <div class="item1">
                     <div class="inner-item">
                        <h1 class="title">NIKE AIR FORCE ONE LIMITED</h1>
                        <p class="price-tag">370 &euro;</p>
                        <br>
                        <h3>ΕΠΙΛΕΞΤΕ ΜΕΓΕΘΟΣ</h3>
                        <select id="size">
                           <option>ΕΠΙΛΕΞΕ</option>
                           <option>38</option>
                           <option>39</option>
                           <option>40</option>
                           <option>41</option>
                           <option>42</option>
                           <option>43</option>
                           <option>44</option>
                           <option>45</option>
                           <option>46</option>
                           <option>47</option>
                           <option>48</option>
                        </select>
                        <a href="checkout.php">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ &nbsp; <i class='fas fa-tag'></i></a>
                  
                        <h3 class="epistrofh">Δωρεάν επιστροφή για 45 μέρες</h3>
                        <h3 class="metaforika">Μεταφορικά δωρεάν</h3>
                     </div>
                  </div>
               <?php } ?>
             </div>

             <div class="parent">        
               <?php if($product == 10) { ?>
                  <div class="item1">
                  <img src="images/adidasstar.jpg" class="image-shoes">
                  </div>
                  
                  <div class="item1">
                     <div class="inner-item">
                        <h1 class="title">ADIDAS STAR WARS</h1>
                        <p class="price-tag">440 &euro;</p>
                        <br>
                        <h3>ΕΠΙΛΕΞΤΕ ΜΕΓΕΘΟΣ</h3>
                        <select id="size">
                           <option>ΕΠΙΛΕΞΕ</option>
                           <option>38</option>
                           <option>39</option>
                           <option>40</option>
                           <option>41</option>
                           <option>42</option>
                           <option>43</option>
                           <option>44</option>
                           <option>45</option>
                           <option>46</option>
                           <option>47</option>
                           <option>48</option>
                        </select>
                        <a href="checkout.php">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ &nbsp; <i class='fas fa-tag'></i></a>
                  
                        <h3 class="epistrofh">Δωρεάν επιστροφή για 45 μέρες</h3>
                        <h3 class="metaforika">Μεταφορικά δωρεάν</h3>
                     </div>
                  </div>
               <?php } ?>
             </div>

             <div class="parent">        
               <?php if($product == 11) { ?>
                  <div class="item1">
                  <img src="images/adidasyee.jpg" class="image-shoes">
                  </div>
                  
                  <div class="item1">
                     <div class="inner-item">
                        <h1 class="title">ADIDAS YEEZY</h1>
                        <p class="price-tag">350 &euro;</p>
                        <br>
                        <h3>ΕΠΙΛΕΞΤΕ ΜΕΓΕΘΟΣ</h3>
                        <select id="size">
                           <option>ΕΠΙΛΕΞΕ</option>
                           <option>38</option>
                           <option>39</option>
                           <option>40</option>
                           <option>41</option>
                           <option>42</option>
                           <option>43</option>
                           <option>44</option>
                           <option>45</option>
                           <option>46</option>
                           <option>47</option>
                           <option>48</option>
                        </select>
                        <a href="checkout.php">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ &nbsp; <i class='fas fa-tag'></i></a>
                  
                        <h3 class="epistrofh">Δωρεάν επιστροφή για 45 μέρες</h3>
                        <h3 class="metaforika">Μεταφορικά δωρεάν</h3>
                     </div>
                  </div>
               <?php } ?>
             </div>

             <div class="parent">        
               <?php if($product == 12) { ?>
                  <div class="item1">
                  <img src="images/nikehallo.jpg" class="image-shoes">
                  </div>
                  
                  <div class="item1">
                     <div class="inner-item">
                        <h1 class="title">NIKE MILLENIUM HALLOWEEN EDITION</h1>
                        <p class="price-tag">290 &euro;</p>
                        <br>
                        <h3>ΕΠΙΛΕΞΤΕ ΜΕΓΕΘΟΣ</h3>
                        <select id="size">
                           <option>ΕΠΙΛΕΞΕ</option>
                           <option>38</option>
                           <option>39</option>
                           <option>40</option>
                           <option>41</option>
                           <option>42</option>
                           <option>43</option>
                           <option>44</option>
                           <option>45</option>
                           <option>46</option>
                           <option>47</option>
                           <option>48</option>
                        </select>
                        <a href="checkout.php">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ &nbsp; <i class='fas fa-tag'></i></a>
                  
                        <h3 class="epistrofh">Δωρεάν επιστροφή για 45 μέρες</h3>
                        <h3 class="metaforika">Μεταφορικά δωρεάν</h3>
                     </div>
                  </div>
               <?php } ?>
             </div>

            </div>




         </div>
    
         <script src="javascript/myscript.js"></script>

</body>
</html>