{include file="header.tpl"}
{include file="js.tpl"}
{include file="nav.tpl"}
<div class="container-fluid">
<br>
<h4>Kontakt</h4>
<p>
Chętnie porozmawiam o książkach.<br>
Kontakt mile widziany!
</p>
{if isset($contactForm)}
<div class="alert alert-success" role="alert">
Witaj <strong>{$contactForm}</strong>!<br>Dziękuję za wiadomość!
</div>
{/if}
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
{include file="footer.tpl"}