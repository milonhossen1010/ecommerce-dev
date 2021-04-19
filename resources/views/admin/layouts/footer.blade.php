 @php
     $crt = App\Models\Setting::find(1);
 @endphp
<!-- footer start-->
  <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 footer-copyright">
                <p class="mb-0">{{ $crt -> crt }}</p>
            </div>
            <div class="col-md-6">
              
            </div>
        </div>
    </div>
</footer>
<!-- footer end-->