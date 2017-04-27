<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estado->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estado->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estados form large-9 medium-8 columns content">
    <?= $this->Form->create($estado) ?>
    <fieldset>
        <legend><?= __('Edit Estado') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('sigla');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
