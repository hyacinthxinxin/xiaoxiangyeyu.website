<?php
/**
 * Created by PhpStorm.
 * User: fanxin
 * Date: 2017/9/9
 * Time: 下午2:16
 */
namespace App\Enums;

/**
 * Class NovelStatusEnum
 * @package App\Enums
 * 使用：use App\Enums\CommandTypeEnum;
 *      $xxx = CommandTypeEnum::one_byte
 *      dump($xxx) // 1
 */
abstract class CommandTypeEnum extends BasicEnum
{
    const OneBit = 0;
    const OneByte = 1;
    const TowByte = 2;
}