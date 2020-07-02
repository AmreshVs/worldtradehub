<?php include './header.php'; ?>
    <?php include './nav.php'; ?>

    <div class="page-banner-area grad-2" id="content-banner"></div>

    <section class="section-padding pt-5 privacy">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-md-12">
            <div class="mb-5">
              <h2 class="mb-2">About Us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p>World Trade Hub is a new concept which is focusing mainly to connect business people to showcase their products online and improve their sales by connecting new people across india. jaguar eventz company has arranged many events and organized good number of stalls and exhibitions in bangalore. due to covid situation, whole market is down and people hesitate to gather at a common point. this kind of situation affected many business people and ideas to expose their product and market it. jaguar eventz had come up with a unique ideology of e - exhibition, where all business people exhibit their products online and visitors can experience internet based exhibition, the concept is introduced in india for the first time by an indian based company.motto of the team is to connecting business owners and buyers for better growth of businesses and hence of world trade hub as well</p>
          </div>
        </div>
      </div>
    </section>
    
    <?php include './footer.php'; ?>
    <script>
      $('#contact_form').on('submit', function(e){
        e.preventDefault();
        var values = $(this).serialize();
        $.ajax({
          url: './mail.php?' + values,
          method: 'POST',
        })
        .success(function(data) {
          alert(data);
        })
        .error(function(error) {
          alert(error);
        })
      });
    </script>
  </body>
</html>
