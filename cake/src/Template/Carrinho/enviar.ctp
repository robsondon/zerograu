<?PHP
$i = 0;
 foreach ($estados as $estado){
     $estate[$estado->sigla] = $estado->nome;
     $i++;
 }
//pr($estate); exit;
?>
<div class="page-banner" style="background-repeat: no-repeat; background-position: center top; background-image: url('../img/banner.jpg'); background-size: cover;">
    <div class="container fadeInLeft ">
        <h2 class="page-title">Enviar Pedido de Orçamento</h2>
    </div>
</div>
<!-- start of page content -->
<div class="page-content container">
    <div class="row">
        <div class="main col-xs-12" role="main">
            <div class="woocommerce">

                <div class="row">

                    <?PHP echo $this->Form->create('null',['url'=>['controller'=>'carrinho','action'=>'send'],'class'=>'checkout woocommerce-checkout col-sm-12']) ?>
                        <div class="row">

                            <div class="col-md-6">

                                <div id="customer_details">
                                    <div class="woocommerce-billing-fields">

                                        <h3>Seus Dados</h3>




                                        <div class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
                                            <?PHP echo $this->Form->input('nome',['required','type'=>'text','label'=>'Primeiro Nome','class'=>'input-text','value'=>'']) ?>
                                        </div>

                                        <div class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
                                            <?PHP echo $this->Form->input('sobrenome',['required','type'=>'text','label'=>'Último Nome','class'=>'input-text','value'=>'']) ?>
                                        </div>
                                        <div class="clear"></div>

                                        <div class="form-row form-row form-row-wide" id="billing_company_field">
                                            <?PHP echo $this->Form->input('empresa',['type'=>'text','label'=>'Ramo de atuação','class'=>'input-text','value'=>'']) ?>
                                        </div>

                                        <div class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
                                            <?PHP echo $this->Form->input('email',['required','type'=>'text','label'=>'Seu E-mail','class'=>'input-text','value'=>'']) ?>
                                        </div>

                                        <div class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
                                            <?PHP echo $this->Form->input('telefone',['required','type'=>'text','label'=>'Seu Telefone','class'=>'input-text','value'=>'']) ?>
                                        </div>

                                        <div class="clear"></div>

                                        <p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field">
                                            <?PHP //echo $this->Form->input('estado',['type'=>'text','label'=>'Escreva seu Estado','class'=>'input-text','value'=>'']) ?>
                                            <?PHP echo $this->Form->select('estado',$estate) ?>
                                        </p>

                                        <div class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                            <?PHP echo $this->Form->input('endereco',['placeholder'=>'Endereço completo','type'=>'text','label'=>'Endereço','class'=>'input-text','value'=>'']) ?>
                                        </div>

                                        <div class="form-row form-row form-row-wide address-field" id="billing_address_2_field">
                                            <?PHP echo $this->Form->input('complemento',['placeholder'=>'Complemento','type'=>'text','label'=>'','class'=>'input-text','value'=>'']) ?>
                                        </div>

                                        <div class="form-row form-row form-row-wide address-field validate-required" id="billing_city_field">
                                            <?PHP echo $this->Form->input('cidade',['placeholder'=>'Cidade','type'=>'text','label'=>'Cidade','class'=>'input-text','value'=>'']) ?>
                                        </div>
                                        <?PHP
                                        $options = [
                                            'disabled' => 'Selecione uma opção',
                                            'Já sou um cliente' =>  'Já sou um cliente',
                                            'Anúncio em revista' =>  'Anúncio em revista',
                                            'Propaganda em rádio' =>  'Propaganda em rádio',
                                            'Site Zerograu' =>  'Site Zerograu',
                                            'Site de busca' =>  'Site de busca',
                                            'E-mail marketing' =>  'E-mail marketing',
                                            'Folder' =>  'Folder',
                                            'Feira' =>  'Feira',
                                            'Representante' =>  'Representante',
                                            'Indicação de amigos' =>  'Indicação de amigos',
                                            'Mala direta' =>  'Mala direta',
                                        ];
                                        ?>
                                        <div class="form-row form-row form-row-wide address-field validate-required" id="billing_city_field">
                                            <label>Como conheceu a ZeroGrau:</label>
                                            <?PHP echo $this->Form->select('howmeet',$options,[
                                                'disabled' => ['disabled']]) ?>
                                        </div>

                                        <div class="clear">
                                        </div>

                                    </div>
                                    <div class="woocommerce-shipping-fields">

                                        <h3>informações adicionais</h3>

                                        <div class="form-row form-row notes" id="order_comments_field">
                                            <?PHP echo $this->Form->input('observacoes',['placeholder'=>'Observações','type'=>'textarea','label'=>'Observações','class'=>'input-text','value'=>'']) ?>
                                        </div>


                                    </div>
                                </div>

                            </div>


                            <div class="col-md-6">

                                <h3 id="order_review_heading">Seus itens de orçamento</h3>


                                <div id="order_review" class="woocommerce-checkout-review-order">
                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                        <thead>
                                        <tr>
                                            <th class="product-name">Produto</th>
                                            <th class="product-total">Quantidade</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?PHP $i = 0; foreach ($this->request->session()->read('carrinho') as $cart){ ?>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                <?PHP echo  $this->Form->input('carrinho.'.$i.'.nome',['readonly'=>'readonly','label'=>false,'value'=>$cart['nome']]) ?>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">
                                                    <?PHP echo  $this->Form->input('carrinho.'.$i.'.quantidade',['readonly'=>'readonly','label'=>false,'value'=>$cart['quantidade']]) ?>
                                                </span>
                                            </td>
                                        </tr>
                                        <?PHP $i++; } ?>

                                        </tbody>
                                        <tfoot>
                                        <tr class="order-total">
                                            <?PHP
                                            $total_chaves = $this->request->session()->read('carrinho');
                                            $tamanho_array = sizeof($total_chaves);
                                            $quantidade = 0;
                                            for($i = 0 ; $i < $tamanho_array; $i++ ){
                                                $qntd = $this->request->session()->read('carrinho.'.$i.'.quantidade');
                                                $quantidade = $quantidade + $qntd;
                                            }


                                            ?>
                                            <th>Total</th>
                                            <td><strong><span class="amount"><?PHP  echo $quantidade; ?></span></strong> </td>
                                        </tr>


                                        </tfoot>
                                    </table>

                                    <div id="payment" class="woocommerce-checkout-payment">

                                        <div class="form-row place-order">
                                            <?PHP echo $this->Form->submit('Enviar Pedido',['class'=>'button alt','id'=>'place_order']) ?>
                                        </div>

                                    </div>

                                </div>


                            </div>
                        </div>

                    <?PHP echo $this->Form->end() ?>

                </div>

            </div>
        </div>
    </div>
</div>