<div id="slider_wrapper">
<img src="/webapplication/assets/bootstraps/images/grad2.png" alt="" class="grad2">
<div class="slider_bot">
<div class="page_title">Gallery</div>
<div class="breadcrumbs1">
<div class="breadcrumbs1_inner"><a href="index.html">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Gallery</div>	
</div>
</div>
</div>

<div id="content">
<div class="container">
<div class="row">
<div class="span12">
	
<h1>Gallery</h1>

<div id="isotope-options">
    <ul id="isotope-filters" class="clearfix">
        <!-- <li><a href="#" class="selected" data-filter="*">Show All</a></li> 
        <li><a href="#" data-filter=".isotope-filter1">Category 1</a></li> -->           
    </ul>            
</div>

<ul class="thumbnails" id="isotope-items">		
	<?php foreach($result as $row): ?>  
    <li class="span3 isotope-element isotope-filter1">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a>
					<figure>
						<img src="/webapplication/public/gal_img/<?php echo $row->picture; ?>" alt=""><em></em>
					</figure>
					<div class="caption">
						<div class="txt1">
							<?php echo $row->gal_name; ?></h3>
        				</div>
					</div>
					
				</a>				
			</div>
		</div>
    </li>
    <?php endforeach; ?>
</ul>



</div>
</div>	
</div>	
</div>
