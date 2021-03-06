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

use ServiceBus\TelegramBot\Api\Type\Game\CallbackGame;

/**
 * Represents one button of an inline keyboard. You must use exactly one of the optional fields.
 *
 * @see https://core.telegram.org/bots/api#inlinekeyboardbutton
 *
 * @psalm-readonly
 */
final class InlineKeyboardButton
{
    /**
     * Label text on the button.
     *
     * @var string
     */
    public $text;

    /**
     * Optional. HTTP or tg:// url to be opened when button is pressed.
     *
     * @var string|null
     */
    public $url;

    /**
     * Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes.
     *
     * @see https://core.telegram.org/bots/api#callbackquery
     *
     * @var string|null
     */
    public $callbackData;

    /**
     * Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and
     * insert the bot‘s username and the specified inline query in the input field. Can be empty, in which case just
     * the bot’s username will be inserted.
     *
     * Note: This offers an easy way for users to start using your bot in inline mode when they are currently in a
     * private chat with it. Especially useful when combined with switch_pm… actions – in this case the user will be
     * automatically returned to the chat they switched from, skipping the chat selection screen.
     *
     * @see https://core.telegram.org/bots/inline
     *
     * @var string|null
     */
    public $switchInlineQuery;

    /**
     * Optional. If set, pressing the button will insert the bot‘s username and the specified inline query in the
     * current chat's input field. Can be empty, in which case only the bot’s username will be inserted.
     *
     * This offers a quick way for the user to open your bot in inline mode in the same chat – good for selecting
     * something from multiple options.
     *
     * @var string|null
     */
    public $switchInlineQueryCurrentChat;

    /**
     * Optional. Description of the game that will be launched when the user presses the button.
     *
     * NOTE: This type of button must always be the first button in the first row.
     *
     * @var CallbackGame|null
     */
    public $callbackGame;

    /**
     * Optional. Specify True, to send a Pay button.
     *
     * NOTE: This type of button must always be the first button in the first row.
     *
     * @see https://core.telegram.org/bots/api#payments
     *
     * @var bool
     */
    public $pay = false;
}
