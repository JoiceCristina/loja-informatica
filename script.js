document.addEventListener("DOMContentLoaded", function () {
    var pagamento = document.getElementById("pagamento");
    var parcelas = document.getElementById("parcelas");

    function verificarPagamento() {
        if (pagamento.value == "pix") {
            parcelas.disabled = true;
            parcelas.value = "1";
        } else {
            parcelas.disabled = false;
        }
    }

    pagamento.addEventListener("change", verificarPagamento);
    verificarPagamento();
});