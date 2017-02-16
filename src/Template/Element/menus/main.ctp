<?php
    foreach($mainmenu as $menu) :
    $link=  $this->Url->build([
        "controller" => $menu->controller,
        "action" => $menu->action

    ]);
    if ($menu->parent_menu == 0){
   echo "<li class='menu-item'><a href='$link'>$menu->name </a></li>";
   }
 endforeach;?>
