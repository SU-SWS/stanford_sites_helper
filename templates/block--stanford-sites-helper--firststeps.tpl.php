<?php
/*
 * @file Template file for Quickstart/First Steps block.
 */

/*
 * Variables
 */
$images = drupal_get_path('module', 'stanford_sites_helper') . '/images/';

?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
<?php if ($block->subject): ?>
  <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
<?php endif;?>
  <?php print render($title_suffix); ?>
  
  <div id="welcome">
  <h1>Quick steps to get started:</h1>
  <div id="quickstart">
    <ol>
      <li>
        <fieldset class="field-group-fieldset collapsible collapsed">
          <legend><img src="<?php print $images ?>plant.png" alt="plant"> <span class="fieldset-legend">Change your site's name and information</span></legend>
          <div class="fieldset-wrapper">
            <p class="intro">You can rename your site, add a slogan, or set an existing page to be the homepage of your site by visiting the site information page.</p>
            <p> <?php l((t"Edit Your Site's Information"), 'admin/config/system/site-information', array('class' => array("btn"))); ?> </p>
            <p><a href="#" class="btn">Edit Your Site's Information</a></p>
          </div>
        </fieldset>
      </li>
      <li>
        <fieldset class="field-group-fieldset collapsible collapsed">
          <legend><img src="<?php print $images ?>pencil.png" alt="pencil"> <span class="fieldset-legend">Add content to your homepage</span></legend>
          <div class="fieldset-wrapper">
            <p class="intro">Use your homepage to add a static welcome or introduction to your site. If you want a blog as part of your site (or on your site's homepage), visit the Modules page to enable the Stanford Blog feature.</p>
            <p><a href="#" class="btn">Edit Your Homepage</a></p>
            <p><a href="#">Learn more about the Stanford Blog feature</a></p>
          </div>
        </fieldset>
      </li>
      <li>
        <fieldset class="field-group-fieldset collapsible collapsed">
          <legend><img src="<?php print $images ?>plus.png" alt="plus"> <span class="fieldset-legend">Create a new page on your site</span></legend>
          <div class="fieldset-wrapper">
            <p class="intro">Do you want an &quot;about&quot; or other page  on your site? When creating new pages, you can directly add them to the Main Menu navigation in the Menu Settings section of the form.</p>
            <p><a href="#" class="btn">Create a New Page</a></p>
            <p><a href="#">Learn more about content types in Drupal</a></p>
          </div>
        </fieldset>
      </li>
    </ol>
  </div>
  <h1>More advanced tasks:</h1>
  <div id="nextsteps">
    <ol>
      <li>
        <fieldset class="field-group-fieldset collapsible collapsed">
          <legend><img src="<?php print $images ?>menu.png" alt="menu"> <span class="fieldset-legend">Edit your  navigation menus</span></legend>
          <div class="fieldset-wrapper">
            <p class="intro">Drupal comes pre-packaged with a Main menu navigation  to which you can add your existing pages. First create new pages, and then add them to your menu. You can create a new menu and add items to it by visiting the Menus page. Move your menus around using the Blocks page.</p>
            <p><a href="#" class="btn">Edit Your Main Menu</a> <a href="#" class="btn">Create a New Menu</a></p>
            <p><a href="#">Learn more about menus in Drupal</a></p>
          </div>
        </fieldset>
      </li>
      <li>
        <fieldset class="field-group-fieldset collapsible collapsed">
          <legend><img src="<?php print $images ?>gear.png" alt="gear"> <span class="fieldset-legend">Add functionality and features</span></legend>
          <div class="fieldset-wrapper">
            <p class="intro">Want to add a blog to your site? Looking to do more with your site? Enable functionality on the Modules page, but first you might want to learn what the available modules do and why you might want to enable them.</p>
            <p><a href="#" class="btn">Visit Your Modules</a></p>
            <p><a href="#">Learn more about the available modules on Stanford Sites</a></p>
          </div>
        </fieldset>
      </li>
      <li>
        <fieldset class="field-group-fieldset collapsible collapsed">
          <legend><img src="<?php print $images ?>brush.png" alt="brush"> <span class="fieldset-legend">Edit the look and feel of your site</span></legend>
          <div class="fieldset-wrapper">
            <p class="intro">Your site comes pre-packaged with the Stanford Basic theme. Edit the settings for Stanford Basic to add a background image and change the color scheme. If you're looking to do more custom CSS for your site, use the CSS Injector module.</p>
            <p><a href="#" class="btn">Edit My Theme's Settings</a></p>
            <p><a href="#">Learn more about CSS Injector</a></p>
          </div>
        </fieldset>
      </li>
    </ol>
  </div>
  <h1>Going further:</h1>
  <div id="shortcuts">
    <ul>
      <li><a href="#">Add an image</a></li>
      <li><a href="#">Add a link</a></li>
      <li><a href="#">Add a blog</a></li>
      <li><a href="#">Add a slideshow</a></li>
      <li><a href="#">Add a new user</a></li>
      <li><a href="#">Define a new user role / access</a></li>
      <li><a href="#">Edit permissions</a></li>
      <li><a href="#">Adjust the layout of your blocks</a></li>
      <li><a href="#">Create a view</a></li>
    </ul>
  </div>
</div>
