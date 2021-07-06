<div class="node<?php if ($sticky) { print " sticky"; } ?>
<?php if (!$status) { print " node-unpublished"; } ?>">
<?php if ($picture) {
print $picture;
}?>
<?php if ($page == 0) { ?><h2 class="title"><a href="<?php
print $node_url?>"><?php print $title?></a></h2><?php }; ?>
<span class="submitted"><?php print $submitted?></span>
<span class="taxonomy"><?php print $terms?></span>
<div class="content">
<?php print $content?>
<fieldset class="collapsible collapsed">
<legend>Details of <?php print $title?></legend>
<div class="form-item">
<label><?php if (isset($node->price)) print
check_markup("Price: ".$node->price)?></label>
<label><?php if (isset($node->Author)) print
check_markup("Author: ".$node->Author)?></label>
<label><?php if (isset($node->no_of_pages)) print
check_markup("No of Pages: ".$node->no_of_pages)?></label>
<label><?php if (isset($node->company)) print
check_markup("Company: ".$node->company)?></label>
</div>
</legend>
</fieldset>
</div>
<?php if ($links) { ?><div class="links">&raquo; <?php print $links?></div>
<?php }; ?>
</div>

