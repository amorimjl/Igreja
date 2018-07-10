<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Novo Versículo'), ['controller' => 'Verses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Novo Evento'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>