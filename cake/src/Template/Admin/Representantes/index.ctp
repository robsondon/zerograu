<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-home">Página Representantes</h1>

    <div class="ls-box-filter">
        <h2 class="ls-title-2">Representante<span style="font-size: calc(100% - 40%);"> / listagem</span></h2>

        <p>Adicione, edite e gerencie a exibição das informações relacionadas a está sessão do seu website.</p>

        <div class="ls-group-btn">
            <?= $this->Html->link('ADICIONAR', ['action' => 'add'], array('class' => 'ls-btn-primary ls-ico-plus')); ?>
            <?= $this->Html->link('LISTAR', ['action' => 'index'], array('class' => 'ls-btn ls-ico-list3')); ?>
        </div>

    </div>
    <!-- -->

    <table class="ls-table">
        <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Local</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($representantes as $representate): ?>
            <tr>
                <td>
                    <?= $this->Number->format($representate->id) ?>
                </td>

                <td> <?= h($representate->nome) ?> </td>
                <td> <?= h($representate->estado->nome) ?> </td>

                <td class="ls-txt-right ls-regroup">
                    <?= $this->Html->link('Visualizar','/', ['class' => 'ls-btn ls-btn-xs']); ?>

                    <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
                        <a href="#" class="ls-btn ls-btn-xs" role="combobox" aria-expanded="false"></a>
                        <ul class="ls-dropdown-nav" aria-hidden="true">

                            <li><?= $this->Html->link(__('Editar'), array('action' => 'edit', $this->Number->format($representate->id))); ?></li>

                            <!--<li><a href="#" class="ls-color-danger" role="option">Excluir nocake</a></li>-->

                            <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $representate->id], ['class' => 'ls-color-danger', 'role' => 'option', 'confirm' => __('Você tem certeza de que deseja excluir o registro: # {0}?', $representate->id)]) ?></li>

                            <!--<li><?php //echo $this->Form->postLink('Excluir postlink', array('action' => 'delete', $home['Home']['id']), null, 'Tem certeza de que deseja excluir o registro: '.$home['Home']['id'].'?', $home['Home']['id']); ?></li>-->

                        </ul>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>

        <!--
        <tr>
          <td>seudominio2.com.br</td>
          <td><span class="ls-word-dotted" data-ls-module="popover" data-title="Não Configurado" data-content="A configuração tem um tempo de até 24 horas para propagar após a inserção da entrada em seu gerenciador de DNS." data-placement="right" data-trigger="hover" data-custom-classes="ls-width-250">Não Configurado</span></td>
          <td class="ls-txt-right ls-regroup"><a href="#" class="ls-btn ls-btn-xs">Configurações do DNS</a>
            <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right"> <a href="#" class="ls-btn ls-btn-xs" role="combobox" aria-expanded="false"></a>
              <ul class="ls-dropdown-nav" aria-hidden="true">
                <li><a href="#" class="ls-color-danger" role="option">Excluir</a></li>
              </ul>
            </div></td>
        </tr>
        -->
        </tbody>
    </table>

    <div class="ls-pagination-filter">
        <ul class="ls-pagination">
            <li><?= $this->Paginator->prev('« ' . __('Anterior')) ?></li>

            <li class="ls-active"><?= $this->Paginator->numbers() ?></li>

            <li><?= $this->Paginator->next(__('Próximo') . ' »') ?></li>
        </ul>
        <div class="ls-filter-view">
            <label for="">
                Exibindo página <?= $this->Paginator->counter() ?>
            </label>
        </div>
    </div>

</div>
