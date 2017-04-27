<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-home">Página Representantes</h1>

    <div class="ls-box-filter">
        <h2 class="ls-title-2">Admin <span style="font-size: calc(100% - 40%);"> /Representantes</span></h2>

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
            <?= $this->Form->create($representante, ['class' => 'ls-form', 'data-ls-module' => 'form', 'type' => 'file']) ?>
            <div id="webdesk-form">


                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Nome do Representante:</span>
                        <?= $this->Form->input('nome', ['placeholder' => 'Insira o nome', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>

                </label>

                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Local de Atuação:</span>
                        <?= $this->Form->input('atuacao', ['placeholder' => 'informe o local de atuação', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Estado:</span>
                        <?= $this->Form->input('estado_id', ['placeholder' => 'informe o estado do representante', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>


                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Selecione o Celular: (obs: caso nas esteja cadastro aqui deixe em branco)</span>
                        <?= $this->Form->input('celulars._ids', ['options' => $celulars,'placeholder' => 'Digite o e-mail', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Selecione o Email: (obs: caso nas esteja cadastro aqui deixe em branco)</span>
                        <?= $this->Form->input('emails._ids', ['options' => $emails,'placeholder' => 'Digite o e-mail', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
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
