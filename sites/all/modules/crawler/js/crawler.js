(function ($) {
  Drupal.behaviors.crawler = {
    attach: function (context, settings) {
	  var species = Drupal.settings.crawler.title;
	  species = species.replace(' ','-');
	  $.ajax({
		  dataType: "jsonp",
		  url: 'http://api.iucnredlist.org/index/species/'+species+".js",
		  success: function (row) {
			if (row == '') {
			  document.getElementById("summary").innerHTML = Drupal.settings.crawler.title + " not found.";
			  return;
			}
			var id = row[0].species_id
			$("#summary").get(0).innerHTML = row[0].category + "...";
            $.ajax({
			  dataType: "jsonp",
			  url: 'http://api.iucnredlist.org/details/'+id+"/0.js",
			  success: function (data) {
				  var blob = data[0].species_account;
				  $("#full_result").get(0).innerHTML = blob;
				  var cat = $('#red_list_category_title').get(0).innerHTML;
				  var code = $('#red_list_category_code').get(0).innerHTML;
				  var year = $('#modified_year').get(0).innerHTML;
				  var summary = ""+code+" - "+cat+" (updated "+year+")";
				  $('#full_result').hide()
				  $("#name").get(0).innerHTML = '<a href="http://www.iucnredlist.org/apps/redlist/details/'+id+'">'
				  +Drupal.settings.crawler.title+'</a>';
				  $("#summary").get(0).innerHTML = summary;
				  $("#summary_justification").get(0).innerHTML = $('#justification').get(0).innerHTML;
			  }
			});
		  },
		  failure: function () {
		    document.getElementById("summary").innerHTML = "IUCN Error!!";
		  }
		});
    }
  };
}(jQuery));