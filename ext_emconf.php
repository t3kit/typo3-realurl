<?php

/*********************************************************************
* Extension configuration file for ext "realurl".
*
* Generated by ext 09-07-2018 16:31 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Speaking URLs for TYPO3',
  'description' => 'Makes TYPO3 URLs search engine friendly. Donations are welcome to dmitry.dulepov@gmail.com. They help to support the extension!',
  'category' => 'services',
  'version' => '2.4.0',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'modify_tables' => 'pages,pages_language_overlay',
  'clearcacheonload' => 1,
  'author' => 'Dmitry Dulepov',
  'author_email' => 'dmitry.dulepov@gmail.com',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.2.0-9.9.999',
      'php' => '5.4.0-7.2.999',
      'scheduler' => '6.2.0-9.5.999',
    ),
    'conflicts' => 
    array (
      'cooluri' => '',
      'simulatestatic' => '',
    ),
    'suggests' => 
    array (
      'static_info_tables' => '6.2.0-',
      'typo3db_legacy' => '1.0.0-1.0.99',
    ),
  ),
  'comment' => 'Stability improvements. More functions are available for hook developers.',
  'user' => 'dmitry',
);

?>
