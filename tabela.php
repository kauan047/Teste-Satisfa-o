<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perguntas sobre Atendimento</title>
</head>
<body>
  <h1>Perguntas sobre Atendimento</h1>

  Insira as seguintes opções:<br>
  Ruim = 20 pontos<br>
  Bom = 60 pontos<br>
  Regular = 40 pontos<br>
  Muito Bom = 100 pontos<br>
  
  <form action="nivel.php" method="post">
    <ol>
      <li>a) Tempo de atendimento</li>
      <input type="number" name="av_atendimento" required><br>
      
      <li>b) Educação do vendedor</li>
      <input type="number" name="av_edVendendor" required><br>
      
      <li>c) Clareza das informações prestadas</li>
      <input type="number" name="av_infoPrestadas" required><br>
      
      <li>d) Instruções claras e corretas sobre a entrega</li>
      <input type="number" name="av_entregas" required><br>
      
      <li>e) Instruções claras e corretas sobre a montagem</li>
      <input type="number" name="av_montagem" required><br>
      
      <li>f) Atendimento do entregador</li>
      <input type="number" name="av_entregador" required><br>
      
      <li>g) Conformidade da entrega</li>
      <input type="number" name="av_entrega" required><br>
    </ol>
    <button type="submit">Enviar Respostas</button>
  </form>
</body>
</html>