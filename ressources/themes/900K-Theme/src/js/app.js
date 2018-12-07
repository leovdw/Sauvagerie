
// Core
var functions_core    = require('./core/functions');
var burger            = require('./core/burger');

var homevds          = require('./functions/home_vds');


jQuery(document).ready(function() {
  functions_core();
  burger();

  homevds();

});
