<?php
namespace App\Controllers;
use \App\Models\bukuModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class BukuRoutes extends BaseController
{
    public function index()
    {
        $buku = new bukuModel();
        $data['bukuwhere'] = $buku->findAll();
        echo view('list_buku', $data);

    }
    public function preview($id)
    {
        $buku = new bukuModel();
        $data['buku'] = $buku->where('id', $id)->first();

        if (!$data['buku']) {
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('preview_buku', $data);
    }
    public function save()
    {
        $session = session();
        $buku = new bukuModel();
        $rules = [
            'judul' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Judul Wajib diisi',
                    'string' => 'Judul Wajib Berupa Huruf'
                ]
            ],
            'penulis' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Penulis Wajib diisi'
                ]
            ],
            'penerbit' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Penerbit Wajib diisi'
                ]
            ],
            'tahun_terbit' => [
                'rules' => 'required|integer|greater_than[1800]|less_than[2024]',
                'errors' => [
                    'required' => 'Tahun terbit harus diisi',
                    'integer' => 'Tahun terbit harus berupa angka.',
                    'greater_than' => 'Tahun terbit harus lebih besar dari 1800.',
                    'less_than' => 'Tahun terbit harus lebih kecil dari 2024.'
                ],
            ],
        ];
        if (!$this->validate($rules)) {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $buku->save([
            "judul" => $this->request->getPost('judul'),
            "penulis" => $this->request->getPost('penulis'),
            "penerbit" => $this->request->getPost('penerbit'),
            "tahun_terbit" => $this->request->getPost('tahun_terbit')
        ]);
        $session->setFlashdata('msg', 'Data Berhasil Ditambahkan');

        return redirect('buku/index');
    }
    public function create()
    {
        return view('create_buku');
    }
    public function update($id)
    {
        $buku = new BukuModel;
        $session = session();
        $rules = [
            'judul' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Judul Wajib diisi',
                    'string' => 'Judul Wajib Berupa Huruf'
                ]
            ],
            'penulis' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Penulis Wajib diisi'
                ]
            ],
            'penerbit' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Penerbit Wajib diisi'
                ]
            ],
            'tahun_terbit' => [
                'rules' => 'required|integer|greater_than[1800]|less_than[2024]',
                'errors' => [
                    'required' => 'Tahun terbit harus diisi',
                    'integer' => 'Tahun terbit harus berupa angka.',
                    'greater_than' => 'Tahun terbit harus lebih besar dari 1800.',
                    'less_than' => 'Tahun terbit harus lebih kecil dari 2024.'
                ],
            ],
        ];
        if (!$this->validate($rules)) {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $data = [
            "judul" => $this->request->getPost('judul'),
            "penulis" => $this->request->getPost('penulis'),
            "penerbit" => $this->request->getPost('penerbit'),
            "tahun_terbit" => $this->request->getPost('tahun_terbit')
        ];
        $buku->update($id, $data);
        $session->setFlashdata('msg', 'Data Berhasil Diubah');
        return redirect('buku/index');
    }
    public function edit($id)
    {
        $buku = new bukuModel();
        $data = [
            'title' => 'Buku',
            'buku' => $buku->where('id', $id)->first()
        ];
        return view('edit_buku', $data);
    }
    public function delete($id)
    {
        $session = session();
        $buku = new bukuModel();
        if ($buku->delete($id)) {
            $session->setFlashdata('msg', 'Data Berhasil Dihapus');
        }
        return redirect('buku/index');
    }
    public function logout()
    {

        session()->destroy();
        return redirect()->to('login');
    }
}