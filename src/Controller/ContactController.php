<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request, MailerInterface $mailer, ValidatorInterface $validator): Response
    {
        $success = false;
        $error = null;

        if ($request->isMethod('POST')) {
            $name = $request->request->get('name');
            $email = $request->request->get('email');
            $subject = $request->request->get('subject');
            $message = $request->request->get('message');

            // Validation
            $constraints = new Assert\Collection([
                'name' => [
                    new Assert\NotBlank(['message' => 'Le nom est requis']),
                    new Assert\Length(['min' => 2, 'max' => 100])
                ],
                'email' => [
                    new Assert\NotBlank(['message' => 'L\'email est requis']),
                    new Assert\Email(['message' => 'L\'email n\'est pas valide'])
                ],
                'subject' => [
                    new Assert\NotBlank(['message' => 'Le sujet est requis']),
                    new Assert\Length(['min' => 3, 'max' => 200])
                ],
                'message' => [
                    new Assert\NotBlank(['message' => 'Le message est requis']),
                    new Assert\Length(['min' => 10, 'max' => 2000])
                ],
            ]);

            $violations = $validator->validate([
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'message' => $message,
            ], $constraints);

            if (count($violations) === 0) {
                try {
                    $emailBody = $this->renderView('emails/contact.html.twig', [
                        'name' => $name,
                        'email' => $email,
                        'subject' => $subject,
                        'message' => $message,
                    ]);

                    $emailMessage = (new Email())
                        ->from($_ENV['MAILER_FROM'] ?? 'noreply@portfolio.com')
                        ->to($_ENV['MAILER_TO'] ?? 'julien.font@example.com')
                        ->subject('Contact Portfolio: ' . $subject)
                        ->html($emailBody);

                    $mailer->send($emailMessage);
                    $success = true;
                } catch (\Exception $e) {
                    $error = 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.';
                }
            } else {
                $error = $violations[0]->getMessage();
            }
        }

        return $this->render('contact/index.html.twig', [
            'success' => $success,
            'error' => $error,
        ]);
    }
}

