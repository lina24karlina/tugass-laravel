<?php

namespace App\Http\Controllers;

use App\Models\HealthReport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $healthReports = HealthReport::all();

        $data = [
            'title' => 'Laporan Kesehatan',
            'date' => date('d-m-Y'),
            'healthReports' => $healthReports,
        ];

        $pdf = Pdf::loadView('health_report', $data);

        // Mengunduh file PDF
        return $pdf->download('laporan-kesehatan.pdf');
    }

    public function streamPDF()
    {
        $healthReports = HealthReport::all();

        $data = [
            'title' => 'Laporan Kesehatan',
            'date' => date('d-m-Y'),
            'healthReports' => $healthReports,
        ];

        $pdf = Pdf::loadView('health_report', $data);

        // Menampilkan PDF langsung di browser
        return $pdf->stream('laporan-kesehatan.pdf');
    }
}
