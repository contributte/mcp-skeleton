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

## Streamable HTTP workflow

Start the development server:

```bash
make dev
```

The application is available at <http://localhost:8080> and the streamable HTTP MCP endpoint is <http://localhost:8080/mcp>.

In another terminal, start the tracked MCP Inspector command:

```bash
make inspector
```

Connect the Inspector to `http://localhost:8080/mcp`. This repository provides the Inspector command and MCP endpoint only; it does not configure or document a separate Inspector UI URL.

## STDIO workflow

Run the STDIO server through the MCP Inspector:

```bash
make mcp-stdio
```

## Example capabilities

The default server uses attribute discovery in `app/Domain/Mcp` and exposes these example capabilities:

- tools: `calculator_add`, `calculator_multiply`
- resources: `app://config`, `file://readme`
- resource template: `app://users/{id}`
- prompts: `code_review`, `explain_code`

For a concrete tool invocation, call `calculator_add` with `a: 2` and `b: 3`; its implementation returns `5`.

## Quality checks

Run coding-standard and static-analysis checks:

```bash
make qa
```

Run tests:

```bash
make tests
```
