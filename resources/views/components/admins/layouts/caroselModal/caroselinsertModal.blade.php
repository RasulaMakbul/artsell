<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="addCaroselModal" tabindex="-1" aria-labelledby="addCarosalModalLabel" aria-hidden="true">
    <form action="#" method="post" id="addCaroselForm">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addModalLabel"><i class="las la-plus"></i>Add Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="errorMsgContainer mb-3">

                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control mt-2" name="title" id="title">
                    </div>
                    <div class="form-group mt-3">
                        <label for="link">Link</label>
                        <input type="text" class="form-control mt-2" name="link" id="link">
                    </div>
                    <div class="form-group mt-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="image">image</label>
                        <input type="file" class="form-control mt-2" name="image" id="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add_carosel"><i class="las la-plus"></i> Add</button>
                </div>
            </div>
        </div>
    </form>
</div>