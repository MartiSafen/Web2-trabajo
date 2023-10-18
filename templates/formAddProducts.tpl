{include file="header.tpl"};

{if $logged}
    <form class="form" action="add" method="POST">
    <div class="mb-3">
    <label class="form-label">id_compra</label>
    <input type="text" name="id_compra" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label">talle</label>
    <input type="text" name="talle" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label" >hora</label>
    <input type="text" name="hora" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label">vendedor</label>
    <input type="text" name="vendedor" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Insertar</button>
    </form>
    {/if}
    {include file="footer.tpl"};
