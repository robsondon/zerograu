<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subcategorias'), ['controller' => 'Subcategorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcategoria'), ['controller' => 'Subcategorias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categorias view large-9 medium-8 columns content">
    <h3><?= h($categoria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= h($categoria->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($categoria->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoria->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Subcategorias') ?></h4>
        <?php if (!empty($categoria->subcategorias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col"><?= __('Subcategoria') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categoria->subcategorias as $subcategorias): ?>
            <tr>
                <td><?= h($subcategorias->id) ?></td>
                <td><?= h($subcategorias->categoria_id) ?></td>
                <td><?= h($subcategorias->subcategoria) ?></td>
                <td><?= h($subcategorias->slug) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Subcategorias', 'action' => 'view', $subcategorias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Subcategorias', 'action' => 'edit', $subcategorias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subcategorias', 'action' => 'delete', $subcategorias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategorias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
