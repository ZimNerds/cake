<?php
    foreach($mainmenu as $menu) :
    $link=  $this->Url->build([
        "controller" => $menu->controller,
        "action" => $menu->action

    ]);
   echo "<li class='menu-item'><a href='$link'>$menu->name </a></li>";
 endforeach; ?>
