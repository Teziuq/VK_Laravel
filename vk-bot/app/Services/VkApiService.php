<?php

namespace App\Services;

use VK\Client\VKApiClient;

class VkApiService
{
    protected $vk;

    public function __construct()
    {
        $this->vk = new VKApiClient();
    }

    /**
     * Публикация сообщения на стене группы VK.
     *
     * @param int $groupId ID группы VK
     * @param string $message Текст сообщения
     * @return array Ответ от VK API
     */
    public function postToWall($groupId, $message)
    {
        // Подготавливаем данные для запроса к API VK
        $params = [
            'owner_id' => '-' . $groupId, // Указываем отрицательный owner_id для группы
            'from_group' => 1, // От имени группы
            'message' => $message,
            'access_token' => 'ваш_токен_группы', // Замените на ваш токен группы
            'v' => '5.199', // Версия API VK
        ];

        // Отправляем запрос к API VK
        $response = $this->vk->wall()->post($params);

        // Возвращаем результат запроса
        return $response;
    }
}
