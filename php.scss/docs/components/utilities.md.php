---
layout: docs
title: Utility classes
group: components
---

Bootstrap includes dozens of utilities—classes with a single purpose. They're designed to reduce the frequency of highly repetitive declarations in your CSS while allowing for quick and easy development.

## Contents

* Will be replaced with the ToC, excluding the "Contents" header
{:toc}

## Spacing

Assign `margin` or `padding` to an element or a subset of its sides with shorthand classes. Includes support for individual properties, all properties, and vertical and horizontal properties. All classes are multiples on the global default value, `1rem`.

The classes are named using the format: `{property}-{sides}-{size}`

Where *property* is one of:

* `m` - for classes that set `margin`
* `p` - for classes that set `padding`

Where *sides* is one of:

* `t` - for classes that set `margin-top` or `padding-top`
* `b` - for classes that set `margin-bottom` or `padding-bottom`
* `l` - for classes that set `margin-left` or `padding-left`
* `r` - for classes that set `margin-right` or `padding-right`
* `x` - for classes that set both `*-left` and `*-right`
* `y` - for classes that set both `*-top` and `*-bottom`
* `a` - for classes that set a `margin` or `padding` on all 4 sides of the element

Where *size* is one of:

* `0` - for classes that eliminate the `margin` or `padding` by setting it to `0`
* `1` - (by default) for classes that set the `margin` or `padding` to `$spacer-x` or `$spacer-y`
* `2` - (by default) for classes that set the `margin` or `padding` to `$spacer-x * 1.5` or `$spacer-y * 1.5`
* `3` - (by default) for classes that set the `margin` or `padding` to `$spacer-x * 3` or `$spacer-y * 3`

(You can add more sizes by adding entries to the `$spacers` Sass map variable.)

Here are some representative examples of these classes:

{% highlight scss %}
.m-t-0 {
  margin-top: 0 !important;
}

.m-l-1 {
  margin-left: $spacer-x !important;
}

.p-x-2 {
  padding-left: ($spacer-x * 1.5) !important;
  padding-right: ($spacer-x * 1.5) !important;
}

.p-a-3 {
  padding: ($spacer-y * 3) ($spacer-x * 3) !important;
}
{% endhighlight %}

### Horizontal centering
Additionally, Bootstrap also includes an `.m-x-auto` class for horizontally centering fixed-width block level content by setting the horizontal margins to `auto`.

<div class="bd-example">
  <div class="m-x-auto" style="width: 200px; background-color: rgba(86,61,124,.15);">
    Centered element
  </div>
</div>

{% highlight html %}
<div class="m-x-auto" style="width: 200px;">
  Centered element
</div>
{% endhighlight %}

## Text alignment

Easily realign text to components with text alignment classes.

{% example html %}
<p class="text-justify">Justified text.</p>
<p class="text-nowrap">No wrap text.</p>
{% endexample %}

For left, right, and center alignment, responsive classes are available that use the same viewport width breakpoints as the grid system.

{% example html id=5 %}
<p class="text-xs-left">Left aligned text on all viewport sizes.</p>
<p class="text-xs-center">Center aligned text on all viewport sizes.</p>
<p class="text-xs-right">Right aligned text on all viewport sizes.</p>

<p class="text-sm-left">Left aligned text on viewports sized SM (small) or wider.</p>
<p class="text-md-left">Left aligned text on viewports sized MD (medium) or wider.</p>
<p class="text-lg-left">Left aligned text on viewports sized LG (large) or wider.</p>
<p class="text-xl-left">Left aligned text on viewports sized XL (extra-large) or wider.</p>
{% endexample %}


## Loading Spinner

It spins

{% example html test %}
<div class="loading-spinner">
	<span></span> <!-- 1 -->
	<span></span> <!-- 2 -->
	<span></span> <!-- 3 -->
	<span></span> <!-- 4 -->
</div>
{% endexample %}

It's customizable

{% example html  id='loading-spinner' %}
<div class="loading-spinner">
	<span class="text-danger"></span> <!-- 1 -->
	<span class="text-warning"></span> <!-- 2 -->
	<span class="text-info"></span> <!-- 3 -->
	<span class="text-success"></span> <!-- 4 -->
</div>
{% endexample %}


## Text transform

Transform text in components with text capitalization classes.

