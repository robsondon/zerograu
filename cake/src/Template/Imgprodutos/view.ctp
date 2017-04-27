<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imgproduto'), ['action' => 'edit', $imgproduto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imgproduto'), ['action' => 'delete', $imgproduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imgproduto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imgprodutos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imgproduto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imgprodutos view large-9 medium-8 columns content">
    <h3><?= h($imgproduto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Produto') ?></th>
            <td><?= $imgproduto->has('produto') ? $this->Html->link($imgproduto->produto->id, ['controller' => 'Produtos', 'action' => 'view', $imgproduto->produto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($imgproduto->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Dir') ?></th>
            <td><?= h($imgproduto->photo_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imgproduto->id) ?></td>
        </tr>
    </table>
</div>
