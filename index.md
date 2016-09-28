---
title: Home
layout: default
image: "/img/lick-logo.png"
---

{% assign sections = site.home-sections | sort:"position" %}
{% for section in sections %}
<section class="section u-vertical-space" id="{{ section.title | downcase }}">
  {{ section.content }}
</section>
{% endfor %}
