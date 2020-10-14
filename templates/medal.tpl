{include file='header.tpl'}
    <div class="container">

        <div class="row justify-content-md-center">
            <div class="col-4 justify-content-center mt-sm-5">
                <form action="/medal" method="post">
                    <select class="custom-select my-sm-1" name="medal">
                        <option disabled selected>type medal</option>
                        {foreach $arr_medal as $value}
                      	    <option value={$value.id}>{$value.name}</option>
                        {/foreach}
                   </select>

                   <select class="custom-select my-sm-1" name="country">
                       <option disabled selected>country</option>
                       {foreach $arr_country as $value}
                           <option value={$value.id}>{$value.name}</option>
                       {/foreach}
                   </select>

                   <select class="custom-select my-sm-1" name="sport">
                       <option disabled selected>kind of sport</option>
                       {foreach $arr_sport as $value}
                           <option value={$value.id}>{$value.name}</option>
                       {/foreach}
                   </select>

                   <select multiple class="custom-select my-sm-1" name="sportsmans[]">
                       <option disabled>sportsmans</option>
                       {foreach $arr_sportsmans as $value}
                           <option value={$value.id}>{$value.name}</option>
                       {/foreach}
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
                        {foreach $arr_medal_standings as $value}
                            <tr>
                                <td>{$value.id}</td>
                                <td>{$value.medal}</td>
                                <td>{$value.country}</td>
                                <td>{$value.sport}</td>
                                <td>{$value.sportsmans}</td>
                                <td><a class='text-reset' href='/medal/{$value.id}'> delete </a></td>
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