{% example html %}
<p class="text-lowercase">Lowercased text.</p>
<p class="text-uppercase">Uppercased text.</p>
<p class="text-capitalize">CapiTaliZed text.</p>
{% endexample %}

Note how `text-capitalize` only changes the first letter of each word, leaving the case of any other letters unaffected.

## Font weight and italics

Quickly change the weight (boldness) of text or italicize text.

{% example html %}
<p class="font-weight-bold">Bold text.</p>
<p class="font-weight-normal">Normal weight text.</p>
<p class="font-italic">Italic text.</p>
{% endexample %}

## Contextual colors and backgrounds

Convey meaning through color with a handful of emphasis utility classes. These may also be applied to links and will darken on hover just like our default link styles.

{% example html %}
<p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
<p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
<p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
<p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
<?php
foreach($color_sets as $colors){
	foreach($colors as $color => $color_props){

echo 
'
<p class="text-'.$color.'">Donec ullamcorper nulla non metus auctor fringilla.</p>';

	}
}
?>
{% endexample %}

Contextual text classes also work well on anchors with the provided hover and focus states.

{% example html %}
<a href="#" class="text-muted">Muted link</a>
<a href="#" class="text-primary">Primary link</a>
<a href="#" class="text-success">Success link</a>
<a href="#" class="text-info">Info link</a>
<a href="#" class="text-warning">Warning link</a>
<a href="#" class="text-danger">Danger link</a>
<?php
foreach($color_sets as $colors){
	foreach($colors as $color => $color_props){

echo 
'
<a href="#" class="text-'.$color.'">'.$color.' link</a>';

	}
}
?>
{% endexample %}

Similar to the contextual text color classes, easily set the background of an element to any contextual class. Anchor components will darken on hover, just like the text classes.

{% example html %}
<div class="bg-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
<div class="bg-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</div>
<div class="bg-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</div>
<div class="bg-warning">Etiam porta sem malesuada magna mollis euismod.</div>
<div class="bg-danger">Donec ullamcorper nulla non metus auctor fringilla.</div>
<?php
foreach($color_sets as $set_type => $colors){
	// if($set_type == "light")
	foreach($colors as $color => $color_props){

echo 
'
<div class="bg-'.$color.'">Donec ullamcorper nulla non metus auctor fringilla.</div>';

	}
}
?>
<div class="bg-inverse">Cras mattis consectetur purus sit amet fermentum.</div>
{% endexample %}

{% callout info %}
#### Dealing with specificity

Sometimes contextual classes cannot be applied due to the specificity of another selector. In some cases, a sufficient workaround is to wrap your element's content in a `<div>` with the class.
{% endcallout %}

{% capture callout-include %}{% include callout-warning-color-assistive-technologies.md %}{% endcapture %}
{{ callout-include | markdownify }}

## Widths

Easily make an element as wide as its parent using the `.w-100` utility class, which sets `width: 100%`.

{% example html %}
<img class="w-100" data-src="holder.js/200px100?outline=yes&text=Width%20%3D%20100%25" alt="Width = 100%">
{% endexample %}

## CSS `display` (`block`, `inline`, `inline-block`)

Use `.d-block`, `.d-inline`, or `.d-inline-block` to simply set an element's [`display` property](https://developer.mozilla.org/en-US/docs/Web/CSS/display) to `block`, `inline`, or `inline-block` (respectively).

To make an element `display: none`, use our [responsive utilities](../layout/responsive-utilities/) instead.

{% example html %}
<div class="d-inline bg-success">Inline</div>
<div class="d-inline bg-success">Inline</div>

<span class="d-block bg-primary">Block</span>

<div class="d-inline-block bg-warning">
  <h3>inline-block</h3>
  Boot that strap!
</div>
<div class="d-inline-block bg-warning">
  <h3>inline-block</h3>
  Strap that boot!
</div>
{% endexample %}

## Close icon

Use a generic close icon for dismissing content like modals and alerts. **Be sure to include text for screen readers**, as we've done with `aria-label`.

{% example html %}
<button type="button" class="close" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
{% endexample %}

## Responsive floats

