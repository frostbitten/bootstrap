// Base class
//
// Requires one of the contextual, color modifier classes for `color` and
// `background-color`.

.tag {
  display: inline-block;
  padding: .21em .4em .29rem; // $tag-padding-y $tag-padding-x;
  font-size: $tag-font-size;
  font-weight: $tag-font-weight;
  line-height: 1;
  color: $tag-color;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  @include border-radius();

  // Empty tags collapse automatically
  &:empty {
    display: none;
  }
}

// Quick fix for tags in buttons
.btn .tag {
  position: relative;
  top: -1px;
}

// scss-lint:disable QualifyingElement
// Add hover effects, but only for links
a.tag {
  @include hover-focus {
    color: $tag-link-hover-color;
    text-decoration: none;
    cursor: pointer;
  }
}
// scss-lint:enable QualifyingElement

// Pill tags
//
// Make them extra rounded with a modifier to replace v3's badges.

.tag-pill {
  padding-right: $tag-pill-padding-x;
  padding-left: $tag-pill-padding-x;
  @include border-radius($tag-pill-border-radius);
}

// Colors
//
// Contextual variations (linked tags get darker on :hover).

.tag-default {
  @include tag-variant($tag-default-bg);
}

.tag-primary {
  @include tag-variant($tag-primary-bg);
}

.tag-success {
  @include tag-variant($tag-success-bg);
}

.tag-info {
  @include tag-variant($tag-info-bg);
}

.tag-warning {
  @include tag-variant($tag-warning-bg);
}

.tag-danger {
  @include tag-variant($tag-danger-bg);
}

<?php
foreach($color_sets as $colors){
	foreach($colors as $color => $color_props){

echo 
'.tag-'.$color.' {
  @include tag-variant($tag-'.$color.'-bg);
}
';

	}
}
?>

