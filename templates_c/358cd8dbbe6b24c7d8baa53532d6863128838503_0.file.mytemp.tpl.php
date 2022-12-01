<?php
/* Smarty version 3.1.47, created on 2022-12-01 11:29:59
  from 'C:\xampp\htdocs\smarty-3.1.47\smartytest\templates\mytemp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63888227b0f312_96149631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '358cd8dbbe6b24c7d8baa53532d6863128838503' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-3.1.47\\smartytest\\templates\\mytemp.tpl',
      1 => 1669890598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63888227b0f312_96149631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\modifier.escape.php','function'=>'smarty_modifier_escape',),5=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),6=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),7=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),8=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'myconfig.conf', null, 0);
?>

<html>

<head>
    <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title');?>
</title>

    <style>
    </style>
</head>

<body>


    <p>Example of html checkboxes :</p>
<?php echo smarty_function_html_checkboxes(array('values'=>$_smarty_tpl->tpl_vars['check']->value,'output'=>$_smarty_tpl->tpl_vars['check']->value,'seperator'=>'<br/>'),$_smarty_tpl);?>

    <p>Example of html radios :</p>
    <?php echo smarty_function_html_radios(array('values'=>$_smarty_tpl->tpl_vars['radio']->value,'output'=>$_smarty_tpl->tpl_vars['radio']->value,'seperator'=>'<br/>'),$_smarty_tpl);?>




    <p>Example of html Counter :</p>
    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

    <p>Another Counter Below : </p>
    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

    <p>Example of html cycle :</p>
    <ul>
    <li class="<?php echo smarty_function_cycle(array('values'=>"green,yellow",'loop'=>1),$_smarty_tpl);?>
">List </li>
    </ul>


    <p>Example of Escape :</p>
    <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'mail');?>



    <p>Example of Concatenation :</p>
    str1=<?php echo $_smarty_tpl->tpl_vars['var1']->value;?>
<br>
    str2=<?php echo $_smarty_tpl->tpl_vars['var2']->value;?>
<br>
    
    <?php echo ($_smarty_tpl->tpl_vars['var1']->value).($_smarty_tpl->tpl_vars['var2']->value);?>




    <p>Example of Table 6 :</p>
   <?php
$_smarty_tpl->tpl_vars['new'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['new']->step = 1;$_smarty_tpl->tpl_vars['new']->total = (int) ceil(($_smarty_tpl->tpl_vars['new']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['new']->step));
if ($_smarty_tpl->tpl_vars['new']->total > 0) {
for ($_smarty_tpl->tpl_vars['new']->value = 1, $_smarty_tpl->tpl_vars['new']->iteration = 1;$_smarty_tpl->tpl_vars['new']->iteration <= $_smarty_tpl->tpl_vars['new']->total;$_smarty_tpl->tpl_vars['new']->value += $_smarty_tpl->tpl_vars['new']->step, $_smarty_tpl->tpl_vars['new']->iteration++) {
$_smarty_tpl->tpl_vars['new']->first = $_smarty_tpl->tpl_vars['new']->iteration === 1;$_smarty_tpl->tpl_vars['new']->last = $_smarty_tpl->tpl_vars['new']->iteration === $_smarty_tpl->tpl_vars['new']->total;?>
   <?php echo smarty_function_math(array('equation'=>"6*".((string)$_smarty_tpl->tpl_vars['new']->value)),$_smarty_tpl);?>
<br>
    <?php }
}
?>
    



    <p>Array proper :</p>
    
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'newdata');
$_smarty_tpl->tpl_vars['newdata']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['newdata']->value) {
$_smarty_tpl->tpl_vars['newdata']->do_else = false;
?>
    <?php echo print_r($_smarty_tpl->tpl_vars['newdata']->value);?>
<br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 

    <p>Perform on string : </p>
    <p>In Lower Case : </p>
    <?php echo mb_strtolower($_smarty_tpl->tpl_vars['string1']->value, 'UTF-8');?>
<br>
    <?php echo mb_strtolower($_smarty_tpl->tpl_vars['string2']->value, 'UTF-8');?>

    <p>Replacing : </p>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['string1']->value,'ucertify','uCertify');?>
 <br>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['string2']->value,'ucertify','uCertify');?>

    <p>Wraps : </p>
    <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['string1']->value,30,"\n",false);?>
 <br>
    <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['string2']->value,30,"\n",false);?>

    <p>Merge</p>
    <?php $_smarty_tpl->_assignInScope('merge', ((string)$_smarty_tpl->tpl_vars['string1']->value).((string)$_smarty_tpl->tpl_vars['string2']->value));?>
    <?php echo $_smarty_tpl->tpl_vars['merge']->value;?>


   
   <p>Print array in ul list:</p>
   <ul>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['our_culture']->value, 'culture');
$_smarty_tpl->tpl_vars['culture']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['culture']->value) {
$_smarty_tpl->tpl_vars['culture']->do_else = false;
?>
   <li><?php echo print_r($_smarty_tpl->tpl_vars['culture']->value);?>
</li>
   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </ul>


   <p>HTML selectbox:</p>
   <?php echo smarty_function_html_options(array('name'=>'box','options'=>$_smarty_tpl->tpl_vars['selectbx']->value,'selected'=>'2'),$_smarty_tpl);?>



   <p>Number operations on : <?php echo $_smarty_tpl->tpl_vars['num']->value;?>
 </p>
   rem:<br>
   <?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['num']->value)."%2"),$_smarty_tpl);?>
<br>
   <?php ob_start();
echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['num']->value)."%2"),$_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == '0') {?>
   num is even<br>
   <?php } else { ?>
   num is odd <br>
   <?php }?>
   table:<br>
   <?php
$_smarty_tpl->tpl_vars['new'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['new']->step = 1;$_smarty_tpl->tpl_vars['new']->total = (int) ceil(($_smarty_tpl->tpl_vars['new']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['new']->step));
if ($_smarty_tpl->tpl_vars['new']->total > 0) {
for ($_smarty_tpl->tpl_vars['new']->value = 1, $_smarty_tpl->tpl_vars['new']->iteration = 1;$_smarty_tpl->tpl_vars['new']->iteration <= $_smarty_tpl->tpl_vars['new']->total;$_smarty_tpl->tpl_vars['new']->value += $_smarty_tpl->tpl_vars['new']->step, $_smarty_tpl->tpl_vars['new']->iteration++) {
$_smarty_tpl->tpl_vars['new']->first = $_smarty_tpl->tpl_vars['new']->iteration === 1;$_smarty_tpl->tpl_vars['new']->last = $_smarty_tpl->tpl_vars['new']->iteration === $_smarty_tpl->tpl_vars['new']->total;?>
   <?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['num']->value)."*".((string)$_smarty_tpl->tpl_vars['new']->value)),$_smarty_tpl);?>
<br>
    <?php }
}
?>
   
    </body>
    <?php echo '<script'; ?>
>
        
    <?php echo '</script'; ?>
>

    </html><?php }
}
