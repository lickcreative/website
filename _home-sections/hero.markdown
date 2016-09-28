---
title: Home
date: 2016-08-16 09:57:00 Z
published: false
position: 0
hero_images:
- "/uploads/hero/jelly_desktop.jpg"
- "/uploads/hero/paint_desktop.jpg"
- "/uploads/hero/grass_desktop.jpg"
- "/uploads/hero/honey_desktop.jpg"
---

<div class="hero cover" id="js-slideshow">
  {% for image in page.hero_images %}
    <img class="hero__image {% if forloop.index == 1 %}js-animating{% endif %}" src="{{ image }}">
  {% endfor %}
  {% include lick-logo-animated.html %}
</div>
