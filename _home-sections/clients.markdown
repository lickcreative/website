---
title: Clients
date: 2016-08-17 10:36:00 Z
published: false
position: 2
---

<div class="u-center-block u-center-block--large grid grid--center">
  {% for image in site.clients %}
    <div class="grid__item grid__item--clients">
      <img class="client-logo" src="{{ image.image }}" alt="{{ image.title }} logo">
    </div>
  {% endfor %}
</div>
