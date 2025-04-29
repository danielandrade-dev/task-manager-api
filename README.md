# API de Controle de Tarefas

> API desenvolvida utilizando o framework Laravel, implementando o padrão de projeto Service Layer Pattern.

---

## Índice

- [Sobre o Projeto](#sobre-o-projeto)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Design Patterns Aplicados](#design-patterns-aplicados)
- [Arquitetura e Organização](#arquitetura-e-organização)
- [Como Instalar](#como-instalar)
- [Como Usar](#como-usar)
- [Endpoints da API](#endpoints-da-api)
- [Testes](#testes)
- [Autor](#autor)
- [Licença](#licença)

---

## Sobre o Projeto

API de Controle de Tarefas é uma API backend RESTful feita para gerenciar recursos de forma simples e eficiente.

---

## Tecnologias Utilizadas

- PHP (>=8.1)
- Laravel
- sqlite
- Docker
- Composer

---

## Design Patterns Aplicados

- Service Layer Pattern

---

## Arquitetura e Organização

```
app/
 ├── Http/
 ├── Models/
 ├── Services/
 ├── Repositories/
 ├── Events/
 └── Listeners/
routes/
 └── api.php
config/
database/
 ├── migrations/
 └── seeders/
```

---

## Como Instalar

```bash
# Clonar o repositório
git clone https://github.com/seu-usuario/task-manager-api.git

# Acessar o diretório
cd task-manager-api

# Subir o ambiente Docker
docker-compose up -d

# Acessar o container e rodar migrations
docker exec -it nome_container_php bash
php artisan migrate
```

> As variáveis de ambiente estão no arquivo `.env`, configuradas para PostgreSQL.

---

## Como Usar

Acesse a API via navegador ou ferramentas como Postman:

```
http://localhost:8000/api
```

---

## Endpoints da API

| Método | Rota | Descrição |
|:------|:-----|:----------|
| GET | /api/tasks | Listar tarefas |
| POST | /api/tasks | Criar nova tarefa |
| GET | /api/tasks/next | Listar próximas tarefas (por data) |
| GET | /api/tasks/{id} | Buscar tarefa específica |
| PUT | /api/tasks/{id} | Atualizar tarefa |
| DELETE | /api/tasks/{id} | Deletar tarefa |

### Exemplo de payload para criar tarefa

```json
{
  "title": "Nova tarefa",
  "description": "Descrição opcional",
  "status": "pending",
  "due_date": "2025-05-01 12:00:00"
}
```

---

## Testes

```bash
# Rodar testes
php artisan test
```

---

## Autor

| Nome | Perfil |
|:-----|:-------|
| Daniel Moreira | [LinkedIn](https://www.linkedin.com/in/danielandrade-dev/) · [GitHub](https://github.com/danielandrade-dev) |

---

## Licença

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE](LICENSE) para detalhes.

---
