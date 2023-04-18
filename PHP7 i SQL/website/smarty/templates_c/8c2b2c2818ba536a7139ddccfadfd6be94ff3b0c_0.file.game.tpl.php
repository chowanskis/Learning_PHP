<?php
/* Smarty version 3.1.33, created on 2023-04-02 08:46:38
  from '/var/www/html/website/smarty/templates/game.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_642940ee8fbe75_42786370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c2b2c2818ba536a7139ddccfadfd6be94ff3b0c' => 
    array (
      0 => '/var/www/html/website/smarty/templates/game.tpl',
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
function content_642940ee8fbe75_42786370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/website/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
<br>
<h4>Czas na relaks!</h4>
<p>Zapraszam Cię do zabawnej gry w wisielca.<br>
Czy uda Ci się odganąć tytuł książki z mojej kolekcji?</p>
<pre>
<?php echo $_smarty_tpl->tpl_vars['game']->value['stage'];?>

</pre>
<?php if ($_smarty_tpl->tpl_vars['game']->value['status'] == 1) {?>
<p><strong>Co się tutaj ukrywa?<br><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['game']->value['template'],'^','&nbsp;');?>
</strong></p>
<?php if ($_smarty_tpl->tpl_vars['game']->value['entered'] != '') {?><p>Sprawdziłeś już litery: <span style="letter-spacing: 5px;"><?php echo $_smarty_tpl->tpl_vars['game']->value['entered'];?>
</span></p><?php }?>
<form method="post" id="game" class="form-inline">
<div class="form-group">
<label for="letter">Podaj literę</label>
<input type="text" class="form-control mx-sm-3" name="letter" id="letter" minlength="1" maxlength="1" placeholder="" style="width: 3em;" required>
</div>
<div class="form-group">  
<button type="submit" name="game" class="btn btn-primary" disabled>Sprawdź</button>
</div>
<input type="hidden" name="page" value="game">
<input type="hidden" name="current" value="<?php echo $_smarty_tpl->tpl_vars['game']->value['current'];?>
">
<input type="hidden" name="entered" value="<?php echo $_smarty_tpl->tpl_vars['game']->value['entered'];?>
">
<input type="hidden" name="errors" value="<?php echo $_smarty_tpl->tpl_vars['game']->value['errors'];?>
">
</form>
<?php echo '<script'; ?>
>
$(function() {
  $('#letter', '#game').on('input', function() {
    var letter = $(this).val();
    $('button[name="game"]', '#game').attr("disabled", (letter.length == 1) ? false : true); 
  });
});
<?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['game']->value['status'] == 2) {?>
<div class="alert alert-success" role="alert">
<p>Brawo! Odgadłeś prawidłowo!<br>
Oczywiście, że chodziło o "<strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['game']->value['text'],'^',' ');?>
</strong>"</p>
<a href="?page=game" class="btn btn-primary btn-sm">Spróbuj jeszcze raz!</a>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['game']->value['status'] == 3) {?>
<div class="alert alert-danger" role="alert">
<p>Przykro mi, ale nie odgadłeś tytułu mojej książki ;(<br>
Chodziło o "<strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['game']->value['text'],'^',' ');?>
</strong>"</p>
<a href="?page=game" class="btn btn-primary btn-sm">Spróbuj jeszcze raz!</a>
</div>
<?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
