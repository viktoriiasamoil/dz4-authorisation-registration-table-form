<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-08 05:54:36
  from '/home/victoria/PhpstormProjects/dz4-website/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f56f26c727d59_59521923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3e9c4acf74bba335020f063cc07bc3b898b44cf' => 
    array (
      0 => '/home/victoria/PhpstormProjects/dz4-website/templates/login.tpl',
      1 => 1599533602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f56f26c727d59_59521923 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11278776075f56f26c724855_31315909', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_11278776075f56f26c724855_31315909 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11278776075f56f26c724855_31315909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <h3>Login</h3>

    <?php if ((isset($_GET['error']))) {?>
        <div class="alert alert-danger" role="alert"><?php ob_start();
echo $_GET['error'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</div>
    <?php }?>

    <form action="?action=login" method="POST" style="width: 400px">
        <div class="form-group">
            <label for="cat_name">Email address</label>
            <input type="email" class="form-control" id="cat_name" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-success">Login</button>
    </form>

    <div>
        Do not have an account? <a href="/?action=register">Register now!</a>
    </div>


<?php
}
}
/* {/block "body"} */
}
