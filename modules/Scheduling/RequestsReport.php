<?php
/**
 * Merge Requests Report & Unfilled Requests
 *
 * @package RosarioSIS
 * @subpackage Scheduling
 */

DrawHeader( ProgramTitle() );

$_REQUEST['report'] = issetVal( $_REQUEST['report'], '' );

$report_link = PreparePHP_SELF(
	array(),
	array( 'report', 'search_modfunc', 'next_modname', 'include_seats', 'expanded_view', 'address_group' )
) . '&report=';

$report_select = SelectInput(
	$_REQUEST['report'],
	'report',
	'',
	array(
		'' => _( 'Requests Report' ),
		'unfilled' => _( 'Unfilled Requests' ),
	),
	false,
	'onchange="ajaxLink(\'' . $report_link . '\' + this.value);" autocomplete="off"',
	false
);

DrawHeader( $report_select );

if ( $_REQUEST['report'] === 'unfilled' )
{
	require_once 'modules/Scheduling/includes/UnfilledRequests.php';
}
else
{
	require_once 'modules/Scheduling/includes/RequestsReport.php';
}
