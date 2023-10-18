
    {include file="header.tpl"};
    <table class="table">
    <thead>
      <tr>
      <th scope='col'>id</th>
      <th scope='col'>Id-Compra</th>
      <th scope='col'>talle</th>
      <th scope='col'>hora</th>
      <th scope='col'>vendedor</th>
      <th scope='col'></th>
      <th scope='col'></th>
      <th scope='col'></th>
      </tr>
    </thead>
    <tbody>
    {foreach from=$productosbyid item=$productos}
      <tr>
      <td>{$productos->id}</td>
      <td>{$productos->id_compra}</td>
      <td>{$productos->talle}</td>
      <td>{$productos->hora}</td>
      <td>{$productos->vendedor}</td>
      <td ><a class="btn btn-secondary mt-0" href='detalle/{$productos->id}' type='button'>Detalle</a></td>
      {if $logged}
      <td ><a class="btn btn-danger mt-0" href='delete/{$productos->id}' type='button'>Eliminar</a></td>
      <td ><a class="btn btn-success mt-0"   href='formEdit/{$productos->id}' type='button'>Editar</a></td>
    {/if}
    
      </tr>
      {/foreach}
    </tbody>
  </table>