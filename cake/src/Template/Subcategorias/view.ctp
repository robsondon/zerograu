<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subcategoria'), ['action' => 'edit', $subcategoria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subcategoria'), ['action' => 'delete', $subcategoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategoria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subcategorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcategoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subcategorias view large-9 medium-8 columns content">
    <h3><?= h($subcategoria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $subcategoria->has('categoria') ? $this->Html->link($subcategoria->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $subcategoria->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subcategoria') ?></th>
            <td><?= h($subcategoria->subcategoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($subcategoria->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subcategoria->id) ?></td>
        </tr>
    </table>
</div>
