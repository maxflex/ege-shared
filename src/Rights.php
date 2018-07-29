<?php

namespace Shared;

class Rights
{
    const EDIT_GROUPS              = 2;
    const SHOW_TASKS               = 3;
    const SHOW_CALENDAR            = 4;
    const SHOW_FAQ                 = 5;
    const SHOW_TEMPLATES           = 6;
    const SHOW_USERS               = 7;
    const SHOW_PAYMENTS            = 8;
    const SHOW_TEACHER_PAYMENTS    = 9;
    const SHOW_STATS               = 10;
    const EDIT_PAYMENTS            = 11;

    const IS_DEVELOPER             = 12;

    const ER_DELETE_REQUESTS       = 13;
    const ER_DELETE_TUTOR          = 14;
    const ER_MERGE_TUTOR           = 15;
    const ER_TUTOR_ACCOUNTS        = 16;
    const ER_PERIODS               = 17;
    const ER_PERIODS_PLANNED       = 18;
    const ER_DEBT                  = 19;
    const ER_EDIT_ACCOUNTS         = 20;
    const ER_SHOW_TUTOR_DEBT       = 21;
    const ER_ATTACHMENT_STATS      = 22;
    const ER_SUMMARY_USERS         = 23;
    const ER_LOGS                  = 24;
    const ER_SUMMARY               = 25;
    const ER_TUTOR_STATUSES        = 26;
    const ER_REQUEST_STATUSES      = 27;
    const ER_ACCEPT_ACCOUNTS       = 28;
    const ER_SUMMARY_FIELDS        = 29;
    const ER_DELETE_LISTS          = 30;
    const ER_DELETE_ATTACHMENTS    = 31;
    const ER_DELETE_ARCHIVES       = 32;
    const ER_DELETE_REVIEWS        = 33;

    const EC_BANNED                = 34;
    const ER_BANNED                = 35;
    const ERC_BANNED               = 36;

    const SHOW_SALARY              = 38;
    const PHONE_NOTIFICATIONS      = 41;

    const ER_ATTACHMENT_VISIBILITY = 42;
    const ER_STREAM                = 43;
    const ER_TEMPLATES             = 44;
    const ER_SUMMARY_USERS_ALL     = 45;
    const EDIT_GROUP_SCHEDULE      = 46;
    const LOGS                     = 47;

    const ER_EDIT_PAYMENTS         = 48;
    const ECC_BANNED               = 49;

    const ER_REQUEST_ERRORS        = 50;

    const EMERGENCY_EXIT           = 51;
    const EC_STREAM                = 52;

    const ER_ATTENDANCE            = 53;
    const ER_ACTIVITY              = 54;
    const EC_ACTIVITY              = 55;
    const EC_EDIT_GROUP_CONTRACT   = 56;
    const ER_APPROVE_BACKGROUND    = 57;

    const SECRET_SMS               = 58;

    const EC_CALLS_RATING          = 59;

    const WSTAT_BANNED             = 60;

    const EDIT_IPS                 = 61;

    const ER_PAYSTREAM             = 62;

    const IS_SUPERUSER             = 9999;

