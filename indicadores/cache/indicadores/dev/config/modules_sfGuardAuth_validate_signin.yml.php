<?php
// auto-generated by sfValidatorConfigHandler
// date: 2010/07/19 22:01:59

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
  $validators = array();
  $context->getRequest()->setAttribute('fillin', array (
), 'symfony/filter');
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $validators = array();
  $validators['userValidator'] = new sfGuardUserValidator();
  $validators['userValidator']->initialize($context, array (
  'password_field' => 'password',
  'remember_field' => 'remember',
));
  $validatorManager->registerName('username', 1, 'Your username is required', null, null, false);
  $validatorManager->registerValidator('username', $validators['userValidator'], null);
  $validatorManager->registerName('password', 1, 'Your password is required', null, null, false);
  $context->getRequest()->setAttribute('fillin', array (
), 'symfony/filter');
}
