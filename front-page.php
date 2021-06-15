<?php
/*    STARTSEITE

  *   TODO: Startseite nach Design umsetzen
  *   TODO: ACF einbinden
  *   TODO: AOS-Animationen erstellen
  *   TODO: Alle Inhalte für mobile Endgeräte optimieren
  *   TODO: Bereiche wie im Beispiel umsetzen
  *   TODO: Bei Bedarf ist die Bootstrap-Integration in der header.php und footer.php auskommentiert
  *   TODO: Die "screenshot.png" muss ausgetauscht werden
  *   TODO: Weitere Änderungen die Fallspezifisch sind Asana zu entnehmen

*/
get_header(); ?>

<section id="header">
  <div class="header" style="background:url('https://images.pexels.com/photos/861339/pexels-photo-861339.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); background-size: cover; background-position: center;">
   <div class="content">
     <h1>Capture <br>Tanzania</h1>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing <br> elit. Aliquid eveniet eligendi debit</p>
     <div class="button"> <p> Explore >></p></div>
   </div>
  </div>
</section>

<section id="fusce">
  <div class="fusce">
    <div class="content">
      <h3>Fusce Dapibus</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing <br> elit. Aliquam ipsam rem magnam maiores ea adipisci porro. </p>
      <div class="arrow">
        <div class="left"><</div>
        <div class="right"> ></div>
      </div>
    </div>
    <div class="slider">
      <div class="pic">
        <p>Offer 1</p>
      </div>
      <div class="pic">
        <p>Offer 2</p>
      </div>
      <div class="pic">
        <p>Offer 3</p>
      </div>
      <div class="pic">
        <p>Offer 4</p>
      </div>
      <div class="pic">
        <p>Offer 5</p>
      </div>
    </div>
    </div>
  </div>
</section>

<section id="offers">
  <div class="offers" style="background:url('https://images.pexels.com/photos/1631678/pexels-photo-1631678.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); background-size: cover; background-position: center;">
    <div class="content">
      <div class="pic">
        <img src="https://images.pexels.com/photos/5616179/pexels-photo-5616179.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
      </div>
      <div class="box">
        <h3>Offer 1</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod necessitatibus quia doloremque fugit, laudantium ab ut cum nam quasi quibusdam pariatur</p>
        <div class="galerie"></div>
        <div class="explore">
          <p>Explore</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="card">
  <div class="card">
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2027074.6637273799!2d33.44313833727626!3d-7.11090633319927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184b51314869a111%3A0x885a17314bc1c430!2sTansania!5e0!3m2!1sde!2sde!4v1623783016161!5m2!1sde!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
    </div>
    <div class="content">
      <h3>BE ADVENTUROUS</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem ut facere, molestias recusandae repudiandae officiis aspernatur non </p>
    </div>
  </div>
</section>




<?php
include 'sections/section.php';
?>

<section id="card">
  <div class="card">
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2027074.6637273799!2d33.44313833727626!3d-7.11090633319927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184b51314869a111%3A0x885a17314bc1c430!2sTansania!5e0!3m2!1sde!2sde!4v1623783016161!5m2!1sde!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
    </div>
  </div>
</section>

<?php get_footer(); ?>
