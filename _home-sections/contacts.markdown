---
title: Contact
date: 2016-08-17 10:36:00 Z
published: false
position: 4
---

<div class="u-center-block u-center-block--medium grid grid--center">
  {% for location in site.locations %}
    <div class="grid__item grid__item--half">
      <div class="u-overlay">
        <img class="u-overlay__image" src="{{ location.image }}" alt="{{ location.title }}">
        <div class="u-overlay__text u-big-text">
          <!-- Has to be on one line to avoid weird whitespace in final HTML -->
          <address>{% for line in location.address %}{{ line }}<br>{% endfor %}</address>
          <span>T: <a href="tel:{{ location.phone }}">{{ location.phone }}</a></span>
        </div>
      </div>
    </div>
  {% endfor %}
</div>
