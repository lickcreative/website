---
title: Work
date: 2016-08-17 10:36:00 Z
published: false
position: 3
---
<div class="grid">
{% for entry in site.work %}
  <div class="grid__item grid__item--work">
    <a class="panel" href="{{  }}">
      <img class="u-object-fit" src="{{ entry.thumbnail-image_desktop1x }}" alt="" />
      <h3 class="panel__caption">{{ entry.title }}</h3>
    </a>
  </div>
  {% endfor %}
</div>
