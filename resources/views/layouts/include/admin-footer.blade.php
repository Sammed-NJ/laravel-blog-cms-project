  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
      <div class="copyright">
          &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
          class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('/vendor/simple-datatables/simple-datatables.js') }}"></script>
  {{-- <script src="{{ asset('/vendor/tinymce/tinymce.min.js') }}"></script> --}}
  <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/js/admin-main.js') }}"></script>

  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
      integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="{{ asset('/js/main.jquery.js') }}"></script>

  <script src="https://cdn.tiny.cloud/1/xjea3acpg0hfgrazz18fnprabw5bpz1ufbetg5fpxci24zqa/tinymce/5/tinymce.min.js"
      referrerpolicy="origin"></script>

  <script>
      tinymce.init({
          selector: 'textarea',

          image_class_list: [{
              title: 'img-responsive',
              value: 'img-responsive'
          }, ],
          height: 500,
          setup: function(editor) {
              editor.on('init change', function() {
                  editor.save();
              });
          },
          plugins: [
              "advlist autolink lists link image charmap print preview anchor",
              "searchreplace visualblocks code fullscreen",
              "insertdatetime media table contextmenu paste imagetools"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

          image_title: true,
          automatic_uploads: true,
          images_upload_url: '/upload',
          file_picker_types: 'image',
          file_picker_callback: function(cb, value, meta) {
              var input = document.createElement('input');
              input.setAttribute('type', 'file');
              input.setAttribute('accept', 'image/*');
              input.onchange = function() {
                  var file = this.files[0];

                  var reader = new FileReader();
                  reader.readAsDataURL(file);
                  reader.onload = function() {
                      var id = 'blobid' + (new Date()).getTime();
                      var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                      var base64 = reader.result.split(',')[1];
                      var blobInfo = blobCache.create(id, file, base64);
                      blobCache.add(blobInfo);
                      cb(blobInfo.blobUri(), {
                          title: file.name
                      });
                  };
              };
              input.click();
          }
      });
  </script>




  </body>

  </html>
