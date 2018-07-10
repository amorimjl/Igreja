<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Verse $verse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Verse'), ['action' => 'edit', $verse->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Verse'), ['action' => 'delete', $verse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $verse->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Verses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Verse'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="verses view large-9 medium-8 columns content">
    <h3><?= h($verse->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Verse') ?></th>
            <td><?= h($verse->verse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($verse->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($verse->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($verse->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($verse->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($verse->text)); ?>
    </div>
</div>
