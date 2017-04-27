<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Celular'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Representantes'), ['controller' => 'Representantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Representante'), ['controller' => 'Representantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="celulars index large-9 medium-8 columns content">
    <h3><?= __('Celulars') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($celulars as $celular): ?>
            <tr>
                <td><?= $this->Number->format($celular->id) ?></td>
                <td><?= h($celular->numero) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $celular->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $celular->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $celular->id], ['confirm' => __('Are you sure you want to delete # {0}?', $celular->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
