// accessToken do usuario
		var accessToken = '209474477.5b9e1e6.bd6ee849027b4039946e3331bca2715c';
		// Login do usuario
		var username= "allan093";
		var limit = 20; //Limite máximo de fotos
		
		var setSize = "medium";

var instagram = function() {
	return {
		init: function() {
			instagram.getUser();
		},
		getUser: function() {
			var getUserURL = 'https://api.instagram.com/v1/users/search?q='+ username +'&access_token='+ accessToken +'';
			$.ajax({
				type: "GET",
				dataType: "jsonp",
				cache: false,
				url: getUserURL,
				success: function(data) {
					var getUserID = data.data[0].id;
					instagram.loadImages(getUserID);
				}	
			});
		},
		loadImages: function(userID) {
			var getImagesURL = 'https://api.instagram.com/v1/users/'+ userID +'/media/recent/?access_token='+ accessToken +'';
			$.ajax({
				type: "GET",
				dataType: "jsonp",
				cache: false,
				url: getImagesURL,

				success: function(data) {
					for(var i = 0; i < limit; i+=1) {
						if(setSize == "small") {
							var size = data.data[i].images.thumbnail.url;
						} else if(setSize == "medium") {
							var size = data.data[i].images.low_resolution.url;
						} else {
							var size = data.data[i].images.standard_resolution.url;	
						}
						var grande = data.data[i].images.standard_resolution.url;
						
						$("#instagram").append("<li> <a target='_blank'  data-lightbox='roadtrip'href='" + grande +"'><img  class='imgs' src='" + size +"' /> </a> ");

					}
				}
			});
		}
	}
}();

$(document).ready(function() {
    instagram.init();
});