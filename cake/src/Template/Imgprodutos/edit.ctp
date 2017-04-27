<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $imgproduto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $imgproduto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Imgprodutos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imgprodutos form large-9 medium-8 columns content">
    <?= $this->Form->create($imgproduto) ?>
    <fieldset>
        <legend><?= __('Edit Imgproduto') ?></legend>
        <?php
            echo $this->Form->input('produto_id', ['options' => $produtos, 'empty' => true]);
            echo $this->Form->input('photo');
            echo $this->Form->input('photo_dir');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
