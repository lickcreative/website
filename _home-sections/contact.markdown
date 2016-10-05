---
title: Contact
date: 2016-08-17 10:36:00 Z
published: false
position: 4
email: contact@lickcreative.com
---

<div class="u-center-block u-center-block--medium u-vertical-space">
  <div class="grid grid--gutter grid--center ">
    {% assign locations = site.locations | sort:"position" %}
    {% for location in locations %}
      <div class="grid__item grid__item--contact grid__item--gutter">
        <div class="card card--outline">
          <a href="{{ location.map_url }}" class="no-link-style card__link card__img-container u-square">
            <img class="card__image" src="{{ location.image-1x }}" sizes="100vw, (min-width: 30em) 50vw, (min-width: 70em) 25vw" srcset="{{ location.image-1x }} 1x, {{ location.image-2x }} 2x" alt="Map of {{ location.title }}" />
          </a>
          <div class="card__body u-text-center">
            <h2 class="card__heading">{{ location.title }}</h2>
            <!-- Has to be on one line to avoid weird whitespace in final HTML -->
            <address>{% for line in location.address %}{{ line }}<br>{% endfor %}</address>
            <span>{{ location.phone }}</span>
          </div>
        </div>
      </div>
    {% endfor %}
  </div>
</div>

<div class="u-center-block u-center-block--small u-center-block--outline">

  <form action="//formspree.io/{{ page.email }}" method="POST">

      <label for="name">Name</label>
      <input type="text" name="name" placeholder="John Smith" required>

      <label for="_replyto">Email</label>
      <input type="email" name="_replyto" placeholder="john@example.com" required>

      <label for="body">Your message</label>
      <textarea name="body" rows="4" placeholder="Hey Lick…" required></textarea>

      <input type="hidden" name="_next" value="/form-submitted.html">
      <input type="hidden" name="_subject" value="New website submission" />

      <input type="submit" value="Send" class="blue">

  </form>

</div>
