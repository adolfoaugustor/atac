<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .email-header {
            background-color: #0e1e4c;
            color: rgb(191, 134, 47);
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .email-body {
            background-color: white;
            padding: 30px;
            border-radius: 0 0 5px 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .field-group {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .field-label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }
        .field-value {
            color: #333;
        }
        .message-content {
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Site Atac Assessoria Contábil</h1>
        </div>
        <div class="email-body">
            <div class="field-group">
                <span class="field-label">Nome: {{ $nome }}</span>
            </div>
            <div class="field-group">
                <span class="field-label">Celular: {{ $celular }}</span>
            </div>
            <div class="field-group">
                <span class="field-label">Email: {{ $email }}</span>
            </div>

            <div class="field-group">
                <span class="field-label">Assunto: {{ $assunto ?? 'Não informado' }}</span>
            </div>

            <div class="field-group">
                <span class="field-label">Mensagem:</span>
                <div class="message-content">{{ $mensagem }}</div>
            </div>
        </div>
    </div>
</body>
</html>
