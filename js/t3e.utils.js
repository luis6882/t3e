/*!
 *	Name	: t3e Utils
 *	Version	: v0.1
 *	Date	: 28/09/2013
 *	Created : Francisco Arenas
 *
 */


/* Funcion me responde con el console LOG en la posicion que yo qwzere */
if (typeof console != "undefined")
    if (typeof console.log != 'undefined')
        console.olog = console.log;
    else
        console.olog = function () { };

console.log = function (message) {
    console.olog(message);
    $('#consoleLog').append('<p style="color:red">' + message + '</p>');
};
console.error = console.debug = console.info = console.log


/* funcion carga conteido desde el html deseado */
function LoadHtml(linkHtml,content){
	$.get(linkHtml, function(data) {
		$(content).html(data);
	});	
};


/* Validation */
$.fn.validation = function (method) {
    $(this).validationEngine({
        promptPosition: "centerRight"

    });
};

/* */
