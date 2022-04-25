<?php

namespace App\Utils;

class ErrorMessages
{
    public const NOT_FOUND = 404;
    public const NOT_FOUND_MSG = 'Ma\'lumot topilmadi!';

    public const UNAUTHORIZED = 401;
    public const UNAUTHORIZED_MSG = 'Unauthorized!';

    public const CAN_NOT_DELETE = 1000;
    public const CAN_NOT_DELETE_MSG = 'Ma\'lumotni o\'chirib bo\'lmaydi!';

    public const CAN_NOT_CREATE = 1001;
    public const CAN_NOT_CREATE_MSG = 'Ma\'lumotni yaratib bo\'lmaydi!';

    public const CAN_NOT_UPDATE = 1002;
    public const CAN_NOT_UPDATE_MSG = 'Ma\'lumotni yangilab bo\'lmaydi!';

    public const CAN_NOT_REGISTER = 1003;
    public const CAN_NOT_REGISTER_MSG = "Ro'yxatdan o'tib bo'lmadi!";

    public const CAN_NOT_LOGIN = 1004;
    public const CAN_NOT_LOGIN_MSG = "Tizimga kirib bo'lmadi!";

    public const NOT_FOUND_USER = 1005;
    public const NOT_FOUND_USER_MSG = 'Foydalanuvchi topilmadi';

    public const WRONG_PASSWORD = 1006;
    public const WRONG_PASSWORD_MSG = 'Parol noto\'g\'ri';

    public const WENT_WRONG = 1007;
    public const WENT_WRONG_MSG = 'Resursni olishda muammo!';

    public const CAN_NOT_GET_RESOURCE = 1008;
    public const CAN_NOT_GET_RESOURCE_MSG = 'Resursni olib bo\'lmadi';
}
