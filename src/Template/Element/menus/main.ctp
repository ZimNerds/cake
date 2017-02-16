<?php if (!isset($menus) || empty($menus)) :
        $menus = $this->requestAction('/menus/index');
    endif;
    $menus = $this->requestAction('/menus/index');
    foreach($menus as $menu) :

    $link=  $this->Url->build([
        "controller" => $menu->controller,
        "action" => $menu->action

    ]);
   echo "<li class='menu-item'><a href='$link'>$menu->name </a></li>";
 endforeach; ?>
