////function for characer checking////
goods="0123456789.";

function limitchar(e)
{
	var key,keychar;
	if(window.event)
		key=window.event.keycode;
	else if (e)
		key=e.which;
	else 
		return true;
		keychar = string.fromcharcode(key);
		keychar = keychar.toLowercase();
		goods = goods.toLowerCase();
		if(goods.indexof(keychar) != -1)
		{
			goods="0123456789.";
			return true;
		}
}