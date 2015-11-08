function putComma(price) {
    return price.toString().replace(/\B(?=(?:\d{3})+(?!\d))/g, ",");
};
persian = {0: '۰', 1: '۱', 2: '۲', 3: '۳', 4: '۴', 5: '۵', 6: '۶', 7: '۷', 8: '۸', 9: '۹', ',': ','}
function num2fa(text) {
    arr = text.toString().replace(/\B(?=(?:\d{3})+(?!\d))/g, ",").split("");
    out = '';
    for (x in arr) {
        out += persian[arr[x]];
    }
    return  out;
};
function numfa2en(text) {
  out = '';
  for(x in text) {
    out += persian.indexOf(x);
  }
  return out;
}
