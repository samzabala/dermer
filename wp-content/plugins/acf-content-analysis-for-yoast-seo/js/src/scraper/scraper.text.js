/* global _ */

var config = require( "./../config/config.js" );

var Scraper = function() {};

Scraper.prototype.scrape = function( fields ) {
	var that = this;

	fields = _.map( fields, function( field ) {
		if ( field.type !== "text" ) {
			return field;
		}

		field.content = field.$el.find( "input[type=text][id^=acf]" ).val();
		field = that.wrapInHeadline( field );

		return field;
	} );

	return fields;
};

Scraper.prototype.wrapInHeadline = function( field ) {
	var level = this.isHeadline( field );
	if ( level ) {
		field.content = "<h" + level + ">" + field.content + "</h" + level + ">";
	}

	return field;
};

Scraper.prototype.isHeadline = function( field ) {
	var level = _.find( config.scraper.text.headlines, function( value, key ) {
		return field.key === key;
	} );

	// It has to be an integer
	if ( level ) {
		level = parseInt( level, 10 );
	}

	// Headlines only exist from h1 to h6
	if ( level < 1 || level > 6 ) {
		level = false;
	}

	return level;
};

module.exports = Scraper;
