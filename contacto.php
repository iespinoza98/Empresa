

        <?php include ('header.php'); ?>
    
        
        <!-- Page Banner Start -->
        <section class="page-banner bgs-cover overlay pt-50" style="background-image: url(assets/images/banner.jpg);">
            <div class="container">
                <div class="banner-inner">
                    <h1 class="page-title">Contáctanos</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">InnovatecTI</a></li>
                            <li class="breadcrumb-item active">Contacto</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
           
        
        <!-- Contact Section Start -->
        <section class="contact-page py-120 rpy-100">
            <div class="container">
               <div class="contact-info-area mb-80">
                    <div class="contact-info-item wow fadeInUp delay-0-4s">
                       <i class="far fa-envelope"></i>
                       <p><a href="mailto:contacto@innovaproyect.com">contacto@innovaproyect.com</a></p>
                    </div>
                    <div class="contact-info-item wow fadeInUp delay-0-2s">
                       <i class="far fa-map"></i>
                       <p>Av La Encalada, Santiago de Surco, Lima 15023, Perú</p>
                    </div>
                   
                    <div class="contact-info-item wow fadeInUp delay-0-6s">
                       <i class="fas fa-phone-alt"></i><br>
                       <p><a href="https://api.whatsapp.com/send?phone=51994236249" target="_blank">+51 994236249</a></p>
                    </div>
               </div>
               <div class="row">
                   <div class="col-lg-4">
                       <div class="contact-form-left bgs-cover h-100 wow fadeInLeft delay-0-2s" style="background-image: url(assets/images/contact/contact-page.jpg)">
                           <h2>Deja Un Mensaje</h2>
                       </div>
                   </div>
                   <div class="col-lg-8">
                       <div class="contact-form ml-40 rml-0 rmt-55 wow fadeInRight delay-0-2s">
                           <h3 class="comment-title mb-35">Enviar un mensaje</h3>
                           <p>Comunícate con nosotros completando los siguientes datos para que un asesor se comunique contigo lo mas pronto posible.</p>
                           <form id="contact-form" class="comment-form mt-35" name="comment-form" action="#" method="post">
                                <div class="row clearfix justify-content-center">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           <label for="name"><i class="far fa-user"></i></label>
                                            <input type="text" id="name" name="name" class="form-control" value="" placeholder="Nombre Completo" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           <label for="email"><i class="far fa-envelope"></i></label>
                                            <input type="email" id="email" name="email" class="form-control" value="" placeholder="Correo Electrónico" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                           <label for="comments"><i class="fas fa-pencil-alt"></i></label>
                                            <textarea name="comments" id="comments" class="form-control" rows="4" placeholder="Escribe tu mensaje" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn">Enviar Mensaje</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                       </div>
                   </div>
               </div>
            </div>
        </section>
        <!-- Contact Section End -->
        
        
         <!--======== Map =========-->
        <div class="contact-page-map">
           <div class="our-location">
                <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Av%20La%20Encalada%20Santiago%20de%20Surco%2015023+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" height="650" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <!--======== Map =========-->
        
    </div>
    <!--End pagewrapper-->
   <?php include ('footer.php'); ?>
