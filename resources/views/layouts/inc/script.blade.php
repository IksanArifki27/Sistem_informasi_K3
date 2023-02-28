 <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/chart.js/Chart.min.js')}}"></script>
    
    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('template/js/demo/chart-pie-demo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{asset('template/js/demo/chart-pie-demo2.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



 <script>
   // delete pengumuman
$('.delete').click(function(){
   var dataId = $(this).attr('data-id');
      swal({
   title: "Apa Anda yakin?",
   text: "Apa Anda Yakin Menghapus Permanen Data Ini!",
   icon: "warning",
   buttons: true,
   dangerMode: true,
   })
   .then((willDelete) => {

      if (willDelete) {
      window.location = "/hapusData/"+dataId+""
      swal("Selamat,Data Berhasil Dihapus!", {
         icon: "success",
      });
   } else {
      swal("Data Tidak Jadi dihapus");
   }
   });
});

 $('.hapus').click(function(){
   var dataId = $(this).attr('data-id-hapus');
      swal({
   title: "Apa Anda yakin?",
   text: "Apa Anda Yakin Menghapus Permanen Data Ini!",
   icon: "warning",
   buttons: true,
   dangerMode: true,
   })
   .then((willDelete) => {

      if (willDelete) {
      window.location = "/deletePenghargaan/"+dataId+""
      swal("Selamat,Data Berhasil Dihapus!", {
         icon: "success",
      });
   } else {
      swal("Data Tidak Jadi dihapus");
   }
   });
});
// Tambah Stok / Barang Masuk
  $(document).ready(function () {
                $('.selectLokasi').on('change', function () {
                let id = $(this).val();
                $('.selectBarang').empty();
                $('.selectBarang').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'formTambah/' + id,
                success: function (response) {
               //  var response = JSON.parse(response);
               //  console.log(response);   
                $('.selectBarang').empty();
                $('.selectBarang').append(`<option value="0" disabled selected>-- Pilih barang--</option>`);
                response.forEach(element => {
                    $('.selectBarang').append(`<option value="${element['id']}">${element['nama']}</option>`);
                    });
                }
            });
        });
    });

   // Input Stok / Barang Keluar
 $(document).ready(function () {
                $('.selectLokasiKeluar').on('change', function () {
                let id = $(this).val();
                $('.selectBarangKeluar').empty();
                $('.selectBarangKeluar').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'inputPemakaian/' + id,
                success: function (response) {
               //  var response = JSON.parse(response);
               //  console.log(response);   
                $('.selectBarangKeluar').empty();
                $('.selectBarangKeluar').append(`<option value="0" disabled selected>-- Pilih barang--</option>`);
                response.forEach(element => {
                    $('.selectBarangKeluar').append(`<option value="${element['id']}">${element['nama']}</option>`);
                    });
                }
            });
        });
});


 </script>