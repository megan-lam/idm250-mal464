<?php
// get_search_form(); is the default way of adding a search bar to WP. We will not use this
?>
<form class="searchform" action="<?php echo home_url(); ?>"
  method="get">
  <input class="bar" type="text" name="s" value="">
  <input type="hidden" name="post_type[]" value="idm-projects">
  <button class="sbutton">search</button>
</form>