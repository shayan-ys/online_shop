$(document).ready(function(){
  $(".searchPro").removeClass("disabled");

  $(".order-num").on("click", ".down", function(){
    var num = parseInt($("#number").val());
    if(num>1) $("#number").val( parseInt(num-1) );
    return false;
  });
  $(".order-num").on("click", ".up", function(){
    var num = parseInt($("#number").val());
    $("#number").val( parseInt(num+1) );
    return false;
  });
});
