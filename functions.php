<?php
	define("TEMPLATE_URI",get_template_directory_uri());
	add_theme_support( 'post-thumbnails' ); 
	function generate_posts(){
        $output = "";
        if (!is_single()) query_posts(array('numberposts' => -1, 'category_name' => 'pneumatiky'));

        if (have_posts()) {
            while (have_posts()) {
                the_post();
                 $output .= many_posts();
            }

        }
        return $output;
    }




function many_posts() {

    $output = "";
    if (!is_single()){
        $output .= "<div class=\"tyre\">
					<div class=\"tyreValues\">
						<div class=\"weather\">
							<div class=\"weather-bg\"></div>
							<p>E</p>
						</div>
						<div class=\"fuel\">
							<div class=\"fuel-bg\"></div>
							<p>C</p>
						</div>
						<div  class=\"sound\">
							<div class=\"sound-bg\"></div>
							<p>68</p>
						</div>
					</div>
					<div class=\"tyreInfo\">
						<a href=\"".get_the_permalink()."\" class=\"moreInfo\">
                ".get_the_post_thumbnail()."
                <div class=\"tyreName\">
                    <h4>".get_the_title()."</h4>
                </div>
                <div class=\"tyreParameters\">
                    ".get_the_content()."
                </div>
                </a>
                <h6 class=\"price\">1129,-</h6>
                </div>
                <div class=\"buttons\">
                    <input type=\"number\" class=\"number\" value=\"1\"  min=\"1\" max=\"100\">
                    <input type=\"submit\" class=\"intoCart\" value=\"DO KOŠÍKU\">
                </div>
                </div>";
    } else{
        $output .= "<div class=\"produkt_info\">
                    ".get_the_post_thumbnail()."
                    <div class=\"popis\">
                        <div class=\"nazev\">
                            <h2>".get_the_title()."</h2>
                        </div>
                        ".get_the_content()."
                        <div class=\"cena\">
                          <h6 class=\"price\">1129,-</h6>
                        <div class=\"buttons\">
                            <input type=\"number\" class=\"number\" value=\"1\"  min=\"1\" max=\"100\">
                            <input type=\"submit\" class=\"intoCart\" value=\"DO KOŠÍKU\">
                        </div>
                        </div>
                    </div>
                    
                </div>";
    }


    return $output;
}

