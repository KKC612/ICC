jQuery(document).ready(function($){

  $('.carousel').carousel('cycle');

});

function calculateTotal(myForm) {

  var itematotal = $(myForm).find("input:checkbox:checked.itema").length;
  $('span#itemaformtotal').text(itematotal);

  var itembtotal = $(myForm).find("input:checkbox:checked.itemb").length;
  $('#itembformtotal').text(itembtotal);

  var itemctotal = $(myForm).find("input:checkbox:checked.itemc").length;
  $('#itemcformtotal').text(itemctotal);

  var itemdtotal = $(myForm).find("input:checkbox:checked.itemd").length;
  $('#itemdformtotal').text(itemdtotal);

}
