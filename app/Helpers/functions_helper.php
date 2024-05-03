<?php


function db($tabel, $db = null)
{
    if ($db == null || $db == 'emas') {
        $db = \Config\Database::connect();
    } else {
        $db = \Config\Database::connect(strtolower(str_replace(" ", "_", $db)));
    }
    $db = $db->table($tabel);

    return $db;
}


function url($req = null)
{

    $url = service('uri');
    $res = $url->getPath();
    if ($req == null) {
        if (settings()['online'] == 0) {
            $req = 2;
        } else {
            $req = 3;
        }
    } else {
        if (settings()['online'] == 0) {
            $req = $req - 1;
        }
    }

    $exp = explode("/", $res);

    if (array_key_exists($req, $exp)) {
        return $exp[$req];
    }


    return '';
}


function settings($order = null)
{
    $db = db('settings');

    $q = $db->get()->getRowArray();

    if ($order == null) {
        return $q;
    } else {
        return $q[$order];
    }
}

function check_role()
{
    $db = db('menu');

    $q = $db->where('role', session('role'))->where('controller', url())->get()->getRowArray();

    if (!$q) {
        gagal(base_url('home'), 'You are not allowed.');
    }
}

function sukses($url, $pesan)
{
    session()->setFlashdata('sukses', $pesan);
    header("Location: " . $url);
    die;
}

function gagal($url, $pesan)
{
    session()->setFlashdata('gagal', $pesan);
    header("Location: " . $url);
    die;
}

function sukses_js($pesan, $data = null, $data2 = null, $data3 = null, $data4 = null)
{
    $data = [
        'status' => '200',
        'message' => $pesan,
        'data' => $data,
        'data2' => $data2,
        'data3' => $data3,
        'data4' => $data4
    ];

    echo json_encode($data);
    die;
}

function gagal_js($pesan)
{
    $data = [
        'status' => '400',
        'message' => $pesan
    ];

    echo json_encode($data);
    die;
}

function clear($text)
{
    $text = trim($text);
    $text = htmlspecialchars($text);
    return $text;
}



function upper_first($text)
{
    $text = clear($text);
    $exp = explode(" ", $text);

    $val = [];
    foreach ($exp as $i) {
        $lower = strtolower($i);
        $val[] = ucfirst($lower);
    }

    return implode(" ", $val);
}

function menus()
{

    $db = db('menus');

    $q = $db->where('role', (session('role') ? session('role') : 'Guest'))->orderBy('urutan', 'ASC')->get()->getResultArray();

    return $q;
}

function menu($req = null)
{
    if ($req == null) {
        foreach (menus() as $i) {
            if ($i['controller'] == url()) {
                return $i;
            }
        }
    } else {
        foreach (menus() as $i) {
            if ($i['controller'] == $req) {
                return $i;
            }
        }
    }
}

function rupiah($uang)
{
    return 'Rp. ' . number_format($uang, 0, ",", ".");
}


function get_news($order = 'Headlines')
{
    $db = db('news');

    $q = $db->where('kategori', $order)->orderBy('created_at', 'DESC')->get()->getResultArray();

    return $q;
}

function get_cuplikan_berita($text, $jml_kata = 8)
{
    $txt = explode(" ", $text);
    $cuplikan = implode(" ", array_splice($txt, 0, $jml_kata));

    return $cuplikan;
}

function get_text($nama = 'landing_header_right_top', $order = 'single')
{
    $db = db('texts');

    $db->where('nama', $nama);
    if ($order == 'single') {
        $q = $db->get()->getRowArray();
    }
    if ($order == 'arr') {
        $q = $db->get()->getResultArray();
    }

    return $q;
}

function get_testimoni($order = 1)
{
    $db = db('testimoni');

    $q = $db->where('status', $order)->orderBy('created_at', 'DESC')->get()->getResultArray();
    return $q;
}
function get_product($order = 1)
{
    $db = db('products');

    $q = $db->where('status', $order)->orderBy('harga', 'ASC')->get()->getResultArray();
    return $q;
}
