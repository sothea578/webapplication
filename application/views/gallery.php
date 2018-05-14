<div id="slider_wrapper">
<div class="slider_bot">
<div class="page_title">Gallery</div>
<div class="breadcrumbs1">
<div class="breadcrumbs1_inner"><a href="/webapplication/index.php/Users/home/">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Gallery</div>	
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
				<a href="/webapplication/public/gal_img/<?php echo $row->picture; ?>">
					<figure>
						<img src="/webapplication/public/gal_img/<?php echo $row->picture; ?>" alt="" style="width: 270px; height: 270px;"><em></em>
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
