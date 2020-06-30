    <?php include './header.php'; ?>
    <?php include './nav.php'; ?>
    <!--MAIN HEADER AREA END -->
    <!--MAIN BANNER AREA START -->
    <div class="page-banner-area grad-2" id="page-banner">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
            <div class="banner-content">
              <h1 class="text-white">Let's Connect with us</h1>
              <p>Have questions about our product?</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--MAIN HEADER AREA END -->
    <!--  Contact START  -->
    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-md-12">
            <div class="mb-5">
              <h2 class="mb-2">Get in touch</h2>
              <p>
                Have queries to join us?
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 col-sm-12">
            <form class="contact__form" method="post" id="contact_form">
              <!-- form message -->
              <div class="row">
                <div class="col-12">
                  <div class="alert alert-success contact__msg" style="display: none;" role="alert">
                    Your message was sent successfully.
                  </div>
                </div>
              </div>
              <!-- end message -->
              <div class="row">
                <div class="col-md-6 form-group">
                  <input name="name" type="text" class="form-control" placeholder="Name" required />
                </div>
                <div class="col-md-6 form-group">
                  <input
                    name="email"
                    type="email"
                    class="form-control"
                    placeholder="Email"
                    required
                  />
                </div>
                <div class="col-md-12 form-group">
                  <input
                    name="subject"
                    type="text"
                    class="form-control"
                    placeholder="Subject"
                    required
                  />
                </div>
                <div class="col-12 form-group">
                  <textarea
                    name="message"
                    class="form-control"
                    rows="6"
                    placeholder="Message"
                    required
                  ></textarea>
                </div>
                <div class="col-12 mt-4">
                  <input
                    name="submit"
                    type="submit"
                    class="btn btn-primary btn-circled"
                    value="Send Message"
                  />
                </div>
              </div>
            </form>
          </div>

          <div class="col-lg-5 pl-4 mt-4 mt-lg-0">
            <h4>Office Address</h4>
            <p class="mb-3">No.106, Royal Placid Layout, Harlur HSR Layout Phase 1, <br/> Bangalore, Karnataka, India. 562102</p>
            <h4>Contact Mail</h4>
            <p class="mb-3">worldtradehub.in@gmail.com</p>
            <h4>Website</h4>
            <p>https://worldtradehub.in</p>
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
