const mix = require("laravel-mix");

// configure fonts and images files in the main assets directory not in public
mix.options({
    fileLoaderDirs: {
        fonts: "assets/fonts",
        images: "assets/images",
    },
});

mix.js("resources/js/app.js", "public/assets/js").postCss(
    "resources/css/app.css",
    "public/assets/css",
    [require("tailwindcss")]
);

// disable build notifications
mix.disableNotifications();
