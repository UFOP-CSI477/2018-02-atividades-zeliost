function validarCampo(campo, alerta, label) {

  console.log("validarCampo: " + campo + " " + alerta + " " + label);

  // Validar campo
  var valor = parseInt($(campo).val());

  // Valor 1 -- inválido
  if ( isNaN(valor) ) {
    // Exibe o alerta
    $(alerta).slideDown();
    // Adiciona CSS de erro - input
    $(campo).addClass("is-invalid");
    // No label
    $(label).addClass("text-danger");
    // Limpar o campo
    $(campo).val("");
    // Definir o foco para o input
    $(campo).focus();
    // Abandonar a execução
    return false;
  }

  // Valor - correto

  // Oculta o alerta
  $(alerta).hide();
  // Remover as classes de erro
  $(campo).removeClass("is-invalid");
  $(label).removeClass("text-danger");
  // Adicionar classe de validade
  $(campo).addClass("is-valid");
  return true;

}
$(document).ready(function(){

  $("button[name='calculo']").click(function(){

    if ( validarCampo("input[name='valor1']", "#alertaV1", "#labelV1") &&
    validarCampo("input[name='valor2']", "#alertaV2", "#labelV2")) {

      var n1 = parseInt( $("input[name='valor1']").val() );
      var n2 = parseInt( $("input[name='valor2']").val() );

      var imc = (n2/(n1*n1))*10000;
      if(imc < 18.5){
        classificacao = "Subnutrição"
      }
      else if(imc < 24.9999){
        classificacao = "Peso Saudável";
      }
      else if(imc <29.9999){
        classificacao = "Sobrepeso";
      }
      else if(imc <34.9999){
        classificacao = "Obesidade grau 1";
      }
      else if(imc <39.9999){
        classificacao = "Obesidade grau 2";
      }
      else{
        classificacao = "Obesidade grau 3";
      }


      var min = (18.5*(n1*n1))/10000;
      var max = (24.9*(n1*n1))/10000;

      // Apresentar o resultado
      $("input[name='resultado']").val(imc.toFixed(2) +" - "+ classificacao);
      document.dados.ideal.value = min.toFixed(2)+" Kg a "+ max.toFixed(2) + " Kg";


    } else {
      $("input[name='resultado']").val("");
    }

  });

  $("input[name='valor1']").focusout(function(){
    validarCampo("input[name='valor1']", "#alertaV1", "#labelV1");
  });

  $("input[name='valor2']").focusout(function(){
    validarCampo("input[name='valor2']", "#alertaV2", "#labelV2");
  });

});
