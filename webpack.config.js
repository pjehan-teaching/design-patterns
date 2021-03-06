const path = require('path');
const ZipFilesPlugin = require('webpack-zip-files-plugin');

module.exports = {
    entry: {
        index: './src/main.js'
    },
    output: {
        path: path.resolve(__dirname, 'assets/js/'),
        publicPath: "/public/",
        filename: "script.js"
    },
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/,
                exclude: /(node_modules|bower_components)/,
                loader: 'babel-loader',
                options: { presets: ['@babel/preset-env'] }
            },
            {
                test: /\.s[ac]ss$/i,
                use: ['style-loader', 'css-loader', 'sass-loader']
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            },
            {
                test: /.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
                use: [{
                    loader: 'file-loader',
                    options: {
                        name: '[name].[ext]',
                        outputPath: '../public/fonts/',
                        publicPath: 'fonts/'
                    }
                }]
            }
        ]
    },
    plugins: [
        new ZipFilesPlugin({
            entries: [
                { src: path.join(__dirname, './src/code_examples/builder'), dist: 'builder' },
                { src: path.join(__dirname, './src/code_examples/factory_method'), dist: 'factory_method' },
                { src: path.join(__dirname, './src/code_examples/singleton'), dist: 'singleton' },
                { src: path.join(__dirname, './src/code_examples/decorator'), dist: 'decorator' },
                { src: path.join(__dirname, './src/code_examples/composite'), dist: 'composite' },
                { src: path.join(__dirname, './src/code_examples/strategy'), dist: 'strategy' },
                { src: path.join(__dirname, './src/code_examples/template_method'), dist: 'template_method' },
                { src: path.join(__dirname, './src/code_examples/iterator'), dist: 'iterator' },
            ],
            output: path.join(__dirname, './assets/files/code_examples'),
            format: 'zip',
        }),
    ]
};
