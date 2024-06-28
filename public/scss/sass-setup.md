# SCSS Framework

## Setup

1. Install packages:
`npm install --save-dev sass npm-run-all purgecss`

2. Add to `package.json`:
```json
"scripts": {
  "sass": "sass public/scss/main.scss public/css/main.css",
  "sass:watch": "sass --watch public/scss/main.scss public/css/main.css",
  "purgecss": "purgecss --config ./purgecss.config.js",
  "start": "npm-run-all --parallel sass sass:watch",
  "build": "npm run sass && npm run purgecss"
}
```

3. Create `purgecss.config.js`:
```js
module.exports = {
  content: ['./views/**/*.php', './public/js/**/*.js'],
  css: ['./public/css/main.css'],
  output: './public/css/purged.css',
  safelist: [
      // Any classes to keep regardless of detection
  ]
}
```

## Usage

- Development: `npm start`
- Production: `npm run build`

## Structure
```
scss/
├── classes/
├── components/
├── globals/
├── util/
├── views/
└── main.scss
```

## Updating
Run `npm update` regularly