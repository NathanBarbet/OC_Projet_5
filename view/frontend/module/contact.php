<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(public/img/intro-bg.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-mf">
          <div id="contact" class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="title-box-2">
                  <h5 class="title-left">
                    Envoyer un message
                  </h5>
                </div>
                <div>
                    <form action="sendcontact" method="post" enctype="application/x-www-form-urlencoded" name="formulaire">
                    <div id="errormessage"></div>
                    <div class="row">
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="nom" class="form-control" id="name" placeholder="Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                          <div class="validation"></div>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="email" class="form-control" name="mail" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                          <div class="validation"></div>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="objet" id="subject" placeholder="Objet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                          </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <textarea class="form-control" name="message" rows="5" data-rule="required" placeholder="Message"></textarea>
                          <div class="validation"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Envoyer</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="title-box-2 pt-4 pt-md-0">
                  <h5 class="title-left">
                    Informations
                  </h5>
                </div>
                <div class="more-info">
                  <p class="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                    expedita aperiam aliquid at.
                    Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                    mollitia inventore?
                  </p>
                  <ul class="list-ico">
                    <li><span class="ion-ios-location"></span> 28 allée du Mail, 92360, Meudon</li>
                    <li><span class="ion-ios-telephone"></span> 06.67.56.90.07</li>
                    <li><span class="ion-email"></span> nathan.barbet@hotmail.fr</li>
                  </ul>
                </div>
                <div class="socials">
                  <ul>
                    <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                    <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                    <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                    <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</section>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>
