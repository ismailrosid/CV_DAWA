<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TmstKategoriProdukModel; // Pastikan model ini di-import
use App\Models\TmstProdukModel; // Pastikan model ini di-import

class ProdukController extends Controller
{
    public function index()
    {
        return view('admin.pages.produk.index');
    }

    public function create()
    {
        // Ambil semua kategori dari database
        $kategori = TmstKategoriProdukModel::all(); // Mengambil semua data kategori

        // Kirim data kategori ke view
        return view('admin.pages.produk.create', compact('kategori')); // Menggunakan compact untuk mengirim variabel ke view
    }

    public function store(Request $request)
    {

        // Menggabungkan data tidak disarankan, tidak dikonsumsi bersama obat, komposisi, dan anjuran pemakaian menjadi string
        $tidak_disarankan = implode('|||', $request->input('tidak_disarankan', []));
        // $tidak_dikonsumsi_bersama_obat = implode('|||', $request->input('tidak_dikonsumsi_bersama_obat', []));
        $komposisi = implode('|||', array_filter($request->input('komposisi', [])));
        $anjuran_pemakaian = implode('|||', $request->input('anjuran_pemakaian', []));

        // Simpan data ke database
        $produk = new TmstProdukModel(); // Ganti ProdukModel dengan model yang sesuai
        $produk->id_kategori = $request->id_kategori;
        $produk->nama = $request->nama_produk;
        $produk->harga = floatval($request->harga);
        $produk->deskripsi = $request->deskripsi;
        $produk->tidak_disarankan = $tidak_disarankan; // Simpan sebagai string
        $produk->tidak_dikonsumsi_bersama_obat = $request->tidak_dikonsumsi_bersama_obat; // Simpan sebagai string
        $produk->komposisi = $komposisi; // Simpan sebagai string
        $produk->netto = $request->netto;
        $produk->satuan = $request->satuan;
        $produk->jml_halaman = $request->jml_halaman;
        $produk->anjuran_pemakaian = $anjuran_pemakaian; // Simpan sebagai string

        // Menyimpan gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName(); // Membuat nama file unik
            $file->move(public_path('/front/img/produk'), $filename); // Pindahkan file ke folder public/front/img/produk
            $produk->gambar = $filename; // Simpan nama file ke field gambar
        }

        $produk->save();

        return redirect()->route('admin.produk.index')->with('success', 'Data produk berhasil disimpan.');
    }
    public function edit($id)
    {
        // Mencari produk berdasarkan ID
        $produk = TmstProdukModel::findOrFail($id);
        // Ambil semua kategori dari database
        $kategori = TmstKategoriProdukModel::all(); // Mengambil semua data kategori
        // Mengonversi data yang digabungkan kembali menjadi array
        $produk->tidak_disarankan = explode('|||', $produk->tidak_disarankan);
        $input = $produk->komposisi;
        $produk->komposisi = explode('|||', $produk->komposisi);
        $produk->anjuran_pemakaian = explode('|||', $produk->anjuran_pemakaian);


        // Pisahkan berdasarkan "+++" untuk memproses data
        $groups = explode("+++", $input);

        $result = [];
        $currentKey = null;

        foreach ($groups as $group) {
            // Hapus spasi dan pastikan tidak ada grup kosong
            $group = trim($group);
            if ($group === "") {
                continue;
            }

            // Jika grup adalah sebuah kata kunci (seperti "test", "example", "demo")
            if (!is_numeric($group) && strpos($group, "|||") === false) {
                // Set nilai kunci yang akan digunakan
                $currentKey = $group;
            } else {
                // Pisahkan data dengan "|||"
                $items = explode("|||", trim($group, "|||"));

                // Tambahkan data dengan kunci dinamis
                $result[] = [$currentKey => $items];
            }
        }



        return view('admin.pages.produk.edit', compact('produk', 'kategori', 'result'));
    }


    public function update(Request $request, $id)
    {
        // Validasi data input (opsional)

        // Menggabungkan data tidak disarankan, tidak dikonsumsi bersama obat, komposisi, dan anjuran pemakaian menjadi string
        $tidak_disarankan = implode('|||', $request->input('tidak_disarankan', []));

        $komposisi = implode('|||', array_filter($request->input('komposisi', [])));
        $anjuran_pemakaian = implode('|||', $request->input('anjuran_pemakaian', []));

        // Temukan produk berdasarkan ID
        $produk = TmstProdukModel::findOrFail($id);
        $produk->id_kategori = $request->id_kategori;
        $produk->nama = $request->nama_produk;
        $produk->harga = floatval($request->harga);
        $produk->deskripsi = $request->deskripsi;
        $produk->tidak_disarankan = $tidak_disarankan;
        $produk->tidak_dikonsumsi_bersama_obat = $request->tidak_dikonsumsi_bersama_obat; // Simpan sebagai string
        $produk->komposisi = $komposisi;
        $produk->netto = $request->netto;
        $produk->satuan = $request->satuan;
        $produk->jml_halaman = $request->jml_halaman;
        $produk->anjuran_pemakaian = $anjuran_pemakaian;

        // Menyimpan gambar jika diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($produk->gambar) {
                $oldImagePath = public_path('front/img/produk/' . $produk->gambar);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Menghapus gambar lama dari server
                }
            }

            // Upload gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName(); // Membuat nama file unik
            $file->move(public_path('/front/img/produk'), $filename); // Pindahkan file ke folder public/gambar
            $produk->gambar = $filename; // Simpan nama file ke field gambar
        }


        // Simpan perubahan ke database
        $produk->update();

        return redirect()->route('admin.produk.index')->with('success', 'Data produk berhasil diperbarui.');
    }


    public function destroy($id)
    {
        // Mencari tumbuhan berdasarkan ID dan menghapusnya
        $tumbuhan = TmstProdukModel::find($id);
        if ($tumbuhan) {
            $tumbuhan->delete();
            return response()->json(['success' => 'Data tumbuhan berhasil dihapus.']);
        }
        return response()->json(['error' => 'Data tidak ditemukan.'], 404);
    }

    // Query dasar untuk mengambil data produk
    public function getData()
    {
        // Query dasar untuk mengambil data produk dengan relasi kategori
        $query = TmstProdukModel::with('kategori') // Mengaitkan model TmstKategoriProdukModel
            ->select('tmst_produk.id', 'tmst_produk.nama', 'tmst_produk.deskripsi', 'tmst_produk.id_kategori'); // Menentukan alias untuk kolom

        return datatables()->of($query)
            ->editColumn('kategori', function ($produk) {
                return $produk->kategori ? $produk->kategori->nama : 'Tidak ada'; // Menampilkan nama kategori
            })
            ->filterColumn('kategori', function ($query, $keyword) {
                // Filter berdasarkan nama kategori
                $query->whereHas('kategori', function ($q) use ($keyword) {
                    $q->where('nama', 'LIKE', "%{$keyword}%");
                });
            })
            ->orderColumn('kategori', function ($query, $order) {
                // Mengatur pengurutan berdasarkan nama kategori
                $query->leftJoin('tmst_kategori_produk', 'tmst_produk.id_kategori', '=', 'tmst_kategori_produk.id')
                    ->orderBy('tmst_kategori_produk.nama', $order) // Menentukan pengurutan berdasarkan nama kategori
                    ->select('tmst_produk.id', 'tmst_produk.nama', 'tmst_produk.deskripsi', 'tmst_produk.id_kategori', 'tmst_kategori_produk.nama as kategori_nama'); // Menambahkan kolom kategori_nama sebagai alias
            })
            ->make(true); // Mengembalikan data dalam format JSON
    }
}
