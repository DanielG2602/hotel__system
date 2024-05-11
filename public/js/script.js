document.getElementById('openPaymentForm').addEventListener('click', function() {
    document.getElementById('paymentForm').style.display = 'block';
});

document.getElementById('closePaymentForm').addEventListener('click', function() {
    document.getElementById('paymentForm').style.display = 'none';
});
document.querySelectorAll('.favorite-btn').forEach(button => {
    button.addEventListener('click', () => {
      button.classList.toggle('favorited'); // Adiciona ou remove a classe 'favorited' quando o botão é clicado
    });
  });
  