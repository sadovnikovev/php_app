<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-19 18:25:10
  from 'C:\OSPanel\domains\olimpiad2\templates\medal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e738ed692a081_85820295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bdc5d8d32620cc3ab1f2a1382075a523235d8f3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\olimpiad2\\templates\\medal.tpl',
      1 => 1584631504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e738ed692a081_85820295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">

        <div class="row justify-content-md-center">
            <div class="col-4 justify-content-center mt-sm-5">
                <form action="/medal" method="post">
                    <select class="custom-select my-sm-1" name="medal">
                        <option disabled selected>type medal</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_medal']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                      	    <option value=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   </select>

                   <select class="custom-select my-sm-1" name="country">
                       <option disabled selected>country</option>
                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_country']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                           <option value=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   </select>

                   <select class="custom-select my-sm-1" name="sport">
                       <option disabled selected>kind of sport</option>
                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_sport']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                           <option value=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   </select>

                   <select multiple class="custom-select my-sm-1" name="sportsmans[]">
                       <option disabled>sportsmans</option>
                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_sportsmans']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                           <option value=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   </select>

                   <div class="d-flex justify-content-center">
                       <button type="submit" class="btn btn-dark my-sm-3">submit</button>
                   </div>
                </form>
            </div>


			<div class="col-8">
				<table class="table table-bordered table-sm table-hover text-center mt-sm-5">
					<caption class="font-weight-bold text-center"> Medals </caption>
					<thead class="thead-dark">
                        <tr>
							<th>id</th>
							<th>type medal</th>
                            <th>country</th>
                            <th>kind of sport</th>
                            <th>sportsmans</th>
							<th>#</th>
						</tr>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_medal_standings']->value, 'value');
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
                                <td><a class='text-reset' href='/medal/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'> delete </a></td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row justify-content-center mb-sm-5 fixed-bottom">
			<a class="btn btn-dark" href='/'> main </a>
		</div>

    </div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
