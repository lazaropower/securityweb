<div class="head-box text-center mb-5">
    <h2>{router}{brand} {model}{/router}</h2>
    <a href="{url}general" class="btn btn-primary">Go home</a> <a href="{url}general/search/results/-1" class="btn btn-secondary">Go back</a>
    <h6 class="text-underline-primary"></h6>
</div>

<section class="info-section bg-primary py-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-6 content-half mt-md-0 pl-5 pt-4">
                <div class="head-box mb-5 pl-5 mt-2">
                    <h2 class="text-white">Details</h2>
                    <h6 class="text-white text-underline-rb-white">Information about the router</h6>
                </div>
                <ul class="pl-5">
                    {router}
                    <li>
                        <i class="fa fa-dollar box-round-outline" aria-hidden="true"></i>
                        <span class="list-content">
                    		<h1><strong>{price}</strong></h1>
                    	</span>
                    </li>
                    <li>
                        <i class="fa fa-li box-round-outline" aria-hidden="true"></i>
                        <span class="list-content">
                    		<strong>Antennas</strong>
                    		<br>This router has {numAntennas} antennas.
                    	</span>
                    </li>
                    <li>
                        <i class="fa fa-li box-round-outline" aria-hidden="true"></i>
                        <span class="list-content">
                    		<strong>LAN Ports</strong>
                    		<br>This router has {numLANPorts} LAN Ports.
                    	</span>
                    </li>
                    <li>
                        <i class="fa fa-li box-round-outline" aria-hidden="true"></i>
                        <span class="list-content">
                    		<strong>MAC_ACL (1 = yes, 0 = no)</strong>
                    		<br>{MAC_ACL}.
                    	</span>
                    </li>
                    <li>
                        <i class="fa fa-li box-round-outline" aria-hidden="true"></i>
                        <span class="list-content">
                    		<strong>MU_MIMO (1 = yes, 0 = no)</strong>
                    		<br>{MU_MIMO}.
                    	</span>
                    </li>
                    <li>
                        <i class="fa fa-li box-round-outline" aria-hidden="true"></i>
                        <span class="list-content">
                    		<strong>Radius (1 = yes, 0 = no)</strong>
                    		<br>{radius}.
                    	</span>
                    </li>
                    <li>
                        <i class="fa fa-li box-round-outline" aria-hidden="true"></i>
                        <span class="list-content">
                    		<strong>Band</strong>
                    		<br>This router operates with the {band} band.
                    	</span>
                    </li>
                    {/router}
                </ul>
            </div>
            <div class="col-md-6 p-0 m-0">
                <img src="{url}public/img/{numPic}.jpg" class="img-fluid">
            </div>
        </div>
</section>