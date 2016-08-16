<?php

namespace Drupal\process_text\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class CustomTextSettingForm.
 *
 * @package Drupal\process_text\Form
 */
class CustomTextSettingForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'process_text.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'custom_text_setting_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('process_text.settings');
    $form['custom_text'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Custom Text'),
      '#default_value' => $config->get('custom_text'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('process_text.settings')
      ->set('custom_text', $form_state->getValue('custom_text'))
      ->save();
    $form_state->setRedirect('process_text.show');
  }

}
