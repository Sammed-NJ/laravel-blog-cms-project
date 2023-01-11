<x-admin-master>
    @section('content')
        <div class="container full-height">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Multi Columns Form</h5>

                    <!-- Multi Columns Form -->
                    <form class="row g-3" method="post" action="{{ route('post.store') }}" enctype="multipart/form">
                        @csrf
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Blog Title</label>
                            <input type="text" class="form-control" id="inputName5" name="title"
                                placeholder="Enter your blog title">
                        </div>
                        <div class="col-md-12">
                            <label for="inputNumber" class="form-label">Upload File</label>
                            <input class="form-control" type="file" id="formFile" name="post_image">
                        </div>

                        <div class="col-md-12">
                            <label for="inputPassword" class="form-label">Textarea</label>
                            <textarea class="form-control" style="height: 100px" name="body" placeholder="Write your blog post"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End Multi Columns Form -->

                </div>
            </div>
        </div>
    @endsection
</x-admin-master>
