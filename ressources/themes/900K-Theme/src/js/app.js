
// Core
var functions_core    = require('./core/functions');
var burger            = require('./core/burger');
var material          = require('./core/index');


jQuery(document).ready(function() {
  functions_core();
  burger();
  material();

});
