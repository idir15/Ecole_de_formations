<style>
    .row{
    margin-left: 0;
    margin-right: 0;
    }
    </style>





<footer class="page-footer footer d-sm-block ">
      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">


        <!-- Grid row -->

        <div class="row col-12">

          <!-- Grid column -->

          <div class="col-12 col-sm-6 col-lg-3 col-xl-3 " style="margin-top:5%">



            <!-- Links -->
            <h5 class="text-uppercase "><strong>TORecruit</strong></h5>

            <ul class="list-unstyled text-light">
              <li>
                <a href="index.php">ACCUEIL</a>
              </li>
              <li>
                <a href="list_offre.php">OFFRES</a>
              </li>

              <li>
                <a href="#">A PROPOS</a>
              </li>
              <li>
                <a href="contact.php">CONTACT</a>
              </li>


            </ul>

          </div>

          <!-- Grid column -->

          <div class="col-12 col-sm-6 col-lg-3 col-xl-3  " style="margin-top:5%">



            <!-- Links -->
            <h5 class="text-uppercase"><strong>Nous Contacter</strong></h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">FAQS</a>

                <li>
                  <a href="#contact" data-toggle="modal"><strong></strong>NOUS CONTACTER</a>
                  <!--  MODAL -->
                  <div class="modal" id="contact">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 style="color: #365390" class="modal-title">Contactez Nous</h5>
                          <button class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <form id="form">
                            <div class="row">
                              <!-- First Name -->
                              <div class="input-group col-lg-6 mb-4">

                                <input id="firstName" type="text" name="firstname" placeholder="Nom" class="form-control bg-white  border-md" data-constraints="@Required @JustLetters">
                              </div>
                              <!-- Last Name -->
                              <div class="input-group col-lg-6 mb-4">

                                <input id="emailcontact" type="email" name="emailcontact" placeholder="Email" class="form-control bg-white  border-md" data-constraints="@Required @Email">
                              </div>
                            </div>
                            <textarea placeholder="Message:" class="form-control bg-white  border-md" data-constraints='@Required @Length(min=20,max=999999)'></textarea>


                            <div>

                            </form>
                          </div>
                          <div class="modal-footer">

                            <div class="btns">

                              <a href="#" data-type="submit" class="btn btn-primary">Envoyer</a>

                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a href="#!">RECLAMMATION</a>
                  </li>
                </ul>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-12 col-sm-6 col-lg-3 col-xl-3  " style="margin-top:5%">

                <!-- Links -->
                <h5 class="text-uppercase"><strong>Notre plateforme</strong> </h5>

                <ul class="list-unstyled">
                  <li>
                    <a href="#!">AIDE</a>
                  </li>
                  <li>
                    <a href="#!">PLAN DU SITE</a>
                  </li>
                  <li>
                    <a href="#!">INFORMATIONS LEGALES</a>
                  </li>
                  <li>
                    <a href="#!">POLITIQUE ET CONFIDENTIALITE</a>
                  </li>
                </ul>

              </div>
           <div class="col-12 col-sm-6 col-lg-3 col-xl-3  " style="margin-top:5%">
                <div >
                <div class="input-group">
                <input class="col-9 " type="email" name="mailf" placeholder="Votre e-mail"><button   type="button" class="col-2 btn btn-primary btn-sm">ok</button></div></div>
                <div class="mt-3"style="font-size: 14px">Nous suivre via :</div>
                <div><a href=""><img src="img/icon/fcb.png" alt=""></a>
                <a href=""><img src="img/icon/inst.png" alt=""></a>
                <a href=""><img src="img/icon/twit.png" alt=""></a>
                <a href=""><img src="img/icon/you.png" alt=""></a>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <hr class="bg-white " style="width:90% ">
        <div class="footer-copyright text-center py-3">© 2019-2020 Copyright M2-ISI.
      </div>


      <!-- Footer Links -->

      <!-- Copyright -->



      </div>
      <!-- Copyright -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </footer>
