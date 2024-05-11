<?php
//Verifica se tá logado, caso não esteja é redirecionado para a página de login
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
  header("Location: http://localhost/loginmenu/login");
  die;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/loginmenu/public/css/style.css">
  <link rel="stylesheet" href="http://localhost/loginmenu/public/js/script.js">
  <title>Hotel Homepage</title>
</head>

<body>
  <!--navbar-->
  <header>
    <h1 class="logo">Hotel</h1>
    <nav class="navbar">

      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Rooms</a></li>
        <li><a href="#">Facilities</a></li>
        <li><a href="#">Contact</a></li>
        <a href="http://localhost/loginmenu/sair"><button class="login-btn">Sair</button></a>
      </ul>

    </nav>
  </header>


  <section class="hero">
    <h2>Welcome to Our Hotel</h2>
    <p>Enjoy luxury and comfort at our hotel.</p>
  </section>

  <!---check-in and check-out-->

<!--- Barra de reserva com seleção de quartos, datas de check-in e check-out, e seleção de hóspedes -->
<div class="booking-bar">
  <!-- Título para seleção de tipo de quarto -->
  <label for="location" style="display: block; text-align: center;color: white;">Quartos:</label>
  <select id="location">
      <option value="standard">Quarto Standard</option>
      <option value="deluxe">Quarto Deluxe</option>
      <option value="suite">Suíte</option>
  </select>
  <!-- Inputs para datas de check-in e check-out -->
  <div class="dates" style="display: block; text-align: center;color: white;">
      <label for="checkin-date">Check-in:</label>
      <input type="date" id="checkin-date" placeholder="Data de check-in">
      <label for="checkout-date">Check-out:</label>
      <input type="date" id="checkout-date" placeholder="Data de check-out">
  </div>
  <!-- Seleção de número de hóspedes e quartos -->
  <label for="guests-rooms" style="display: block; text-align: center;color: white;">Hóspedes e Quartos:</label>
  <select id="guests-rooms">
      <option selected>2 adultos - 0 crianças - 1 quarto</option>
      <!-- Adicione mais opções conforme necessário -->
  </select>
  <!-- Botão de reserva -->
  <input type="submit" value="Reservar" style="display: block; margin: auto;">
