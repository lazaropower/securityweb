<h1>Results from the search</h1>

<table style="width:100%">
    <tr>
        <th>PRICE</th>
        <th>BRAND</th>
        <th>MODEL</th>
    </tr>
    {results}
    <tr>
        <td>${price}</td>
        <td>{brand}</td>
        <td>{model}</td>
        <td><a href="<? $url = base_url(); echo $url?>general/search/{id}">See more</a></td>
    </tr>
    {/results}
</table>