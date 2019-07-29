const mix = require("laravel-mix");

mix
  .js("resources/js/uploads.js", "public/js")
  .sass("resources/sass/uploads.scss", "public/css")
  .sass("resources/sass/index.scss", "public/css");
