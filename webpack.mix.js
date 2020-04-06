const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    // .js('resources/js/vueapp.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');


    // module.exports = {
    //   module: {
    //     rules: [
    //       // ... other rules omitted
    //
    //       // this will apply to both plain `.scss` files
    //       // AND `<style lang="scss">` blocks in `.vue` files
    //       {
    //         test: /\.scss$/,
    //         use: [
    //           'vue-style-loader',
    //           'css-loader',
    //           'sass-loader'
    //         ]
    //       }
    //     ]
    //   },
    //   // plugin omitted
    // }
