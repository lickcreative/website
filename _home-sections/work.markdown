---
title: Work
date: 2016-08-17 10:36:00 Z
published: false
position: 3
---

<div class="grid">
{% for entry in site.work %}
  <div class="grid__item grid__item--work">
    <a class="panel no-link-style" href="{{ entry.url }}">
      <img class="u-object-fit" src="{{ entry.desktop_image }}" srcset="{{ entry.1x_image }} 1x, {{ entry.2x_image }} 2x" alt="{{ entry.title }} work image" />
      <h3 class="panel__caption">{{ entry.title }}</h3>
    </a>
  </div>
  {% endfor %}
</div>
