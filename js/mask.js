$(document).ready(function() {
    $('#cpf').mask('000.000.000-00')
    /* $('#fone').mask('(00) 00000-0000', {placeholder: '(99) 99999-9999'}) */
    var options =  {
        onKeyPress: function(fone, e, field, options) {
          var mask = ['(00) 0000-0000', '(00) 00000-0000'];
          var mask = (fone.length > 15) ? masks[1] : masks[0];
          $('#fone').mask(mask, options);
      }};
      
      $('#fone').mask('(00) 00000-0000', options);
      $('#cep').mask('00000-000')
      $('#cnpj').mask('00.000.000/0000-00')
      $('#data').mask('00/00/0000')

    
})