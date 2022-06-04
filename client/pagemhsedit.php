<h3>Edit Data Mahasiswa <span id="txEDIT"></span></h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Berhasil di update
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal di update
</div>

    <form id="tambahbaru" method="POST">
        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">NIM</label>
            <div class="col-sm-8 col-lg-9">
                <input type="text" class="form-control" id="txNIM" readonly>
            </div>
        </div>   
        
        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">NAMA</label>
            <div class="col-sm-8 col-lg-9">
                <input type="text" class="form-control" id="txNAMA" placeholder="Masukkan Nama Lengkap">
            </div>
        </div> 
        
        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">JENIS KELAMIN</label>
            <div class="col-sm-8 col-lg-9">
                <select id="txJK" class="form-select">
                    <option value="L">Laki - Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
        </div> 
        
        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">JURUSAN</label>
            <div class="col-sm-8 col-lg-9">
                <select id="txJUR" class="form-select">
                    <option value="MTI">MTI</option>
                    <option value="SK">SK</option>
                    <option value="KAB">KAB</option>
                </select>
            </div>
        </div>  

                    

                
                
        <button type="button" onclick = "batal()" class="btn btn-danger">Kembali</button>
        <button type="button" onclick = "update()" class="btn btn-primary">Simpan</button>
                
    </form>

    <script src="pagemhscaridata.js"></script>
    <script src="pagemhseditdata.js"></script>
    <script>
        document.getElementById("sukses").style.display="none";
        document.getElementById("gagal").style.display="none";
    </script>

