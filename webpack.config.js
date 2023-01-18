const path = require('path');

console.log('LOG', path.resolve(__dirname, 'dist'));

module.exports = {
    entry: './public/storage/js/3d.js',
    output: {
        filename: '3d.js',
        path: path.resolve(__dirname + '/storage/app/public/js', '3d'),
    },
    optimization: {
        minimize: false
    },
};