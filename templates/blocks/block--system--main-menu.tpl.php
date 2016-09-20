<?php

/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user
 *     module is responsible for handling the default user navigation block. In
 *     that case the class would be 'block-user'.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 themeable
 */
?>
<nav id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>

  <div class="brand">
    <div class="mark-tier-2">
      <a href="http://psu.edu">
      <img src="<?php print $theme_path; ?>/images/mark-tier-2.svg" alt="Penn State Logo">
      </a>
    </div>
    <div class="dept-name-tier-2">
      <div class="l-region l-region--department-name-tier-2">
        <div id="block-block-15" class="block block--block block--block-15">
          <div class="block__content">
            <p><a href="/">The Center for Exellence in Science Education</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="content"<?php print $content_attributes; ?>>
    <?php print $content ?>
  </div>
</nav>
