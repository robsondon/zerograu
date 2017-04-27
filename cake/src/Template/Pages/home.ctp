<div class="home-slider fadeInUp ">
    <div class="flexslider loading">
        <ul class="slides">
            <li>
                <img src="img/banners/banner6.jpg" alt=""/>
            </li>
            <li>
                <img src="img/banners/banner2.jpg" alt=""/>
            </li>
            <li>
                <img src="img/banners/banner1.jpg" alt=""/>
            </li>
            <li>
                <img src="img/banners/bannercamioneta.jpg" alt=""/>
            </li>
        </ul>
    </div>
</div>
<!-- END BANNERS -->

<section class="home-services-section clearfix">

    <div class="curve"></div>

    <div class="section-top">
        <div class="container">
            <div class="col-md-8">
                <header class="section-header section-header-top certificacao">
                    <h2 class="section-title fade-in-up">Certificações</h2>
                    <p class="fade-in-up ">Confira os selos de qualidade ZERO GRAU</p>
                </header>
            </div>
        </div>
    </div>


    <div class="section-bottom">

        <div class="container">

            <div class="row">
                <div class="col-md-8">
                    <article class="service col-md-2 col-sm-4 col-xs-12 fade-in-left ">
                        <div class="img-frame">
                            <figure>
                                <a href="#elegant-design" title="Elegant Designs"><img src="img/selos/lider.png"/></a>
                            </figure>
                        </div>
                        <h3><a href="#elegant-design" title="Elegant Designs">Lider em vendas</a></h3>
                    </article>

                    <article class="service col-md-2 col-sm-4 col-xs-12 fade-in-up ">
                        <div class="img-frame">
                            <figure>
                                <a href="#ice-cream-delicacy" title="Ice Cream Delicacy">
                                    <img src="img/selos/iso.png" alt="Ice Cream Delicacy"/>
                                </a>
                            </figure>
                        </div>
                        <h3><a href="#ice-cream-delicacy" title="Ice Cream Delicacy">ISO 9001</a></h3>
                    </article>

                    <div class="clearfix visible-sm"></div>
                    <article class="service col-md-2 col-sm-4 col-xs-12 fade-in-up ">
                        <div class="img-frame">
                            <figure>
                                <a href="#enriched-taste">
                                    <img src="img/selos/human.png"/>
                                </a>
                            </figure>
                        </div>
                        <h3><a href="#">Human Rights</a></h3>
                    </article>
                    <article class="service col-md-2 col-sm-4 col-xs-12 fade-in-right ">
                        <div class="img-frame">
                            <figure>
                                <a href="#home-delivery"><img src="img/selos/sedex.png"/></a>
                            </figure>
                        </div>
                        <h3><a href="#home-delivery" title="Home Delivery">Sedex</a></h3>
                    </article>
                    <article class="service col-md-2 col-sm-4 col-xs-12 fade-in-right ">
                        <div class="img-frame">
                            <figure>
                                <a href="#home-delivery"><img src="img/selos/tuv.png"/></a>
                            </figure>
                        </div>
                        <h3><a href="#home-delivery" title="Home Delivery">  TUV<br>Rheinland</a></h3>
                    </article>
                </div>

                <div class="col-md-4 center-block">
                    <header class="section-header section-header-top catalogo">
                        <h2 class="section-title fade-in-up left ">Catálago Online</h2>
                        <p class="fade-in-up ">Veja todos nossos produtos</p>
                    </header>
                    <a href="zerograu/index.html" target="_blank"><img src="img/revista/mockup.png" class="catalogo-img"/></a>
                </div>
                <div class="clearfix visible-lg"></div>
                <div class="clearfix visible-md"></div>
                <div class="clearfix visible-sm"></div>
            </div>
        </div>
    </div>
</section>

<section class="home-work-section clearfix">

    <div class="container">
        <header class="section-header">
            <h2 class="section-title fade-in-up ">Nossos produtos</h2>
        </header>
    </div>


    <div class="carousel-wrapper">
        <div class="work-items-carousel fade-in-up ">
            <?PHP foreach ($produtos as $produto){ ?>
            <div class="work-snippet">
                <article class="clearfix">
                    <?PHP echo $this->Html->image('../files/produtos/photo/'.$produto->photo_dir.'/principal_'.$produto->photo) ?>

                    <div class="overly">
                        <h4><?PHP echo $this->Html->link($produto->nome,'#') ?></h4>
                        <p>Clique no ícone "lupa" para ver a imagem em tamanho real, ou clique no ícone "clips" para ver as informações deste produto </p>
                        <?PHP echo $this->Html->link("<i class=\"fa fa-search\"></i>",'/files/produtos/photo/'.$produto->photo_dir.'/'.$produto->photo,['class'=>'preview-icon','data-imagelightbox'=>'lightbox','escape'=>false]) ?>
                        <?PHP echo $this->Html->link("<i class=\"fa fa-info\"></i>",'/produtos/'.$produto->id,['class'=>'link-icon','escape'=>false]) ?>

                    </div>
                </article>

            </div>
            <?PHP } ?>



        </div>
        <div class="col-lg-12">
            <?PHP echo $this->Html->link('Veja mais <i class="fa fa-arrow-circle-right"></i>','/produtos',['escape'=>false,'class'=>'veja']) ?>

        </div>
    </div>

</section>
<section class="home-testimonial-section">
    <div class="container">
        <header class="section-header">
            <h2 class="section-title fade-in-up ">Clientes</h2>
        </header>
    </div>
    <div class="testimonial-carousel">
        <div class="container">
            <div class="col-md-2 client"><img src="img/clientes/cocacola.jpg"></div>
            <div class="col-md-2 client"><img src="img/clientes/ambev.jpg"></div>
            <div class="col-md-2 client"><img src="img/clientes/brasilkirin.jpg"></div>
            <div class="col-md-2 client"><img src="img/clientes/cerpa.jpg"></div>
            <div class="col-md-2 client"><img src="img/clientes/divinofogao.jpg"></div>
            <div class="col-md-2 client border-none"><img src="img/clientes/fastacai.jpg"></div>
            <div class="col-md-2 client border-none-bot"><img src="img/clientes/grupopetropolis.jpg"></div>
            <div class="col-md-2 client border-none-bot"><img src="img/clientes/odebrecht.jpg"></div>
            <div class="col-md-2 client border-none-bot"><img src="img/clientes/ourofino.jpg"></div>
            <div class="col-md-2 client border-none-bot"><img src="img/clientes/pepsico.jpg"></div>
            <div class="col-md-2 client border-none-bot"><img src="img/clientes/rocka.jpg"></div>
            <div class="col-md-2 client border-none border-none-bot"><img src="img/clientes/vallee.jpg"></div>

        </div>
    </div>
</section>