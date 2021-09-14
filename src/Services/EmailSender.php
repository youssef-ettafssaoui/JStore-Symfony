<?php

namespace App\Services;

use App\Entity\EmailModel;
use App\Entity\User;
use Mailjet\Client;
use Mailjet\Resources;

class EmailSender{


    public function sendEmailNotificationByMailJet(User $user, EmailModel $email){

        $mj = new Client(getenv('MJ_APIKEY_PUBLIC'), getenv('MJ_APIKEY_PRIVATE'),true,['version' => 'v3.1']);
        $body = [
            'Messages' => [
            [
                'From' => [
                'Email' => "shoppingagriexpress@gmail.com",
                'Name' => "AgriExpress Shopping Contact"
                ],
                'To' => [
                [
                    'Email' => $user->getEmail(),
                    'Name' => $user->getFullName()
                ]
                ],
                'TemplateID' => 3063652,
                'TemplateLanguage' => true,
                'Subject' => $email->getSubject(),
                'Variables' => [
                    'title' => $email->getTitle(),
                    'content' => $email->getContent()
                ]
            ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
    }

}
