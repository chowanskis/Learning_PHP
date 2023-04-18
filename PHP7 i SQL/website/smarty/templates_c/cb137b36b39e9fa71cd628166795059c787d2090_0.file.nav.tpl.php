<?php
/* Smarty version 3.1.33, created on 2023-04-02 08:36:51
  from '/var/www/html/website/smarty/templates/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64293ea3662d81_72994172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb137b36b39e9fa71cd628166795059c787d2090' => 
    array (
      0 => '/var/www/html/website/smarty/templates/nav.tpl',
      1 => 1561399200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64293ea3662d81_72994172 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<a class="navbar-brand" href="?page=start">BIBLIOTEKA <i class="fa fa-book"></i></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['page']->value == "books" || $_smarty_tpl->tpl_vars['page']->value == "search") {?>active<?php }?>">
<a class="nav-link" href="?page=books">Książki</a>
</li>
<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['page']->value == "register") {?>active<?php }?>">
<a class="nav-link" href="?page=register">Wypożyczenia</a>
</li>
<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['page']->value == "about") {?>active<?php }?>">
<a class="nav-link" href="?page=about">O mnie</a>
</li>
<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['page']->value == "contact") {?>active<?php }?>">
<a class="nav-link" href="?page=contact">Kontakt</a>
</li>
<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['page']->value == "game") {?>active<?php }?>">
<a class="nav-link" href="?page=game">Gra</a>
</li>
</ul>
<form id="form" method="post" class="form-inline">
<input class="form-control mr-sm-2" type="search" name="search" placeholder="Szukaj" aria-label="Szukaj">
<button class="btn btn-outline-light my-2 my-sm-0" type="submit" disabled>Szukaj</button>
<input type="hidden" name="page" value="books">
</form>
</div>
</nav><?php }
}