These utility classes float an element to the left or right, or disable floating, based on the current viewport size using the [CSS `float` property](https://developer.mozilla.org/en-US/docs/Web/CSS/float). `!important` is included to avoid specificity issues. These use the same viewport width breakpoints as the grid system.

Two similar non-responsive mixins (`pull-left` and `pull-right`) are also available.

{% example html %}
<div class="pull-xs-left">Float left on all viewport sizes</div><br>
<div class="pull-xs-right">Float right on all viewport sizes</div><br>
<div class="pull-xs-none">Don't float on all viewport sizes</div><br>

<div class="pull-sm-left">Float left on viewports sized SM (small) or wider</div><br>
<div class="pull-md-left">Float left on viewports sized MD (medium) or wider</div><br>
<div class="pull-lg-left">Float left on viewports sized LG (large) or wider</div><br>
<div class="pull-xl-left">Float left on viewports sized XL (extra-large) or wider</div><br>
{% endexample %}

{% highlight scss %}
// Related simple non-responsive mixins
.element {
  @include pull-left;
}
.another-element {
  @include pull-right;
}
{% endhighlight %}

## Clearfix

Easily clear `float`s by adding `.clearfix` **to the parent element**. Utilizes [the micro clearfix](http://nicolasgallagher.com/micro-clearfix-hack/) as popularized by Nicolas Gallagher. Can also be used as a mixin.

{% highlight html %}
<div class="clearfix">...</div>
{% endhighlight %}

{% highlight scss %}
// Mixin itself
.clearfix() {
  &:before,
  &:after {
    content: " ";
    display: table;
  }
  &:after {
    clear: both;
  }
}

// Usage as a mixin
.element {
  @include clearfix;
}
{% endhighlight %}

## Fixed positioning

The `.pos-f-t` class can be used to easily position elements at the top of the viewport and make them as wide as the viewport. **Be sure you understand the ramifications of fixed-position elements within your project.** Here's how the class is defined:

{% highlight scss %}
.pos-f-t {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: $zindex-navbar-fixed;
}
{% endhighlight %}

## Invisible content

The `.invisible` class can be used to toggle only the visibility of an element, meaning its `display` is not modified and the element can still affect the flow of the document.

{% highlight html %}
<div class="invisible">...</div>
{% endhighlight %}

{% highlight scss %}
// Class
.invisible {
  visibility: hidden;
}

// Usage as a mixin
.element {
  @include invisible;
}
{% endhighlight %}

## Screen readers and keyboard users

Hide an element to all devices **except screen readers** with `.sr-only`. Combine `.sr-only` with `.sr-only-focusable` to show the element again when it's focused (e.g. by a keyboard-only user). Can also be used as mixins.

{% comment %}
Necessary for following [accessibility best practices](../getting-started/#accessibility).
{% endcomment %}

{% highlight html %}
<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
{% endhighlight %}

{% highlight scss %}
// Usage as a mixin
.skip-navigation {
  @include sr-only;
  @include sr-only-focusable;
}
{% endhighlight %}

## Image replacement

Utilize the `.text-hide` class or mixin to help replace an element's text content with a background image.

{% highlight html %}
<h1 class="text-hide">Custom heading</h1>
{% endhighlight %}

{% highlight scss %}
// Usage as a mixin
.heading {
  @include text-hide;
}
{% endhighlight %}

## Responsive embeds

Allow browsers to determine video or slideshow dimensions based on the width of their containing block by creating an intrinsic ratio that will properly scale on any device.

Rules are directly applied to `<iframe>`, `<embed>`, `<video>`, and `<object>` elements; optionally use an explicit descendant class `.embed-responsive-item` when you want to match the styling for other attributes.

**Pro-Tip!** You don't need to include `frameborder="0"` in your `<iframe>`s as we override that for you.

{% example html %}
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>
{% endexample %}

Aspect ratios can be customized with modifier classes.

{% highlight html %}
<!-- 21:9 aspect ratio -->
<div class="embed-responsive embed-responsive-21by9">
  <iframe class="embed-responsive-item" src="..."></iframe>
</div>

<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="..."></iframe>
</div>

<!-- 4:3 aspect ratio -->
<div class="embed-responsive embed-responsive-4by3">
  <iframe class="embed-responsive-item" src="..."></iframe>
</div>

<!-- 1:1 aspect ratio -->
<div class="embed-responsive embed-responsive-1by1">
  <iframe class="embed-responsive-item" src="..."></iframe>
</div>
{% endhighlight %}
