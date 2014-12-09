require.config
  baseUrl: 'assets/js'
  paths:
    backbone: '../../bower_components/backbone/backbone'
    handlebars: '../../bower_components/handlebars/handlebars.min',
    jquery: '../../bower_components/jquery/dist/jquery.min'
    mustache: '../../bower_components/mustache.js/mustache'
    semantic: '../../bower_components/semantic-ui/build/packaged/javascript/semantic.min'
    text: '../../bower_components/requirejs-text/text'
    underscore: '../../bower_components/underscore/underscore-min'

  shim:
    backbone:
      deps: [
        'underscore'
        'jquery'
      ]
      exports: 'Backbone'

require ['views/app'], (App) ->
  new App()



