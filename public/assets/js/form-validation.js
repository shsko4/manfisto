$(function() {
	'use strict'
	$(document).ready(function() {
		$('.select2').select2({
			placeholder: 'إختر'
		});
		$('.select2-no-search').select2({
			minimumResultsForSearch: Infinity,
			placeholder: 'إختر'
		});
	});
	$('#selectForm').parsley();
	$('#selectForm2').parsley();
});
