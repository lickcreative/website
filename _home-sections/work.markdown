---
title: Work
date: 2016-08-17 10:36:00 Z
published: false
position: 3
---

<div class="grid">
{% for entry in site.work %}
  <div class="grid__item grid__item--work">
    <a class="no-link-style" href="{{ entry.url }}">
      <div class="overlay" style="background-image: url('{{ entry.image }}');">
        <span class="overlay__text overlay__text--work u-text-size--large u-text-center u-text-invert">{{ entry.title }}</span>
      </div>
    </a>
  </div>
  {% endfor %}
</div>
