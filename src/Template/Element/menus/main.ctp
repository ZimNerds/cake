<?php
use Cake\ORM\TableRegistry;
 $menus = TableRegistry::get('Menus');
if($menus){
    foreach($menus as $menu) :

    $link=  $this->Url->build([
        "controller" => $menu->controller,
        "action" => $menu->action

    ]);
   echo "<li class='menu-item'><a href='$link'>$menu->name </a></li>";
   } else{
   echo "Bull";}
 endforeach; ?>
