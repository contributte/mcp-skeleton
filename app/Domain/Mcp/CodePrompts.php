<?php declare(strict_types = 1);

namespace App\Domain\Mcp;

use Mcp\Capability\Attribute\McpPrompt;

final class CodePrompts
{
	#[McpPrompt(name: 'code_review', description: 'Review code for best practices')]
	public function codeReview(string $code, string $language): string
	{
		return sprintf(
			"Please review this %s code for best practices:\n\n```%s\n%s\n```",
			$language,
			$language,
			$code
		);
	}

	#[McpPrompt(name: 'explain_code', description: 'Explain what code does')]
	public function explainCode(string $code): string
	{
		return sprintf(
			"Please explain what this code does:\n\n```\n%s\n```",
			$code
		);
	}
}


