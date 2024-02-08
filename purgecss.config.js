module.exports = {
  content: [
    './**/*.twig',
    './**/*.theme',
    './**/*.php',
  ],
  css: ['./css/custom.css'],
  safelist: [
    'html',
    'body',
    /^alert-/,
    /^hc-/,
    /^col-/,
    'h1',
    'h2',
    'h3',
    'h4',
    'h5',
    'h6',
  ]
}
