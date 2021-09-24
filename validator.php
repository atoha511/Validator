class Validator
{
    public static function isEmail($email)
    {
        $email = trim($email);
        if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)) {
            return $email;
        } else
            return false;
    }

    public static function isPhoneNumber($phone)
    {
        $phone = trim($phone);
        if (is_numeric($phone)) {
            if (strlen($phone) < 11)
                return false;
            else
                return $phone;
        } else {
            return false;
        }
    }
}
