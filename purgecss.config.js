module.exports = {
  content: [
    './**/*.twig',
    './**/*.theme',
    './**/*.php',
  ],
  css: ['./css/custom.css'],
  safelist: ['html', 'body', /^alert-/]
}
