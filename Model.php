<?php

class Model extends \Illuminate\Database\Eloquent\Model
{
    /**
     * Comma-separated attributes
     *
     */
    protected $commaSeparated = [];

    /**
     * Get a plain attribute (not a relationship).
     *
     * @param  string  $key
     * @return mixed
     */
    public function getAttributeValue($key)
    {
        $value = parent::getAttributeValue($key);

        if (in_array($key, $this->commaSeparated)) {
            return static::getCommaSeparated($value);
        }

        return $value;
    }

    /**
     * Set a given attribute on the model.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return $this
     */
    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->commaSeparated)) {
            $this->attributes[$key] = static::setCommaSeparated($value);
        }

        return parent::setAttribute($key, $value);
    }

    /**
     * Convert the model's attributes to an array.
     *
     * @return array
     */
    public function attributesToArray()
    {
        $attributes = parent::attributesToArray();

        foreach ($this->commaSeparated as $key) {
            if (! array_key_exists($key, $attributes)) {
                continue;
            }
            $attributes[$key] = static::getCommaSeparated($attributes[$key]);
        }

        return $attributes;
    }

    /**
     * Get comma-separated attribute
     */
    private static function getCommaSeparated($value)
    {
        if (is_array($value)) {
            return $value;
        } else {
            return empty($value) ? [] : array_map('intval', explode(',', $value));
        }
    }

    /**
     * Set comma-separated attribute
     */
    private static function setCommaSeparated($value)
    {
        if (is_array($value)) {
            return implode(',', $value);
        } else {
            return $value;
        }
    }
}
