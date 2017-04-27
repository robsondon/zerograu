<?PHP //pr($produtos);exit; ?>
<div class="page-banner"
     style="background-repeat: no-repeat; background-position: center top; background-image: url('../../img/banner.jpg'); background-size: cover;">
    <div class="container fadeInLeft ">
        <h2 class="page-title">Produtos | Orçamentos</h2>
    </div>
</div><!-- start of page content -->
<div class="page-content container">

    <div class="row">
        <?= $this->Flash->render() ?>
        <!-- start of sidebar -->
        <aside class="sidebar product-sidebar col-lg-3 col-md-4" role="complementary">
            <section id="woocommerce_product_categories-1" class="widget woocommerce widget_product_categories">
                <h3 class="title">Categorias</h3>
                <ul class="product-categories">
                    <?PHP foreach ($categorias as $categoria){ ?>
                        <li class="cat-item cat-item-33 cat-parent"><a href="#"><?PHP echo $categoria->categoria ?></a>
                            <ul class='children'>
                                <?PHP foreach ($categoria->subcategorias as $subcategoria){ ?>
                                    <li><?PHP echo $this->Html->link($subcategoria->subcategoria,'/produtos/subcategoria/'.$subcategoria->slug) ?></li>
                                <?PHP } ?>
                            </ul>
                        </li>
                    <?PHP } ?>
                </ul>
            </section>
            <?PHP if($this->request->session()->read('carrinho') != null){  ?>
                <section id="woocommerce_widget_cart-1" class="widget woocommerce widget_shopping_cart">
                    <h3 class="title">Seu Carrinho</h3>
                    <div class="hide_cart_widget_if_empty">
                        <div class="widget_shopping_cart_content">

                            <ul class="cart_list product_list_widget ">

                                <?PHP foreach ($this->request->session()->read('carrinho') as $cart){ ?>


                                    <li class="mini_cart_item">
                                        <?PHP echo $this->Html->link('x','/carrinho/delete/'.$cart['id'],['class'=>'remove','data-product_id'=>'300']) ?>
                                        <?PHP echo $this->Html->link($this->Html->image('../files/produtos/photo/'.$cart['photo_dir'].'/thumb_'.$cart['photo']).$cart['nome'],'/produtos/'.$cart['id'],['escape'=>false]) ?>
                                        <span class="quantity">Quantidade: <span class="amount"><?PHP echo $cart['quantidade'] ?></span></span>
                                    </li>
                                <?PHP } ?>

                            </ul><!-- end product list -->


                            <p class="total"><strong>Peça agora mesmo o seu orçamento</strong></span></p>


                            <p class="buttons">
                                <?PHP echo $this->Html->link('Ver carrinho','/carrinho',['class'=>'button wc-forward']); ?>
                                <?PHP echo $this->Html->link('Enviar','/carrinho/enviar',['class'=>'button checkout wc-forward']); ?>

                            </p>


                        </div>
                    </div>
                </section>
            <?PHP } ?>

        </aside>
        <!-- end of sidebar -->
        <div class="main col-lg-9 col-md-8" role="main">


            <p class="woocommerce-result-count">
                Todos os Produtos | <?PHP echo $produtos[0]['subcategoria'] ?></p>
            <div class="products-top"></div>
            <div class="row product-listing">

                <?PHP foreach ($produtos[0]['produtos'] as $produto){ ?>
                    <div class="item col-md-4 col-xs-6 fadeInUp  post-300 product type-product status-publish has-post-thumbnail product_cat-posters sale shipping-taxable purchasable product-type-simple product-cat-posters instock">

                        <article>

                            <figure>
                                <?PHP echo $this->Html->link($this->Html->image('../files/produtos/photo/'.$produto->photo_dir.'/thumb_'.$produto->photo),'/produtos/'.$produto->id,['escape'=>false]) ?>
                            </figure>


                            <span class="onsale">Orçe já!</span>


                            <h4 class="title"><?PHP echo $this->Html->link($produto->nome,'/produtos/'.$produto->id) ?></h4>


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
                        </article>

                    </div>
                <?PHP } ?>







            </div>


        </div>

    </div>

</div>