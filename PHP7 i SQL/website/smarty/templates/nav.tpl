<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<a class="navbar-brand" href="?page=start">BIBLIOTEKA <i class="fa fa-book"></i></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item {if $page == "books" || $page == "search"}active{/if}">
<a class="nav-link" href="?page=books">Książki</a>
</li>
<li class="nav-item {if $page == "register"}active{/if}">
<a class="nav-link" href="?page=register">Wypożyczenia</a>
</li>
<li class="nav-item {if $page == "about"}active{/if}">
<a class="nav-link" href="?page=about">O mnie</a>
</li>
<li class="nav-item {if $page == "contact"}active{/if}">
<a class="nav-link" href="?page=contact">Kontakt</a>
</li>
<li class="nav-item {if $page == "game"}active{/if}">
<a class="nav-link" href="?page=game">Gra</a>
</li>
</ul>
<form id="form" method="post" class="form-inline">
<input class="form-control mr-sm-2" type="search" name="search" placeholder="Szukaj" aria-label="Szukaj">
<button class="btn btn-outline-light my-2 my-sm-0" type="submit" disabled>Szukaj</button>
<input type="hidden" name="page" value="books">
</form>
</div>
</nav>