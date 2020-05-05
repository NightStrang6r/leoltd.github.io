var functOn = false;		//true, false

function ShowText(mode){
	if(functOn == true){
		text_pole = document.getElementById('text');
		switch(mode){
			case 'vk': 
			text_pole.innerHTML = 'vk.com/lenyatsaruk';
			break;
			case 'instagram': 
			text_pole.innerHTML = 'instagram.com/nightstranger.leo';
			break;
			case 'steam': 
			text_pole.innerHTML = 'steamcommunity.com/id/nightstranger_leo';
			break;
			case 'mail': 
			text_pole.innerHTML = 'tsaruk-2015@mail.ru';
			break;
			case 'skype': 
			text_pole.innerHTML = 'dggjdraw2345';
			break;
			case 'discord': 
			text_pole.innerHTML = 'discord.gg/tJnHMWd';
			break;
			case 'none': 
			text_pole.innerHTML = '';
			break;
		}
	}
};
