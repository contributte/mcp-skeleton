# MCP Skeleton

Example [Model Context Protocol](https://modelcontextprotocol.io/) server for Nette using `contributte/mcp`.

## Requirements

- PHP 8.4+
- [Composer](https://getcomposer.org/)
- Node.js, only for the MCP Inspector started through `npx`

## Create a project

```bash
composer create-project -s dev contributte/mcp-skeleton acme
cd acme
make project
make init
```

`make project` installs dependencies and prepares writable runtime directories. `make init` creates `config/local.neon`, where optional local parameter overrides can be added.

## Streamable HTTP

Start the development server:

```bash
make dev
```

The application is available at <http://localhost:8080> and the streamable HTTP MCP endpoint is <http://localhost:8080/mcp>.

In another terminal, start the inspector:

```bash
make inspector
```

Open the inspector and connect it to `http://localhost:8080/mcp`.

## STDIO and capabilities

Run the STDIO server with the MCP Inspector:

```bash
make mcp-stdio
```

The default server uses attribute discovery in `app/Domain/Mcp` and exposes these example capabilities:

- tools: `calculator_add`, `calculator_multiply`
- resources: `app://config`, `file://readme`
- resource template: `app://users/{id}`
- prompts: `code_review`, `explain_code`

## Quality checks

Run coding-standard and static-analysis checks:

```bash
make qa
```

Run tests:

```bash
make tests
```
