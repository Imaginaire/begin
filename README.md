# Begin

A Wordpress starter theme for use on Imaginaire Digital projects only. Based on Sage 9.

## Installation

1. Go to WP themes directory in terminal
2. Clone repo with your theme name at the end -- i.e. `git clone https://github.com/Imaginaire/begin.git theme-name`
3. Change directory to your new theme
4. Run `yarn`
5. Change /resources/style.css to reflect your new theme

## Usage

### Editing styling and front-end assets

All of this is located within /resources/assets/ in your theme directory. We use yarn to compile assets etc.

#### Useful yarn commands

`yarn` -- build the asseets
`yarn start` -- will watch files for changes and load browsersync to auto-refresh the browser when changes are made

### Templates

Templates are based on the Laravel blade templating engine and all templates can be found in /resources/views/

Please see Sage theme dev guide (based in One Drive > Shared Resources > Wordpress Development)

### Custom functionality

Will either be held within a controller (/app/Controllers/) or as a seperate functionality file (held in /app/ -- will need to be included in /resources/functions.php)

## Development Tips

All of your work should be using version control -- ideally github. Best practice regarding github can be found here: https://www.git-tower.com/learn/git/ebook/en/command-line/appendix/best-practices

Enjoy!
