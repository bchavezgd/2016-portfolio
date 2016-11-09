# Portfolio theme for Brian Design Works.com

based off [underscores "_s"](http://underscores.me).

Due by 2016-11-14

## Article Footer.

- Separated Template Tags in article footer for a better layout. (flex)
- styled article footer, and article.

## adding Resume (CPT)

- added resume_cpt.php for custom post type.

### ToDo

- meta box
  - fields
    - date
    - location
    - title
    - company
    - description
- use custom code in content.

## go full width

- [x] created separate template without sidebar

## Style Only

- full width templates needs larger body text and line height.
  - modified page styles for full width templates.

## v161107

- moved away from jetpack portfolio post type. converted all to Portfolio CPT.
- added `front-page.php`
  - created a portfolio WP_Query loop for only `portfolio` CPT
  - refactored some styles for mobile first grid.
- added `single-portfolio.php`
- dropped some content from front page. covert mobile to 1 col grid, 2 col on 700+px, 3col for larger screens.
- added widgets to front page after portfolio for flexiblilty. maybe social media/contact.
### TODO

- need to add margin to single post styles.
- need to add custom taxonomy, *Project Type:* and *Role:*
