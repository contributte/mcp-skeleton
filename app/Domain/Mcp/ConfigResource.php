<?php declare(strict_types = 1);

namespace App\Domain\Mcp;

use Mcp\Capability\Attribute\McpResource;

final class ConfigResource
{
	#[McpResource(
		uri: 'app://config',
		name: 'AppConfig',
		description: 'Application configuration',
	)]
	public function getConfig(): string
	{
		return json_encode([
			'server' => 'default',
			'version' => '1.0.0',
		], JSON_THROW_ON_ERROR);
	}

	#[McpResource(
		uri: 'file://readme',
		name: 'Readme',
		description: 'Project readme file',
		mimeType: 'text/markdown',
	)]
	public function getReadme(): string
	{
		$readme = __DIR__ . '/../../../README.md';

		if (!is_file($readme)) {
			return '# README not found';
		}

		$content = file_get_contents($readme);

		return $content !== false ? $content : '# README not readable';
	}
}


