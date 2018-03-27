<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'We move stuff for you...';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>
    <?= $this->Html->css('canner.css') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">
<style>
a {
	border: 4px solid black;
	padding: 8px;
}
</style>
<header class="row">
    <div class="header-title">
        <h1>
        <?= $this->Html->link(__('New Canner?'), ['controller' => 'canners', 'action' => 'add']) ?>
        <?= $this->Html->link(__('Find Your Canner?'), ['controller' => 'owners', 'action' => 'add']) ?>
        <?= $this->Html->link(__('Returning Canner?'), '/Canners/entry') ?>
        <?= $this->Html->link(__('Returning Owner?'), '/Owners/entry') ?>
        </h1>
    </div>

    <div class="header-image"><?= $this->Html->image('garbage001.jpg') ?></div>
</header>

<div class="row">
</div>

<div class="row">
</div>

<div class="row">
</div>

<div class="row">
</div>

<div class="row">
</div>

</body>
</html>
