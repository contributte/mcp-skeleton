<?php declare(strict_types = 1);

namespace App\Model\Router;

use Contributte\Mcp\Router\McpRouter;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;
use Nette\Routing\Router;

final class RouterFactory
{

	public function create(): Router
	{
		$router = new RouteList();

		// MCP HTTP endpoint (streamable transport via ContributteMcp:Mcp presenter)
		$router[] = new McpRouter('mcp[/]', 'default');

		// Web
		$router[] = new Route('/', 'Home:default');
		$router[] = new Route('<presenter>/<action>', 'Home:default');

		return $router;
	}

}
