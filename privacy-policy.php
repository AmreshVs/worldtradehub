<?php include './header.php'; ?>
    <?php include './nav.php'; ?>

    <div class="page-banner-area grad-2" id="content-banner"></div>

    <section class="section-padding pt-5 privacy">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-md-12">
            <div class="mb-5">
              <h2 class="mb-2">Privacy Policy</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p>Your privacy is important to us. It is Jaguar Media and Entertainment LLP's policy to respect your privacy regarding any information we may collect from you across our website, <a href="https://worldtradehub.in">https://worldtradehub.in</a>, and other sites we own and operate.</p>
            <p>We only ask for personal information when we truly need it to provide a service to you. We collect it by fair and lawful means, with your knowledge and consent. We also let you know why we’re collecting it and how it will be used.</p>
            <p>We only retain collected information for as long as necessary to provide you with your requested service. What data we store, we’ll protect within commercially acceptable means to prevent loss and theft, as well as unauthorized access, disclosure, copying, use or modification.</p>
            <p>We don’t share any personally identifying information publicly or with third-parties, except when required to by law.</p>
            <p>Our website may link to external sites that are not operated by us. Please be aware that we have no control over the content and practices of these sites, and cannot accept responsibility or liability for their respective privacy policies.</p>
            <p>You are free to refuse our request for your personal information, with the understanding that we may be unable to provide you with some of your desired services.</p>
            <p>Your continued use of our website will be regarded as acceptance of our practices around privacy and personal information. If you have any questions about how we handle user data and personal information, feel free to contact us.</p>
            <p>This policy is effective as of 1 July 2020.</p>
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
