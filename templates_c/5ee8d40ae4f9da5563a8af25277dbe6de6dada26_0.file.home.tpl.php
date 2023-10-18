<?php
/* Smarty version 4.2.1, created on 2023-10-18 01:59:10
  from 'C:\xampp\htdocs\Web2-trabajo\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f1fce273131_33848484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ee8d40ae4f9da5563a8af25277dbe6de6dada26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2-trabajo\\templates\\home.tpl',
      1 => 1697587044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f1fce273131_33848484 (Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;

    
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
         <img src="img/jordanlow1.jpeg" class="d-block w-50 " alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/jordanlow2.jpeg" class="d-block w-50" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/joranlow3.jpeg" class="d-block w-50" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/remera1.jpeg" class="d-block w-40" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/remera2.jpeg" class="d-block w-40" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  


    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
