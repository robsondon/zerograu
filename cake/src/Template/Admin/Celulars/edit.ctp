<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $celular->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $celular->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Celulars'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Representantes'), ['controller' => 'Representantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Representante'), ['controller' => 'Representantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="celulars form large-9 medium-8 columns content">
    <?= $this->Form->create($celular) ?>
    <fieldset>
        <legend><?= __('Edit Celular') ?></legend>
        <?php
            echo $this->Form->input('numero');
            echo $this->Form->input('representantes._ids', ['options' => $representantes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
