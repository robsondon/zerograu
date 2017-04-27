<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Celulars'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Representantes'), ['controller' => 'Representantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Representante'), ['controller' => 'Representantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="celulars form large-9 medium-8 columns content">
    <?= $this->Form->create($celular) ?>
    <fieldset>
        <legend><?= __('Add Celular') ?></legend>
        <?php
            echo $this->Form->input('numero');
            echo $this->Form->input('representantes._ids', ['options' => $representantes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
