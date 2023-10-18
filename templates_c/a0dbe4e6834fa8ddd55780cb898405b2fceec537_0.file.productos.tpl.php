<?php
/* Smarty version 4.2.1, created on 2023-10-18 02:03:00
  from 'C:\xampp\htdocs\Web2-trabajo\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f20b49d2793_07622675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0dbe4e6834fa8ddd55780cb898405b2fceec537' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2-trabajo\\templates\\productos.tpl',
      1 => 1697587377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_652f20b49d2793_07622675 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
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
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productosbyid']->value, 'productos');
$_smarty_tpl->tpl_vars['productos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productos']->value) {
$_smarty_tpl->tpl_vars['productos']->do_else = false;
?>
      <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['productos']->value->id;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['productos']->value->id_compra;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['productos']->value->talle;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['productos']->value->hora;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['productos']->value->vendedor;?>
</td>
      <td ><a class="btn btn-secondary mt-0" href='detalle/<?php echo $_smarty_tpl->tpl_vars['productos']->value->id;?>
' type='button'>Detalle</a></td>
      <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <td ><a class="btn btn-danger mt-0" href='delete/<?php echo $_smarty_tpl->tpl_vars['productos']->value->id;?>
' type='button'>Eliminar</a></td>
      <td ><a class="btn btn-success mt-0"   href='formEdit/<?php echo $_smarty_tpl->tpl_vars['productos']->value->id;?>
' type='button'>Editar</a></td>
    <?php }?>
    
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table><?php }
}
