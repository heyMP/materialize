(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
(function ($) {
  'use strict';

  // MenuToggle
  if (typeof Drupal != 'undefined') {
    Drupal.behaviors.materialize = {
      attach: function (context, settings) {
        $('.materialize-textarea').trigger('autoresize');
        $('select').material_select();
       $('.webform-component-matrix .form-type-textfield').each(function () {
         var label = $(this).find('label');
         $(this).find('input').attr('placeholder', label.html());
       });
      }
    };
  }
  else {
  }

})(jQuery);

},{}]},{},[1]);
