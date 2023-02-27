 <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
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

 </script>