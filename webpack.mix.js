const mix = require('laravel-mix');

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.styles(
    [
        'public/css/bootstrap.min.css',
        'public/css/bootstrap-reset.css',
        'public/css/style.css',
        'public/css/style-responsive.css'
    ], 'public/_adm/css/bundle.css')
    .scripts(
        [
            'public/js/jquery.js',
            'public/js/bootstrap.bundle.min.js',
            'public/js/jquery.dcjqaccordion.2.7.js',
            'public/js/jquery.scrollTo.min.js',
            'public/js/jquery.nicescroll.js',
            'public/js/slidebars.min.js',
            'public/js/common-scripts.js',
        ],'public/_adm/js/bundle.js')
    .version();
