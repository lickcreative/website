---
title: About
date: 2016-08-16 10:08:00 Z
published: false
position: 1
image: img/group-draft.jpg
---

<div class="u-center-block u-center-block--medium u-center-block--outline u-vertical-space u-text-size--mid u-text-center" markdown="1">
  Lick is about connectedness &mdash; connecting retail and brands, connecting you and your shoppers, and connecting you to a full range of shopper marketing services.

  With our experience, insights and analysis we help you understand and speak with your customers at every touch point in their shopper journey.

  Building on insights and our existing relationships we provide integrated end-to-end shopping experiences.
</div>
<div class="u-center-block u-center-block--large">
  <div class="grid grid--center grid--gutter">
    {% for icon in site.social %}
      <div class="grid__item grid__item--gutter grid__item--icons">
        <a class="no-link-style" href="{{ icon.link }}">
          <img class="u-icon" src="{{ icon.image }}" alt="{{ icon.title }} icon" width="32px" height="32px">
        </a>
      </div>
    {% endfor %}
  </div>
</div>
