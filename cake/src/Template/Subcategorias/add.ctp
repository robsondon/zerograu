<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Subcategorias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subcategorias form large-9 medium-8 columns content">
    <?= $this->Form->create($subcategoria) ?>
    <fieldset>
        <legend><?= __('Add Subcategoria') ?></legend>
        <?php
            echo $this->Form->input('categoria_id', ['options' => $categorias, 'empty' => true]);
            echo $this->Form->input('subcategoria');
            echo $this->Form->input('slug');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
