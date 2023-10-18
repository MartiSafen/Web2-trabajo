<?php
/* Smarty version 4.2.1, created on 2023-10-18 03:02:56
  from 'C:\xampp\htdocs\Web2-trabajo\templates\formEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f2ec06d5fd3_22910126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '332abc5170295c9cec06a0ebf9a5fe2ba00937dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2-trabajo\\templates\\formEdit.tpl',
      1 => 1697590033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f2ec06d5fd3_22910126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h5>Editar items</h5>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productsbyid']->value, 'productsbyid');
$_smarty_tpl->tpl_vars['productos'] = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['productos'] = false;
?>
<form action="formEdit/<?php echo $_smarty_tpl->tpl_vars['productos']->value->id;?>
" method="POST" class="form">
    <label>id_compra</label>
        <input type="text"  name="id_compra" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['productos']->value->id_compra;?>
">
    <label>talle</label>
        <input type="text" name="talle" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['productos']->value->talle;?>
">
     <label>hora</label>
        <input type="text" name="hora" class="form-control"value="<?php echo $_smarty_tpl->tpl_vars['productos']->value->hora;?>
">
     <label>vendedor</label>
        <input type="text" name="vendedor" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['productos']->value->vendedor;?>
">
    <div class="mt-4">
    <button type="submit" class="btn btn-primary mt-2">Editar</a>
    </div>
</form>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;

<?php }
}
