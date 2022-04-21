    <?php
	$slug = 'slug';
	$args = array(
		'display_names_as' => $slug,
		'raw' => true
	);

	$current_page = home_url($wp->request);
	$current_page_id = url_to_postid($wp->request);
	?>

    <!-- MODAL -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    			</div>
    			<div class="modal-body">
    				<!-- <div class="ratio ratio-16x9">
    					<iframe width="560" height="315"  class="video-full" src="https://www.youtube.com/" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    				</div> -->
					Content example
    			</div>
    		</div>
    	</div>
    </div>
