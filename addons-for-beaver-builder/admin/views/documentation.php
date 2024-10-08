<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Theme info
$plugin = get_plugin_data(LABB_PLUGIN_FILE);


if (is_multisite()) {
    $beaverBuilderUrl = network_admin_url('plugin-install.php?tab=plugin-information&plugin=beaver-builder-lite-version&TB_iframe=true&width=640&height=589');
    $portfolioPostTypeUrl = network_admin_url('plugin-install.php?tab=plugin-information&plugin=portfolio-post-type&TB_iframe=true&width=640&height=589');
}
else {
    $beaverBuilderUrl = admin_url('plugin-install.php?tab=plugin-information&plugin=beaver-builder-lite-version&TB_iframe=true&width=640&height=589');
    $portfolioPostTypeUrl = admin_url('plugin-install.php?tab=plugin-information&plugin=portfolio-post-type&TB_iframe=true&width=640&height=589');
}

?>

<div class="livemesh-doc">

    <h2 class="notices"></h2>

    <div class="intro-wrap">

        <img class="plugin-image" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/plugin-screenshot.jpg" alt="Livemesh Addons for Beaver Builder">

        <div class="intro">
            <h3><?php printf(__('Getting started with %1$s v%2$s', 'livemesh-bb-addons'), $plugin['Name'], $plugin['Version']); ?></h3>

            <h4><?php printf(__('Thanks for installing %1$s! We truly appreciate the support and the opportunity to share our work with you. Please visit the tabs below to get started on using our plugin to build your site!', 'livemesh-bb-addons'), $plugin['Name']); ?></h4>
        </div>

    </div>

    <div class="panels">
        <ul class="inline-list">
            <li class="current"><a id="help" href="#"><span
                            class="dashicons dashicons-yes"></span> <?php _e('Help File', 'livemesh-bb-addons'); ?></a>
            </li>
            <li><a id="plugins" href="#"><span
                            class="dashicons dashicons-admin-plugins"></span> <?php _e('Plugins', 'livemesh-bb-addons'); ?>
                </a>
            </li>
            <li><a id="support" href="#"><span
                            class="dashicons dashicons-editor-help"></span> <?php _e('FAQ &amp; Support', 'livemesh-bb-addons'); ?>
                </a>
            </li>
            <li><a id="updates" href="#"><span
                            class="dashicons dashicons-update"></span> <?php _e('Latest Updates', 'livemesh-bb-addons'); ?>
                </a>
            </li>
        </ul>

        <div id="panel" class="panel">

            <!-- Help file panel -->
            <div id="help-panel" class="panel-left visible">

                <!-- Grab feed of help file -->

                <!-- Output the feed -->
                <ul id="top" class="toc">
                    <li><a href="#getting-started">Getting Started</a></li>
                    <li><a href="#install-plugins">Installing Recommended/Required Plugins</a></li>
                    <li><a href="#demo-data">Installing Demo Data</a></li>
                    <li><a href="#plugin-elements">Working with plugin elements</a></li>
                    <li><a href="#customization">How to customize addons output</a></li>

                    <li><a href="#heading-element">Heading Addon</a></li>
                    <li><a href="#services-element">Services Addon</a></li>
                    <li><a href="#team-members">Team Members</a></li>
                    <li><a href="#statistics-elements">Statistics Addons</a></li>
                    <li><a href="#testimonials-elements">Testimonials Addons</a></li>
                    <li><a href="#posts-carousel">Posts Carousel</a></li>
                    <li><a href="#carousel-element">Carousel Addon</a></li>
                    <li><a href="#grid-element">Posts Grid</a></li>
                    <li><a href="#clients-element">Clients</a></li>
                    <li><a href="#pricing-table">Pricing Table</a></li>
                    <li><a href="#tabs-accordions">Tabs and Accordions – <span class="pro-feature">Pro!</span></a></li>
                    <li><a href="#button-element">Buttons – <span class="pro-feature">Pro!</span></a></li>
                    <li><a href="#icon-list">Icon List – <span class="pro-feature">Pro!</span></a></li>
                    <li><a href="#image-slider">Image Slider – <span class="pro-feature">Pro!</span></a></li>
                    <li><a href="#image-video-gallery">Image/Video Gallery – <span class="pro-feature">Pro!</span></a></li>
                    <li><a href="#image-video-carousel">Image/Video Carousel – <span class="pro-feature">Pro!</span></a></li>
                    <li><a href="#faq-element">FAQ Addon - <span class="pro-feature">Pro!</span></a></li>
                    <li><a href="#features-element">Features Addon - <span class="pro-feature">Pro!</span></a></li>

                </ul>
                <h3 id="getting-started">Getting Started<a class="back-to-top" href="#panel"><span
                                class="dashicons dashicons-arrow-up-alt2"></span> Back to top</a></h3>
                <p>Thanks for choosing Livemesh Addons for Beaver Builder plugin. This help file aims to provide you with all the information you need to make the best use of this powerful plugin. The aim of the plugin to make the task of building a website effortless and pleasurable. Towards that end, we have built a number of elements most commonly used across most of the websites of small businesses, corporates, design agencies, freelancers, artists etc.</p>
                <p>Do follow the steps below to get started - </p>
                <ol>
                    <li>Install and activate the <strong>required plugin</strong> <a
                                href="https://wordpress.org/plugins/beaver-builder-lite-version/" rel="nofollow" target="_blank">Beaver Builder</a>.
                        Beaver Builder is one of the most popular WordPress page builder plugins powering nearly 300,000 websites.
                    </li>
                    <li><strong>Make sure you deactivate the free plugin</strong> <a href="https://wordpress.org/plugins/addons-for-beaver-builder/" rel="nofollow">Livemesh Addons for Beaver Builder</a> upon installing the premium version.
                    </li>
                    <li>Unzip the downloaded addons-for-beaver-builder.zip file and upload to the <code>/wp-content/plugins/</code>
                        directory or upload the plugin zip with the help of Plugins→Installed Plugins→Add New button.<br>
                        Activate the plugin through the 'Plugins' menu in WordPress. If you are viewing this help page
                        in WordPress admin under Beaver Addons→Documentation, you have already activated the plugin.
                    </li>
                    <li>Once the plugin is activated, all of the elements part of the plugin are available in frontend Beaver
                        Builder 'Add Content' sidebar, grouped under 'Livemesh Addons' tab.

                        <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/add-element-window.png" alt="Beaver Builder Addons Add Element Window"></p>


                        <p>Once you are done with developing the site, for performance gains, you can selectively deactivate
                            the unused elements in 'Modules' tab of
                            <strong> <a href="<?php echo admin_url() . 'options-general.php?page=fl-builder-settings#modules'; ?>"
                                        target="_blank"><?php echo __('Settings->Page Builder', 'livemesh-bb-addons') ?></a></strong>
                            page. This will ensure that scripts and files relating to the deactivated elements do not load on your site.</p>
                    </li>
                    <li>If you plan to build a portfolio site and plan to use Posts Grid element for the same, install
                        and activate the optional plugin <a
                                href="https://wordpress.org/plugins/portfolio-post-type/" rel="nofollow" target="_blank">Portfolio
                            Post Type</a>.
                        The portfolio examples of Posts Grid element is built using custom post type registered by
                        this plugin.
                    </li>
                    <li>Optionally, if you have <a href="https://livemeshwp.com/beaver-builder/pricing/" title="Livemesh Addons for Beaver Builder Pro" target="_blank">premium version</a> of the plugin installed, you can import the sample data
                        that replicates the demo site for you by importing the
                        file sample-data.xml file located in the plugin directory. The import option is available under
                        <strong> <a href="<?php echo admin_url() . 'import.php'; ?>"
                                    target="_blank"><?php echo __('Tools→Import', 'livemesh-bb-addons') ?></a></strong>
                        in WordPress admin.
                    </li>
                </ol>

                <hr>
                <h3 id="install-plugins">Installing Recommended/Required Plugins<a class="back-to-top"
                                                                                   href="#panel"><span
                                class="dashicons dashicons-arrow-up-alt2"></span> Back to top</a></h3>
                <p>Below is a list of required/recommended plugins to install that will help you get the most out of this plugin.
                    Although some of these plugins are optional, we recommend that you install these popular plugins if
                    you plan to install the demo data and get most out of this plugin. The demo site and the sample data
                    provided with the <a href="https://livemeshwp.com/beaver-builder/pricing/"
                                         title="Livemesh Addons for Beaver Builder Pro" target="_blank">premium version</a> of
                    the plugin utilizes all of these plugins including the Portfolio Post type plugin.</p>
                <p>These plugins are also listed in the Plugins tab of this help file under Beaver Addons →
                    Documentation, and you can install the plugins directly from there.</p>
                <ul>
                    <li><p><strong>Beaver Builder</strong> is perhaps the most loved page builder tool for WordPress powering
                            over 300,000+ sites. You can build any layout you can imagine with intuitive drag and drop builder
                            with little or no programming knowledge.</p>
                        <p>All of the elements part of Livemesh Addons for Beaver Builder plugin were built using the API provided
                            by the Beaver Builder plugin and hence this plugin must be installed and activated on the site prior
                            to using our plugin.</p>
                        <p>All of the pages of our demo site for
                            the plugin have been built using this page builder. You should install and activate this plugin
                            prior to replicating the plugin demo site by importing the sample data provided.</p>
                        <p><a href="https://wordpress.org/plugins/beaver-builder-lite-version/" target="_blank">More about Beaver Builder →</a></p></li>
                    <li><strong>Portfolio Post Type</strong> is a free plugin that registers a custom post type for
                        portfolio items. It also registers separate portfolio taxonomies for tags and categories. The
                        Portfolio grid instances showcased on our demo site was built using custom post types registered
                        by Portfolio Post Type plugin.
                        <p><a href="https://wordpress.org/plugins/portfolio-post-type/" target="_blank">More about Portfolio Post Type
                                →</a></p>
                    </li>
                </ul>
                <hr>
                <h3 id="demo-data">Installing Demo Data<a class="back-to-top" href="#panel"><span
                                class="dashicons dashicons-arrow-up-alt2"></span> Back to top</a></h3>
                <p>If you have <a href="https://livemeshwp.com/beaver-builder/pricing/" title="Livemesh Addons for Beaver Builder Pro" target="_blank">premium version</a> of the plugin installed, you can install the demo data to replicate the
                    plugin demo site to get a head start on building your site. Installing demo data reduces the
                    learning curve associated with trying out the powerful elements part of this plugin.</p>
                <p>The sample data imports the pages, posts and portfolio items part of the demo site. Once you are done with playing around the
                    elements and feel comfortable creating/configuring them, you can delete the unwanted pages/posts that
                    you may not need.</p>
                <p>Prior to installing demo data, make sure you have recommended plugins installed as mentioned above in
                    the <a href="#install-plugins">Recommended Plugins</a> section.</p>
                <p>The demo site <strong>sample-data.xml</strong> file is located in the plugin directory created after unzipping the premium bundle. Once you have access to the sample data file, you can install the demo site by visiting <strong> <a href="<?php echo admin_url() . 'import.php'; ?>" target="_blank"><?php echo __('Tools→Import', 'livemesh-bb-addons') ?></a></strong> and click Choose File. Upload the xml file and follow the steps to
                    import. When the demo data is finished importing, you will have many pages that contain elements
                    configured in them. </p>


                <hr>
                <h3 id="plugin-elements">Working with plugin elements<a class="back-to-top" href="#panel"><span
                                class="dashicons dashicons-arrow-up-alt2"></span> Back to top</a></h3>

                <ul>
                    <li>If you are new to drag and drop page building functions of <a href="https://wordpress.org/plugins/beaver-builder-lite-version/" target="_blank">Beaver Builder</a> and need help, make sure you checkout the <a
                                href="http://kb.wpbeaverbuilder.com/"
                                title="Beaver Builder Documentation" target="_blank">documentation of the Beaver Builder</a> before
                        starting to use this plugin. The site has numerous articles and tutorials to help you
                        get a head start on using the plugin.
                    </li>

                    <li>Once the Livemesh Addons for Beaver Builder plugin is activated, you should see a menu item <strong> <a href="<?php echo admin_url() . 'admin.php?page=livemesh_bb_addons'; ?>"
                                                                                                                        target="_blank"><?php echo __('Beaver Addons', 'livemesh-bb-addons') ?></a></strong> in WordPress admin with four sections - Settings, Custom CSS, Debugging and Premium Upgrade.
                        <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/plugin-settings.png" alt="Beaver Builder Addons Settings"></p>

                        <p>The settings screen <strong> <a href="<?php echo admin_url() . 'admin.php?page=livemesh_bb_addons'; ?>"
                                                           target="_blank"><?php echo __('Beaver Addons→Settings', 'livemesh-bb-addons') ?></a></strong> for the plugin is self-documenting with minimal
                            options. Make sure you choose the theme color scheme in the 'General' tab to help ensure the plugin takes this as the default color for elements like buttons and links which have default color set.</p>

                    </li>

                    <li>Once the Livemesh Addons for Beaver Builder plugin is activated, all of the elements built by the plugin become available for drag and drop in the frontend Beaver Builder. In
                        the Page edit window, click on the <strong>'Page Builder'</strong> tab below the title field of the page edit window to view the 'Launch Page Builder' button on
                        the page edit screen.
                        <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/page-edit-window.png" alt="Page Edit Window"></p>
                        <p>Click on the 'Launch Page Builder' button to bring up the frontend page builder controls of the Beaver Builder. Clicking on the Add Content button at the top opens the
                        page builder sidebar with all of the elements grouped into multiple tabs within the sidebar window.</p>
                        <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/frontend-page-builder.png" alt="Beaver Builder Frontend Page Builder"></p>
                    </li>

                    <li>To add a Livemesh Beaver addon element, just click on the <strong>'Add Content'</strong> button to bring up the sidebar with page builder elements/addons. The plugin elements are grouped under <strong>'Livemesh
                            Addons'</strong> tab. Expanding this 'Livemesh Addons' tab reveals all of the elements part of this plugin. Click on a element listed in the tab and drag it to the page on the left to add the
                        element to the page.
                        <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/add-element-window.png" alt="Page Builder Addons from Beaver Builder"></p>
                    </li>

                    <li>Hovering over the element added to the page builder, you can view the Edit link. Clicking the
                        element also brings up the edit/configure popup screen of a element. <strong>Most of the element options are
                            self-documented</strong> but additional help is provided in the below sections for each of the Livemesh
                        elements.

                        <p>Once the data required for configuring a element is entered, you can save the changes by
                            clicking on the <strong>'Save'</strong> button for the element.</p>
                        <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/addon-edit-window.png" alt="Beaver Builder Addon Edit Window"></p>

                    </li>

                    <li>Many of the plugin elements part of this plugin are container elements that involve a child element to be added to the it. For eg., Team element needs multiple team member elements
                        added to it, Testimonials element is made of multiple child testiominial elements, Services element require that you add multiple service elements individually to make up the list of services.

                        <p>The container elements are listed under 'Livemesh Addons' tab in the 'Add Content' popup screen. Once you add a container element (e.g., Testimonials,
                            Servies, FAQ, Features, Team etc.), the element edit popup window has button control to add child elements. Clicking on the add button
                            brings up child element editor popup window. Once you configure and save changes to the child element, the child element gets added to the main window as contained
                            element part of the parent container element as seen below.</p>
                        <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/services-addon-edit.png" alt="Beaver Builder Addon Edit Window"></p>

                        <p>The child elements thus added can be edited by clicking on the edit links available in the popup edit window for the container control.</p>

                    </li>

                    <li>Beaver Builder being a frontend page builder, the changes you make in the edit window are rendered on the page immediately after you edit and changes values of the individual fields in the container element
                        edit window and upon saving the child element. After you hit the <strong>Save</strong> button on the element popup window,the changes are made persistent on the page. The changes rendered on the page are undone
                        if the <strong>Cancel</strong> button is invoked in the element popup edit window.
                        <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/frontend-page-builder.png" alt="Beaver Builder Frontend Page Builder"></p>

                    </li>

                    <li>Once you are done with building the page by adding elements to it, click on the  <strong>Done</strong> button on the top right portion of the page to save permanently
                        the changes made to the page and close all page builder controls.
                        <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/addon-rendered.png" alt="Beaver Builder Addon Rendered"></p>

                    </li>


                </ul>

                <hr>
                <h3 id="customization">How to customize output generated by addons<a class="back-to-top" href="#panel"><span
                                class="dashicons dashicons-arrow-up-alt2"></span> Back to top</a></h3>
                <p>The strength of this plugin over many others is that this plugin lets you customize almost any piece of HTML
                    generated by an addon part of the plugin. You can move around or modify the output elements to suit your
                    needs - change HTML tags, change sequence of information (e.g., place image at the bottom of the post in a
                    grid), add new CSS classes of your own, add branding material, delete unneeded output element (e.g. remove
                    post meta information), modify information (e.g., truncate description or excerpt generated) etc. with the
                    help of templates and filters provided by the plugin. </p>
                <p>Following are the two ways to customize the output of an addon part of the plugin.</p>
                <ul>

                    <li><p><strong>Filters</strong> are hooks that are provided at almost every customization opportunity that presents itself
                            as the addon renders the widgets by parsing the settings input by the user in the Beaver Builder editor. <strong>About 200+ filters have been
                                provided</strong> to help users customize almost any information output by the addons of this plugin.</p>
                        <p>To locate the filters, the users are encouraged to have a look at the PHP code located in the <code>includes/frontend.php</code> function of
                            the respective addon folder located in <code>includes/modules/</code> folder.</p>

                        <p><a href="https://docs.presscustomizr.com/article/26-wordpress-actions-filters-and-hooks-a-guide-for-non-developers"
                              target="_blank">More about Filters - a guide for non-developers →</a></p>
                    </li>
                    <li><p><strong>Templates</strong> let you modify the HTML generated by an addon by placing an appropriately
                            named PHP file in a folder named 'beaver-builder-addons' in your child theme (or parent theme).</p>
                        <p>Following are the names of the files that plugin looks for to customize the <i>respective</i> addon
                            rendering - <code> clients.php, carousel.php, heading.php, odometers.php, piecharts.php, posts-grid.php,
                                posts-carousel.php, pricing-table.php, services.php, stats-bars.php, team-members.php, testimonials.php,
                                testimonials-slider.php, accordion.php, button.php, faq.php, features.php, gallery.php, gallery-carousel.php,
                                icon-list.php, image-slider.php, posts-block.php, services-carousel.php, slider.php, tabs.php. </code></p>
                        <p>Once a particular template file is found in the theme folder, the corresponding addon rendering code is
                            replaced with that in the template PHP file. The template files are provided with <code>$settings</code> variable to
                            help read the addon settings and then display the output. The current output generated by the plugin addon can
                            be seen in the <code>includes/frontend.php</code> file of the respective addons folder located in <code>includes/modules/</code> folder.<strong> In
                                most cases, it is recommended to copy over the rendering code from the <code>includes/frontend.php</code> file to the template
                                file and modify the same to achieve the desired customization</strong>. A basic knowledge of PHP and HTML is all that is
                            required to customize an addon.</p>
                    <li><strong>Module Templates </strong>(<span class="pro-feature">Pro Feature</span>) are PHP files which can be placed in the <code>beaver-builder-addons/modules/</code> of
                        the child theme to customize the posts grid item information part of posts grid/block addons output by module files located in <code>includes/blocks/modules/</code> folder
                        of the premium version of the plugin. The template files should be named as <code>module-1.php, module-2.php .... , module-12.php, module-13.php</code> to
                        match the corresponding files located in the <code>includes/blocks/modules</code> folder. Only HTML part of <code>render()</code> function needs to
                        be customized in the module template files. The users are recommended to copy over the rendering code part of this function to the corresponding
                        template file and then customize it to their needs. </code>
                    </li>
                </ul>

                <hr>
                <p>The below sections provide help on each of the elements built as part of Livemesh Livemesh Addons for Beaver Builder
                    plugin.</p>

                <hr>
                <h3 id="heading-element">Heading Addon<a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/heading-addon2.png" alt="Heading Addon Rendered"></p>

                <p>The heading element is perhaps the most frequently used element on a page since it displays a heading
                    at the top of a section.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/heading-addon-edit2.png" alt="Heading Addon Edit Window 2"></p>
                <p>It comes in three styles – Style 1, Style 2 and Style 3 which allow variations of headings displayed
                    in various sections.</p>

                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/heading-addon-edit1.png" alt="Heading Addon Edit Window 1"></p>

                <p>The heading consists of the main heading text which is renders as one of the HTML heading tags on the
                    frontend. Additionally, a short text is displayed below the heading and some of the heading styles
                    allow you to input a subtitle which is usually displayed on top of the main heading title.</p>
                <p>You can choose to align the heading left, right or center with center being the default
                    alignment.</p>

                <hr>
                <h3 id="services-element">Services Addon<a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/services-addon2.png" alt="Services Addon"></p>

                <p>Many agencies, freelancers, corporates, products/apps require capturing the services provided by the
                    agency or the features of a product. The services element is designed to help users capture these
                    services or features in a multi-column grid.</p>
                <p>The services element is a container element that requires you to input multiple child service elements
                    that make up the list of services offered by a business or a community.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/services-addon-edit.png" alt="Services Addon Container Element"></p>
                <p>The element supports about 3 different styles (with 2 additional styles in <a href="https://livemeshwp.com/beaver-builder/pricing/" title="Livemesh Livemesh Addons for Beaver Builder Pro" target="_blank">premium version</a> of the
                    plugin) and each of these styles can be customized further by choosing the type of icon desired to
                    represent the service – a font icon or an custom image icon. While the choice of font icons is huge
                    in number and perhaps sufficient for most common services, the icon images can help present the
                    unique nature of the services offered.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/services-addon-edit2.png" alt="Services Addon Edit Window 2"></p>
                <p>Services element supports the following options –</p>
                <ul>
                    <li><strong>Columns per row</strong> – Number of services to display per row of services.</li>
                    <li><strong>Icon Custom Size</strong> – If the icon chosen for services is icon font, you can
                        specify a custom size for the font icon in pixels.
                    </li>
                    <li><strong>Icon Custom Color</strong> – Specify a custom color for the font icon.</li>
                    <li><strong>Icon Custom Hover Color</strong> – Specify a custom hover color for the font icon.</li>
                </ul>

                <p>The <a href="https://livemeshwp.com/beaver-builder/pricing/" title="Livemesh Livemesh Addons for Beaver Builder Pro" target="_blank">premium version</a> of the plugin allows you specify a custom font size, font color and and hover
                    color for the font icon along with providing two additional styles of services/features.</p>



                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/services-addon-edit3.png" alt="Services Addon Edit Window 3"></p>
                <p>Each of the service requires you to input a title for the service/feature and a short description of
                    the service offered or the product feature. Additionally, each service allows you to enter a font
                    icon or an icon image file to represent that service.</p>



                <hr>
                <h3 id="team-members">Team Members<a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/team-member2.jpg" alt="Team Members Addon"></p>

                <p>This element provides an easy way to capture the team members of your organization or an agency.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/team-members-edit.png" alt="Team Members Addon Container Element"></p>
                <p>The Team element is a container element that requires you to input multiple child elements for
                    team members that are part of the team/organization.</p>
                <p>Two different styles are provided with more styles planned in the <a href="https://livemeshwp.com/beaver-builder/pricing/" title="Livemesh Livemesh Addons for Beaver Builder Pro" target="_blank">premium version</a> of the plugin. Most
                    of the styles display the team members in a multi-column grid. The option to specify the number of
                    columns is provided that helps to control the number of team members displayed per row of the team
                    members.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/team-members-edit1.png" alt="Team Members Addon Edit Window 1"></p>

                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/team-members-edit2.png" alt="Team Members Addon Edit Window 2"></p>
                <p>The team member details captured include team member name, position, a short description and the email plus social
                    profile of the individual team members.</p>

                <hr>
                <h3 id="statistics-elements">Statistics Addons<a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/statsbars-piecharts.png" alt="Statistics Addons"></p>

                <p>The plugin features a number of elements that help display statistical information in the form of
                    odometers, piecharts and stats bars. </p>

                <p>The stats elements Piecharts, Stats Bars and Odometers are container elements that are made of
                    multiple child elements each representing a statistic. You add multiple of them to make a set of animated stats
                    that show up on the screen.</p>
                <p>Most of these elements are designed to animate the display of the statistical information or numbers
                    when the users scroll down to the section containing the element.</p>
                <p><strong>Odometers</strong></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/odometers2.png" alt="Odometer Addon"></p>

                <p>This element displays one or more animated odometer statistics in a multi-column grid. This number
                    statistic requires a start and an end value with a title and icon providing the information about
                    what the number represents – like a download number or number of products sold or customers
                    gained.</p>
                <p>The element animates from the start value to the end value when the user scrolls down to the section.
                    You can control the number of such odometers displayed per row.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/odometers-edit.png" alt="Odometer Edit Window"></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/odometers-edit1.png" alt="Odometer Edit Window"></p>

                <p><strong>Stats Bars</strong></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/statsbars-piecharts.png" alt="Stats Bar Piechart Addons"></p>

                <p>Stats Bars capture percentage statistics like coverage area, skills gained, survey findings, usage
                    statistics etc. that typically require bar charts to represent them. Each statistical item requires
                    a percentage value, a title describing the number. The user can choose to display the bar charts in
                    multiple or single color with the help of color choice available with each value input.</p>
                <p>The element animates from the zero to the percentage value set for the item when the user scrolls down
                    to the section containing the element. The bars are placed one below the other horizontally.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/stats-bars-edit.png" alt="Stats Bar Addon Edit Window"></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/stats-bars-edit1.png" alt="Stats Bar Addon Edit Window"></p>

                <p><strong>Piecharts</strong></p>
                <p>Piecharts provide an alternative way to display percentage stats. When the users scrolls down and the
                    chart becomes visible, the element animates from zero to percentage value provided for the statistic.
                    A bar of user chosen color moves along a track to display the percentage information. An option to
                    specify the number of charts displayed per row is provided.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/piecharts-edit.png" alt="Piechart Addon Edit Window"></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/piecharts-edit1.png" alt="Piechart Addon Edit Window"></p>

                <hr>
                <h3 id="testimonials-elements">Testimonials Addons<a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/testimonials.png" alt="Testimonials Addon"></p>

                <p>The plugin features two elements for capturing testimonials received for your product or business or
                    services. Most agencies, corporates, small businesses, freelancers and products/apps require
                    testimonials to displayed prominently on the site to help convert visitors to customers. The two
                    elements provided are elegantly designed to achieve greater conversion rate.</p>
                <p>The testimonials information include details about the person/company endorsing the product/service;
                    details like name, company, website of this person/organization along with an image representing
                    this person/entity.</p>
                <p><strong>Testimonials</strong></p>
                <p>The regular <strong>testimonials element</strong> displays multiple testimonials in a row with the
                    user having the option to specify the number of items per row. This is useful if you need a large
                    number of testimonials to be visible instantly when the user scrolls down to view the testimonials
                    section.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/testimonials-edit1.png" alt="Testimonials Addon Edit Window 1"></p>

                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/testimonials-edit2.png" alt="Testimonials Addon Edit Window 2"></p>

                <p><strong>Testimonials Slider</strong></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/testimonials2.png" alt="Testimonials Slider Addon"></p>
                <p>The <strong>testimonials slider element</strong> is useful for display of endorsements/recommendations
                    with large amount of text for each testimonial. The slider displays the testimonials as a slideshow
                    with multiple element options provided to control/customize this slideshow – options like speed of
                    switching, speed of animation, whether to pause the slideshow on hover, controls needed for manual
                    navigation by the user etc. The slider is completely responsive and touch swipe controls available
                    for easy navigation on smartphones/tablets.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/testimonials-slider-edit1.png" alt="Testimonials Slider Edit Window 1"></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/testimonials-slider-edit2.png" alt="Testimonials Slider Edit Window 2"></p>
                <p>The testimonials slider provides quite a few options to customize the behavior of the slider. Options include slideshow speed, animation speed, slider navigation contols etc.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/testimonials-slider-settings.png" alt="Testimonials Slider Settings"></p>

                <hr>
                <h3 id="posts-carousel">Posts Carousel<a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/posts-carousel.jpg" alt="Post Carousel Addon"></p>

                <p>The responsive carousel helps display posts or any custom post types like your portfolio entries with
                    controls available for easy navigation of the items displayed. The element features a Loop Query
                    tab to help choose posts or custom posts to display. This powerful tool has number of fields to
                    control what gets displayed and in what order.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/posts-carousel-edit1.png" alt="Post Carousel Build Query Tool"></p>

                <p>The 'Loop Query' tab has the following options for filtering posts –</p>
                <ol>
                    <li><strong>Post Type</strong> – Select the custom post type that you need the element for. By default the Posts type will be selected and blog posts will be displayed. The post type chosen
                        also influences the fields part of the Filter section. For example, choosing Posts lets you filter the posts by category, category or individual posts. Choosing 'Portfolio' enables you to
                        filter the portfolio items by individual portfolio items or by portfolio category or by the author of the portfolio items.
                    </li>
                    <li><strong>Order By</strong> – Specify the order of the posts displayed - by post date, title, modified date, author
                        menu order, comment count etc.
                    </li>
                    <li><strong>Order</strong> – Can be ascending or descending sort order applied to the Order By paramter above.
                    </li>
                    <li><strong>Posts/Portfolio/Pages</strong> – This field enabled you to choose specific
                        posts or custom post types that you would like to display in your element. This helps filter the posts
                        that the user sees as part of the grid. The field autocompletes the post titles you type in this field.
                    </li>
                    <li><strong>Categories/Portfolio Categories</strong> – If you need to filter the posts or portfolio items by specific category, you can specify
                        the same here. The field autocompletes the category names you type in here.
                    </li>
                    <li><strong>Tags</strong> –  If you need to filter the posts by specific tag, you can specify
                        the tag names here. The field autocompletes the tag names you type in here.
                    </li>
                    <li><strong>Author</strong> – If you need to limit the portfolio items or pages displayed to certain authors only, you can
                        use this field to specify the chosen authors here by specifying their names.
                    </li>
                </ol>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/posts-carousel-edit2.png" alt="Post Carousel Edit Window"></p>

                <p>The posts carousel has numerous other options to control the display of posts or custom post types.
                    Some of these are –</p>
                <ul>
                    <li><strong>Number of posts to be displayed.</strong> – Set the number of posts you wish you display in the element.
                    </li>
                    <li><strong>Choose Taxonomy to display info</strong> – When the post info is displayed, the specific
                        taxonomy you want the info to use. For example, choosing category will display category
                        information for posts while choosing ‘post_tag’ would display the tag information for posts.
                    </li>
                    <li><strong>Link images to Posts</strong> – Make the images link to the posts or custom post types
                        they represent.
                    </li>
                    <li><strong>Display post titles</strong> – Checking this box will display post title below the
                        featured image for the posts or custom post type.
                    </li>
                    <li><strong>Display post excerpt/summary</strong> – Display summary information for the posts below
                        the featured image and post title.
                    </li>
                    <li><strong>Post Meta</strong> – Display post meta information like published date, author name,
                        taxonomy information below the posts. The specific taxonomy chosen above under “Choose Taxonomy
                        to display info” will be used for display taxonomy information.
                    </li>
                </ul>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/posts-carousel-edit3.png" alt="Post Carousel Addon Settings"></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/posts-carousel-edit4.png" alt="Post Carousel Addon Settings"></p>

                <p><strong>Carousel Settings</strong> – This section has options that control how the carousel is
                    displayed. Options include autoplay speed, gutter value between post items in various resolutions,
                    navigation controls for carousel, number of columns or items to display before making the user to
                    scroll for additional items etc.</p>
                <ul>
                    <li><strong>Prev/Next Arrows</strong> – Display navigation for the carousel.</li>
                    <li><strong>Show dot indicators for navigation</strong> – Display control navigation or pagination
                        controls for the carousel.
                    </li>
                    <li><strong>Autoplay</strong> – Display carousel as a slideshow.</li>
                    <li><strong>Autoplay speed in ms</strong> – The time between display of each page of images when
                        Autoplay option is enabled.
                    </li>
                    <li><strong>Autoplay animation speed in ms</strong> – The time taken for animation that moves the
                        carousel to next or previous page of items.
                    </li>
                    <li><strong>Pause on mouse hover</strong> – Pause the slideshow if the user has mouse hovered over
                        the carousel contents.
                    </li>
                    <li><strong>Columns per row</strong> – Number of gallery items visible at any given point of time
                        without scrolling. You can control the number of items visible at various resolutions like those of tablet/smartphone by providing
                        appropriate values in the 'Responsive' tab.
                    </li>
                    <li><strong>Columns to scroll</strong> – With each scroll action – using the prev/next arrows or the
                        dotted navigation, specify the number of items to scroll for each invocation of the navigation
                        controls. You can control the number of items to scroll at various resolutions like those of tablet/smartphone by providing
                        appropriate values in the 'Responsive' tab.
                    </li>
                    <li><strong>Gutter</strong> – The spacing in pixels between images/videos in the carousel. You can
                        control the spacing/gutter at various resolutions like those of tablet/smartphone by providing
                        appropriate values in the 'Responsive' tab.</li>
                </ul>



                <hr>
                <h3 id="carousel-element">Carousel<a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/generic-carousel.jpg" alt="Generic Carousel Addon"></p>

                <p>Carousel is a generic carousel of custom HTML content of your choice. Possibilities are endless – image
                    carousels with textual content describing the images, video carousels, event carousels with link to
                    the events, a carousel of team of volunteers, a collection of books sold on Amazon etc.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/livemesh-carousel-edit.png" alt="Generic Carousel Addon Edit Window"></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/livemesh-carousel-edit1.jpg" alt="Generic Carousel Addon Edit Window"></p>

                <p>If you need a carousel of custom content HTML of your choice, this element helps achieve the same. For
                    the HTML content, you will need to provide your own custom CSS under Settings for the plugin.
                    While posts carousel helps you display carousel items derived from posts or custom post types, this
                    element lets you display any well-formed HTML content as items in a carousel. You may use the
                    WordPress visual editor to construct the required content. </p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/livemesh-carousel-settings.png" alt="Generic Carousel Settings Window"></p>

                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/livemesh-carousel-settings2.png" alt="Generic Carousel Settings Window"></p>

                <p>The section ‘Carousel Settings’ has options that control how the carousel is displayed. Options
                    include autoplay speed, gutter value between post items in various resolutions, navigation controls
                    for carousel, number of columns or items to display before making the user to scroll for additional
                    items etc. The carousel settings are explained in the help section above for Posts Carousel.</p>
                <hr>
                <h3 id="grid-element">Posts Grid<a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/livemesh-grid.jpg" alt="Posts Grid Addon"></p>

                <p>Perhaps the most popular and most important of all elements part of all elements part of this plugin,
                    Posts Grid helps you build a multi-column grid of posts or custom post types. The posts displayed
                    are filterable by taxonomy terms.</p>

                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/livemesh-grid2.jpg" alt="Posts Grid Addon"></p>
                <p>Using the Grid element, you can construct a portfolio of your work/services/products. We recommend you
                    use the popular plugin – <a title="Portfolio Post Type Plugin"
                                                href="https://wordpress.org/plugins/portfolio-post-type/">https://wordpress.org/plugins/portfolio-post-type/</a>
                    for building a collection of portfolio entries. Once the portfolio entries are in place, make sure
                    you select Portfolio Post type under Post Type entry in Build Tools window as explained below.</p>

                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/livemesh-grid-pagination.jpg" alt="Posts Grid Pagination"></p>
                <p>The <a href="https://livemeshwp.com/beaver-builder/pricing/" title="Livemesh Addons for Beaver Builder Pro" target="_blank">premium version</a> of the plugin has support for pagination, lazy load with load more button and
                    lightbox option for images. The additional posts are loaded via AJAX when the user navigates through
                    the pages populated or when the user hits the Load More button.</p>

                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/livemesh-grid-loadmore.jpg" alt="Posts Grid AJAX Load More"></p>

                <p>The element features a 'Loop Query' tab to help choose posts or custom posts to display. This
                    powerful tool has number of fields to control what gets displayed and in what order.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/livemesh-grid-build-posts-query.png" alt="Build Post Query Tool"></p>

                <p>The 'Loop Query' tab has the following options for filtering posts –</p>
                <ol>
                    <li><strong>Post Type</strong> – Select the custom post type that you need the element for. By default the Posts type will be selected and blog posts will be displayed. The post type chosen
                        also influences the fields part of the Filter section. For example, choosing Posts lets you filter the posts by category, category or individual posts. Choosing 'Portfolio' enables you to
                        filter the portfolio items by individual portfolio items or by portfolio category or by the author of the portfolio items.
                    </li>
                    <li><strong>Order By</strong> – Specify the order of the posts displayed - by post date, title, modified date, author
                        menu order, comment count etc.
                    </li>
                    <li><strong>Order</strong> – Can be ascending or descending sort order applied to the Order By paramter above.
                    </li>
                    <li><strong>Posts/Portfolio/Pages</strong> – This field enabled you to choose specific
                        posts or custom post types that you would like to display in your element. This helps filter the posts
                        that the user sees as part of the grid. The field autocompletes the post titles you type in this field.
                    </li>
                    <li><strong>Categories/Portfolio Categories</strong> – If you need to filter the posts or portfolio items by specific category, you can specify
                        the same here. The field autocompletes the category names you type in here.
                    </li>
                    <li><strong>Tags</strong> –  If you need to filter the posts by specific tag, you can specify
                        the tag names here. The field autocompletes the tag names you type in here.
                    </li>
                    <li><strong>Author</strong> – If you need to limit the portfolio items or pages displayed to certain authors only, you can
                        use this field to specify the chosen authors here by specifying their names.
                    </li>
                </ol>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/livemesh-grid-edit1.png" alt="Posts Grid Edit Window"></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/livemesh-grid-edit2.png" alt="Posts Grid Edit Window"></p>

                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/livemesh-grid-edit3.png" alt="Posts Grid Edit Window"></p>


                <p>The grid element has numerous other options to control the display of posts or custom post types. Some
                    of these are –</p>

                <ul>
                    <li><strong>Number of items to be displayed per page.</strong> – Set the number of posts you wish you display in the element. If
                        the element does not support pagination, the number of posts displayed is limited by the number
                        specified here. This is also the number of posts to display per page when the element supports
                        pagination as is the case with Posts Grid element. Enter "All" to display all posts.
                    </li>
                    <li><strong>Choose Taxonomy to display and filter on</strong> – The terms of this taxonomy chosen
                        will be used for filtering the posts if ‘Filterable’ option is checked. When the post info is
                        displayed, the specific taxonomy you want the info to use. For example, choosing category will
                        make the posts filterable on category while choosing ‘post_tag’ would make the posts filterable
                        by post tags instead of category.
                    </li>
                    <li><strong>Choose a Layout for the grid</strong> – You may choose Masonry or Fit Rows layout for
                        the grid.
                    </li>
                    <li><strong>Pagination options (<span class="pro-feature">Pro!</span>)</strong>– Choose pagination type or choose None if no
                        pagination is desired. <strong>If you choose Paged or Load More option, make sure the ‘Post per
                            page’ field value is set in the Build Query window to control number of posts to display per
                            page.</strong><br>
                        – If the Pagination option chosen is Paged, the grid displays a paginated grid of entries with
                        links to various pages displayed at the bottom of the grid, provided sufficient number of
                        entries of this post type has been created by the user and the Posts Per Page value is set to a
                        lower value than the number of entries created.<br>
                        – If the Pagination option chosen is Load More, the grid displays a Load More button below the
                        grid of posts/portfolio with an option count of remaining posts/post types yet to loaded. When
                        the users hits the Load More button, a number of posts/portfolio entries equal to ‘Posts per
                        Page’ value will be lazy loaded into the element via AJAX. Upon loading all of the remaining
                        entries, the Load More button is no longer shown.<br>
                        Do check the option ‘Display count of posts yet to be loaded with the Load More button’ to
                        display the remaining post count with the Load More button.
                    </li>
                    <li><strong>Link images to Posts/Portfolio</strong> – Make the post images link to the posts or
                        custom post types they represent.
                    </li>
                    <li><strong>Enable Lightbox (<span class="pro-feature">Pro!</span>)</strong>– If checked, the images part of the grid entries
                        will have a lightbox option enabled to display a gallery of post images in a popup display.
                    </li>
                    <li><strong>Display post/project titles</strong> – Checking this box will display post/portfolio
                        entry title below the featured image for the posts or custom post type.
                    </li>
                    <li><strong>Display post/portfolio excerpt/summary</strong> – Display summary information for the
                        posts/portfolio items below the featured image and post title.
                    </li>
                    <li><strong>Post Meta</strong> – Display post meta information like published date, author name,
                        taxonomy information below the posts. The specific taxonomy chosen above under “Choose Taxonomy
                        to display and filter on” will be used for display taxonomy information.
                    </li>
                    <li><strong>Columns per row</strong> – The number of posts/portfolio items to display in each row on
                        desktop.
                    </li>
                    <li><strong>Gutter options</strong> – The spacing in pixels between each entry in the grid. If you
                        need a packed layout, specify zero here. You can control the gutter/spacing at various resolutions like those of tablet/smartphone by providing
                        appropriate values in the 'Layout' tab.
                    </li>
                </ul>


                <hr>
                <h3 id="clients-element">Clients<a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/clients-addon.jpg" alt="Clients Addon Edit Window"></p>

                <p>Whether you are freelancer or run a small business, agency or represent a big corporate house, you
                    have a list of clients that you have worked with. This element lets you create a list of these
                    clients with banner images representing these clients.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/clients-edit1.png" alt="Clients Addon Edit Window"></p>


                <p>The clients element is a container element that requires you to input multiple child elements
                    representing individual clients that make up the list of clients to be displayed on the frontend.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/clients-edit2.png" alt="Clients Addon Edit Window"></p>

                <p>For each of the client, you provide a client name, a banner image for the client and a URL for their
                    website. The client name is shown on user hovering over the banner image and title text is
                    optionally a link pointing to the website of the client, if that link is provided by the user.</p>
                <p>The collection of clients will be displayed in a multi-column grid. The ‘Columns per Row’ option lets
                    you control the number of client entries per row of clients displayed.</p>

                <hr>
                <h3 id="pricing-table">Pricing Table<a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/pricing-plan.png" alt="Pricing Plan Addon"></p>

                <p>The pricing plans offered by your business can be captured with pricing plan element. The pricing
                    plans are displayed in a multi-column grid.</p>

                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/pricing-plan-edit1.png" alt="Pricing Plan Editing"></p>

                <p>The pricing plan element is a container element that is made up of child elements each of which represent
                    a pricing plan.</p>

                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/pricing-plan-edit2.png" alt="Pricing Plan Edit Window 1"></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/pricing-plan-edit3.png" alt="Pricing Plan Edit Window 2"></p>

                <p>For each of the pricing plan, provide the following information –</p>
                <ul>
                    <li><strong>Pricing Plan Title</strong> – The title for the pricing plan like Standard, Premium,
                        Developer etc.
                    </li>
                    <li><strong>Tagline Text</strong> – Provide any subtitle or taglines like “Most Popular”, “Best
                        Value”, “Best Selling”, “Most Flexible” etc. that you would like to use for this pricing plan.
                        Usually displayed above the pricing plan title.
                    </li>
                    <li><strong>Image</strong> – Optional image or icon to represent the pricing plan.</li>
                    <li><strong>Price Tag</strong> – This is where you specify the actual price tag for the plan along
                        with the currency. HTML is allowed.
                    </li>
                    <li><strong>Text for Pricing Link/Button</strong> – Specify the text for the link or a button
                        displayed at the bottom of the pricing plan. This link takes the user to the purchase page.
                    </li>
                    <li><strong>URL for the Pricing link/button</strong> – Provide the target URL for the link or the
                        button shown for this pricing plan. This link takes the user to the purchase page. Check the
                        option ‘Open Button URL in a new window’ if you need the link to open the target page in a new
                        tab or window of the browser.
                    </li>
                    <li><strong>Highlight Pricing Plan</strong> – Specify if you want to highlight the pricing plan.
                        This would be most likely plan your user would choose to sign up for.
                    </li>
                    <li><strong>Pricing Columns per row</strong> – The number of pricing plans to display per row of
                        plans. Most businesses choose to fit in all of their plans into a single row.
                    </li>
                    <li><strong>Pricing Plan Details</strong> – Enter the content for the pricing plan that include information
                        about individual features of the pricing plan. For prebuilt styling, enter shortcodes content like -
                        [labb_pricing_item title="Storage Space" value="50 GB"]
                        [labb_pricing_item title="Video Uploads" value="50"]
                        [labb_pricing_item title="Portfolio Items" value="20"].
                        You can also enter the pricing plan content in custom forms like HTML lists but you need to provide CSS
                        required to style the list items.
                    </li>
                </ul>

                <hr>
                <h3 id="tabs-accordions">Tabs and Accordions - <span class="pro-feature">Pro!</span><a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/tab-addon.jpg" alt="Tabs Addons"></p>

                <p>A large collection of finely designed styles are supported by tabs function of the plugin. Tabs can be of two
                    types – vertical and regular horizontal style tabs. </p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/tabs-addon2.jpg" alt="Tabs Addons"></p>
                <p>There are a total of 10 tab styles to choose
                    from. There is simply no another plugin or theme that supports so many elegant styles for tabs.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/tabs-edit1.png" alt="Tabs Addon Edit Window"></p>

                <p>Tabs are container elements with each of the tabs being child elements that require two attributes – a tab title and tab content. For styles that support icons, choice of
                    displaying a font icon or an icon image along with the tab title is supported.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/tabs-edit2.png" alt="Tabs Addon Edit Window"></p>
                <p>Mobile Resolution – Indicate the device resolution in pixels for displaying the tab in responsive
                    mobile mode. The tabs are designed to work well in all device resolutions without sacrificing
                    usability.</p>
                <p><strong>Accordions</strong></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/accordions.png" alt="Accordion Addon"></p>

                <p>Accordions support panels that are collapsed by default. The panels can be opened by clicking on
                    panel title bar.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/accordion-edit1.png" alt="Accordion Addon Edit Window"></p>

                <p>Each of the panels part of an accordion require the user to input a tab title and tab content for the child elements of the container accordion element.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/accordion-edit2.png" alt="Accordion Addon Edit Window"></p>
                <p>Option to allow multiple panels to be open is provided.</p>

                <hr>
                <h3 id="button-element">Buttons – <span class="pro-feature">Pro!</span><a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/buttons.png" alt="Buttons Addon"></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/buttons2.png" alt="Buttons Addon"></p>

                <p>The plugin lets you create buttons of multiple colors that you would use in your site. The supported
                    colors are Orange, Blue, Teal, Cyan, Green, Pink, Black, Red, Transparent and Semi Transparent (for
                    dark backgrounds). You can choose a custom color and custom hover color too for the button to create
                    a button of your chosen color.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/button-edit1.png" alt="Button Addon Edit Window 1"></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/button-edit2.png" alt="Button Addon Edit Window 2"></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/button-edit3.png" alt="Button Addon Edit Window 3"></p>

                <p>You may choose to create a button of Default color which is the color derived from the Theme Color
                    set in the plugin options.</p>
                <p>Additional options provided are button size, rounded and alignment – center, right, left and
                    None.</p>
                <p>You can choose to display an icon along with the button text. The icon can be a icon font or an
                    image.</p>
                <p>The element options are mostly self-explanatory and you can view a live preview of the buttons <a
                            title="Livemesh Beaver Builder Button Addon Demo"
                            href="https://livemeshwp.com/beaver-builder/buttons/">here</a>.</p>


                <hr>
                <h3 id="icon-list">Icon List – <span class="pro-feature">Pro!</span><a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/icon-lists.png" alt="Icon Lists Addon"></p>

                <p>The icon list element is a container element that is extremely useful for creating a list of icons with optional links to sites or
                    pages that the icons represent. Examples include social media profiles, icon lists representing
                    payment options or download platforms or a quick summary of services.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/icon-list-edit1.png" alt="Icon Lists Addon Editing"></p>
                <p>Each of the icons, which are child elements part of the list, have a title, optional target URL and the icon itself can be a font
                    icon or an custom image. The title for the icon is displayed as a tooltip on mouse hover.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/icon-list-edit2.png" alt="Icon Lists Addon Edit Window 2"></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/icon-list-edit3.png" alt="Icon Lists Addon Edit Window 3"></p>

                <p>Following options are available –</p>
                <ul>
                    <li><strong>Icon/Image size in pixels</strong> – Custom size of the icons displayed.</li>
                    <li><strong>Icon color</strong> – If the icons chosen are font icons, you may specify a custom color
                        for the icons.
                    </li>
                    <li><strong>Icon hover color</strong> – The color of the font icons on mouse hover.</li>
                    <li><strong>Open the links in new window</strong> – If a target URL is specified for a link, whether
                        the links should open in a new window.
                    </li>
                    <li><strong>Alignment</strong> – The icon list can be chosen to align at the center, left, right of
                        it’s position in a page.
                    </li>
                </ul>


                <hr>
                <h3 id="image-slider">Image Slider – <span class="pro-feature">Pro!</span><a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-slider-flex.jpg" alt="Image Slider Addon"></p>

                <p>The image slider lets you create a responsive slider of images with a multiple options to customize
                    the function and presentation of the slider. The slider can be used anywhere on a page and can also
                    function as the main slider of the page displayed at the top of the page. The slider supports
                    multitude of options but for most users, the default options provided should suffice.</p>

                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-slider-edit1.png" alt="Image Slider Addon Edit Window"></p>

                <p>The slider element is a container element that requires you to input multiple child slide elements
                    that are part of the slider.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-slider-settings1.png" alt="Image Slider Addon Settings Window 1"></p>

                <ul>
                    <li><strong>Class</strong> – Set a unique CSS class for the slider. (optional). This lets you
                        customize the slider content, specially the slider caption content via Custom CSS.
                    </li>
                    <li><strong>Slider Type</strong> – The slider provides you with the choice of four popular slider
                        libraries – Flex Slider, Nivo Slider, Slick Slider and Responsive Slider.
                    </li>
                    <li><strong>Flex Slider</strong> – Perhaps the most popular of all and actively maintained by the
                        open source community. Provides features like touch navigation, thumbnail navigation and many
                        options to customize the slider.
                        <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-slider-flex.jpg" alt="Image Flex Slider Addon"></p>
                    </li>
                    <li><strong>Nivo Slider</strong> – Has been a very popular slider for many years now and loved by
                        many for number of beautiful transition effects that it supports.

                        <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-slider-nivo.jpg" alt="Nivo Image Slider Addon"></p>
                    </li>
                    <li><strong>Slick Slider</strong> – The most popular open source library for building carousels.
                        Responsive controls like touch swipe controls, desktop mouse dragging makes it a compelling
                        choice.
                    </li>
                    <li><strong>Responsive Slider</strong> – Simplest and most lightweight of all sliders (just 1 KB in
                        size minified and gzipped). If you need a slider that uses minimal resources, this option should
                        be worth trying out.
                        <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-slider-responsive.jpg" alt="Responsive Image Slider Addon"></p>
                    </li>
                    <li><strong>Choose Caption Style</strong> – There are two styles of captions – one center aligned
                        and the other left aligned. While center aligned caption is more suited to situation where the
                        slider image is functioning more like a background for the caption that is a call to action or a
                        message to the visitor, the style 2 is useful when images speak for themselves and captions
                        describe the images.
                    </li>
                </ul>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-slider-edit2.png" alt="Image Slider Addon Edit Window"></p>
                <p>Each slide for the slider allow for following options –</p>
                <ul>
                    <li><strong>Slide Image</strong> – The image for the slide itself.</li>
                    <li><strong>URL to link to by image and caption heading</strong>. (optional) – Specify the URL to
                        which the slide image and caption heading should link to.
                    </li>
                </ul>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-slider-edit3.png" alt="Image Slider Addon Edit Window"></p>
                <p>Slider Caption Details</p>
                <ul>
                    <li><strong>Caption Heading</strong> – The heading title for the caption</li>
                    <li><strong>Caption Sub-heading(Optional)</strong> – Subtitle for the caption.</li>
                    <li><strong>Button text</strong> – The text for the button displayed below the caption.</li>
                    <li><strong>Button URL</strong> – URL for the button.</li>
                    <li><strong>Open URL in a new window</strong> – Specify the button click opens the link in a new
                        browser window.
                    </li>
                    <li><strong>Color</strong> – The color of the button. The supported colors are Orange, Blue, Teal,
                        Cyan, Green, Pink, Black, Red, Transparent and Semi Transparent.
                    </li>
                    <li><strong>Button Size</strong> – Can be large, medium or small.</li>
                    <li><strong>Display rounded button</strong> – Make the button display with rounded edges.</li>
                </ul>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-slider-settings1.png" alt="Image Slider Addon Settings Window 2"></p>

                <p><strong>Slider Settings</strong> – The element has a number of options available for customizing the
                    slider experience –</p>
                <ul>
                    <li><strong>Slider Type</strong> – The slider provides you with the choice of four popular slider
                        libraries – Flex Slider, Nivo Slider, Slick Slider and Responsive Slider.
                    </li>
                    <li><strong>Animation</strong> – Can be Slide or Fade. Applies when the slider type chosen is Flex
                        Slider or the Slick slider. Nivo supports a number of custom transitions while Responsive slider
                        is fade only.
                    </li>
                    <li><strong>Sliding Direction</strong> – Can be vertical or horizontal. Supported by Flex and Slick
                        sliders.
                    </li>
                    <li><strong>Control navigation</strong> – Create navigation for paging control of each slide.</li>
                    <li><strong>Direction navigation</strong> – Create navigation for previous/next navigation.</li>
                    <li><strong>Thumbnails Navigation</strong> – Use slider image thumbnails for slider navigation.
                        Supported by Flex and Nivo sliders.
                    </li>
                    <li><strong>Randomize slides</strong> – Display slides in random order.</li>
                    <li><strong>Pause on hover</strong> – Pause the slideshow when hovering over slider, then resume
                        when no longer hovering.
                    </li>
                    <li><strong>Pause on action</strong> – Pause the slideshow when interacting with control elements.
                        Supported by Flex Slider only.
                    </li>
                    <li><strong>Loop</strong> – Should the animation loop?</li>
                    <li><strong>Slideshow or Autoplay</strong> – Animate slider automatically without user intervention.
                    </li>
                    <li><strong>Slideshow speed (default – 5000)</strong> Set the speed of the slideshow cycling, in
                        milliseconds when the Slideshow option is checked.
                    </li>
                    <li><strong>Animation speed</strong> – Set the speed of animations like fade or slide, in
                        milliseconds.
                    </li>
                </ul>

                <hr>
                <h3 id="image-video-gallery">Image/Video Gallery – <span class="pro-feature">Pro!</span><a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-gallery-dark.jpg" alt="Image Gallery Addon"></p>

                <p>This powerful element lets you create a gallery of images or videos displayed in a multi-column grid.
                    An instance of this element can capture a portfolio of work like that of a photographer or graphic
                    designer/artist.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/video-gallery.jpg" alt="Video Gallery Addon"></p>
                <p>It can be used to create a gallery of videos uploaded to YouTube/Vimeo – useful for video bloggers,
                    video tutorial sites, video marketers, small businesses or websites with a major presence on
                    YouTube/Vimeo. The videos can be played with a single click of the play button on the gallery item
                    as seen in this <a title="Video Gallery"
                                       href="https://livemeshwp.com/beaver-builder/video-gallery/">demo page</a>.
                </p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-gallery-edit1.png" alt="Image Gallery Addon Edit Window"></p>
                <p>The image gallery element is a container element that requires you to add child elements representing gallery items.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-gallery-edit2.png" alt="Image Gallery Addon Edit Window"></p>
                <p>The configuration for creating a video gallery is similar to that of image gallery; a video URL would be required along with image that acts as a placeholder.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/video-gallery-edit2.png" alt="Video Gallery Addon Edit Window"></p>

                <p>Each of the gallery items capture following information –</p>
                <ul>
                    <li><strong>Item Type</strong> – Can be a Image or YouTube Video or Vimeo Video.</li>
                    <li><strong>Item Label</strong> – The label or name for the gallery item. This label is displayed on
                        mouse hover over the image.
                    </li>
                    <li><strong>Gallery Image</strong> – The image for the gallery item. If item type chosen is YouTube
                        or Vimeo video, the image will be used as a placeholder image for video.
                    </li>
                    <li><strong>Item Tag(s)</strong> – One or more comma separated tags for the gallery item. Useful
                        when items are made filterable.
                    </li>
                    <li><strong>Page URL</strong> – The URL of the page to which the image gallery item points to
                        (optional).
                    </li>
                    <li><strong>Video URL</strong> – If the item represents a Vimeo or YouTube video, provide the URL to
                        the video. Any gallery item representing a video is given a play button. Upon clicking the play
                        button, the Vimeo/YouTube video opens up in a lightbox window for playing.
                    </li>
                </ul>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-gallery-settings1.png" alt="Image Gallery Addon Edit Window 3"></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-gallery-settings2.png" alt="Image Gallery Addon Pagination"></p>

                <p>The Gallery element comes with following settings –</p>
                <ul>
                    <li><strong>Filterable</strong> – If the videos or images are tagged, the items can be made
                        filterable on the tags specified by the user just like a Portfolio Grid.
                    </li>
                    <li><strong>Layout for the grid</strong> – Comes with Masonry and FitRows option.</li>
                    <li><strong>Pagination</strong> – Choose pagination type or choose None if no pagination is desired.
                        Make sure you enter the items per page value in the option ‘Number of items to be displayed per
                        page and on each load more invocation’ field below to control number of items to display per
                        page.
                    </li>

                    <li><strong>Columns per row</strong> – Specify the number of images/videos to display per row of the
                        grid.
                    </li>
                    <li><strong>Enable Lightbox Gallery</strong> – The lightbox for the image opens up a bigger image in
                        a popup window. You can navigate among the gallery items here.
                    </li>
                    <li><strong>Gutter</strong> – The spacing between columns that contain image/video in the grid. You
                        can control the spacing/gutter at various resolutions like those of tablet/smartphone.
                    </li>
                </ul>

                <hr>
                <h3 id="image-video-carousel">Image/Video Carousel – <span class="pro-feature">Pro!</span><a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-carousel.jpg" alt="Image Carousel Addon"></p>

                <p>You can create a carousel of images/videos (or a combination of both) for showcasing your work or
                    video content uploaded to Vimeo/YouTube. An instance of this element can capture a portfolio of work
                    like that of a photographer or graphic designer/artist.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/video-carousel.jpg" alt="Video Carousel Addon"></p>
                <p>It can be used to create a carousel of videos uploaded to YouTube/Vimeo – useful for video bloggers,
                    video tutorial sites, video marketers, small businesses or websites with a major presence on
                    YouTube/Vimeo. The videos can be played with a single click of the play button on the gallery item
                    as seen in this <a title="Video Gallery"
                                       href="https://livemeshwp.com/beaver-builder/video-gallery/">demo page</a>.
                </p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-carousel-edit1.png" alt="Image Carousel Addon Edit Window"></p>

                <p>The gallery carousel element is a container element that requires you to add child elements representing carousel items.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-carousel-edit2.png" alt="Image Carousel Addon Edit Window"></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/video-carousel-edit2.png" alt="Video Carousel Addon Edit Window"></p>
                <p>The option for creation of video carousel is similar to that of image carousel - requires input of URL for the Vimeo/YouTube video along with placeholder image. </p>

                <p>Each of the gallery items in the carousel capture following information –</p>
                <ol>
                    <li><strong>Item Type</strong> – Can be a Image or YouTube Video or Vimeo Video.</li>
                    <li><strong>Item Label</strong> – The label or name for the gallery item. This label is displayed on
                        mouse hover over the image.
                    </li>
                    <li><strong>Gallery Image</strong> – The image for the gallery item. If item type chosen is YouTube
                        or Vimeo video, the image will be used as a placeholder image for video.
                    </li>
                    <li><strong>Item Tag(s)</strong> – One or more comma separated tags for the gallery item. Useful
                        when items are made filterable.
                    </li>
                    <li><strong>Page URL</strong> – The URL of the page to which the image gallery item points to
                        (optional).
                    </li>
                    <li><strong>Video URL</strong> – If the item represents a Vimeo or YouTube video, provide the URL to
                        the video. Any gallery item representing a video is given a play button. Upon clicking the play
                        button, the Vimeo/YouTube video opens up in a lightbox window for playing.
                    </li>
                </ol>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-carousel-settings1.png" alt="Image Carousel Addon Settings Window"></p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/image-carousel-settings2.png" alt="Image Carousel Addon Settings Window"></p>

                <p>The section ‘Carousel Settings’ has options that control how the carousel is displayed. Options
                    include autoplay speed, gutter value between post items in various resolutions, navigation controls
                    for carousel, number of columns or items to display before making the user to scroll for additional
                    items etc.</p>
                <ul>
                    <li><strong>Enable Lightbox Gallery</strong> – Enable lightbox gallery for images. The lightbox for
                        the image opens up a bigger image in a popup window. You can navigate among the gallery items
                        here.
                    </li>
                    <li><strong>Prev/Next Arrows</strong> – Display navigation for the carousel.</li>
                    <li><strong>Show dot indicators for navigation</strong> – Display control navigation or pagination
                        controls for the carousel.
                    </li>
                    <li><strong>Autoplay</strong> – Display carousel as a slideshow.</li>
                    <li><strong>Autoplay speed in ms</strong> – The time between display of each page of images when
                        Autoplay option is enabled.
                    </li>
                    <li><strong>Autoplay animation speed in ms</strong> – The time taken for animation that moves the
                        carousel to next or previous page of items.
                    </li>
                    <li><strong>Pause on mouse hover</strong> – Pause the slideshow if the user has mouse hovered over
                        the carousel contents.
                    </li>
                    <li><strong>Columns per row</strong> – Number of gallery items visible at any given point of time
                        without scrolling. You can control the items displayed at various resolutions like those of tablet/smartphone by providing
                        appropriate values in the 'Responsive' tab.
                    </li>
                    <li><strong>Columns to scroll</strong> – With each scroll action – using the prev/next arrows or the
                        dotted navigation, specify the number of items to scroll for each invocation of the navigation
                        controls. You can control the number of items to scroll at various resolutions like those of tablet/smartphone by providing
                        appropriate values in the 'Responsive' tab.
                    </li>
                    <li><strong>Gutter</strong> – The spacing in pixels between images/videos in the carousel. You
                        can control the spacing/gutter at various resolutions like those of tablet/smartphone by providing
                        appropriate values in the 'Responsive' tab.</li>
                </ul>

                <hr>
                <h3 id="faq-element">FAQ- <span class="pro-feature">Pro!</span><a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/faq-addon.png" alt="FAQ Addon"></p>

                <p>The FAQ makes the task of creating a FAQ for a site effortless. Just enter FAQ items and choose the
                    number of items to show per row of content and you are done.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/faq-edit1.png" alt="FAQ Addon Edit Window"></p>

                <p>The FAQ element is a container element that is made up of multiple child elements each of which capture a single question part of the FAQ.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/faq-edit2.png" alt="FAQ Addon Edit Window"></p>

                <p>Each FAQ item requires two input – question and an answer for the question part of the FAQ.</p>
                <p><strong>Do note that the Accordion function of the plugin too can be used to create a nicely formed FAQ for a
                        site.</strong></p>

                <hr>
                <h3 id="features-element">Features- <span class="pro-feature">Pro!</span><a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/features-addon.jpg" alt="Features Addon"></p>

                <p>Features element lets you showcase a number of things. Below are some examples although possibilities are many - </p>

                <ul>
                    <li>Features of a product like a mobile app or other types of software.</li>
                    <li>Showcase features provided by an online service or a tool.</li>
                    <li>List a set of services an agency or organization may provide.</li>
                    <li>Describe any type of physical or digital goods you are trying to sell.</li>
                </ul>



                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/features-edit1.png" alt="Features Addon Edit Window 1"></p>
                <p>The features element is a container element with each of the child elements capturing title and description for the single feature of a product/service.</p>

                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/features-edit2.png" alt="Features Addon Edit Window 2"></p>

                <p>Any feature part of the features element requires you input an icon image or a screeshot which
                    represents the feature you are describing. Aside from the icon or screenshot, you will need to
                    provide details like heading title, subtitle and description of the feature.</p>
                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/features-edit3.png" alt="Features Addon Edit Window"></p>

                <p>The features element has an option to apply popular tile-based design to the features list (screenshot
                    below). The examples of this is seen in the demo site showcasing the features element.</p>

                <p><img class="alignnone size-large" src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/features-addon2.jpg" alt="Tiled Features Addon"></p>

                <hr>
                <h3 id="plugin-support">Plugin Support</span><a class="back-to-top" href="#panel"> Back to top</a></h3>
                <p>If you have queries or issues to report related to the plugin, please submit the same through our <a href="https://livemeshwp.com/beaver-builder/contact-us/" title="Livemesh Contact form">website contact form</a>. This will create a support ticket in our support portal.</p>

            </div>

            <!-- Updates panel -->
            <div id="plugins-panel" class="panel-left">
                <h4>Required/Recommended Plugins</h4>

                <p>Below is a list of required/recommended plugins to install that will help you get the most out of the plugin. While Beaver Builder plugin is required, the rest of the plugins are optional but we recommend you install these plugins if you plan to replicate the plugin demo site by importing the sample data.</p>

                <hr/>

                <h4><?php _e('Beaver Builder', 'livemesh-bb-addons'); ?>
                    <?php if (!class_exists('FLBuilder')) { ?>
                        <a class="button button-secondary thickbox onclick" href="<?php echo esc_url($beaverBuilderUrl); ?>"
                           title="<?php esc_attr_e('Install Beaver Builder', 'livemesh-bb-addons'); ?>"><span
                                    class="dashicons dashicons-download"></span> <?php _e('Install Now', 'livemesh-bb-addons'); ?></a>
                    <?php }
                    else { ?>
                        <span class="button button-secondary disabled"><span
                                    class="dashicons dashicons-yes"></span> <?php _e('Installed', 'livemesh-bb-addons'); ?></span>
                    <?php } ?>
                </h4>

                <p><strong>Beaver Builder</strong> is perhaps the most popular frontend page builder tool for WordPress powering
                    over 300,000+ sites. You can build any layout you can imagine with intuitive drag and drop builder
                    with little or no programming knowledge.</p>
                <p>All of the elements part of Livemesh Addons for Beaver Builder plugin were built using the API provided
                    by the Beaver Builder plugin and hence this plugin must be installed and activated on the site prior
                    to using our plugin.</p>
                <p>All of the pages of our demo site for
                    the plugin have been built using this page builder. You should install and activate this plugin
                    prior to replicating the plugin demo site by importing the sample data provided.</p>

                <hr/>

                <h4><?php _e('Portfolio Post Type', 'livemesh-bb-addons'); ?>
                    <?php if (!class_exists('Portfolio_Post_Type')) { ?>
                        <a class="button button-secondary thickbox onclick" href="<?php echo esc_url($portfolioPostTypeUrl); ?>"
                           title="<?php esc_attr_e('Install Portfolio Post Type', 'livemesh-bb-addons'); ?>"><span
                                    class="dashicons dashicons-download"></span> <?php _e('Install Now', 'livemesh-bb-addons'); ?></a>
                    <?php }
                    else { ?>
                        <span class="button button-secondary disabled"><span
                                    class="dashicons dashicons-yes"></span> <?php _e('Installed', 'livemesh-bb-addons'); ?></span>
                    <?php } ?>
                </h4>

                <p><strong>Portfolio Post Type</strong> is a free plugin that registers a custom post type for
                    portfolio items. It also registers separate portfolio taxonomies for tags and categories. The
                    Portfolio grid instances showcased on our demo site was built using custom post types registered
                    by Portfolio Post Type plugin.</p>
            </div><!-- .panel-left -->

            <!-- Support panel -->
            <div id="support-panel" class="panel-left">
                <ul id="top" class="anchor-nav">
                    <li>
                        <a href="#faq-compatibility"><strong>Does it work with the theme that I am using?</strong></a>
                    </li>
                    <li>
                        <a href="#faq-dark-version"><strong>How to enable the dark version for any element?</strong></a>
                    </li>
                    <li>
                        <a href="#faq-portfolio-grid"><strong>My portfolio does not show any items.</strong></a>
                    </li>
                </ul>

                <h3 id="faq-compatibility">Does it work with the theme that I am using?</h3>

                <p>Our tests indicate that the elements work well with most themes that are well coded. You may need some
                    minor custom CSS with themes that hijack the styling for heading tags by using !important
                    keyword.</p>

                <p>The demo site is best recreated with a theme that supports a full width page template without
                    sidebars. The elements can still be used in the pages of default template.</p>


                <hr/>

                <h3 id="faq-dark-version">How to enable the dark version for any element?</h3>

                <p>In Beaver Builder page builder, add a row wrapper for the element, edit row and navigate to the 'Advanced'
                    tab of the 'Row Settings' popup window. Scroll down to the bottom of this tab to the 'CSS Selectors' section and input
                    class ‘labb-dark-bg’ in the 'Class' field to activate the dark version of an element.</p>

                <hr/>

                <h3 id="faq-portfolio-grid">My portfolio grid does not show any items.</h3>

                <p>Pls install and activate the <a href="https://wordpress.org/plugins/portfolio-post-type/" title="Portfolio Post Type">Portfolio Post Type plugin</a> to enable custom post type Portfolio.
                </p>

                <hr/>
            </div><!-- .panel-left support -->

            <!-- Updates panel -->
            <div id="updates-panel" class="panel-left">

                <h2>Change Log for the Premium Version</h2>
                <br>
                <h3>2.8</h3>
                <ul>
                    <li>Updated - Freemius SDK 2.4.2 with license activation enhancements, beta programs and other features and bug fixes.</li>
                </ul>
                <h3>2.7.7</h3>
                <ul>
                    <li>Fixed - Fatal error in some edge cases when the posts grid can fail to display taxonomy terms.</li>
                </ul>
                <h3>2.7.6</h3>
                <ul>
                    <li>Added - Improved compatibility with lazy load plugins by adding data-skip-lazy attribute</li>
                </ul>
                <h3>2.7.5</h3>
                <ul>
                    <li>Updated - Move to new domain livemeshwp.com</li>
                    <li>Updated - Compatibility with WP 5.5</li>
                </ul>
                <h3>2.7.4</h3>
                <ul>
                    <li>Added - Options to turn off/on title and taxonomy terms displayed on posts carousel thumbnail</li>
                    <li>Added - Open in new window option for post links in posts carousel</li>
                    <li>Added - Ability to add read more link for the posts carousel</li>
                    <li>Fixed - The posts carousel article would populate wrong style classes</li>
                    <li>Fixed - The WP filters/hooks in posts carousel received page id as post id</li>
                    <li>Fixed - Open in new window option for post grid, posts carousel, image slider and gallery images not taking effect</li>
                </ul>
                <h3>2.7.3</h3>
                <ul>
                    <li>Fixed - The posts block and posts grid modules cannot be customized using the WP hooks/filters provided by the plugin</li>
                </ul>
                <h3>2.7.2</h3>
                <ul>
                    <li>Fixed - The stats bar does not display the percentage bars.</li>
                    <li>Updated - Freemius SDK 2.3.2 with Opt-In / Out Enhancements, User Change, and More.</li>
                </ul>

                <h3>2.7.1</h3>
                <ul>
                    <li>Updated - Freemius SDK 2.3.1 with white label mode, URL whitelisting and other features and bug fixes.</li>
                </ul>
                <h3>2.7.0</h3>
                <ul>
                    <li>Fixed - The filters would return no posts when specific categories are chosen for display in Posts Grid and Posts Block modules.</li>
                    <li>Fixed - Delay in display of posts after the loading indicator is gone.</li>
                    <li>Fixed - Can add Image Slider module when the bulk upload images option is chosen.</li>
                </ul>
                <h3>2.6.9</h3>
                <ul>
                    <li>Fixed - The filters in the Posts Grid/Posts Block display the excluded terms.</li>
                    <li>Added - Support for AJAX powered pagination for current query when displaying the Posts Grid/Posts Block in archives.</li>
                    <li>Added - The Posts Grid/Posts Block display appropriate message when no posts are found. </li>
                    <li>Added - The generic carousel would allow only a max of 5 columns; now increased to 12.</li>
                    <li>Fixed - The Posts Carousel output WP filter hook not usable with the original frontend output code.</li>
                </ul>
                <h3>2.6.8</h3>
                <ul>
                    <li>Fixed - The taxonomy chosen dropdown displaying superfluous taxonomies in the dropdown for Posts Grid/Posts Block.</li>
                    <li>Fixed - The filters displaying taxonomy terms that were excluded in the query.</li>
                    <li>Fixed - Cannot display taxonomy terms for the post in block styles 7,8 and 9 of Posts Block.</li>
                </ul>
                <h3>2.6.7</h3>
                <ul>
                    <li>Fixed - Some sites reporting error - call to undefined function get_blog_list().</li>
                    <li>Updated - Freemius to 2.3.0.</li>
                </ul>
                <h3>2.6.6</h3>
                <ul>
                    <li>Added - Offset support for Posts/Portfolio Grid and Posts Block modules.</li>
                    <li>Added - Security improvements to Posts Grid and Gallery modules.</li>
                </ul>
                <h3>2.6.5</h3>
                <ul>
                    <li>Added - Thumbnails support for the lightbox module of Posts Grid, Posts Block, Image/Video Gallery and Gallery Carousel.</li>
                    <li>Updated - Fancybox scripts to 3.5.7 release.</li>
                    <li>Updated - Freemius SDK to 2.3.0 release.</li>
                </ul>
                <h3>2.6.4</h3>
                <ul>
                    <li>Fixed - Some modules raised "Unexpected or Invalid content" error in Gutenberg block editor.</li>
                </ul>
                <h3>2.6.3</h3>
                <ul>
                    <li>Added - Field connections for color fields in all modules.</li>
                    <li>Added - Support for tags and filters for gallery and gallery carousel widgets when bulk upload of images is done.</li>
                    <li>Added - Tags field for specifying tags for a media item in the media gallery.</li>
                </ul>
                <h3>2.6.2</h3>
                <ul>
                    <li>Fixed - Draft posts show up in paginated queries and filtered data.</li>
                    <li>Tweak - Return public posts only for posts grid and posts blocks.</li>
                </ul>
                <h3>2.6.1</h3>
                <ul>
                    <li>Fixed - Accessibility issue in Gallery.</li>
                    <li>Added - Read more options for the posts block module.</li>
                </ul>
                <h3>2.6</h3>
                <ul>
                    <li>Updated - Custom fields for compatibility with latest version of Beaver Builder and for better performance.</li>
                    <li>Fixed - JS error for custom number control.</li>
                    <li>Fixed - Testimonials of Beaver Builder being overridden by Livemesh Addons.</li>
                    <li>Fixed - Image slider does not display slides when bulk upload images option is chosen.</li>
                    <li>Fixed - Some scripts dependent on existence of jQuery $ symbol can raise error.</li>
                    <li>Updated - Freemius SDK with several bug fixes and compatibility fixes</li>
                </ul>
                <h3>2.5</h3>
                <ul>

                    <li>Added - Major release of the plugin with extensive support for filters and templates to enable users to customize the output generated by the addons. You can now create a template file in beaver-builder-addons folder in your child theme to customize the addons html or use filters to customize output generated by the addons. </li>
                    <li>Updated - Documentation providing information on how to use templates and filters to customize the plugin addons.</li>
                    <li>Added - Filters for settings object employed for rendering the addons.</li>
                    <li>Fixed - Gallery pagination would break when number of items crosses 140.</li>
                    <li>Added - Pagination with dotted navigation for galleries when number of pages exceeds 5.</li>
                    <li>Added - Responsive pagination controls for gallery.</li>
                    <li>Fixed - The fancybox lightbox would not display share, thumbnail, slideshow options for image/video gallery, posts grid and posts blocks.</li>
                    <li>Added - Read More link/button options for posts blocks.</li>
                    <li>Added - Block style 8 in Posts Block now much more responsive.</li>
                    <li>Fixed - Incompatibility with some themes which load waypoints JS script.</li>
                </ul>
                <h3>2.1</h3>
                <ul>
                    <li>Fixed - Incompatibility with certain themes due to different versions of waypoints scripts being used.</li>
                    <li>Fixed - Leaving tags empty in the gallery lead to addition of an empty filter in the filter list</li>
                </ul>
                <h3>2.0.1</h3>
                <ul>
                    <li>Fixed - Bug fixes related to Freemius integration.</li>
                </ul>
                <h3>2.0</h3>
                <ul>
                    <li>Added – Freemius integration for easy upgrade, quick support/feedback and opt-in usage tracking with GDPR compliance.</li>
                </ul>
                <h3>1.8.2</h3>
                <ul>
                    <li>Updated – Fancybox scripts and CSS to make the plugin compatible with PowerPack.</li>
                </ul>
                <h3>1.8.1</h3>
                <ul>
                    <li>Added – New simpler grid system for all elements that use grid.</li>
                    <li>Added – Seamless control of number of columns at all device resolutions for all those elements that involve grid – posts/portfolio grid, posts block, image/video gallery, clients, services, testimonials, team, charts, pricing table, faq etc.</li>
                    <li>Added - Option to preserve shortcodes and HTML tags in excerpt. Option is disabled by default.</li>
                </ul>
                <h3>1.8.0</h3>
                <ul>
                    <li>Added - Support for multiple url formats for YouTube and Vimeo videos in video gallery</li>
                    <li>Added - Support for inline responsive videos of YouTube, Vimeo and self-hosted MP4/WebM video formats</li>
                    <li>Added - If no custom thumbnail is set, the thumbnails for YouTube/Vimeo videos automatically set from the service provider</li>
                    <li>Added - Support for creating stunning masonry gallery layouts using flexible widths and heights for images.</li>
                    <li>Added - Ability to specify wide width for images in masonry layout of gallery.</li>
                    <li>Added - Options to enable/disable display of image/video titles and image/video tags in gallery addon.</li>
                    <li>Fixed - Next Previous buttons of carousels would not show up in certain installations due to conflicts with base slick carousel styles</li>
                    <li>Fixed - Next/Prev navigation for gallery pagination not working</li>
                    <li>Fixed - Some themes can break animations and report script errors for elements like piecharts, odometers, progress bars etc.</li>
                    <li>Updated - Waypoints script with new API for handling events on scroll</li>
                </ul>
                <h3>1.7.7</h3>
                <ul>
                    <li>Improved – License activation page with less confusing interface.</li>
                    <li>Added - The license code entered is now masked upon activation.</li>
                    <li>Added - Ability to set a chart title for the piechart.</li>
                </ul>
                <h3>1.7.6</h3>
                <ul>
                    <li>Added – Ability to display description for the image/video element in the gallery and gallery carousel lightbox window.</li>
                    <li>Added – The lightbox for posts grid and posts block now displays post summary and a link to the post in the lightbox.</li>
                    <li>Added – Option to disable display of post summary/excerpt in the lightbox window of posts block or posts grid.</li>
                </ul>
                <h3>1.7.5</h3>
                <ul>
                    <li>Added – Fancybox lightbox integration for grid, posts block, image gallery, video gallery and gallery carousel modules.</li>
                    <li>Added – Advanced features like touch/swipe controls, pinch out/in, double tap, keyboard navigation, full screen, thumbnails, social media sharing, hardware accelerated animations, direct linking now supported with lightbox.</li>
                    <li>Added – HTML5 self-hosted video support in video gallery and video carousel modules. Support for MP4 and WebM formats.</li>
                </ul>
                <h3>1.7.2</h3>
                <ul>
                    <li>Fixed – Posts Grid columns can break in certain resolutions in FireFox.</li>
                    <li>Fixed – Piecharts module would not change colors based on values provided through Beaver Themer field connections</li>
                    <li>Fixed – The piecharts percentage value not rounding to the right value</li>
                    <li>Added – Option to specify percentage symbol in the piecharts</li>
                    <li>Added – Support for shortcodes and HTML tags in excerpts in Posts Grid and Posts Block module</li>
                    <li>Added – Support for JS driven shortcodes or HTML inside tabs</li>
                </ul>
                <h3>1.7.1</h3>
                <ul>
                    <li>Added - Advanced tab and accordion functions that help directly link to Tabs and Accordion panels from external pages. On page load, the corresponding tab/panel opens upon auto-scrolling to the tab or accordion panel.</li>
                    <li>Added - Smooth scroll to tabs and accordion panels from internal links within a page.</li>
                    <li>Added - Open tab or accordion panels by clicking the internal links within a page.</li>
                </ul>
                <h3>1.7</h3>
                <ul>
                    <li>Upgrade – Simpler grid system based on NEAT 2.1 version</li>
                    <li>Updated - The CSS is now optimized for vendor prefixes with reduced properties and file size.</li>
                    <li>Added - Scroll to the top of the posts block to display new posts during paged navigation (when new posts are not visible).</li>
                </ul>
                <h3>1.6.1</h3>
                <ul>
                    <li>Added – Bulk upload option for image sliders and gallery carousel and ability to use ACF gallery field as input for sliders and galleries. The caption of the image attachments is displayed as title for the image.</li>
                    <li>Added – Overlay for slider images.</li>
                    <li>Added – Styling options for slider image overlay to control the opacity of overlay element.</li>
                    <li>Fixed – Gradient overlay for images displayed for some styles of posts blocks.</li>
                    <li>Tweak – Changed the gallery addon to take caption as title of the image to stay consistent with behavior of slider and gallery carousel addons</li>
                </ul>

                <h3>1.6</h3>
                <ul>
                    <li>Added – Image size option for all major addons including grid, gallery and carousels.</li>
                    <li>Added – Ability to crop images and specify custom image sizes for all major addons including grid, gallery and carousels.</li>
                    <li>Added - Bulk upload option for image gallery. The title of the image attachments is displayed on hover.</li>
                    <li>Added - The lightbox now opens on clicking anywhere on the image if no destination URL is specified for gallery item</li>
                    <li>Fixed – The gallery image was not clickable to the link specified</li>
                    <li>Fixed – The gallery filters would not center when a heading was not specified.</li>
                    <li>Fixed – The gallery filters will not display multi-line on devices of lower resolutions like mobile devices.</li>
                </ul>

                <h3>1.5</h3>
                <ul>
                    <li>Added – Moved the Posts Grid widget to new framework based on reusable blocks. Pls note that the class names have changed to keep it consistent with the new framework.</li>
                    <li>Added – 6 different styles for grid items plus 7 header styles too</li>
                    <li>Added – Next Prev pagination options for Posts Grid widget</li>
                    <li>Added – Ability to handle large number of grid pages by providing dotted navigation</li>
                    <li>Added – AJAX Category or taxonomy filtering for Grid widget. No more empty grid on category/taxonomy filtering</li>
                    <li>Added – Read More option for the grid items</li>
                    <li>Added – Open in new window option for links to posts in the grid</li>
                    <li>Added – Two more header styles to posts blocks</li>
                    <li>Fixed – The grid image was not clickable to the post</li>
                    <li>Fixed – The filters would not center when a heading was not specified.</li>
                    <li>Fixed – The grid filters will not display multi-line on devices of lower resolutions like mobile devices.</li>
                </ul>
                <h3>1.4</h3>
                <ul>
                    <li>Added - Brand new Post Blocks module with more than a dozen styles and options to present your posts or custom post types</li>
                    <li>Added - AJAX Pagination, Next Prev and Load More options for Post Blocks addon</li>
                    <li>Added - AJAX Category or taxonomy filtering for Post Blocks addon</li>
                </ul>
                <h4>1.3</h4>
                <ul>
                    <li>Added - Extensive customization options for all modules/addons</li>
                    <li>Added - Typography options for elements of all modules/addons</li>
                    <li>Fixed - Multiple translation domains found.</li>
                </ul>
                <h3>1.2.4</h3>
                <ul>
                    <li>Added - Integration with Beaver Themer</li>
                    <li>Added - Beaver Themer field connections for all relevant fields of modules</li>
                    <li>Added - Compatibility with Beaver Theme</li>
                </ul>
                <h3>1.2.3</h3>
                <ul>
                    <li>Added - Automatic plugin updates and license key activation</li>
                </ul>
                <h3>1.2.2</h3>
                <ul>
                    <li>Fixed - Custom taxonomies not showing up in the taxonomy choices dropdown in posts/portfolio grid and posts carousel</li>
                </ul>
                <h3>1.2.1</h3>
                <ul>
                    <li>Fixed - The filter on the grid would not show up initially; changed default taxonomy to category</li>
                </ul>
                <h3>1.2</h3>
                <ul>
                    <li>Fixed - The portfolio grid addon leaves an empty space on the top when no heading is specified and when no taxonomy filters are specified</li>
                    <li>Fixed - In a few installations, the grid elements may not occupy full width between 769px to 800px device resolutions</li>
                    <li>Fixed - The posts carousel dots navigation was not clickable</li>
                    <li>Fixed - The posts carousel would not expand beyond 960px in width</li>
                </ul>
                <h3>1.1</h3>
                <ul>
                    <li>Updated documentation. Preparation for moving entire plugin documentation online.</li>
                </ul>
                <h3>1.0</h3>
                <ul>
                    <li>Initial release.</li>
                </ul>
            </div><!-- .panel-left updates -->

            <div class="panel-right">

                <div class="panel-inner">
                    
                    <?php if (labb_fs()->is_not_paying()): ?>
                    
                        <div class="panel-aside banner">
                            <a href="<?php echo labb_fs()->get_upgrade_url(); ?>" title="Purchase Now"><img class="dashboard-image"
                                                                                                                              src="https://www.livemeshthemes.com/wp-content/uploads/plugin-doc/beaver-addons/dashboard/purchase-banner1.jpg"
                                                                                                                              alt="Sale Banner"></a>
                        </div>
    
                        <!-- Knowledge base -->
                        <div class="panel-aside">
                            <h4><?php _e('Why upgrade to Premium version?', 'livemesh-bb-addons'); ?></h4>
                            <p><?php _e('Premium version offers multiple benefits - more addon elements, advanced features for addons including those part of the free plugin and priority support through a dedicated support portal.', 'livemesh-bb-addons'); ?></p>
    
                            <a class="button button-primary"
                               href="https://livemeshwp.com/beaver-builder/addons-demo/#why-upgrade"
                               title="<?php esc_attr_e('Know More', 'livemesh-bb-addons'); ?>"><?php _e('Know More Details', 'livemesh-bb-addons'); ?></a>
                        </div><!-- .panel-aside knowledge base -->
                    
                    <?php else: ?>
                    
                        <!-- Knowledge base -->
                        <div class="panel-aside">
                            <h4>Need support for the plugin?</h4>
                            <p>The premium version of the plugin entitles you to quick support with replies posted within 24 hours (on week days).</p>
                            <p>Please submit your support query through our <a href="https://livemeshwp.com/beaver-builder/contact-us/" title="Livemesh Contact form">website contact form</a>. This will create a support ticket in our support portal.
                            </p>
    
                            <a class="button button-primary"
                               href="https://livemeshwp.com/beaver-builder/contact-us/"
                               title="<?php esc_attr_e('Contact Us', 'livemesh-bb-addons'); ?>"><?php _e('Contact Us', 'livemesh-bb-addons'); ?></a>
                        </div><!-- .panel-aside knowledge base -->
    
                        <!-- Knowledge base -->
                        <div class="panel-aside">
                            <h4>Have questions or want to leave feedback?</h4>
                            <p>If you need to leave your feedback or have a query regarding one of our <a href="https://www.livemeshthemes.com/" title="WordPress Themes and Plugins">WordPress plugins or themes</a>, feel free to leave us a message through our contact form and we will get back to you promptly.</p>
    
                            <a class="button button-primary"
                               href="https://livemeshwp.com/beaver-builder/contact-us/"
                               title="<?php esc_attr_e('Write to Us', 'livemesh-bb-addons'); ?>"><?php _e('Write to Us', 'livemesh-bb-addons'); ?></a>
                        </div><!-- .panel-aside knowledge base -->

                    <?php endif; ?>

                </div><!-- .panel-inner -->
            </div><!-- .panel-right -->
        </div><!-- .panel -->
    </div><!-- .panels -->
</div><!-- .livemesh-doc -->
