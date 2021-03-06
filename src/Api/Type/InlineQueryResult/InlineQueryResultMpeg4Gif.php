<?php

/**
 * Telegram Bot API.
 *
 * @author  Maksim Masiukevich <dev@async-php.com>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 1);

namespace ServiceBus\TelegramBot\Api\Type\InlineQueryResult;

use ServiceBus\TelegramBot\Api\Type\InputMessageContent\InputMessageContent;
use ServiceBus\TelegramBot\Api\Type\Keyboard\InlineKeyboardMarkup;
use ServiceBus\TelegramBot\Api\Type\ParseMode;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file
 * will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message
 * with the specified content instead of the animation.
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
 *
 * @psalm-readonly
 */
final class InlineQueryResultMpeg4Gif implements InlineQueryResult
{
    /**
     * Type of the result, must be mpeg4_gif.
     *
     * @var string
     */
    public $type = 'mpeg4_gif';

    /**
     * Unique identifier for this result, 1-64 bytes.
     *
     * @var string
     */
    public $id;

    /**
     * A valid URL for the MP4 file. File size must not exceed 1MB.
     *
     * @var string
     */
    public $mpeg4Url;

    /**
     * Optional. Video width.
     *
     * @var int|null
     */
    public $mpeg4Width;

    /**
     * Optional. Video height.
     *
     * @var int|null
     */
    public $mpeg4Height;

    /**
     * Optional. Video duration.
     *
     * @var int|null
     */
    public $mpeg4Duration;

    /**
     * URL of the static thumbnail (jpeg or gif) for the result.
     *
     * @var string
     */
    public $thumbUrl;

    /**
     * Optional. Title for the result.
     *
     * @var string|null
     */
    public $title;

    /**
     * Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters.
     *
     * @var string|null
     */
    public $caption;

    /**
     * Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs
     * in the media caption.
     *
     * @var ParseMode|null
     */
    public $parseMode;

    /**
     * Optional. Inline keyboard attached to the message.
     *
     * @var InlineKeyboardMarkup|null
     */
    public $replyMarkup;

    /**
     * Optional. Content of the message to be sent instead of the video animation.
     *
     * @var InputMessageContent|null
     */
    public $inputMessageContent;
}
