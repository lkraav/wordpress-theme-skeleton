<form action="<?php bloginfo('url'); ?>" method="get">
    <fieldset>
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
        <input type="image" id="submit" alt="Search" src="<?php bloginfo('template_url'); ?>/img/icon-24x24-magnifying_glass.png" />
    </fieldset>
</form>
