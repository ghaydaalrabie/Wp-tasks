( function( api ) {

	// Extends our custom "dark-photography" section.
	api.sectionConstructor['dark-photography'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );