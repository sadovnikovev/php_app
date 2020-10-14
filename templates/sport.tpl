{include file='header.tpl'}
	<div class="container">

        <div class="row justify-content-center mt-sm-3">
			<form class="form-inline" action="/sport" method="post">
				<div class="form-group">
					<input class="form-control" type="text" name="name" placeholder="enter sport"/>
				</div>
				<button type="submit" class="btn btn-dark mx-sm-3">submit</button>
			</form>
		</div>

        <div class="row justify-content-md-center">
			<div class="col-6">
				<table class="table table-bordered table-sm table-hover text-center">
					<caption class="font-weight-bold text-center"> Sport </caption>
					<thead class="thead-dark">
						<tr>
							<th>id</th>
							<th>kind of sport</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
                    {foreach $arr_sport as $value}
                        <tr>
                            <td>{$value.id}</td>
                            <td>{$value.name}</td>
                            <td><a class='text-reset' href='sport/{$value.id}'> delete </a></td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row justify-content-center mb-sm-5 fixed-bottom">
			<a class="btn btn-dark" href='/'> main </a>
		</div>

    </div>
{include file='footer.tpl'}
