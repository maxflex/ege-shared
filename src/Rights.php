<?php

namespace Shared;

class Rights
{
    const SHOW_CONTRACT         = 1;
    const EDIT_GROUPS           = 2;
    const SHOW_TASKS            = 3;
    const SHOW_CALENDAR         = 4;
    const SHOW_FAQ              = 5;
    const SHOW_TEMPLATES        = 6;
    const SHOW_USERS            = 7;
    const SHOW_PAYMENTS         = 8;
    const SHOW_TEACHER_PAYMENTS = 9;
    const SHOW_STATS            = 10;
    const EDIT_PAYMENTS         = 11;

    const IS_DEVELOPER          = 12;
    const PHONE_NOTIFICATIONS   = 29;

    const ER_REQUEST_DATA       = 13;
    const ER_DELETE_TUTOR       = 14;
    const ER_MERGE_TUTOR        = 15;
    const ER_TUTOR_ACCOUNTS     = 16;
    const ER_PERIODS            = 17;
    const ER_PERIODS_PLANNED    = 18;
    const ER_DEBT               = 19;
    const ER_EDIT_ACCOUNTS      = 20;
    const ER_SHOW_TUTOR_DEBT    = 21;
    const ER_ATTACHMENT_STATS   = 22;
    const ER_SUMMARY_USERS      = 23;
    const ER_LOGS               = 24;
    const ER_SUMMARY            = 25;
    const ER_TUTOR_STATUSES     = 26;
    const ER_REQUEST_STATUSES   = 27;
    const ER_ACCEPT_ACCOUNTS    = 28;

    static $all = [
        self::SHOW_CONTRACT         => 'договор',
        self::EDIT_GROUPS           => 'редактирование групп',
        self::SHOW_TASKS            => 'задачи',
        self::SHOW_CALENDAR         => 'календарь',
        self::SHOW_FAQ              => 'FAQ',
        self::SHOW_TEMPLATES        => 'шаблоны',
        self::SHOW_USERS            => 'пользователи',
        self::SHOW_PAYMENTS         => 'платежи',
        self::SHOW_TEACHER_PAYMENTS => 'оплата преподавателей',
        self::SHOW_STATS            => 'итоги',
        self::EDIT_PAYMENTS         => 'редактирование платежей',
        self::IS_DEVELOPER          => 'разработчик',
        self::PHONE_NOTIFICATIONS   => 'уведомления о звонках',
        self::ER_REQUEST_DATA       => 'редактирование клиентов',
        self::ER_DELETE_TUTOR       => 'удаление преподавателей',
        self::ER_MERGE_TUTOR        => 'склейка преподавателей',
        self::ER_TUTOR_ACCOUNTS     => 'отчетность',
        self::ER_PERIODS            => 'совершенные расчеты',
        self::ER_PERIODS_PLANNED    => 'планируемые расчеты',
        self::ER_DEBT               => 'дебет',
        self::ER_EDIT_ACCOUNTS      => 'редактирование отчетности',
        self::ER_SHOW_TUTOR_DEBT    => 'показать дебет',
        self::ER_ATTACHMENT_STATS   => 'статистика',
        self::ER_SUMMARY_USERS      => 'эффективность',
        self::ER_LOGS               => 'логи',
        self::ER_SUMMARY            => 'итоги',
        self::ER_TUTOR_STATUSES     => 'переключение статусов преподавателя',
        self::ER_REQUEST_STATUSES   => 'переключение статусов заявки',
        self::ER_ACCEPT_ACCOUNTS    => 'одобрение встреч',
    ];
}