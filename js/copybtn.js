//var copyEmailBtn = document.querySelector('.js-emailcopybtn');  
var copyEmailBtn = document.getElementById('js-emailcopybtn');  
copyEmailBtn.addEventListener('click', function(event) {  
  // Выборка ссылки с электронной почтой 
  var emailLink = document.querySelector('.js-emaillink');  
  var range = document.createRange();  
  range.selectNode(emailLink);  
  window.getSelection().addRange(range);  
  
  var btn = document.getElementById('btn');
  var btn_back = document.getElementById('btn_back');
  btn.innerHTML = '';
  btn_back.setAttribute('style','width: 200px;');
    
  try {  
    // Теперь, когда мы выбрали текст ссылки, выполним команду копирования
    var successful = document.execCommand('copy');  
    var msg = successful ? 'successful' : 'unsuccessful';  
    console.log('Copy email command was ' + msg);  
  } catch(err) {  
    console.log('Oops, unable to copy');  
  }  
    
  // Снятие выделения - ВНИМАНИЕ: вы должны использовать
  // removeRange(range) когда это возможно
  window.getSelection().removeAllRanges();  
});