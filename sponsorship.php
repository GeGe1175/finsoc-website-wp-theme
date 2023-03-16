<?php

/**
 * Template Name: Sponsorship Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package busiway
 */

get_header();
get_template_part('index','banner'); ?>
<!-- also we need to check out the different container css, as in there are different css things for the original finsoc stuff and the new one -->
    <main id="content">
    <div class="container">
        <!-- this one above is the container class from the new thing everything inbetween -->
        <div class="pageSponsors">
            <a name="sponsors"></a>
            <div class="section">
                <div class="sponsors-container container">
                    <div class="subheading">
                        <h1 class="h2Custom"><span style="color:#B43493">PLATINUM</span> SPONSORS</h1>
                        <hr/>
                    </div>
                    <div class="sponsorsOfficial">
                        <?php
                            $args = array(
                                "site_url"  => "https://www.hsbc.com.au/",
                                "div_id"    => "HSBC",
                                "name"      => "HSBC",
                                "image_file"=> "2023/03/HSBC.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                    </div>
                    <div class="subheading">
                        <br/>
                        <h1 class="h2Custom"><span style="color:#BCAB35">GOLD</span> SPONSORS</h1>
                        <hr/>
                    </div>
                    <div class="sponsorsOfficial">
                        <?php
                            $args = array(
                                "site_url"  => "https://www.nab.com.au/",
                                "div_id"    => "nab",
                                "name"      => "NAB",
                                "image_file"=> "2023/03/nab.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                        <?php
                            $args = array(
                                "site_url"  => "https://fccapital.com.au/",
                                "div_id"    => "fcc",
                                "name"      => "FC Capital",
                                "image_file"=> "2023/03/fc-capital.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                    </div>
                    <div class="subheading">
                        <br/>
                        <h1 class="h2Custom"><span style="color:#A0A0A0">SILVER</span> SPONSORS</h1>
                        <hr/>
                    </div>
                    <div class="sponsorsOfficial">
                        <?php
                            $args = array(
                                "site_url"  => "https://allungaadvisory.com.au/",
                                "div_id"    => "aa",
                                "name"      => "Allunga Advisory",
                                "image_file"=> "2023/03/allunga-advisory.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                        <?php
                            $args = array(
                                "site_url"  => "https://www.flowtraders.com/",
                                "div_id"    => "ft",
                                "name"      => "Flow Traders",
                                "image_file"=> "2023/03/flow-traders.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                        <?php
                            $args = array(
                                "site_url"  => "https://www.greenstonepartners.com.au/",
                                "div_id"    => "gp",
                                "name"      => "Greenstone Partners",
                                "image_file"=> "2023/03/greenstonepartners-1024x94-1.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                        <?php
                            $args = array(
                                "site_url"  => "https://pinnacleinvestment.com/",
                                "div_id"    => "pim",
                                "name"      => "Pinnacle Investment Management",
                                "image_file"=> "2023/01/Pinnacle.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>    
                    </div>
                    <div class="subheading">
                        <br/>
                        <h1 class="h2Custom"><span style="color:#9F6C3F">BRONZE</span> SPONSORS</h1>
                        <hr/>
                    </div>
                    <div class="sponsorsOfficial">
                        <?php
                            $args = array(
                                "site_url"  => "https://www.firstsentierinvestors.com.au/",
                                "div_id"    => "fsi",
                                "name"      => "First Sentier Investors",
                                "image_file"=> "2023/03/first-sentier.png",
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                    </div>
                </div>
                <div class="section2 applyContainer">
                    <a name="apply"></a>
                    <div class="title">
                        <h1>APPLY</h1>
                    </div>

                    <a href="mailto:sponsorship@unswfinsoc.org.au">
                        <div class="apply">
                            <button type="button" class="btn btn-outline-primary applyButton">Help sponsor FINSOC by sending us an email at <br/><b>sponsorship@unswfinsoc.org.au</b></button>
                        </div>
                    </a>
                    <br/>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>

