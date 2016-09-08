---
title: Contact
date: 2016-08-17 10:36:00 Z
published: false
position: 4
---

<div class="u-center-block u-center-block--medium u-center-block--outline grid u-center-block--contact grid--center u-vertical-space">
  {% for location in site.locations %}
    <div class="grid__item grid__item--half">
      <!-- <div class="u-overlay"> -->
      <div>
        <!-- <img class="u-overlay__image" src="{{ location.image }}" alt="{{ location.title }}"> -->
        <!-- <div class="u-overlay__text u-big-text"> -->
        <div class="u-big-text u-text-center">
          <!-- Has to be on one line to avoid weird whitespace in final HTML -->
          <address>{% for line in location.address %}{{ line }}<br>{% endfor %}</address>
          <span>T: <a href="tel:{{ location.phone }}">{{ location.phone }}</a></span>
        </div>
      </div>
    </div>
  {% endfor %}
</div>

<div class="u-center-block u-center-block--medium u-center-block--outline">

  <form action="//formspree.io/oliver.phillips@lickcreative.com" method="POST">

      <label for="name">Name</label>
      <input type="text" name="name" placeholder="John Smith" required>

      <label for="_replyto">Email</label>
      <input type="email" name="_replyto" placeholder="john@example.com" required>

      <label for="body">Your message</label>
      <textarea name="body" rows="3" placeholder="Hey Lick…" required></textarea>

      <input type="hidden" name="_next" value="/form-submitted.html">
      <input type="hidden" name="_subject" value="New website submission" />

      <input type="submit" value="Send" class="blue">

  </form>

</div>
