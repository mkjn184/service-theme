<?php
/*
 Template Name: Gtmetrix
 */
?>
<?php get_header(); ?>
<div class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="javascript:;">Pages</a></li>
            <li class="active">Gallery</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12">
                <h1>Gallery</h1>
                <div class="content-page">
                    <div class="row margin-bottom-40">
                        <form method="post" id="gfw-parameters">
                            <input type="hidden" name="post_type" value="gfw_report"/>
                            <div id="gfw-scan" class="gfw-dialog" title="Testing with GTmetrix">
                                <div id="gfw-screenshot"><img src="<?php echo GFW_URL . 'images/scanner.png'; ?>" alt=""
                                                              id="gfw-scanner"/>
                                    <div class="gfw-message"></div>
                                </div>
                            </div>
                            <?php
                            wp_nonce_field(plugin_basename(__FILE__), 'gfwtestnonce');
                            $options = get_option('gfw_options');
                            ?>

                            <p><input type="text" id="gfw_url" name="gfw_url" value="<?php echo $passed_url; ?>"
                                      placeholder="You can enter a URL (eg. http://yourdomain.com), or start typing the title of your page/post"/><br/>
                                <span class="gfw-placeholder-alternative description">You can enter a URL (eg. http://yourdomain.com), or start typing the title of your page/post</span>
                            </p>

                            <table class="form-table">
                                <tr valign="top">
                                    <th scope="row">Label</th>
                                    <td><input type="text" id="gfw_label" name="gfw_label" value=""/><br/>
                                        <span class="description">Optionally enter a label for your report</span></td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row">Locations<a class="gfw-help-icon tooltip" href="#"
                                                                title="Analyze the performance of the page from one of our several test regions.  Your Page Speed and YSlow scores usually stay roughly the same, but Page Load times and Waterfall should be different. Use this to see how latency affects your page load times from different parts of the world."></a>
                                    </th>
                                    <td><select name="gfw_location" id="gfw_location">
                                            <?php
                                            foreach ($options['locations'] as $location) {
                                                echo '<option value="' . $location['id'] . '" ' . selected(isset($options['default_location']) ? $options['default_location'] : $location['default'], $location['id'], false) . '>' . $location['name'] . '</option>';
                                            }
                                            ?>
                                        </select><br/>
                                        <span class="description">Test Server Region</span></td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row"><label for="gfw_adblock">Adblock Plus</label><a
                                                class="gfw-help-icon tooltip" href="#"
                                                title="Prevent ads from loading using the Adblock Plus plugin.  This can help you assess how ads affect the loading of your site."></a>
                                    </th>
                                    <td><input type="checkbox" name="gfw_adblock" id="gfw_adblock"
                                               value="1" <?php checked(isset($options['default_adblock']) ? $options['default_adblock'] : 0, 1); ?> />
                                        <span class="description">Block ads with Adblock Plus</span></td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row"><label for="gfw_video">Video</label><a class="gfw-help-icon tooltip"
                                                                                           href="#"
                                                                                           title="Debug page load issues by seeing exactly how the page loads. View the page load up to 4x slower to help pinpoint rendering or other page load problems."></a>
                                    </th>
                                    <td><input type="checkbox" name="gfw_video" id="gfw_video" value="1"/> <span
                                                class="description">Create a video of the page loading (requires 5 api credits)</span>
                                    </td>
                                </tr>
                            </table>

                            <input type="submit" value="Test URL now!" name="submit">
                        </form>
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
    </div>
<?php get_footer(); ?>