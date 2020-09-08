<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-08 05:54:32
  from '/home/victoria/PhpstormProjects/dz4-website/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f56f2685a0212_48531050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fc63cf9997fc806b552de27e36b7d54113c9b51' => 
    array (
      0 => '/home/victoria/PhpstormProjects/dz4-website/templates/layout.tpl',
      1 => 1599531861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f56f2685a0212_48531050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title>Phonebook<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16163392285f56f2684c5ec3_18410434', "title");
?>
</title>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Phonebook</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <?php if (!(isset($_SESSION['user']))) {?>
                    <li><a href="/?action=login">Login</a></li>
                    <li><a href="/?action=register">Register</a></li>
                <?php }?>

                <?php if ((isset($_SESSION['user']))) {?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php ob_start();
echo $_SESSION['user']['email'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/?action=logout">Logout</a></li>
                        </ul>
                    </li>
                <?php }?>
            </ul>
        </div>
        <div>
            <table border="1">
                <thead>
                <th>Name</th>
                <th>Phone</th>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>
            </table>
        </div>
    </div>
        </div>
    </div>
</nav>

<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9426228715f56f26859e6a7_08478148', 'body');
?>

</div>

</body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6971965435f56f26859f4a9_69473414', "script");
?>

</html><?php }
/* {block "title"} */
class Block_16163392285f56f2684c5ec3_18410434 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16163392285f56f2684c5ec3_18410434',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block 'body'} */
class Block_9426228715f56f26859e6a7_08478148 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9426228715f56f26859e6a7_08478148',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block "script"} */
class Block_6971965435f56f26859f4a9_69473414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_6971965435f56f26859f4a9_69473414',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
}
