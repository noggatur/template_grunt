window.$ = window.jQuery = require('jquery')
require 'bootstrap-sass'
require 'angular'

console.log "CoffeeScript enabled!"
console.log 'Bootstrap enabled!'

$(document).ready ->
  console.log 'jQuery enabled!'