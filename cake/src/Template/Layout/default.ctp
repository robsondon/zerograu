<!DOCTYPE html>
<html lang="en-US">
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">

    <!-- Define a viewport to mobile devices to use - telling the browser to assume that the page is as wide as the device (width=device-width) and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no"/>

    <title>Zero Grau - HOME</title>

    <link rel='stylesheet' id='google-open-sans-css'
          href='http://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C700italic%2C800italic%2C400%2C300%2C600%2C700%2C800&#038;subset=latin%2Ccyrillic-ext%2Cgreek-ext%2Cgreek%2Cvietnamese%2Clatin-ext%2Ccyrillic&#038;ver=4.4'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='google-lily-script-one-css'
          href='http://fonts.googleapis.com/css?family=Lily+Script+One&#038;subset=latin%2Clatin-ext&#038;ver=4.4'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='google-Leckerli-one-css'
          href='http://fonts.googleapis.com/css?family=Leckerli+One&#038;ver=4.4' type='text/css' media='all'/>
    <?PHP $css = [
        'woocommerce-layout.css',
        'woocommerce-smallscreen',
        'woocommerce',
        'bootstrap',
        '../js/flexslider/flexslider.css',
        '../js/carousel/owl.carousel.css',
        'font-awesome.css',
        'selectric',
        '../js/image-lightbox/image-light-box.css',
        'meanmenu.css',
        'responsive-tables.css',
        'animate',
        'main',
        'custom',
    ];
    echo $this->Html->css($css);
    echo $this->Html->meta(
        'favicon.ico',
        '/favicon.ico',
        ['type' => 'icon']
    );
    ?>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?PHP echo $this->Html->script('respond.min.js'); ?>
</head>

<body class="single single-product postid-292 woocommerce woocommerce-page woocommerce-cart">
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-39625220-2', 'auto');
    ga('send', 'pageview');

</script>

<!--[if lt IE 7]>
<p class="chromeframe">Você está usando um navegador <strong>desatualizado</strong>. Porfavor <a
    href="http://browsehappy.com/">atualize seu navegador</a> ou <a
    href="<php echo 'http://www.google.com/chromeframe/?redirect=true'; ?>">active o frame do google</a>para
    melhorar a experiência</p>
<![endif]-->

<!-- Start of Header Wrapper -->
<div class="header-wrapper">

    <header class="header container fadeInDown ">

        <div class="logo-wrapper">
            <div class="logo">
                <h1 class="text-logo">
                        <?PHP echo $this->Html->image('logo.png',['url'=>'/','alt'=>'Zero Grau']) ?>
                </h1>
            </div>
        </div>


        <!-- Main Menu -->
        <div class="main-menu-wrapper">
            <div class="social-medias">
                <a href="https://www.facebook.com/industriazerograu/?fref=ts"><i class="fa fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/zerograutermicas/"><i class="fa fa-instagram"></i></a>
            </div>
            <nav id="nav" class="main-menu nav-collapse clearfix">
                <ul class="clearfix">
                    <li><?PHP echo $this->Html->link('Home','/') ?></li>
                    <li><?PHP echo $this->Html->link('Empresa','/empresa') ?></li>
                    <li><?PHP echo $this->Html->link('Produtos','/produtos') ?></li>
                    <li><?PHP echo $this->Html->link('Representantes','/representantes') ?></li>
                   
                    <li><?PHP echo $this->Html->link('Contato','/contato') ?></li>
                </ul>
            </nav>
        </div>


        <div class="clearfix"></div>

        <!-- product search form for mobile screens -->

    </header>

    <div class="header-border-bottom"></div>

</div>
<?PHP if($this->request->session()->read('carrinho') != null){  ?>
<div class="cart-fast"><?PHP echo $this->Html->link('<i class="fa fa-shopping-cart"></i>','/carrinho',['escape'=>false]) ?>
    <ul>
        <li><h4>Carrinho: <?PHP echo count($this->request->session()->read('carrinho')) ?> itens</h4></li>
        <?PHP foreach ($this->request->session()->read('carrinho') as $carrinho){ ?>

        <li><?PHP echo $carrinho['nome'] ?></li>
        <?PHP } ?>
        <?PHP echo $this->Html->link('Carrinho','/carrinho',['class'=>'btn-cart']) ?>
        <?PHP echo $this->Html->link('Enviar orçamento','/carrinho/enviar',['class'=>'btn-cart']) ?>
    </ul>

</div>
<?PHP } ?>
<?PHP echo $this->fetch('content') ?>

<br class="clearfix">


<!-- Start Footer -->
<footer class="footer">

    <div class="footer-top container">

        <div class="row">

            <div class="col-lg-8 col-xs-12">

                <div class="footer-menu-wrapper fade-in-left ">
                    <nav class="footer-nav clearfix">
                        <ul id="menu-footer-menu" class="clearfix">
                            <li><?PHP echo $this->Html->link('Home','/') ?></li>
                            <li><?PHP echo $this->Html->link('Empresa','/empresa') ?></li>
                            <li><?PHP echo $this->Html->link('Produtos','/produtos') ?></li>
                            <li><?PHP echo $this->Html->link('Contato','/contato') ?></li>
                        </ul>
                    </nav>
                </div>

                <div class="contact-details clearfix fade-in-left ">
                    <address>
                        <i class="fa fa-home"></i>Rua Professor Evaldo Kissler, 213 - Parque Industrial | CEP 85930-000
                        -
                        Nova Santa Rosa - PR
                    </address>
                    <br>
                    <a class="phone-number" href="tel:18005551234">
                        <i class="fa fa-mobile"></i>(45) 3253-8000</a>
                    <span class="email">
                        <i class="fa fa-envelope-o"></i>
                        <a href="mailto:contato@zerograu.ind.br">contato@zerograu.ind.br</a></span>
                </div>
            </div>

            <div class="col-lg-4 col-xs-12">
                <div class="social-networks fade-in-right ">
                    <p class="invitation">Siga-nos nas redes sociais</p>
                    <ul class="social_networks clearfix">
                        <li><a target="_blank" href="https://www.facebook.com/industriazerograu/?fref=ts"><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/zerograutermicas/"><i class="fa fa-instagram fa-lg"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom fadeInUp ">
        <div class="container">
            <p class="copyright-text">© Copyright 2016 All Rights Reserved.</p><a href="#top" id="scroll-top"></a>
        </div>
    </div>

</footer><!-- End Footer -->
<?PHP $js = [
    'jquery.js',
    'jquery-migrate.js',
    'modernizr.custom.js',
    'bootstrap.js',
    'flexslider/jquery.flexslider-min.js',
    'carousel/owl.carousel.min.js',
    'jquery.appear.js',
    'jquery.hoverdir.js',
    'image-lightbox/imagelightbox.js',
    'jquery.isotope.min.js',
    'jquery.validate.min.js',
    'jquery.selectric.min.js',
    'jquery.transit.js',
    'jquery.meanmenu.min.js',
    'custom.js',
] ?>
<?PHP echo $this->Html->script($js); ?>
<script>
    $("#mapa path").click(function(){

            window.location.href = '/representantes/'+$(this).attr('data-name');


    });
</script>
</body>
</html>

