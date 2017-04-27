<div class="page-banner"
     style="background-repeat: no-repeat; background-position: center top; background-image: url('../img/banner.jpg'); background-size: cover;"
     xmlns="http://www.w3.org/1999/html">
    <div class="container fadeInLeft ">
        <h2 class="page-title"><?PHP echo $produto->nome ?></h2>
    </div>
</div>
<!-- start of page content -->
<div class="page-content container">

    <div class="row">

        <div class="main col-xs-12" role="main">


            <div itemscope itemtype="http://schema.org/Product" id="product-300"
                 class="product-essential product-detail post-300 product type-product status-publish has-post-thumbnail product_cat-posters sale shipping-taxable purchasable product-type-simple product-cat-posters instock">

                <div class="row">

                    <?= $this->Flash->render() ?>

                    <div class="col-lg-5 col-md-5 col-sm-6 summary-before">

                        <div class="product-slider images">
                            <ul class="slides">
                                <li data-thumb="<?PHP echo '../files/produtos/photo/'.$produto->photo_dir.'/'.$produto->photo ?>">
                                    <a href="<?PHP echo '../files/produtos/photo/'.$produto->photo_dir.'/'.$produto->photo ?>" data-imagelightbox="gallery"
                                       class="poster_2_up">
                                        <?PHP echo $this->Html->image('../files/produtos/photo/'.$produto->photo_dir.'/'.$produto->photo) ?>
                                    </a>
                                </li>
                                <?PHP foreach ($produto->imgprodutos as $imgprodutos): ?>
                                <li data-thumb="<?PHP echo '../files/imgprodutos/photo/'.$imgprodutos->photo_dir.'/square_'.$imgprodutos->photo ?>">

                                        <?PHP echo $this->Html->link($this->Html->image('/files/imgprodutos/photo/'.$imgprodutos->photo_dir.'/'.$imgprodutos->photo),'/files/imgprodutos/photo/'.$imgprodutos->photo_dir.'/'.$imgprodutos->photo,['escape'=>false,'data-imagelightbox'=>'gallery','class'=>'poster_2_up']) ?>

                                </li>
                                <?PHP endforeach; ?>
                            </ul>
                           
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-7 col-lg-7 product-review entry-summary">

                        <h1 itemprop="name" class="product_title entry-title"><?PHP echo $produto->nome ?></h1>
                        <div class="product_meta">
                            <span class="posted_in">Categoria: <a href="#" rel="tag"><?PHP echo $produto->subcategoria->subcategoria ?></a></span>
                        </div>
                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                            <p class="price">
                                <ins><span class="amount" style="color: #f04933 !important;">Consulte o preço enviando um pedido de orçamento!</span></ins>
                            </p>
                            <br class="clearfix"><br class="clearfix">
                            <div>
                            <?PHP
                            echo $this->Form->create(null,['url'=>['controller'=>'carrinho','action'=>'add']]);
                            echo $this->Form->hidden('nome',['value'=>$produto->nome]);
                            echo $this->Form->hidden('id',['value'=>$produto->id]);
                            echo $this->Form->hidden('photo',['value'=>$produto->photo]);
                            echo $this->Form->hidden('quantidade',['value'=>'1']);
                            echo $this->Form->hidden('photo_dir',['value'=>$produto->photo_dir]);
                            echo $this->Form->submit('Pedir Orçamento');
                            echo $this->Form->end();
                            ?>
                            </div><br class="clearfix">

                        </div>
                        <div itemprop="description">

                                <?PHP if($produto->estrutura != null){ ?>
                                    <h4>Estrutura</h4>
                                        <?= $produto->estrutura ?>
                                <?PHP } ?>

                            <?PHP if($produto->pintura != null){ ?>
                                <hr>
                                    <h4>Pintura</h4>
                                    <?= $produto->pintura ?>
                            <?PHP } ?>


                            <?PHP if($produto->isolamento != null){ ?>
                                <hr>
                                <h4>Isolamento</h4>
                             <?= $produto->isolamento ?>
                            <?PHP } ?>

                            <?PHP if($produto->unidade != null){ ?>
                                <hr>
                                <h4>Unidade Conservadora</h4>
                                <?= $produto->unidade ?>

                            <?PHP } ?>

                            <?PHP if($produto->refrigeracao != null){ ?>
                                <hr>
                               <h4>Refrigeração</h4>
                                <?= $produto->refrigeracao ?>
                            <?PHP } ?>

                            <?PHP if($produto->controledetemperatura != null){ ?>
                                <hr>
                                <h4>Controle de Temperatura</h4>
                               <?PHP if($produto->controledetemperatura == "Digital"){
                                        echo "Digital e de fácil ajuste";
                                    }else{ echo $produto->controledetemperatura; } ?>
                            <?PHP } ?>

                            <?PHP if($produto->temperatura != null){ ?>
                                <hr>
                                <h4>Temperatura</h4>
                                <?= $produto->temperatura ?>
                            <?PHP } ?>

                            <?PHP if($produto->porta != null){ ?>
                                <hr>
                               <h4>Porta</h4>
                                <?= $produto->porta ?>
                            <?PHP } ?>

                            <?PHP if($produto->estrado != null){ ?>
                                <hr>
                                <h4>Estrado</h4>
                                <?= $produto->estrado ?>
                            <?PHP } ?>


                            <?PHP if($produto->opicionais != null){ ?>
                                <hr>
                                <h4>Opcionais</h4>
                                <?=$produto->opicionais ?>
                            <?PHP } ?>

                            <?PHP if($produto->prateleiras != null){ ?>
                                <hr>
                                <h4>Prateleiras</h4>
                               <?= $produto->prateleiras ?>
                            <?PHP } ?>

                            <?PHP if($produto->quadrodecomando != null){ ?>
                                <hr>
                                <h4>Quadro de Comando:</h4>
                                <?= $produto->quadrodecomando ?>
                            <?PHP } ?>

                            <?PHP if($produto->gelo != null){ ?>
                                <hr>
                                <h4>Gelo</h4>
                               <?= $produto->gelo ?>
                            <?PHP } ?>

                            <?PHP if($produto->motor != null){ ?>
                                <hr>
                                <h4>Motor</h4>
                                <?= $produto->motor ?>
                            <?PHP } ?>

                            <?PHP if($produto->armacao != null){ ?>
                                <hr>
                                <h4>Armação</h4>
                                <?= $produto->armacao ?>
                            <?PHP } ?>

                            <?PHP if($produto->poste != null){ ?>
                                <hr>
                                <h4>Poste</h4>
                                <?= $produto->poste ?>
                            <?PHP } ?>

                            <?PHP if($produto->lona != null){ ?>
                                <hr>
                                <h4>Lona</h4>
                                <?= $produto->lona ?>
                            <?PHP } ?>

                            <?PHP if($produto->fixacao != null){ ?>
                                <hr>
                                <h4>Fixação</h4>
                                <?= h($produto->fixacao) ?>
                            <?PHP } ?>

                            <?PHP if($produto->montagem != null){ ?>
                                <hr>
                                <h4>Montagem</h4>
                               <?= $produto->montagem ?>
                            <?PHP } ?>

                            <?PHP if($produto->tampa != null){ ?>
                                <hr>
                                <h4>Tampa</h4>
                                <?= $produto->tampa ?>
                            <?PHP } ?>

                            <?PHP if($produto->dobradicas != null){ ?>
                                <hr>
                                <h4>Dobradiças</h4>
                                <?= h($produto->dobradicas) ?>
                            <?PHP } ?>
                            <?PHP if($produto->personalizacao != null){ ?>
                                <hr>
                                <h4>Personalização</h4>
                                <?= $produto->personalizacao ?>
                            <?PHP } ?>
                            <?PHP if($produto->impressao != null){ ?>
                                <hr>
                                <h4>Impressão</h4>
                                <?= $produto->impressao ?>
                            <?PHP } ?>
                            <?PHP if($produto->observacao != null){ ?>
                                <hr>
                                <h4>Observação</h4>
                                <?= $produto->observacao ?>
                            <?PHP } ?>
                            <?PHP if($produto->extruturaexterna != null){ ?>
                                <hr>
                                <h4>Extrutura Externa</h4>
                                <?= $produto->extruturaexterna ?>
                            <?PHP } ?>
                            <?PHP if($produto->tanqueinterno != null){ ?>
                                <hr>
                                <h4>Tanque Interno</h4>
                                <?= $produto->tanqueinterno ?>
                            <?PHP } ?>
                            <?PHP if($produto->vedacao != null){ ?>
                                <hr>
                                <h4>Vedação</h4>
                               <?= $produto->vedacao ?>
                            <?PHP } ?>
                            <?PHP if($produto->pedacaixa != null){ ?>
                                <hr>
                                <h4>Pé da Caixa</h4>
                                <?= $produto->pedacaixa ?>
                            <?PHP } ?>
                            <?PHP if($produto->pegadoreslaterais != null){ ?>
                                <hr>
                                <h4>Pegadores Laterais</h4>
                                <?= h($produto->pegadoreslaterais) ?>
                            <?PHP } ?>

                            <hr>

                            <?PHP
                            echo $this->Form->create(null,['url'=>['controller'=>'carrinho','action'=>'add']]);
                            echo $this->Form->hidden('nome',['value'=>$produto->nome]);
                            echo $this->Form->hidden('id',['value'=>$produto->id]);
                            echo $this->Form->hidden('photo',['value'=>$produto->photo]);
                            echo $this->Form->hidden('quantidade',['value'=>'1']);
                            echo $this->Form->hidden('photo_dir',['value'=>$produto->photo_dir]);
                            echo $this->Form->submit('Pedir Orçamento');
                            echo $this->Form->end();
                            ?>
                        </div>
                        

                    </div><!-- .summary -->

                </div><br class="clearfix">
                <hr>


                <section class="related-products">

                    <h3 class="section-title">Produtos semelhantes</h3>

                    <div class="related-products-wrapper">

                        <div class="related-products-carousel">

                            <div class="product-control-nav">
                                <a class="prev"><i class="fa fa-angle-left"></i></a>
                                <a class="next"><i class="fa fa-angle-right"></i></a>
                            </div>

                            <div class="products-top"></div>
                            <div class="row product-listing">
                                <div id="product-carousel" class="product-listing">
                                <?PHP foreach ($relateds as $related){ if($related->id == $produto->id){}else{ ?>
                                    <div
                                        class="item first post-301 product type-product status-publish has-post-thumbnail product_cat-posters sale shipping-taxable purchasable product-type-simple product-cat-posters instock">

                                        <article>


                                            <figure>
                                                <?PHP echo $this->html->image('../files/produtos/photo/'.$related->photo_dir.'/'.$related->photo,['url'=>'/produtos/'.$related->id]) ?>
                                            </figure>


                                            <span class="onsale">Faça o Orçamento!</span>


                                            <h4 class="title"><?PHP echo $this->Html->link($related->nome,'/produtos/'.$related->id) ?></h4>


                                            <?PHP
                                            echo $this->Form->create(null,['url'=>['controller'=>'carrinho','action'=>'add']]);
                                            echo $this->Form->hidden('nome',['value'=>$related->nome]);
                                            echo $this->Form->hidden('id',['value'=>$related->id]);
                                            echo $this->Form->hidden('photo',['value'=>$related->photo]);
                                            echo $this->Form->hidden('quantidade',['value'=>'1']);
                                            echo $this->Form->hidden('photo_dir',['value'=>$related->photo_dir]);
                                            echo $this->Form->submit('Carrinho de orçamento');
                                            echo $this->Form->end();
                                            //pr( $cart);
                                            ?>
                                        </article>

                                    </div>
                                    <?PHP }} ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div><!-- #product-300 -->
        </div><!-- end of main -->
    </div><!-- end of .row -->
</div>


