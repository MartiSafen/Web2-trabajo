<?php
/* Smarty version 4.2.1, created on 2023-10-18 02:18:16
  from 'C:\xampp\htdocs\Web2-trabajo\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f2448c0f296_59547970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e949f1a187f7de8f9cfad012a409513d7c5aa46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2-trabajo\\templates\\login.tpl',
      1 => 1697588291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f2448c0f296_59547970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="text">User</label>
            <input type="text" required class="form-control" id="user" name="user">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>

   
       
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
            <div class= "alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>    
        </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