    static $all = [
        self::EDIT_GROUPS              => 'редактирование групп и регулярного расписания',
        self::SHOW_TASKS               => 'страница "задачи"',
        self::SHOW_CALENDAR            => 'страница "календарь"',
        self::SHOW_FAQ                 => 'страница "FAQ"',
        self::SHOW_TEMPLATES           => 'шаблоны',
        self::SHOW_USERS               => 'страница "пользователи"',
        self::SHOW_PAYMENTS            => 'cтраница "платежи"',
        self::SHOW_TEACHER_PAYMENTS    => 'cтраница "оплата преподавателей"',
        self::SHOW_STATS               => 'страница "итоги"',
        self::EDIT_PAYMENTS            => 'подтверждение платежей',
        self::IS_DEVELOPER             => 'разработчик',
        self::PHONE_NOTIFICATIONS      => 'уведомления о звонках',
        self::ER_DELETE_REQUESTS       => 'удаление заявки',
        self::ER_DELETE_LISTS          => 'удаление списка',
        self::ER_DELETE_ATTACHMENTS    => 'удаление стыковки',
        self::ER_DELETE_ARCHIVES       => 'удаление архива',
        self::ER_DELETE_REVIEWS        => 'удаление отзыва',
        self::ER_ATTACHMENT_VISIBILITY => 'изменение статуса видимости стыковки',
        self::ER_DELETE_TUTOR          => 'удаление преподавателей',
        self::ER_MERGE_TUTOR           => 'функция склейки репетиторов',
        self::ER_TUTOR_ACCOUNTS        => 'доступ к отчетности репетиторов',
        self::ER_PERIODS               => 'cтраница "совершенные расчеты"',
        self::ER_PERIODS_PLANNED       => 'cтраница "планируемые расчеты"',
        self::ER_DEBT                  => 'cтраница "дебет"',
        self::ER_EDIT_ACCOUNTS         => 'подтверждение данных по расчету',
        self::ER_SHOW_TUTOR_DEBT       => 'дебет репетитора на странице отчетности репетитора',
        self::ER_ATTACHMENT_STATS      => 'cтраница "статистика"',
        self::ER_SUMMARY_USERS         => 'страница "эффективность"',
        self::ER_LOGS                  => 'история действий',
        self::ER_SUMMARY               => 'страница "итоги"',
        self::ER_TUTOR_STATUSES        => 'установка статуса репетитора "одобрено" и "закрыто"',
        self::ER_REQUEST_STATUSES      => 'подтверждение обоснованного отказа',
        self::ER_ACCEPT_ACCOUNTS       => 'назначение встреч',
        self::ER_SUMMARY_FIELDS        => 'финансовые сводки на странице "итоги"',
        self::EC_BANNED                => 'блокировка в EC',
        self::ER_BANNED                => 'блокировка в ER',
        self::ECC_BANNED               => 'блокировка в EC-CMS',
        self::ERC_BANNED               => 'блокировка в ER-CMS',
        self::SHOW_SALARY              => 'показать зарплату',
        self::ER_STREAM                => 'страница "стрим"',
        self::ER_TEMPLATES             => 'страница "шаблоны"',
        self::ER_SUMMARY_USERS_ALL     => 'просмотр эффективности по всем пользователям',
        self::EDIT_GROUP_SCHEDULE      => 'редактирование расписания выбранной группы',
        self::LOGS                     => 'история действий',
        self::ER_EDIT_PAYMENTS         => 'подтверждение платежей',
        self::ER_REQUEST_ERRORS        => 'ошибки в заявках',
        self::EMERGENCY_EXIT           => 'экстренный выход',
        self::EC_STREAM                => 'страница "стрим"',
        self::ER_ATTENDANCE            => 'страница "посещаемость"',
        self::ER_ACTIVITY              => 'страница "активность"',
        self::EC_ACTIVITY              => 'страница "активность"',
        self::EC_EDIT_GROUP_CONTRACT   => '"договор подписан" в группе',
        self::ER_APPROVE_BACKGROUND    => 'одобрение фонов',
        self::SECRET_SMS               => 'просмотр секретных СМС',
        self::EC_CALLS_RATING          => 'страница "оценка качества обслуживания"',
        self::WSTAT_BANNED             => 'блокировка в WSTAT',
        self::ER_PAYSTREAM             => 'стрим платежей',
        self::IS_SUPERUSER             => 'суперпользователь',
        self::EDIT_IPS                 => 'управление IP адресами',
    ];

    static $groups = [
        'EGECRM' => [
            self::EDIT_GROUPS,
            self::EDIT_GROUP_SCHEDULE,
            self::EDIT_PAYMENTS,
            self::EC_EDIT_GROUP_CONTRACT,
            self::SHOW_TASKS,
            self::SHOW_CALENDAR,
            self::SHOW_FAQ,
            self::SHOW_TEMPLATES,
            self::SHOW_USERS,
            self::SHOW_PAYMENTS,
            self::SHOW_TEACHER_PAYMENTS,
            self::SHOW_STATS,
            self::SHOW_SALARY,
            self::LOGS,
            self::EC_STREAM,
            self::EC_ACTIVITY,
            self::EC_CALLS_RATING
        ],
        'EGEREP' => [
            self::ER_DELETE_REQUESTS,
            self::ER_DELETE_LISTS,
            self::ER_DELETE_ATTACHMENTS,
            self::ER_DELETE_ARCHIVES,
            self::ER_DELETE_REVIEWS,
            self::ER_ATTACHMENT_VISIBILITY,
            self::ER_SUMMARY_FIELDS,
            self::ER_EDIT_ACCOUNTS,
            self::ER_DELETE_TUTOR,
            self::ER_MERGE_TUTOR,
            self::ER_TUTOR_ACCOUNTS,
            self::ER_PERIODS,
            self::ER_PERIODS_PLANNED,
            self::ER_DEBT,
            self::ER_SHOW_TUTOR_DEBT,
            self::ER_ATTACHMENT_STATS,
            self::ER_SUMMARY_USERS,
            self::ER_SUMMARY_USERS_ALL,
            self::ER_LOGS,
            self::ER_SUMMARY,
            self::ER_TUTOR_STATUSES,
            self::ER_REQUEST_STATUSES,
            self::ER_ACCEPT_ACCOUNTS,
            self::ER_STREAM,
            self::ER_TEMPLATES,
            self::ER_EDIT_PAYMENTS,
            self::ER_REQUEST_ERRORS,
            self::ER_ATTENDANCE,
            self::ER_ACTIVITY,
            self::ER_APPROVE_BACKGROUND,
            self::SECRET_SMS,
            self::ER_PAYSTREAM,
        ],
        'COMMON' => [
            self::PHONE_NOTIFICATIONS,
            self::IS_DEVELOPER,
            self::EC_BANNED,
            self::ER_BANNED,
            self::ECC_BANNED,
            self::ERC_BANNED,
            self::WSTAT_BANNED,
            self::EMERGENCY_EXIT,
            self::EDIT_IPS,
            self::IS_SUPERUSER,
        ],
    ];
}
