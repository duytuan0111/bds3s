$(".btn_list_option").click(function(){
  $(".list_option").slideToggle(300);
})
$(".lable_radio").click(function(){
  var radio = $(this).find("input").is(":checked");
  if(radio == true)
  {
    $(".sub_option").slideToggle(300);
  }
})
