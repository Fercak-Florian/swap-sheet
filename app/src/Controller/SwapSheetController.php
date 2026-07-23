<?php

namespace App\Controller;

use App\Entity\SwapSheet;
use App\Form\SwapSheetType;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SwapSheetController extends AbstractController
{
    #[Route('/', name: 'app')]
    public function index(Request $request): Response
    {
        $swapSheet = new SwapSheet();
        $swapSheet->setOldComputer("odlOR");
        $swapSheet->setNewComputer("newOR");

        $form = $this->createForm(SwapSheetType::class, $swapSheet);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$swapSheat` variable has also been updated
            $swapSheet = $form->getData();

            // ... perform some action -> generate PDF
            // instantiate and use the dompdf class
            $options = new Options();

            $options->set('isRemoteEnabled', true);

            $options->setChroot(
                $this->getParameter('kernel.project_dir').'/public'
            );

            $dompdf = new Dompdf($options);

            $html = $this->renderView('pdf/swap_sheet.html.twig', [
                'swapSheet' => $swapSheet,
            ]);

            $dompdf->loadHtml($html);
//
//            // (Optional) Setup the paper size and orientation
//            $dompdf->setPaper('A4', 'landscape');
//
            // Render the HTML as PDF
            $dompdf->render();
//
//            // Output the generated PDF to Browser
            $content = $dompdf->output();
            return new Response(
                $content,
                200,
                [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'inline; filename="swap-sheet.pdf"',
                ]
            );
        }

        return $this->render('swap_sheet/index.html.twig', [
            'controller_name' => 'SwapSheetController',
            'form' => $form
        ]);
    }
}
