
$(document).ready(function(){

	//On register pages, select of info block
	$('.option-block').each(function(){

		$(this).click(function(e){

			e.preventDefault();

			if($(this).find('input[type="radio"]').size()){

				$(this).siblings().removeClass('selected').find('input').removeAttr('checked');

				if(!$(this).hasClass('selected')){
					$(this).addClass('selected').find('input').attr('checked','checked');
				}

			}else{

				if($(this).hasClass('selected')){
					$(this).removeClass('selected').find('input').removeAttr('checked');
				}else{
					$(this).addClass('selected').find('input').attr('checked','checked');
				}
			}

		});
		
	});

	


})