<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<<<<<<< HEAD
    <div class="nav-wrapper">
    <nav class="top-bar expanded  large-3 medium-4 columns" data-topbar role="navigation">
        <ul class="title-area">
=======
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
>>>>>>> 819c5ec324ad4a24a8dbf1d428b2c0566550d89c
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        </nav>
        <nav class ="top-bar expanded  large-6 medium-4 columns" data-topbar role="navigation">
             <ul class="nav left clearfix ">
                    	<li class="active"><a href="#">Home</a></li>
                    	<li><a href="#about">About</a></li>
                    	<li><a href="#contact">Contact</a></li>
                    	<li class="dropdown">
                    		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    		<ul class="dropdown-menu sub-menu">
                    			<li><a href="#">Action</a></li>
                    			<li><a href="#">Another action</a></li>
                    			<li><a href="#">Something else here</a></li>
                    			<li class="divider"></li>
                    			<li class="nav-header">Nav header</li>
                    			<li><a href="#">Separated link</a></li>
                    			<li><a href="#">One more separated link</a></li>
                    		</ul>
                    	</li>
                    </ul>
        </nav>

         <nav class="top-bar expanded  large-3 medium-4 columns" data-topbar role="navigation">
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>
<<<<<<< HEAD


    </div>
=======
>>>>>>> 819c5ec324ad4a24a8dbf1d428b2c0566550d89c
    <?= $this->Flash->render() ?>
    <div class="container clearfix">

        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