</div>

  <!--rooms-->

  <div class="room-container">
    <div class="room-box">
      <img src="http://localhost/loginmenu/public/img/felipepelaquim-1qvUsVrKrMI-unsplash.jpg" alt="Quarto de Hotel 1">
      <div class="room-info">
        <h2>Quarto Executivo</h2>
        <p>Este quarto oferece uma cama king-size, área de estar, banheiro privativo, TV de tela plana, ar-condicionado e Wi-Fi gratuito.</p>
        <p><strong>Preço por noite:</strong> R$ 300,00</p>
        <button class="Btn" onclick="togglePaymentForm()">
          alugar
          <svg class="svgIcon" viewBox="0 0 576 512">
            <path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path>
          </svg>
        </button>

        <div id="paymentForm" class="paymentForm">
          <span class="closeBtn" onclick="togglePaymentForm()">&times;</span>
          <h2>Formulário de Pagamento</h2>
          <!-- Aqui você pode adicionar os campos do formulário de pagamento -->
          <!-- Exemplo: -->
          <label for="cardNumber">Número do Cartão:</label><br>
          <input type="text" id="cardNumber" name="cardNumber"><br>
          <label for="expiryDate">Data de Expiração:</label><br>
          <input type="text" id="expiryDate" name="expiryDate"><br>
          <label for="cvv">CVV:</label><br>
          <input type="text" id="cvv" name="cvv"><br><br>
          <button>Pagar</button>
        </div>

        <script>
          function togglePaymentForm() {
            var paymentForm = document.getElementById("paymentForm");
            paymentForm.classList.toggle("show");
          }
        </script>
      </div>
    </div>



    <div class="room-box">
      <img src="http://localhost/loginmenu/public/img/vojtech-bruzek-Yrxr3bsPdS0-unsplash.jpg" alt="Quarto de Hotel 2">
      <div class="room-info">
        <h2>Suíte Luxo</h2>
        <p>Esta suíte oferece uma cama king-size, área de estar separada, banheira de hidromassagem, TV de tela plana, ar-condicionado e Wi-Fi gratuito.</p>
        <p><strong>Preço por noite:</strong> R$ 500,00</p>
        <button class="Btn" onclick="togglePaymentForm()">
          alugar
          <svg class="svgIcon" viewBox="0 0 576 512">
            <path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path>
          </svg>
        </button>

        <div id="paymentForm" class="paymentForm">
          <span class="closeBtn" onclick="togglePaymentForm()">&times;</span>
          <h2>Formulário de Pagamento</h2>
          <!-- Aqui você pode adicionar os campos do formulário de pagamento -->
          <!-- Exemplo: -->
          <label for="cardNumber">Número do Cartão:</label><br>
          <input type="text" id="cardNumber" name="cardNumber"><br>
          <label for="expiryDate">Data de Expiração:</label><br>
          <input type="text" id="expiryDate" name="expiryDate"><br>
          <label for="cvv">CVV:</label><br>
          <input type="text" id="cvv" name="cvv"><br><br>
          <button>Pagar</button>
        </div>

        <script>
          function togglePaymentForm() {
            var paymentForm = document.getElementById("paymentForm");
            paymentForm.classList.toggle("show");
          }
        </script>
      </div>
    </div>

    <div class="room-box">
      <img src="http://localhost/loginmenu/public/img/chastity-cortijo-R-w5Q-4Mqm0-unsplash.jpg" alt="Quarto de Hotel 3">
      <div class="room-info">
        <h2>Quarto Standard</h2>
        <p>Esta suíte oferece uma cama king-size, área de estar separada, banheira de hidromassagem, TV de tela plana, ar-condicionado e Wi-Fi gratuito.</p>
        <p><strong>Preço por noite:</strong> R$ 500,00</p>
        <button class="Btn" onclick="togglePaymentForm()">
          alugar
          <svg class="svgIcon" viewBox="0 0 576 512">
            <path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path>
          </svg>
        </button>
        

        <div id="paymentForm" class="paymentForm">
          <span class="closeBtn" onclick="togglePaymentForm()">&times;</span>
          <h2>Formulário de Pagamento</h2>
          <!-- Aqui você pode adicionar os campos do formulário de pagamento -->
          <!-- Exemplo: -->
          <label for="cardNumber">Número do Cartão:</label><br>
          <input type="text" id="cardNumber" name="cardNumber"><br>
          <label for="expiryDate">Data de Expiração:</label><br>
          <input type="text" id="expiryDate" name="expiryDate"><br>
          <label for="cvv">CVV:</label><br>
          <input type="text" id="cvv" name="cvv"><br><br>
          <button>Pagar</button>
        </div>

        <script>
          function togglePaymentForm() {
            var paymentForm = document.getElementById("paymentForm");
            paymentForm.classList.toggle("show");
          }
        </script>
      </div>
    </div>

    <div class="room-box">
      <img src="http://localhost/loginmenu/public/img/kenny-eliason-ZqqwJA71Ke4-unsplash.jpg" alt="Quarto de Hotel 4">
      <div class="room-info">
        <h2>Quarto Executivo</h2>
        <p>Este quarto oferece uma cama king-size, área de estar, banheiro privativo, TV de tela plana, ar-condicionado e Wi-Fi gratuito.</p>
        <p><strong>Preço por noite:</strong> R$ 300,00</p>
        <button class="Btn" onclick="togglePaymentForm()">
          alugar
          <svg class="svgIcon" viewBox="0 0 576 512">
            <path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path>
          </svg>
        </button>

        <div id="paymentForm" class="paymentForm">
          <span class="closeBtn" onclick="togglePaymentForm()">&times;</span>
          <h2>Formulário de Pagamento</h2>
          <!-- Aqui você pode adicionar os campos do formulário de pagamento -->
          <!-- Exemplo: -->
          <label for="cardNumber">Número do Cartão:</label><br>
          <input type="text" id="cardNumber" name="cardNumber"><br>
          <label for="expiryDate">Data de Expiração:</label><br>
          <input type="text" id="expiryDate" name="expiryDate"><br>
          <label for="cvv">CVV:</label><br>
          <input type="text" id="cvv" name="cvv"><br><br>
          <button>Pagar</button>
        </div>

        <script>
          function togglePaymentForm() {
            var paymentForm = document.getElementById("paymentForm");
            paymentForm.classList.toggle("show");
          }
        </script>
    </div>


    <!-- Adicione mais quartos aqui conforme necessário -->

  </div>
</body>

</html>