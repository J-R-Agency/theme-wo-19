/**
 * File custom-javascript.js.
 *
 */
( function() {
	$('dropdown-toggle').click(false);

    $('.dropdown-menu.show .menu-item-has-children.dropdown').on('click', function(e) {
        e.preventDefault();
        console.log(e, e.target);
    })
})();
