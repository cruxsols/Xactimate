<?php
//include $_SERVER['DOCUMENT_ROOT'].'/AdminPanel\Constants\Links.php';
use AdminPanel\Constants\Links;
?>
<div data-elementor-type="header" data-elementor-id="11" class="elementor elementor-11 elementor-location-header"
     data-elementor-post-type="elementor_library">
    <?php include('TopHeader.php') ?>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-130d2a3b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="130d2a3b" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0,&quot;sticky_anchor_link_offset&quot;:0}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-36475be1"
                 data-id="36475be1" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-1330a1e8 elementor-widget elementor-widget-theme-site-logo elementor-widget-image"
                         data-id="1330a1e8" data-element_type="widget" data-widget_type="theme-site-logo.default">
                        <div class="elementor-widget-container">
                            <a href="index.html">
                                <img fetchpriority="high" width="2036" height="710"
                                     src="<?php echo $assetsJsonUrl;?>uploads/2023/07/02-ConstructEstimatesLogoSVG.svg"
                                     class="attachment-full size-full wp-image-1771"
                                     alt="About Us - Construct Estimates"/> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-63c7f927"
                 data-id="63c7f927" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-3795dfa0 elementor-nav-menu__align-center elementor-nav-menu--stretch elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                         data-id="3795dfa0" data-element_type="widget"
                         data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\&quot;e-font-icon-svg e-fas-caret-down\&quot; viewBox=\&quot;0 0 320 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
                         data-widget_type="nav-menu.default">
                        <div class="elementor-widget-container">
                            <nav aria-label="Menu"
                                 class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
                                <?php echo displayMenu($topMenu, 0, true);?>
                                <!--<ul id="menu-1-3795dfa0" class="elementor-nav-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2322">
                                        <a href="<?php /*echo Links::AboutUs;*/?>" class="elementor-item">About Us</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7038">
                                                <a href="about-us/service-areas/index.html" class="elementor-sub-item">Service
                                                    Areas</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2041">
                                                <a href="testimonials/index.html" class="elementor-sub-item">Testimonials</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children subCol1 menu-item-4156">
                                        <a href="#" class="elementor-item elementor-item-anchor">Our Services</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4280">
                                                <a href="cost-estimating-services/index.html"
                                                   class="elementor-sub-item">Cost Estimating Services</a>
                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6948">
                                                        <a href="construction-estimator-sydney/index.html"
                                                           class="elementor-sub-item">Construction Estimator Sydney</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7167">
                                                        <a href="building-estimator-melbourne/index.html"
                                                           class="elementor-sub-item">Building Estimator Melbourne</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6885">
                                                <a href="construction-takeoff-services/index.html"
                                                   class="elementor-sub-item">Construction Takeoff Services</a>
                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6918">
                                                        <a href="quantity-takeoff-services/index.html"
                                                           class="elementor-sub-item">Quantity Takeoff Services</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4291">
                                                <a href="residential-estimating-services/index.html"
                                                   class="elementor-sub-item">Residential Estimating Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6891">
                                                <a href="commercial-estimating-services/index.html"
                                                   class="elementor-sub-item">Commercial Estimating Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4283">
                                                <a href="industrial-estimating-services/index.html"
                                                   class="elementor-sub-item">Industrial Estimating Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4290">
                                                <a href="preliminary-estimate/index.html" class="elementor-sub-item">Preliminary
                                                    Estimate Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6036">
                                                <a href="virtual-bid-management/index.html" class="elementor-sub-item">Virtual
                                                    Bid Management</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4282">
                                                <a href="estimating-consultant/index.html" class="elementor-sub-item">Construction
                                                    Estimating Consultant</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5234">
                                        <a href="#" class="elementor-item elementor-item-anchor">Trades</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4281">
                                                <a href="electrical-estimating-services/index.html"
                                                   class="elementor-sub-item">Electrical Estimating Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4278">
                                                <a href="concrete-estimating-services/index.html"
                                                   class="elementor-sub-item">Concrete Estimating Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5803">
                                                <a href="opening-estimating-services/index.html"
                                                   class="elementor-sub-item">Opening Estimating Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4286">
                                                <a href="masonry-estimating-services/index.html"
                                                   class="elementor-sub-item">Masonry Estimating Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4287">
                                                <a href="mep-estimating-services/index.html" class="elementor-sub-item">MEP
                                                    Estimating Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4288">
                                                <a href="metal-estimating-services/index.html"
                                                   class="elementor-sub-item">Metal Estimating Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4292">
                                                <a href="sitework-estimating-services/index.html"
                                                   class="elementor-sub-item">SiteWork Estimating Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7117">
                                                <a href="lumber-takeoff-services/index.html" class="elementor-sub-item">Lumber
                                                    Takeoff Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4293">
                                                <a href="thermal-moisture-protection-estimating-services/index.html"
                                                   class="elementor-sub-item">Thermal &#038; Moisture Protection
                                                    Estimating Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4284">
                                                <a href="interior-exterior-finishes-estimating-services/index.html"
                                                   class="elementor-sub-item">Interior &#038; Exterior Finishes
                                                    Estimating Services</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4155">
                                        <a href="our-projects/index.html" class="elementor-item">Our Projects</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4157">
                                        <a href="our-blogs/index.html" class="elementor-item">Blogs</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7245">
                                                <a href="category/cost-estimation-takeoffs/index.html"
                                                   class="elementor-sub-item">Cost Estimation and Takeoffs</a></li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7246">
                                                <a href="category/construction-business-management/index.html"
                                                   class="elementor-sub-item">Construction Business Management</a></li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7247">
                                                <a href="category/construction-business-setup-legal/index.html"
                                                   class="elementor-sub-item">Construction Business Setup and Legal</a>
                                            </li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7249">
                                                <a href="category/construction-materials-procurement/index.html"
                                                   class="elementor-sub-item">Construction Materials and Procurement</a>
                                            </li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7248">
                                                <a href="category/sustainable-advanced-construction/index.html"
                                                   class="elementor-sub-item">Sustainable and Advanced Construction</a>
                                            </li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7250">
                                                <a href="category/construction-technology-innovation/index.html"
                                                   class="elementor-sub-item">Construction Technology and Innovation</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6444">
                                        <a href="contact-us/index.html" class="elementor-item">Contact Us</a></li>
                                    <li class="Promo-Btn menu-item menu-item-type-post_type menu-item-object-page menu-item-5804">
                                        <a href="get-a-quote/index.html" class="elementor-item">Affordable Estimates
                                            (30%off)</a></li>
                                    <li class="myaccountIcon menu-item menu-item-type-custom menu-item-object-custom menu-item-8722">
                                        <a target="_blank" href="https://app.elementorthemesite.com/my-account/"
                                           class="elementor-item">My Account</a></li>
                                </ul>-->
                            </nav>
                            <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle"
                                 aria-expanded="false">
                                <svg aria-hidden="true" role="presentation"
                                     class="elementor-menu-toggle__icon--open e-font-icon-svg e-eicon-menu-bar"
                                     viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z"></path>
                                </svg>
                                <svg aria-hidden="true" role="presentation"
                                     class="elementor-menu-toggle__icon--close e-font-icon-svg e-eicon-close"
                                     viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path>
                                </svg>
                            </div>
                            <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
                                <ul id="menu-2-3795dfa0" class="elementor-nav-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2322">
                                        <a href="about-us/index.html" class="elementor-item" tabindex="-1">About Us</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7038">
                                                <a href="about-us/service-areas/index.html" class="elementor-sub-item"
                                                   tabindex="-1">Service Areas</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2041">
                                                <a href="testimonials/index.html" class="elementor-sub-item"
                                                   tabindex="-1">Testimonials</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4156">
                                        <a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Our
                                            Services</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4280">
                                                <a href="cost-estimating-services/index.html" class="elementor-sub-item"
                                                   tabindex="-1">Cost Estimating Services</a>
                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6948">
                                                        <a href="construction-estimator-sydney/index.html"
                                                           class="elementor-sub-item" tabindex="-1">Construction
                                                            Estimator Sydney</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7167">
                                                        <a href="building-estimator-melbourne/index.html"
                                                           class="elementor-sub-item" tabindex="-1">Building Estimator
                                                            Melbourne</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6885">
                                                <a href="construction-takeoff-services/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Construction Takeoff
                                                    Services</a>
                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6918">
                                                        <a href="quantity-takeoff-services/index.html"
                                                           class="elementor-sub-item" tabindex="-1">Quantity Takeoff
                                                            Services</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4291">
                                                <a href="residential-estimating-services/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Residential Estimating
                                                    Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6891">
                                                <a href="commercial-estimating-services/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Commercial Estimating
                                                    Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4283">
                                                <a href="industrial-estimating-services/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Industrial Estimating
                                                    Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4290">
                                                <a href="preliminary-estimate/index.html" class="elementor-sub-item"
                                                   tabindex="-1">Preliminary Estimate Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6036">
                                                <a href="virtual-bid-management/index.html" class="elementor-sub-item"
                                                   tabindex="-1">Virtual Bid Management</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4282">
                                                <a href="estimating-consultant/index.html" class="elementor-sub-item"
                                                   tabindex="-1">Construction Estimating Consultant</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5234">
                                        <a href="#" class="elementor-item elementor-item-anchor"
                                           tabindex="-1">Trades</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4281">
                                                <a href="electrical-estimating-services/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Electrical Estimating
                                                    Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4278">
                                                <a href="concrete-estimating-services/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Concrete Estimating
                                                    Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5803">
                                                <a href="opening-estimating-services/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Opening Estimating
                                                    Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4286">
                                                <a href="masonry-estimating-services/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Masonry Estimating
                                                    Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4287">
                                                <a href="mep-estimating-services/index.html" class="elementor-sub-item"
                                                   tabindex="-1">MEP Estimating Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4288">
                                                <a href="metal-estimating-services/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Metal Estimating
                                                    Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4292">
                                                <a href="sitework-estimating-services/index.html"
                                                   class="elementor-sub-item" tabindex="-1">SiteWork Estimating
                                                    Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7117">
                                                <a href="lumber-takeoff-services/index.html" class="elementor-sub-item"
                                                   tabindex="-1">Lumber Takeoff Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4293">
                                                <a href="thermal-moisture-protection-estimating-services/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Thermal &#038; Moisture
                                                    Protection Estimating Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4284">
                                                <a href="interior-exterior-finishes-estimating-services/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Interior &#038; Exterior
                                                    Finishes Estimating Services</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4155">
                                        <a href="our-projects/index.html" class="elementor-item" tabindex="-1">Our
                                            Projects</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4157">
                                        <a href="our-blogs/index.html" class="elementor-item" tabindex="-1">Blogs</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7245">
                                                <a href="category/cost-estimation-takeoffs/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Cost Estimation and
                                                    Takeoffs</a></li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7246">
                                                <a href="category/construction-business-management/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Construction Business
                                                    Management</a></li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7247">
                                                <a href="category/construction-business-setup-legal/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Construction Business Setup
                                                    and Legal</a></li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7249">
                                                <a href="category/construction-materials-procurement/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Construction Materials and
                                                    Procurement</a></li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7248">
                                                <a href="category/sustainable-advanced-construction/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Sustainable and Advanced
                                                    Construction</a></li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7250">
                                                <a href="category/construction-technology-innovation/index.html"
                                                   class="elementor-sub-item" tabindex="-1">Construction Technology and
                                                    Innovation</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6444">
                                        <a href="/contact-us" class="elementor-item" tabindex="-1">Contact
                                            Us</a></li>
                                    <li class="Promo-Btn menu-item menu-item-type-post_type menu-item-object-page menu-item-5804">
                                        <a href="get-a-quote/index.html" class="elementor-item" tabindex="-1">Affordable
                                            Estimates (30%off)</a></li>
                                    <li class="myaccountIcon menu-item menu-item-type-custom menu-item-object-custom menu-item-8722">
                                        <a target="_blank" href="https://app.elementorthemesite.com/my-account/"
                                           class="elementor-item" tabindex="-1">My Account</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>