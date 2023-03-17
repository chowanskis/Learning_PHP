{include file="header.tpl"}
{include file="js.tpl"}
{include file="nav.tpl"}
<div class="container-fluid">
<br>
<h4>Mój zbiór książek</h4>
{if $search != ''}
<h6>Szukana fraza: {$search}</h6>
{/if}
{* tabela z książkami *}
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
{foreach item=book name=books from=$books}
<tr>
<td scope="row">{$smarty.foreach.books.iteration}</td>
<td>{$book.author}</td>
<td>{$book.title} {if $book.year == 'Y'|date}<span class="badge badge-primary">Nowość!</span>{/if}</td>
<td>{$book.year}</td>
<td>{$book.pages}</td>
</tr>
{/foreach}  
</tbody>
</table>
</div>
{include file="footer.tpl"}