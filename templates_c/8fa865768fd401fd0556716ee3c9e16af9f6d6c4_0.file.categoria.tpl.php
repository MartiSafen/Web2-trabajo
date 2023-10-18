<?php
/* Smarty version 4.2.1, created on 2023-10-18 02:04:39
  from 'C:\xampp\htdocs\Web2-trabajo\templates\categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f2117c9d244_47792853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fa865768fd401fd0556716ee3c9e16af9f6d6c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2-trabajo\\templates\\categoria.tpl',
      1 => 1697587473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formAddCategoria.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f2117c9d244_47792853 (Smarty_Internal_Template $_smarty_tpl) {
?>
    
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
  
<?php $_smarty_tpl->_subTemplateRender("file:formAddCategoria.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoriabyid']->value, 'categorias');
$_smarty_tpl->tpl_vars['categorias']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorias']->value) {
$_smarty_tpl->tpl_vars['categorias']->do_else = false;
?>
    <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['categorias']->value->prenda_id;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['categorias']->value->producto;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['categorias']->value->tela;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['categorias']->value->color;?>
</td>
    <td ><a class="btn btn-secondary mt-0" href='detalle/<?php echo $_smarty_tpl->tpl_vars['categorias']->value->productos;?>
' type='button'>Detalle</a></td>
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <td ><a class="btn btn-danger mt-0" href='deleteCategoria/<?php echo $_smarty_tpl->tpl_vars['categorias']->value->productos;?>
' type='button'>Eliminar</a></td>
      <td ><a class="btn btn-success mt-0"   href='formEditCategoria/<?php echo $_smarty_tpl->tpl_vars['categorias']->value->productos;?>
' type='button'>Editar</a></td>
    <?php }?>
    
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>

   

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
