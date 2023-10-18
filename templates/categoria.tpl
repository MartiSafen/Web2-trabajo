
    
    {include file="header.tpl"};
  
{include file="formAddCategoria.tpl"}
<table class="table">
  <thead>
    <tr>
    <th scope='col'>prenda_id</th>
    <th scope='col'>producto</th>
    <th scope='col'>tela</th>
    <th scope='col'>color</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$categoriabyid item=$categorias}
    <tr>
    <td>{$categorias->prenda_id}</td>
    <td>{$categorias->producto}</td>
    <td>{$categorias->tela}</td>
    <td>{$categorias->color}</td>
    <td ><a class="btn btn-secondary mt-0" href='detalle/{$categorias->productos}' type='button'>Detalle</a></td>
    {if $logged}
      <td ><a class="btn btn-danger mt-0" href='deleteCategoria/{$categorias->productos}' type='button'>Eliminar</a></td>
      <td ><a class="btn btn-success mt-0"   href='formEditCategoria/{$categorias->productos}' type='button'>Editar</a></td>
    {/if}
    
    </tr>
    {/foreach}
  </tbody>
</table>

   

{include file="footer.tpl"};
