<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page - Firza</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<style>
.btn1 {
  background-color: #A1C298; /* Hijau */
  border: none;
  color: white;
  padding: 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
}

.btn1 {
    font-size: 20px;

}

.foto {
    width: 135px;
    height: 125px;
    background: #A1C298;
    padding: 20px;
}

.nama {
    padding-left: 20px;
}

.btnedit {
    color: #A1C298;
}

.btndelete {
    color: red;
    border: 2px solid white;
    background: white;
}

</style>
<body style="background: #A1C298">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <div style="display : flex;">
                        <div class="foto">
                        <svg style="width:95px;height: 95px;" viewBox="0 0 24 24">
    <path fill="white" d="M19.5 1L18.41 3.41L16 4.5L18.41 5.59L19.5 8L20.6 5.59L23 4.5L20.6 3.41L19.5 1M12 2C6.5 2 2 6.5 2 12V22H22V12C22 10.53 21.67 9.13 21.1 7.87L19.86 10.59C19.94 11.05 20 11.5 20 12C20 16.43 16.43 20 12 20C7.57 20 4 16.43 4 12C4 11.96 4 11.91 4 11.87A10 10 0 0 0 9.74 6.31A10 10 0 0 0 17.5 10A10 10 0 0 0 18.83 9.91L17.35 6.65L12.6 4.5L16.13 2.9C14.87 2.33 13.47 2 12 2M9 11.75A1.25 1.25 0 0 0 7.75 13A1.25 1.25 0 0 0 9 14.25A1.25 1.25 0 0 0 10.25 13A1.25 1.25 0 0 0 9 11.75M15 11.75A1.25 1.25 0 0 0 13.75 13A1.25 1.25 0 0 0 15 14.25A1.25 1.25 0 0 0 16.25 13A1.25 1.25 0 0 0 15 11.75Z" />
</svg>
                        </div>
                        <div class="nama">
                        <h3>Hai admin!</h3>
                        <p>Selamat datang bapak paling guantenggg sejagat raya, aku akan menebus ketelatan yang dikarenakan sedang diterpa hujan badai angin ribut, dah aku modif biar beda mhehehew nilainya jangan kecil dongg plis plis</p>
                        </div>
                        </div>
                        <br>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">KONTEN</th>
                                <th scope="col">AKSI</th>
                               
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($blogs as $blog)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/blogs/').$blog->image }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{!! $blog->content !!}</td>
                                    <td class="text-center" style="width: 120px">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                            <a href="{{ route('blog.edit', $blog->id) }}" class="btnedit"><svg style="width:25px;height:25px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" /></svg></a>
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btndelete"><svg style="width:30px;height:30px" viewBox="0 0 24 24"><path fill="currentColor" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" /></svg></button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Blog belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $blogs->links() }}

                          <a href="{{ route('blog.create') }}" class="btn1 btn-block text-center mb-3" style="">Tambah konten <svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
</svg></a>


                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>