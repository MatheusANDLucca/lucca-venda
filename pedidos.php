<style>
        .card {

            width:100%;
            margin: 20px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        h2 {
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Estilos para o formulário dentro do modal */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input, select {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }
        label[for="endereco"]:required::before,
        label[for="numero"]:required::before,
        label[for="bairro"]:required::before,
        label[for="observacao"]:required::before {
            content: '* ';
            color: red;}
</style>

<div class="container">
    
    <h2>Faça seu pedido:</h2>
    <br><br>
    <div class="maincontainer">

    <div class="container">
            <div class="card">
                <img src="./assets/burger.png" alt="Comida 1">
                <h2>Hamburguer</h2>
                <p>Ingredientes: Pão, Hanburguer, Bacon, Alface, Tomate</p>
                <p>Valor: R$20,00</p>
                <button class="comprar-button">Comprar</button>
            </div>
                
            <div class="card">
        <img src="./assets/doce.png" alt="Doce">
        <h2>Doce</h2>
        <p>Ingredientes: Açúcar, Chocolate, Farinha, Ovos, Leite</p>
        <p>Valor: R$15,00</p>
        <button class="comprar-button">Comprar</button>
    </div>

    <!-- Card Espaguete -->
    <div class="card">
        <img src="./assets/espaguete.png" alt="Espaguete">
        <h2>Espaguete</h2>
        <p>Ingredientes: Massa, Molho de Tomate, Carne Moída, Queijo Parmesão</p>
        <p>Valor: R$18,00</p>
        <button class="comprar-button">Comprar</button>
    </div>

    <!-- Card Lasanha -->
    <div class="card">
        <img src="./assets/lasanha.png" alt="Lasanha">
        <h2>Lasanha</h2>
        <p>Ingredientes: Massa, Molho Béchamel, Molho de Tomate, Carne Moída, Queijo</p>
        <p>Valor: R$25,00</p>
        <button class="comprar-button">Comprar</button>
    </div>

    <!-- Card Pizza -->
    <div class="card">
        <img src="./assets/pizza.png" alt="Pizza">
        <h2>Pizza</h2>
        <p>Ingredientes: Massa, Molho de Tomate, Queijo, Pepperoni, Azeitonas</p>
        <p>Valor: R$22,00</p>
        <button class="comprar-button">Comprar</button>
    </div>

    <!-- Card Asinhas -->
    <div class="card">
        <img src="./assets/asinhas.png" alt="Asinhas">
        <h2>Asinhas</h2>
        <p>Ingredientes: Frango, Molho de Asinhas, Temperos Especiais</p>
        <p>Valor: R$20,00</p>
        <button class="comprar-button">Comprar</button>
    </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Informações de Compra</h2>
            <form>
                <label for="endereco">Endereço de Entrega:</label>
                <input type="text" id="endereco" name="endereco" required>

                <label for="numero">Número:</label>
                <input type="text" id="numero" name="numero" required>

                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" name="bairro" required>

                <label for="observacao">Observação:</label>
                <textarea id="observacao" name="observacao" rows="3"></textarea>

                <label for="formaPagamento">Forma de Pagamento:</label>
                <select id="formaPagamento" name="formaPagamento" required>
                    <option value="cartao">Cartão de Crédito</option>
                    <option value="boleto">PIX</option>
                    <!-- Adicione mais opções conforme necessário -->

                </select>

                <button type="button" onclick="realizarCompra()">Finalizar Compra</button>
            </form>
        </div>
    </div>

    <script>
        // Função para abrir o modal
        function openModal() {
            document.getElementById('myModal').style.display = 'flex';
        }

        // Função para fechar o modal
        function closeModal() {
            document.getElementById('myModal').style.display = 'none';
        }

        // Função chamada ao clicar no botão de compra
        function realizarCompra() {
            // Aqui você pode adicionar lógica para processar a compra
            // e redirecionar para a página de confirmação, se necessário
            alert('Compra realizada com sucesso!');
            closeModal();
        }

        // Adiciona um evento de clique para cada botão "Comprar"
        var buttons = document.querySelectorAll('.comprar-button');

        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                openModal();
            });
        });
    </script>
</body>
</html>



