<?php

/*
 * This file is a part of the DiscordPHP project.
 *
 * Copyright (c) 2015-present David Cole <david.cole1340@gmail.com>
 *
 * This file is subject to the MIT license that is bundled
 * with this source code in the LICENSE.md file.
 */

namespace Discord\Repository\Channel;

use Discord\Http\Endpoint;
use Discord\Parts\Channel\Overwrite;
use Discord\Repository\AbstractRepository;

/**
 * Contains permission overwrites for channels.
 *
 * @see Overwrite
 * @see \Discord\Parts\Channel\Channel
 */
class OverwriteRepository extends AbstractRepository
{
    /**
     * @inheritdoc
     */
    protected $endpoints = [
        'delete' => Endpoint::CHANNEL_PERMISSIONS,
    ];

    /**
     * @inheritdoc
     */
    protected $class = Overwrite::class;
}
