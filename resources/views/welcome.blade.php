<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>API de Gerenciamento de Tarefas</title>
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                margin: 0;
                padding: 0;
                background: #0f172a;
                color: #e2e8f0;
            }
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 2rem;
            }
            .header {
                text-align: center;
                margin-bottom: 3rem;
            }
            .header h1 {
                font-size: 2.5rem;
                margin-bottom: 1rem;
                color: #f1f5f9;
            }
            .header p {
                color: #94a3b8;
                font-size: 1.2rem;
            }
            .content {
                background: #1e293b;
                border-radius: 8px;
                padding: 2rem;
                box-shadow: 0 4px 6px -1px rgba(0,0,0,0.3);
            }
            .section {
                margin-bottom: 2rem;
            }
            .section h2 {
                color: #f1f5f9;
                margin-bottom: 1rem;
            }
            .endpoint {
                background: #0f172a;
                border-radius: 4px;
                padding: 1rem;
                margin-bottom: 1rem;
                border: 1px solid #334155;
            }
            .endpoint-method {
                display: inline-block;
                padding: 0.25rem 0.5rem;
                border-radius: 4px;
                font-weight: bold;
                margin-right: 0.5rem;
            }
            .get {
                background: #1e3a8a;
                color: #93c5fd;
            }
            .post {
                background: #065f46;
                color: #6ee7b7;
            }
            .put {
                background: #831843;
                color: #fda4af;
            }
            .delete {
                background: #7f1d1d;
                color: #fca5a5;
            }
            code {
                background: #334155;
                padding: 0.2rem 0.4rem;
                border-radius: 4px;
                font-family: monospace;
                color: #e2e8f0;
            }
            .auth-note {
                background: #422006;
                border-left: 4px solid #ea580c;
                padding: 1rem;
                margin: 1rem 0;
                color: #fdba74;
            }
            .endpoint p {
                color: #94a3b8;
                margin-top: 0.5rem;
                margin-bottom: 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>API de Gerenciamento de Tarefas</h1>
                <p>API RESTful para gerenciamento de tarefas</p>
            </div>

            <div class="content">
                <div class="section">
                    <h2>Autenticação</h2>
                    <div class="auth-note">
                        <p>Esta API utiliza autenticação via Bearer Token. Inclua o token no header de suas requisições:</p>
                        <code>Authorization: Bearer {seu_token}</code>
                    </div>
                </div>

                <div class="section">
                    <h2>Endpoints Disponíveis</h2>

                    <div class="endpoint">
                        <span class="endpoint-method get">GET</span>
                        <code>/api/tasks</code>
                        <p>Lista todas as tarefas</p>
                    </div>

                    <div class="endpoint">
                        <span class="endpoint-method post">POST</span>
                        <code>/api/tasks</code>
                        <p>Cria uma nova tarefa</p>
                    </div>

                    <div class="endpoint">
                        <span class="endpoint-method get">GET</span>
                        <code>/api/tasks/{id}</code>
                        <p>Retorna os detalhes de uma tarefa específica</p>
                    </div>

                    <div class="endpoint">
                        <span class="endpoint-method put">PUT</span>
                        <code>/api/tasks/{id}</code>
                        <p>Atualiza uma tarefa existente</p>
                    </div>

                    <div class="endpoint">
                        <span class="endpoint-method delete">DELETE</span>
                        <code>/api/tasks/{id}</code>
                        <p>Remove uma tarefa</p>
                    </div>

                    <div class="endpoint">
                        <span class="endpoint-method get">GET</span>
                        <code>/api/tasks/next</code>
                        <p>Lista as próximas tarefas</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
