<button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target="#large-Modal"> <i
        class="feather icon-plus"></i></button>
<div class="modal fade" style="z-index: 9999999" id="large-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Upload Image</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="image-gallery">
                    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image">Upload Image</label>
                                    <input type="file" id="image" name="images[]" class="form-control" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="preview-container"></div>
                        <button class="btn btn-danger">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .preview-container {
        display: flex;
        flex-wrap: wrap;
        margin-top: 10px;
    }

    .preview-container img {
        width: 100px;
        height: 100px;
        margin: 5px;
        object-fit: cover;
        border: 2px solid #ddd;
        padding: 5px;
        border-radius: 5px;
    }
</style>
