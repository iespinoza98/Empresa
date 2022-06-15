<?php include ('header.php'); ?>

        
        <!-- Page Banner Start -->
        <section class="page-banner bgs-cover overlay pt-50" style="background-image: url(assets/images/banner2.jpg);">
            <div class="container">
                <div class="banner-inner">
                    <h1 class="page-title">Servicios</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Innovatec TI</a></li>
                            <li class="breadcrumb-item active">Servicios</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Service Details Start -->
        <section class="service-details pt-120 rpt-100 pb-100 rpb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-sidebar rmb-55 wow fadeInLeft delay-0-2s">
                           <div class="widget widget-services">
                               <ul>
                                   <li name="dservicio" class="active"><a name="sDesarrollo" onclick="viewDetail(this)">Páginas Web</a></li>
                                   <li name="dservicio"><a name="sTienda" onclick="viewDetail(this)">Tiendas Online</a></li>
                                   <li name="dservicio"><a name="sFacElectronica" onclick="viewDetail(this)">Facturación Electrónica</a></li>
                                   <li name="dservicio"><a name="sSistemas" onclick="viewDetail(this)">Sistemas Web</a></li>
                                </ul>
                           </div>
                            <div class="widget contact-info-widget contact-image-number style-two bgs-cover overlay" style="background-image: url(assets/images/contact/contact-page.jpg);">
                               <div class="contact-informations text-white">
                                    <h3>No dude en contactarnos</h3>
                                    <ul class="contact-info">
                                        <li>
                                            <i class="fas fa-phone-alt"></i>
                                            <div class="content">
                                                <span>Llamanos</span>
                                                <h5><a href="callto:+51928986980">+51 928986980</a></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fas fa-envelope"></i>
                                            <div class="content">
                                                <span>Escribenos</span>
                                                <h5><a href="mailto:contacto@innovatecproyectos.com">contacto@innovatecproyectos.com</a></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <div class="content">
                                                <span>Horario de atención</span>
                                                <h5>Lun-Vie 8:00 - 18:00</h5>
                                            </div>
                                        </li>
                                    </ul>
                               </div>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div id="contentsService" class="service-details-content wow fadeInRight delay-0-2s">
                            <div class="image mb-40">
                                <img src="assets/images/services/pagina_web.jpg" alt="Service Details">
                            </div>
                            <h2>Desarrollo de Páginas Web</h2>
                            <p>Las empresas de hoy necesitan aprovechar al máximo Internet. Por lo tanto, tienen que desarrollar aplicaciones o sitios web donde puedan entregar sus productos o automatizar procesos comerciales.</p>
                            <ul class="list-style-three pt-15 pb-30">
                                <li>Buena usabilidad y organización</li>
                                <li>Contenido de calidad</li>
                                <li>Responsiva</li>
                                <li>Diseño adaptado al estilo corporativo</li>
                            </ul>
                            <h3>La importancia de contar con una página web</h3>
                            <p>Cuando una organización tiene un sitio web, aumenta la reputación de la organización y permite que los clientes aumenten su  confianza en el producto o servicio que ofrece la organización. Los sitios web ayudan a aumentar las ventas, la productividad y el valor de mercado de cualquier PYME.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Details End -->
        
        <?php include ('footer.php'); ?>
        