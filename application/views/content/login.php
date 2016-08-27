<section id="login" class="gray-section team">
<div class="container">
    <div class="row col-lg-12">
        <br>
        <h2>
            Ingresa
        </h2>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec consectetur enim, in aliquam tortor. Vestibulum vitae pretium augue. Aenean volutpat sem eget augue posuere, vitae luctus lacus egestas. Ut euismod magna eget ante pulvinar consequat. Donec vel vestibulum erat. Duis hendrerit, enim quis tempor aliquet, urna augue pharetra neque, semper mollis urna dui vitae dui. Duis fringilla porttitor egestas. Ut maximus varius nisl, molestie lobortis ipsum tempus in. Phasellus ac bibendum massa, non finibus ipsum. Nam eu convallis mauris. Etiam non tortor pharetra, feugiat felis non, vulputate elit. Fusce mollis quam sed ullamcorper finibus. Aliquam lacinia dui eget felis rutrum, quis semper enim rhoncus. Duis vestibulum lobortis mauris a luctus.
        </p>
        <div class="clearfix"></div>

        <div class="row wrapper wrapper-content animated fadeInRight col-md-9 col-xs-12 center-block">
            <div class="col-md-4 col-xs-12">
                    <h4>Ingresa usando facebook</h4>
                    <?php
                        echo anchor(
                                $facebook_data['login_url'],
                                '<i class="fa fa-facebook-square"></i>
                                Ingresa con Facebook',
                                'title="Ingresa con Facebook" class="social-button facebook btn btn-block btn-facebook" class="6"'
                            );
                        echo '<div class="clearfix"></div>';

                    ?>
            </div>

            <div class="col-md-4 col-xs-12">
                <h4>Ingresa usando Twitter</h4>
                    Twitter
            </div>
            <div class="col-md-4 col-xs-12">
                <h4>Ingresa usando Google+</h4>
                    Google Plus
            </div>
        </div>
        <div class="row wrapper wrapper-content animated fadeInRight">
            <div class="col-md-8 col-xs-12 center-block">
                    Formulario
            </div>
        </div>
    </div>
</div>

</section>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>


        <!-- Flot -->
<script src="js/plugins/flot/jquery.flot.js"></script>
<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/plugins/flot/jquery.flot.resize.js"></script>
<script src="js/plugins/flot/jquery.flot.pie.js"></script>
<script src="js/plugins/flot/jquery.flot.time.js"></script>

<!-- Flot demo data -->
<script src="js/demo/flot-demo.js"></script>