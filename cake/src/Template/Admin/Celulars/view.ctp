<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Celular'), ['action' => 'edit', $celular->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Celular'), ['action' => 'delete', $celular->id], ['confirm' => __('Are you sure you want to delete # {0}?', $celular->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Celulars'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Celular'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Representantes'), ['controller' => 'Representantes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Representante'), ['controller' => 'Representantes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="celulars view large-9 medium-8 columns content">
    <h3><?= h($celular->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($celular->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($celular->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Representantes') ?></h4>
        <?php if (!empty($celular->representantes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Atuacao') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($celular->representantes as $representantes): ?>
            <tr>
                <td><?= h($representantes->id) ?></td>
                <td><?= h($representantes->nome) ?></td>
                <td><?= h($representantes->atuacao) ?></td>
                <td><?= h($representantes->estado_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Representantes', 'action' => 'view', $representantes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Representantes', 'action' => 'edit', $representantes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Representantes', 'action' => 'delete', $representantes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $representantes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
