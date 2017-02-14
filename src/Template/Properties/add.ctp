<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Properties'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Units'), ['controller' => 'Units', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unit'), ['controller' => 'Units', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="properties form large-9 medium-8 columns content">
    <?= $this->Form->create($property,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Property') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('type_id', ['options' => $types]);
            echo $this->Form->input('number_of_units');
            echo $this->Form->input('photo',['type' => 'file']);
            echo $this->Form->input('owner_id', ['options' => $owners, 'empty' => true]);
            echo $this->Form->input('operating_account');
            echo $this->Form->input('property_reserve');
            echo $this->Form->input('lease_term');
            echo $this->Form->input('country_id', ['options' => $countries, 'empty' => true, 'class'=>'country','limit'=>500]);
            echo $this->Form->input('address');
            ?>
            <div id="state">
            </div>
               <div id="city">
               </div>
<?php
            echo $this->Form->input('zip');?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script>$("select.state").change(function(){
            alert( "Handler for .change() called." );
            var selectedState = $(".state option:selected").val();
            if (selectedState){
                $.ajax({
                    type: "POST",
                    url: " http://cake.zimnerds.com/properties/getcity",
                    data: { state : selectedState }
                }).done(function(html){
                    $("#city").html(html);

                });
            }
        });<script>
