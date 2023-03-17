{include file="header.tpl"}
{include file="js.tpl"}
{include file="nav.tpl"}
<div class="container-fluid">
<br>
<h4>Rejestr wszystkich wypożyczeń</h4>
{* tabela z wypożyczeniami *}
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
{foreach item=record name=register from=$register}
<tr>
<td scope="row">{$smarty.foreach.register.iteration}</td>
<td>{$record.date}</td>
<td>{$record.title} {if $record.year == 'Y'|date}<span class="badge badge-primary">Nowość!</span>{/if}</td>
<td>{$record.name} {$record.surname}</td>
</tr>
{/foreach}  
</tbody>
</table>
</div>
{include file="footer.tpl"}