import { store, getContext } from '@wordpress/interactivity';

const { state } = store( 'abandonedstroller', {
	actions: {
		openLightbox( event ) {
			event.preventDefault();

			const context = getContext();

			state.isOpen     = true;
			state.imageUrl   = context.imageUrl;
			state.title      = context.title;
			state.permalink  = context.permalink;
			state.date       = context.date;
			state.categories = context.categories;
			state.tags       = context.tags;
		},

		closeLightbox() {
			state.isOpen = false;
		},
	},
} );
