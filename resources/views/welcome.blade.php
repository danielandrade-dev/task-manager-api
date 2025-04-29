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
                background: #f8fafc;
                color: #1a202c;
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
            }
            .header p {
                color: #4a5568;
                font-size: 1.2rem;
            }
            .content {
                background: white;
                border-radius: 8px;
                padding: 2rem;
                box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
            }
            .section {
                margin-bottom: 2rem;
            }
            .section h2 {
                color: #2d3748;
                margin-bottom: 1rem;
            }
            .endpoint {
                background: #f7fafc;
                border-radius: 4px;
                padding: 1rem;
                margin-bottom: 1rem;
            }
            .endpoint-method {
                display: inline-block;
                padding: 0.25rem 0.5rem;
                border-radius: 4px;
                font-weight: bold;
                margin-right: 0.5rem;
            }
            .get { background: #ebf8ff; color: #2b6cb0; }
            .post { background: #f0fff4; color: #2f855a; }
            .put { background: #fff5f7; color: #c53030; }
            .delete { background: #fff5f7; color: #c53030; }
            code {
                background: #edf2f7;
                padding: 0.2rem 0.4rem;
                border-radius: 4px;
                font-family: monospace;
            }
            .auth-note {
                background: #fffaf0;
                border-left: 4px solid #ed8936;
                padding: 1rem;
                margin: 1rem 0;
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
