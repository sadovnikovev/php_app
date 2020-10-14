<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-23 11:01:05
  from 'C:\OSPanel\domains\olimpiad\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e786cc1cb2920_96868875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e42042c3d003bcda2ca3e7534378fa4ced70582' => 
    array (
      0 => 'C:\\OSPanel\\domains\\olimpiad\\templates\\index.tpl',
      1 => 1584706873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e786cc1cb2920_96868875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">

        <table class="table table-bordered table-sm table-hover text-center mt-sm-5">
            <caption class="font-weight-bold text-center">Olympic Games medal standings</caption>
            <thead class='thead-dark'>
                <tr>
                    <th><a class="text-reset" href='/1/<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
'> rating </a></th>
                    <th><a class="text-reset" href='/2/<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
'> country </a></th>
                    <th><a class="text-reset" href='/3/<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
'> gold </a></th>
                    <th><a class="text-reset" href='/4/<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
'> silver </a></th>
                    <th><a class="text-reset" href='/5/<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
'> bronze </a></th>
                    <th><a class="text-reset" href='/6/<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
'> all_medals </a></th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_sort_index_table']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <tr>
                        <td> <?php echo $_smarty_tpl->tpl_vars['value']->value['rating'];?>
 </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['value']->value['country'];?>
 </td>
                        <td><a class='text-reset' href='/medals-countries/<?php echo $_smarty_tpl->tpl_vars['value']->value['country_id'];?>
/1'><?php echo $_smarty_tpl->tpl_vars['value']->value['gold'];?>
</a></td>
                        <td><a class='text-reset' href='/medals-countries/<?php echo $_smarty_tpl->tpl_vars['value']->value['country_id'];?>
/2'><?php echo $_smarty_tpl->tpl_vars['value']->value['silver'];?>
</a></td>
                        <td><a class='text-reset' href='/medals-countries/<?php echo $_smarty_tpl->tpl_vars['value']->value['country_id'];?>
/3'><?php echo $_smarty_tpl->tpl_vars['value']->value['bronze'];?>
</a></td>
                        <td><a class='text-reset' href='/medals-countries/<?php echo $_smarty_tpl->tpl_vars['value']->value['country_id'];?>
'><?php echo $_smarty_tpl->tpl_vars['value']->value['all_medals'];?>
</a></td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <tr>
                    <th colspan='6'>
                        <a class="text-reset" href='<?php echo $_smarty_tpl->tpl_vars['get_param']->value;?>
'>all medal standings</a>
                    </th>
                </tr>
            </tbody>
        </table>

        <div class="row justify-content-center">
            <div class="col"><a class="col btn btn-dark" href='/country'> add country </a></div>
            <div class="col"><a class="col btn btn-dark" href='/medal'> add medal </a></div>
            <div class="col"><a class="col btn btn-dark" href='/sport'> add sport </a></div>
            <div class="col"><a class="col btn btn-dark" href='/sportsman'> add sportsman </a></div>
        </div>

    </div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
