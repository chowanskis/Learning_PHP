<?php
/* Smarty version 3.1.33, created on 2023-04-02 08:46:37
  from '/var/www/html/website/smarty/templates/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_642940ed969851_44866933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f31db318851377fbef77bc6c8613b96135ee646' => 
    array (
      0 => '/var/www/html/website/smarty/templates/contact.tpl',
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
function content_642940ed969851_44866933 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
<br>
<h4>Kontakt</h4>
<p>
Chętnie porozmawiam o książkach.<br>
Kontakt mile widziany!
</p>
<?php if (isset($_smarty_tpl->tpl_vars['contactForm']->value)) {?>
<div class="alert alert-success" role="alert">
Witaj <strong><?php echo $_smarty_tpl->tpl_vars['contactForm']->value;?>
</strong>!<br>Dziękuję za wiadomość!
</div>
<?php }?>
<p>
<a class="btn btn-primary" data-toggle="collapse" href="#contactForm" role="button" aria-expanded="false" aria-controls="contactForm">Formularz kontaktowy</a>
</p>
<form method="post" id="contactForm" class="collapse multi-collapse">
<div class="form-group">
<label for="name">Twoje imię</label>
<input type="text" class="form-control" name="name" id="name" placeholder="Miś Koala" required>
</div>
<div class="form-group">
<label for="email">Twój adres e-mail</label>
<input type="email" class="form-control" name="email" id="email" placeholder="mis.koala@jakis-adres.pl" required>
</div>
<div class="form-group">
<label for="message">Wiadomość</label>
<textarea class="form-control" name="message" id="message" rows="4" placeholder="Napisz coś do mnie ;)" required></textarea>
</div>
<div class="form-group">  
<button type="submit" name="contactForm" class="btn btn-primary">Wyślij</button>
</div>
<input type="hidden" name="page" value="contact">
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
