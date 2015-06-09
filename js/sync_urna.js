var status;
function atual(tela){
	var sta = $.ajax({
		type: "GET",
		//url: "/Eleicao/sync/urna/"+$('#terminal').html()+"/"+tela,
		url: "/Eleicao/sync/urna",
		dataType: "json",
		data: {terminal:$.cookie('iap_terminal'),status:tela},
		method: "POST",
		success: function(data,d){
			var a = eval(data);
			$('#status').html(a.status);
			if(a.status !== 0){
				carrega(a.status);
			}
		}
	});	
}
function carrega(tela){
	switch(tela){
		case '0':
			$("section").hide();
			$("section#aguarde").show();
			break;
		case '1':
			$("section").hide();
			$("section#regiao").show();
			break;
		case '2':
			$("section").hide();
			$("section#candidato").show();
			break;
		case '3':
			$("section").hide();
			$("section#finalizacao").show();
			atual('0');
			break;
	}
}
function status_terminal(){
	var sta = $.ajax({
		type: "GET",
		url: "/Eleicao/sync/urna",
		dataType: "json",
		data: {terminal:$.cookie('iap_terminal')},
		method: "POST",
		success: function(data,d){
			var a = eval(data);
			$('#info #status').html(a.status);
			$('#info #terminal').html(a.terminal);
			if(a.status != 0){
				//clearInterval(status);
			}
			carrega(a.status);
		}
	});
};
$(function(){
	status = window.setInterval(status_terminal,3000);
});