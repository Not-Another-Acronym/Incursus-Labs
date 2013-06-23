/* JavaScript for Special:Block */

jQuery( function( $ ) {

	var	DO_INSTANT = true,
		$blockTarget = $( '#mw-bi-target' ),
		$anonOnlyRow = $( '#mw-input-wpHardBlock' ).closest( 'tr' ),
		$enableAutoblockRow = $( '#mw-input-wpAutoBlock' ).closest( 'tr' ),
		$hidewiki_User = $( '#mw-input-wpHidewiki_User' ).closest( 'tr' ),
		$watchwiki_User = $( '#mw-input-wpWatch' ).closest( 'tr' );

	var updateBlockOptions = function( instant ) {
		if ( !$blockTarget.length ) {
			return;
		}

		var blocktarget = $.trim( $blockTarget.val() );
		var isEmpty = ( blocktarget === '' );
		var isIp = mw.util.isIPv4Address( blocktarget, true ) || mw.util.isIPv6Address( blocktarget, true );
		var isIpRange = isIp && blocktarget.match( /\/\d+$/ );

		if ( isIp && !isEmpty ) {
			$enableAutoblockRow.goOut( instant );
			$hidewiki_User.goOut( instant );
		} else {
			$enableAutoblockRow.goIn( instant );
			$hidewiki_User.goIn( instant );
		}
		if ( !isIp && !isEmpty ) {
			$anonOnlyRow.goOut( instant );
		} else {
			$anonOnlyRow.goIn( instant );
		}
		if ( isIpRange && !isEmpty ) {
			$watchwiki_User.goOut( instant );
		} else {
			$watchwiki_User.goIn( instant );
		}
	};

	// Bind functions so they're checked whenever stuff changes
	$blockTarget.keyup( updateBlockOptions );

	// Call them now to set initial state (ie. Special:Block/Foobar?wpBlockExpiry=2+hours)
	updateBlockOptions( DO_INSTANT );
});
