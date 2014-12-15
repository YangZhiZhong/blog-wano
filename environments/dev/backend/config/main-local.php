<?php

$config = [
  'components' => [
    'request' => [
      'cookieValidationKey' => 'PpAw04WgWYAiZqlCyjmbQG-YYCrdQIlZ',
    ],
  ],
];

if (!YII_ENV_TEST) {
  $config['bootstrap'][] = 'debug';
  $config['modules']['debug'] = 'yii\debug\Module';

  $config['bootstrap'][] = 'gii';
  $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
