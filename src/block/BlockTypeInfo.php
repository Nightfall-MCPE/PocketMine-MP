<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
 */

declare(strict_types=1);

namespace pocketmine\block;

use function array_fill_keys;
use function array_keys;

final class BlockTypeInfo{
	/**
	 * @var true[]
	 * @phpstan-var array<string, true>
	 */
	private array $typeTags;

	public function __construct(
		private BlockBreakInfo $breakInfo,
		array $typeTags = []
	){
		$this->typeTags = array_fill_keys($typeTags, true);
	}

	public function getBreakInfo() : BlockBreakInfo{ return $this->breakInfo; }

	/** @return string[] */
	public function getTypeTags() : array{ return array_keys($this->typeTags); }

	public function hasTypeTag(string $tag) : bool{ return isset($this->typeTags[$tag]); }
}
