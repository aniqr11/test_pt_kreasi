<?php

namespace App\Controllers;

use App\Models\EBookModel;
use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        $eBookModel = new EBookModel();
        $data['eBooks'] = $eBookModel->findAll();

        return view('eBook/index', $data);
    }

    public function viewPdf($pdfPath)
    {
        $eBookModel = new EBookModel();
        $eBook = $eBookModel->where('pdf_path', $pdfPath)->first();

        if (!$eBook) {

            return redirect()->to('/eBook/index')->with('error', 'EBook not found');
        }


        $pdfFilePath = WRITEPATH . 'uploads/' . $eBook['pdf_path']; // Adjust the path based on your setup

        $pdfContent = file_get_contents($pdfFilePath);


        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="eBook.pdf"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');


        echo '<embed src="data:application/pdf;base64,' . base64_encode($pdfContent) . '" width="100%" height="600px" />';
    }

    public function delete($id)
    {
        $eBookModel = new EBookModel();
        $data['eBooks'] = $eBookModel->delete($id);

        return redirect()->to('/');
    }
}
