document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', () => {
            const produtoId = button.getAttribute('data-produto-id');

            // Requisição AJAX
            fetch('adicionar_carrinho.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `produto_id=${encodeURIComponent(produtoId)}&quantidade=1`,
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Produto adicionado ao carrinho!');
                    } else {
                        alert('Falha ao adicionar ao carrinho.');
                    }
                })
                .catch(error => {
                    console.error('Erro:', error);
                    alert('Erro ao adicionar ao carrinho.');
                });
        });
    });
});
