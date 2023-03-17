<?php namespace App\Controllers;

// Tambahkan Upload Model di sini
use App\Models\UploadModel1;

class Upload1 extends BaseController
{

    protected $model_upload1;

    public function __construct() {

        // Memanggil form helper
        helper('form');
        // Menyiapkan variabel untuk menampung upload model
        $this->model_upload1 = new UploadModel1();
    }

	public function index()
    {
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;
            $data['uploads1'] = $this->model_upload1->get_uploads1();
            echo view('Masyarakat/form_upload1', $data);
            
        }
    }
 
    public function process()
    {

        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('upload'));
        }

        $validated = $this->validate([
            'file_upload1' => 'uploaded[file_upload1]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);
 
        if ($validated == FALSE) {
            
            // Kembali ke function index supaya membawa data uploads dan validasi
            return $this->index();

        } else {

            $avatar = $this->request->getFile('file_upload1');
            $avatar->move(ROOTPATH . 'public/uploads1');
            

            $data = [
                'foto' => $avatar->getName(),
                'isi_laporan'=>$this->request->getPost('txtInputPengaduan'),
                'tgl_pengaduan'=>$this->request->getPost('tanggal')
            ];
    
            $this->model_upload1->insert_gambar($data);
            return redirect()->to(base_url('/masyarakat/pengaduan'))->with('success', 'Upload successfully'); 
        }

    }

}
