<?php
    foreach($mainmenu as $menu) :
    $link=  $this->Url->build([
        "controller" => $menu->controller,
        "action" => $menu->action

    ]);
    if ($menu->parent_menu == 0){
   echo "<li class='menu-item'><a href='$link'>$menu->name </a></li>";

  echo"<ul>";
  foreach($mainmenu as $submenu) :
      $link=  $this->Url->build([
          "controller" => $menu->controller,
          "action" => $menu->action

      ]);

      if ($submenu->parent_menu != 0 && $submenu->parent_menu = $menu->id ){
         echo "<li class='menu-item'><a href='$link'>$submenu->name </a></li>";




   }


 endforeach;?>
 echo"</ul>";
  endforeach;?>
