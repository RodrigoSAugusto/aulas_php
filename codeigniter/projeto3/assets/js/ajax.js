/*
  * Função para criar um objeto XMLHTTPRequest
  */
function CriaRequest() {
  try {
    request = new XMLHttpRequest();
  } catch (IEAtual) {

    try {
      request = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (IEAntigo) {

      try {
        request = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (falha) {
        request = false;
      }
    }
  }

  if (!request)
    alert("Seu Navegador não suporta Ajax!");
  else
    return request;
}


// Função para inserir novo gasto.
function inseregasto(paramGasto) {
  //declaração de variaveis
  alert(paramGasto);
  var gasto = paramGasto
  var xmlinsere = CriaRequest();

  //Inicia uma requisição
  xmlreq.open("POST", "contato.php?txtgasto=" + gasto, true);

  xmlinsere.send(null)

}
