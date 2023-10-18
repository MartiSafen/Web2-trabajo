<?php
/* Smarty version 4.2.1, created on 2023-10-18 01:43:14
  from 'C:\xampp\htdocs\Web2-trabajo\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f1c12c39191_49069112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '579e28b48a35a7ab2f8cc5df381680a75c72fc6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2-trabajo\\templates\\header.tpl',
      1 => 1697586189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f1c12c39191_49069112 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <base href="<?php echo '<?'; ?>
= BASE_URL <?php echo '?>'; ?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Nikes  -indumentaria-</title>



</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">Nikes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout">log out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productos">productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categoria">categorias</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    </header>
</body><?php }
}
