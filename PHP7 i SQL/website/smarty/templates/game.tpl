{include file="header.tpl"}
{include file="js.tpl"}
{include file="nav.tpl"}
<div class="container-fluid">
<br>
<h4>Czas na relaks!</h4>
<p>Zapraszam Cię do zabawnej gry w wisielca.<br>
Czy uda Ci się odganąć tytuł książki z mojej kolekcji?</p>
<pre>
{$game.stage}
</pre>
{if $game.status == 1}
<p><strong>Co się tutaj ukrywa?<br>{$game.template|replace:'^':'&nbsp;'}</strong></p>
{if $game.entered != ''}<p>Sprawdziłeś już litery: <span style="letter-spacing: 5px;">{$game.entered}</span></p>{/if}
<form method="post" id="game" class="form-inline">
<div class="form-group">
<label for="letter">Podaj literę</label>
<input type="text" class="form-control mx-sm-3" name="letter" id="letter" minlength="1" maxlength="1" placeholder="" style="width: 3em;" required>
</div>
<div class="form-group">  
<button type="submit" name="game" class="btn btn-primary" disabled>Sprawdź</button>
</div>
<input type="hidden" name="page" value="game">
<input type="hidden" name="current" value="{$game.current}">
<input type="hidden" name="entered" value="{$game.entered}">
<input type="hidden" name="errors" value="{$game.errors}">
</form>
<script>
$(function() {
  $('#letter', '#game').on('input', function() {
    var letter = $(this).val();
    $('button[name="game"]', '#game').attr("disabled", (letter.length == 1) ? false : true); 
  });
});
</script>
{elseif $game.status == 2}
<div class="alert alert-success" role="alert">
<p>Brawo! Odgadłeś prawidłowo!<br>
Oczywiście, że chodziło o "<strong>{$game.text|replace:'^':' '}</strong>"</p>
<a href="?page=game" class="btn btn-primary btn-sm">Spróbuj jeszcze raz!</a>
</div>
{elseif $game.status == 3}
<div class="alert alert-danger" role="alert">
<p>Przykro mi, ale nie odgadłeś tytułu mojej książki ;(<br>
Chodziło o "<strong>{$game.text|replace:'^':' '}</strong>"</p>
<a href="?page=game" class="btn btn-primary btn-sm">Spróbuj jeszcze raz!</a>
</div>
{/if}
</div>
{include file="footer.tpl"}