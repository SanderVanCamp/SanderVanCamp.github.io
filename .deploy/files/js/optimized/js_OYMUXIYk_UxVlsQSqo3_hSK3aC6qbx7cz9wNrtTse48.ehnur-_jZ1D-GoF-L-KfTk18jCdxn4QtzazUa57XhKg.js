/* Source and licensing information for the line(s) below can be found at http://local.sandervancamp.be/core/assets/vendor/jquery.ui/ui/unique-id-min.js. */
/*!
 * jQuery UI Unique ID 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(i){"function"==typeof define&&define.amd?define(["jquery","./version"],i):i(jQuery)}((function(i){return i.fn.extend({uniqueId:(n=0,function(){return this.each((function(){this.id||(this.id="ui-id-"+ ++n)}))}),removeUniqueId:function(){return this.each((function(){/^ui-id-\d+$/.test(this.id)&&i(this).removeAttr("id")}))}});var n}));
/* Source and licensing information for the above line(s) can be found at http://local.sandervancamp.be/core/assets/vendor/jquery.ui/ui/unique-id-min.js. */