<?php
include('../libs/Smarty.class.php');
include('../libs/SmartyBC.class.php');

// create object
$smarty = new Smarty;
$smarty = new SmartyBC;

$smarty->debugging = false;
$smarty->auto_literal = true;

$smarty->assign('check', array('10', '20', '30'));
$smarty->assign('radio', array('Abdul', 'Rehman', 'uCertify'));
$smarty->assign('email', 'abdul.rehman@ucertify.com');
$smarty->assign('var1', 'hello');
$smarty->assign('var2', 'wrold');
$smarty->assign(
  'data',
  array(
    'fax' => '555-222-9876',
    'email' => 'megha@ucertify.com',
    'phone' => array(
      'home' => '555-444-3333',
      'cell' => '555-111-1234'
    )
  ),
  array(
    'fax' => '555-222-8876',
    'email' => 'pete.gupta@ucertify.com',
    'phone' => array(
      'home' => '555-444-8888',
      'cell' => '555-111-9999'
    )
  ));
$smarty->assign('string1', 'uCertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels.
');
$smarty->assign('string2', 'At uCertify, we believe that assessments are the key to both engaging learners and effective, focused learning.');

$smarty->assign('our_culture',array(
  array(
    "point_one" => "To be the best in the world.",
  ),
  array(
    "point_two" => "We produce results.",
  ),
  array(
    "point_three" => "We keep our word - We do what we say we will do.",
  ),
  array(
    "point_four" => "Coach, mentor and help the team grow."
  )
));
$smarty->assign('selectbx', array(1, 2, 34, 5));
$smarty->assign('num', 11);


$smarty->display('templates/mytemp.tpl');
?>