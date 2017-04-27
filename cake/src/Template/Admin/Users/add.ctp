<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-home">Página Usuário</h1>

    <div class="ls-box-filter">
        <h2 class="ls-title-2">Admin <span style="font-size: calc(100% - 40%);"> /Userário</span></h2>

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
            <?= $this->Form->create($user, ['class' => 'ls-form', 'data-ls-module' => 'form', 'type' => 'file']) ?>
            <div id="webdesk-form">

                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Imagem tamanho 150x150:</span>
                        <?= $this->Form->input('thumb_file', ['type' => 'file', 'placeholder' => 'selecione o arquivo', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>

                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Username:</span>
                        <?= $this->Form->input('username', ['placeholder' => 'Insira o username', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>

                </label>

                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Senha:</span>
                        <?= $this->Form->input('password', ['placeholder' => 'informe a senha', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>
                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Nome:</span>
                        <?= $this->Form->input('nome', ['placeholder' => 'informe o nome do usuário', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
                    </div>
                </label>


                <label class="ls-label">
                    <div class="ls-prefix-group"><span class="ls-label-text-prefix">Email:</span>
                        <?= $this->Form->input('email', ['placeholder' => 'Digite o e-mail', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false]); ?>
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