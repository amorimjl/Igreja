<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Verse[]|\Cake\Collection\CollectionInterface $verses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Verse'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="verses index large-9 medium-8 columns content">
    <h3><?= __('Verses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('verse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($verses as $verse): ?>
            <tr>
                <td><?= $this->Number->format($verse->id) ?></td>
                <td><?= h($verse->verse) ?></td>
                <td><?= h($verse->date) ?></td>
                <td><?= h($verse->created) ?></td>
                <td><?= h($verse->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $verse->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $verse->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $verse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $verse->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
