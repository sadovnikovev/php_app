<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-20 10:00:28
  from 'C:\OSPanel\domains\olimpiad2\templates\medals_country.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e746a0cd8d407_00657511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb992a66737214c006081e9f4e8ad9e3041454b4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\olimpiad2\\templates\\medals_country.tpl',
      1 => 1584685081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e746a0cd8d407_00657511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">

        <table class="table table-bordered table-sm table-hover text-center my-sm-3">
            <caption class="font-weight-bold text-center">Olympic Games medal standings for country <?php echo $_smarty_tpl->tpl_vars['name_country']->value->name;?>
</caption>
            <thead class="thead-dark">
                <tr>
                    <th> id </th>
                    <th> type_medal </th>
                    <th> country </th>
                    <th> kind_of_sport </th>
                    <th> sportsmans </th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_medal_standing_for_country']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['medal'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['country'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['sport'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['sportsmans'];?>
</td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>

        <div class="row justify-content-center mb-sm-5 fixed-bottom">
			<a class="btn btn-dark" href='/'> main </a>
		</div>

    </div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
