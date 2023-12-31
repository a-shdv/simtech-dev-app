<?php
/* Smarty version 4.3.4, created on 2023-10-21 03:45:30
  from '/opt/lampp/htdocs/public/templates/partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65332d3a707007_79874228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '577777882076f44c063085f93f3f7acbd99405f5' => 
    array (
      0 => '/opt/lampp/htdocs/public/templates/partials/header.tpl',
      1 => 1697852725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65332d3a707007_79874228 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Шапка -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Simtech Development</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href=index.php>Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us.php">О нас</a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">

                <?php if ($_smarty_tpl->tpl_vars['is_logged_in']->value !== 'logged_in') {?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-login.php">Панель администратора</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="get-messages.php">Панель администратора</a>
                    </li>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['is_logged_in']->value === 'logged_in') {?>
                    <li class="nav-item">
                        <a id="logout" class="nav-link" href="logout.php">Выйти</a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </nav>
</header><?php }
}
