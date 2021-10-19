<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KomikModel;
use TCPDF;
use Mpdf;
use Dompdf\Dompdf;
use Dompdf\Options;
// use myLibrary;
use phpDocumentor\Reflection\Types\This;
use tidy;
use App\Libraries\myLibrary;
// use App\Libraries\Ciqrcode;

class komik extends BaseController
{
    public $tl;
    public $qrcode;
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
        $this->tl = new MyLibrary();
        // $this->qrcode = new Ciqrcode();
    }
    public function index()
    {
        //d($this->request->getVar('keyword'));
        //  $komik = $this->komikModel->findAll();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $komik = $this->komikModel->search($keyword);
        } else {
            $komik = $this->komikModel;
        }

        $data = [
            'title' => 'Daftar Pemain',
            'coba' => $this->tl->libsaya(),
            'komik' => $this->komikModel->getKomik(),
            'keyword' => ''
        ];
        return view('komik/index', $data);
    }

    // function qrcode($kodeqr)
    // {
    //     //render qrcode ke png
    //     if ($kodeqr){
    //         $filename = 'qr/'.$kodeqr;
    //         if (!file_exists($filename)){
    //             $this->load->Libraries('ciqrcode');
    //             $params['data'] = $kodeqr;
    //             $params['level'] = 'H';
    //             $params['size'] = 10;
    //             $params['savename'] = FCPATH.'qr/'.$kodeqr.".png";
    //             return  $this->ciqrcode->generate($params);
    //         }
    //     }
    // }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Pemain',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik ' . $slug . ' tidak ditemukan.');
        }

        return view('komik/detail', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Pemain',
            'validation' => \Config\Services::validation()
        ];

        return view('komik/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[komik.judul]',
                'errors' => [
                    'required' => '{field} komik harus diisi!',
                    'is_unique' => '{field} komik sudah terdaftar!'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Maximum size adalah 1MB',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in' => 'File yang anda pilih bukan gambar'

                ]
            ]
        ])) {
            // $validate = \Config\Services::validate();
            // return redirect()->to('/komik/create')->withInput()->with('validation', $validate);
            return redirect()->to('/komik/create')->withInput();
        }
        //ambil gambar
        $fileSampul = $this->request->getFile('sampul');
        //apakah file tidak di upload
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'default.jpg';
        } else {
            //genereta nama sampul
            $namaSampul = $fileSampul->getRandomName();
            //pindah file ke folder img
            $fileSampul->move('img', $namaSampul);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->komikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul,
            'ttl' => $this->request->getVar('ttl'),
            'ssb' => $this->request->getVar('ssb'),
            'ayah' => $this->request->getVar('ayah'),
            'ibu' => $this->request->getVar('ibu'),
            'administrasi' => $this->request->getVar('administrasi'),
            'goldar' => $this->request->getVar('goldar'),
            'kelamin' => $this->request->getVar('kelamin'),
            'bBadan' => $this->request->getVar('bBadan'),
            'tBadan' => $this->request->getVar('tBadan'),
            'sd' => $this->request->getVar('sd'),
            'smp' => $this->request->getVar('smp'),
            'akademi' => $this->request->getVar('akademi'),
            'prestasi' => $this->request->getVar('prestasi'),
            'kota' => $this->request->getVar('kota')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/komik');
    }

    public function delete($id)
    {
        //cari gambar berdasarkan id
        $komik = $this->komikModel->find($id);

        //cek kondisi file default
        if ($komik['sampul'] != 'default.jpg') {
            //hapus gambar
            unlink('img/' . $komik['sampul']);
        }


        $this->komikModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/komik');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Pemain',
            'validation' => \Config\Services::validation(),
            'komik' => $this->komikModel->getKomik($slug)
        ];

        return view('komik/edit', $data);
    }

    public function update($id)
    {

        //cek judul

        $komikLama = $this->komikModel->getKomik($this->request->getVar('slug'));
        if ($komikLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[komik.judul]';
        }

        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} komik harus diisi!',
                    'is_unique' => '{field} komik sudah terdaftar!'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Maximum size adalah 1MB',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'mime_in' => 'File yang anda pilih bukan gambar'

                ]
            ]
        ])) {
            return redirect()->to('/komik/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileSampul = $this->request->getFile('sampul');

        // cek gambar, apakah gambar lama
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            //generate nama file random
            $namaSampul = $fileSampul->getRandomName();
            // pindahkan gambar
            $fileSampul->move('img', $namaSampul);
            //hapus file lama
            unlink('img/' . $this->request->getVar('sampulLama'));
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->komikModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul,
            'ttl' => $this->request->getVar('ttl'),
            'ssb' => $this->request->getVar('ssb'),
            'ayah' => $this->request->getVar('ayah'),
            'ibu' => $this->request->getVar('ibu'),
            'administrasi' => $this->request->getVar('administrasi'),
            'goldar' => $this->request->getVar('goldar'),
            'kelamin' => $this->request->getVar('kelamin'),
            'bBadan' => $this->request->getVar('bBadan'),
            'tBadan' => $this->request->getVar('tBadan'),
            'sd' => $this->request->getVar('sd'),
            'smp' => $this->request->getVar('smp'),
            'akademi' => $this->request->getVar('akademi'),
            'prestasi' => $this->request->getVar('prestasi'),
            'kota' => $this->request->getVar('kota')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/komik');
    }

    // public function formulir($slug)
    // {

    //     $data = [
    //         'title' => 'Daftar Pemain',
    //         'komik' => $this->komikModel->getKomik($slug),
    //         'keyword' => ''
    //     ];

    //     $html = view('printPdf', $data);
    //     // pdf file
    //     $pdf = new TCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
    //     $pdf->setPrintHeader(false);
    //     $pdf->setPrintFooter(false);
    //     $pdf->SetDisplayMode('real', 'default');
    //     $pdf->AddPage();
    //     $pdf->writeHTML($html, true, false, true, false, '');
    //     $this->response->setContentType('application/pdf');
    //     $pdf->Output('FormulirPemain.pdf', 'I');
    // }

    public function pdf($slug)
    {
        $data = [
            'title' => 'Daftar Pemain',
            'komik' => $this->komikModel->getKomik($slug),
            'keyword' => ''
        ];
        $html = view('printPdf', $data);
        // instantiate and use the dompdf class

        $options = new Options();
        $options->setTempDir('temp'); // temp folder with write permission

        $dompdf = new Dompdf();
        //$dompdf->set_option('isRemoteEnabled', TRUE);
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
    public function cardPdf($slug)
    {
        $data = [
            'title' => 'Daftar Pemain',
            'komik' => $this->komikModel->getKomik($slug),
            'keyword' => ''
        ];

        $html = view('cardPdf', $data);
        // // instantiate and use the dompdf class

        // $options = new Options();
        // $options->setTempDir('temp'); // temp folder with write permission

        $dompdf = new Dompdf();
        // $dompdf->set_option('isRemoteEnabled', TRUE);
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // // Render the HTML as PDF
        $dompdf->render();

        // // Output the generated PDF to Browser
        $dompdf->stream();
    }

    
}
