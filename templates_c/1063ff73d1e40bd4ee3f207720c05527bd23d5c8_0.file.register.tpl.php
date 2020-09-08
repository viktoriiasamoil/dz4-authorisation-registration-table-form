<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-05 01:08:11
  from '/home/victoria/PhpstormProjects/dz4-website/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f52bacb87ed89_95239352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1063ff73d1e40bd4ee3f207720c05527bd23d5c8' => 
    array (
      0 => '/home/victoria/PhpstormProjects/dz4-website/templates/register.tpl',
      1 => 1599241679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f52bacb87ed89_95239352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5298991395f52bacb87b8d9_48147672', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_5298991395f52bacb87b8d9_48147672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_5298991395f52bacb87b8d9_48147672',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h3>Regsiter</h3>

    <?php if ((isset($_GET['error']))) {?>
        <div class="alert alert-danger" role="alert"><?php ob_start();
echo $_GET['error'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</div>
    <?php }?>

    <form action="/?action=register" method="POST" style="width: 400px">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-success">Register</button>
    </form>

    <div>
        Already registered? <a href="/?action=login">Login!</a>
    </div>


<?php
}
}
/* {/block "body"} */
}
