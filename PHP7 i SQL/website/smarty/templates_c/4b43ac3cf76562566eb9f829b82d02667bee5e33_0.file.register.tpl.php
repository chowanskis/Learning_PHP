<?php
/* Smarty version 3.1.33, created on 2023-04-02 08:46:35
  from '/var/www/html/website/smarty/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_642940eb954166_33951903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b43ac3cf76562566eb9f829b82d02667bee5e33' => 
    array (
      0 => '/var/www/html/website/smarty/templates/register.tpl',
      1 => 1561399200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:js.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_642940eb954166_33951903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
<br>
<h4>Rejestr wszystkich wypożyczeń</h4>
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Data</th>
<th scope="col">Tytuł książki</th>
<th scope="col">Wypożyczający</th>
</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['register']->value, 'record', false, NULL, 'register', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['record']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_register']->value['iteration']++;
?>
<tr>
<td scope="row"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_register']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_register']->value['iteration'] : null);?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['record']->value['date'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['record']->value['title'];?>
 <?php if ($_smarty_tpl->tpl_vars['record']->value['year'] == date('Y')) {?><span class="badge badge-primary">Nowość!</span><?php }?></td>
<td><?php echo $_smarty_tpl->tpl_vars['record']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value['surname'];?>
</td>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
</tbody>
</table>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
