<?php

function libhours_admin_settings() {
  $form['libhours_user'] = array(
    '#title' => t('Google account'),
    '#type' => 'textfield',
    '#description' => t('Your Google account.'),
    '#default_value' => variable_get('libhours_user', '')
  );
  $form['libhours_pass'] = array(
    '#title' => t('Google password'),
    '#type' => 'password',
    '#description' => t('Your Google account password'),
    '#default_value' => variable_get('libhours_pass', '')
  );
  $form['libhours_id'] = array(
    '#title' => t('Calendar ID'),
    '#type' => 'textfield',
    '#description' => t('Enter your publicly shared Google Calendar ID here.'),
    '#default_value' => variable_get('libhours_id', '')
  );
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Submit')
  );
  return $form;
}

function libhours_admin_settings_submit($form, &$form_state) {
  variable_set('libhours_user', $form_state['values']['libhours_user']);
  variable_set('libhours_pass', $form_state['values']['libhours_pass']);
  variable_set('libhours_id', $form_state['values']['libhours_id']);
}