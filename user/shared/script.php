<!-- Vendor JS Files -->
<script src="/advisor/assets/vendor/purecounter/purecounter.js"></script>
<script src="/advisor/assets/vendor/aos/aos.js"></script>
<script src="/advisor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/advisor/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/advisor/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/advisor/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--  Main JS File -->
<script src="/advisor/assets/js/main.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable .card-block").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>

</html>