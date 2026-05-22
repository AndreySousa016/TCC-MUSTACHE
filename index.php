<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="meu-container">

    <div class="header">
                <h2>A'doro - Gestão de Cargas</h2>
            </div>
            
            <div class="dashboard">
                <a href="entrada" class="card btn-entrada">
                    <h3>Registrar ENTRADA</h3>
                    <p>Caminhões chegando</p>
</a>
                <a href="saida" class="card btn-saida">
                    <h3>Registrar SAÍDA</h3>
                    <p>Cargas despachadas</p>
</a>
            </div>

            <table class="log-table">
                <thead>
                    <tr>
                        <th>Placa</th>
                        <th>Tipo</th>
                        <th>Horário</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ABC-1234</td>
                        <td>Frango Congelado</td>
                        <td>14:20</td>
                        <td><span class="status status-in">Entrada</span></td>
                    </tr>
                    <tr>
                        <td>XYZ-9876</td>
                        <td>Ração Animal</td>
                        <td>15:05</td>
                        <td><span class="status status-out">Saída</span></td>
                    </tr>
                </tbody>
            </table>

    </div>

    <script>
        const container = document.getElementById('meu-container');
        
    </script>

</body>
</html>
