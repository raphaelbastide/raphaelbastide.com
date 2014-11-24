JS_FILES = $(addprefix public/js/, abconnect.js main.js)
js:
	cat ${JS_FILES} > public/js/bundle.js
