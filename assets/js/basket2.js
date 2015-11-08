function addToBasket(opt) {
  if($('#content ul.list-cart li[pid="'+opt.id+'"]').length) {
    var prev_count = $('#content ul.list-cart li[pid="'+opt.id+'"] .count span').text();
    $('#content ul.list-cart li[pid="'+opt.id+'"] .count span').html((parseInt(prev_count) + parseInt(opt.num)));
    updateSum();
    return;
  }

  html = '';
  html += '<li pid="'+ opt.id +'">';
  html += '<div class="wall">';
  if (opt.img_url) {
      html += '<a href="' + site_url + '/pages/products/' + opt.id + '.php" class = "pro-img fr"><img src="'+ opt.img_url +'" alt="'+ name +'" width="80" height="80" /></a>';
  } else {
      html += '<a href="' + site_url + '/pages/products/' + opt.id + '.php" class = "pro-img fr"><img src="'+ site_url +'assets/img/no_image.jpg" alt="" width="80" height="80" /></a>';
  }
  html += '</div>';
  html += '<div class="info">';
  html += '<a class="de" onclick="removeFromBasket(this)">&times;</a>';
  html += '<a class="name" href="' + site_url + '/pages/products/' + opt.id + '.php">' + opt.name + '</a>';
  html += '<div class="count">تعداد :<span>' + opt.num + '</span></div>';
  html += '<div class="price" amount="'+ opt.price +'"><span>' + num2fa(opt.price) + '&nbsp;</span>تومان</div>';
  html += '</div>';
  html += '</li>';

  $('#content ul.list-cart').append(html);
  var num = $("#popModal_ex1 .shop_num").html();
  if(num > 0) num++;
  else num = 1;
  $("#popModal_ex1 .shop_num").html(num);
  updateSum();
};

function removeFromBasket(target) {
  target = $(target);
  target.closest("li").remove();
  $("#popModal_ex1 .shop_num").html(parseInt($("#popModal_ex1 .shop_num").html()) - 1);
  updateSum();
}

function updateSum() {
  var sum = 0;
  $("#content ul.list-cart li").each(function(index){
    price = $(this).find(".price").attr("amount");
    num = $(this).find(".count span").text();
    sum += parseInt(parseInt(price) * parseInt(num));
  });
  $("#content .bottom .fine span.amount").html( num2fa(sum) );
}
