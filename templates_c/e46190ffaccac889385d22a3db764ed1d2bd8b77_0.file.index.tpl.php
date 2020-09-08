<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-06 03:09:38
  from '/home/victoria/PhpstormProjects/dz4-website/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5428c2a21e01_14524701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e46190ffaccac889385d22a3db764ed1d2bd8b77' => 
    array (
      0 => '/home/victoria/PhpstormProjects/dz4-website/templates/index.tpl',
      1 => 1599350971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5428c2a21e01_14524701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18631295235f5428c2a1b2b2_59537741', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_18631295235f5428c2a1b2b2_59537741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18631295235f5428c2a1b2b2_59537741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-3">
            <?php if (!(isset($_SESSION['user']))) {?>
                <form action="http://localhost:9000?action=create" method="POST">
                    <input type="text" name="name" placeholder="Your name">
                    <input type="text" name="phone" placeholder="+38000000000">
                    <input type="submit" name="Submit">
                </form>
            <?php }?>
            <table border="1">
                <thead>
                   <th>Name</th>
                   <th>Phone</th>
                   <th>Image</th>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usersArray']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                    <td><img src='images/1.png' width='200'></td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>
            </table>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
