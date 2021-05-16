<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CrudModel', 'crud');
    }

    public function index()
    {
        $data = ['content' => 'Admin/DashboardPage'];
        $this->load->view('Admin/VBackend', $data);
    }

    private function uploadImageContentProduct($folder, $field)
    {
        $config['upload_path'] = './upload/'.$folder;
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['file_name'] = time();
        $config['overwrite'] = true;
        $config['max_size'] = 1024;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($field)) {
            return $this->upload->data('file_name');
        }

        return 'default.jpg';
    }

    public function Goods()
    {
        $data = [
            'DataGoods' => $this->crud->GetData('goods')->result(),
            'content' => 'Admin/ProdukPage',
        ];

        $this->load->view('Admin/VBackend', $data);
    }

    public function AddDataGoods()
    {
        $add = [
            'goods_id' => $this->crud->generateCode('10', 'goods_id', 'goods'),
            'nama' => $this->input->post('nama'),
            'varian' => $this->input->post('varian'),
            'berat' => $this->input->post('berat'),
            'harga' => $this->input->post('harga'),
        ];

        $this->crud->AddData('goods', $add);

        redirect(base_url('admin/produk'));
    }

    public function UpdateDataGoods()
    {
        $update = [
            'goods_id' => $this->input->post('goods_id'),
            'nama' => $this->input->post('nama'),
            'varian' => $this->input->post('varian'),
            'berat' => $this->input->post('berat'),
            'harga' => $this->input->post('harga'),
        ];

        $this->crud->UpdateData('goods', 'goods_id', $update['goods_id'], $update);

        redirect(base_url('admin/produk'));
    }

    public function GoodsContent()
    {
        $data = [
            'DataGoodsContent' => $this->crud->GetData('goods_content')->result(),
            'content' => 'Admin/KontenProdukPage',
        ];

        $this->load->view('Admin/VBackend', $data);
    }

    public function AddDataGoodsContent()
    {
        $add = [
            'content_id' => $this->crud->generateCode('10', 'content_id', 'goods_content'),
            'deskripsi' => $this->input->post('deskripsi'),
            'goods_img' => $this->uploadImageContentProduct('konten_produk', 'goods_img'),
            'status' => $this->input->post('status'),
        ];

        $this->crud->AddData('goods_content', $add);

        redirect(base_url('admin/konten_produk'));
    }

    public function UpdateDataGoodsContent()
    {
        $content_id = $this->input->post('content_id');
        $update['deskripsi'] = $this->input->post('deskripsi');
        $update['status'] = $this->input->post('status');
        // $update['testi_rate'] = $this->input->post('testi_rate');
        // $update['goods_id'] = $this->input->post('goods_id');

        if (!empty($_FILES['goods_img']['name'])) {
            $this->crud->deleteImage('goods_content', 'content_id', $content_id, 'goods_img', 'konten_produk');
            $update['goods_img'] = $this->uploadImageContentProduct('konten_produk', 'goods_img');
        } else {
            $update['goods_img'] = $this->input->post('old_image');
        }

        $this->crud->UpdateData('goods_content', 'content_id', $content_id, $update);
        redirect(base_url('admin/konten_produk'));
    }

    public function About()
    {
        $data = [
            'DataAbout' => $this->crud->getData('about_us')->result(),
            'content' => 'Admin/KontenAboutPage',
        ];

        $this->load->view('Admin/VBackend', $data);
    }

    public function AddDataAbout()
    {
        $add = [
            'about_desc' => $this->input->post('about_desc'),
            'about_img' => $this->uploadImageContentProduct('konten_about', 'about_img'),
        ];

        $this->crud->AddData('about_us', $add);

        redirect(base_url('admin/konten_about'));
    }

    public function UpdateDataAbout()
    {
        $about_id = $this->input->post('about_id');
        $update['about_desc'] = $this->input->post('about_desc');

        if (!empty($_FILES['about_img']['name'])) {
            $this->crud->deleteImage('about_us', 'about_id', $about_id, 'about_img', 'konten_about');
            $update['about_img'] = $this->uploadImageContentProduct('konten_about', 'about_img');
        } else {
            $update['about_img'] = $this->input->post('old_image');
        }

        $this->crud->UpdateData('about_us', 'about_id', $about_id, $update);
        redirect(base_url('admin/konten_about'));
    }

    public function Account()
    {
        $data = [
            'DataAccount' => $this->crud->getData('accounts')->result(),
            'content' => 'Admin/AccountPage',
        ];

        $this->load->view('Admin/VBackend', $data);
    }

    public function Transaction()
    {
        $data = [
            'DataTransaction' => $this->crud->getData('transactions')->result(),
            'content' => 'Admin/TransactionPage',
        ];

        $this->load->view('Admin/VBackend', $data);
    }

    public function TransactionDetail($id = null)
    {
        $data = [
            'content' => 'Admin/TransactionDetailPage',
        ];

        $this->load->view('Admin/VBackend', $data);
    }

    public function Testimonial()
    {
        $data = ['content' => 'Admin/KontenTestimonialPage'];

        $this->load->view('Admin/VBackend', $data);
    }
}
