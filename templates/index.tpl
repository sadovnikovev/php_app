{include file='header.tpl'}
    <div class="container">

        <table class="table table-bordered table-sm table-hover text-center mt-sm-5">
            <caption class="font-weight-bold text-center">Olympic Games medal standings</caption>
            <thead class='thead-dark'>
                <tr>
                    <th><a class="text-reset" href='/1/{$href}'> rating </a></th>
                    <th><a class="text-reset" href='/2/{$href}'> country </a></th>
                    <th><a class="text-reset" href='/3/{$href}'> gold </a></th>
                    <th><a class="text-reset" href='/4/{$href}'> silver </a></th>
                    <th><a class="text-reset" href='/5/{$href}'> bronze </a></th>
                    <th><a class="text-reset" href='/6/{$href}'> all_medals </a></th>
                </tr>
            </thead>
            <tbody>
                {foreach $arr_sort_index_table as $value}
                    <tr>
                        <td> {$value.rating} </td>
                        <td> {$value.country} </td>
                        <td><a class='text-reset' href='/medals-countries/{$value.country_id}/1'>{$value.gold}</a></td>
                        <td><a class='text-reset' href='/medals-countries/{$value.country_id}/2'>{$value.silver}</a></td>
                        <td><a class='text-reset' href='/medals-countries/{$value.country_id}/3'>{$value.bronze}</a></td>
                        <td><a class='text-reset' href='/medals-countries/{$value.country_id}'>{$value.all_medals}</a></td>
                    </tr>
                {/foreach}
                <tr>
                    <th colspan='6'>
                        <a class="text-reset" href='{$get_param}'>all medal standings</a>
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
{include file='footer.tpl'}
