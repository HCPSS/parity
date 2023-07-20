<?php

use Drupal\Core\Form\FormStateInterface;
use Drupal\system\Entity\Menu;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function parity_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  if (\Drupal::moduleHandler()->moduleExists('menu_ui')) {
    // Get all menus.
    $menus = array_map(function ($menu) { return $menu->label(); }, Menu::loadMultiple());
    asort($menus);
  }
  else {
    $menus = [];
  }

  $form['general'] = [
    '#type' => 'details',
    '#title' => t('Parity general settings'),
    '#description' => t('Contains general settings, blocks, etc.'),
    '#group' => 'parity',
    '#tree' => TRUE,
  ];


  // Define some system menus manual.
  // If we use dynamic, on install setting defaults will fail.
  $form['general']['branding_menu'] = [
    '#type' => 'select',
    '#title' => t('Parity Branding Menu'),
    '#description' => t('Select which menu will be used as the menu in the branding block.'),
    '#options' => [
        'none' => t('None'),
        'main' => t('Main navigation'),
        'footer' => t('Footer'),
        'account' => t('User account menu'),
      ] + $menus,
    '#default_value' => theme_get_setting('general.branding_menu'),
  ];
}
