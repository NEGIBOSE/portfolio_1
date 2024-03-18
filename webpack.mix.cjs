const mix = require("laravel-mix");

mix.js(
    [
        "resources/js/app.js",
        "resources/js/bootstrap.js",
        "resources/js/register.js",
        "resources/js/search.js",
    ],
    "public/js"
)
    .styles(
        [
            "resources/css/app.css",
            "resources/css/register.css",
            "resources/css/sanitize.css",
            "resources/css/search.css",
            "resources/css/style.css",
        ],
        "public/css/app.css" // 出力先のファイルパスを指定する
    )
    .copyDirectory("resources/images", "public/images");

if (mix.inProduction()) {
    mix.version();
}

mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.m?js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ["@babel/preset-env"],
                    },
                },
            },
        ],
    },
});
