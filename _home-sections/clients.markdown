---
title: Clients
date: 2016-08-17 10:36:00 Z
published: false
position: 2
---

<div class="u-center-block u-center-block--large">
  <div class="grid grid--gutter grid--center">
    {% for image in site.clients %}
      <div class="grid__item grid__item--gutter grid__item--icons">
        <img class="u-icon u-icon--grey" src="{{ image.image }}" alt="{{ image.title }} logo" width="32px" height="32px">
      </div>
    {% endfor %}
  </div>
</div>
