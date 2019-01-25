<section class="intro intro-small intro-bg bg-overlay-light parallax">
    <div class="caption-container p-5">
        <div class="intro-caption text-center mt-5">
            <h6 class="text-white text-underline-white mb-4 mt-5">Search</h6>
            <h1 class="display-4 text-white mb-2">Here are the results of your search</h1>
        </div>
    </div>
</section>

<div class="head-box text-center mb-5">
    <h3>Click to see more details</h3>
    <a href="{url}general" class="btn btn-primary">Go Home</a>
    <h6 class="text-underline-primary"></h6>
</div>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Price</th>
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Details</th>
    </tr>
    </thead>
    <tbody>
    {results}
    <tr>
        <td class="font-weight-bold">${price}</td>
        <td>{brand}</td>
        <td>{model}</td>
        <td>
           <a href="<?php $url = base_url(); echo $url?>general/search/details/{id}" class="btn btn-warning">See more</a>
        </td>
    </tr>
    {/results}
    </tbody>
</table>
<br><br>