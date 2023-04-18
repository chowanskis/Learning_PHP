<?php
/* Smarty version 3.1.33, created on 2023-04-02 08:36:51
  from '/var/www/html/website/smarty/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64293ea36514e7_61084724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91205193473a12a1cb17850ee4f0be0e0139ba77' => 
    array (
      0 => '/var/www/html/website/smarty/templates/index.tpl',
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
function content_64293ea36514e7_61084724 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
<br>
<h4>Witaj internetowy podróżniku!</h4>
<p>
Cieszę się, że odwiedziłeś moją biblioteczkę.<br>
Książki to <a href="?page=about">moja pasja</a>, uwielbiam czytać!
</p>
<p>
Możesz zobaczyć mój zbiór <a href="?page=books">książek</a> i rejestr wszystkich <a href="?page=register">wypożyczeń</a>.<br>
<a href="?page=contact">Skontaktuj się</a> ze mną, jeśli chciałbyś coś wypożyczyć. 
</p>  
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
