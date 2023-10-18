{include file="header.tpl"}
<h5>Editar items</h5>
{foreach from=$productsbyid item=$productos}
<form action="formEdit/{$productos->id}" method="POST" class="form">
    <label>Prenda_id</label>
        <input type="text"  name="prenda_id" class="form-control"value="{$productos->prenda_id}">
    <label>id_compra</label>
        <input type="text"  name="id_compra" class="form-control" value="{$productos->id_compra}">
    <label>talle</label>
        <input type="text" name="talle" class="form-control" value="{$productos->talle}">
     <label>hora</label>
        <input type="text" name="hora" class="form-control"value="{$productos->hora}">
     <label>vendedor</label>
        <input type="text" name="vendedor" class="form-control" value="{$productos->vendedor}">
    <div class="mt-4">
    <button type="submit" class="btn btn-primary mt-2">Editar</a>
    </div>
</form>
</div>
{/foreach}
{include file="footer.tpl"};

