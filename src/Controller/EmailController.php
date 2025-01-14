<?php

namespace App\Controller;

use App\Service\EmailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EmailController extends AbstractController{
    private EmailService $emailService;
    public function __construct(EmailService $emailService) {
        $this->emailService = $emailService;
    }

    #[Route('/send-email', name: 'send_email')]
    public function sendEmail(): Response
    {
    $this->emailService->sendEmail(
    'user@example.com',
    'Test Email',
    '<p>This is a test email sent using Symfony Mailer.</p>'
    );
    return new Response('Email sent successfully!');
    }
}
