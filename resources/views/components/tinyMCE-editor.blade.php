<div class="col-lg-12">

    <div class="card">
        <div class="card-body">
            {{-- <h5 class="card-title pb-0 mb-0">Craete a Post</h5>
            <hr class="pb-2"> --}}

            <!-- Vertical Form -->




            <form class="row g-3" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title pb-0 mb-0">Craete a Post</h5>
                    <div class="card-title pb-0 mb-0">
                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                    </div>
                </div>
                <hr class="pb-2">
                @csrf

                <div class="form-floating col-6">
                    <input type="text" id="title" class="form-control" id="floatingInput" name="title"
                        placeholder="Post Title">
                    <label for="floatingInput" class="px-3">Enter Post Title</label>
                    @error('title')
                        <div class="alert alert-danger py-1 mt-2" role="alert">
                            <i class="bi bi-exclamation-octagon me-1"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating  col-6">
                    <input type="text" id="description" class="form-control" id="floatingInput" name="description"
                        placeholder="Post description">
                    <label for="floatingInput" class="px-3">Enter Post Description</label>
                    @error('description')
                        <div class="alert alert-danger py-1 mt-2" role="alert">
                            <i class="bi bi-exclamation-octagon me-1"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- <div class="col-12">
                    <label for="inputNumber" class="form-label">File Upload</label>
                    <input class="form-control" type="file" id="post-img" name="posts_images">
                    @error('posts_images')
                        <div class="alert alert-danger py-1 mt-2" role="alert">
                            <i class="bi bi-exclamation-octagon me-1"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div> --}}

                <!-- TinyMCE Editor -->
                <textarea class="tinymce-editor" name="tinyMSCcontent"></textarea><!-- End TinyMCE Editor -->



            </form><!-- Vertical Form -->





        </div>
    </div>

</div>
