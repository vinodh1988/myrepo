var code=$('#prod').html();
alert(code);
var str={msg:'Raghavaaa'};

var final=Handlebars.compile (code);  

alert(final(str));

$('#dest').html(final(str));