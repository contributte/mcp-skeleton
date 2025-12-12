<?php declare(strict_types = 1);

namespace App\Domain\Mcp;

use Mcp\Capability\Attribute\McpResourceTemplate;
use Mcp\Exception\ResourceReadException;

final class UserResourceTemplate
{

	/**
	 * @return array{id: int, name: string, email: string}
	 */
	#[McpResourceTemplate(
		uriTemplate: 'app://users/{id}',
		name: 'user_by_id',
		description: 'Return a demo user by ID',
		mimeType: 'application/json',
	)]
	public function getUser(string $id): array
	{
		if ($id === '' || !ctype_digit($id)) {
			throw new ResourceReadException(sprintf('Invalid user id "%s". Expected numeric ID.', $id));
		}

		$userId = (int) $id;

		$users = [
			1 => [
				'id' => 1,
				'name' => 'Alice',
				'email' => 'alice@example.com',
			],
			2 => [
				'id' => 2,
				'name' => 'Bob',
				'email' => 'bob@example.com',
			],
		];

		$user = $users[$userId] ?? null;

		if ($user === null) {
			throw new ResourceReadException(sprintf('User "%d" not found.', $userId));
		}

		return $user;
	}

}
