# Lick Website Technical Handover

The Lick site is built on the [Jekyll] static site generator. It is hosted on [Github Pages] and uses [Siteleaf] as a CMS to provide a comfortable editing environment for non-developers.

## Installation

Clone the repo [on Github], `cd` into the repo and run `npm install` to install the dependencies (currently this is only [Zenscroll] for smooth scrolling down the homepage and [Headroom.js] to change the navbar styles on scroll). You'll also need Jekyll and Ruby installed. Run `jekyll serve` (or `jekyll serve --incremental` to only regenerate the files you've edited each time) and Jekyll should serve the site at <http://127.0.0.1:4000>.

## Directory Structure

The CSS is written in [SCSS] in partial files within the `_sass` directory. These are imported into the `_main.scss` file (that also sets the project variables), which is compiled into `main.css` by Jekyll.

The HTML is structured to be as modular as possible. Pages are [markdown] files, which Jekyll converts into HTML. The site uses [Collections] to organise data as much as possible.

There are Collections for each section on the homepage (`_home-sections`), each client shown in the Clients section (`_clients`), each piece of work shown in the Work section (`_work`), each location in the Contact section (`_locations`) and each of the Lab pages (`_lab`). Siteleaf also creates an '_uploads' Collection to manage user-uploaded images.

## Homepage Sections

### Overview

The homepage is `index.md`, and all the file does is sort the sections in the `_home-sections` Collection according to the `position` value in their frontmatter and output them in turn. The positions variable is set by Siteleaf when a user drag-and-drops the sections to re-order them. The actual HTML for each section is within each separate file in `_home-sections`. These are markdown files for ease of editing within Siteleaf (even though some use only HTML).

### Hero

This section outputs the full viewport-height hero slider using whatever images are provided in the `hero_images` frontmatter.

### About

This section is just paragraph text, so easily editable by users within the CMS.

### Clients

This section loops over all clients in the `_clients` Collection and outputs the logos provided within their frontmatter in a grid.

### Work

This section loops over all entries in the `_work` Collection and outputs them in a grid, showing the frontmatter provided thumbnail images and linking to the full page for each.

### Contact

This section loops over each location in `_locations` and outputs them in a grid with the address and phone number provided in the frontmatter of each.

## Lab

The `_lab` Collection holds each of the pages concerning the Lab. These act as almost a microsite linked from the homepage (although the layout it very similar to the Work pages).

`_lab/index.md` is the first page (at the URL /lab), and the others follow. The order is established by a `position` frontmatter value, as with the home sections. The complex looking Liquid tags in the Lab layouts generate the correct arrow links that navigate to the previous/next page based on the `position` value.

## Layouts

### Work Pages

`work-page.html` is the layout for all the Work pages. It will take the `cover_image` frontmatter value and use it as the full viewport cover image. It displays the content text in a box over the image and will show a grid of work images underneath (if these images exist in the frontmatter).

### Lab Pages

`lab-cover.html` and `lab-tech.html` are very similar to the work page layout. The only difference is the previous/next navigation arrows.

[Jekyll]: https://jekyllrb.com/
[Github Pages]: https://pages.github.com/
[Siteleaf]: http://www.siteleaf.com/
[on Github]: https://github.com/lickcreative/website
[Zenscroll]: https://github.com/zengabor/zenscroll
[Headroom.js]: https://github.com/WickyNilliams/headroom.js/
[SCSS]: http://sass-lang.com/
[markdown]: https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet
[Collections]: https://jekyllrb.com/docs/collections/
