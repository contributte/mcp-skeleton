![](https://heatbadger.now.sh/github/readme/contributte/mcp-skeleton/)

<p align=center>
  <a href="https://github.com/contributte/mcp-skeleton/actions"><img src="https://badgen.net/github/checks/contributte/mcp-skeleton/master"></a>
  <a href="https://coveralls.io/r/contributte/mcp-skeleton"><img src="https://badgen.net/coveralls/c/github/contributte/mcp-skeleton"></a>
  <a href="https://packagist.org/packages/contributte/mcp-skeleton"><img src="https://badgen.net/packagist/dm/contributte/mcp-skeleton"></a>
  <a href="https://packagist.org/packages/contributte/mcp-skeleton"><img src="https://badgen.net/packagist/v/contributte/mcp-skeleton"></a>
</p>
<p align=center>
  <a href="https://packagist.org/packages/contributte/mcp-skeleton"><img src="https://badgen.net/packagist/php/contributte/mcp-skeleton"></a>
  <a href="https://github.com/contributte/mcp-skeleton"><img src="https://badgen.net/github/license/contributte/mcp-skeleton"></a>
  <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
  <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
  <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

-----

# MCP Skeleton

Example project demonstrating integration of **Model Context Protocol (MCP)** for **Nette Framework** using `contributte/mcp`.

The MCP integration is based on the upstream documentation: [contributte/mcp docs](https://github.com/contributte/mcp/tree/master/.docs).

![](https://github.assets.f3l1x.io/contributte-mcp-project1.gif)

## Requirements

- PHP 8.4+
- Composer
- Node.js (only for MCP inspector via `npx`)

## Installation

```bash
composer install
```

## Usage

This skeleton registers a single MCP server named `default` and uses **attribute auto-discovery** from `app/Domain/Mcp`.

**Capabilities:**

- Tools:
  - `calculator_add`
  - `calculator_multiply`
- Resources:
  - `app://config`
  - `file://readme`
- Resource templates:
  - `app://users/{id}`
- Prompts:
  - `code_review`
  - `explain_code`

### Streamable HTTP server

1. Start inspector: `make inspector`
2. Open the inspector in your browser and connect to `http://localhost:8080/mcp`.

#### Manual

1. Start inspector: `make inspector` (or `make mcp-stdio` to auto-run the STDIO server)
2. Open the inspector in your browser and do work.

## Screenshots

### STDIO

![STDIO - terminal output](.docs/stdio-terminal.png)

![MCP Inspector - STDIO resources](.docs/stdio.png)

### Streamable HTTP

![Streamable HTTP - terminal output](.docs/streamable-terminal.png)

![MCP Inspector - Streamable HTTP tools](.docs/streamable.png)


## Development

See [how to contribute](https://contributte.org/contributing.html) to this package.

This package is currently maintaining by these authors.

<a href="https://github.com/f3l1x">
    <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team. Also thank you for using this project.
