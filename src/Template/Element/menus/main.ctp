<?php
echo "<ul class='left'>";"
    foreach($mainmenu as $menu) {
    $link=  $this->Url->build([
        "controller" => $menu->controller,
        "action" => $menu->action

    ]);
    if ($menu->parent_menu == 0){
   echo "<li class='menu-item'><a href='$link'>$menu->name </a>";

  echo"<ul class='sub_menu child'>";
  foreach($submainmenu as $submenu) {
  if($submenu->parent_menu != 0){
      $link=  $this->Url->build([
          "controller" => $submenu->controller,
          "action" => $submenu->action

      ]);

      if ($submenu->parent_menu == $menu->id ){
         echo "<li class='sub_menu-item child'><a href='$link'>$submenu->name </a></li>";

   }
   }
   }
 }
 echo"</ul></li>";
  }

  echo "</ul>";?>
