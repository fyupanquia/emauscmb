
var app = null;

$(document).ready(function(){

	app = {
		lockScreen:function(){
			$("#blockoptions").css({display:'inline'});
		},
		unLockScreen:function(){
			$("#blockoptions").css({display:'none'});
		}
	}

	$("#msg-submit").click(function(){
		app.lockScreen()
		$.post( '/services' , $('form[name=emaus_contact]').serialize() ).done(function(data){
			app.unLockScreen()
			data = JSON.parse(data);
			if(data.success){
				$('form[name=emaus_contact]').each (function(){
					this.reset();
				});
			}
			alert( data.message );
		}).fail(function(jqXHR, exception) {
		    
		});
	})
})