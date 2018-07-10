<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Verse $verse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Verses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="verses form large-9 medium-8 columns content">
    <?= $this->Form->create($verse) ?>
    <fieldset>
        <legend><?= __('Add Verse') ?></legend>
        <?php
            echo $this->Form->control('verse');
            echo $this->Form->control('text');
            echo $this->Form->control('date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
