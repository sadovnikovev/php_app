{include file='header.tpl'}
    <div class="container">

        <table class="table table-bordered table-sm table-hover text-center my-sm-3">
            <caption class="font-weight-bold text-center">Olympic Games medal standings for country {$name_country->name}</caption>
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
            {foreach $arr_medal_standing_for_country as $value}
                <tr>
                    <td>{$value.id}</td>
                    <td>{$value.medal}</td>
                    <td>{$value.country}</td>
                    <td>{$value.sport}</td>
                    <td>{$value.sportsmans}</td>
                </tr>
            {/foreach}
            </tbody>
        </table>

        <div class="row justify-content-center mb-sm-5 fixed-bottom">
			<a class="btn btn-dark" href='/'> main </a>
		</div>

    </div>
{include file='footer.tpl'}
