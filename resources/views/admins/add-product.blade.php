@include('/admins/partials/header')
@include('/admins/partials/nav')
@include('/admins/partials/sidebar')

<div class="container-fluid"><br>
<div class="card mb-3">
        <div class="card-header">
        <h2 class="mt-3">Tambah Produk</h2>
        <form method="post" action="/students">
        @csrf
            <div class="form-group">
                <label for="nama">Nama Produk</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ old('nama') }}">
                @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="nrp">Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="nrp" placeholder="Masukan Harga" name="nrp" value="{{ old('harga') }}">
                @error('nrp')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="spesifikasi">Spesifikasi</label>
                <input type="text" class="form-control @error('spesifikasi') is-invalid @enderror" id="spesifikasi" placeholder="Spesifikasi Produk" name="spesifikasi" value="{{ old('spesifikasi') }}">
                @error('spesifikasi')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="stok">Stok Barang</label>
                <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok" placeholder="Masukan Stok Barang" name="stok" value="{{ old('stok') }}">
                @error('stok')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="image"></label>
                <input type="file" name="image">
                <label for="image"></label>
                <input type="file" name="image">
                <label for="image"></label>
                <input type="file" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Tambah Produk</button>
        </form>
        </div>
    </div>
</div>

@include('/admins/partials/footer')