<?php
/* Smarty version 4.2.1, created on 2023-10-18 01:59:55
  from 'C:\xampp\htdocs\Web2-trabajo\templates\formAddCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f1ffb2de8d9_28779937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5abf724b82f05f3d4688d51d885e5a30a78ba90f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2-trabajo\\templates\\formAddCategoria.tpl',
      1 => 1697587192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f1ffb2de8d9_28779937 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['logged']->value) {?>
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
    <?php }
}
}
