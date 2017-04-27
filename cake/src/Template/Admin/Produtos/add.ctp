<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-home">Página Produtos</h1>

    <div class="ls-box-filter">
        <h2 class="ls-title-2">Admin <span style="font-size: calc(100% - 40%);"> /Produtos</span></h2>

        <p>Adicione, edite e gerencie a exibição das informações relacionadas a está sessão do seu website.</p>

        <div class="ls-group-btn">
            <?= $this->Html->link('CADASTRAR', ['action' => 'add'], array('class' => 'ls-btn-primary ls-ico-plus')); ?>
            <?= $this->Html->link('LISTAR', ['action' => 'index'], array('class' => 'ls-btn ls-ico-list3')); ?>
        </div>

    </div>
    <!-- -->

    <div class="ls-box-filter">
        <!--<div class="col-md-6"> -->
        <div class="ls-box_ ls-equal-height-box-2">
            <!--<form action="#" class="ls-form" data-ls-module="form"> -->
            <?= $this->Form->create($produto, ['class' => 'ls-form', 'data-ls-module' => 'form', 'type' => 'file']) ?>
            <div id="webdesk-form">


                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Selecione a categoria:</span>
                        <?= $this->Form->input('subcategoria_id', ['options' => $subcategorias,'placeholder' => 'Insira o nome', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Selecione imagem principal:</span>
                        <?= $this->Form->input('photo', ['type' => 'file','placeholder' => 'Insira o nome', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>

                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Nome do Produto</span>
                        <?= $this->Form->input('nome', ['placeholder' => 'informe o nome do produto', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Estrutura:</span>
                        <?= $this->Form->input('estrutura', ['placeholder' => 'informe a estrutura', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Pintura:</span>
                        <?= $this->Form->input('pintura', ['placeholder' => 'informe a pintura', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Isolamento:</span>
                        <?= $this->Form->input('isolamento', ['placeholder' => 'informe o isolamento', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Unidade Conservadora:</span>
                        <?= $this->Form->input('unidade', ['placeholder' => 'Unidade conservadora', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Refrigeração:</span>
                        <?= $this->Form->input('refrigeracao', ['placeholder' => 'Refrigeração', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Controle de Temperatura:</span>
                        <?= $this->Form->input('controledetemperatura', ['placeholder' => 'Controlador de temperatura', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Temperatura:</span>
                        <?= $this->Form->input('temperatura', ['placeholder' => 'Temperatura', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Porta:</span>
                        <?= $this->Form->input('porta', ['placeholder' => 'Porta', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Estrado:</span>
                        <?= $this->Form->input('estrado', ['placeholder' => 'Estrado', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Opicionais:</span>
                        <?= $this->Form->input('opicionais', ['placeholder' => 'Opicionais', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Prateleiras:</span>
                        <?= $this->Form->input('prateleiras', ['placeholder' => 'Prateleiras', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Quadro de comando:</span>
                        <?= $this->Form->input('quadrodecomando', ['placeholder' => 'Quadro de Comando', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Gelo:</span>
                        <?= $this->Form->input('gelo', ['placeholder' => 'Gelo', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Motor:</span>
                        <?= $this->Form->input('motor', ['placeholder' => 'Motor', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Motor:</span>
                        <?= $this->Form->input('motor', ['placeholder' => 'Motor', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Armação:</span>
                        <?= $this->Form->input('armacao', ['placeholder' => 'Armação', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Poste:</span>
                        <?= $this->Form->input('poste', ['placeholder' => 'Poste', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Lona:</span>
                        <?= $this->Form->input('lona', ['placeholder' => 'Lona', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Fixação:</span>
                        <?= $this->Form->input('fixacao', ['placeholder' => 'Fixação', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Montagem:</span>
                        <?= $this->Form->input('montagem', ['placeholder' => 'Montagem', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Tampa:</span>
                        <?= $this->Form->input('tampa', ['placeholder' => 'Tampa', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Dobradiças:</span>
                        <?= $this->Form->input('dobradicas', ['placeholder' => 'Dobradiças', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Personalização:</span>
                        <?= $this->Form->input('personalizacao', ['placeholder' => 'Pesonalização', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Impressão:</span>
                        <?= $this->Form->input('impressao', ['placeholder' => 'Impressão', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Observação:</span>
                        <?= $this->Form->input('observacao', ['placeholder' => 'Observação', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Extrutura externa:</span>
                        <?= $this->Form->input('extruturaexterna', ['placeholder' => 'Extrutura Externa', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Tanque Interno:</span>
                        <?= $this->Form->input('tanqueinterno', ['placeholder' => 'Tanque interno', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Vedação:</span>
                        <?= $this->Form->input('vedacao', ['placeholder' => 'Vedação', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Pé da caixa:</span>
                        <?= $this->Form->input('pedacaixa', ['placeholder' => 'Pé da caixa', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Pegadores laterais:</span>
                        <?= $this->Form->input('pegadoreslaterais', ['placeholder' => 'Pegadores laterais', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Seleciona as imagens do produto</span>
                        <?= $this->Form->input('imgprodutos[].photo', ['type'=>'file','multiple'=>true,'placeholder' => 'Pegadores laterais', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>



                </label>

                <hr>


            </div>
            <?= $this->Form->button('Cadastrar', ['class' => 'ls-btn-primary webdesk-actions']) ?>
            <!--<button data-toggle-class="ls-display-none" class="ls-btn-primary webdesk-actions">Cadastrar</button> -->
            <!--</form> -->
            <?= $this->Form->end() ?>
        </div>
        <!--</div> -->
    </div>
</div>
