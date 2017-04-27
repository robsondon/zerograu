<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subcategoria'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subcategorias index large-9 medium-8 columns content">
    <h3><?= __('Subcategorias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subcategoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subcategorias as $subcategoria): ?>
            <tr>
                <td><?= $this->Number->format($subcategoria->id) ?></td>
                <td><?= $subcategoria->has('categoria') ? $this->Html->link($subcategoria->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $subcategoria->categoria->id]) : '' ?></td>
                <td><?= h($subcategoria->subcategoria) ?></td>
                <td><?= h($subcategoria->slug) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subcategoria->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subcategoria->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subcategoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategoria->id)]) ?>
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
