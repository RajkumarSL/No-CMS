<!DOCTYPE html>
<html lang="{{ language:language_alias }}">
    <head>
        <meta charset="utf-8">
        <title><?php echo $template['title'];?></title>
        <?php echo $template['metadata'];?>
        <link rel="icon" href="{{ site_favicon }}">
        <!-- Le styles -->
        <?php
            echo $template['css'];
            $asset = new CMS_Asset();            
            $asset->add_themes_css('bootstrap.min.css', '{{ used_theme }}', 'default');
            $asset->add_themes_css('style.css', '{{ used_theme }}', 'default');
            $asset->add_themes_css('css/roboto.min.css', '{{ used_theme }}', 'default');
            $asset->add_themes_css('css/material.min.css', '{{ used_theme }}', 'default');
            $asset->add_themes_css('css/ripples.min.css', '{{ used_theme }}', 'default');            
            echo $asset->compile_css();
        ?>
        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="{{ site_favicon }}">
        <style type="text/css">{{ widget_name:section_custom_style }}</style>
    </head>
    <body>
        <?php
            echo $template['js'];
            $asset->add_cms_js("bootstrap/js/bootstrap.min.js");
            $asset->add_themes_js('js/ripples.min.js', '{{ used_theme }}', 'default');
            $asset->add_themes_js('js/material.min.js', '{{ used_theme }}', 'default');
            $asset->add_themes_js('script.js', '{{ used_theme }}', 'default');
            echo $asset->compile_js();
        ?>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script type="text/javascript">{{ widget_name:section_custom_script }}</script>
        {{ widget_name:section_top_fix }}
        {{ widget_name:static_accessories_slideshow }}
        <div class="container">
            <div class="row-fluid">
                <div>     
                    <div id="__section-left-and-content" class="col-md-12">
                        <div>{{ navigation_path }}</div><hr />
                        <div id="__section-content" class="col-md-12"><?php echo $template['body'];?></div>
                    </div><!--/#layout-content-->
                </div>
            </div><!--/row-->
          <hr>
        </div><!--/.fluid-container-->
        <footer>{{ widget_name:section_bottom }}</footer>
        <script type="text/javascript">
            $(document).ready(function(){
            });
        </script>
    </body>
</html>