module.exports = {
  browserSync: {
    hostname: "purchasing.hcpss.dev",
    port: 80,
    openAutomatically: false,
    reloadDelay: 50,
    injectChanges: true,
  },

  drush: {
    enabled: false,
    alias: {
      css_js: 'drush @dev cc css-js',
      cr: 'drush @dev cr'
    }
  },

  twig: {
    useCache: true
  }
};
