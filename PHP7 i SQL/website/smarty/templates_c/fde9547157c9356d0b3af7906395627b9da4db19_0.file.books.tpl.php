<?php
/* Smarty version 3.1.33, created on 2023-04-02 08:46:34
  from '/var/www/html/website/smarty/templates/books.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_642940ea7bc0d4_95635429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fde9547157c9356d0b3af7906395627b9da4db19' => 
    array (
      0 => '/var/www/html/website/smarty/templates/books.tpl',
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
function content_642940ea7bc0d4_95635429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
<br>
<h4>Mój zbiór książek</h4>
<?php if ($_smarty_tpl->tpl_vars['search']->value != '') {?>
<h6>Szukana fraza: <?php echo $_smarty_tpl->tpl_vars['search']->value;?>
</h6>
<?php }?>
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Autor</th>
<th scope="col">Tytuł</th>
<th scope="col">Rok</th>
<th scope="col">Stron</th>
</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book', false, NULL, 'books', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_books']->value['iteration']++;
?>
<tr>
<td scope="row"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_books']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_books']->value['iteration'] : null);?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['book']->value['author'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['book']->value['title'];?>
 <?php if ($_smarty_tpl->tpl_vars['book']->value['year'] == date('Y')) {?><span class="badge badge-primary">Nowość!</span><?php }?></td>
<td><?php echo $_smarty_tpl->tpl_vars['book']->value['year'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['book']->value['pages'];?>
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
