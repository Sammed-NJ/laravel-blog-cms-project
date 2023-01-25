<div class="col-lg-12">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title pb-0 mb-0">Craete a Post</h5>
            <hr class="pb-2">

            <!-- Vertical Form -->




            <form class="row g-3" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- TinyMCE Editor -->
                <textarea class="tinymce-editor" name="tinyMSCcontent"></textarea><!-- End TinyMCE Editor -->


                <div class="text-center ">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </form><!-- Vertical Form -->





        </div>
    </div>

</div>
