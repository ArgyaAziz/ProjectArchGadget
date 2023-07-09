<form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="video">
    <input type="text" name="title" placeholder="Judul video">
    <!-- tambahkan kolom lain yang diperlukan -->
    <button type="submit">Unggah</button>
</form>
