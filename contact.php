<?php include("header.php"); ?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10  mx-auto">
            <div class="page-heading">
              <h1>Contactez Nous</h1>
              <span class="subheading">Vous avez des questions? J'ai des réponses.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto" style="margin-top: 80px;">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Feptasilex%2F&tabs=timeline&width=500&height=400&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="350" height="400" style="border:solid;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
            <p>Voulez-vous entrer en contact? Remplissez le formulaire ci-dessous pour m'envoyer un message et je vous recontacterai dans les meilleurs délais!</p>
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Nom</label>
                  <input type="text" class="form-control" placeholder="Nom" id="Nom" required data-validation-required-message="Veuillez bien Entrer Votre Nom">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Addresse Email</label>
                  <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Numeros telr</label>
                  <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Message</label>
                  <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Envoyer</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    <hr>
<?php include("footer.php"); ?>