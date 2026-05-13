<?php
/**
 * Title: index
 * Slug: abandonedstroller/index
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-left"><?php esc_html_e('Blog', 'abandonedstroller');?></h1>
<!-- /wp:heading -->

<!-- wp:query {"queryId":1,"query":{"perPage":25,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"metadata":{"categories":["Posts"],"patternName":"abandonedstroller/post-grid","name":"Post Grid"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:group {"metadata":{"name":"Post Body"},"className":"wp-block-post-body","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group wp-block-post-body" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"metadata":{"name":"Post Meta"},"className":"wp-block-post-meta","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group wp-block-post-meta" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-date {"isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"fontSize":"small"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"metadata":{"name":"No Posts"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php esc_html_e('Sorry, but nothing was found. Please try a search with different keywords.', 'abandonedstroller');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Pagination"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->