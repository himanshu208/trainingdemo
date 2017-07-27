/*	Function for site url	*/
function getRootUrl(url) {
	return url.toString().replace(/^(.*\/\/[^\/?#]*).*$/,"$1")+"/";
}
var site_url = getRootUrl(document.location);
var site_url = "http://localhost/trainingdemo/";

/*	Check Email Syntax	*/
function IsEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}