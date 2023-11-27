
{if $logged}
    <form class="form" action="addCategoria" method="POST">
    <div class="mb-3">
    <label class="form-label">prenda_id</label>
    <input type="text" name="prenda_id" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label">producto</label>
    <input type="text" name="producto" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label">tela</label>
    <input type="text" name="tela" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label" >color</label>
    <input type="text" name="color" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Insertar</button>
    </form>
    {/if}
