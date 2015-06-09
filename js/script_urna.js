$("section").hide();
$("section#aguarde").show();
//$("section#regiao").show();
//$("section#candidato").show();
//$("section#finalizacao").show();

/* MODAL */
var show_modal = function(){
    var candidatoAtual = $(this).attr("id");
    
    var img = $(this).find("img").attr("src");
    var h3  = $(this).find("h3").text();

    $(".candidato-content").find("img").attr("src",img);
    $(".candidato-content").find("h2").text(h3);
    
    var img_anular = $(this).find("img").attr("class");
    if(img_anular == "anular"){$(".candidato-content").find("img").attr("class","anular");}
    else{$(".candidato-content").find("img").attr("class","");}
};                                                  

/* POPUP */
var show_popup = function(){

var window_widht= $(window).width();
var width = window_widht + 50;

var window_height = $(window).height();
var height = window_height + 50;

window.open("http://codigofonte.net","Pagina","STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=0, LEFT=0, WIDTH="+width+", HEIGHT="+height+"	 ");

};                                                  

$(".candidato").on("click",show_modal);
$("#popup").on("click",show_popup);
$( "#popup" ).trigger( "click" );