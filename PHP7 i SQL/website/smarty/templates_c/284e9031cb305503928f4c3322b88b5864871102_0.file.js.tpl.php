<?php
/* Smarty version 3.1.33, created on 2023-04-02 08:36:51
  from '/var/www/html/website/smarty/templates/js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64293ea365bae5_14806746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '284e9031cb305503928f4c3322b88b5864871102' => 
    array (
      0 => '/var/www/html/website/smarty/templates/js.tpl',
      1 => 1561399200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64293ea365bae5_14806746 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function() {
  $('input:first', '#form').on('input', function() {
    var msg = $(this).val();
    $('button:first', '#form').attr("disabled", (msg.length > 0) ? false : true); 
  });
});
<?php echo '</script'; ?>
><?php }
}
