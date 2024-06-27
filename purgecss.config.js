module.exports = {
    content: [
      './views/**/*.php',
      './public/js/**/*.js',
    ],
    css: ['./public/css/main.css'],
    output: './public/css/purged.css',
    safelist: [
      // Any classes to keep regardless of detection
    ]
  }