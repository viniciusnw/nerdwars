        <?php wp_footer(); ?>

        <footer id="footer">
           
            <div id="bgFooter">

            </div>
            
            <div id="footer-wrapper">
                
                <div id="footer-content">
                    
                    <div id="back-to-top">
                        <div id="icon-top">
                            <a href="#start">
                                <i class="fa fa-angle-double-up" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                                                            
                    <div class="copy row">
                        <div class="col-md-12">
                            &copy; 2011 - <?=date('Y')?> <b>Nerd Wars</b> <span>3.0 beta</span> <br><br>
                            <small>Todos <i>ou alguns</i> direitos reservados.</small>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            Layout por <b>André Inácio</b> <br>
                            Desenvolvimento por <b>Vinícius Inácio</b> <br>
                        </div>

                        <div align="right" class="col-xs-offset-4 col-md-4">
                            <form style="padding:3px;text-align:center;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=NerdWars', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">

                                <p class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </p>

                                <input type="hidden" value="NerdWars" name="uri">
                                <input type="hidden" name="loc" value="pt_BR">
                                <input type="submit" class="btn btn-danger" value="Assinar">
                            </form>
                        </div>
                    </div>

                    <div id="footer-menu">
                        <ul>
                            <li>
                                <a href="#">Leitores</a>
                            </li>
                            
                            <li class="divisor"> / </li>
                            
                            <li>
                                <a href="#">Politica de privacidade</a>
                            </li>
                            
                            <li class="divisor"> / </li>
                            
                            <li>
                                <a href="#">Parceria</a>
                            </li>
                            
                            <li class="divisor"> / </li>
                            
                            <li>
                                <a href="#">Categorias</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!-- / rodape -->
        
        <!-- Jquery -->
        <script src="<?php bloginfo('template_directory'); ?>/components/jquery/jquery.min.js" type="text/javascript"></script>
        
        <!-- bootstrap -->
        <script src="<?php bloginfo('template_directory'); ?>/components/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
        <!-- owl-carousel -->
        <script src="<?php bloginfo('template_directory'); ?>/components/owl.carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_directory'); ?>/components/smoothscroll.js" type="text/javascript"></script>
        
        <!-- Custom JS -->
        <script src="<?php bloginfo('template_directory'); ?>/js/main.js" type="text/javascript"></script>
        
        <!-- API's-->
        
        <!-- Twitter -->
        <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
        
        <!-- Google -->
        <script src="https://apis.google.com/js/platform.js"></script>
        <script async src="<?php bloginfo('template_directory'); ?>/js/adsbygoogle.js"></script>
        
        <!-- Facebook -->
        <script>
            (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- pinterest -->
        <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
    </body>
</html>


