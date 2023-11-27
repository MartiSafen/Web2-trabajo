{include file="header.tpl"}
<h5>Editar categorias</h5>
{foreach from= $categoriabyid item=$categorias}
<form action="formEditCategoria/{$categorias->prenda_id}" method="POST" class="form">
    <label>Producto</label>
        <input type="text"  name="producto" class="form-control" value="{$categorias->producto}">
    <label>tela</label>
        <input type="text"  name="tela" class="form-control"value="{$categorias->tela}">
        <label>color</label>
        <input type="text"  name="color" class="form-control"value="{$categorias->color}">
    <div class="mt-4">
    <button type="submit" class="btn btn-primary mt-2">Editar</a>
    </div>
</form>
</div>
{/foreach}

{include file="footer.tpl"};
