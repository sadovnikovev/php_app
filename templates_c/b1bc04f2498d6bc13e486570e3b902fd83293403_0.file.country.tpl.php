<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-27 08:50:43
  from 'C:\OSPanel\domains\olimpiad\templates\country.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d94335a8dd9_49951812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1bc04f2498d6bc13e486570e3b902fd83293403' => 
    array (
      0 => 'C:\\OSPanel\\domains\\olimpiad\\templates\\country.tpl',
      1 => 1584627074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e7d94335a8dd9_49951812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div class="container">

		<div class="row justify-content-center mt-sm-3">
			<form class="form-inline" action="/country" method="post">
				<div class="form-group">
					<input class="form-control" type="text" name="name" placeholder="enter country"/>
				</div>
				<button type="submit" class="btn btn-dark mx-sm-3">submit</button>
			</form>
		</div>

		<div class="row justify-content-md-center">
			<div class="col-6">
				<table class="table table-bordered table-sm text-center table-hover">
					<caption class="font-weight-bold text-center"> Country </caption>
					<thead class="thead-dark">
						<tr>
							<th>id</th>
							<th>country</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_country']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
					    <tr>
							<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
							<td><a class='text-reset' href='/country/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
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
