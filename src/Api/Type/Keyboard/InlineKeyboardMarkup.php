<?php

/**
 * Telegram Bot API.
 *
 * @author  Maksim Masiukevich <dev@async-php.com>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 1);

namespace ServiceBus\TelegramBot\Api\Type\Keyboard;

use ServiceBus\TelegramBot\Api\Type\ReplayMarkup;

/**
 * Represents an inline keyboard that appears right next to the message it belongs to.
 *
 * @see https://core.telegram.org/bots/api#inlinekeyboardmarkup
 * @see https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating
 *
 * @psalm-readonly
 */
final class InlineKeyboardMarkup implements ReplayMarkup
{
    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects.
     *
     * @var InlineKeyboardButton[]
     */
    public $inlineKeyboard = [];
}
