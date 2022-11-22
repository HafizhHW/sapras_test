# BUG
- Print barang berdasarkan tempat
    - Apakah tempat perlu di buatkan table kembali..?
    - Saat ini sudah ada tbl_tempat, hanya saja belum di tampilkan di menu admin. dan belum bisa menambahkan tempat.
- Belum bisa kurang(trigger) stok pada tbl_transaksi, tbl_barang, tbl_barang_rusak
- Belum ada function barang yang dikembalikan setelah transaksi
- Belum ada validasi membuat username dan password. Misalnya username harus Admin123$(mengandung Huruf, angka/karakter unik dan min 6) 
  dan password harus mengadung uppercase dan angka
- user masih bisa akses menu admin lewat URL (Cek Lagi)
- validasi saat upload file/document
    + Jika file/document kososng maka upload 
    + Jika file/document terisi maka lakukan validasi types file dan max_size (3Mb)
- Username saat login masih bisa login dengan menggunakan lowercase(tidak case sensitive) yang seharusnya case sensitive.
- Fitur Print masih belum maksimal