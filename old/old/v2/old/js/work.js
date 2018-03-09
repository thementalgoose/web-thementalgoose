$(document).ready(function() {
	$('#work_ms_box').mouseover(showMS);
	$('.work_ms').mouseover(showMS);
	$('#work_ms_box').mouseout(hideMS);
	$('.work_ms').mouseout(hideMS);

	$('#work_cf_box').mouseover(showCF);
	$('.work_freight').mouseover(showCF);
	$('#work_cf_box').mouseout(hideCF);
	$('.work_freight').mouseout(hideCF);

	$('#work_hv_box').mouseover(showHV);
	$('.work_harveys').mouseover(showHV);
	$('#work_hv_box').mouseout(hideHV);
	$('.work_harveys').mouseout(hideHV);

	function showMS() {
		$('#work_ms_box').css('background-color', '#DDDDEE');
		$('.work_ms').css('background-color', '#9999BB');
	};
	function hideMS() {
		$('#work_ms_box').css('background-color', '#F8F8F8');
		$('.work_ms').css('background-color', '#666688');
	};
	function showCF() {
		$('#work_cf_box').css('background-color', '#DDDDEE');
		$('.work_freight').css('background-color', '#9999BB');
	};
	function hideCF() {
		$('#work_cf_box').css('background-color', '#F8F8F8');
		$('.work_freight').css('background-color', '#666688');
	};
	function showHV() {
		$('#work_hv_box').css('background-color', '#DDDDEE');
		$('.work_harveys').css('background-color', '#9999BB');
	};
	function hideHV() {
		$('#work_hv_box').css('background-color', '#F8F8F8');
		$('.work_harveys').css('background-color', '#666688');
	};





	$('#education_gcse_info').mouseover(showGCSE);
	$('.education_gcse').mouseover(showGCSE);
	$('#education_gcse_info').mouseout(hideGCSE);
	$('.education_gcse').mouseout(hideGCSE);

	$('#education_alevel_info').mouseover(showAL);
	$('.education_alevel').mouseover(showAL);
	$('#education_alevel_info').mouseout(hideAL);
	$('.education_alevel').mouseout(hideAL);

	$('#education_degree_info').mouseover(showDG);
	$('.education_degree').mouseover(showDG);
	$('#education_degree_info').mouseout(hideDG);
	$('.education_degree').mouseout(hideDG);
	function showGCSE() {
		$('#education_gcse_info').css('background-color', '#DDDDEE');
		$('.education_gcse').css('background-color', '#9999BB');
	}
	function hideGCSE() {
		$('#education_gcse_info').css('background-color', '#F8F8F8');
		$('.education_gcse').css('background-color', '#666688');
	}
	function showAL() {
		$('#education_alevel_info').css('background-color', '#DDDDEE');
		$('.education_alevel').css('background-color', '#9999BB');
	}
	function hideAL() {
		$('#education_alevel_info').css('background-color', '#F8F8F8');
		$('.education_alevel').css('background-color', '#666688');
	}
	function showDG() {
		$('#education_degree_info').css('background-color', '#DDDDEE');
		$('.education_degree').css('background-color', '#9999BB');
	}
	function hideDG() {
		$('#education_degree_info').css('background-color', '#F8F8F8');
		$('.education_degree').css('background-color', '#666688');
	}

});