<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #9999ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Agendamento de prescritores</h1>
        <h4>
            Praça de atendimento da 
            <a href="http://www.prefeitura.sp.gov.br/covisa" target="_blank">COVISA</a>
            .
        </h4>
        <div class="panel-group">
            <div class="panel panel-info">
                <div class="panel-heading">Atenção:</div>
                <div class="panel-body">
                    <p>
                        As janelas de entrada não mostram nenhum cursor, assim as 
                        seleções precisam ser feitas com o mouse, ao clicar com o 
                        botão esquerdo do mouse no início, mantendo o botão do mouse 
                        pressionado e indo até ao fim, momento em que solta o botão 
                        do mouse de novo. Você poderá também selecionar uma palavra 
                        se fizer duplo-clique nela. No editor do resultado da mesclagem 
                        poderá também selecionar com o teclado se mantiver a tecla 
                        Shift pressionada enquanto navega com as teclas de cursores.
                    </p>
                    <p>
                        Se a seleção ultrapassar o intervalo visível, você poderá 
                        passar o mouse por cima das bordas da janela, o que fará 
                        com que o KDiff3 se desloque nessa direção.
                    </p>
                    <p>
                        Para as seleções muito grandes, você poderá também usar as 
                        teclas de navegação, enquanto mantém pressionado o mouse. 
                        P. ex., use o Page Up e o Page Down para ir rapidamente para 
                        uma dada posição. Na posição final, solte o botão do mouse.
                    </p>
                    <p>
                        Para selecionar tudo na janela atual, use a opção do menu 
                        "Editar"->"Selecionar Tudo" (Ctrl-A).
                    </p>
                    <p>
                        Para copiar para a área de transferência, você precisa pressionar 
                        o botão "Copiar" (Ctrl-C ou Ctrl-Insert). Porém, existe uma 
                        opção para "Copiar Automaticamente a Seleção". Se esta estiver 
                        ativa, então tudo o que selecionar será copiado imediatamente, 
                        sem que você tenha de copiar explicitamente. Todavia, preste 
                        atenção ao usar isto, uma vez que o conteúdo da área de transferência 
                        poderá ser destruído por acidente.
                    </p>
                    <p>
                        O "Cortar" (Ctrl-X ou Shift-Delete) copia para a área de 
                        transferência e apaga o texto selecionado.
                    </p>
                    <p>
                        O "Colar" (Ctrl-V ou Shift-Insert) insere o texto da área 
                        de transferência na posição do cursor ou na seleção atual. 
                        Se colar numa das janelas de entrada de diferenças, o conteúdo 
                        da área de transferência será mostrado nessa janela e a 
                        comparação irá reiniciar imediatamente. Isto é útil se quiser 
                        pegar rapidamente num pedaço de texto de qualquer local e 
                        compará-lo com outra coisa, sem ter que criar arquivos primeiro.
                    </p>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-danger" style="display: none;" href="https://pt.wikipedia.org/wiki/Barbie">NÃO Aceito</a>
                    <a class="btn btn-primary" href="agendamento.php">Continuar</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

