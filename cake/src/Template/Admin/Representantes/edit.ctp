<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $representante->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $representante->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Representantes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Celulars'), ['controller' => 'Celulars', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Celular'), ['controller' => 'Celulars', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="representantes form large-9 medium-8 columns content">
    <?= $this->Form->create($representante) ?>
    <fieldset>
        <legend><?= __('Edit Representante') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('atuacao');
            echo $this->Form->input('estado_id', ['options' => $estados, 'empty' => true]);
            echo $this->Form->input('celulars._ids', ['options' => $celulars]);
            echo $this->Form->input('emails._ids', ['options' => $emails]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
