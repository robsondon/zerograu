<div class="page-banner" style="background-repeat: no-repeat; background-position: center top; background-image: url('img/banner.jpg'); background-size: cover;">
    <div class="container fadeInLeft ">
        <h2 class="page-title">Carrinho</h2>
    </div>
</div>
<!-- start of page content -->
<div class="page-content container">
    <div class="row">
        <div class="main col-xs-12" role="main">
            <div class="woocommerce">



                    <table class="table table-bordered shop_table cart" cellspacing="0">
                        <thead>
                        <tr>
                            <!--<th class="product-remove">&nbsp;</th>
                            <th class="product-thumbnail">&nbsp;</th>-->
                            <th class="product-wrap">Produto</th>
                            <th class="product-quantity">Quantidade</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?PHP foreach ($this->request->session()->read('carrinho') as $cart){ ?>

                        <tr class="cart_item">

                            <td class="product-wrap">
                                <div class="product-thumbnail">
                                    <?PHP echo $this->Html->link($this->Html->image('../files/produtos/photo/'.$cart['photo_dir'].'/thumb_'.$cart['photo']),'/produtos/'.$cart['id'],['escape'=>false]); ?>
                                </div>
                                <div class="product-detail">
                                    <h4 class="product-name"><?PHP echo $this->Html->link($cart['nome'],'/produtos/'.$cart['id']) ?></h4>
                                </div>

                            </td>


                            <td class="product-quantity">
                                <div class="quantity buttons_added">
                                    <div class="quantity">
                                        <input type="number" step="1" min="0"  name="cart[94f6d7e04a4d452035300f18b984988c][qty]" value="<?PHP echo $cart['quantidade']?>" disabled title="Qty" class="input-text qty text" size="4" />
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <?PHP } ?>


                        <tr>
                            <td colspan="6" class="actions">

                                <?PHP echo $this->Html->link('Continuar comprando','/produtos',['class'=>'button']) ?>
                                <?PHP echo $this->Html->link('Enviar pedido de orçamento','/carrinho/enviar',['class'=>'button']) ?>

                            </td>
                        </tr>

                        </tbody>
                    </table>




                

            </div>
        </div>
    </div>
</div><!-- end of page content -->
