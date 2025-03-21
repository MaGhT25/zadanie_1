     <?php
     require('partials/header.php');
     ?>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="index.php#top" class="smoothScroll">Home</a></li>
                         <li><a href="index.php#about" class="smoothScroll">About Us</a></li>
                         <li><a href="index.php#team" class="smoothScroll">Our Staff</a></li>
                         <li><a href="index.php#news" class="smoothScroll">News</a></li>
                         <li><a href="index.php#google-map" class="smoothScroll">Contact</a></li>
                         <li class="appointment-btn"><a href="index.html#appointment">Make an appointment</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- NEWS DETAIL -->
     <section id="news-detail" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-8 col-sm-7">
                         <!-- NEWS THUMB -->
                         <div class="news-detail-thumb">
                              <div class="news-image">
                                   <img src="images/news-image3.jpg" class="img-responsive" alt="">
                              </div>
                              <h3>Review Annual Medical Research</h3>
                              <p>Aenean molestie porttitor lorem sed semper. Aliquam semper iaculis libero, eu finibus ex euismod at. In molestie justo ut egestas porttitor. Phasellus interdum erat eu lectus condimentum euismod. Sed pellentesque fringilla diam vitae congue. Ut rutrum diam nisi, in maximus felis vulputate vitae.</p>
                              <blockquote>Vestibulum gravida rutrum est non volutpat. Morbi imperdiet odio ut tempor vestibulum. Mauris tincidunt vehicula nibh, sodales vehicula erat imperdiet ut.</blockquote>
                              <p>Maecenas eu lorem gravida nisi aliquam porta. Etiam eu tellus enim. Vivamus ligula ex, iaculis a sodales et, placerat eget neque. In porttitor tortor in purus commodo lobortis. Nullam ornare quam ac turpis luctus, commodo facilisis nisi venenatis. Cras a posuere risus.</p>
                              
                              <ul>
                                   <li>Phasellus posuere nisi eleifend, vestibulum ipsum eleifend</li>
                                   <li>Nulla sapien neque, posuere vitae porta eu</li>
                                   <li>Fusce quis enim vel libero pulvinar gravida sed eu justo</li>
                              </ul>

                              <p>Nunc eget ex sed nisl rhoncus lacinia. Vestibulum porta lectus at est placerat, nec commodo purus dignissim. Suspendisse ac quam in metus laoreet auctor ac quis enim.</p>
                              <div class="news-social-share">
                                   <h4>Share this article</h4>
                                        <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i>Facebook</a>
                                        <a href="#" class="btn btn-success"><i class="fa fa-twitter"></i>Twitter</a>
                                        <a href="#" class="btn btn-danger"><i class="fa fa-google-plus"></i>Google+</a>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-5">
                         <div class="news-sidebar">
                              <div class="news-author">
                                   <h4>About the author</h4>
                                   <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque.</p>
                              </div>

                              <div class="recent-post">
                                   <h4>Recent Posts</h4>

                                        <div class="media">
                                             <div class="media-object pull-left">
                                                  <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                             </div>
                                             <div class="media-body">
                                                  <h4 class="media-heading"><a href="#">Introducing a new healing process</a></h4>
                                             </div>
                                        </div>

                                        <div class="media">
                                             <div class="media-object pull-left">
                                                  <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                             </div>
                                             <div class="media-body">
                                                  <h4 class="media-heading"><a href="#">About Amazing Technology</a></h4>
                                             </div>
                                        </div>
                              </div>

                              <div class="news-categories">
                                   <h4>Categories</h4>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Dental</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Cardiology</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Health</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Consultant</a></li>
                              </div>

                              <div class="news-ads sidebar-ads">
                                   <h4>Sidebar Banner Ad</h4>
                              </div>

                              <div class="news-tags">
                                   <h4>Tags</h4>
                                        <li><a href="#">Pregnancy</a></li>
                                        <li><a href="#">Health</a></li>
                                        <li><a href="#">Consultant</a></li>
                                        <li><a href="#">Medical</a></li>
                                        <li><a href="#">Doctors</a></li>
                                        <li><a href="#">Social</a></li>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>
         


     <?php
     include('partials/footer.php');
     ?>