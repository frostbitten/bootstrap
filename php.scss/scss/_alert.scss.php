//
// Base styles
//

.alert {
  padding: $alert-padding;
  margin-bottom: $spacer-y;
  border: $alert-border-width solid transparent;
  @include border-radius($alert-border-radius);
}

// Headings for larger alerts
.alert-heading {
  // Specified to prevent conflicts of changing $headings-color
  color: inherit;
}

// Provide class for links that match alerts
.alert-link {
  font-weight: $alert-link-font-weight;
}


// Dismissible alerts
//
// Expand the right padding and account for the close button's positioning.

.alert-dismissible {
  padding-right: ($alert-padding + 20px);

  // Adjust close link position
  .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit;
  }
}


// Alternate styles
//
// Generate contextual modifier classes for colorizing the alert.

.alert-success {
  @include alert-variant($alert-success-bg, $alert-success-border, $alert-success-text);
}
.alert-info {
  @include alert-variant($alert-info-bg, $alert-info-border, $alert-info-text);
}
.alert-warning {
  @include alert-variant($alert-warning-bg, $alert-warning-border, $alert-warning-text);
}
.alert-danger {
  @include alert-variant($alert-danger-bg, $alert-danger-border, $alert-danger-text);
}
<?php
foreach($color_sets as $set_type => $colors){
	foreach($colors as $color => $color_props){

echo 
'
.alert-'.$color.' {
  @include alert-variant($alert-'.$color.'-bg, $alert-'.$color.'-border, $alert-'.$color.'-text);
}
';

	}
}
?>
