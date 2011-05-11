<?php
// $Id$

/**
 * Implementation of hook_theme().
 */
function dyco_theme(&$existing, $type, $theme, $path) {
  $hooks = huddle_theme($existing, $type, $theme, $path);
  return $hooks;
}

function dyco_preprocess_page(&$vars) {
  $menu = menu_navigation_links("menu-mainmenu");
  $vars['mainmenu'] = $menu;
}