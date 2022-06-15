<!-- Footer Area Start -->
        <footer class="main-footer footer-two bgs-cover text-white" style="background-image: url(assets/images/footer/footer-bg-map.png);">
            <div class="container">
               <div class="footer-top pt-75">
                    <ul class="contact-info">
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <div class="content">
                                <span>Llámanos</span>
                                <h5><a href="callto:+51928986980">+51 928986980</a></h5>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <div class="content">
                                <span>Escríbenos</span>
                                <h5><a href="mailto:contacto@innovatecproyectos.com">contacto@innovatecproyectos.com</a></h5>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <div class="content">
                                <span>Hora de atención</span>
                                <h5>Lun-Sab 8:00 - 18:00</h5>
                            </div>
                        </li>
                    </ul>
               </div>
                <div class="footer-widget-area pt-85 pb-20">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo mb-35">
                                    <a href="index.php"><img src="assets/images/logos/logo_web.png" alt="Logo"></a>
                                </div>
                                <div class="text" style="text-align: justify;">
                                Desarrollamos softwares y sitios webs a hechos a la medida haciendo uso de las mas novedosas tecnologías y lenguajes de programación que existen en el mercado
                                </div>
                                <!--<ul class="contact-info mt-20">
                                    <li><i class="fas fa-map-marker-alt"></i><span>15023 Peru Lima <br>Av La Encalada, 15023</span></li>
                                </ul>-->
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="footer-widget link-widget ml-20 rml-0">
                                <h4 class="footer-title">Links</h4>
                                <ul class="list-style-two">
                                    <li><a href="index.php">Inicio</a></li>
                                    <li><a href="nosotros.php">Quienes somos</a></li>
                                    <li><a href="servicios.php">Servicios</a></li>                            
                                    <li><a href="contacto.php">Contacto</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="footer-widget link-widget ml-20 rml-0">
                                <h4 class="footer-title">Nuestros servicios</h4>
                                <ul class="list-style-two">
                                    <li><a href="servicios.php">Páginas web</a></li>
                                    <li><a href="servicios.php">Tienda virtuales</a></li>
                                    <li><a href="servicios.php">Sistemas web</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F20IP22%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=278935152755075" width="315" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; visibility: visible; width: 100%; height: 100%;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="copyright-inner pt-15">
                        <div class="social-style-one mb-10">
                            <a href="https://www.facebook.com/20IP22"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=51928986980" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                        <p>Copyright 2022 Innovatec Proyectos - Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->
            <!--End pagewrapper-->
   
    <!-- Scroll Top Button -->
    <!--<button class="scroll-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></button>-->
    <div class="whatsapp" id="wa_btn">
      <div class="whatsapp_txt"><strong>Hola!!</strong> ¿En que podemos ayudarte?</div>
      <div class="whatsapp_icon"></div>
    </div>
    <div class="chat_box" id="wa_chat">
      <div class="chat_header">
        <div class="chat_titulo">Cotiza ahora!!</div>
        <div class="chat_msj">Hay un personal disponible!! haga click para empezar la conversación.</div>
      </div>
      <div class="chat_body">
        <div class="sub_msj">Te respondemos a la brevedad posible.</div>
      <div class="chat_list">
       <div class="chat_item">
        <a class="miembro online" target="_blank" href="https://api.whatsapp.com/send?phone=51928986980&amp;text=Hola! He visitado su web y tengo una consulta">
         <div class="avatar">
          <div class="avatar_img" style="background: url(assets/images/logos/favicon.png) center center no-repeat; background-size: cover;"></div>
          </div>
      <div class="miembro_info">
       <div class="nombre">Innovatec Proyectos</div>
       <div class="labor">Atención al Cliente</div>
       <div class="estado">En Linea ahora mismo</div>
      </div>
       </a>
     </div>
     
        </div>
      </div>
    </div>

    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', ()=>{
        let btn = document.getElementById('wa_btn');
        let chat= document.getElementById('wa_chat');

        btn.addEventListener('click', ()=>{
          chat.classList.toggle('fade_left')
          chat.classList.toggle('activo')
          chat.classList.toggle('fade_in')
          btn.classList.toggle('activo')
        })
      })
    </script>

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "105851632156456");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <!--====== Jquery ======-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!--====== Bootstrap ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--====== Appear Js ======-->
    <script src="assets/js/appear.min.js"></script>
    <!--====== Slick ======-->
    <script src="assets/js/slick.min.js"></script>
    <!--====== Magnific Popup ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--====== Isotope ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--  WOW Animation -->
    <script src="assets/js/wow.js"></script>
    <!-- Custom script -->
    <script src="assets/js/script.js"></script>
    <!-- Funciones del servidor -->
    <script src="assets/js/funcionesServer.js"></script>

</body>
</html>